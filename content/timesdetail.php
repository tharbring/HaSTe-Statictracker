<div class="row">
    <h1 class="font-header">Detailed Timetable</h1>
</div>
<br>
<div class="row justify-content-evenly">
    <div class="col-auto">
        <a class="btn btn-light" href="./index.php">Back To Overview</a>
    </div>
</div>
<br>
<div class="row timesdetail-table">
    <table class="table table-dark table-bordered table-sm border-dark">
        <thead>
            <tr>
                <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/showDetailedTimetableHeader.php'); ?>
            </tr>
        </thead>
        <tbody>
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/showDetailedTimetableContent.php'); ?>
        </tbody>
    </table>
</div>
<br>
<div class="row justify-content-evenly">
    <div class="col-auto">
        <a class="btn btn-light" href="./index.php">Back To Overview</a>
    </div>
</div>
<br>
