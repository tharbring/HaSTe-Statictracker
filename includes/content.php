<?php

/* Variablen */
$members = "members";
$addmember = "addmember";
$times = "times";
$gear = "gear";
$lootpriority = "lootpriority";

switch ($_GET['page']) {
    case $addmember:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/addmember.php');
    break;
    case $members:
       include ($_SERVER['DOCUMENT_ROOT'] . '/content/members.php'); 
    break;
    case $times:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/times.php'); 
    break;
    case $gear:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/gear.php'); 
    break;
    case $lootpriority:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/lootpriority.php'); 
    break;
    default:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/start.php');
}
