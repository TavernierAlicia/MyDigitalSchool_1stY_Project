<?php
include_once '/../../config/connexion.php';

if(isset($_POST['modify'])){
    session_start();
    if($_FILES['photo']['size']>0){
        if($_POST['path'] != null){
            unlink('../../uploads/users/'.$_POST['path']);
        }
        $name = date('Ymdhis') . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        move_uploaded_file($_FILES["photo"]["tmp_name"], '../../uploads/users/' . $name);
    }
        $req = $conn->prepare('UPDATE users SET nom =:nom,prenom=:prenom, email=:email,adresse=:adresse,naissance=:naissance,sexe=:sexe,photo=:photo,feliere=:feliere,specialite=:specialite,niveau=:niveau,bio=:bio WHERE id = :id');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'email' =>$_POST['email'],
        'adresse' =>$_POST['adresse'],
        'naissance' =>$_POST['naissance'],
        'sexe' =>$_POST['sexe'],
        'photo' =>$name,
        'feliere' =>$_POST['feliere'],
        'specialite' =>$_POST['specialite'],
        'niveau' =>$_POST['niveau'],
        'bio' => $_POST['bio'],
        'id'=>$_SESSION['connecter']
    )) or die(print_r($req->errorInfo()));

    header('Location: /../../education/profile.php');
}else if(isset($_POST['pass'])){
    session_start();
    $req = $conn->prepare('UPDATE users SET password =:password WHERE id =:id');
    $req->execute(array(
        'password' => md5($_POST['password']),
        'id'=>$_SESSION['connecter']
    )) or die(print_r($req->errorInfo()));
    session_destroy();
    header('Location: /../../education/login.php');
}else{
    if ($_SESSION['role'] == 'etudiant') {
        $user = $conn->query("SELECT us.adresse AS 'adresse', us.bio AS 'bio' ,us.naissance AS 'naissance' ,us.sexe AS 'sexe', us.id AS 'id',us.nom AS'nom',us.prenom AS'prenom',us.email AS 'email', us.bio AS'bio',us.role AS'role',us.photo AS'photo',s.nom AS'specialite',f.nom AS'feliere',n.nom AS 'niveau'
                                    FROM users us ,speciality s , feliere f,niveau n
                                    WHERE us.feliere=f.id AND us.specialite=s.id AND us.niveau =n.id AND us.id=". $_SESSION['connecter']);
        $u = $user->fetch();
        $feliere = $conn->query("SELECT * FROM feliere");
        $specialite = $conn->query("SELECT * FROM speciality GROUP BY nom");
        $niveau = $conn->query("SELECT * FROM niveau");
    } else {
        $user = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['connecter']);
        $u = $user->fetch();
    }
}
?>