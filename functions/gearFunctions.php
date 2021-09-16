<?php

function functionTest($res){
    echo $res[0]["name"];
    echo "Functiontest";
}

function echoFunction(){
    echo "Echo-Test";
}

function mainhandSelector($res){
    $output = '';
    $output = $output . '<option value="' . $res[0]["ID"] . '" selected>' . $res[0]["name"] . '</option>';
    $output = $output . '<option value="' . $res[0]["ID"] . '">' . $res[0]["name"] . '</option>';
    echo $output;
}