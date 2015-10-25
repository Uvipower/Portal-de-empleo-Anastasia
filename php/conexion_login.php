<?php
//clase
class Conexion
{
	//funcion
	public function conectar()
	{
		$host = "localhost";
		$user = "root";
		$password = "";
		$database = "portal_empleo";

		//$con = mysqli_connect($host,$user,$password,$database) or die ("Problemas al conectar al servidor y base de datos".mysqli_errno());

		try{
			//regresa la conexion 
			return $con = new PDO("mysql:host=$host;dbname=$database", $user, $password);
		}
		catch(PDOException $er){
			//error
			echo "Error: ".$er->getMessage();
			//cerrado del sistema para evitar la ejecucion de mas codigo
			exit();
		}
	}
}

//instancia de la clase
$conexion = new Conexion();
//se ejecuta la funcion
$con = $conexion->conectar();
	
?>