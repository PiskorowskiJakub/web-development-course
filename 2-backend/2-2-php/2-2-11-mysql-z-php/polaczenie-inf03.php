<!--  polaczenie-inf03.php
 2-backend/2-2-php/2-2-11-mysql-z-php/

 Created by Jakub Piskorowski on 08/11/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

  Połączenie z bazą danych oraz wyświetlenia rekordów zgodnie z wskazówkami do egzaminu INF 03
-->
<?php
$hostname = 'localhost'; // Nazwa hosta
$database = 'biblioteka'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = mysqli_connect($hostname, $username, $password, $database);

$query = "SELECT * FROM ksiazki";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_row($result)){
    echo $row[0]. ' '. $row[1]. ' '. $row[2]. ' '. $row[3]. ' '. $row[4]."<br>";
}

mysqli_close($conn);
?>