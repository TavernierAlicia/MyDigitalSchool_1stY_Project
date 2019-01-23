<?php
//connexion base de donnee
include_once '/../../config/connexion.php';
// ajout evenement
if (isset($_POST['ajout'])) {
    //upload photo
    for ($i = 0; $i < count($_FILES['cours']['name']); $i++) {
        $name = date('Ymdhis') . '.' . pathinfo($_FILES['cours']['name'][$i], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["cours"]["tmp_name"][$i], '../../uploads/events/' . $name);
    }

//insertion dans base des donnee les cours
    $req = $conn->prepare('INSERT INTO evenement (titre,date_created,date_deb,date_fin,lieux,description,photo)VALUES (:titre,:created,:deb,:fin,:lieux,:description,:photo )');
    $req->execute(array(
        'titre' => $_POST['titre'],
        'created' => date("Y-m-d H:i:s"),
        'deb' => $_POST['debut'],
        'fin' => $_POST['fin'],
        'lieux' => $_POST['lieu'],
        'description' => $_POST['description'],
        'photo' => $name
    )) or die(print_r($req->errorInfo()));

    header('Location: /../../education/events.php');
}


// -------- affichage evenements ----------
if(isset($_GET['ide'])){
    $event= $conn->query("SELECT * FROM evenement WHERE id=".$_GET['ide']);
    $events = $conn->query("SELECT * FROM evenement ORDER BY id DESC LIMIT 3");
}else{
    $events = $conn->query("SELECT * FROM evenement ORDER BY id DESC");
}
?>