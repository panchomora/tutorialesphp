<?php 
	$num1 = 10;
	$num2 = 900;
	$num3 = 45;
	$max = 0;

	$max = ($num1 > $num2)?$num1:$num2;
	$max = ($max > $num3)?$max:$num3;

	echo "Numero 1: ".$num1;
	echo "<br />";
	echo "Numero 2: ".$num2;
	echo "<br />";
	echo "Numero 3: ".$num3;
	echo "<br />";
	echo "El Mayor es: ".$max;
?>