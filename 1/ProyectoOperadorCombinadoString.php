<?php 
	$sql = "SELECT * FROM clientes AS cl ";
	$sql .= "INNER JOIN facturas AS f ON (cl.id=f.cliente_id) ";
	$sql .= "WHERE cl.estado='activo' ";
	$sql .= "AND f.estado='pendiente'";

	echo $sql;
?>