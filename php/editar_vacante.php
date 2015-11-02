<?php


include("conexion_login.php");


$Id_vacante = $_POST['id'];

try{

	$query = "SELECT * FROM vacantes WHERE Id_vacante=?";
	//
	$busqueda = $con->prepare($query);
	//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
	$busqueda->bindParam(1,$Id_vacante, PDO::PARAM_STR);


	$busqueda->execute() or die("Error: Problemas al buscar vacante");

	$data = array();
			//se recorre toda la consulta
	while ($fila = $busqueda->fetch(PDO::FETCH_ASSOC)){
		//se extrae las variables
	 	extract($fila);
	 	//anexado de los indices en el arreglo
	 	$data[] = array(
	 		//label es palabra reservada, es la que se usa para mostrar en el autocomplete
	 		'id'			=> $Id_vacante,
		    'titulo'		=> $titulo,
		    'puesto' 		=> $puesto,
		    'sueldo' 		=> $sueldo,
		    'horario1' 		=> $horario1,
		    'horario2' 		=> $horario2,
		    'descripcion' 	=> $descripcion

	 	);
	}


	$busqueda = null;
	$con = null;



}
catch(PDOException $er){
	echo "Error:".$er->getMessage();
	//ROLLBACK
	$con = null;
	exit();

}

echo json_encode($data);
$con = null;









?>