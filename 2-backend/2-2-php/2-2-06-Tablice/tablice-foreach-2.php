<!--  tablice-foreach-2.php
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
            $paper = array('copier' => "Do kserokopiarek i uniwersalny",
                'inkjet' => "Do drukarek atramentowych",
                'laser' => "Do drukarek laserowych",
                'photo' => "Papier fotograficzny");
        
        foreach($paper as $item => $description){
            echo "$item: $description <br>";
        }
        ?>
    </body>
</html>