<?php


/*function createGenreDropDown() {

    require_once('db.php');
    $dbcon = createDbConnection();

    $sql = "SELECT DISTINCT genre FROM title_genres;";

    $prepare = $dbcon->prepare($sql);
    $prepare->execute();

    $rows = $prepare->fetchAll();
    $html = '<select name="genre">';

    foreach($rows as $row) {
        $html .= '<option>' . $row['genre'] . '</option>'; 
    }
    $html .= '</select>';
    return $html;


}
*/

function createYearDropDown() {

    require_once('db.php');
    $dbcon = createDbConnection();

    $sql = "SELECT DISTINCT start_year FROM titles;";

    $prepare = $dbcon->prepare($sql);
    $prepare->execute();

    $rows = $prepare->fetchAll();
    $html = '<select name="start_year">';

    foreach($rows as $row) {
        $html .= '<option>' . $row['start_year'] . '</option>'; 
    }
    $html .= '</select>';
    return $html;


}

function createRoleDropDown() {

    require_once('db.php');
    $dbcon = createDbConnection();

    $sql = "SELECT DISTINCT role_ FROM had_role";

    $prepare = $dbcon->prepare($sql);
    $prepare->execute();

    $rows = $prepare->fetchAll();
    $html = '<select name="role_">';

    foreach($rows as $row) {
        $html .= '<option>' . $row['role_'] . '</option>'; 
    }
    $html .= '</select>';
    return $html;


}





?>