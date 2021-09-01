<div class="row">
    <h1 class="font-header">Add A Member</h1>
</div>
<div class="row member-table">
    <form action="/functions/addMember.php" method="post">
        <div class="row justify-content-center">
            <div class="form-floating floatlabel">
                <input type="text" class="form-control" id="name" placeholder="Character Name" name="name">
                <label for="name">Character Name</label>
            </div>
        </div>
        <br>
        <div class="row justify-content-evenly">
            <div class="col-6">
                <div class="form-floating floatlabel">
                    <select class="form-select" id="primaryjob" name="primary">
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
                        <option value="BRD">BRD</option>
                        <option value="MCH">MCH</option>
                        <option value="DNC">DNC</option>
                        <option value="BLM">BLM</option>
                        <option value="SMN">SMN</option>
                        <option value="RDM">RDM</option>
                    </select>
                    <label for="primaryjob">Primary Job</label>
                </div>
            </div>
            <div class="col-6">
                <div class="form-floating floatlabel">
                    <select class="form-select" id="secondaryjob" name="secondary">
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
                        <option value="BRD">BRD</option>
                        <option value="MCH">MCH</option>
                        <option value="DNC">DNC</option>
                        <option value="BLM">BLM</option>
                        <option value="SMN">SMN</option>
                        <option value="RDM">RDM</option>
                    </select>
                    <label for="secondaryjob">Secondary Job</label>
                </div>
            </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-auto">
                <button type="submit" class="btn btn-light">Add Member</button>
            </div>
        </div>
    </form>
</div>