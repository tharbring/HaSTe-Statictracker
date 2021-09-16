<?php
$id = $_GET["id"];

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Player-Data
$sql = $conn->prepare("SELECT name, ID, job_primary FROM members WHERE ID = '$id'");
$sql -> execute();
$res = $sql->fetch();

$table = "gear" . $res["ID"];

//Fetch Gear-Data
$sql = $conn->prepare("SELECT * FROM $table ORDER BY slot ASC");
$sql -> execute();
$gear = $sql->fetchAll();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/getExternalGear.php');

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/gearFunctions.php');

$updateURL = "/functions/updateGear.php?id=" . $id;

?>

<div class="row">
    <h1 class="font-header"><?php echo $res["name"]; ?></h1>
</div>
<div class="row">
    <h4 class="font-subheader">Average Item-Level</h4>
</div>
<form action="<?php echo $updateURL; ?>" method="post">
    <div class="row gear-row text-center">
        <div class="col-4 bg-1">
            <div class="row">
                <p>Weaponry</p>
            </div>
            <div class="row">
                <p>Weapon</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="maincur" name="maincur">
                    <?php currentMainSelector($main, $gear[0]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="mainbis" name="mainbis">
                    <?php bisMainSelector($main, $gear[0]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Offhand</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="offcur" name="offcur">
                    <?php currentOffSelector($offhand, $gear[1]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="offbis" name="offbis">
                    <?php bisOffSelector($offhand, $gear[1]["bis"]); ?>
                </select>
            </div>
        </div>
        <div class="col-4 bg-2">
            <div class="row">
                <p>Armor</p>
            </div>
            <div class="row">
                <p>Head</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="headcur" name="headcur">
                    <?php currentHeadSelector($head, $gear[2]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="headbis" name="headbis">
                    <?php bisHeadSelector($head, $gear[2]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Body</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="bodycur" name="bodycur">
                    <?php currentBodySelector($body, $gear[3]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="bodybis" name="bodybis">
                    <?php bisBodySelector($body, $gear[3]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Hands</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="handscur" name="handscur">
                    <?php currentHandsSelector($hands, $gear[4]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="handsbis" name="handsbis">
                    <?php bisHandsSelector($hands, $gear[4]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Legs</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="legscur" name="legscur">
                    <?php currentLegsSelector($legs, $gear[5]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="legsbis" name="legsbis">
                    <?php bisLegsSelector($legs, $gear[5]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Feet</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="feetcur" name="feetcur">
                    <?php currentFeetSelector($feet, $gear[6]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="feetbis" name="feetbis">
                    <?php bisFeetSelector($feet, $gear[6]["bis"]); ?>
                </select>
            </div>
        </div>
        <div class="col-4 bg-3">
            <div class="row">
                <p>Accessories</p>
            </div>
            <div class="row">
                <p>Earrings</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="earringscur" name="earringscur">
                    <?php currentEarringsSelector($earrings, $gear[7]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="earringsbis" name="earringsbis">
                    <?php bisEarringsSelector($earrings, $gear[7]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Necklace</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="necklacecur" name="necklacecur">
                    <?php currentNecklaceSelector($necklace, $gear[8]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="necklacebis" name="necklacebis">
                    <?php bisNecklaceSelector($necklace, $gear[8]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Bracelets</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="braceletcur" name="braceletcur">
                    <?php currentBraceletSelector($bracelets, $gear[9]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="braceletbis" name="braceletbis">
                    <?php bisBraceletSelector($earrings, $gear[9]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Ring 1</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="ring1cur" name="ring1cur">
                    <?php currentRingSelector($rings, $gear[10]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="ring1bis" name="ring1bis">
                    <?php bisRingSelector($rings, $gear[10]["bis"]); ?>
                </select>
            </div>
            <div class="row">
                <p>Ring 2</p>
                <p>Equipped</p>
                <select class="form-select-sm" id="ring2cur" name="ring2cur">
                    <?php currentRingSelector($rings, $gear[11]["current"]); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select-sm" id="ring2bis" name="ring2bis">
                    <?php bisRingSelector($rings, $gear[11]["bis"]); ?>
                </select>
            </div>
        </div>
    </div>
</form>