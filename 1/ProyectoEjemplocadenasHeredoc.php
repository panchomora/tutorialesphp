<?php 
$nombre = "Francisco";
$apellido = "Mora";
$libro = "Libro sobre POO en PHP";
$articulo = "sobre cadenas en PHP";

 echo <<<EOT 
Mi nombre es "$nombre". Estoy escribiendo un $libro.
Ahora, estoy escribiendo un poco {$articulo}.
Esto debe mostrar una 'A' mayuscula: \x41
EOT;
?>