<?php 
	$notaMat = 0;
	$notaHist = 0;
	$notaCien = 0;
	$promedio = 0.00;

	$notaMat = 49;
	$notaHist = 49;
	$notaCien = 50;

	$promedio = ($notaMat + $notaHist + $notaCien)/3;

	if ($promedio > 90) {
		echo "Felicitaciones haz estudiado bastante tu promedio es: ".$promedio;
	} else if ($promedio > 50){
		echo "Buen trabajo tu promedio es: ".$promedio;
	} else {
		echo ": - ( Necesitas estudiar mas tu promedio es: ".$promedio;
	}
?>