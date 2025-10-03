<?php
include_once 'header.php';
include_once 'navigation.php';
?>
<section>
    <div class="subtitle">
        <h2>Éremtáblázat országonként</h2>
    </div>
    <div class="form">
        <form method="post" action="" name="medal_table" id="medal_table"></form>
        <button type="button" class="btn btn-default" id="submit" form="medal_table" onclick="showTable()">Tábla kiíratása</button>
        <div id="table"></div><br />
    </div>
</section>
<?php
include_once 'footer.php';
?>