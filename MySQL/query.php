<?php
	$u = $_POST["user"];
	$p = $_POST["pass"];
	$enlace = mysql_connect("localhost","mysql","")or die("Error de conexion".mysql_error());
	mysql_select_db("usuarios", $enlace);
	$query = "INSERT INTO users (user,pass) VALUES('".$u."','".$p."');";
	if(mysql_query($query, $enlace)) {
		echo "Correcto";
	} else {
		echo "Falla";
	}
	mysql_close($enlace);
?>
