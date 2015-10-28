<?php

include("conexion_login.php");


//CONSULTA DE INFORMACION DE USUARIO
$query = "SELECT * FROM datos_personales";
$busqueda = $con->prepare($query);
$busqueda->execute() or die ("Error: Al buscar usuarios");

$personas = $busqueda->fetchAll();



foreach ($personas as $persona) {
	echo $persona['nombre']." ".$persona['apellido_paterno'];
	echo "<br>";
}

?>