<?php 
$nombre = "Francisco";
$apellido = "Mora";
$edad = 27;

/*NO trabaja de la misma forma que comillas dobles
 *Estas cadenas son mostradas tal cual son, NO reemplazan las variables por sus
 *valores*/
 echo 'El usuario: $nombre $apellido, tiene $edad a&ntilde;os';
 echo "<br />";

 /*Tenemos que concatenar explicitamente con el punto (.)*/
 echo 'El usuario: '.$nombre." ".$apellido.', tiene '.$edad.' a&ntilde;os';
?>