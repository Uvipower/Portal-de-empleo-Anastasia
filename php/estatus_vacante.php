<?php
session_start();

include("conexion_login.php");

$Id_vacante 	= $_POST['id'];
$accion 		= $_POST['accion'];

try{

	$con->beginTransaction();
	$query = "UPDATE vacantes SET estatus = ? WHERE Id_vacante = ?";
	//
	$actualizacion = $con->prepare($query);
	//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
	$actualizacion->bindParam(1,$accion, PDO::PARAM_STR);
	$actualizacion->bindParam(2,$Id_vacante, PDO::PARAM_STR);


	$actualizacion->execute() or die("Error: Problemas al modificar estatus de vacante".$con->errorCode());

	//$Id_vacante = $con->lastInsertId();
	$actualizacion = null;

	$con->commit();
	$con = null;
	echo "Ha sido modificado el estatus";



}
catch(PDOException $er){
	echo "Error:".$er->getMessage();
	//ROLLBACK
	$con = rollBack();
	$con = null;
	exit();

}
?>