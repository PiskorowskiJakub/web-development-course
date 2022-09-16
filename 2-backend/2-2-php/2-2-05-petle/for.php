<!--  for.php
 2-backend/2-2-php/2-2-05-petle/

 Created by Jakub Piskorowski on 10/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie pętli w języku PHP
-->
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            for($count = 1; $count <= 12; ++$count)
            {
                echo "$count pomnożone przez 12 wynosi ". $count * 12;
                echo "<br>";
            }
        ?>
    </body>
</html>