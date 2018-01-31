<?php
include_once 'header.php';
include_once 'navigation.php';
?>
    <section>
        <div class="subtitle">
            <h2>Keresés</h2>
        </div>
        <div class="form">
            <form class="form-inline" method="post" action="" name="search" id="search">
                <div class="form-group">
                    <label for="country_name">Ország neve:</label><br /><br />
                    <input type="text" class="form-control" id="country_name" name="country_name" placeholder="Valami" />
                </div>
            </form><br />
            <button type="button" class="btn btn-default" id="submit" form="search" onclick="showTable6()">Keresés</button>
            <div id="table"></div>
        </div>
    </section>
<?php
include_once 'footer.php';
?>