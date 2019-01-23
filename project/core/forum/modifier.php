<?php
//connexion base de donnee
include_once '/../../config/connexion.php';

//afficher les coordonnee d,un publication
if(isset($_GET['pid'])){
    $f= $conn->query("SELECT * FROM publication WHERE id=".$_GET['pid']);
    $forum = $f->fetch();
    $categorie= $conn->query("SELECT * FROM category");

    //modifier publication
} else if(isset($_POST['modify'])){
    $name=$_POST['path'];
   if($_FILES['photo']['size']>0){
       unlink('../../uploads/forum/'.$_POST['path']);
       $name = date('Ymdhis') . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
       move_uploaded_file($_FILES["photo"]["tmp_name"], '../../uploads/forum/' . $name);
   }

    $req = $conn->prepare('UPDATE  publication SET titre =:titre,categorie=:categorie,description=:description,photo=:photo WHERE id = :id');
    $req->execute(array(
        'titre' => $_POST['titre'],
        'categorie' => $_POST['categorie'],
        'description' => $_POST['description'],
        'photo' => $name,
        'id'=>$_POST['id']
    )) or die(print_r($req->errorInfo()));
    header('Location: /../../education/forum.php?page=1');

    //supprimer publication
}else if(isset($_GET['idd'])){
    $e= $conn->query("SELECT * FROM publication WHERE id=".$_GET['idd']);
    $event = $e->fetch();
    unlink('../../uploads/forum/'.$_POST['photo']);
    $reqq = $conn->query('DELETE FROM  commentaire WHERE publication='.$_GET['idd']);
    $req = $conn->query('DELETE FROM  publication WHERE id='.$_GET['idd']);
    header('Location: /../../education/forum.php?page=1');
}
?>