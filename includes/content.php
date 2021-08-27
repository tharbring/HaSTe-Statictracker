<?php

/* Variablen */
$members = "members";
$addmembers = "addmembers";

switch ($_GET['page']) {
    case $addmembers:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/addmembers.php');
    break;
    case $members:
       include ($_SERVER['DOCUMENT_ROOT'] . '/content/members.php'); 
    break;
    default:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/start.php');
}
