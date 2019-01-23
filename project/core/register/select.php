<?php
include_once '/../../config/connexion.php';

$felieres = array();
$f = 0;
$feliere = $conn->query("SELECT * FROM feliere");


while ($fel = $feliere->fetch()) {
    array_push($felieres, $fel);
    if ($f == 0) {
        $specialite = $conn->query("SELECT * FROM speciality WHERE feliere =" . $fel['id']);
    }
    $f++;
}
$specialites = array();
$s = 0;
while ($spec = $specialite->fetch()) {
    array_push($specialites, $spec);
    if ($s == 0) {
        $niveau= $conn->query("SELECT n.nom AS'nom',n.id AS'id' FROM speciality s ,niveau n WHERE s.id =" . $spec['id'].' ORDER BY n.nom');
    }
    $s++;
}

$niveaux = array();
while ($niv = $niveau->fetch()) {
    array_push($niveaux, $niv);
}

?>