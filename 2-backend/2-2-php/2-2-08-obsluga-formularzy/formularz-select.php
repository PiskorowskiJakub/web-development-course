<!--  formularz-select.php
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
    <form action="./formularz-select.php" method="POST">
    <select name="kolor">
        <option value="czerwony">Czerwony</option>
        <option value="zielony">Zielony</option>
        <option value="niebieski">Niebieski</option>
    </select>
    <input type="submit" />
    </form>
    
        <?php
           if(isset($_POST['kolor'])){
            echo "Wybrany kolor: " . $_POST['kolor'];
        }
        ?>
    </body>
</html>