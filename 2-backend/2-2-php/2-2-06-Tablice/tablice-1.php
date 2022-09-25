<!--  tablice-1.php
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
            $paper[] = "Ksero";
            $paper[] = "Atrament";
            $paper[] = "Laser";
            $paper[] = "Foto";

            print_r($paper);

            echo "<hr>";

            for($j =0; $j < 4; ++$j){
                echo "$j: $paper[$j] <br>";
            }
        ?>
    </body>
</html>