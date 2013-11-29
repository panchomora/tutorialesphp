<?php 
	$nombre = isset($_GET["nombre"])?$_GET["nombre"]:null;
	$apellido = isset($_GET["apellido"])?$_GET["apellido"]:null;
	$edad = isset($_GET["edad"])?$_GET["edad"]:null;

	$resultado = null;

	if ($nombre !== null && $apellido !== null) {
		$resultado = "Estimado $nombre $apellido, Bienvenido";

		if ($edad !== null && is_numeric($edad)) {
			$resultado .= " su edad es $edad a&ntilde;os";
		}
	} else {
		$resultado = "Ingrese un Nombre y Apellido en la URL";
	}	

	echo $resultado;
?>