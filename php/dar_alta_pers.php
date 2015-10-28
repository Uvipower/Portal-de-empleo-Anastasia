<?php 

include("conexion_login.php");
	//verifica que no falte ningun dato


	if (isset($_POST['username']) 		&& !empty($_POST['username']) 		&&
		isset($_POST['password']) 		&& !empty($_POST['password']))
	{

		//TIMESTAMP;
		$timestamp = date("Y-m-d H:i:s");
		//creacion de variables
		$Id_tipo_usuario = 2;

		//DATOS PERSONALES
		$username 			= $_POST['username'];
		$password 			= $_POST['password'];
		$password2 			= $_POST['password2'];
		if($password == $password2){
			$correo 			= $_POST['correo'];
			$nombre				= $_POST['nombre'];
			$apellidoPaterno 	= $_POST['apellidoPaterno'];
			$apellidoMaterno 	= $_POST['apellidoMaterno'];
			$numero				= $_POST['numero'];
			$genero 			= $_POST['genero'];
			$edad 				= $_POST['edad'];
			$nacionalidad 		= $_POST['nacionalidad'];
			$estado_civil 		= $_POST['estado_civil'];
			//TERMINA DATOS PERSONALES

			//============================================================================//

			//INFORMACION IMPORTANTE
			$disponibilidad1 	= $_POST['disponibilidad1'];
			$disponibilidad2 	= $_POST['disponibilidad2'];
			$estudia 			= $_POST['estudia'];
			//DATOS DE SI ESTUDIA
			if($estudia == 1){
				$nombre_escuela 	= $_POST['nombre_escuela'];
				$direccion_escuela 	= $_POST['direccion_escuela'];
				$horario1 			= $_POST['horario1'];
				$horario2 			= $_POST['horario2'];
			}
			elseif ($estudia == 0) {
				$nombre_escuela 	= 0;
				$direccion_escuela 	= 0;
				$horario1 			= 0;
				$horario2 			= 0;
			}
			//TERMINA INFORMACION IMPORTANTE


			//=============================ARRAY VALUES==============================//
			

			//REFERENCIAS
			$nombre_r 		= array_values($_POST['nombre_r']);
			$direccion_r 	= array_values($_POST['direccion_r']);
			$numero_r 		= array_values($_POST['numero_r']);
			$parentesco_r 	= array_values($_POST['parentesco_r']);
			//TERMINA REFERENCIA

			//============================================================================//


			//ESTUDIOS
			$nivel_e 	= array_values($_POST['nivel_e']);
			$nombre_e 	= array_values($_POST['nombre_e']);
			$titulo_e 	= array_values($_POST['titulo_e']);
			$anios_e 	= array_values($_POST['anios_e']);
			//TERMINA ESTUDIOS

			//============================================================================//


			//TRABAJOS ANTERIORES
			$trabajo_anterior 		= $_POST['trabajo_anterior'];
			//SI HA TRABAJADO ANTERIORMENTE
			if ($trabajo_anterior 		== 1) {
				$nombre_t 				= array_values($_POST['nombre_t']);
				$anios_t 				= array_values($_POST['anios_t']);
				$direccion_t 			= array_values($_POST['direccion_t']);
				$numero_t 				= array_values($_POST['numero_t']);
				$puesto_t 				= array_values($_POST['puesto_t']);
				$sueldo_t 				= array_values($_POST['sueldo_t']);
				$motivo_separacion_t 	= array_values($_POST['motivo_separacion_t']);
				$jefe_t 				= array_values($_POST['jefe_t']);
				$comentario_jefe_t 		= array_values($_POST['comentario_jefe_t']);
			}

			elseif ($trabajo_anterior 	== 0) {
				$nombre_t 				= 0;
				$anios_t 				= 0;
				$direccion_t 			= 0;
				$numero_t 				= 0;
				$puesto_t 				= 0;
				$sueldo_t 				= 0;
				$motivo_separacion_t 	= 0;
				$jefe_t 				= 0;
				$comentario_jefe_t 		= 0;
			}
			//TERMINA TRABAJOS ANTERIORES

			//==================================TERMINA ARRAY VALUES=================================//

			

			//DATOS GENERALES
			$afiliado 			= $_POST['afiliado'];
			$afianzado 			= $_POST['afianzado'];
			$seguro_vida 		= $_POST['seguro_vida'];
			$viajar 			= $_POST['viajar'];
			$cambiar_residencia 	= $_POST['cambiar_residencia'];
			$fecha_empezar 		= $_POST['fecha_empezar'];
			//TERMINA DATOS GENERALES


			//============================================================================//


			//DOMICILIO
			$estado 		= $_POST['estado'];
			$ciudad 		= $_POST['ciudad'];
			$direccion 		= $_POST['direccion'];
			$colonia 		= $_POST['colonia'];
			$cp 			= $_POST['cp'];
			//TERMINA DOMICILIO


			//============================================================================//


			//ECONOMIA
			$ingresos 			= $_POST['ingresos'];
			if($estado_civil 	== "Casado"){

				$conyuge_trabaja 	= $_POST['conyuge_trabaja'];

			}
			else{
				$conyuge_trabaja	= 0;
			}
			$casa_propia 		= $_POST['casa_propia'];
			//SI NO TIENE CASA PAGA RENTA
			if($casa_propia 	== 0){
				$renta 				= $_POST['renta'];
			}
			elseif($casa_propia == 1){
				$renta 				= 0;
			}
			$vehiculo 			= $_POST['vehiculo'];
			$deudas 			= $_POST['deudas'];
			//TERMINA ECONOMIA

			//============================================================================//


			//DOCUMENTACION
			$curp 					= $_POST['curp'];
			$seguro_social 			= $_POST['seguro_social'];
			$afore 					= $_POST['afore'];
			$rfc 					= $_POST['rfc'];
			$cartilla_militar 		= $_POST['cartilla_militar'];
			$es_extranjero			= $_POST['es_extranjero'];
			//SI ES EXTRANJERO PIDE DOCUMENTO
			if ($es_extranjero 		== 1) {
				$extranjero_documento 	= $_POST['extranjero_documento'];
			}
			elseif ($es_extranjero 	== 0) {
				$extranjero_documento 	= 0;
			}
			
			$pasaporte 				= $_POST['pasaporte'];
			//SI TIENE VEHICULO PIDE LICENCIA
			if($vehiculo 		 	!= 0){
				$licencia 				= $_POST['licencia'];
			}
			else{
				$licencia 				= 0;
			}
			//SI TIENE LICENCIA LA PIDE
			if ($licencia 			== 1) {
				$clase_numero_licencia 	= $_POST['clase_numero_licencia'];
			}
			else{
				$clase_numero_licencia 	= 0;
			}
			//TERMINA DOCUMENTACION


			//============================================================================//

			

			//FOTOGRAFIA
			$fotografia			= 0;
			//TERMINA FOTOGRAFIA


			//============================================================================//


			//DOCUMENTOS EXTRA
			//$curriculum				= $_POST['curriculum'];
			//$carta_recomendacion	= $_POST['carta_recomendacion'];
			//TERMINA DOCUMENTOS EXTRA

			//============================================================================//





			//md5, seguridad
			$pass = md5($password);
			try{
				//EMPIEZO DE LA INSERCCION DE CODIGO BEGIN
				$con->beginTransaction();
				//EMPIEZA LLAVES QUE NO!!! NECESITAN ID_PERSONA
				//DOMICILIO
				$query = "INSERT INTO domicilio_persona (estado,
														ciudad, 
														direccion, 
														colonia,
														cp) VALUES (?,?,?,?,?)";
				$inserccion = $con->prepare($query);
				$inserccion->bindParam(1,$estado, PDO::PARAM_STR);
				$inserccion->bindParam(2,$ciudad, PDO::PARAM_STR);
				$inserccion->bindParam(3,$direccion, PDO::PARAM_STR);
				$inserccion->bindParam(4,$colonia, PDO::PARAM_STR);
				$inserccion->bindParam(5,$cp, PDO::PARAM_STR);

				$inserccion->execute() or die ("Error: Problemas al guardar domicilio");

				$Id_domicilio_persona = $con->lastInsertId();
				$inserccion = null;
				//DATOS PERSONALES
				$query = "INSERT INTO datos_personales (nombre,
														apellido_materno, 
														apellido_paterno, 
														numero,
														genero,
														edad,
														nacionalidad,
														estado_civil,
														Id_domicilio_persona) VALUES (?,?,?,?,?,?,?,?,?)";
				$inserccion = $con->prepare($query);
				$inserccion->bindParam(1,$nombre, PDO::PARAM_STR);
				$inserccion->bindParam(2,$apellidoMaterno, PDO::PARAM_STR);
				$inserccion->bindParam(3,$apellidoPaterno, PDO::PARAM_STR);
				$inserccion->bindParam(4,$numero, PDO::PARAM_STR);
				$inserccion->bindParam(5,$genero, PDO::PARAM_STR);
				$inserccion->bindParam(6,$edad, PDO::PARAM_STR);
				$inserccion->bindParam(7,$nacionalidad, PDO::PARAM_STR);
				$inserccion->bindParam(8,$estado_civil, PDO::PARAM_STR);
				$inserccion->bindParam(9,$Id_domicilio_persona, PDO::PARAM_STR);

				$inserccion->execute() or die ("Error: Problemas al guardar datos personales");

				$Id_datos_personales = $con->lastInsertId();
				$inserccion = null;

				//ECONOMIA
				$query = "INSERT INTO economia (ingresos,
														conyuge_trabaja, 
														casa_propia, 
														renta,
														vehiculo_propio,
														deudas) VALUES (?,?,?,?,?,?)";
				$inserccion = $con->prepare($query);
				$inserccion->bindParam(1,$ingresos, PDO::PARAM_STR);
				$inserccion->bindParam(2,$conyuge_trabaja, PDO::PARAM_STR);
				$inserccion->bindParam(3,$casa_propia, PDO::PARAM_STR);
				$inserccion->bindParam(4,$renta, PDO::PARAM_STR);
				$inserccion->bindParam(5,$vehiculo, PDO::PARAM_STR);
				$inserccion->bindParam(6,$deudas, PDO::PARAM_STR);

				$inserccion->execute() or die ("Error: Problemas al guardar datos de economia");

				$Id_economia = $con->lastInsertId();
				$inserccion = null;

				//DATOS GENERALES

				$query = "INSERT INTO datos_generales (afiliado,
														afianzado, 
														seguro_vida, 
														viajar,
														cambiar_residencia,
														fecha_empezar) VALUES (?,?,?,?,?,?)";
				$inserccion = $con->prepare($query);
				$inserccion->bindParam(1,$afiliado, PDO::PARAM_STR);
				$inserccion->bindParam(2,$afianzado, PDO::PARAM_STR);
				$inserccion->bindParam(3,$seguro_vida, PDO::PARAM_STR);
				$inserccion->bindParam(4,$viajar, PDO::PARAM_STR);
				$inserccion->bindParam(5,$cambiar_residencia, PDO::PARAM_STR);
				$inserccion->bindParam(6,$fecha_empezar, PDO::PARAM_STR);

				$inserccion->execute() or die ("Error: Problemas al guardar datos generales");

				$Id_datos_generales = $con->lastInsertId();
				$inserccion = null;

				//DOCUMENTACION

				$query = "INSERT INTO documentacion (curp,
														afore, 
														rfc, 
														seguro_social,
														cartilla_militar,
														pasaporte,
														extranjero_documento,
														licencia,
														clase_numero_licencia) VALUES (?,?,?,?,?,?,?,?,?)";
				$inserccion = $con->prepare($query);
				$inserccion->bindParam(1,$curp, PDO::PARAM_STR);
				$inserccion->bindParam(2,$afore, PDO::PARAM_STR);
				$inserccion->bindParam(3,$rfc, PDO::PARAM_STR);
				$inserccion->bindParam(4,$seguro_social, PDO::PARAM_STR);
				$inserccion->bindParam(5,$cartilla_militar, PDO::PARAM_STR);
				$inserccion->bindParam(6,$pasaporte, PDO::PARAM_STR);
				$inserccion->bindParam(7,$extranjero_documento, PDO::PARAM_STR);
				$inserccion->bindParam(8,$licencia, PDO::PARAM_STR);
				$inserccion->bindParam(9,$clase_numero_licencia, PDO::PARAM_STR);

				$inserccion->execute() or die ("Error: Problemas al guardar documentacion");

				$Id_documentacion = $con->lastInsertId();
				$inserccion = null;

				//TERMINA LLAVES QUE NO!!! NECESITAN ID_PERSONA

				//PERSONA
				$query = "INSERT INTO persona (fotografia,
												Id_documentacion, 
												Id_datos_personales, 
												Id_datos_generales,
												Id_economia,
												timestamp) VALUES (?,?,?,?,?,?)";
				$inserccion = $con->prepare($query);
				$inserccion->bindParam(1,$fotografia, PDO::PARAM_STR);
				$inserccion->bindParam(2,$Id_documentacion, PDO::PARAM_STR);
				$inserccion->bindParam(3,$Id_datos_personales, PDO::PARAM_STR);
				$inserccion->bindParam(4,$Id_datos_generales, PDO::PARAM_STR);
				$inserccion->bindParam(5,$Id_economia, PDO::PARAM_STR);
				$inserccion->bindParam(6,$timestamp, PDO::PARAM_STR);


				$inserccion->execute() or die ("Error: Problemas al guardar persona".$con->errorCode());

				$Id_persona = $con->lastInsertId();
				$inserccion = null;

				//TERMINA PERSONA



				//LLAVES QUE NECESITAN ID_PERSONA

				//SI TRABAJO
				if($trabajo_anterior != 0){ //MOVER PARA QUE SE REALIZE MAS ABAJO 

					//JEFE
					//se guarda cuantos trabajos tuvo, se enteinde que es un jefe por un trabajo
					$numero_trabajos = count($jefe_t);
					//ciclo for para la inserccion de jefes
					for ($i=0; $i < $numero_trabajos ; $i++) { 
						$query = "INSERT INTO jefes (nombre,
													comentarios) VALUES (?,?)";
						$inserccion = $con->prepare($query);
						$inserccion->bindParam(1,$jefe_t[$i], PDO::PARAM_STR);
						$inserccion->bindParam(2,$comentario_jefe_t[$i], PDO::PARAM_STR);

						$inserccion->execute() or die ("Error: Problemas la insertar jefe");

						$Id_jefe = $con->lastInsertId();
						$inserccion = null;
						//TENER PENDIENTE
						$query = "INSERT INTO trabajos_anteriores (nombre,
																	anios,
																	direccion,
																	numero,
																	puesto,
																	sueldo,
																	motivo_separacion,
																	Id_jefe,
																	Id_persona) VALUES (?,?,?,?,?,?,?,?,?)";
						$inserccion = $con->prepare($query);
						$inserccion->bindParam(1,$nombre_t[$i], PDO::PARAM_STR);
						$inserccion->bindValue(2,$anios_t[$i], PDO::PARAM_INT);
						$inserccion->bindParam(3,$direccion_t[$i], PDO::PARAM_STR);
						$inserccion->bindParam(4,$numero_t[$i], PDO::PARAM_STR);
						$inserccion->bindParam(5,$puesto_t[$i], PDO::PARAM_STR);
						$inserccion->bindValue(6,$sueldo_t[$i], PDO::PARAM_INT);
						$inserccion->bindParam(7,$motivo_separacion_t[$i], PDO::PARAM_STR);
						$inserccion->bindParam(8,$Id_jefe, PDO::PARAM_STR);
						$inserccion->bindParam(9,$Id_persona, PDO::PARAM_STR);

						$inserccion->execute() or die ("Error: Problemas la insertar trabajo anterior");

						//$Id_trabajo_anterior = $con->lastInsertId();
						$inserccion = null;

						//TERMINA LLAVES QUE NECESITAN ID_PERSONA


					}
					

				}

				//ESTUDIOS
				//NUEVO DE ESTUDIOS QUE SE TIENEN
				$numero_estudios = count($nivel_e);
				for ($i=0; $i < $numero_estudios ; $i++) { 
					$query = "INSERT INTO estudios(nivel, nombre, titulo, anios, Id_persona) VALUES (?,?,?,?,?)";
					$inserccion = $con->prepare($query);
					$inserccion->bindParam(1,$nivel_e[$i], PDO::PARAM_STR);
					$inserccion->bindParam(2,$nombre_e[$i], PDO::PARAM_STR);
					$inserccion->bindParam(3,$titulo_e[$i], PDO::PARAM_STR);
					$inserccion->bindValue(4,$anios_e[$i], PDO::PARAM_STR);
					$inserccion->bindParam(5,$Id_persona, PDO::PARAM_STR);
					

					$inserccion->execute() or die ("Error: Problemas al guardar estudios");

					//$Id_estudio = $con->lastInsertId();
					$inserccion = null;
				}
				//TERMINA ESTUDIOS


				//REFERENCIAS
				$numero_referencias = count($nombre_r);
				for ($i=0; $i < $numero_referencias ; $i++) { 
					$query = "INSERT INTO referencias (nombre,
														direccion, 
														numero, 
														parentesco,
														Id_persona) VALUES (?,?,?,?,?)";
					$inserccion = $con->prepare($query);
					$inserccion->bindParam(1,$nombre_r[$i], PDO::PARAM_STR);
					$inserccion->bindParam(2,$direccion_r[$i], PDO::PARAM_STR);
					$inserccion->bindParam(3,$numero_r[$i], PDO::PARAM_STR);
					$inserccion->bindParam(4,$parentesco_r[$i], PDO::PARAM_STR);
					$inserccion->bindParam(5,$Id_persona, PDO::PARAM_STR);
					

					$inserccion->execute() or die ("Error: Problemas al guardar referencias");

					//$Id_referencia = $con->lastInsertId();
					$inserccion = null;
				}
				$query = "INSERT INTO login (username, 
											password, 
											correo, 
											Id_tipo_usuario, 
											Id_persona) VALUES (?,?,?,?,?)";
				$inserccion = null;
				//PREPARA QUERY
				$inserccion = $con->prepare($query);
				//CAMBIA LOS VALORES DE LOS ? POR LAS VARIABLES
				$inserccion->bindParam(1,$username, PDO::PARAM_STR);
				$inserccion->bindParam(2,$pass, PDO::PARAM_STR);
				$inserccion->bindParam(3,$correo, PDO::PARAM_STR);
				$inserccion->bindParam(4,$Id_tipo_usuario, PDO::PARAM_STR);
				$inserccion->bindParam(5,$Id_persona, PDO::PARAM_STR);
				//EJECUTA QUERY
				$inserccion->execute() or die("Error: Problemas al ingresar datos del logeo del usuario");
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
				$con = rollBack();
				$con = null;
				exit();
			}
			

		}
		else{
			echo "Contraseñas no coinciden";
		}
		$con=null;

	}
	else{
		echo "Falta llenar algun dato";
	}

?>