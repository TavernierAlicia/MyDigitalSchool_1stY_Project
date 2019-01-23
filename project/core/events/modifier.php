<?php
//connexion base de donnee
include_once '/../../config/connexion.php';
if(isset($_GET['id'])){
    $e= $conn->query("SELECT * FROM evenement WHERE id=".$_GET['id']);
    $event = $e->fetch();
} else if(isset($_POST['modify'])){
    $name=$_POST['path'];
   if($_FILES['photo']['size']>0){
       unlink('../../uploads/events/'.$_POST['path']);
       $name = date('Ymdhis') . '.' . pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
       move_uploaded_file($_FILES["photo"]["tmp_name"], '../../uploads/events/' . $name);
   }
    $req = $conn->prepare('UPDATE  evenement SET titre =:titre, date_created=:created,date_deb=:deb,date_fin=:fin,lieux=:lieux,description=:description,photo=:photo WHERE id = :id');
    $req->execute(array(
        'titre' => $_POST['titre'],
        'created' => date("Y-m-d H:i:s"),
        'deb' => $_POST['debut'],
        'fin' => $_POST['fin'],
        'lieux' => $_POST['lieu'],
        'description' => $_POST['description'],
        'photo' => $name,
        'id'=>$_POST['id']
    )) or die(print_r($req->errorInfo()));

    header('Location: /../../education/events.php');
}else if(isset($_GET['idd'])){
    $e= $conn->query("SELECT * FROM evenement WHERE id=".$_GET['idd']);
    $event = $e->fetch();
    unlink('../../uploads/events/'.$_POST['photo']);
    $req = $conn->query('DELETE FROM  evenement WHERE id='.$_GET['idd']);

    header('Location: /../../education/events.php');
}
?>