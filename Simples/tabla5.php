<html>
	<head>
		<title>Tabla del 5</title>
	</head>
	<body>
		<h1 align="center">Tabla del 5</h1>
		<table border="1" align="center" cellspacing="5" cellpadding="10">
		<?php
			for($i = 0; $i < 11; $i++) {
				echo "<tr>";
					echo "<td>";
					echo "5 x ".$i;
					echo "</td>";
					echo "<td>";
					echo 5*$i;
					echo "</td>";
				echo "</tr>";
			}
		?>
		</table>
	</body>
</html>