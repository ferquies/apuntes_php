<?php
	if(isset($_COOKIE["color"])) {
		echo "<html><head><title>Color de fondo</title></head><body bgcolor=".$_COOKIE["color"]."></body></html>";
	} else {
		echo "<html><head><title>Seleccion color de fondo></title></head><body><div align='center'><h1>Selecciona el color de fondo</h1><form action='gestion_color.php' method='POST' ENCTYPE='multipart/form-data'><p><input type='radio' name='colour' value='red' checked> Rojo<br><input type='radio' name='colour' value='blue'> Azul<br><input type='submit' value='Seleccionar'></p></form></div></body></html>";
	}
?>