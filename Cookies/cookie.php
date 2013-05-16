<?php
	if(isset($_COOKIE["idioma"])) {
		$idioma = $_COOKIE["idioma"];
		if($idioma == "es") {
			echo "<html><head><title>Hola mundo</title></head><body><h1>Hola mundo!</h1></body></html>";
		}
		if($idioma == "en") {
			echo "<html><head><title>Hello World</title></head><body><h1>Hello World!</h1></body></html>";
		}
	}
	else {
		echo "<html><head><title>Cookie</title></head><body><h1 align='center'>Seleccion de idioma</h1><div align='center'><form action='gestion_cookie.php' method='POST' ENCTYPE='multipart/form-data'><p><input type='radio' name='idio' value='es' checked> Espa&ntilde;ol<br><input type='radio' name='idio' value='en'> English<br><input type='submit' value='Seleccionar'></p></form></div></body></html>";
	}
?>	