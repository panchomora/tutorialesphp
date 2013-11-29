<?php 
$paises = array();

$paises[] = "Chile";
$paises[] = "Argentina";
$paises[] = "Brasil";
$paises[] = "Uruguay";
$paises[] = "Paraguay";
$paises[] = "Perú";
$paises[] = "Bolivia";
$paises[] = "Colombia";
$paises[] = "Ecuador";
$paises[] = "Venezuela";

/**
 * Desplegamos el valor de cada arreglo
 */
echo "=== ITERANDO CON BUCLE FOR ===<br />";
for ($i=0; $i < count($paises); $i++) { 
	echo "$i -- $paises[$i]";
	echo "<br />";
}

echo "=== ITERANDO CON BUCLE WHILE ===<br />";
$i = 0;
while ($i < count($paises)) {
	echo "$i -- $paises[$i]";
	echo "<br />";
	$i++;
}

echo "=== ITERANDO CON BUCLE DO-WHILE ===<br />";
$i = 0;
do {
	echo "$i -- $paises[$i]";
	echo "<br />";
	$i++;
} while ($i < count($paises));

echo "=== ITERANDO CON BUCLE FOREACH ===<br />";
foreach ($paises as $pais) {
	echo "$pais <br />";
}

echo "=== ITERANDO CON BUCLE FOREACH CON LLAVES ===<br />";
foreach ($paises as $llave => $pais) {
	echo "$llave - $pais <br />";
}

echo "=== ITERANDO CON BUCLE ITERATOR ===<br />";
$iterator = new ArrayIterator($paises);
while ($iterator->valid()) {
	echo $iterator->key()."-".$iterator->current()."<br />";
	$iterator->next();
}

echo "=== ITERANDO CON BUCLE ArrayObject ===<br />";
$lista = new ArrayObject($paises);
$iterator = $lista->getIterator();
while ($iterator->valid()) {
	echo $iterator->key()."-".$iterator->current()."<br />";
	$iterator->next();
}
?>