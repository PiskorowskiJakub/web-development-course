<!--  funkcja-4.php
 2-backend/2-2-php/2-2-09-funkcje/

 Created by Jakub Piskorowski on 09/10/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie Funkcji w języku PHP
-->
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    
    <?php
        function czyParzysta($liczba) {
        if ($liczba % 2 == 0) {
            return true;
        } else {
            return false;
        } 
        }
        $n = 23543256;
        if (czyParzysta($n) == true) {
            echo "Liczba " . $n . " jest parzysta";
        } else {
            echo "Liczba " . $n . " jest nieparzysta";
        }
    ?>
    </body>
</html>