<?php
//incluimos conexion
include("conexion_login.php");
$Id = $_POST['Id'];
//query para mostrar la informacion
$query = "SELECT * FROM vacantes WHERE Id_vacante =?";
$busqueda = $con->prepare($query);
$busqueda->bindParam(1,$Id, PDO::PARAM_STR);
$busqueda->execute() or die ("Error: Al buscar vacantes activas");

$datos = array();

//mandamos como respuesta el id para luego ser buscado  

while($informacion = $busqueda->fetch(PDO::FETCH_ASSOC)){
	extract($informacion);
	$datos[] = array(
		'titulo' 		=> $titulo,
		'puesto' 		=> $puesto,
		'horario1' 		=> $horario1,
		'horario2' 		=> $horario2,
		'sueldo'	 	=> $sueldo,
		'descripcion' 	=> $descripcion

		);

}


$json = json_encode($datos);

echo $json;


?>