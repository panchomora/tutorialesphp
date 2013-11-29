<?php 
$a = 1;
$b = $a++; //Post-Incremento, devuelve luego incrementa
$c = ++$a; //Pre-Incremento, incrementa luego devuelve
$d = $b++;

echo "a = ".$a."<br />";
echo "b = ".$b."<br />";
echo "c = ".$c."<br />";
echo "d = ".$d."<br />";
?>