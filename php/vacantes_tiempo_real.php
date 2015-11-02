<?php
//incluimos conexion
include("conexion_login.php");
//query para mostrar la informacion
$query = "SELECT * FROM vacantes WHERE estatus = 1 ORDER BY Id_vacante DESC";
$busqueda = $con->prepare($query);
$busqueda->execute() or die ("Error: Al buscar vacantes activas");
$datos = array();
//mandamos como respuesta el id para luego ser buscado  
while($vacantes = $busqueda->fetch(PDO::FETCH_ASSOC)){
	extract($vacantes);
	//echo $Id_vacante;
	//echo "<br>";

	$datos[] = array(
		'Id_vacante' => $Id_vacante
		);

}

$json = json_encode($datos);
echo $json;
?>