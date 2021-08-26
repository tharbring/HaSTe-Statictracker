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
                    <td>Legiana Yukihime</td>
                    <td>
                        <select class="form-select">
                            <option value="1">PLD</option>
                            <option value="2">WAR</option>
                            <option value="3">DRK</option>
                            <option value="4">GNB</option>
                            <option value="5">WHM</option>
                            <option value="6">SCH</option>
                            <option value="7">AST</option>
                            <option value="8">SGE</option>
                            <option value="9">MNK</option>
                            <option value="10">DRG</option>
                            <option value="11">NIN</option>
                            <option value="12">SAM</option>
                            <option value="13">RPR</option>
                            <option value="14" selected>BRD</option>
                            <option value="15">MCH</option>
                            <option value="16">DNC</option>
                            <option value="17">BLM</option>
                            <option value="18">SMN</option>
                            <option value="19">RDM</option>
                        </select>
                    </td>
                    <td>
                        <select class="form-select">
                            <option value="1">PLD</option>
                            <option value="2">WAR</option>
                            <option value="3">DRK</option>
                            <option value="4">GNB</option>
                            <option value="5" selected>WHM</option>
                            <option value="6">SCH</option>
                            <option value="7">AST</option>
                            <option value="8">SGE</option>
                            <option value="9">MNK</option>
                            <option value="10">DRG</option>
                            <option value="11">NIN</option>
                            <option value="12">SAM</option>
                            <option value="13">RPR</option>
                            <option value="14">BRD</option>
                            <option value="15">MCH</option>
                            <option value="16">DNC</option>
                            <option value="17">BLM</option>
                            <option value="18">SMN</option>
                            <option value="19">RDM</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="submit" class="btn btn-light">Save Changes</button>
    </form>
</div>
