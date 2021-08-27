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
                <tr>
                    <th scope="row">Tank</th>
                    <td>
                        <input type="text" class="form-control" id="name" value="Legiana Yukihime">
                    </td>
                    <td>
                        <select class="form-select" id="primaryjob">
                            <option value="PLD">PLD</option>
                            <option value="WAR">WAR</option>
                            <option value="DRK">DRK</option>
                            <option value="GNB">GNB</option>
                            <option value="WHM">WHM</option>
                            <option value="SCH">SCH</option>
                            <option value="AST">AST</option>
                            <option value="SGE">SGE</option>
                            <option value="MNK">MNK</option>
                            <option value="DRG">DRG</option>
                            <option value="NIN">NIN</option>
                            <option value="SAM">SAM</option>
                            <option value="RPR">RPR</option>
                            <option value="BRD" selected>BRD</option>
                            <option value="MCH">MCH</option>
                            <option value="DNC">DNC</option>
                            <option value="BLM">BLM</option>
                            <option value="SMN">SMN</option>
                            <option value="RDM">RDM</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-select" id="secondaryjob">
                            <option value="PLD">PLD</option>
                            <option value="WAR">WAR</option>
                            <option value="DRK">DRK</option>
                            <option value="GNB">GNB</option>
                            <option value="WHM" selected>WHM</option>
                            <option value="SCH">SCH</option>
                            <option value="AST">AST</option>
                            <option value="SGE">SGE</option>
                            <option value="MNK">MNK</option>
                            <option value="DRG">DRG</option>
                            <option value="NIN">NIN</option>
                            <option value="SAM">SAM</option>
                            <option value="RPR">RPR</option>
                            <option value="BRD">BRD</option>
                            <option value="MCH">MCH</option>
                            <option value="DNC">DNC</option>
                            <option value="BLM">BLM</option>
                            <option value="SMN">SMN</option>
                            <option value="RDM">RDM</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="row justify-content-evenly">
            <div class="col-auto">
                <a class="btn btn-light" href="./index.php?page=addmembers">Add Member</a>
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-light">Save Changes</button>
            </div>
        </div>
    </form>
</div>
