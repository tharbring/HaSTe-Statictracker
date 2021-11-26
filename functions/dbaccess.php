<?php

/** DATENBANK-LOGIN LIVE */
/*
$servername = "mysql4717.kunden.kontent.com";
$dbname = "db71287";
$username = "db71287";
$password = '49FugXZi3JfwbbRq5XhKHYTd2';
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