<?php
//connexion base de donnee
include_once '/../../config/connexion.php';

 // -------- ajout evenement ----------
if (isset($_POST['ajout'])) {
    //upload photo
    $name = date('Ymdhis') . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES["photo"]["tmp_name"], '../../uploads/forum/' . $name);

//insertion dans base des donnee les cours
    session_start();
    $req = $conn->prepare('INSERT INTO publication (titre,description,photo,date_created,auteur,categorie)VALUES (:titre,:description,:photo,:created,:auteur,:categorie)');
    $req->execute(array(
        'titre' => $_POST['titre'],
        'description' => $_POST['description'],
        'photo' => $name,
        'created' => date("Y-m-d H:i:s"),
        'auteur' => $_SESSION['connecter'],
        'categorie' => $_POST['categorie']
    )) or die(print_r($req->errorInfo()));

    header('Location: /../../education/forum.php?page=1');
} // -------- affichage des publication ----------
else if (isset($_GET['page'])) {
    $categorie = $conn->query("SELECT * FROM category");
    $start = ($_GET['page'] - 1) * 8;
    $end = $_GET['page'] * 8;
    if (isset($_GET['date'])) {
        $publication = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',ca.nom AS 'categorie' FROM publication p,users us,category ca WHERE p.auteur = us.id AND  p.categorie=ca.id AND p.date_created LIKE '%" . $_GET['date'] . "%' LIMIT " . $start . "," . $end);
        $publ = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',ca.nom AS 'categorie' FROM publication p,users us,category ca WHERE p.auteur = us.id AND  p.categorie=ca.id AND p.date_created LIKE '%" . $_GET['date'] . "%'");
    } else if (isset($_GET['gid'])) {
        $publication = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',ca.nom AS 'categorie' FROM publication p,users us,category ca WHERE p.auteur = us.id AND p.categorie=ca.id AND p.categorie =" . intval($_GET['gid']) . " LIMIT " . $start . "," . $end);
        $publ = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',ca.nom AS 'categorie' FROM publication p,users us,category ca WHERE p.auteur = us.id AND p.categorie=ca.id AND p.categorie=" . $_GET['gid']);
    } else {
        $publication = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',ca.nom AS 'categorie' FROM publication p,users us,category ca WHERE p.auteur = us.id AND p.categorie=ca.id ORDER BY id DESC LIMIT " . $start . "," . $end);
        $publ = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',ca.nom AS 'categorie' FROM publication p,users us,category ca WHERE p.auteur = us.id AND p.categorie=ca.id");
    }
    $archive = array();
    for ($i = 0; $i < 13; $i++) {
        $a = array();
        $a['month'] = date('F Y', strtotime("-$i month", strtotime(date('F Y'))));
        $compar = date('Y-m', strtotime("-$i month", strtotime(date('Y-m'))));
        $a['search'] = $compar;
        $pub = $conn->query('SELECT id FROM publication WHERE date_created LIKE "%' . $compar . '%"');
        $a['nbr'] = $pub->rowCount();
        array_push($archive, $a);
    }

} else if (isset($_GET['pid'])) {
    $categorie = $conn->query("SELECT * FROM category");
    $publication = $conn->query("SELECT p.id AS 'id',p.titre AS'titre',p.photo AS'photo',p.description AS'description',p.date_created AS'dateA',CONCAT(us.nom,' ',us.prenom)AS'auteur',c.nom AS 'categorie' FROM publication p,users us,category c WHERE p.categorie=c.id AND p.auteur = us.id AND p.id=" . intval($_GET['pid']));
    $commentaire = $conn->query("SELECT co.contenu AS 'contenu',co.date_created AS'dateC',CONCAT(us.nom,' ',us.prenom)AS'comment',us.photo AS'photo',us.sexe AS'sexe' FROM publication p,users us,commentaire co WHERE co.users = us.id AND co.publication=p.id AND co.publication=" . $_GET['pid']);
}
$categorie = $conn->query("SELECT * FROM category");
?>