<?php 
	//Arreglo de Nombres
	$nombresArreglo = array("John", "Bruce Lee", "Bill Gates", "Pedro", "Juan", "Maria", "Francisco");

	//Nombre a buscar
	$nombre = "Maria";

	$resultado = false;

	for ($i=0; $i < count($nombresArreglo) ; $i++) { 
		if ($nombresArreglo[$i] == $nombre) {
			$resultado = true;
			break;
		}
	}

	if ($resultado) {
		echo $nombre.", esta en el array";
	} else {
		echo $nombre.", no esta en el array";
	}
?>