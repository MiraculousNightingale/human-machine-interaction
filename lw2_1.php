<link rel="stylesheet" type="text/css" href="styles/<?= basename(__FILE__, '.php') ?>.css">

<div class="main-block">
    <div class="add-block">
        <h6>Factory id</h6>
        <input id="fac_id" type="number">
        <h6>Name</h6>
        <input id="name" type="text">
        <h6>Surname</h6>
        <input id="surname" type="text">
        <h6>Middle name</h6>
        <input id="midname" type="text">
        <h6>Profession</h6>
        <input id="profession" type="text">
        <h6>Level</h6>
        <input id="level" type="number">
        <h6>Working years experience</h6>
        <input id="exp" type="number">
        <button onclick="addRecord()">Add Record</button>
    </div>

    <div class="filter-block">
        <div>
            <h5>Factory id</h5>
            <input id="fac-filter" type="number">
        </div>
        <div>
            <h5>Profession</h5>
            <div class="checkbox-block">
                <p>freezer</p><input class="prof-filter" placeholder="freezer" type="checkbox">
                <p>locksmith</p><input class="prof-filter" placeholder="locksmith" type="checkbox">
                <p>cleaner</p><input class="prof-filter" placeholder="cleaner" type="checkbox">
                <p>smith</p><input class="prof-filter" placeholder="smith" type="checkbox">
            </div>
            <!--            <select id="prof-filter">-->
            <!--                <option value="freezer">Freezer</option>-->
            <!--                <option value="locksmith">Locksmith</option>-->
            <!--                <option value="cleaner">Cleaner</option>-->
            <!--                <option value="smith">Smith</option>-->
            <!--            </select>-->
        </div>
        <div>
            <h5>Min. Experience</h5>
            <input id="exp-filter" type="number">
        </div>
        <div class="btn-row">
            <button onclick="renderContent(true)">Filter</button>
            <button onclick="renderContent()">Display all</button>
        </div>
    </div>
    <div class="view-block">
        <table id="content">
        </table>
    </div>
</div>

<table id="headers" class="invisible">
    <tr>
        <th>Factory id</th>
        <th>Name</th>
        <th>Profession</th>
        <th>Worker level</th>
        <th>Years of experience</th>
    </tr>
</table>

<script src="src/<?= basename(__FILE__, '.php') ?>.js" type="text/javascript"></script>
