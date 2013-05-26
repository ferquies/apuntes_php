<?php
	session_start();
	if($_POST["user"] == "ferquies" && $_POST["pass"] == "4123") {
		$_SESSION["user"] = $_POST["user"];
		$_SESSION["pass"] = $_POST["pass"];
	}
?>
<html>
	<head>
		<meta http-equiv='refresh' content='0;url=http://localhost/Sesiones/acceso.php'>
	</head>
</html>