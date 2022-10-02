<!--  formularz-checkbox.php
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
    <form action="./formularz-checkbox.php" method="POST">
    <p>Ulubiona seria gier:</p>
        <p><input type="checkbox" name="gry[]" value="GTA" />GTA</p>
        <p><input type="checkbox" name="gry[]" value="FIFA" />FIFA</p>
        <p><input type="checkbox" name="gry[]" value="Battlefield" />Battlefield</p>
        <p><input type="checkbox" name="gry[]" value="Settlers" />Settlers</p>
        <p><input type="checkbox" name="gry[]" value="Call of duty" />Call of duty</p>
        <p><input type="checkbox" name="gry[]" value="Need For Speed" />Need For Speed</p>
        <p><input type="checkbox" name="gry[]" value="Tony Hawk`s" />Tony Hawk`s</p>
        
        <input type="submit" />
    </form>
        <?php
        if(isset($_POST['gry'])){
            for($i=0; $i<count($_POST['gry']); $i++){
                echo $_POST['gry'][$i] . "<br />";
            }
        }else{
            echo "Nie wybrano ani jednej serii gier :(";
        }
        ?>
    </body>
</html>