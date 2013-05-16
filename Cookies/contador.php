<?php
	if(isset($_COOKIE["count"])) {
		echo "<html><head><title>Contador de visitas</title></head><body><div align='center'><h1>Contador de visitas</h1><br>".$_COOKIE["count"]."</div></body></html>";
		setcookie("count",$_COOKIE["count"]+1);
	} else {
		setcookie("count",1);
		echo "<html><head><meta http-equiv='refresh' content='0;url=http://localhost/Cookies/contador.php'></head></html>";
	}
?>