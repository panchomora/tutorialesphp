<?php 
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		
		$nombre = isset($_POST["nombre"])?$_POST["nombre"]:null;
		$apellido = isset($_POST["apellido"])?$_POST["apellido"]:null;
		$edad = isset($_POST["edad"])?$_POST["edad"]:null;

		$resultado = null;

		if (!empty($nombre) && !empty($apellido)) {
			
			$resultado = "Estimado $nombre $apellido, Bienvenido. ";

			if ($edad !== null && is_numeric($edad)) {
				$resultado .= "su edad es $edad a&ntilde;os";
			}

		} else {
			$resultado = "Ingrese nombre,apellido y edad por favor";
		}
		
		$link = "<a href='ProjectoEjemploEnviarDatosForm.php'>Volver</a>";
		echo $resultado."<br />".$link;
		
	} else {
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Enviar Datos por Formulario</title>
</head>
<body>
	<form method="POST">
		<table>
			<tbody>
				<tr>
					<td>Nombre:</td>
					<td><input type="text" name="nombre" /></td>
				</tr>
				<tr>
					<td>Apellido:</td>
					<td><input type="text" name="apellido" /></td>
				</tr>
				<tr>
					<td>Edad:</td>
					<td>
						<select name="edad">
							<option>== Seleccione edad ==</option>
							<?php for ($i=20; $i < 70; $i++) { ?>
							<option value="<?php echo $i ?>"><?php echo $i ?> a&ntilde;os</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" value="ENVIAR"></td>
				</tr>
			</tbody>
		</table>
	</form>
</body>
</html>
<?php } ?>