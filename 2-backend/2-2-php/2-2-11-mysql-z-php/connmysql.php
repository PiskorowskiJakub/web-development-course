<!--  connmysql.php
 2-backend/2-2-php/2-2-11-mysql-z-php/

 Created by Jakub Piskorowski on 18/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

  Nawiązywanie połączenia oraz tworzenie zapytań do bazy MySQL
-->
<html>
<head>
    <title> PAI </title>
</head>
<body>

    <?php
        
    require_once 'login.php';
    $conn = new mysqli($hn, $un, $pw, $db);
    if($conn ->connect_error) die($conn->connect_error);

    $query = "SELECT * FROM classics";
    $result = $conn->query($query);
    if(!$result) die($conn->error);

    $rows = $result->num_rows;
    for($j =0; $j < $rows; ++$j)
    {
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
        echo 'Autor: ' .$row['Autor'] .'<br>';
        echo 'Tytuł: ' .$row['Tytul'] .'<br>';
        echo 'Rok: ' .$row['Rok'] .'<br><br>';
    }
    $result -> close();
    $conn -> close();
   
    ?>

</body>
</html>