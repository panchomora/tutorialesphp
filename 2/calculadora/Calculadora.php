<?php 
/**
 * @Author Francisco Mora
 */

class Calculadora
{
	
	public function sumar($a, $b)
	{
		return ($a + $b);
	}

	public function restar($a, $b)
	{
		return ($a - $b);
	}

	public function multiplicar($a, $b)
	{
		return ($a * $b);
	}

	public function dividir($a, $b)
	{
		if ($b === 0) {
			return 0;
		}
		
		return ($a / $b);
	}

	public function modulo($a, $b)
	{
		return ($a % $b);
	}

	public function potencia($a, $b)
	{
		return pow($a, $b);
	}
}
?>