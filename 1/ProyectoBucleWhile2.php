<?php 
	$condicion = true;
	$i = 0;
	$resultado = "";

	while ($condicion) {
		if ($i === 5) {
			$condicion = false;
		}

		$resultado .= "Numero: $i<br />";
		$i++;
	}

	echo $resultado;
?>