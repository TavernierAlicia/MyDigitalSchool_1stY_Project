<?php
session_start();
session_destroy ();
header('Location: /../../education/login.php');

?>