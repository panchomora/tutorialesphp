<?php 
$i = -3;
$b = 5;
$f = 1e-10;
$d = 3.14;

//booleanos
$b1 = $i > $i;
$b2 = $i < $b;
$b3 = $b <= $f;
$b4 = $f >= $d;
$b5 = $d !=	0;
$b6 = 1 == $f;

//la funcion var_export() devuelve una representacion
//de cadena de una variable analizable
echo "b1: ".$i.">".$i."=".var_export($b1, true)."<br />";
echo "b2: ".$i."<".$b."=".var_export($b2, true)."<br />";
echo "b3: ".$b."<=".$f."=".var_export($b3, true)."<br />";
?>