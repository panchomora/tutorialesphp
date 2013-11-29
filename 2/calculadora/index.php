<?php 
require_once 'Calculadora.php';

$resultado = null;
$num1 = 0;
$num2 = 0;

if ($_SERVER['REQUEST_METHOD'] === "POST") {
	$operacion = $_POST['operacion'];
	$num1 = (int) $_POST['num1'];
	$num2 = (int) $_POST['num2'];

	$calculadora = new Calculadora();

	switch ($operacion) {
		case 'sumar':
			$resultado = $calculadora->sumar($num1, $num2);
			break;

		case 'restar':
			$resultado = $calculadora->restar($num1, $num2);
			break;
		
		case 'multiplicar':
			$resultado = $calculadora->multiplicar($num1, $num2);
			break;

		case 'dividir':
			$resultado = $calculadora->dividir($num1, $num2);
			break;

		case 'modulo':
			$resultado = $calculadora->modulo($num1, $num2);
			break;

		case 'potencia':
			$resultado = $calculadora->potencia($num1, $num2);
			break;
	}
}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculadora Sencilla con PHP 5</title>
</head>
<body>
	<h3>Calculadora:</h3>
	<form method="POST">
		<table>
			<tbody>
				<tr>
					<td>Ingrese Primer N&uacute;mero</td>
					<td>Operaci&oacute;n a Realizar</td>
					<td>Ingrese Segundo N&uacute;mero</td>
					<td>&nbsp;</td>
					<td>Resultado</td>
				</tr>
				<tr>
					<td><input type="text" name="num1" value="<?php echo $num1; ?>"></td>
					<td>
						<select name="operacion">
							<option>== Seleccione una operaci&oacute;n ==</option>
							<option value="sumar">Sumar</option>
							<option value="restar">Restar</option>
							<option value="multiplicar">Multiplicar</option>
							<option value="dividir">Dividir</option>
							<option value="modulo">M&oacute;dulo</option>
							<option value="potencia">Potencia</option>
						</select>
					</td>
					<td><input type="text" name="num2" value="<?php echo $num2; ?>"></td>
					<td>=</td>
					<td><input type="text" value="<?php echo $resultado; ?>"></td>
				</tr>
				<tr>
					<td colspan="5"><input type="submit" value="EJECUTAR"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>