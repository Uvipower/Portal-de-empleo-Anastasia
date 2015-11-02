<?php
session_start();

include("conexion_login.php");

$Id_empresa 	= $_SESSION['Id'];
$titulo 		= $_POST['titulo'];
$puesto 		= $_POST['puesto'];
$horario1 		= $_POST['horario1'];
$horario2 		= $_POST['horario2'];
$sueldo		 	= $_POST['sueldo'];
$descripcion 	= $_POST['descripcion'];
$estatus 		= 1;
$timestamp 		= date("Y-m-d H:i:s");


try{

	$con->beginTransaction();
	$query = "INSERT INTO vacantes (titulo,
									puesto,
									horario1,
									horario2,
									sueldo,
									descripcion,
									estatus,
									timestamp,
									Id_empresa) VALUES (?,?,?,?,?,?,?,?,?)";
	//
	$inserccion = $con->prepare($query);
	//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
	$inserccion->bindParam(1,$titulo, PDO::PARAM_STR);
	$inserccion->bindParam(2,$puesto, PDO::PARAM_STR);
	$inserccion->bindParam(3,$horario1, PDO::PARAM_STR);
	$inserccion->bindParam(4,$horario2, PDO::PARAM_STR);
	$inserccion->bindParam(5,$sueldo, PDO::PARAM_STR);
	$inserccion->bindParam(6,$descripcion, PDO::PARAM_STR);
	$inserccion->bindParam(7,$estatus, PDO::PARAM_STR);
	$inserccion->bindParam(8,$timestamp, PDO::PARAM_STR);
	$inserccion->bindParam(9,$Id_empresa, PDO::PARAM_STR);

	$inserccion->execute() or die("Error: Problemas al ingresas nueva vacante");

	$Id_vacante = $con->lastInsertId();
	$inserccion = null;

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