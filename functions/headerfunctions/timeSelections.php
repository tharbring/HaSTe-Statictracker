<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

$sql = $conn->prepare("SELECT ID, name FROM members");
$sql -> execute();
$res = $sql->fetchAll();

$sql = $conn->prepare("SELECT COUNT(*) FROM members");
$sql -> execute();
$row = $sql->fetchColumn();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

for($i = 0; $i < $row; $i++){
    $url = './index.php?page=times&id=' . $res[$i]["ID"];
    $output = '<li><a class="dropdown-item" href="' . $url . '">' . $res[$i]["name"] . '</a></li>';
    echo $output;
}

?>