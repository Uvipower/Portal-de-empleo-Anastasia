<?php

include("conexion_login.php");


if (isset($_GET['term'])){
	$term = "%".$_GET['term']."%"; //variable mandada
 	try {
 		//query de consulta
 		$query = "SELECT nombre FROM empresa e INNER JOIN info_basica_e i ON (e.Id_info_basica_e=i.Id_info_basica_e) WHERE nombre LIKE :term LIMIT 0,10"; //consulta
		//prepara el query
		$consulta = $con->prepare($query);
		//se oculta la variable
		$consulta->bindParam(":term",$term, PDO::PARAM_STR);
		//se ejecuta la consulta
		$consulta->execute();
		//se verifica que la consulta sea posiiva
		if($consulta == TRUE){
			//se crea array
			$data = array();
			//se recorre toda la consulta
			while ($fila = $consulta->fetch(PDO::FETCH_ASSOC)){
				//se extrae las variables
	        	extract($fila);
	        	//anexado de los indices en el arreglo
	        	$data[] = array(
	        		//label es palabra reservada, es la que se usa para mostrar en el autocomplete
	            'label' => "Empresa: ".$nombre,
	            'value' => $nombre
	        	);
	    	}
		}
 	} 
 	catch (PDOException $er) {
 		echo "Error: ".$er->getMessage();
 		exit();
 	}
 	// convert the array to JSON
	echo json_encode($data);
	$con=null;

}
?>