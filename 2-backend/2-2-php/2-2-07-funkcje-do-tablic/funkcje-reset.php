<!--  funkcje-reset.php
 2-backend/2-2-php/2-2-07-funkcje-do-tablic/

 Created by Jakub Piskorowski on 23/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie funkcji do obsługi tablic w języku PHP
-->
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $people = array("Peter", "Joe", "Glenn", "Cleveland");

            echo current($people) . "<br>";
            echo next($people) . "<br>";
            
            echo reset($people);
        ?>
    </body>
</html>