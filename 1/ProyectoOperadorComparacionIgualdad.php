<?php 
$strNumero = "15";
$entNumero = 15;

//solo compara valor, si tienen el mismo valor
//es TRUE no importando su tipo de dato
var_dump($strNumero == $entNumero);

//el simbolo ===, significa que son identicos y ademas de tener
//el mismo valor tienen el mismo tipo de dato
var_dump($strNumero === $entNumero);

//convertimos el $strNumero a tipo entero con settype($strNumero, "int")
settype($strNumero, "int");

//Ahora es verdad el último var_dump()
var_dump($strNumero === $entNumero);
?>