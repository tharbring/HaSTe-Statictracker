<?php

$slots = array("Mainweapon", "Offhand", "Head", "Body", "Hands", "Legs", "Feet", "Earrings", "Necklace", "Bracelet", "Ring 1", "Ring 2");

$i = 0;
while($slots[$i]){
    $url = './index.php?page=lootpriority&id=' . $i;
    $output = '<li><a class="dropdown-item" href="' . $url . '">' . $slots[$i] . '</a></li>';
    echo $output;
    $i++;
}

?>