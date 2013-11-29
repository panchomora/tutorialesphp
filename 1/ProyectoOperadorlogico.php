<?php 
$perfil = "usuario";
$estado = 1;

	if (($perfil == "admin" || $perfil == "revisor") && $estado == 1) {
		echo "Revisar Publicaci&oacute;n";
	}elseif ($perfil == "usuario" && $estado == 1) {
		echo "Ver Publicaci&oacute;n";
	}else {
		echo "No tienes acceso";
	}

echo "<br />";
echo ($perfil == "usuario" && $estado == 1)?"Ver Publicaci&oacute;n":"No tienes acceso";
?>