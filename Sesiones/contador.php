<?php
	session_start();
	if(isset($_SESSION["count"])) {
		$_SESSION["count"] = $_SESSION["count"]+1;
		echo "<html><head><title>Contador de visitas</title></head><body><div align='center'><h1>Contador de visitas</h1><br>".$_SESSION["count"]."</div></body></html>";
	} else {
		$_SESSION["count"] = 1;
	}
?>