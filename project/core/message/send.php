<?php
include_once '/../../config/connexion.php';

if (isset($_POST['contact'])) {
    $user = $conn->query("SELECT * FROM users WHERE email='".$_POST['nom']."'");
    if($user->rowCount()>0){
        session_start();
        $email = $user->fetch();
        $thread = $conn->query("SELECT * FROM thread WHERE utilisateur1 IN (" . $email['id'] .",".$_SESSION['connecter'].") AND utilisateur2 IN (" . $email['id'] .",".$_SESSION['connecter'].")");
    
        if($thread->rowCount() == 0){
            $req = $conn->prepare('INSERT INTO thread (utilisateur1,utilisateur2,date_created,date_modify)VALUES (:utilisateur1,:utilisateur2,:created,:modify)');
            $req->execute(array(
                'utilisateur1' => intval($email['id']),
                'utilisateur2' => intval($_SESSION['connecter']),
                'created' => date("Y-m-d H:i:s"),
                'modify' => date("Y-m-d H:i:s")
            )) or die(print_r($req->errorInfo()));
        }else{
            $t = $thread->fetch();
            $req = $conn->prepare('UPDATE thread SET date_modify = :modify WHERE id =:id');
            $req->execute(array(
                'modify' => date("Y-m-d H:i:s"),
                'id' => $t['id']
            )) or die(print_r($req->errorInfo()));
        }
        $threadNew = $conn->query("SELECT * FROM thread WHERE utilisateur1 IN (".$email['id'].",". $_SESSION['connecter'].") AND utilisateur2 IN (".$email['id'].",". $_SESSION['connecter'].")");
        $t = $threadNew->fetch();
         
        $req = $conn->prepare('INSERT INTO message (contenu,date_created,sender,receiver,etat,thread)VALUES (:contenu,:created,:sender,:receiver,:etat,:thread)');
        $req->execute(array(
            'contenu' => $_POST['message'],
            'created' => date("Y-m-d H:i:s"),
            'sender' => intval($_SESSION['connecter']),
            'receiver' =>$email['id'],
            'etat' => 0,
            'thread'=>$t['id']
        )) or die(print_r($req->errorInfo()));
        header('Location: /../../education/message.php?id='.$email['id']);
    }else{
        header('Location: /../../education/message.php?erreur=1');
    }
}else if(isset($_POST['sendd'])){
    $threadNew = $conn->query("SELECT * FROM thread WHERE utilisateur1 IN (".$_POST['sender'].",". $_POST['receiver'].") AND utilisateur2 IN (".$_POST['sender'].",". $_POST['receiver'].")");

    $t = $threadNew->fetch();
    $req = $conn->prepare('UPDATE thread SET date_modify = :modify WHERE id =:id');
    $req->execute(array(
        'modify' => date("Y-m-d H:i:s"),
        'id' => $t['id']
    )) or die(print_r($req->errorInfo()));

    $req = $conn->prepare('INSERT INTO message (contenu,date_created,sender,receiver,etat,thread)VALUES (:contenu,:created,:sender,:receiver,:etat,:thread)');
    $req->execute(array(
        'contenu' => $_POST['message'],
        'created' => date("Y-m-d H:i:s"),
        'sender' => $_POST['sender'],
        'receiver' => $_POST['receiver'],
        'etat' => 0,
        'thread'=>$t['id']
    )) or die(print_r($req->errorInfo()));
   
    header('Location: /../../education/message.php?id='.$_POST['receiver']);
}
?>