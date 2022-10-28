<!--  wprowadzenie.php
 2-backend/2-2-php/2-2-11-mysql-z-php/

 Created by Jakub Piskorowski on 28/10/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

  Prosty kod do połączenia z bazą danych oraz wprowadzenia rekordów
-->
<?php
$hostname = 'localhost'; // Nazwa hosta
$database = 'biblioteka'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = new mysqli($hostname, $username, $password, $database);

$tytul = "tytul";
$autor = "autor";
$rok = "2022";
$data = date("Y-m-d");

$sql = "INSERT INTO `ksiazki` (`id`, `tytul`, `autor`, `rok`, `data-dod`)
        VALUES (NULL, '$tytul', '$autor', '$rok', '$data')";

if($result = $conn -> query($sql)) echo "Dodano nowy rekord";
else echo "Nie udało się dodać nowego rekordu";

?>