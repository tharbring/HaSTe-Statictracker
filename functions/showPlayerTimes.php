<?php

$playerID = "p".$id;

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

$sql = $conn->prepare("SELECT ID, slot, $playerID FROM schedule");
$sql -> execute();
$res = $sql->fetchAll();

$sql = $conn->prepare("SELECT COUNT(*) FROM schedule");
$sql -> execute();
$row = $sql->fetchColumn();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

function showTimes($data, $offset, $day, $pid){

for($i = 0; $i < 6; $i++){
    $j = $i + $offset;

    if($i == 0){
        if($data[$j][$pid] == 2){
            $output='
            <tr>
                <th rowspan="6">' . $day . '</th>
                <td>' . $data[$j]["slot"] . '</td>
                <div class="form-check form-check-inline">
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="2" checked></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="1"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="0"></td>
                </div>
            </tr>';
            echo $output;
        }else if($data[$j][$pid] == 1){
            $output='
            <tr>
                <th rowspan="6">' . $day . '</th>
                <td>' . $data[$j]["slot"] . '</td>
                <div class="form-check form-check-inline">
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="2"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="1" checked></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="0"></td>
                </div>
            </tr>';
            echo $output;
        }else if($data[$j][$pid] == 0){
            $output='
            <tr>
                <th rowspan="6">' . $day . '</th>
                <td>' . $data[$j]["slot"] . '</td>
                <div class="form-check form-check-inline">
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="2"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="1"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="0" checked></td>
                </div>
            </tr>';
            echo $output;
        }
    } else {
        if($data[$j][$pid] == 2){
            $output='
            <tr>
                <td>' . $data[$j]["slot"] . '</td>
                <div class="form-check form-check-inline">
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="2" checked></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="1"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="0"></td>
                </div>
            </tr>';
            echo $output;
        }else if($data[$j][$pid] == 1){
            $output='
            <tr>
                <td>' . $data[$j]["slot"] . '</td>
                <div class="form-check form-check-inline">
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="2"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="1" checked></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="0"></td>
                </div>
            </tr>';
            echo $output;
        }else if($data[$j][$pid] == 0){
            $output='
            <tr>
                <td>' . $data[$j]["slot"] . '</td>
                <div class="form-check form-check-inline">
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="2"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="1"></td>
                    <td><input class="form-check-input" type="radio" name="' . $data[$j]["ID"] . '" value="0" checked></td>
                </div>
            </tr>';
            echo $output;
            }
        }
    }
}


showTimes($res, 0, "Monday", $playerID);
showTimes($res, 6, "Tuesday", $playerID);
showTimes($res, 12, "Wednesday", $playerID);
showTimes($res, 18, "Thursday", $playerID);
showTimes($res, 24, "Friday", $playerID);
showTimes($res, 30, "Saturday", $playerID);
showTimes($res, 36, "Sunday", $playerID);

?>