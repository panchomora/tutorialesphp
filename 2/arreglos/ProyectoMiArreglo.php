<?php 
/**
 * @author Francisco Mora
 */

//arreglo de paises
$paises = array("Chile", "Argentina", "Brasil", "Ecuador", "Venezuela", "Bolivia", "Uruguay", "Paraguay");

//recorremos el arreglo
for ($i=0; $i < count($paises); $i++) { 
	echo "$i - $paises[$i]<br />";
}
?>