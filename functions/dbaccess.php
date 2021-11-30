<?php

/** DATENBANK-LOGIN LIVE */
/*
$servername = "mysql4717.kunden.kontent.com";
$dbname = "db71320";
$username = "db71320";
$password = 'qdEdr9Ee88qeZU9H8H3H5ih5Y';
*/

/** DATENBANK-LOGINDATEN LOKAL **/

$servername = "localhost";
$dbname = "statictracker";
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
?>