<?php
//connexion base de donnee
include_once '/../../config/connexion.php';

$filiere = $conn->query("SELECT * FROM feliere");
$filieres = $conn->query("SELECT * FROM feliere");
$filieress = $conn->query("SELECT * FROM feliere");
$specialite = $conn->query("SELECT s.id AS 'id',s.nom AS'nom',s.date_created AS'creation',s.feliere AS 'idf',s.niveau AS 'idn',f.nom AS'feliere',n.nom AS'niveau' FROM feliere f,speciality s,niveau n WHERE s.feliere = f.id AND s.niveau = n.id");
$niveau = $conn->query("SELECT * FROM niveau");
$niveaux = $conn->query("SELECT * FROM niveau");
$niveauxx= $conn->query("SELECT * FROM niveau");
$matiere= $conn->query("SELECT * FROM matiere");
$module= $conn->query("SELECT * FROM modules");
$matiereA= $conn->query("SELECT * FROM matiere");
$moduleA= $conn->query("SELECT * FROM modules");
$specialiteA = $conn->query("SELECT s.id AS 'id',s.nom AS'nom',s.date_created AS'creation',s.feliere AS 'idf',s.niveau AS 'idn',f.nom AS'feliere',n.nom AS'niveau' FROM feliere f,speciality s,niveau n WHERE s.feliere = f.id AND s.niveau = n.id");
$matiereM= $conn->query("SELECT * FROM matiere");
$moduleM= $conn->query("SELECT * FROM modules");
$specialiteM = $conn->query("SELECT s.id AS 'id',s.nom AS'nom',s.date_created AS'creation',s.feliere AS 'idf',s.niveau AS 'idn',f.nom AS'feliere',n.nom AS'niveau' FROM feliere f,speciality s,niveau n WHERE s.feliere = f.id AND s.niveau = n.id");
$programme= $conn->query("SELECT p.id AS'id',p.specialite AS'ids',p.modules AS'idm',p.matiere AS'idma', s.nom AS'specialite', n.nom AS'niveau',m.nom AS 'module',ma.nom AS 'matiere',p.date_created AS'creation' FROM programme p,speciality s,matiere ma,modules m,niveau n WHERE s.id=p.specialite AND ma.id=p.matiere AND p.modules=m.id AND n.id=s.niveau");

//ajout feliere
if(isset($_POST['ajoutFeliere'])) {
    $req = $conn->prepare('INSERT INTO feliere (nom,date_created)VALUES (:nom , :created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
//modification feliere
}else if(isset($_POST['modFeliere'])){
    $req = $conn->query("UPDATE feliere SET nom ='".$_POST['nom']."' WHERE id=".$_POST['id']);
    header('Location: /../../education/scolarite.php');
}



//ajout specialite
if(isset($_POST['ajoutSpecialite'])) {
    $req = $conn->prepare('INSERT INTO speciality (nom,niveau,feliere,date_created)VALUES (:nom ,:niveau,:feliere, :created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'niveau' => $_POST['niveau'],
        'feliere' => $_POST['feliere'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
//modification specialite
}else if(isset($_POST['modSpecialite'])){
    $req = $conn->prepare("UPDATE speciality SET nom = :nom,niveau= :niveau,feliere =:feliere WHERE id= :id");
    $req->execute(array(
        'nom' => $_POST['nomSpecialite'],
        'niveau' =>  $_POST['nivSpecialite'],
        'feliere' =>  $_POST['felSpecialite'],
        'id' => $_POST['idSpecialite']
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
}


//ajout niveau
else if(isset($_POST['ajoutNiveau'])) {
    $req = $conn->prepare('INSERT INTO niveau (nom,date_created)VALUES (:nom , :created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
//modification niveau
}else if(isset($_POST['modNiveau'])){
    $req = $conn->query("UPDATE niveau SET nom ='".$_POST['nom']."' WHERE id=".$_POST['id']);
    header('Location: /../../education/scolarite.php');
}

//ajout matiere
else if(isset($_POST['ajoutMatiere'])) {
    $req = $conn->prepare('INSERT INTO matiere (nom,date_created)VALUES (:nom , :created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
//modification matiere
}else if(isset($_POST['modMatiere'])){
    $req = $conn->query("UPDATE matiere SET nom ='".$_POST['nom']."' WHERE id=".$_POST['id']);
    header('Location: /../../education/scolarite.php');
}

//ajout module
else if(isset($_POST['ajoutModule'])) {
    $req = $conn->prepare('INSERT INTO modules (nom,date_created)VALUES (:nom , :created)');
    $req->execute(array(
        'nom' => $_POST['nom'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
//modification module
}else if(isset($_POST['modModule'])){
    $req = $conn->query("UPDATE modules SET nom ='".$_POST['nom']."' WHERE id=".$_POST['id']);
    header('Location: /../../education/scolarite.php');
}

//ajout programme
if(isset($_POST['ajoutProgramme'])) {
    $req = $conn->prepare('INSERT INTO programme (specialite,modules,matiere,date_created)VALUES (:specialite,:modules,:matiere,:created)');
    $req->execute(array(
        'specialite' => $_POST['specialite'],
        'modules' => $_POST['module'],
        'matiere' => $_POST['matiere'],
        'created' => date("Y-m-d H:i:s")
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
//modification programme
}else if(isset($_POST['modProgramme'])){
    $req = $conn->prepare("UPDATE programme SET specialite = :specialite,modules= :modules,matiere =:matiere WHERE id= :id");
    $req->execute(array(
        'specialite' => $_POST['nomSpecialite'],
        'modules' =>  $_POST['progModule'],
        'matiere' =>  $_POST['progMatiere'],
        'id' => $_POST['idProgramme']
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/scolarite.php');
}

?>