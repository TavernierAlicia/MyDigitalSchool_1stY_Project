<?php
include_once '/../../config/connexion.php';
if($_SESSION == null){
    session_start();
}
//afficher les messages
$user = $conn->query("SELECT * FROM thread WHERE utilisateur1=" . $_SESSION['connecter'] . " OR utilisateur2=" . $_SESSION['connecter']." ORDER BY date_modify DESC");
$users = $conn->query("SELECT * FROM thread WHERE utilisateur1=" . $_SESSION['connecter'] . " OR utilisateur2=" . $_SESSION['connecter']." ORDER BY date_modify DESC");
$count = $user->rowCount();
$userSend = $conn->query("SELECT * FROM `users` WHERE role <> 'admin'");
$id='';
if(isset($_GET['id'])){
    $us = $conn->query("SELECT * FROM thread WHERE utilisateur1=" . $_GET['id'] . " OR utilisateur2=" . $_GET['id']." ORDER BY date_modify DESC");
    $u = $us->fetch();
    $messages = $conn->query("SELECT * FROM message WHERE thread=" . $u['id']);
    if(count($messages) >0){
        $info = $messages->fetch();
        if ($_SESSION['connecter'] == $info['sender']) {
            $sender = $info['sender'];
            $receiver = $info['receiver'];
        }else{
            $receiver = $info['sender'];
            $sender = $info['receiver'];
        }
        $msg = $conn->query("SELECT * FROM message WHERE thread=" . $u['id']);
    }
}else{
    session_start();
    $u = $user->fetchAll();
    if($count > 0){
        $messages = $conn->query("SELECT * FROM message WHERE thread=" . $u[0]['id']);
        $info = $messages->fetch();
        $sender = $info['sender'];
        $receiver =$info['receiver'];
        if ($_SESSION['connecter'] == $sender){
            $id = $receiver;
        }else{
            $id = $sender;
        }
    }
    header('Location: /../../education/message.php?id='.$id);

}



function intervalDate($dateCreation){
    $datetime1 = date_create(date('Y-m-d H:i:s', strtotime($dateCreation)));
    $datetime2 = date_create(date('Y-m-d H:i:s'));
    $interval = date_diff($datetime1, $datetime2);
    if ($interval->y > 0) {
        return $interval->y . ' ans';
    } else if ($interval->m > 0) {
        return $interval->m . ' mois';
    } else if ($interval->d > 0) {
        return $interval->d . ' jours';
    } else if ($interval->d > 0) {
        return $interval->h . ' heures ';
    } else if ($interval->i > 0) {
        return $interval->i . ' minutes';
    } else if ($interval->s > 0) {
        return $interval->s . ' secondes';
    } else if ($interval->s == 0) {
        return '1 seconde';
    }
}
?>