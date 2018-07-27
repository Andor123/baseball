<?php
define('HOST','localhost');
define('USER','root');
define('PASSWORD','');
define('DATABASE','baseball');

$connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die(mysqli_connect_error());

if (mysqli_connect_errno()) {
    echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
}

mysqli_query($connection, 'SET NAMES utf8') or die(mysqli_error($connection));
mysqli_query($connection, 'SET CHARACTER SET utf8') or die(mysqli_error($connection));
mysqli_query($connection, 'SET COLLATION_CONNECTION="utf8_general_ci"') or die(mysqli_error($connection));

$menu = array(
    'medal_table' => 'Éremtáblázat(orszzágonként)',
    'continental_table' => 'Éremtáblázat(kontinensenként)',
    'results' => 'Világbajnokságok eredményei',
    'participation' => 'Résztvevő országok listája',
    'continent_participation' => 'Országok részvétele kontinensenként',
    'champions' => 'Világbajnokok listája',
    'search' => 'Keresés'
);
?>
