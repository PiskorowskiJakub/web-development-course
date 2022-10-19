<!-- zniszczenie-cookie.php
 2-backend/2-2-php/2-2-10-sesja-ciasteczka/

 Created by Jakub Piskorowski on 19/10/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie ciasteczek w języku PHP
-->
<?php
    // set the expiration date to one hour ago
    setcookie("user", "", time() - 3600);
?>
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>    
        <?php
            echo "Cookie 'user' is deleted.";
        ?>
    </body>
</html>