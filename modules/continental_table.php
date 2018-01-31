<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $sql = "SELECT continent_name, gold_medals, silver_medals, bronze_medals, total_medals FROM continents ORDER BY gold_medals DESC, silver_medals DESC, bronze_medals DESC";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<div class="table-responsive">';
    $html .= '<table border="1" align="center" class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Kontinens neve</th>';
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
            $html .= '<td>' . $row['continent_name'] . '</td>';
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
    $html .= '<button type="button" class="btn btn-default" id="submit" form="continental_table" onclick="hideTable2()">Tábla becsukása</button>';
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
include_once 'views/continental_table.php';
?>