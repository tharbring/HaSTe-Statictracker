<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

$sql = $conn->prepare("SELECT ID, name FROM members");
$sql -> execute();
$res = $sql->fetchAll();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

//echo $res[0]["name"];

$output = '';
$output = $output . '<th scope="col">Day</th>';
$output = $output . '<th scope="col">Timeslot</th>';
for ($i = 0; $i <= 7; $i++){
    $output = $output . '<th scope="col">'. $res[$i]["name"] .'</th>';
}

echo $output;

?>
