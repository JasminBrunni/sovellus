<?php

/*//luotu uusi view tietokantaan josta voidaan hakea roolit maittain

require_once('../db.php');

//lue region get-parametri muuttujaan
$region = $_GET['role_'];
$dbcon = createDbConnection(); // kutsutaan db


$sql = "CALL getrolesbycountry('" . $role_ . "');";
//tarkistukset yms
//aja kysely kantaan
$prepare = $dbcon->prepare($sql);
$prepare->execute();
//tallenna vastaus muuttujaan
$rows = $prepare->fetchAll();
//tulosta otsikko
$html = '<h1> Role by Country' . $role_ . '</h1>';
// avaa ul-elementti
$html .= '<ul>';
//looppaa tietokannasta saadut rivit läpi
foreach($rows as $row) {
    //tulostaa jokaiselle riville li-elementti
    $html .= '<li>' . $row['role_'] . '</li>';
}
$html .= '</ul>';
echo $html;






?>