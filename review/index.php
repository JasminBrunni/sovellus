<?php

    require_once('ultilities.php');



    $html = "<h2>Criteria</h2>";
    $html .= '<form action="GET">';

    $html .= createYearDropDown();

    /*$html .= createGenreDropDown();*/

    $html .= createRoleDropDown();

    $path = 'datasets';
        if($handle = opendir($path)) {
            while (false !== ($file = readdir($handle))){
                if('.' === $file) continue;
                if('..' === $file) continue;
                $html .= '<div><input type="submit" value="' .
                basename($file, ".php") . '"formaction="' .$path. "/" . $file . '"></div>';
            }
            closedir($handle);
        }
        $html .= '</form>';

    echo $html;


    /*$dbcon = createDbConnection();

    $sql = "SELECT `primary_title`
    FROM `titles` INNER JOIN title_genres
    ON titles.title_id = title_genres.title_id
    WHERE genre LIKE '%Documentary%'
    LIMIT 10;";

    $prepare = $dbcon->prepare($sql);
    $prepare->execute();

    $rows = $prepare->fetchAll();

    $html = '<h1>Documentaries</h1>';
    $html .= '<ul>';
    foreach($rows as $row){
    $html .= '<li>' . $row['primary_title'] .
     '</li>';
    }
    $html .= '</ul>';
    echo $html;*/







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

        echo $html;*/


        ?>