<?php
	if(isset($_COOKIE["letra"])) {
		echo "<html><head><title>Letras</title></head><body><h1 align='center'>Letras</h1><div align='center'><form action='gestion_letra.php' method='POST' ENCTYPE='multipart/form-data'><p>Introduce una letra: <input type='text' name='letra' maxlength='1' size='1'><br><input type='submit' value='A&ntilde;adir'><br><br>Tu palabra es: ".$_COOKIE["letra"]."</p></form></div></body></html>";
	} else {
		setcookie("letra", " ");
		echo "<html><head><meta http-equiv='refresh' content='0;url=http://localhost/Cookies/letras.php'></head></html>";
	}
?>