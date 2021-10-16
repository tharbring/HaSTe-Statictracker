<?php
include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

$sql = $conn->prepare("SELECT * FROM schedule");
$sql -> execute();
$res = $sql->fetchAll();

$sql = $conn->prepare("SELECT name FROM members");
$sql -> execute();
$result = $sql->fetchAll();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

function showTimes($data, $offset, $day){

    $output = '<tr>';
    $output = $output . '<th scope="row" rowspan="12">' . $day . '</th>';

    for($i = 0; $i < 12; $i++){
        $j = $i + $offset;    
        $output = $output . '<th scope="col">' . $data[$j]["slot"] . '</th>';
        if($data[$j]["p1"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p1"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p2"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p2"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p3"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p3"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p4"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p4"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p5"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p5"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p6"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p6"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p7"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p7"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        if($data[$j]["p8"] == $j){
            $output = $output . '<td class="detail-unavailable"><span></span></td>';
        } else if($data[$j]["p8"] == 1){
            $output = $output . '<td class="detail-maybe"><span></span></td>';
        } else {
            $output = $output . '<td class="detail-available"><span></span></td>';
        }
        $output = $output . '</tr>';
    }
    echo $output;
}
function NameRow($data){
    $output = '';
    $output = $output . '<tr>';
    $output = $output . '<td class="detail-divider">Day</th>';
    $output = $output . '<td class="detail-divider">Timeslot</td>';
    for($i = 0; $i <= 7; $i++){
        $output = $output . '<td class="detail-divider">' . $data[$i]["name"] . '</td>';
    }
    $output = $output . '</tr>';
    echo $output;
}

showTimes($res, 0, "Monday");
NameRow($result);
showTimes($res, 12, "Tuesday");
NameRow($result);
showTimes($res, 24, "Wednesday");
NameRow($result);
showTimes($res, 36, "Thursday");
NameRow($result);
showTimes($res, 48, "Friday");
NameRow($result);
showTimes($res, 60, "Saturday");
NameRow($result);
showTimes($res, 72, "Sunday");
NameRow($result);

?>