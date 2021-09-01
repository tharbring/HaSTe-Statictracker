<?php

$id = $_GET["id"];
$pid = "p" . $id;

$values = array();

for($i = 1; $i <= 42; $i++){
    $values[] = $_POST[$i];
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

for($i = 0; $i < 42; $i++){
    $j = $i + 1;
    try{
        $sql = $conn->prepare("UPDATE schedule SET $pid = '$values[$i]' WHERE ID = '$j'");
        $sql->execute();
        echo "Updated ID " . $j . " to " . $values[$i];
        echo "<br>";
    } catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

header('Location: /index.php?page=times&id=' . $id);
die();

?>