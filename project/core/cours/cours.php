<?php
//connexion base de donnee
include_once '/../../config/connexion.php';

$filiere = $conn->query("SELECT * FROM feliere");
$filiereTab = $conn->query("SELECT * FROM feliere");

function posChaine($c)
{
    $i = 0;
    foreach ($_POST as $key => $value) {
        $pos = stripos($key, $c);
        if ($pos !== false) {
            $i++;
        }
    }
    return $i;
}

// -------- ajout cours ---------
if (isset($_POST['ajout'])) {
    $spec = array();
    $mat = array();
    foreach ($_POST as $key => $value) {
        $pos = stripos($key, "spe");
        if ($pos !== false) {
            $posEnd = strripos($key, 'c');
            $posStart = strripos($key, 'p');
            $posi = $posEnd - $posStart;
            $specialite = substr($key, 3, $posi - 2);
            array_push($spec, $specialite);

            $posEndc = strlen($key);
            $posStartc = strripos($key, 'r') + 1;
            $matiere = substr($key, $posStartc, $posEndc - $posStartc);
            array_push($mat, $matiere);
        }

    }
//upload les cours
    $cours = array();
    for ($i = 0; $i < count($_FILES['cours']['name']); $i++) {
        $name = date('Ymdhis') . '.' . pathinfo($_FILES['cours']['name'][$i], PATHINFO_EXTENSION);
        array_push($cours, $name);
        move_uploaded_file($_FILES["cours"]["tmp_name"][$i], '../../uploads/cours/' . $name);
    }

//insertion dans base des donnee les cours
    $req = $conn->prepare('INSERT INTO cours (titre,cours,date_created,description)VALUES (:titre,:cours , :created ,:description )');
    $req->execute(array(
        'titre' => $_POST['titre'],
        'cours' => implode(', ', $cours),
        'description' => $_POST['description'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));

    $cour = $conn->query("SELECT * FROM cours ORDER BY id DESC LIMIT 1");
    session_start();
    while ($id = $cour->fetch()) {
        for ($i = 0; $i < count($mat); $i++) {
            $req = $conn->prepare('INSERT INTO unite (cours,matiere,specialite,professeur,date_created)VALUES (:cours,:matiere,:specialite,:profeseur ,:created)');
            $req->execute(array(
                'cours' => $id['id'],
                'matiere' => $mat[$i],
                'specialite' => $spec[$i],
                'profeseur' => $_SESSION['connecter'],
                'created' => date("Y-m-d H:i:s")
            )) or die(print_r($req->errorInfo()));
        }
    }
    header('Location: /../../education/courses.php');
}


// -------- affichage cours ---------
if (isset($_GET['idc']) && isset($_GET['idm'])) {
    $cours = $conn->query("SELECT us.email AS 'email', CONCAT(us.nom , ' ', us.prenom) AS 'prof',co.description AS 'remarque',co.cours AS 'document',co.titre AS 'nom'
                                     FROM unite u,matiere ma,cours co ,users us,speciality s
                                     WHERE u.matiere=" . $_GET['idc'] . " AND u.specialite = s.id AND us.id=u.professeur AND co.id=u.cours AND u.matiere = ma.id AND u.specialite=".$_GET['idm']);
    $module = $conn->query("SELECT * FROM modules WHERE id=" . $_GET['idc']);
}

?>