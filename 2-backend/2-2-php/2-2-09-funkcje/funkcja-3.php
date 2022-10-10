<!--  funkcja-3.php
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
        function VAT($cena_netto) {
            echo "Podatek VAT (stawka 23%) od ceny netto ".$cena_netto." zł wynosi ".$cena_netto *0.23." zł.<br>";}
         
         VAT(200);
         VAT(100);
        ?>
    </body>
</html>