<?php 
$mensaje = isset($_GET["mensaje"])?$_GET["mensaje"]:null;
$usuario = isset($_GET["usuario"])?$_GET["usuario"]:null;

	if ($mensaje != null && $usuario != null) {
		echo $usuario." esta saludando: ".$mensaje;
	} elseif ($mensaje != null) {
		echo "Un anonimo esta saludando: ".$mensaje;
	} elseif ($usuario != null) {
		echo "$usuario esta saludando: que tal!!!";
	} else {
		echo "No hay saludo";	
	}
?>