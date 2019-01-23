<?php
//connexion base de donnee
include_once '/../../config/connexion.php';

//insertion les commentaires
    session_start();
    $req = $conn->prepare('INSERT INTO commentaire (contenu,date_created,publication,users)VALUES (:contenu,:created,:publication,:users)');
    $req->execute(array(
        'contenu' => $_POST['commentaire'],
        'created' => date("Y-m-d H:i:s"),
        'publication' => $_POST['publication'],
        'users' => $_SESSION['connecter']
    )) or die(print_r($req->errorInfo()));


    $return = array();
    $commentaire = $conn->query("SELECT co.contenu AS 'contenu',co.date_created AS'dateC',CONCAT(us.nom,' ',us.prenom)AS'comment',us.photo AS'photo',us.sexe AS'sexe' FROM publication p,users us,commentaire co WHERE co.users = us.id AND co.publication=p.id AND co.publication=" . $_POST['publication']." ORDER BY co.date_created DESC LIMIT 1");
    $c = $commentaire->fetch();
    $json = json_encode($c);
    echo $json;

?>