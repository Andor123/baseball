<nav class="navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                <span class="sr-only">Toogle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">WBSC Baseball Világbajnokság</a>
        </div>
        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav">
                <?php
                foreach ($menu as $key => $value) {
                    echo '<li><a href="index.php?pg=' . $key . '">' . $value . '</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
