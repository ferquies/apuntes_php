<html>
	<head>
		<title>Diezgle</title>
	</head>
	<body>
		<h1 align="center">Diezgle</h1>
		<div align="center">
			<?php 
				mt_srand((double) microtime()*1000000);
				echo "<img src='./".mt_rand(1,9).".jpg'/>\n";
			?>
		</div>
		<div align="center">
			<form action="busqueda.php" method="GET">
				<p>
				    <input type="text" name="b">
				    <input type="submit" value="Buscar">
			    </p>
			</form>
		</div>
	</body>
</html>