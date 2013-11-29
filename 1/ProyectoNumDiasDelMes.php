<?php 
	$numDias = 0;

	$mes = 2;
	$annio = 2016;

	switch ($mes) {
		case 1:
		case 3:
		case 5:
		case 7:
		case 8:
		case 10:
		case 10:
			$numDias = 31;
			break;
		case 4:
		case 6:
		case 9:
		case 11:
			$numDias = 30;
			break;
		case 2:
			if ((($annio % 4 == 0) && !($annio % 100 == 0)) || $annio % 400 == 0) {
				$numDias = 29;
			} else {
				$numDias = 28;
			}
	}

	echo $numDias." dias";
?>