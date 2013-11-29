<?php 
$a = 1234;
$b = -123;
$c = 0123;
$d = 0x1a;
$e = (integer) "1234";
$f = "25000";
var_dump($f);
settype($f, "int");
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
?>