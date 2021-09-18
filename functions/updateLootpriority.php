<?php

$prio = array();

for($i = 0; $i < 12; $i++){
    for($j = 0; $j < 8; $j++){
        $a = $i + 1;
        $b = $j + 1;
        $input = $a . "_" . $b;
        $prio[$i][$j] = $_POST[$input]; 
        $a++;
        $b++;
    }
}
/*
for($i = 0; $i < 12; $i++){
    for($j = 0; $j < 8; $j++){
        echo $prio[$i][$j];
        echo "<br>"; 
    }
}
*/
include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');
$a = 1;
for($i = 0; $i < 8; $i++){
    $b = 1;
    for($j = 0; $j < 12; $j++){
        try{
            $input = $prio[$j][$i];
            $sql = $conn->prepare("UPDATE lootpriority SET `$b` = '$input' WHERE ID = '$a'");
            $sql->execute();
            echo "Updated Entry: " . $i . " " . $j;
            echo "<br>";
            $b++;
        } catch (PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
    $a++;
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

header('Location: /index.php?page=lootpriority');
die();

?>