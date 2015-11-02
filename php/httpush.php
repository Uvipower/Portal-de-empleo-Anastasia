<?php
/*
*EN ESTA PAGINA SE UTILIZA PARA VERIFICAR SI LA INFORMACION QUE HAY EN EL INDEX
*SEA LA MAS ACTUAL SI NO MANDA PARAMETRO PARA QUE ESTE DE LA PAUTA DE BUSQUEDA DE
*MAS INFORMACION Y SER MOSTRADA EN TIEMPO REAL
*/
include("conexion_login.php");

/*set_time_limit(0);

//variable de timestamp, fecha actual
$fecha_actual = $_POST['timestamp'];


$fecha_bd = $timestamp['timestamp'];

//compara que la fecha de la base de datos sea menor o igual a la actual
while($fecha_bd <= $fecha_actual){
	//query de busqueda
	$query = "SELECT timestamp FROM vacantes ORDER BY timestamp DESC LIMIT 1";
	$busqueda = $con->prepare($query);
	$busqueda->execute();
	$timestamp = $busqueda->fetch(PDO::FETCH_ASSOC);
	//espera 1 minuto
	usleep(100000);
	clearstatcache();
	//asigna el timestamp de la base de datos a la variable
	$fecha_bd = strtotime($timestamp['timestamp']);

	//se genera una consulta 
	$query = "SELECT * FROM vacantes ORDER BY timestamp DESC LIMIT 1";
	$datos = $con->prepare($query);
	$datos->execute();
	// se extraer la informacion 
	while($fila = $datos->fetch(PDO::FETCH_ASSOC)){
		//se manda el timestamp para le ejecucion de codigo
		extract($fila);
		echo $timestamp;
	}
}*/

//recibo el numero de vacante que el sistema ya imprimio
$numero_vacantes = $_POST['numero_vacantes'];


//cuento todos los registros que hay de vacantes activas
$query = "SELECT count(titulo) FROM vacantes WHERE estatus = 1";
$busqueda = $con->prepare($query);
$busqueda->execute();
//para traer el resultado de count
$consulta = $busqueda->fetchColumn();

usleep(100000);
clearstatcache();
//el numero de vacantes en la base de datos
$numero_bd = $consulta;

//si el numero de vacantes que se imprimio es menor a los que hay en la base de datos
//ejemplo, imprimio 3 vacantes pero en la base de datos hay 4 por ende falta 1 por imprimir
if($numero_vacantes < $numero_bd){ //VALIDACION para que no imprima de mas
	//imprime el numero de registros que hay
	echo $numero_bd;

}
//no se enviara respuesta cuando el numero sea mayor





?>