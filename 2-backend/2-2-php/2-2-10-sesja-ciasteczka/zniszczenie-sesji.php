<!--  zniszczenie-sesji.php
 2-backend/2-2-php/2-2-10-sesja-ciasteczka/

 Created by Jakub Piskorowski on 19/10/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie sesji w języku PHP
-->
<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>    
        <?php
            // remove all session variables
            session_unset();

            // destroy the session
            session_destroy();
        ?>
    </body>
</html>