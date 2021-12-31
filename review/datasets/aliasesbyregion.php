<?php


require_once('../db.php');

//lue region get-parametri muuttujaan
$region = $_GET['region'];
$dbcon = createDbConnection(); // kutsutaan db

$sql = "CALL GetAliasesByRegion('" . $region . "');";
//tarkistukset yms
//aja kysely kantaan
$prepare = $dbcon->prepare($sql);
$prepare->execute();
//tallenna vastaus muuttujaan
$rows = $prepare->fetchAll();
//tulosta otsikko
$html = '<h1> Aliases by region' . $region . '</h1>';
// avaa ul-elementti
$html .= '<ul>';
//looppaa tietokannasta saadut rivit läpi
foreach($rows as $row) {
    //tulostaa jokaiselle riville li-elementti
    $html .= '<li>' . $row['title'] . '</li>';
}
$html .= '</ul>';
echo $html;



/*$sql = "SELECT title FROM aliases WHERE (region = 'FI') GROUP BY title_id 
    ORDER BY title LIMIT 10;";
    $sql = "CALL GetAliasesByCountry('FI');";
    $prepare = $dbcon->prepare($sql);   //valmistellaan
        $prepare->execute();  //kysely tietokantaan
        $rows = $prepare->fetchAll(); //haetaan tulokset (voitaisiin hakea myös eka rivi fetch ja tarkistus)
        $html = '<h1>Top 10 Finnish titles</h1>';
        $html .= '<ul>';
        //Käydään rivit läpi (max yksi rivi tässä tapauksessa) 
        foreach($rows as $row){
            $html .= '<li>' . $row["title"] . '</li>';  
        }
        $html .= '</ul>';

        echo $html*/






?>