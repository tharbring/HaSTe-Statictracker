<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Players
$sql = $conn->prepare("SELECT * FROM members ORDER BY ID ASC");
$sql -> execute();
$players = $sql->fetchAll();

//Fetch Priorities
$sql = $conn->prepare("SELECT * FROM lootpriority ORDER BY ID ASC");
$sql -> execute();
$result = $sql->fetchAll();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

function prioritySelector($player, $slot,  $priority){
    $selectorID = $slot . "_" . $player;
    $p = $player-1;
    $s = $slot;
    $output = "";
    $output = $output . '<select class="priority-selector" name="'. $selectorID .'" id="'. $selectorID .'">';
    for($a = 0; $a < 9; $a++){
        if($priority[$p][$s] == $a){
            $output = $output . '<option value="'. $a .'" selected>'. $a .'</option>';
        } else {
            $output = $output . '<option value="'. $a .'">'. $a .'</option>';
        }
    }
    $output = $output . "</select>";
    echo $output;
}

echo $result[1][3];
echo "<br>";

?>

<tr>
    <th scope="row"><?php echo $players[0]["name"]; ?></th>
    <td>
        <?php prioritySelector(1,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(1,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(1,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[1]["name"]; ?></th>
    <td>
        <?php prioritySelector(2,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(2,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(2,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[2]["name"]; ?></th>
    <td>
        <?php prioritySelector(3,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(3,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(3,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[3]["name"]; ?></th>
    <td>
        <?php prioritySelector(4,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(4,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(4,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[4]["name"]; ?></th>
    <td>
        <?php prioritySelector(5,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(5,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(5,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[5]["name"]; ?></th>
    <td>
        <?php prioritySelector(6,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(6,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(6,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[6]["name"]; ?></th>
    <td>
        <?php prioritySelector(7,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(7,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(7,12,$result); ?>
    </td>
</tr>
<tr>
    <th scope="row"><?php echo $players[7]["name"]; ?></th>
    <td>
        <?php prioritySelector(8,1,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,2,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,3,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,4,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,5,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,6,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,7,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,8,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,9,$result); ?>
    </td>
    <td> 
        <?php prioritySelector(8,10,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,11,$result); ?>
    </td>
    <td>
        <?php prioritySelector(8,12,$result); ?>
    </td>
</tr>
