<?php
//incluimos conexion
include("conexion_login.php");
//query para mostrar la informacion
$query = "SELECT * FROM info_basica_e i INNER JOIN empresa e ON (i.Id_info_basica_e=e.Id_info_basica_e) ORDER BY e.Id_empresa DESC";
$busqueda = $con->prepare($query);
$busqueda->execute() or die ("Error: Al buscar empresa");


$datos = array();


while($empresas = $busqueda->fetch(PDO::FETCH_ASSOC)){
	extract($empresas);
	echo $nombre;
	echo "<br>";
	/*$datos[] = array(
		'Nombre' => $nombre,
		'Numero' => $numero
		);*/
}


//$json = json_encode($datos);

//echo $json;

?>