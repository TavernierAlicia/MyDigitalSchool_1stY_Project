<?php
//connexion base de donnee
include_once '/../../config/connexion.php';
//insertion les commentaires
if (isset($_POST['contact'])) {
    $req = $conn->prepare('INSERT INTO contact (email,propose,sujet,nom_complet,message,date_created)VALUES (:email,:propose,:sujet,:nom,:contenu,:created)');
    $req->execute(array(
        'email' => $_POST['email'],
        'propose' => $_POST['propose'],
        'sujet' => $_POST['sujet'],
        'nom' => $_POST['nom'],
        'contenu' => $_POST['contenu'],
        'created' => date("Y-m-d H:i:s"),
    )) or die(print_r($req->errorInfo()));
    
    mail('afef.hnid@gmail.com',$_POST['email'],$_POST['contenu']);
    header('Location: /../../education/contact.php?success=1');
}
?>