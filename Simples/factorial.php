<html>
	<head>
		<title>Factorial</title>
	</head>
	<body>
		<h1 align="center">Factorial</h1>
		<table border="1" align="center" cellspacing="5" cellpadding="10">
			<th colspan="3">Factorial</th>
			<?php
				#$factorial[];
				for($i = 1; $i < 11; $i++) {
					echo "<tr>";
						echo "<td>";
						echo $i;
						echo "</td>";
						echo "<td>";
						
						echo "</td>";
						echo "<td>";
							$factorial = 1;
							for($f = $i; $f > 0; $f--) {
								$factorial *= $f;
							}
							echo $factorial;
						echo "</td>";
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>