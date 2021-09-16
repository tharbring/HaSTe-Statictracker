<?php
$id = $_GET["id"];

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Player-Data
$sql = $conn->prepare("SELECT name, job_primary FROM members WHERE ID = '$id'");
$sql -> execute();
$res = $sql->fetch();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/getExternalGear.php');

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/gearFunctions.php');

$updateURL = "/functions/updateGear.php?id=" . $id;

?>

<div class="row">
    <h1 class="font-header"><?php echo $res["name"]; ?></h1>
</div>
<?php 
echo $main[0]["name"];
functionTest($main);
?>
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
                <select class="form-select" id="maincur" name="maincur">
                    <?php mainhandSelector($main); ?>
                </select>
                <p>Best in Slot</p>
                <select class="form-select" id="mainbis" name="mainbis">'</select>
            </div>
        </div>
        <div class="col-4 bg-2">
            <div class="row">
                <p>Armor</p>
            </div>
            <div class="row">
            </div>
        </div>
        <div class="col-4 bg-3">
            <div class="row">
                <p>Accessories</p>
            </div>
            <div class="row">
            </div>
        </div>
    </div>
</form>