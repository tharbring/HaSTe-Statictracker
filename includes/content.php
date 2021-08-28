<?php

/* Variablen */
$members = "members";
$addmember = "addmember";

switch ($_GET['page']) {
    case $addmember:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/addmember.php');
    break;
    case $members:
       include ($_SERVER['DOCUMENT_ROOT'] . '/content/members.php'); 
    break;
    default:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/start.php');
}
