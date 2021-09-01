<?php
$id = $_GET["id"];

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

//Fetch Player-Data
$sql = $conn->prepare("SELECT name FROM members WHERE ID = '$id'");
$sql -> execute();
$res = $sql->fetch();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

$updateURL = "/functions/updateTimes.php?id=" . $id;

?>

<div class="row">
    <h1 class="font-header"><?php echo $res["name"]; ?></h1>
</div>
<div class="row times-table">
    <form action="<?php echo $updateURL; ?>" method="post">
        <table class="table table-hover table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Day</th>
                    <th scope="col">Timeslot</th>
                    <th scope="col">Available</th>
                    <th scope="col">Maybe</th>
                    <th scope="col">Unavialable</th>
                </tr>
            </thead>
            <tbody>
                <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/showPlayerTimes.php'); ?>
            </tbody>
        </table>
        <div class="row justify-content-evenly">
            <div class="col-auto">
                <button type="submit" class="btn btn-light">Save Changes</button>
            </div>
        </div>
    </form>
</div>
<br>
<br>