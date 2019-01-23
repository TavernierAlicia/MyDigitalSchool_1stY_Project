<?php

try {
$conn = new PDO('mysql:host=localhost;dbname=education;charset=utf8', 'root', '');
} catch (Exception $e) {
die('Erreur : ' . $e->getMessage());
}

?>