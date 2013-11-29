<?php 
define("ALGUNA_CONSTANTE_PHP", "https://");
define("TABLA_USUARIOS", "tbl_users");
define("TABLA_PRODUCTOS", "tbl_productos");

if (!defined("ALGUNA_CONSTANTE_PHP")) {
	define("ALGUNA_CONSTANTE_PHP", "http://");
}

echo ALGUNA_CONSTANTE_PHP;
$sql = "SELECT * FROM ".TABLA_PRODUCTOS;
echo "<br />".$sql;
?>
