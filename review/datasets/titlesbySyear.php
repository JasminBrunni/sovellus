<?php

require_once('../db.php');


$title = $_GET['title'];
$dbcon = createDbConnection();

/*$sql = "SELECT `primary_title`
FROM `titles` INNER JOIN title_genres
ON titles.title_id = title_genres.title_id
WHERE genre LIKE '%:genre%" . $genre . "%'
LIMIT 10;";*/

$sql = "SELECT `title`
FROM `aliases` INNER JOIN 
ON aliases.title_id = titles.title_id
WHERE start_year LIKE '%:start_year%" . $start_year . "%'
LIMIT 10;";

$prepare = $dbcon->prepare($sql);
//bindaa arvot parametrit
$prepare->bindParam(':start_year', $title, PDO::PARAM_STR);
$prepare->execute();

$rows = $prepare->fetchAll();

$html = '<h1>' . $start_year . '</h1>';
$html .= '<ul>';
foreach($rows as $row){
$html .= '<li>' . $row['title'] .
 '</li>';
}
$html .= '</ul>';
echo $html;

?>