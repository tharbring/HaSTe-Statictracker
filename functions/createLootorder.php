<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Players
$sql = $conn->prepare("SELECT * FROM members ORDER BY ID ASC");
$sql -> execute();
$players = $sql->fetchAll();

//Fetch Priority - Slot 1
$sql = $conn->prepare("SELECT ID, `1` FROM lootpriority");
$sql -> execute();
$prio1 = $sql->fetchAll();
//Fetch Priority - Slot 2
$sql = $conn->prepare("SELECT ID, `2` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio2 = $sql->fetchAll();
//Fetch Priority - Slot 3
$sql = $conn->prepare("SELECT ID, `3` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio3 = $sql->fetchAll();
//Fetch Priority - Slot 4
$sql = $conn->prepare("SELECT ID, `4` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio4 = $sql->fetchAll();
//Fetch Priority - Slot 5
$sql = $conn->prepare("SELECT ID, `5` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio5 = $sql->fetchAll();
//Fetch Priority - Slot 6
$sql = $conn->prepare("SELECT ID, `6` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio6 = $sql->fetchAll();
//Fetch Priority - Slot 7
$sql = $conn->prepare("SELECT ID, `7` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio7 = $sql->fetchAll();
//Fetch Priority - Slot 8
$sql = $conn->prepare("SELECT ID, `8` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio8 = $sql->fetchAll();
//Fetch Priority - Slot 9
$sql = $conn->prepare("SELECT ID, `9` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio9 = $sql->fetchAll();
//Fetch Priority - Slot 10
$sql = $conn->prepare("SELECT ID, `10` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio10 = $sql->fetchAll();
//Fetch Priority - Slot 11
$sql = $conn->prepare("SELECT ID, `11` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio11 = $sql->fetchAll();
//Fetch Priority - Slot 12
$sql = $conn->prepare("SELECT ID, `12` FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$prio12 = $sql->fetchAll();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

function createTable($res, $player, $slot){
    $id = 0;

    $ids = array();
    $values = array();

    for($j = 0; $j <= 7; $j++){
        $ids[$j] = $res[$j]["ID"];
        $values[$j] = $res[$j][$slot];
    }

    $min = min(array_diff($values, array(0)));

    if($min){
        $key = array_search($min, $values);
    }

    $output = "";
    if($min){
        $key = array_search($min, $values);
        $id = $ids[$key];
        $output = $output . '<form action="/functions/itemLooted.php?slot='.$slot.'&pid='.$id.'" method="post">';
        $output = $output . '<table class="table table-sm table-hover table-dark table-striped align-middle">';
        $output = $output . '<thead>';
        $output = $output . '<tr>';
        if($slot == 1){
            $output = $output . '<th colspan="2" scope="col">Mainhand</th>';
        } else if($slot == 2){
            $output = $output . '<th colspan="2" scope="col">Offhand</th>';
        } else if($slot == 3){
            $output = $output . '<th colspan="2" scope="col">Head</th>';
        } else if($slot == 4){
            $output = $output . '<th colspan="2" scope="col">Body</th>';
        } else if($slot == 5){
            $output = $output . '<th colspan="2" scope="col">Hands</th>';
        } else if($slot == 6){
            $output = $output . '<th colspan="2" scope="col">Legs</th>';
        } else if($slot == 7){
            $output = $output . '<th colspan="2" scope="col">Feet</th>';
        } else if($slot == 8){
            $output = $output . '<th colspan="2" scope="col">Earring</th>';
        } else if($slot == 9){
            $output = $output . '<th colspan="2" scope="col">Necklace</th>';
        } else if($slot == 10){
            $output = $output . '<th colspan="2" scope="col">Bracelet</th>';
        } else if($slot == 11){
            $output = $output . '<th colspan="2" scope="col">Ring 1</th>';
        } else if($slot == 12){
            $output = $output . '<th colspan="2" scope="col">Ring 2</th>';
        }
            $output = $output . '</tr>';
        $output = $output . '</thead>';
        $output = $output . '<tbody>';
        $output = $output . '<th scope="row">' . $player[$key]["name"] . '</th>';
        $output = $output . '<td>';
        $output = $output . '<button type="submit" class="btn-sm btn-light"><img src="/storage/img/check.svg" alt="Looted" width="20" height="20"></button>';
        $output = $output . '</td>';
        $output = $output . '</tbody>';
        $output = $output . '</table>';
        $output = $output . '</form>';
    }
    echo $output;
}

createTable($prio1, $players, 1);
createTable($prio2, $players, 2);
createTable($prio3, $players, 3);
createTable($prio4, $players, 4);
createTable($prio5, $players, 5);
createTable($prio6, $players, 6);
createTable($prio7, $players, 7);
createTable($prio8, $players, 8);
createTable($prio9, $players, 9);
createTable($prio10, $players, 10);
createTable($prio11, $players, 11);
createTable($prio12, $players, 12);

?>

<!--
Table-Template

<form action="/functions/itemLooted.php" method="post"> 
    <table class="table table-sm table-hover table-dark table-striped align-middle">
        <thead>
            <tr>
                <th scope="col">Mainhand</th>
            </tr>
        </thead>
        <tbody>
            <th scope="row">Playername</th>
            <td>
                <button type="submit" class="btn-sm btn-light"><img src="/storage/img/check.svg" alt="Looted" width="20" height="20"></button>
            </td>
        </tbody>
    </table>
</form>
-->