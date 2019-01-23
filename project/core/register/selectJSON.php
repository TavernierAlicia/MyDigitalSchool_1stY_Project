<?php
include_once '/../../config/connexion.php';

$felier = $conn->query("SELECT * FROM feliere");

$feliere = array();
$f = 0;
while ($felie = $felier->fetch()) {
    array_push($feliere, $felie);
    if ($f == 0) {
        if (isset($_GET['fid'])) {
            $spec = $conn->query("SELECT * FROM speciality WHERE feliere =" . $_GET['fid']." GROUP BY nom");
        } else {
            $spec = $conn->query("SELECT * FROM speciality GROUP BY nom");
        }
    }
    $f++;
}

$specialites = array();
$s= 0;
while ($spece = $spec->fetch()) {
    array_push($specialites, $spece);
    if ($s == 0) {
        if (isset($_GET['sid'])) {
            $niveau= $conn->query("SELECT n.nom AS'nom',n.id AS'id' FROM speciality s ,niveau n WHERE s.id =" . $_GET['sid'].' ORDER BY n.nom');
        } else {
            $niveau= $conn->query("SELECT n.nom AS'nom',n.id AS'id' FROM speciality s ,niveau n WHERE s.id =" . $_GET['fid'].' ORDER BY n.nom ');
        }
    }
    $f++;
}

$niveaux = array();
while ($nive = $niveau->fetch()) {
    array_push($niveaux, $nive);
}


$return = array();
$return['specialite'] = $specialites;
$return['niveau'] = $niveaux;
$json = json_encode($return);
echo $json;
?>