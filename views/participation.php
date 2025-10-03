<?php
include_once 'header.php';
include_once 'navigation.php';
?>
    <section>
        <div class="subtitle">
            <h2>Résztvevő országok listája</h2>
        </div>
        <div class="form">
            <form method="post" action="" name="participation" id="participation"></form>
            <button type="button" class="btn btn-default" id="submit" form="participation" onclick="showTable4()">Tábla kiíratása</button>
            <div id="table"></div><br />
        </div>
    </section>
<?php
include_once 'footer.php';
?>