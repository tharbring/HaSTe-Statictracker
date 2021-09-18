<?php

$prio = array();

for($i = 0; $i < 12; $i++){
    for($j = 0; $j < 8; $j++){
        $a = $i + 1;
        $b = $j + 1;
        $input = $a . "_" . $b;
        $prio[$i][$j] = $_POST[$input]; 
        $a++;
        $b++;
    }
}
for($i = 0; $i < 12; $i++){
    for($j = 0; $j < 8; $j++){
        echo $prio[$i][$j];
        echo "<br>"; 
    }
}

?>