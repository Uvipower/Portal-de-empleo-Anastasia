<?php
 
include("conexion_login.php");

set_time_limit(0);

//variable de timestamp, fecha actual
$fecha_actual = isset($_POST['timestamp']) ? $_POST['timestamp']:0;


$fecha_bd = $_POST['timestamp'];

//compara que la fecha de la base de datos sea menor o igual a la actual
while($fecha_bd <= $fecha_actual){
	//query de busqueda
	$query = "SELECT timestamp FROM empresa ORDER BY timestamp DESC LIMIT 1";
	$busqueda = $con->prepare($query);
	$busqueda->execute();
	$timestamp = $busqueda->fetch(PDO::FETCH_ASSOC);
	//espera 1 segundo
	usleep(100000);
	clearstatcache();
	//asigna el timestamp de la base de datos a la variable
	$fecha_bd = strtotime($timestamp['timestamp']);
}

//se genera una consulta 
$query = "SELECT * FROM empresa e INNER JOIN info_basica_e i ON (e.Id_info_basica_e=i.Id_info_basica_e) ORDER BY timestamp DESC LIMIT 1";
$datos = $con->prepare($query);
$datos->execute();
// se extraer la informacion para ser guardada en un json
while ($row = $datos->fetch(PDO::FETCH_ASSOC)) {
	$json['timestamp']		 	= strtotime($row['timestamp']);
	$json['nombre'] 			= $row['nombre'];
	$json['numero'] 			= $row['numero'];

}

$datos_json = json_encode($json);
echo $datos_json;	//JSON

?>