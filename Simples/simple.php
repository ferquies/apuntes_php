<?php
	if($_SERVER['REMOTE_ADDR'] == "192.168.2.69") {
		echo "<html><head><title>Juanjo's Web Page</title></head><body><h1>Juanjo</h1>Madafa :D</body></html>";
	}
	else {
		echo "<html><head><title>Hello World Web Page</title></head><body><h1>Hello World</h1>Welcome!</body></html>";
	}
?>