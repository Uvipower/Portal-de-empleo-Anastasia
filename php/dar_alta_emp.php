<?php 

include("conexion_login.php");
	//verifica que no falte ningun dato


	if (isset($_POST['username']) 		&& !empty($_POST['username']) 		&&
		isset($_POST['password']) 		&& !empty($_POST['password']))
	{

		//TIMESTAMP
		$timestamp = date("Y-m-d H:i:s");
		//ID DE EMPRESA
		$Id_tipo_usuario = 1;

		//creacion de variables
		//DATOS PRINCIPALES
		try{
			$username 			= $_POST['username'];
			$password 			= $_POST['password'];
			$password2 			= $_POST['password2'];
			if($password == $password2){
				$nombre				= $_POST['nombre'];
				$correo 			= $_POST['correo'];

				//DOMICILIO
				$estado				= $_POST['estado'];
				$ciudad 			= $_POST['ciudad'];
				$direccion			= $_POST['direccion'];
				$numero				= $_POST['numero'];

				//INFORMACION BASICA
				$razon_social		= $_POST['razon_social'];
				$giro				= $_POST['giro'];
				$fundacion			= $_POST['fundacion'];

				//RESPONSABLE
				$nombre_r			= $_POST['nombre_r'];
				$correo_r			= $_POST['correo_r'];
				$numero_r			= $_POST['numero_r'];
				$puesto_r			= $_POST['puesto_r'];

				//LOGOTIPO
				//$logotipo			= $_POST['logotipo'];


				

				//md5, seguridad
				$pass = md5($password);
				//DOMICILIO
				try{
					//BEGIN PUNTO DE CONTROL PARA REGRESAR SI HAY PROBLEMAS
					$con->beginTransaction();
					//INSERCCION DE DOMMICILIO
					$query = "INSERT INTO domicilio_empresa (estado, 
																ciudad, 
																direccion) VALUES (?,?,?)";
					//PREPARA QUERY
					$inserccion = $con->prepare($query);
					//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
					$inserccion->bindParam(1,$estado, PDO::PARAM_STR);
					$inserccion->bindParam(2,$ciudad, PDO::PARAM_STR);
					$inserccion->bindParam(3,$direccion, PDO::PARAM_STR);
					//EJECUTA QUERY
					$inserccion->execute() or die("Error: Problemas al ingresar datos del domicilio de la empresa");
					//SE BUSCA EL ULTIMO ID INGRESADO
					$Id_domicilio = $con->lastInsertId();
					//vacia variable de inserccion
					$inserccion = null;
					//INSERCCION DE RESPONSABLE DE LA EMPRESA
					$query = "INSERT INTO responsable (nombre, 
														correo, 
														numero, 
														puesto) VALUES (?,?,?,?)";
					//PREPARA QUERY
					$inserccion = $con->prepare($query);
					//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
					$inserccion->bindParam(1,$nombre_r, PDO::PARAM_STR);
					$inserccion->bindParam(2,$correo_r, PDO::PARAM_STR);
					$inserccion->bindParam(3,$numero_r, PDO::PARAM_STR);
					$inserccion->bindParam(4,$puesto_r, PDO::PARAM_STR);
					//EJECUTA QUERY
					$inserccion->execute() or die("Error: Problemas al ingresar datos del responsable de la empresa");
					//SE BUSCA EL ULTIMO ID INGRESADO
					$Id_responsable = $con->lastInsertId();
					//vacia variable de inserccion
					$inserccion = null;
					//INSERCCION DE LA FINROMACION BASICA DELA EMPRESA
					$query = "INSERT INTO info_basica_e (nombre, 
														numero, 
														giro, 
														razon_social, 
														fundacion, 
														Id_domicilio_empresa, 
														Id_responsable) VALUES (?,?,?,?,?,?,?)";
					//PREPARA QUERY
					$inserccion = $con->prepare($query);
					//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
					$inserccion->bindParam(1,$nombre, PDO::PARAM_STR);
					$inserccion->bindParam(2,$numero, PDO::PARAM_STR);
					$inserccion->bindParam(3,$giro, PDO::PARAM_STR);
					$inserccion->bindParam(4,$razon_social, PDO::PARAM_STR);
					$inserccion->bindParam(5,$fundacion, PDO::PARAM_STR);
					$inserccion->bindParam(6,$Id_domicilio, PDO::PARAM_STR);
					$inserccion->bindParam(7,$Id_responsable, PDO::PARAM_STR);
					//EJECUTA QUERY
					$inserccion->execute() or die("Error: Problemas al ingresar informacion basica de la empresa");
					//SE BUSCA EL ULTIMO ID INGRESADO
					$Id_info_basica_e = $con->lastInsertId();
					//vacia variable de inserccion
					$inserccion = null;
					//INSERCCION DE LA EMPRESA 
					$query = "INSERT INTO empresa (logotipo, 
													Id_info_basica_e,
													timestamp) VALUES (?,?,?)";
					//PREPARA QUERY
					$inserccion = $con->prepare($query);
					//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
					$inserccion->bindParam(1,$logotipo, PDO::PARAM_STR);
					$inserccion->bindParam(2,$Id_info_basica_e, PDO::PARAM_STR);
					$inserccion->bindParam(3,$timestamp, PDO::PARAM_STR);


					//EJECUTA QUERY
					$inserccion->execute() or die("Error: Problemas al logotipo e informacion basica");
					//SE BUSCA EL ULTIMO ID INGRESADO
					$Id_empresa = $con->lastInsertId();
					//vacia variable de inserccion
					$inserccion = null;
					//INSERCCION DE LOS DATOSDE LOGEO DE LAEMPRESA
					$query = "INSERT INTO login (username, 
														password, 
														correo, 
														Id_tipo_usuario, 
														Id_empresa) VALUES (?,?,?,?,?)";
					$inserccion = null;
					//PREPARA QUERY
					$inserccion = $con->prepare($query);
					//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
					$inserccion->bindParam(1,$username, PDO::PARAM_STR);
					$inserccion->bindParam(2,$pass, PDO::PARAM_STR);
					$inserccion->bindParam(3,$correo, PDO::PARAM_STR);
					$inserccion->bindParam(4,$Id_tipo_usuario, PDO::PARAM_STR);
					$inserccion->bindParam(5,$Id_empresa, PDO::PARAM_STR);
					//EJECUTA QUERY
					$inserccion->execute() or die("Error: Problemas al ingresar datos del logeo de la empresa".$con->errorCode());
					//SE BUSCA EL ULTIMO ID INGRESADO
					$Id_login = $con->lastInsertId();
					//vacia variable de inserccion
					$inserccion = null;
					//COMMIT ESPARA INDICAR HASTA QUE PARTE TERMINARA EL QUERY
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
			}
			else{
				throw new PDOException("Contraseñas no coinciden");
			}
			$con=null;
		}
		catch(PDOException $er){
			echo "Error:".$er->getMessage();
			exit();
		}

		
	}
	else{
		echo "Falta llenar algun dato";
	}

?>