<?php 
	$parametro = isset($_GET['nombre'])?$_GET['nombre']:null;

	if ($parametro !== null) {
		$nombres = array();
		$nombres[] = "Francisco";
		$nombres[] = "Maria";
		$nombres[] = "Bruce";
		$nombres[] = "James";
		$nombres[] = "Rod";
		$nombres[] = "Gustavo";
		$nombres[] = "Jose";
		$nombres[] = "Emilia";

		$encontrado = null;

		foreach ($nombres as $nombre) {
			if ($parametro === $nombre) {
				$encontrado = $nombre;
			}
		}

		if ($encontrado !== null) {
			echo "Nombre: ".$encontrado." existe en el sistema";
		} else {
			echo "Nombre: ".$parametro." NO existe en el sistema";
		}
	} else {
		echo "Debes ingresar un nombre en la URL";
	}
?>