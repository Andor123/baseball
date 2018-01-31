<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $sql = "SELECT flag, country_name, number_of_participations, participating_years FROM participation ORDER BY number_of_participations DESC";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<div class="table-responsive">';
    $html .= '<table border="1" align="center" class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Zászló</th>';
    $html .= '<th>Ország neve</th>';
    $html .= '<th>Részvételek száma</th>';
    $html .= '<th>Részvételek évei</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td><img src="images/' . $row['flag'] . '" alt="flag" class="img-responsive center-block" /></td>';
            $html .= '<td>' . $row['country_name'] . '</td>';
            $html .= '<td>' . $row['number_of_participations'] . '</td>';
            $html .= '<td>' . $row['participating_years'] . '</td>';
            $html .= '</tr>';
        }
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '<div class="form">';
    $pg_result = 10;
    $pg_count = 110;
    $num = $pg_count / $pg_result;
    for ($i = 1; $i <= $num; $i++) {
        $html .= '<button type="button" class="btn btn-default" id="pagination" form="medal_table" onclick="getData2(' . $i . ')">' . $i . '</button>';
    }
    $html .= '<br>';
    $html .= '<button type="button" class="btn btn-default" id="submit" form="participation" onclick="hideTable4()">Tábla becsukása</button>';
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

    $sql = "SELECT flag, country_name, number_of_participations, participating_years FROM participation ORDER BY number_of_participations DESC LIMIT $offset, $pg_result";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    $html = '';
    $html .= '<div class="table-responsive">';
    $html .= '<table border="1" align="center" class="table">';
    $html .= '<thead>';
    $html .= '<tr>';
    $html .= '<th>Zászló</th>';
    $html .= '<th>Ország neve</th>';
    $html .= '<th>Részvételek száma</th>';
    $html .= '<th>Részvételek évei</th>';
    $html .= '</tr>';
    $html .= '</thead>';
    $html .= '<tbody>';
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $html .= '<tr>';
            $html .= '<td><img src="images/' . $row['flag'] . '" alt="flag" class="img-responsive center-block" /></td>';
            $html .= '<td>' . $row['country_name'] . '</td>';
            $html .= '<td>' . $row['number_of_participations'] . '</td>';
            $html .= '<td>' . $row['participating_years'] . '</td>';
            $html .= '</tr>';
        }
    }
    $html .= '</tbody>';
    $html .= '</table>';
    $html .= '</div>';
    $html .= '<div class="form">';
    $pg_count = 110;
    $num = $pg_count / $pg_result;
    for ($i = 1; $i <= $num; $i++) {
        $html .= '<button type="button" class="btn btn-default" id="pagination" form="medal_table" onclick="getData2(' . $i . ')">' . $i . '</button>';
    }
    $html .= '<br>';
    $html .= '<button type="button" class="btn btn-default" id="submit" form="participation" onclick="hideTable4()">Tábla becsukása</button>';
    $html .= '</div>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once 'views/participation.php';
?>