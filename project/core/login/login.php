<?php
include_once '/../../config/connexion.php';

//verifier le login
$req = $conn->prepare('SELECT * FROM users WHERE email= :email AND password= :pass');
$req->execute(array(
    'email' => $_POST['email'],
    'pass' => md5($_POST['password']),
)) or die(print_r($req->errorInfo()));
$count = $req->rowCount();

//login valide
if ($count == 1) {
    $login = $req->fetch();
    //verifier l'activation de compte
    if($login['activated']==1){
        session_start();
        $_SESSION['connecter'] = $login['id'];
        $_SESSION['role'] = $login['role'];
        setcookie('connected', $login['id'], time() + 24 * 3600);
        setcookie('roles', $login['role'], time() + 24 * 3600);
        var_dump($_COOKIE);
        header('Location: /../../education/index.php');
    }else{
        header('Location: /../../education/login.php?erreur=active');
    }
//login invalide
}else{
    header('Location: /../../education/login.php?erreur=login');
}

?>