<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Tanks
$sql = $conn->prepare("SELECT * FROM members WHERE job_primary = 'PLD' OR job_primary = 'WAR' OR job_primary = 'DRK' or job_primary = 'GNB'");
$sql -> execute();
$tanks = $sql->fetchAll();

//Fetch Healers
$sql = $conn->prepare("SELECT * FROM members WHERE job_primary = 'WHM' OR job_primary = 'SCH' OR job_primary = 'AST' or job_primary = 'SGE'");
$sql -> execute();
$healers = $sql->fetchAll();

//Fetch DPS
$sql = $conn->prepare("SELECT * FROM members WHERE job_primary = 'MNK' OR job_primary = 'DRG' OR job_primary = 'NIN' or job_primary = 'SAM' OR job_primary = 'RPR' OR job_primary = 'BRD' OR job_primary = 'MCH' OR job_primary = 'DNC' OR job_primary = 'BLM' OR job_primary = 'SMN' OR job_primary = 'RDM'");
$sql -> execute();
$dps = $sql->fetchAll();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

function showSelectors($job){
    $jobs = array("PLD","WAR","DRK","GNB","WHM","SCH","AST","SGE","MNK","DRG","NIN","SAM","RPR","BRD","MCH","DNC","BLM","SMN","RDM");
    $output = "";
    for ($i = 0; $i < 19; $i++){
        if($job == $jobs[$i]){
            $output = $output . '<option value="' . $jobs[$i] . '" selected>' . $jobs[$i] . '</option>';
        } else {
            $output = $output . '<option value="' . $jobs[$i] . '">' . $jobs[$i] . '</option>';
        }
    }
    return $output;
}
$counter = 0;
//Show Tankrows
for($i = 0; $i<2; $i++){
    $counter++;
    echo '
        <tr>
            <th scope="row">
                <img src="/storage/img/role_tank.png" alt="Roleicon Tank" height="40">
            </th>
            <td>
                <input type="text" class="form-control" id="name" value="'. $tanks[$i]['name'] . '" name="name'.$counter.'">
            </td>
            <td>
                <select class="form-select" id="primaryjob" name="primary'.$counter.'">'. showSelectors($tanks[$i]['job_primary']) .'</select>
            </td>
            <td>
                <select class="form-select" id="secondaryjob" name="secondary'.$counter.'">'. showSelectors($tanks[$i]['job_secondary']) .'</select>
            </td>
        <tr>
    ';
}
//Show Healerrows
for($i = 0; $i<2; $i++){
    $counter++;
    echo '
        <tr>
            <th scope="row">
                <img src="/storage/img/role_heal.png" alt="Roleicon Heal" height="40">
            </th>
            <td>
                <input type="text" class="form-control" id="name" value="'. $healers[$i]['name'] . '" name="name'.$counter.'">
            </td>
            <td>
                <select class="form-select" id="primaryjob" name="primary'.$counter.'">'. showSelectors($healers[$i]['job_primary']) .'</select>
            </td>
            <td>
                <select class="form-select" id="secondaryjob" name="secondary'.$counter.'">'. showSelectors($healers[$i]['job_secondary']) .'</select>
            </td>
        <tr>
    ';
}
//Show DPSrows
for($i = 0; $i<4; $i++){
    $counter++;
    echo '
        <tr>
            <th scope="row">
                <img src="/storage/img/role_dps.png" alt="Roleicon DPS" height="40">
            </th>
            <td>
                <input type="text" class="form-control" id="name" value="'. $dps[$i]['name'] . '" name="name'.$counter.'">
            </td>
            <td>
                <select class="form-select" id="primaryjob" name="primary'.$counter.'">'. showSelectors($dps[$i]['job_primary']) .'</select>
            </td>
            <td>
                <select class="form-select" id="secondaryjob" name="secondary'.$counter.'">'. showSelectors($dps[$i]['job_secondary']) .'</select>
            </td>
        <tr>
    ';
}
