<?php

/** DATENBANK-LOGINDATEN LOKAL */
$servername = "localhost";
$dbname = "ffxiv-gear";
$username = "admin";
$password = "root";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  //echo "Connection failed: " . $e->getMessage();
}

$job = $res["job_primary"];

switch($job){
    case "PLD":
    case "WAR":
    case "DRK":
    case "GNB":
        $armor = "fending-armor";
        $accessories = "fending-accessories";
        break;
}

$sql = $conn->prepare("SELECT * FROM weaponry WHERE job = 'PLD' AND slot = '1' ORDER BY ilvl DESC");
$sql -> execute();
$main = $sql->fetchAll();

echo $main[0]["name"];