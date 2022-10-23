<!--  formularz-textarea.php
 2-backend/2-2-php/2-2-08-obsluga-formularzy/

 Created by Jakub Piskorowski on 23/09/2022 wersja: 1.0
 Copyright © 2022 Jakub Piskorowski. All rights reserved.
 GitHub: https://github.com/PiskorowskiJakub/web-development-course

 Zastosowanie metody GET w języku PHP
-->

<?php 

if(isset($_GET["page"]))
	$strona = $_GET["page"];
else
	$strona = null;

echo "strona: ".$strona."<br>";


?>
<html>
	<body>
	<a href="dolaczanie.php?page=main"> Strona główna </a> <br>
	<a href="dolaczanie.php?page=news"> Aktualności </a>
		<header> 
			jakas zawartosc headera
		</header>
		<div>
		
			
			<?php if(($strona)!=null) include($strona.".php"); ?>
			
		</div>
		<footer> 
			jakas zawartosc footera
		</footer>
	</body>
</html>