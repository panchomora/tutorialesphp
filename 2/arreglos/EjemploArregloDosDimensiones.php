<?php 
$matriz = array();

//Inicializamos en la matriz 3 arreglos
//la primera con 2 elementos y el segundo
//con 3 y 4
$matriz[0] = array_fill(0, 2, 0);
$matriz[1] = array_fill(0, 3, 0);
$matriz[2] = array_fill(0, 4, 0);

//iteramos
for ($i=0; $i < count($matriz); $i++) { 
	for ($j=0; $j < count($matriz[$i]); $j++) { 
		$matriz[$i][$j] = $i * $j;
	}
}

for ($i=0; $i < count($matriz); $i++) { 
	for ($j=0; $j < count($matriz[$i]); $j++) { 
		echo $matriz[$i][$j]." ";
	}
	echo "<br />";
}
?>