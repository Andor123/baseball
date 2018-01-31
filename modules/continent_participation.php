<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $sql = "SELECT continent_name, number_of_countries FROM continent_participation ORDER BY number_of_countries DESC";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<div class="table-responsive">';
    $html .= '<table border="1" align="center" class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Kontinens neve</th>';
    $html .= '<th>Résztvevő országok száma</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td>' . $row['continent_name'] . '</td>';
            $html .= '<td>' . $row['number_of_countries'] . '</td>';
            $html .= '</tr>';
        }
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '<div class="form">';
    $html .= '<button type="button" class="btn btn-default" id="submit" form="continent_participation" onclick="hideTable5()">Tábla becsukása</button>';
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
include_once 'views/continent_participation.php';
?>