<?php
//connexion base de donnee
include_once '/../../config/connexion.php';

//Afficher liste des etudiants
$etudiant = $conn->query("SELECT us.adresse AS 'adresse', us.bio AS 'bio' ,us.naissance AS 'naissance' ,us.sexe AS 'sexe', us.id AS 'id',us.nom AS'nom',us.prenom AS'prenom',us.email AS 'email',us.role AS'role',us.photo AS'photo',us.date_created AS 'creation',s.nom AS'specialite',f.nom AS'feliere',n.nom AS 'niveau',us.activated AS'statut'
                                    FROM users us ,speciality s , feliere f,niveau n
                                    WHERE us.feliere=f.id AND us.specialite=s.id AND us.niveau =n.id AND us.role= 'etudiant'");
//Afficher liste des professeurs
$professeur = $conn->query("SELECT us.activated AS'statut',us.adresse AS 'adresse', us.bio AS 'bio' ,us.naissance AS 'naissance' ,us.sexe AS 'sexe', us.id AS 'id',us.nom AS'nom',us.prenom AS'prenom',us.email AS 'email',us.role AS'role',us.photo AS'photo',us.date_created AS 'creation'
                                    FROM users us 
                                    WHERE us.role= 'professeur'");

//desactivation des comptes
if(isset($_GET['idd'])){
    $user = $conn->query("SELECT * FROM users WHERE id=".$_GET['idd']);
    $u = $user->fetch();
    if($u['activated'] == 0){
        $req = $conn->query("UPDATE users SET activated = 1 WHERE id=".$_GET['idd']);
    }else{
        $req = $conn->query("UPDATE users SET activated = 0 WHERE id=".$_GET['idd']);
    }

    header('Location: /../../education/user.php');
}
?>