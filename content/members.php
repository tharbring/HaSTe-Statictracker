<?php

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbaccess.php');

$sql = $conn->prepare("SELECT COUNT(*) FROM members");
$sql -> execute();
$row = $sql->fetchColumn();

include ($_SERVER['DOCUMENT_ROOT'] . '/functions/dbclose.php');

function ToggleAddmembers($count){
    if ($count >= 8){
        $output = '
        <div class="col-auto">
            <a class="btn btn-light disabled" href="./index.php?page=addmember">Add Member</a>
        </div>';
    } else {
        $output = '
        <div class="col-auto">
            <a class="btn btn-light" href="./index.php?page=addmember">Add Member</a>
        </div>';
    }
    echo $output;
}

?>


<div class="row">
    <h1 class="font-header">Static-Members</h1>
</div>
<div class="row member-table">
    <form action="/functions/updateMembers.php" method="post">
        <table class="table table-hover table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Role</th>
                    <th scope="col">Name</th>
                    <th scope="col">Primary Job</th>
                    <th scope="col">Secondary Job</th>
                </tr>
            </thead>
            <tbody>
                <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/showMembers.php'); ?>
            </tbody>
        </table>
        <div class="row justify-content-evenly">
            <?php ToggleAddmembers($row); ?>
            <div class="col-auto">
                <button type="submit" class="btn btn-light">Save Changes</button>
            </div>
        </div>
    </form>
</div>
