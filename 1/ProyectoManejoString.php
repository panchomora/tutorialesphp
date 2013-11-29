<?php 
$nombre = "Francisco";

//total de caracteres
echo strlen($nombre);
echo "<br />";

//obtenemos el segundo caracter
echo $nombre{1};
echo "<br />";

//obtenemos el 5 caracter
echo $nombre{4};
echo "<br />";

//devuelve una parte del string definida por los parametros start y length
echo substr($nombre, 1, 4);
echo "<br />";

//convierte a minusculas
echo strtolower($nombre);
echo "<br />";

//convierte a mayusculas
echo strtoupper($nombre);
echo "<br />";

//reemplaza el texto dentro de una porcion del string
echo str_replace("Fr", "Tr", $nombre);
echo "<br />";

//convierte una cadena a matriz
var_dump(str_split($nombre));
echo "<br />";

//divide una cadena en varias cadenas
//pasando un ptrón como delimitador
//en este caso la letra a
var_dump(explode("a", "tragaldabas"));
?>