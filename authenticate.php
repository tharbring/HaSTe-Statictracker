<?php

$pass = $_POST["password"];
$setcookie = $_POST["setcookie"];

if($pass == "StaticplannerDemo2022"){
//if($pass == "TripleLegendsBTW"){
    if($setcookie == "on"){
        setcookie("login", "active", time() + (86400 * 90));
        header('Location: /index.php');
        die();
    } else {
        setcookie("login", "active", 0);
        header('Location: /index.php');
        die();
    }
} else {
    header("Location: ./login.php");
    die();
}


?>