<?php
//connexion base de donnee
include_once '/../config/connexion.php';
//utilisateur connecter
$user = $conn->query('SELECT * FROM users WHERE id='.$_SESSION['connecter']);
//cours
while($con=$user->fetch()){
    $cours = $conn->query("SELECT m.id AS 'id', c.titre AS 'nom',c.date_created AS 'dateC', c.description AS 'remarque',m.nom AS 'matiere',mo.nom AS 'module', mo.id AS 'idm',CONCAT(us.nom , ' ', us.prenom) AS 'prof'
                                       FROM cours c,unite u,matiere m, speciality s,modules mo,programme p ,users us 
                                       WHERE c.id=u.cours AND u.matiere = m.id AND p.matiere =m.id AND p.modules=mo.id AND p.specialite =s.id AND u.professeur =us.id AND u.specialite =".$con['specialite']." AND p.specialite =".$con['specialite']."
                                       ORDER BY c.date_created DESC LIMIT 3");
}
//cours Total
$coursN = $conn->query("SELECT * FROM cours");

//dernier 3 publication de forum
$publication = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',c.nom AS 'categorie' ,p.date_created AS'dateC'
                                      FROM publication p,users us,category c 
                                      WHERE p.categorie=c.id AND p.auteur = us.id 
                                      ORDER BY p.id DESC 
                                      LIMIT 3");


//tous les utilisateurs
$users = $conn->query('SELECT * FROM users');

//utilisateurs(proffesseur)
$teachers = $conn->query('SELECT * FROM users WHERE role="professeur"');
?>