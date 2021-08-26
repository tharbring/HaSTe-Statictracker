<?php

/* Variablen */
$members = "members";

switch ($_GET['page']) {
    case $members:
       include ($_SERVER['DOCUMENT_ROOT'] . '/content/members.php'); 
    break;
    default:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/start.php');
}
