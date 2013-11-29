<?php 
$persona = array();

$persona['id'] = 1;
$persona['nombre'] = "Francisco";
$persona['apellido'] = "Mora";
$persona['edad'] = 27;	
$persona['emails'] = array("mora.c.francisco@gmail.com", "obux@obux.cl", "fmora@moldeable.com");
$persona['pi'] = 3.14159265;
$persona['login'] = true;
$persona['direccion'] = array("pais"=>"Chile", "región"=>"Metropolitana", "ciudad"=>"Santiago",
	"comuna"=>"San joaquín", "calle"=>"Ingeniero Budge 307", "codigo_postal"=>"8790456");

foreach ($persona as $nombre => $elemento) {
	if (is_array($elemento)) {
		echo "<strong>$nombre</strong><br />";

		foreach ($elemento as $nombre => $elemento2) {
			echo "---".$nombre."=>".$elemento2;
			echo "<br />";
		}
	} else {
		echo $nombre."=>".$elemento;
		echo "<br />";
	}
}
echo "<br />";
echo "{$persona['nombre']}{$persona['apellido']} tiene {$persona['edad']} a&ntilde;os y sus correos son:".implode(",", $persona['emails']);
?>