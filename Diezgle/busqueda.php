<?php
	$bus["hola"] = "Hola mundo!";
	$bus["adios"] = "Adios!";
	$bus["hora"] = date("h:i:s");
	$bus["dia"] = date("d D");
	$bus["mes"] = date("m M");
	$bus["año"] = date("Y");
	$bus["fecha"] = date("d ")."de".date(" M ")."de".date(" Y");
	$bus["you are the best"] = "<h1>You are the best!</h1><br><img src='best.png'/>";
	$bus["superdown"] = "<h1>SUPERDOWN!</h1><br><img src='super.jpg'/>";

	echo $bus[$_GET["b"]];
?>