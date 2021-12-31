<?php

/* Variablen */
$members = "members";
$addmember = "addmember";
$times = "times";
$timesdetail = "timesdetail";
$gear = "gear";
$lootpriority = "lootpriority";
$loot = "loot";

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
    case $timesdetail:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/timesdetail.php'); 
    break;
    case $gear:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/gear.php'); 
    break;
    case $lootpriority:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/lootpriority.php'); 
    break;
    case $loot:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/loot.php'); 
    break;
    default:
        include ($_SERVER['DOCUMENT_ROOT'] . '/content/start.php');
}
