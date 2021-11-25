<div class="row">
    <!--<h1 class="font-header">Alt Tab V2.0</h1>-->
    <h1 class="font-header">Statictracker-Demo</h1>
</div>
<br>
<br>
<div class="row">
    <div class="col-8 overview-table">
        <div class="row text-center">
            <h1 class="font-subheader">Available Times</h1>
            <a class="font-link" href="./index.php?page=timesdetail">To Detailed View</a>
        </div>
        <br>
        <div class="row">
            <table class="table table-hover table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Day</th>
                        <th scope="col">Timeslot</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/overview.php'); ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-4 overview-lootorder">
        <div class="row text-center">
            <h1 class="font-subheader">Lootorder</h1>
        </div>
        <br>
        <div class="row">
            <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/createLootorder.php'); ?>
        </div>
    </div>
</div>