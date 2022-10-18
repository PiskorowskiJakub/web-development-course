<!--  funkcje-pop.php
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
            $stack = array("orange", "banana", "apple", "raspberry");
            $fruit = array_pop($stack);
            print_r($stack);
        ?>
    </body>
</html>