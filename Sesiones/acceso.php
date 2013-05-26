<?php
	session_start();
	if(isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
		echo "<html><head><title>Bienvenido ".$_SESSION["user"]."</title></head><body><h1>Bienvenido ".$_SESSION["user"]."!</h1><br>Texto de ejemplo</body></html>";
	} else {
		echo "<html>
		<head>
			<title>Control de acceso</title>
		</head>
		<body>
			<h1>Control de acceso</h1>
			<form action='gestion_acceso.php' method='POST' ENCTYPE='multipart/form-data'>
				<p>Usuario: <input type='text' name='user'><br>
				Contrase&ntilde;a: <input type='password' name='pass'><br>
				<input type='submit' value='Acceder'></p>
			</form>
		</body>
		</html>";
	}
?>