<!--  formularz-radio.php
 2-backend/2-2-php/2-2-08-obsluga-formularzy/

 Created by Jakub Piskorowski on 23/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie obsługi formularzy w języku PHP
-->
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
    <form action="./formularz-radio.php" method="POST">
        <p>Płeć:</p>
        <p><input type="radio" name="plec" value="m" />Mężczyzna</p>
        <p><input type="radio" name="plec" value="k" />Kobieta</p>
        <input type="submit" />
    </form>
        <?php
            if(isset($_POST['plec'])){
                if($_POST['plec'] == 'm') echo "Wybrana płeć: Mężczyzna";
                else echo "Wybrana płeć: Kobieta";
            }
        ?>
    </body>
</html>