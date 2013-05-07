<?php
	if($_GET["usuario"] == "david" && $_GET["pass"] == "david") {
		echo "<html><head><title>Hello David Web Page</title></head><body><h1>Hola David!</h1>Welcome!</body></html>";
	} else {
		echo "<html><head><title>Nothing</title></head><body><h1>Error</h1>GTFO!</body></html>";
	}
?>