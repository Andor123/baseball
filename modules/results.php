<?php
if (isset($_GET['ajax']) && $_GET['ajax'] == 1) {
    $html = '';
    $html .= '<p class="champion">1. Etiópia</p>';
    $html .= '<p class="runner-up">2. Srí Lanka</p>';
    $html .= '<p class="third">3. Barbados</p>';
    $html .= '<p>4. Kuba</p>';
    $html .= '<p>5. Kambodzsa</p>';
    $html .= '<p>6. Libéria</p>';
    $html .= '<p>7. Mikronézia</p>';
    $html .= '<p>8. Djibouti</p>';
    $html .= '<p>9. Pápua Új-Guinea</p>';
    $html .= '<p>10. Albánia</p>';
    $html .= '<p>11. Szaud-Arábia</p>';
    $html .= '<p>12. Marshall-szigetek</p>';
    $html .= '<p>13. Szlovákia</p>';
    $html .= '<p>14. El Salvador</p>';
    $html .= '<p>15. Vanuatu</p>';
    $html .= '<p>16. Magyarország</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 2) {
    $html = '';
    $html .= '<p class="champion">1. Srí Lanka</p>';
    $html .= '<p class="runner-up">2. Bosznia és Hercegovina</p>';
    $html .= '<p class="third">3. Mikronézia</p>';
    $html .= '<p>4. Irán</p>';
    $html .= '<p>5. Kuba</p>';
    $html .= '<p>6. Barbados</p>';
    $html .= '<p>7. Salamon-szigetek</p>';
    $html .= '<p>8. Palau</p>';
    $html .= '<p>9. Djibouti</p>';
    $html .= '<p>10. Kambodzsa</p>';
    $html .= '<p>11. Vatikánváros</p>';
    $html .= '<p>12. Libéria</p>';
    $html .= '<p>13. Ecuador</p>';
    $html .= '<p>14. Mianmar</p>';
    $html .= '<p>15. Etiópia</p>';
    $html .= '<p>16. Szerbia</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 3) {
    $html = '';
    $html .= '<p class="champion">1. Togo</p>';
    $html .= '<p class="runner-up">2. Palau</p>';
    $html .= '<p class="third">3. Szenegál</p>';
    $html .= '<p>4. Bulgária</p>';
    $html .= '<p>5. Bosznia és Hercegovina</p>';
    $html .= '<p>6. Srí Lanka</p>';
    $html .= '<p>7. Barbados</p>';
    $html .= '<p>8. Kelet-Timor</p>';
    $html .= '<p>9. El Salvador</p>';
    $html .= '<p>10. Mikronézia</p>';
    $html .= '<p>11. Salamon-szigetek</p>';
    $html .= '<p>12. Liechtenstein</p>';
    $html .= '<p>13. Irán</p>';
    $html .= '<p>14. Gabon</p>';
    $html .= '<p>15. Kuba</p>';
    $html .= '<p>16. Benin</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 4) {
    $html = '';
    $html .= '<p class="champion">1. Kuba</p>';
    $html .= '<p class="runner-up">2. Szenegál</p>';
    $html .= '<p class="third">3. Bosznia és Hercegovina</p>';
    $html .= '<p>4. Macedónia</p>';
    $html .= '<p>5. Szamoa</p>';
    $html .= '<p>6. Lettország</p>';
    $html .= '<p>7. Salamon-szigetek</p>';
    $html .= '<p>8. Brunei</p>';
    $html .= '<p>9. Madagaszkár</p>';
    $html .= '<p>10. Srí Lanka</p>';
    $html .= '<p>11. Togo</p>';
    $html .= '<p>12. Bulgária</p>';
    $html .= '<p>13. Chile</p>';
    $html .= '<p>14. Kelet-Timor</p>';
    $html .= '<p>15. Barbados</p>';
    $html .= '<p>16. Palau</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 5) {
    $html = '';
    $html .= '<p class="champion">1. Jordánia</p>';
    $html .= '<p class="runner-up">2. Lettország</p>';
    $html .= '<p class="third">3. Paraguay</p>';
    $html .= '<p>4. Bahrain</p>';
    $html .= '<p>5. Brunei</p>';
    $html .= '<p>6. Kína</p>';
    $html .= '<p>7. Kuba</p>';
    $html .= '<p>8. Szenegál</p>';
    $html .= '<p>9. Togo</p>';
    $html .= '<p>10. Salamon-szigetek</p>';
    $html .= '<p>11. Szamoa</p>';
    $html .= '<p>12. Macedónia</p>';
    $html .= '<p>13. Panama</p>';
    $html .= '<p>14. Mali</p>';
    $html .= '<p>15. Tonga</p>';
    $html .= '<p>16. Bosznia és Hercegovina</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 6) {
    $html = '';
    $html .= '<p class="champion">1. Barbados</p>';
    $html .= '<p class="runner-up">2. Zambia</p>';
    $html .= '<p class="third">3. Brunei</p>';
    $html .= '<p>4. Kína</p>';
    $html .= '<p>5. Bahrain</p>';
    $html .= '<p>6. Tonga</p>';
    $html .= '<p>7. Jordánia</p>';
    $html .= '<p>8. Szamoa</p>';
    $html .= '<p>9. Paraguay</p>';
    $html .= '<p>10. Lettország</p>';
    $html .= '<p>11. Szenegál</p>';
    $html .= '<p>12. Salamon-szigetek</p>';
    $html .= '<p>13. Fehéroroszország</p>';
    $html .= '<p>14. Kuba</p>';
    $html .= '<p>15. Ghána</p>';
    $html .= '<p>16. Észtország</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 7) {
    $html = '';
    $html .= '<p class="champion">1. Mikronézia</p>';
    $html .= '<p class="runner-up">2. Seychelle-szigetek</p>';
    $html .= '<p class="third">3. Zambia</p>';
    $html .= '<p>4. Tonga</p>';
    $html .= '<p>5. Vatikánváros</p>';
    $html .= '<p>6. Bahrain</p>';
    $html .= '<p>7. Trinidád és Tobago</p>';
    $html .= '<p>8. Barbados</p>';
    $html .= '<p>9. Észtország</p>';
    $html .= '<p>10. Szamoa</p>';
    $html .= '<p>11. Puerto Rico</p>';
    $html .= '<p>12. Finnország</p>';
    $html .= '<p>13. Közép-afrikai Köztársaság</p>';
    $html .= '<p>14. Kína</p>';
    $html .= '<p>15. Jordánia</p>';
    $html .= '<p>16. Brunei</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 8) {
    $html = '';
    $html .= '<p class="champion">1. Trinidád és Tobago</p>';
    $html .= '<p class="runner-up">2. Barbados</p>';
    $html .= '<p class="third">3. Seychelle-szigetek</p>';
    $html .= '<p>4. Vatikánváros</p>';
    $html .= '<p>5. Kanada</p>';
    $html .= '<p>6. Madagaszkár</p>';
    $html .= '<p>7. Tonga</p>';
    $html .= '<p>8. Dánia</p>';
    $html .= '<p>9. Zambia</p>';
    $html .= '<p>10. Bahrain</p>';
    $html .= '<p>11. Pakisztán</p>';
    $html .= '<p>12. Törökország</p>';
    $html .= '<p>13. Mikronézia</p>';
    $html .= '<p>14. Olaszország</p>';
    $html .= '<p>15. Comore-szigetek</p>';
    $html .= '<p>16. Marshall-szigetek</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 9) {
    $html = '';
    $html .= '<p class="champion">1. Bissau-Guinea</p>';
    $html .= '<p class="runner-up">2. Grúzia</p>';
    $html .= '<p class="third">3. Tonga</p>';
    $html .= '<p>4. Barbados</p>';
    $html .= '<p>5. Dánia</p>';
    $html .= '<p>6. Trinidád és Tobago</p>';
    $html .= '<p>7. Laos</p>';
    $html .= '<p>8. Seychelle-szigetek</p>';
    $html .= '<p>9. Törökország</p>';
    $html .= '<p>10. Maldív-szigetek</p>';
    $html .= '<p>11. Új-Zéland</p>';
    $html .= '<p>12. Kanada</p>';
    $html .= '<p>13. Olaszország</p>';
    $html .= '<p>14. Vatikánváros</p>';
    $html .= '<p>15. Madagaszkár</p>';
    $html .= '<p>16. Marshall-szigetek</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 10) {
    $html = '';
    $html .= '<p class="champion">1. Dánia</p>';
    $html .= '<p class="runner-up">2. Tonga</p>';
    $html .= '<p class="third">3. Seychelle-szigetek</p>';
    $html .= '<p>4. Bissau-Guinea</p>';
    $html .= '<p>5. Jemen</p>';
    $html .= '<p>6. Makaó</p>';
    $html .= '<p>7. Szamoa</p>';
    $html .= '<p>8. Nauru</p>';
    $html .= '<p>9. Grúzia</p>';
    $html .= '<p>10. Bosznia és Hercegovina</p>';
    $html .= '<p>11. Barbados</p>';
    $html .= '<p>12. Trinidád és Tobago</p>';
    $html .= '<p>13. Mexikó</p>';
    $html .= '<p>14. Izland</p>';
    $html .= '<p>15. Laos</p>';
    $html .= '<p>16. Zimbabwe</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 11) {
    $html = '';
    $html .= '<p class="champion">1. Jamaica</p>';
    $html .= '<p class="runner-up">2. Nauru</p>';
    $html .= '<p class="third">3. Makaó</p>';
    $html .= '<p>4. Moldova</p>';
    $html .= '<p>5. Jemen</p>';
    $html .= '<p>6. Dánia</p>';
    $html .= '<p>7. Bissau-Guinea</p>';
    $html .= '<p>8. Vietnám</p>';
    $html .= '<p>9. Románia</p>';
    $html .= '<p>10. Dominika</p>';
    $html .= '<p>11. Seychelle-szigetek</p>';
    $html .= '<p>12. Egyenlítői Guinea</p>';
    $html .= '<p>13. Szamoa</p>';
    $html .= '<p>14. Lesotho</p>';
    $html .= '<p>15. Tonga</p>';
    $html .= '<p>16. Venezuela</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 12) {
    $html = '';
    $html .= '<p class="champion">1. Bissau-Guinea</p>';
    $html .= '<p class="runner-up">2. Salamon-szigetek</p>';
    $html .= '<p class="third">3. Dánia</p>';
    $html .= '<p>4. Vietnám</p>';
    $html .= '<p>5. Szudán</p>';
    $html .= '<p>6. Tanzánia</p>';
    $html .= '<p>7. Pápua Új-Guinea</p>';
    $html .= '<p>8. Kína</p>';
    $html .= '<p>9. Nauru</p>';
    $html .= '<p>10. Grenada</p>';
    $html .= '<p>11. Románia</p>';
    $html .= '<p>12. Moldova</p>';
    $html .= '<p>13. Makaó</p>';
    $html .= '<p>14. Ecuador</p>';
    $html .= '<p>15. Jemen</p>';
    $html .= '<p>16. Jamaica</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 13) {
    $html = '';
    $html .= '<p class="champion">1. Nicaragua</p>';
    $html .= '<p class="runner-up">2. Salamon-szigetek</p>';
    $html .= '<p class="third">3. Fehéroroszország</p>';
    $html .= '<p>4. Vietnám</p>';
    $html .= '<p>5. Bissau-Guinea</p>';
    $html .= '<p>6. Pápua Új-Guinea</p>';
    $html .= '<p>7. Kína</p>';
    $html .= '<p>8. Guatemala</p>';
    $html .= '<p>9. Kiribati</p>';
    $html .= '<p>10. Brunei</p>';
    $html .= '<p>11. Tanzánia</p>';
    $html .= '<p>12. Venezuela</p>';
    $html .= '<p>13. Monaco</p>';
    $html .= '<p>14. Dánia</p>';
    $html .= '<p>15. Bhután</p>';
    $html .= '<p>16. Szudán</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 14) {
    $html = '';
    $html .= '<p class="champion">1. Jordánia</p>';
    $html .= '<p class="runner-up">2. Zöld-foki Köztársaság</p>';
    $html .= '<p class="third">3. Montenegró</p>';
    $html .= '<p>4. Bissau-Guinea</p>';
    $html .= '<p>5. Koszovó</p>';
    $html .= '<p>6. Benin</p>';
    $html .= '<p>7. Fehéroroszország</p>';
    $html .= '<p>8. Nicaragua</p>';
    $html .= '<p>9. Antigua és Barbuda</p>';
    $html .= '<p>10. Pápua Új-Guinea</p>';
    $html .= '<p>11. Guatemala</p>';
    $html .= '<p>12. Salamon-szigetek</p>';
    $html .= '<p>13. Litvánia</p>';
    $html .= '<p>14. Vietnám</p>';
    $html .= '<p>15. Kína</p>';
    $html .= '<p>16. Tuvalu</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 15) {
    $html = '';
    $html .= '<p class="champion">1. Fehéroroszország</p>';
    $html .= '<p class="runner-up">2. Benin</p>';
    $html .= '<p class="third">3. Thaiföld</p>';
    $html .= '<p>4. Kuba</p>';
    $html .= '<p>5. Montenegró</p>';
    $html .= '<p>6. Vietnám</p>';
    $html .= '<p>7. Bissau-Guinea</p>';
    $html .= '<p>8. Szamoa</p>';
    $html .= '<p>9. Salamonk-szigetek</p>';
    $html .= '<p>10. Észak-Korea</p>';
    $html .= '<p>11. Jordánia</p>';
    $html .= '<p>12. Nicaragua</p>';
    $html .= '<p>13. Vanuatu</p>';
    $html .= '<p>14. Zöld-foki Köztársaság</p>';
    $html .= '<p>15. Koszovó</p>';
    $html .= '<p>16. Puerto Rico</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 16) {
    $html = '';
    $html .= '<p class="champion">1. Kazahsztán</p>';
    $html .= '<p class="runner-up">2. Tunézia</p>';
    $html .= '<p class="third">3. Montenegró</p>';
    $html .= '<p>4. Kuba</p>';
    $html .= '<p>5. Bahama-szigetek</p>';
    $html .= '<p>6. Fehéroroszorság</p>';
    $html .= '<p>7. Szamoa</p>';
    $html .= '<p>8. Bissau-Guinea</p>';
    $html .= '<p>9. Új-Zéland</p>';
    $html .= '<p>10. Vietnám</p>';
    $html .= '<p>11. Dél-Korea</p>';
    $html .= '<p>12. Benin</p>';
    $html .= '<p>13. Bulgária</p>';
    $html .= '<p>14. Venezuela</p>';
    $html .= '<p>15. Tonga</p>';
    $html .= '<p>16. Thaiföld</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 17) {
    $html = '';
    $html .= '<p class="champion">1. Irán</p>';
    $html .= '<p class="runner-up">2. Kuba</p>';
    $html .= '<p class="third">3. Bahama-szigetek</p>';
    $html .= '<p>4. Kazahsztán</p>';
    $html .= '<p>5. Antigua és Barbuda</p>';
    $html .= '<p>6. Uruguay</p>';
    $html .= '<p>7. Tonga</p>';
    $html .= '<p>8. Makaó</p>';
    $html .= '<p>9. Mali</p>';
    $html .= '<p>10. Spanyolország</p>';
    $html .= '<p>11. Tunézia</p>';
    $html .= '<p>12. Fehéroroszország</p>';
    $html .= '<p>13. Marshall-szigetek</p>';
    $html .= '<p>14. Bissau-Guinea</p>';
    $html .= '<p>15. Montenegró</p>';
    $html .= '<p>16. Szamoa</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}

if (isset($_GET['ajax']) && $_GET['ajax'] == 18) {
    $html = '';
    $html .= '<p class="champion">1. Fidzsi-szigetek</p>';
    $html .= '<p class="runner-up">2. Nigéria</p>';
    $html .= '<p class="third">3. Kazahsztán</p>';
    $html .= '<p>4. Tonga</p>';
    $html .= '<p>5. Makaó</p>';
    $html .= '<p>6. Portugália</p>';
    $html .= '<p>7. Kiribati</p>';
    $html .= '<p>8. Uruguay</p>';
    $html .= '<p>9. Antigua és Barbuda</p>';
    $html .= '<p>10. Botswana</p>';
    $html .= '<p>11. Irán</p>';
    $html .= '<p>12. Kuba</p>';
    $html .= '<p>13. Szlovákia</p>';
    $html .= '<p>14. Mali</p>';
    $html .= '<p>15. Bahama-szigetek</p>';
    $html .= '<p>16. San Marino</p>';

    $response = array(
        'status' => 'success',
        'html' => $html
    );

    echo json_encode($response);
    exit();
}
include_once 'views/results.php';
?>