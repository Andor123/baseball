<?php
include_once 'header.php';
include_once 'navigation.php';
?>
<section>
    <div class="subtitle">
        <h2>Világbajnokok listája</h2>
    </div>
    <div class="form">
        <form method="post" action="" name="champions" id="champions"></form>
        <button type="button" class="btn btn-default" id="submit" form="champions" onclick="showTable3()">Tábla kiíratása</button>
        <div id="table"></div>
    </div>
</section>
<?php
include_once 'footer.php';
?>