<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $name = mysqli_real_escape_string($connection, $_POST['country_name']);

    if (isset($name) && empty($name)) {
        $html = '';

        $response = array(
            'status' => 'success',
            'html' => $html
        );

        echo json_encode($response);
        exit();
    }

    if (isset($name) && !empty($name)) {
        $sql = "SELECT participation.flag, participation.country_name, participation.number_of_participations, participation.participating_years, medal_table.gold_medals, medal_table.silver_medals, medal_table.bronze_medals, medal_table.total_medals FROM participation JOIN medal_table ON participation.medal_id = medal_table.id WHERE participation.country_name LIKE '%$name%' AND participation.medal_id IS NOT NULL";
        $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

        $sql2 = "SELECT flag, country_name, number_of_participations, participating_years FROM participation WHERE country_name LIKE '%$name%' AND medal_id IS NULL";
        $result2 = mysqli_query($connection, $sql2) or die(mysqli_error($connection));

        $html = '';
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $html .= '<div class="table-responsive">';
                $html .= '<table border="1" align="center" class="table">';
                $html .= '<thead>';
                $html .= '<tr>';
                $html .= '<th>Zászló</th>';
                $html .= '<th>Ország neve</th>';
                $html .= '<th>Résztvételek száma</th>';
                $html .= '<th>Résztvételek évei</th>';
                $html .= '<th class="gold">Arany</th>';
                $html .= '<th class="silver">Ezüst</th>';
                $html .= '<th class="bronze">Bronz</th>';
                $html .= '<th>Össz</th>';
                $html .= '</tr>';
                $html .= '</thead>';
                $html .= '<tbody>';
                $html .= '<tr>';
                $html .= '<td><img src="images/' . $row['flag'] . '" alt="flag" class="img-responsive center-block" /></td>';
                $html .= '<td>' . $row['country_name'] . '</td>';
                $html .= '<td>' . $row['number_of_participations'] . '</td>';
                $html .= '<td>' . $row['participating_years'] . '</td>';
                $html .= '<td>' . $row['gold_medals'] . '</td>';
                $html .= '<td>' . $row['silver_medals'] . '</td>';
                $html .= '<td>' . $row['bronze_medals'] . '</td>';
                $html .= '<td>' . $row['total_medals'] . '</td>';
                $html .= '</tr>';
                $html .= '</tbody>';
                $html .= '</table>';
                $html .= '</div>';
                $html .= '<div class="form">';
                $html .= '<button type="button" class="btn btn-default" id="submit" form="search" onclick="hideTable6()">Tábla becsukása</button>';
                $html .= '</div>';
            }
        }

        if (mysqli_num_rows($result2) > 0) {
            while ($row2 = mysqli_fetch_array($result2)) {
                $html .= '<div class="table-responsive">';
                $html .= '<table border="1" align="center" class="table">';
                $html .= '<thead>';
                $html .= '<tr>';
                $html .= '<th>Zászló</th>';
                $html .= '<th>Ország neve</th>';
                $html .= '<th>Résztvételek száma</th>';
                $html .= '<th>Résztvételek évei</th>';
                $html .= '</tr>';
                $html .= '</thead>';
                $html .= '<tbody>';
                $html .= '<tr>';
                $html .= '<td><img src="images/' . $row2['flag'] . '" alt="flag" class="img-responsive center-block" /></td>';
                $html .= '<td>' . $row2['country_name'] . '</td>';
                $html .= '<td>' . $row2['number_of_participations'] . '</td>';
                $html .= '<td>' . $row2['participating_years'] . '</td>';
                $html .= '</tr>';
                $html .= '</tbody>';
                $html .= '</table>';
                $html .= '</div>';
                $html .= '<div class="form">';
                $html .= '<button type="button" class="btn btn-default" id="submit" form="search" onclick="hideTable6()">Tábla becsukása</button>';
                $html .= '</div>';
            }
        }

        $response = array(
            'status' => 'success',
            'html' => $html,
            'sql' => $sql
        );

        echo json_encode($response);
        exit();
    }
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
include_once 'views/search.php';
?>