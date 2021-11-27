<?php

//Error Reporting Trigger
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
*/
if(!isset($_COOKIE["login"])){
  header("Location: ./login.php");
  die();
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="T. Harbring">
    <meta name="generator" content="N/A">
    <!--<title>Paraselene</title>-->
    <title>Staticplanner-Demo</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles.css" rel="stylesheet">
  </head>
  <body>

  <header>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/includes/header.php'); ?>
  </header>  

  <main>
    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/includes/content.php'); ?>
  </main>

  <footer>
  </footer>

  <script src="/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
