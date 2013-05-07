<html>
	<head>
		<title>Los primos</title>
	</head>
	<body>
		<table border="1" align="center" cellspacing="5" cellpadding="10">
			<th colspan="10">Los primos</th>
			<?php
				$num = 0;
				while($num < 100) {
					echo "<tr>";
					for($col = 0; $col < 10; $col++) {
						$num++;
						$prim = 0;
						for($i = 0; $i < $num; $i++) {
							if($num%$i==0) {
								$prim++;
							}
						}
						if($prim == 2) {
							echo "<td bgcolor=\"#00FF00\">".$num."</td>";
						}
						else {
							echo "<td bgcolor=\"#FF0000\">".$num."</td>";
						}
					}
					echo "</tr>";
				}
			?>
		</table>
	</body>
</html>