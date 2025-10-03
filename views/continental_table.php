<?php
include_once 'header.php';
include_once 'navigation.php';
?>
    <section>
        <div class="subtitle">
            <h2>Éremtáblázat kontinensenként</h2>
        </div>
        <div class="form">
            <form method="post" action="" name="continental_table" id="continental_table"></form>
            <button type="button" class="btn btn-default" id="submit" form="continental_table" onclick="showTable2()">Tábla kiíratása</button>
            <div id="table"></div><br />
        </div>
    </section>
<?php
include_once 'footer.php';
?>