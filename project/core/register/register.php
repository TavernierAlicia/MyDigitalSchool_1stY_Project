<?php
include_once '/../../config/connexion.php';

if(isset($_POST['etudiant'])) {
    $req = $conn->prepare('INSERT INTO users (nom,prenom,email,niveau,specialite,feliere,password,activated,role,date_created)VALUES (:nom,:prenom , :email ,:niveau ,:specialite, :feliere ,:pass ,:activated,:role,:created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'niveau' => $_POST['niveau'],
        'specialite' => $_POST['specialite'],
        'feliere' => $_POST['feliere'],
        'pass' => md5($_POST['password']),
        'activated' => 1,
        'role' => 'etudiant',
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));

}else{
    $req = $conn->prepare('INSERT INTO users (nom,prenom,email,password,activated,role,date_created)VALUES (:nom,:prenom , :email ,:pass ,:activated,:role,:created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' => $_POST['email'],
        'pass' => md5($_POST['password']),
        'activated' => 1,
        'role' => 'professeur',
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
}
header('Location: /../../education/login.php');
?>