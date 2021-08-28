<?php

$name = $_POST["name"];
$primary = $_POST["primary"];
$secondary = $_POST["secondary"];

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

try{

    $sql = $conn->prepare("INSERT INTO members (name, job_primary, job_secondary) VALUES ('$name','$primary','$secondary')");
    $sql->execute();
    echo "New Record Created!";

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

header('Location: /index.php?page=members');
die();

?>