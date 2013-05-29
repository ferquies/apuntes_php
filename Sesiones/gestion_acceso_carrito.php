<?php
	session_start();
	if($_POST["user"] == "user" && $_POST["pass"] == "user") {
		$_SESSION["user"] = $_POST["user"];
		$_SESSION["pass"] = $_POST["pass"];
	}
?>
<html>
	<head>
		<meta http-equiv='refresh' content='0;url=http://localhost/Sesiones/carrito.php'>
	</head>
</html>