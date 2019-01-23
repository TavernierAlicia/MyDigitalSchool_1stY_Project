<?php
//connexion base de donnee
include_once '/../../config/connexion.php';
$filiere = $conn->query("SELECT * FROM feliere");
if (isset($_GET['idc'])) {
    $cours = $conn->query("SELECT * FROM cours WHERE id=" . $_GET['idc']);
    $c = $cours->fetch();
}else if (isset($_GET['idd']) && isset($_GET['spec']) ){
    $unite= $conn->query("SELECT * FROM unite WHERE cours=".$_GET['idd']);
    $u = $unite->rowCount();
    if($u<2){
        $c= $conn->query("SELECT * FROM cours WHERE id=".$_GET['idd']);
        $cour = $c->fetch();
        $doc = explode(",", $cour['document']);
        foreach($doc as $d) {
            unlink('../../uploads/cours/' . $d);
        }
        $req = $conn->query("DELETE  FROM cours WHERE id=" . $_GET['idd']);
    }
    $req = $conn->query("DELETE  FROM unite WHERE cours=" . $_GET['idd']." AND specialite=".$_GET['spec']);
    header('Location: /../../education/liste-cours.php');
}else{
    $cours = $conn->query("SELECT co.id AS 'id', co.date_created AS 'dateC', ma.nom 'matiere',co.description AS 'remarque',co.cours AS 'document',co.titre AS 'nom',s.id AS 'specid',s.nom AS'specialite',n.nom AS'niveau' 
                                     FROM unite u,matiere ma,cours co ,users us,speciality s,niveau n 
                                     WHERE n.id=u.specialite AND u.specialite = s.id AND us.id=u.professeur AND co.id=u.cours AND u.matiere = ma.id AND u.professeur=" . $_SESSION['connecter']);

}
?>