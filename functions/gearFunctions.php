<?php

function calculateilvl($data, $main, $off, $armor, $accessory){
  
    $rows = count($data);
    echo $rows . "<br>";
    
    //Switch to assign Item-IDs: $data[Index][Current]

    for($i = 0; $i < 12; $i++){
        switch($data[$i]["slot"]){
            case "1";
                echo "Case 1";
                break;
            case "2":
                if($data[$i]["current"] == NULL){
                    echo "Case NULL";
                } else {
                    echo "Case 2";
                }
                break;
            case "3":
                echo "Case 3";
                break;
            case "4":
                echo "Case 4";
                break;
            case "5":
                echo "Case 5";
                break;
            case "6";
                echo "Case 6";
                break;
            case "7":
                echo "Case 7";
                break;
            case "8":
                echo "Case 8";
                break;
            case "9":
                echo "Case 9";
                break;
            case "10":
                echo "Case 10";
                break;
            case "11":
                echo "Case 11";
                break;
            case "12":
                echo "Case 12";
                break;
        }
    }

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

