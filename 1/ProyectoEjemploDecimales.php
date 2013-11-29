<?php 
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = "3.1415499265";

var_dump($d);
echo "<br />";

settype($d, "double");

var_dump($a);
echo "<br />";

var_dump($b);
echo "<br />";

var_dump($c);
echo "<br />";

var_dump($d);
echo "<br />";

//chequeamos tipo de datos
var_dump(is_double($d));
echo "<br />";

var_dump(is_string($d));
echo "<br />";

$e = 0.0000000007;
var_dump($e === $c);
?>