<!--  tablice-wielowymiarowe-2.php
 2-backend/2-2-php/2-2-06-tablice/

 Created by Jakub Piskorowski on 23/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie tablic w języku PHP
-->
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $chessboard = array(
                array('w','s','g','h','k','g','s','w'),
                array('p','p','p','p','p','p','p','p'),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array('P','P','P','P','P','P','P','P'),
                array('W','S','G','H','K','G','S','W'),
            );
            echo "<pre>";
            foreach($chessboard as $row)
            {
                foreach($row as $piece)
                    echo "$piece ";
                echo "<br>";
            }
            echo "</pre>";
        ?>
    </body>
</html>