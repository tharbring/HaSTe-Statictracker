<?php

/** DATENBANK-LOGINDATEN LOKAL */
$servername = "localhost";
$dbname = "ffxiv-gear";
$username = "admin";
$password = "root";


try {
  $cn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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
        $armor = "fending_armor";
        $accessories = "fending_accessories";
        break;
}

// Fetch Mainhands
$sql = $cn->prepare("SELECT * FROM weaponry WHERE job = 'PLD' AND slot = '1' ORDER BY ilvl DESC");
$sql -> execute();
$main = $sql->fetchAll();
//Fetch Offhands
$sql = $cn->prepare("SELECT * FROM weaponry WHERE job = 'PLD' AND slot = '2' ORDER BY ilvl DESC");
$sql -> execute();
$offhand = $sql->fetchAll();

//Fetch Head
$sql = $cn->prepare("SELECT * FROM $armor WHERE slot = '3' ORDER BY ilvl DESC");
$sql -> execute();
$head = $sql->fetchAll();
//Fetch Body
$sql = $cn->prepare("SELECT * FROM $armor WHERE slot = '4' ORDER BY ilvl DESC");
$sql -> execute();
$body = $sql->fetchAll();
//Fetch Hands
$sql = $cn->prepare("SELECT * FROM $armor WHERE slot = '5' ORDER BY ilvl DESC");
$sql -> execute();
$hands = $sql->fetchAll();
//Fetch Legs
$sql = $cn->prepare("SELECT * FROM $armor WHERE slot = '6' ORDER BY ilvl DESC");
$sql -> execute();
$legs = $sql->fetchAll();
//Fetch Feet
$sql = $cn->prepare("SELECT * FROM $armor WHERE slot = '7' ORDER BY ilvl DESC");
$sql -> execute();
$feet = $sql->fetchAll();

//Fetch Earrings
$sql = $cn->prepare("SELECT * FROM $accessories WHERE slot = '8' ORDER BY ilvl DESC");
$sql -> execute();
$earrings = $sql->fetchAll();
//Fetch Necklace
$sql = $cn->prepare("SELECT * FROM $accessories WHERE slot = '9' ORDER BY ilvl DESC");
$sql -> execute();
$necklace = $sql->fetchAll();
//Fetch Braclet
$sql = $cn->prepare("SELECT * FROM $accessories WHERE slot = '10' ORDER BY ilvl DESC");
$sql -> execute();
$bracelet = $sql->fetchAll();
//Fetch Rings
$sql = $cn->prepare("SELECT * FROM $accessories WHERE slot = '11' ORDER BY ilvl DESC");
$sql -> execute();
$rings = $sql->fetchAll();
