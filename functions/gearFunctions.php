<?php

function calculateilvl($data, $main, $off, $head, $body, $hands, $legs, $feet, $earrings, $necklace, $bracelet, $rings){
  
    //Switch to assign Item-IDs: $data[Index][Current]

    for($i = 0; $i < 12; $i++){
        $counter = 0;
        switch($data[$i]["slot"]){
            // Main
            case "1";
                $mainID = $data[$i]["current"];
                while($main[$counter]){
                    if($mainID == $main[$counter]["ID"]){
                        $mainilvl = $main[$counter]["ilvl"];
                        //echo $mainilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Off-Hand
            case "2":
                if($data[$i]["current"] == NULL){
                    $offilvl = NULL;
                } else {
                    $offID = $data[$i]["current"];
                    while($off[$counter]){
                        if($offID == $off[$counter]["ID"]){
                            $offilvl = $off[$counter]["ilvl"];
                            //echo $offilvl . "<br>";
                        }
                    $counter++;
                    }
                }
                break;
            // Head
            case "3":
                $headID = $data[$i]["current"];
                while($head[$counter]){
                    if($headID == $head[$counter]["ID"]){
                        $headilvl = $head[$counter]["ilvl"];
                        //echo $headilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Body
            case "4":
                $bodyID = $data[$i]["current"];
                while($body[$counter]){
                    if($bodyID == $body[$counter]["ID"]){
                        $bodyilvl = $body[$counter]["ilvl"];
                        //echo $bodyilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Hands
            case "5":
                $handsID = $data[$i]["current"];
                while($hands[$counter]){
                    if($handsID == $hands[$counter]["ID"]){
                        $handsilvl = $hands[$counter]["ilvl"];
                        //echo $handsilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Legs
            case "6";
            $legsID = $data[$i]["current"];
                while($legs[$counter]){
                    if($legsID == $legs[$counter]["ID"]){
                        $legsilvl = $legs[$counter]["ilvl"];
                        //echo $legsilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Feet
            case "7":
                $feetID = $data[$i]["current"];
                while($feet[$counter]){
                    if($feetID == $feet[$counter]["ID"]){
                        $feetilvl = $feet[$counter]["ilvl"];
                        //echo $feetilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Earrings
            case "8":
                $earringsID = $data[$i]["current"];
                while($earrings[$counter]){
                    if($earringsID == $earrings[$counter]["ID"]){
                        $earringsilvl = $earrings[$counter]["ilvl"];
                        //echo $earringsilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Necklace
            case "9":
                $necklaceID = $data[$i]["current"];
                while($necklace[$counter]){
                    if($necklaceID == $necklace[$counter]["ID"]){
                        $necklaceilvl = $necklace[$counter]["ilvl"];
                        //echo $necklaceilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Bracelet
            case "10":
                $braceletID = $data[$i]["current"];
                while($bracelet[$counter]){
                    if($braceletID == $bracelet[$counter]["ID"]){
                        $braceletilvl = $bracelet[$counter]["ilvl"];
                        //echo $braceletilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Ring 1
            case "11":
                $ring1ID = $data[$i]["current"];
                while($rings[$counter]){
                    if($ring1ID == $rings[$counter]["ID"]){
                        $ring1ilvl = $rings[$counter]["ilvl"];
                        //echo $ring1ilvl . "<br>";
                    }
                    $counter++;
                }
                break;
            // Ring 2
            case "12":
                $ring2ID = $data[$i]["current"];
                while($rings[$counter]){
                    if($ring2ID == $rings[$counter]["ID"]){
                        $ring2ilvl = $rings[$counter]["ilvl"];
                        //echo $ring2ilvl . "<br>";
                    }
                    $counter++;
                }
                break;
        }
    }

    //Item-Level Calculation

    if($offilvl == NULL ){
        $sum = $mainilvl+$headilvl+$bodyilvl+$handsilvl+$legsilvl+$feetilvl+$earringsilvl+$necklaceilvl+$braceletilvl+$ring1ilvl+$ring2ilvl;
        $ilvl = round($sum/11);
    } else {
        $sum = $mainilvl+$offilvl+$headilvl+$bodyilvl+$handsilvl+$legsilvl+$feetilvl+$earringsilvl+$necklaceilvl+$braceletilvl+$ring1ilvl+$ring2ilvl;
        $ilvl = round($sum/12);
    }
    echo $ilvl;
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

