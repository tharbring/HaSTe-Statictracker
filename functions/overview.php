<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Player-Data
$sql = $conn->prepare("SELECT ID, slot FROM schedule WHERE p1 = 2 AND p2 = 2 AND p3 = 2 AND p4 = 2 AND p5 = 2 AND p6 = 2 AND p7 = 2 AND p8 = 2");
$sql -> execute();
$res = $sql->fetchAll();

$sql = $conn->prepare("SELECT COUNT(*) FROM schedule WHERE p1 = 2 AND p2 = 2 AND p3 = 2 AND p4 = 2 AND p5 = 2 AND p6 = 2 AND p7 = 2 AND p8 = 2");
$sql -> execute();
$row = $sql->fetchColumn();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');


for($i = 0; $i < $row; $i++){
    if (0 <= $res[$i]["ID"] && $res[$i]["ID"] < 7){
        $dayout = '<th>Monday</th>';
    } else if (7 <= $res[$i]["ID"] && $res[$i]["ID"] < 13){
        $dayout = '<th>Tuesday</th>';
    } else if (13 <= $res[$i]["ID"] && $res[$i]["ID"] < 19){
        $dayout = '<th>Wednesday</th>';
    } else if (19 <= $res[$i]["ID"] && $res[$i]["ID"] < 25){
        $dayout = '<th>Thursday</th>';
    } else if (25 <= $res[$i]["ID"] && $res[$i]["ID"] < 31){
        $dayout = '<th>Friday</th>';
    } else if (31 <= $res[$i]["ID"] && $res[$i]["ID"] < 37){
        $dayout = '<th>Saturday</th>';
    } else if (37 <= $res[$i]["ID"] && $res[$i]["ID"] < 42){
        $dayout = '<th>Sunday</th>';
    }
    $slotout = '<td>' . $res[$i]["slot"] . '</td>';

    echo '<tr>' . $dayout . $slotout . '</tr>';
    
}

?>