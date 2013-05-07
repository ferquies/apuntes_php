<html>
	<head>
		<title>Primos</title>
	</head>
	<body>
		<h1 align="center">Primos</h1>
		<div align="center">
		</div>
		<div align="center">
			<form action="primos.php" method="GET">
				<p>
				    <input type="text" name="n1">
				    <input type="text" name="n2">
				    <input type="submit" value="Buscar primos">
			    </p>
			</form>
		</div>
		<table border="1" align="center" cellspacing="5" cellpadding="10">
			<th colspan="10">Primos</th>
			<?php
				$num1 = $_GET["n1"];
				$num2 = $_GET["n2"];
				if($num1 > $num2) {
					$aux = $num2;
					$num2 = $num1;
					$num1 = $aux;
				}
				$num2 += 1;
				while($num1 < $num2) {
					echo "<tr>";
					for($col = 0; $col < 10; $col++) {
						if($num1 < $num2) {
							$prim = 0;
							for($i = 0; $i < $num1; $i++) {
								if($num1%$i==0) {
									$prim++;
								}
							}
							if($prim == 2) {
								echo "<td bgcolor=\"#00FF00\">".$num1."</td>";
							}
							else {
								echo "<td bgcolor=\"#FF0000\">".$num1."</td>";
							}
							$num1++;
						}
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>