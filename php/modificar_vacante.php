<?php
session_start();

include("conexion_login.php");

$Id_vacante 	= $_POST['id'];
$titulo 		= $_POST['titulo'];
$puesto 		= $_POST['puesto'];
$horario1 		= $_POST['horario1'];
$horario2 		= $_POST['horario2'];
$sueldo		 	= $_POST['sueldo'];
$descripcion 	= $_POST['descripcion'];

try{

	$con->beginTransaction();
	$query = "UPDATE vacantes SET titulo = ?,
									puesto = ?,
									horario1 = ?,
									horario2 = ?,
									sueldo = ?,
									descripcion = ? WHERE Id_vacante = ?";
	//
	$actualizacion = $con->prepare($query);
	//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
	$actualizacion->bindParam(1,$titulo, PDO::PARAM_STR);
	$actualizacion->bindParam(2,$puesto, PDO::PARAM_STR);
	$actualizacion->bindParam(3,$horario1, PDO::PARAM_STR);
	$actualizacion->bindParam(4,$horario2, PDO::PARAM_STR);
	$actualizacion->bindParam(5,$sueldo, PDO::PARAM_STR);
	$actualizacion->bindParam(6,$descripcion, PDO::PARAM_STR);
	$actualizacion->bindParam(7,$Id_vacante, PDO::PARAM_STR);

	$actualizacion->execute() or die("Error: Problemas al modificar vacante".$con->errorCode());

	//$Id_vacante = $con->lastInsertId();
	$actualizacion = null;

	$con->commit();
	$con = null;
	echo "Ha sido dado de alta sactisfactoriamente";



}
catch(PDOException $er){
	echo "Error:".$er->getMessage();
	//ROLLBACK
	$con = rollBack();
	$con = null;
	exit();

}
?>