<!--  wprowadzenie-inf03.php
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

$tytul = "tytul";
$autor = "autor";
$rok = "2022";
$data = date("Y-m-d");

$sql = "INSERT INTO `ksiazki` (`id`, `tytul`, `autor`, `rok`, `data-dod`)
        VALUES (NULL, '$tytul', '$autor', '$rok', '$data')";

if($result = mysqli_query($conn, $sql)) echo "Dodano nowy rekord";
else echo "Nie udało się dodać nowego rekordu";

mysqli_close($conn);
?>