<html>
	<head>
		<title>Paleta</title>
	</head>
	<body>
		<h1 align="center">Paleta</h1>
		<table border="1" align="center" cellspacing="5" cellpadding="10">
			<th colspan="2">Paleta</th>
			<?php
				for($i = 0; $i < 17; $i++) {
					echo "<tr>";
						echo "<td>".dechex($i*1000000)."</td>";
						echo "<td bgcolor=\"".dechex($i*1000000)."\"></td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>