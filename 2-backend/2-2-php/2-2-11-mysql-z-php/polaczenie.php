<!--  polaczenie.php
 2-backend/2-2-php/2-2-11-mysql-z-php/

 Created by Jakub Piskorowski on 28/10/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

  Prosty kod do połączenia z bazą danych oraz wyświetlenia rekordów
-->
<?php

$hostname = 'localhost'; // Nazwa hosta
$database = 'biblioteka'; // Nazwa bazy danych
$username = 'root'; // Nazwa użtytkownika
$password = ''; // Hasło

$conn = new mysqli($hostname, $username, $password, $database);

$query = "SELECT * FROM ksiazki";
$result = $conn->query($query);

while($row = $result->fetch_assoc()){
    echo $row['id']. ' '. $row['tytul']. ' '. $row['autor']. ' '. $row['rok']. ' '. $row['data-dod']."<br>";
}

$result -> close();
$conn -> close();

?>