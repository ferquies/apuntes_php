<?php
	session_start();
	$precios["patatas"] = 0.20;
	$precios["tomates"] = 0.45;
	$precios["lechugas"] = 0.80;
	$precios["calabazas"] = 1.10;

	//$_SESSION["cantidad"] = $_POST["cantidad"];
	//$_SESSION["producto"] = $_POST["producto"];
	//$_SESSION["precio"]  = $_POST["cantidad"] * $precios[$_POST["producto"]];

	if(isset($_SESSION["compra"])) {
		$_SESSION["compra"] = $_SESSION["compra"].($_POST["producto"]." cant:".$_POST["cantidad"]." precio:".$_POST["cantidad"]*$precios[$_POST["producto"]]."<br><br>");
	} else {
		$_SESSION["compra"] = $_POST["producto"]." cant:".$_POST["cantidad"]." precio:".$_POST["cantidad"]*$precios[$_POST["producto"]]."<br><br>";
	}

	if(isset($_SESSION["total"])) {
		$_SESSION["total"] = $_SESSION["total"] + $_POST["cantidad"]*$precios[$_POST["producto"]];
	} else {
		$_SESSION["total"] = $_POST["cantidad"]*$precios[$_POST["producto"]];
	}

	echo "<html><head><meta http-equiv='refresh' content='0;url=http://localhost/Sesiones/carrito.php'></head></html>";
?>