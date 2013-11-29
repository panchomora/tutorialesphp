<?php 
$persona = array();

$persona["id"] = 1;
$persona["nombre"] = "Francisco";
$persona["apellido"] = "Mora";
$persona["edad"] = 27;
$persona["email"] = "fmora@moldeable.com";

echo "{$persona["nombre"]} {$persona["apellido"]} tiene {$persona["edad"]} años y su correo es {$persona["email"]}";
?>