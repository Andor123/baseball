<?php
include_once 'header.php';
include_once 'navigation.php';
?>
    <section>
        <div class="subtitle">
            <h2>Országok résztvétele kontinensenként</h2>
        </div>
        <div class="form">
            <form method="post" action="" name="continent_participation" id="continent_participation"></form>
            <button type="button" class="btn btn-default" id="submit" form="continent_participation" onclick="showTable5()">Tábla kiíratása</button>
            <div id="table"></div><br />
        </div>
    </section>
<?php
include_once 'footer.php';
?>