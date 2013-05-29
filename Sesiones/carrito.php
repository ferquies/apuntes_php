<?php
	session_start();
	if(isset($_SESSION["user"]) && isset($_SESSION["pass"])) {
		echo "<html>
		<head>
			<title>Carrito de la compra</title>
			<style>
				table { float: left; }
				div { float: right; }
			</style>
		</head>
		<body>
			<h1>Carrito de la compra</h1>
			<table cellpadding='20'>
				<tr>
					<th>Articulos</th>
					<th>Precio/unidad</th>
					<th>Cantidad</th>
				</tr>
				<tr>
					<td>Patatas</td>
					<td>0.20</td>
					<td>
						<form action='gestion_compra.php' method='POST' ENCTYPE='multipart/form-data'>
						<input type='hidden' name='producto' value='patatas'>
						<input type='int' name='cantidad' size='1' value='1'><input type='submit' value='Comprar'>
						</form>
					</td>
				</tr>
				<tr>
					<td>Tomates</td>
					<td>0.45</td>
					<td>
						<form action='gestion_compra.php' method='POST' ENCTYPE='multipart/form-data'>
						<input type='hidden' name='producto' value='tomates'>
						<input type='int' name='cantidad' size='1' value='1'><input type='submit' value='Comprar'>
						</form>
					</td>
				</tr>
				<tr>
					<td>Lechugas</td>
					<td>0.80</td>
					<td>
						<form action='gestion_compra.php' method='POST' ENCTYPE='multipart/form-data'>
						<input type='hidden' name='producto' value='lechugas'>
						<input type='int' name='cantidad' size='1' value='1'><input type='submit' value='Comprar'>
						</form>
					</td>
				</tr>
				<tr>
					<td>Calabazas</td>
					<td>1.10</td>
					<td>
						<form action='gestion_compra.php' method='POST' ENCTYPE='multipart/form-data'>
						<input type='hidden' name='producto' value='calabazas'>
						<input type='int' name='cantidad' size='1' value='1'><input type='submit' value='Comprar'>
						</form>
					</td>
				</tr>
			</table>";
			if(isset($_SESSION["compra"])) {
				echo "<div>
					<b>Carrito</b><br>
					".$_SESSION["compra"]."
					<b>Total: ".$_SESSION["total"]."</b>
				</div>";
			}
		echo "</body>
		</html>";
	} else {
		echo "<html>
		<head>
			<title>Carrito de la compra</title>
		</head>
		<body>
			<h1>Login</h1>
			<form action='gestion_acceso_carrito.php' method='POST' ENCTYPE='multipart/form-data'>
				<p>Usuario: <input type='text' name='user'><br>
				Contrase&ntilde;a: <input type='password' name='pass'><br>
				<input type='submit' value='Acceder'></p>
			</form>
		</body>
		</html>";
	}
?>