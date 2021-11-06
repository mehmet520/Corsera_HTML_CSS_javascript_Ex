<!DOCTYPE html>
<html lang="de"> 
	<head>
		<meta charset ="utf-8">
		<title> Rückmeldung </title>
		<style>
		
		</style>
	</head>
	<body>
	<!-- php-Interpreter einschalten -->
		<?php

		// main-Funktion
		$name = $_GET["familienname"];
		$vorname = $_GET["vorname"];


		echo " Hallo ! $vorname  $name  wir haben Ihr Nachricht erhalten! <br>
		Vielen Dank und auf Wiedersehen <br> "; 

		?>
	<!-- php-Interpreter ausschalten -->			
	</body>

</html>