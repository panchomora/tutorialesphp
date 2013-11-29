<?php 
$jugos = array("manzana", "naranja", "koolaid" => "púrpura");

echo "El tom&oacute; algo de jugo de $jugos[0]."."<br />";
echo "El tom&oacute; algo de jugo de $jugos[1]."."<br />";
echo "El tom&oacute; algo de jugo {$jugos["koolaid"]}."."<br />";

class People {
	private $_fco = "Francisco";
	private $_maria = "María";
	private $_pablo = "Pablo";
	private $_pedro = "Pedro";

	public function getFco()
	{
		return $this->_fco;
	}

	public function getMar()
	{
		return $this->_maria;
	}

	public function getPab()
	{
		return $this->_pablo;
	}

	public function getPed()
	{
		return $this->_pedro;
	}
}

$people = new People();
echo "{$people->getFco()}, tom&oacute; algo de jugo de $jugos[0]."."<br />";
?>