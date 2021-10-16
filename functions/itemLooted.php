<?php

$slot = $_GET["slot"];
$pid = $_GET["pid"];

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

try{
    $sql = $conn->prepare("UPDATE lootpriority SET `$slot` = 0 WHERE ID = $pid");
    $sql->execute();
    echo "Updated Loottable";
    echo "<br>";
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

header('Location: /index.php');
die();

?>