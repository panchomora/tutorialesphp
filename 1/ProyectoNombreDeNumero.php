<?php 
	$msg = "";
	$input = 0;

	//numero entre 0 y 10
	$input = 11;

	if ($input === 1) {
		$msg = "uno";
	} else if ($input === 2){
		$msg = "dos";
	} else if ($input === 3){
		$msg = "tres";
	} else if ($input === 4){
		$msg = "cuatro";
	} else if ($input === 5){
		$msg = "cinco";
	} else if ($input === 6){
		$msg = "seis";
	} else if ($input === 7){
		$msg = "siete";
	} else if ($input === 8){
		$msg = "ocho";
	} else if ($input === 9){
		$msg = "nueve";
	} else if ($input === 10){
		$msg = "diez";
	} else {
		$msg = "numero invalido";
	}

	echo $msg;
?>