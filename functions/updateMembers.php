<?php

$names = array();
$job1 = array();
$job2 = array();

for($i = 1; $i < 9; $i++){
    $name = "name".$i;
    $names[] = $_POST[$name];
    $primary = "primary".$i;
    $job1[] = $_POST[$primary];
    $secondary = "secondary".$i;
    $job2[] = $_POST[$secondary];
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Tanks
$sql = $conn->prepare("SELECT name FROM members WHERE job_primary = 'PLD' OR job_primary = 'WAR' OR job_primary = 'DRK' or job_primary = 'GNB'");
$sql -> execute();
$tanks = $sql->fetchAll();

//Fetch Healers
$sql = $conn->prepare("SELECT name FROM members WHERE job_primary = 'WHM' OR job_primary = 'SCH' OR job_primary = 'AST' or job_primary = 'SGE'");
$sql -> execute();
$healers = $sql->fetchAll();

//Fetch DPS
$sql = $conn->prepare("SELECT name FROM members WHERE job_primary = 'MNK' OR job_primary = 'DRG' OR job_primary = 'NIN' or job_primary = 'SAM' OR job_primary = 'RPR' OR job_primary = 'BRD' OR job_primary = 'MCH' OR job_primary = 'DNC' OR job_primary = 'BLM' OR job_primary = 'SMN' OR job_primary = 'RDM'");
$sql -> execute();
$dps = $sql->fetchAll();

$oldnames = array();

$oldnames[] = $tanks[0]['name'];
$oldnames[] = $tanks[1]['name'];
$oldnames[] = $healers[0]['name'];
$oldnames[] = $healers[1]['name'];
$oldnames[] = $dps[0]['name'];
$oldnames[] = $dps[1]['name'];
$oldnames[] = $dps[2]['name'];
$oldnames[] = $dps[3]['name'];

for($i = 0; $i < 8; $i++){
    try{
        $sql = $conn->prepare("UPDATE members SET name = '$names[$i]', job_primary = '$job1[$i]', job_secondary = '$job2[$i]' WHERE name = '$oldnames[$i]'");
        $sql->execute();
        echo "Updated Entry " . $oldnames[$i];
        echo "<br>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

header('Location: /index.php?page=members');
die();

?>