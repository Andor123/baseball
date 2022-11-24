<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $sql = "SELECT flag, country_name, gold_medals, silver_medals, bronze_medals, total_medals FROM medal_table ORDER BY gold_medals DESC, silver_medals DESC, bronze_medals DESC";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<div class="table-responsive">';
    $html .= '<table border="1" align="center" class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Zászló</th>';
    $html .= '<th>Ország neve</th>';
    $html .= '<th class="gold">Arany</th>';
    $html .= '<th class="silver">Ezüst</th>';
    $html .= '<th class="bronze">Bronz</th>';
    $html .= '<th>Össz</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td><img src="images/' . $row['flag'] . '" alt="flag" class="img-responsive center-block" style="border:1px solid black" /></td>';
            $html .= '<td>' . $row['country_name'] . '</td>';
            $html .= '<td>' . $row['gold_medals'] . '</td>';
            $html .= '<td>' . $row['silver_medals'] . '</td>';
            $html .= '<td>' . $row['bronze_medals'] . '</td>';
            $html .= '<td>' . $row['total_medals'] . '</td>';
            $html .= '</tr>';
        }
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '<div class="form">';
    $html .= '<button type="button" class="btn btn-default" id="submit" form="medal_table" onclick="hideTable()">Tábla becsukása</button>';
    $html .= '</div>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 2) {
    $html = '';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 3) {
    $offset = 0;
    $pg_result = 10;

    if (isset($_POST['row_num'])) {
        $pg_value = $_POST['row_num'];
        if ($pg_value > 1) {
            $offset = ($pg_value - 1) * $pg_result;
        }
    }

    $sql = "SELECT flag, country_name, gold_medals, silver_medals, bronze_medals, total_medals FROM medal_table ORDER BY gold_medals DESC, silver_medals DESC, bronze_medals DESC LIMIT $offset, $pg_result";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<div class="table-responsive">';
    $html .= '<table border="1" align="center" class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Zászló</th>';
    $html .= '<th>Ország neve</th>';
    $html .= '<th class="gold">Arany</th>';
    $html .= '<th class="silver">Ezüst</th>';
    $html .= '<th class="bronze">Bronz</th>';
    $html .= '<th>Össz</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td><img src="images/' . $row['flag'] . '" alt="flag" class="img-responsive center-block" style="border:1px solid black" /></td>';
            $html .= '<td>' . $row['country_name'] . '</td>';
            $html .= '<td>' . $row['gold_medals'] . '</td>';
            $html .= '<td>' . $row['silver_medals'] . '</td>';
            $html .= '<td>' . $row['bronze_medals'] . '</td>';
            $html .= '<td>' . $row['total_medals'] . '</td>';
            $html .= '</tr>';
        }
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '<div class="form">';
    $html .= '<button type="button" class="btn btn-default" id="submit" form="medal_table" onclick="hideTable()">Tábla becsukása</button>';
    $html .= '</div>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once 'views/medal_table.php';
?>