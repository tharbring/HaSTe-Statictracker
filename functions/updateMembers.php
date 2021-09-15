<?php

$names = array();
$ids = array();
$job1 = array();
$job2 = array();

for($i = 1; $i < 9; $i++){
    $id = "dbid".$i;
    $ids[] = $_POST[$id];
    $name = "name".$i;
    $names[] = $_POST[$name];
    $primary = "primary".$i;
    $job1[] = $_POST[$primary];
    $secondary = "secondary".$i;
    $job2[] = $_POST[$secondary];
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Players
$sql = $conn->prepare("SELECT * FROM members");
$sql -> execute();
$players = $sql->fetchAll();


$oldnames = array();

for($i = 0; $i < 8; $i++){
    $oldnames[] = $players[$i]['name'];
}

for($i = 0; $i < 8; $i++){
    echo "Changed name " . $oldnames[$i] . " to " . $names[$i];
    echo "<br>";
}

for($i = 0; $i < 8; $i++){
    try{
        $sql = $conn->prepare("UPDATE members SET name = '$names[$i]', job_primary = '$job1[$i]', job_secondary = '$job2[$i]' WHERE ID = '$ids[$i]'");
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