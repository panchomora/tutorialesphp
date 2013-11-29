<?php 

$edades = array_fill(0, 10, 0);

//agregamos elementos
for ($i=1; $i < count($edades); $i++) { 
	$edades[$i] = $i * 10;
}

//mostramos
for ($i=1; $i < count($edades); $i++) { 
	echo "Edad: ".$edades[$i]."<br />";
}
?>