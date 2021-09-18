<div class="row">
    <h1 class="font-header">Loot-Priority</h1>
</div>
<form action="/functions/updateLootpriority.php" method="post">
    <div class="row priority-table">
        <table class="table table-hover table-dark table-striped">
            <caption class="table-caption">Set the priority for each player from 1 to 8 (1 being the highest, 8 the lowest, 0 meaning no need)</caption>
            <thead>
                <tr>
                    <th scope="col">Player</th>
                    <th scope="col">Mainhand</th>
                    <th scope="col">Offhand</th>
                    <th scope="col">Head</th>
                    <th scope="col">Body</th>
                    <th scope="col">Hands</th>
                    <th scope="col">Legs</th>
                    <th scope="col">Feet</th>
                    <th scope="col">Earrings</th>
                    <th scope="col">Necklace</th>
                    <th scope="col">Bracelet</th>
                    <th scope="col">Ring 1</th>
                    <th scope="col">Ring 2</th>
                </tr>
            </thead>
            <tbody>
                <?php include ($_SERVER['DOCUMENT_ROOT'] . '/functions/createPrioritytable.php'); ?>
            </tbody>
        </table>
    </div>
    <br>    
    <div class="row justify-content-evenly">
        <div class="col-auto">
            <button type="submit" class="btn btn-light">Save Changes</button>
        </div>
    </div>
</form>