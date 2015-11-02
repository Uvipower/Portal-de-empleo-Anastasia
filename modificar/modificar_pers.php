<?php 

if (isset($_POST['id']) && !empty($_POST['id'])) {

	
	$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">
</head>

<body>
	<h1>Persona!</h1>
	<form action="" method="POST" name="form_pers" id="form_pers" autocomplete="off">

		<h4>Datos personales</h4>
		

		<label for="username">Usuario</label>
		<input type="text" name="username" id="username">

		<label for="fotografia">Fotografia</label>
		<input type="file" name="fotografia" id="fotografia">

		<br>
		
		<label for="password">Contraseña</label>
		<input type="password" name="password" id="password">

		<label for="password2">Repetir contraseña</label>
		<input type="password" name="password2" id="password2">

		<br>

		<label for="correo">Correo</label>
		<input type="email" name="correo" id="correo">

		<br>

		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">


		<label for="apellidoPaterno">Apellido paterno</label>
		<input type="text" name="apellidoPaterno" id="apellidoPaterno">
		
		<label for="apellidoMaterno">Apellido materno</label>
		<input type="text" name="apellidoMaterno" id="apellidoMaterno">

		<br>

		<label for="numero">Numero</label>
		<input type="text" name="numero" id="numero">

		<label for="genero">Genero</label>
		<select name="genero" id="genero">
			<option disabled selected>Masculino/Femenino</option>
			<option value="M">Masculino</option>
			<option value="F">Femenino</option>
		</select>

		<br>

		<label for="edad">Edad</label>
		<input type="number" name="edad" id="edad">

		<br>

		<label for="nacionalidad">Nacionalidad</label>
		<select name="nacionalidad" id="nacionalidad">
			<option disabled selected>Elegir una opcion</option>
			<option value="Mexicana">Mexicana</option>
			<option value="Extranjera">Extranjera</option>
		</select>

		<br>

		<label for="estado_civil">Estado civil</label>
		<select name="estado_civil" id="estado_civil">
			<option disabled selected>Elegir una opcion</option>
			<option value="Soltero">Soltero</option>
			<option value="Divorciado">Divorciado</option>
			<option value="Casado">Casado</option>
			<option value="Viudo">Viudo</option>
		</select>

		<br>

		<h4>Informacion importante</h4>


		<label for="disponibilidad1">Disponibilidad de horario</label>
		<input type="time" name="disponibilidad1" id="disponibilidad1">
		a <input type="time" name="disponibilidad2" id="disponibilidad2">

		<br>

		<label for="estudia" class="estudia">¿Estudias?</label>
		<select name="estudia" id="estudia" class="estudia">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="nombre_escuela" class="escuela">Nombre</label>
		<input type="text" name="nombre_escuela" id="nombre_escuela" class="escuela">


		<label for="direccion_escuela" class="escuela">Direccion</label>
		<input type="text" name="direccion_escuela" id="direccion_escuela" class="escuela">

		<label for="horario1" class="escuela">Horario</label>
		<input type="time" name="horario1" id="horario1" class="escuela">
		<x class="escuela">a</x> <input type="time" name="horario2" id="horario2" class="escuela">








		<h4>Referencias</h4>

		<table id="referencias">
			<thead>
				<tr>
					<th>
						Nombre
					</th>
					<th>
						Direccion
					</th>
					<th>
						Numero celular
					</th>
					<th>
						Parentesco
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<input type="text" name="nombre_r[]" id="nombre_r">
					</td>
					<td>
						<input type="text" name="direccion_r[]" id="direccion_r">
					</td>
					<td>
						<input type="text" name="numero_r[]" id="numero_r">
					</td>
					<td>
						<input type="text" name="parentesco_r[]" id="parentesco_r">
					</td>
				</tr>
			</tbody>
		</table>
		<input type="button" id="nueva_referencia" value="Nueva referencia">
		


		<br>

		<h4>Estudios</h4>
		<label for="nivel_e">Nivel</label>
		<select name="nivel_e[]" id="nivel_e">
			<option disabled selected>Eliga un nivel</option>
			<option value="Primaria">Primaria</option>
			<option value="Secundaria">Secundaria</option>
			<option value="Preparatoria">Preparatoria</option>
			<option value="Universidad">Universidad</option>
			<option value="Maestria">Maestria</option>
			<option value="Posgrado">Posgrado</option>
			<option value="Doctorado">Doctorado</option>
		</select>

		<label for="nombre_e">Nombre instituto</label>
		<input type="text" name="nombre_e[]" id="nombre_e">

		<br>

		<label for="titulo_e">Titulo recibido</label>
		<input type="text" name="titulo_e[]" id="titulo_e">

		<label for="anios_e">Años</label>
		<input type="number" name="anios_e[]" id="anios_e">

		<br>

		<input type="button" id="nuevo_estudio" value="Nuevo estudios">


		<h4>Trabajos anteriores</h4>

		<label for="trabajo_anterior">¿Ha trabajado anteriormente?</label>
		<select name="trabajo_anterior" id="trabajo_anterior" class="trabajo_anterior">
			<option value="" disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>


		<label for="nombre_t" class="trabajo">Nombre</label>
		<input type="text" name="nombre_t[]" id="nombre_t" class="trabajo">

		<label for="anios_t" class="trabajo">Años</label>
		<input type="number" name="anios_t[]" id="anios_t" class="trabajo">

		<br>

		<label for="direccion_t" class="trabajo">Direccion</label>
		<input type="text" name="direccion_t[]" id="direccion_t" class="trabajo">

		<label for="numero_t" class="trabajo">Numero telefonico</label>
		<input type="text" name="numero_t[]" id="numero_t" class="trabajo">

		<br>

		<label for="puesto_t" class="trabajo">Puesto ejercido</label>
		<input type="text" name="puesto_t[]" id="puesto_t" class="trabajo">

		<label for="sueldo_t" class="trabajo">Sueldo</label>
		<input type="number" name="sueldo_t[]" id="sueldo_t" class="trabajo">

		<br>

		<label for="motivo_separacion_t" class="trabajo">Motivo de separacion</label>
		<br>
		<textarea name="motivo_separacion_t[]" id="motivo_separacion_t" cols="30" rows="2" class="trabajo"></textarea>

		<br>

		<label for="jefe_t" class="trabajo">Nombre del jefe</label>
		<input type="text" name="jefe_t[]" id="jefe_t" class="trabajo">
		<br>
		<label for="comentario_jefe_t" class="trabajo">Comentarios hacia el jefe</label>
		<br>
		<textarea name="comentario_jefe_t[]" id="comentario_jefe_t" cols="30" rows="2" class="trabajo"></textarea>

		<br>

		<button class="trabajo">Nuevo trabajo anterior</button>




		


		<h4>Datos generales</h4>


		<label for="afiliado">¿Esta afiliado a algun sindicato?</label>
		<select name="afiliado" id="afiliado">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="afianzado">¿Esta afianzado?</label>
		<select name="afianzado" id="afianzado">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>

		<label for="seguro_vida">¿Cuenta con seguro de vida?</label>
		<select name="seguro_vida" id="seguro_vida">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="viajar">¿Puede viajar?</label>
		<select name="viajar" id="viajar">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>


		<label for="cambiar_residencia">¿Cambiaria de residencia?</label>
		<select name="cambiar_residencia" id="cambiar_residencia">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="fecha_empezar">Fecha a la que puede empezar a trabajar</label>
		<input type="date" name="fecha_empezar" id="fecha_empezar">
		
		<br>


		<h4>Domicilio</h4>


		<label for="cp">Codigo postal</label>
		<input type="search" name="cp" id="cp" class="auto">
		<input type="button" value="Verificar" onclick="verificar_cp();"/>
		

	
		<br>

		<label for="estado">Estado</label>
		<input type="text" name="estado" id="estado" placeholder="Estado"/>
		<br>

		<label for="ciudad">Ciudad</label>
		<input type="text" name="ciudad" id="ciudad" placeholder="Ciudad"/>

		<select name="colonia" id="colonias">
			<option id="Colonias" value="" selected disabled>Colonias</option>
		</select>
		<br>

		<label for="direccion">Direccion</label>
		<input type="text" name = "direccion" id = "direccion">

		<br>

		

		<h4>Documentacion</h4>

		<label for="curp">¿Tienes CURP?</label>
		<select name="curp" id="curp">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="seguro_social">¿Tienes seguro social?</label>
		<select name="seguro_social" id="seguro_social">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>

		<label for="afore">¿Tienes AFORE?</label>
		<select name="afore" id="afore">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="rfc">¿Tienes RFC?</label>
		<select name="rfc" id="rfc">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>
	
		<label for="cartilla_militar">¿Tienes cartilla militar?</label>
		<select name="cartilla_militar" id="cartilla_militar">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="es_extranjero">¿Eres extranjero?</label>
		<select name="es_extranjero" id="es_extranjero" class="es_extranjero">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="extranjero_documento" class="extranjero_documento">Documento</label>
		<input type="text" name="extranjero_documento" id="extranjero_documento" class="extranjero_documento">
		
		<br>
		
		<label for="pasaporte">¿Tienes pasaporte?</label>
		<select name="pasaporte" id="pasaporte">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="licencia">¿Tienes licencia de manejo?</label>
		<select name="licencia" id="licencia" class="licencia">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="clase_numero_licencia" class="clase_numero_licencia">Clase y numero de licencia</label>
		<input type="text" name="clase_numero_licencia" id="clase_numero_licencia" class="clase_numero_licencia">
		

		<br>

		<h4>Economia</h4>

		<br>

		<label for="ingresos">¿Tiene otros ingresos?</label>
		<select name="ingresos" id="ingresos">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="conyuge_trabaja" class="conyuge_trabaja">¿Conyuge trabaja?</label>
		<select name="conyuge_trabaja" id="conyuge_trabaja" class="conyuge_trabaja">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>

		<label for="casa_propia">¿Tiene casa propia?</label>
		<select name="casa_propia" id="casa_propia">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<label for="renta" id="renta" class = "renta">¿Paga renta?</label>
		<select name="renta" id="renta" class = "renta">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>

		<label for="vehiculo">¿Tiene vehiculo propio?</label>
		<select name="vehiculo" id="vehiculo">
			<option disabled selected>Si/No</option>
			<option value="Automovil">Automovil</option>
			<option value="Motocicleta">Motocicleta</option>
			<option value="0">No</option>
		</select>

		<label for="deudas">¿Tiene deudas?</label>
		<select name="deudas" id="deudas">
			<option disabled selected>Si/No</option>
			<option value="1">Si</option>
			<option value="0">No</option>
		</select>

		<br>

		<h4>Documentos extra</h4>

		<label for="curriculum">Curriculum</label>
		<input type="file" name="curriculum" id="curriculum">

		<br>

		<label for="carta_recomendacion">Carta de recomentacion</label>
		<input type="file" name="carta_recomendacion" id="carta_recomendacion">

		<br>


		<button id="boton_ingreso_persona" type="submit">Dar de alta</button>
    	<button type="reset">Restablecer todo</button>
	
	</form>

	


	
</body>

<script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/sweetalert.min.js"></script>

<script type="text/javascript" src="../js/scripts.js"></script>

</html>

<?php
}

?>