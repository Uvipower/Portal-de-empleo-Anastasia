<?php
/*
*TENER EN CUENTA QUE EXEC ES PARA DATOS ESTATICOS SIN VARIABLES "DELETE * FROM ALGO"
*EXECUTE ES CUANDO SE LE ANEXAN VARIABLES ALQUERY "INSERT INTO ALGO (ALGO) VALUES ?"
*/

		//creacion de la clase

		class Login
		{
			
			//funcion la cual recibe dos variables
			public function acceso ($username,$pass)
			{	
				//se incluye la conexion del login
				include("conexion_login.php");
				
				//codificacion
				$password = md5($pass);
					//intenta
					try{
						//query
						$query = "SELECT * FROM login WHERE username =:username"; //query
						//preparacion del query
						$consulta = $con->prepare($query);
						//se indica el cambio de texto por las variables 
						$consulta->bindParam(":username",$username, PDO::PARAM_STR);
						//ejecucion del query       
						$consulta->execute() or die( "Error: Busqueda de usuario" );
						//fetch de la consulta
						$resultado = $consulta->fetch(PDO::FETCH_ASSOC);
							//verificar que el resultado tenga algo
							if ($resultado != null){
								//query
								$query = "SELECT * FROM  login WHERE username =? AND password =?"; //query
								//prepara query
								$consulta = $con->prepare($query);
								$consulta->bindParam(1,$username, PDO::PARAM_STR);//ocultado de variables
								$consulta->bindParam(2,$password, PDO::PARAM_STR);
								$consulta->execute() or die( "Error: Busqueda de contraseña" ); //ejecucion 
								//guardado de consulta en una variable
								$resultado = $consulta->fetch(PDO::FETCH_ASSOC);

								if ($resultado != null){


									session_start(); //inicia sesiones
									//asignacion de viables a sesiones
									$_SESSION['username'] = $resultado['username'];
									$_SESSION['acceso'] = $resultado['Id_tipo_usuario'];
									if ($resultado['Id_tipo_usuario'] == 1) {
										$_SESSION['Id'] = $resultado['Id_empresa'];
										
									}
									else{
										$_SESSION['Id'] = $resultado['Id_persona'];
										
									}
									

									echo $_SESSION['acceso']; //lo que recibe el ajax, para saber que pagina ira

								}
								else{
									throw new PDOException("Contraseña incorrecta");//creacion de excepciones
								}
							}
							else{
								throw new PDOException("No existe usuario");
							}
						}
						catch(PDOException $er){ //mostrar la excepcion creada
							echo "Error: ".$er->getMessage();
							exit();
						}
				
			}
		}

		//crea variables con los datos posteados en el formulario
if(isset($_POST['username'])	&& !empty($_POST['username'])	&&
	isset($_POST['password'])	&& !empty($_POST['password']))
{
	//tratamiento de las variables
	$username = mysql_real_escape_string($_POST['username']);
	$pass = mysql_real_escape_string($_POST['password']);
	//instacia de la nueva clase
	$login = new Login();
	//se ejecuta la funcion
	$acceso = $login->acceso($username,$pass);		
}
else{
	echo "Existen campos vacios";
}
				
?>


