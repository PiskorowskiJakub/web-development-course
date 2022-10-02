<!--  formularz-text.php
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
    <form action="./formularz-text.php" method="POST">
        <input type="text" name="imie" />
        <input type="submit" />
    </form>
        <?php
           if(isset($_POST['imie'])){
            echo "Cześć " . htmlspecialchars($_POST['imie']) . ". ";
        }else{
            echo "Cześć nieznajomy.";
        }
        ?>
    </body>
</html>