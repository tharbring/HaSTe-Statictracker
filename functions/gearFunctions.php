<?php

function functionTest($res){
    echo $res[0]["name"];
    echo "Functiontest";
}

function echoFunction(){
    echo "Echo-Test";
}

//Mainhand-Selectors
function currentMainSelector($res, $slot){
    $counter = 0;
    $output = '';

    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisMainSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
//Offhand-Selectors
function currentOffSelector($res, $slot){
    $counter = 0;
    $output = '';
    $output = $output . '<option value="0">None</option>';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisOffSelector($res, $slot){
    $counter = 0;
    $output = '';
    $output = $output . '<option value="0">None</option>';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
/*
*
* ARMOR-SELECTIONS
* Head-Selector
*
*/
function currentHeadSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisHeadSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
//Body-Selectors
function currentBodySelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisBodySelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
//Hands-Selectors
function currentHandsSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisHandsSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}

//Legs-Selectors
function currentLegsSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisLegsSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}

//Feet-Selectors
function currentFeetSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisFeetSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
/*
*
* ACCESSORY-SELECTIONS
* Earring-Selector
*
*/
function currentEarringsSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisEarringsSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
//Necklace-Selectors
function currentNecklaceSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisNecklaceSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
//Bracelet-Selectors
function currentBraceletSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisBraceletSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
//Ring-Selectors
function currentRingSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}
function bisRingSelector($res, $slot){
    $counter = 0;
    $output = '';
    while($res[$counter]["ID"]){
        if($res[$counter]["ID"] == $slot){
            $output = $output . '<option value="' . $res[$counter]["ID"] . '" selected>' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        } else {
        $output = $output . '<option value="' . $res[$counter]["ID"] . '">' . $res[$counter]["name"] . ' (' . $res[$counter]["ilvl"] . ')' . '</option>';
        }
        $counter++;
    }
    echo $output;
}