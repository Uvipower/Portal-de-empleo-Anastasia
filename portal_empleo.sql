-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-11-2015 a las 22:07:57
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `portal_empleo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_generales`
--

CREATE TABLE IF NOT EXISTS `datos_generales` (
`Id_datos_generales` int(11) NOT NULL,
  `afiliado` tinyint(1) DEFAULT NULL,
  `afianzado` tinyint(1) DEFAULT NULL,
  `seguro_vida` tinyint(1) DEFAULT NULL,
  `viajar` tinyint(1) DEFAULT NULL,
  `cambiar_residencia` tinyint(1) DEFAULT NULL,
  `fecha_empezar` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_generales`
--

INSERT INTO `datos_generales` (`Id_datos_generales`, `afiliado`, `afianzado`, `seguro_vida`, `viajar`, `cambiar_residencia`, `fecha_empezar`) VALUES
(4, 0, 0, 0, 0, 0, '2015-10-27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_personales`
--

CREATE TABLE IF NOT EXISTS `datos_personales` (
`Id_datos_personales` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido_materno` varchar(45) DEFAULT NULL,
  `apellido_paterno` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `genero` enum('M','F') DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nacionalidad` enum('Mexicana','Extranjera') DEFAULT NULL,
  `estado_civil` enum('Soltero','Divorciado','Casado','Viudo') DEFAULT NULL,
  `Id_domicilio_persona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos_personales`
--

INSERT INTO `datos_personales` (`Id_datos_personales`, `nombre`, `apellido_materno`, `apellido_paterno`, `numero`, `genero`, `edad`, `nacionalidad`, `estado_civil`, `Id_domicilio_persona`) VALUES
(4, 'Joel Nahim', 'Perez', 'Rivera ', '9831369593', 'M', 19, 'Mexicana', 'Soltero', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentacion`
--

CREATE TABLE IF NOT EXISTS `documentacion` (
`Id_documentacion` int(11) NOT NULL,
  `curp` tinyint(1) DEFAULT NULL,
  `afore` tinyint(1) DEFAULT NULL,
  `rfc` tinyint(1) DEFAULT NULL,
  `seguro_social` tinyint(1) DEFAULT NULL,
  `cartilla_militar` tinyint(1) DEFAULT NULL,
  `pasaporte` tinyint(1) DEFAULT NULL,
  `extranjero_documento` varchar(45) DEFAULT NULL,
  `licencia` tinyint(1) DEFAULT NULL,
  `clase_numero_licencia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentacion`
--

INSERT INTO `documentacion` (`Id_documentacion`, `curp`, `afore`, `rfc`, `seguro_social`, `cartilla_militar`, `pasaporte`, `extranjero_documento`, `licencia`, `clase_numero_licencia`) VALUES
(4, 0, 0, 0, 0, 0, 0, '0', 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos_extra`
--

CREATE TABLE IF NOT EXISTS `documentos_extra` (
  `Id_documento_extra` int(11) NOT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `Id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_empresa`
--

CREATE TABLE IF NOT EXISTS `domicilio_empresa` (
`Id_domicilio_empresa` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilio_empresa`
--

INSERT INTO `domicilio_empresa` (`Id_domicilio_empresa`, `estado`, `ciudad`, `direccion`) VALUES
(9, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(11, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(12, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(13, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(14, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(15, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(16, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(17, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(18, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(19, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Morelos'),
(20, 'Oaxaca', 'San Miguel Panixtlahuaca', 'Plutarco'),
(21, 'Oaxaca', 'San Miguel Panixtlahuaca', 'Plutarco'),
(22, 'Oaxaca', 'San Miguel Panixtlahuaca', 'Plutarco'),
(23, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Plutarco');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio_persona`
--

CREATE TABLE IF NOT EXISTS `domicilio_persona` (
`Id_domicilio_persona` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilio_persona`
--

INSERT INTO `domicilio_persona` (`Id_domicilio_persona`, `estado`, `ciudad`, `direccion`, `colonia`, `cp`) VALUES
(4, 'Quintana Roo', 'OthÃ³n P. Blanco', 'Plutarco Elias Calles #335', 'Chetumal', '77000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `economia`
--

CREATE TABLE IF NOT EXISTS `economia` (
`Id_economia` int(11) NOT NULL,
  `ingresos` tinyint(1) DEFAULT NULL,
  `conyuge_trabaja` tinyint(1) DEFAULT NULL,
  `casa_propia` tinyint(1) DEFAULT NULL,
  `renta` tinyint(1) DEFAULT NULL,
  `vehiculo_propio` enum('Automovil','Motocicleta','No') DEFAULT NULL,
  `deudas` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `economia`
--

INSERT INTO `economia` (`Id_economia`, `ingresos`, `conyuge_trabaja`, `casa_propia`, `renta`, `vehiculo_propio`, `deudas`) VALUES
(4, 0, 0, 0, 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE IF NOT EXISTS `empresa` (
`Id_empresa` int(11) NOT NULL,
  `logotipo` varchar(45) DEFAULT NULL,
  `Id_info_basica_e` int(11) NOT NULL,
  `timestamp` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Id_empresa`, `logotipo`, `Id_info_basica_e`, `timestamp`) VALUES
(9, NULL, 9, '2015-10-27 18:39:36'),
(10, NULL, 10, '2015-10-27 18:59:02'),
(11, NULL, 11, '2015-10-27 19:06:38'),
(12, NULL, 12, '2015-10-27 19:39:27'),
(13, NULL, 13, '2015-10-27 19:40:17'),
(14, NULL, 14, '2015-10-27 20:06:38'),
(15, NULL, 15, '2015-10-27 20:31:29'),
(16, NULL, 16, '2015-10-27 23:47:36'),
(17, NULL, 17, '2015-10-27 23:48:48'),
(18, NULL, 18, '2015-10-28 00:03:35'),
(19, NULL, 19, '2015-10-28 14:09:09'),
(20, NULL, 20, '2015-10-28 14:35:36'),
(21, NULL, 21, '2015-10-28 15:43:35'),
(22, NULL, 22, '2015-11-02 22:05:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE IF NOT EXISTS `estudios` (
`Id_estudio` int(11) NOT NULL,
  `nivel` enum('Primaria','Secundaria','Preparatoria','Universidad','Maestria','Posgrado','Doctorado') DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `anios` int(11) DEFAULT NULL,
  `Id_persona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`Id_estudio`, `nivel`, `nombre`, `titulo`, `anios`, `Id_persona`) VALUES
(1, 'Universidad', 'UPB', 'Ingenieria', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_basica_e`
--

CREATE TABLE IF NOT EXISTS `info_basica_e` (
`Id_info_basica_e` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `giro` varchar(100) DEFAULT NULL,
  `razon_social` varchar(100) DEFAULT NULL,
  `fundacion` date DEFAULT NULL,
  `Id_domicilio_empresa` int(11) NOT NULL,
  `Id_responsable` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `info_basica_e`
--

INSERT INTO `info_basica_e` (`Id_info_basica_e`, `nombre`, `numero`, `giro`, `razon_social`, `fundacion`, `Id_domicilio_empresa`, `Id_responsable`) VALUES
(9, 'Babu Te Bar', '983000000', 'Comida', 'Chidos', '2007-12-12', 9, 9),
(10, 'Babu Te Bar', '983000000', 'Comida', 'Chidos', '2007-12-12', 11, 11),
(11, 'mokis', '983000000', 'Comida', 'Chidos', '2007-12-12', 12, 12),
(12, 'mokis2', '983000000', 'Comida', 'Chidos', '2007-12-12', 13, 13),
(13, 'mokis3', '983000000', 'Comida', 'Chidos', '2007-12-12', 14, 14),
(14, 'Logitech', '983000000', 'Comida', 'Chidos', '2007-12-12', 15, 15),
(15, 'Logitech2', '983000000', 'Comida', 'Chidos', '2007-12-12', 16, 16),
(16, 'Windows', '983000000', 'Comida', 'Chidos', '2007-12-12', 17, 17),
(17, 'Windows1', '983000000', 'Comida', 'Chidos', '2007-12-12', 18, 18),
(18, 'Windows2', '983000000', 'Comida', 'Chidos', '2007-12-12', 19, 19),
(19, 'Prueba', '98000999888', 'Menos', 'Nose', '9231-09-22', 20, 20),
(20, 'Anastasia', '98000999888', 'Menos', 'Nose', '9231-09-22', 21, 21),
(21, 'Anastasia1', '98000999888', 'Menos', 'Nose', '9231-09-22', 22, 22),
(22, 'NUEVAEMPRESA', '9988000', 'siempre', 'algo', '0000-00-00', 23, 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefes`
--

CREATE TABLE IF NOT EXISTS `jefes` (
`Id_jefe` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `comentarios` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`Id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `Id_tipo_usuario` int(11) NOT NULL,
  `Id_empresa` int(11) DEFAULT NULL,
  `Id_persona` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`Id`, `username`, `password`, `correo`, `Id_tipo_usuario`, `Id_empresa`, `Id_persona`) VALUES
(10, 'babu', '37d1703157da260a648d24613032bc8f', 'babu@gmail.com', 1, 9, NULL),
(11, 'Uvipower', '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', 2, NULL, 1),
(12, 'babu1', '6e6aed39540f59f471cb79b5332c5e0a', 'babu1@gmail.com', 1, 10, NULL),
(13, 'mokis', '91b8e068b750dc701bd5c20086852e2f', 'mokis@gmail.com', 1, 11, NULL),
(14, 'mokis2', 'bd25f5cba0dd5fc9edda2bc2ce0ee34a', 'mokis2@gmail.com', 1, 12, NULL),
(15, 'mokis3', 'b95dfaefe6970b34d160b717a2f324dd', 'mokis3@gmail.com', 1, 13, NULL),
(16, 'logitech', 'e484c7843b4d1a4bc3c6c6851cb4ed40', 'logitech@gmail.com', 1, 14, NULL),
(17, 'logitech2', 'b4fdc322e2d98adcc2afaa0fef508eeb', 'logitech2@gmail.com', 1, 15, NULL),
(18, 'windows', '0f4137ed1502b5045d6083aa258b5c42', 'windows@gmail.com', 1, 16, NULL),
(19, 'windows1', 'e1862cfa94b36ed1308b7eaa172f273a', 'windows1@gmail.com', 1, 17, NULL),
(20, 'windows2', 'da918b6a9ca684c9055b7e91207869ed', 'windows2@gmail.com', 1, 18, NULL),
(21, 'prueba', 'c893bad68927b457dbed39460e6afd62', 'prueba@prueba', 1, 19, NULL),
(22, 'anastasia', 'fa17f85c91125ebe136de0a5fdd47951', 'anastasia@prueba', 1, 20, NULL),
(23, 'anastasia1', 'efc7858607f8c2da7c1a44572be9e08b', 'anastasia1@prueba', 1, 21, NULL),
(24, 'new_emp', 'acfcafefcecf0d3df701209461def746', 'new_emp@gmai.com', 1, 22, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE IF NOT EXISTS `notificaciones` (
`Id_notificacion` int(11) NOT NULL,
  `Id_empresa` int(11) NOT NULL,
  `Id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
`Id_persona` int(11) NOT NULL,
  `fotografia` varchar(45) DEFAULT NULL,
  `Id_documentacion` int(11) NOT NULL,
  `Id_datos_personales` int(11) NOT NULL,
  `Id_datos_generales` int(11) NOT NULL,
  `Id_economia` int(11) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`Id_persona`, `fotografia`, `Id_documentacion`, `Id_datos_personales`, `Id_datos_generales`, `Id_economia`, `timestamp`) VALUES
(1, '0', 4, 4, 4, 4, '2015-10-27 18:56:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE IF NOT EXISTS `referencias` (
`Id_referencia` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `parentesco` varchar(45) DEFAULT NULL,
  `Id_persona` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `referencias`
--

INSERT INTO `referencias` (`Id_referencia`, `nombre`, `direccion`, `numero`, `parentesco`, `Id_persona`) VALUES
(1, 'Ana', 'Tulum', '98312950394', 'Prometida', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `responsable`
--

CREATE TABLE IF NOT EXISTS `responsable` (
`Id_responsable` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `responsable`
--

INSERT INTO `responsable` (`Id_responsable`, `nombre`, `correo`, `numero`, `puesto`) VALUES
(9, 'Eazon', 'Eazon@gmail.com', '9831234567', 'Gerente'),
(11, 'Eazon', 'Eazon1@gmail.com', '9831234567', 'Gerente'),
(12, 'mokis', 'mokis12@gmail.com', '9831234567', 'Gerente'),
(13, 'mokis2', 'mokis122@gmail.com', '9831234567', 'Gerente'),
(14, 'mokis3', 'mokis3@gmail.com', '9831234567', 'Gerente'),
(15, 'logitech', 'logitech@gmail.com', '9831234567', 'JEFE'),
(16, 'logitech', 'logitech2@gmail.com', '9831234567', 'JEFE'),
(17, 'windows', 'windows@gmail.com', '9831234567', 'JEFE'),
(18, 'windows1', 'windows1@gmail.com', '9831234567', 'JEFE'),
(19, 'windows2', 'windows2@gmail.com', '9831234567', 'JEFE'),
(20, 'Jowel', 'jowel@gmailcom', '9809091', 'Achichinle'),
(21, 'anastasia', 'anastasia@gmailcom', '9809091', 'Achichinle'),
(22, 'anastasia1', 'anastasia1@gmailcom', '9809091', 'Achichinle'),
(23, 'fulano', 'fulansio@gmaisl.', '90100333', 'fulansio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE IF NOT EXISTS `tipo_usuario` (
`Id_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`Id_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'Empresa'),
(2, 'Persona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajos_anteriores`
--

CREATE TABLE IF NOT EXISTS `trabajos_anteriores` (
`Id_trabajo_anterior` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `anios` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `numero` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `sueldo` int(11) DEFAULT NULL,
  `motivo_separacion` varchar(240) DEFAULT NULL,
  `Id_jefe` int(11) NOT NULL,
  `Id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacantes`
--

CREATE TABLE IF NOT EXISTS `vacantes` (
`Id_vacante` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `puesto` varchar(45) DEFAULT NULL,
  `horario1` varchar(45) DEFAULT NULL,
  `horario2` varchar(45) DEFAULT NULL,
  `sueldo` int(11) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `timestamp` datetime NOT NULL,
  `Id_empresa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacantes`
--

INSERT INTO `vacantes` (`Id_vacante`, `titulo`, `puesto`, `horario1`, `horario2`, `sueldo`, `descripcion`, `estatus`, `timestamp`, `Id_empresa`) VALUES
(16, '1', '1', '00:12', '00:00', 9000, '0000prueba', 1, '2015-11-02 02:04:59', 9),
(17, '2', '2', '00:12', '00:00', 9000, '0000prueba', 1, '2015-11-02 02:05:05', 9),
(18, '3', '3', '00:12', '00:00', 9000, '0000prueba', 1, '2015-11-02 02:17:28', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
 ADD PRIMARY KEY (`Id_datos_generales`);

--
-- Indices de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
 ADD PRIMARY KEY (`Id_datos_personales`), ADD KEY `fk_datos_personales_domicilio_persona1_idx` (`Id_domicilio_persona`);

--
-- Indices de la tabla `documentacion`
--
ALTER TABLE `documentacion`
 ADD PRIMARY KEY (`Id_documentacion`);

--
-- Indices de la tabla `documentos_extra`
--
ALTER TABLE `documentos_extra`
 ADD PRIMARY KEY (`Id_documento_extra`), ADD KEY `fk_documentos_extra_persona1_idx` (`Id_persona`);

--
-- Indices de la tabla `domicilio_empresa`
--
ALTER TABLE `domicilio_empresa`
 ADD PRIMARY KEY (`Id_domicilio_empresa`);

--
-- Indices de la tabla `domicilio_persona`
--
ALTER TABLE `domicilio_persona`
 ADD PRIMARY KEY (`Id_domicilio_persona`);

--
-- Indices de la tabla `economia`
--
ALTER TABLE `economia`
 ADD PRIMARY KEY (`Id_economia`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
 ADD PRIMARY KEY (`Id_empresa`), ADD KEY `fk_empresa_info_basica_e1_idx` (`Id_info_basica_e`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
 ADD PRIMARY KEY (`Id_estudio`), ADD KEY `fk_estudios_persona1_idx` (`Id_persona`);

--
-- Indices de la tabla `info_basica_e`
--
ALTER TABLE `info_basica_e`
 ADD PRIMARY KEY (`Id_info_basica_e`), ADD KEY `fk_info_basica_e_domicilio_empresa1_idx` (`Id_domicilio_empresa`), ADD KEY `fk_info_basica_e_responsable1_idx` (`Id_responsable`);

--
-- Indices de la tabla `jefes`
--
ALTER TABLE `jefes`
 ADD PRIMARY KEY (`Id_jefe`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`Id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `correo_UNIQUE` (`correo`), ADD KEY `fk_login_tipo_usuario_idx` (`Id_tipo_usuario`), ADD KEY `fk_login_empresa1_idx` (`Id_empresa`), ADD KEY `fk_login_persona1_idx` (`Id_persona`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
 ADD PRIMARY KEY (`Id_notificacion`,`Id_empresa`,`Id_persona`), ADD KEY `fk_empresa_has_persona_persona1_idx` (`Id_persona`), ADD KEY `fk_empresa_has_persona_empresa1_idx` (`Id_empresa`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
 ADD PRIMARY KEY (`Id_persona`), ADD KEY `fk_persona_documentacion1_idx` (`Id_documentacion`), ADD KEY `fk_persona_datos_personales1_idx` (`Id_datos_personales`), ADD KEY `fk_persona_datos_generales1_idx` (`Id_datos_generales`), ADD KEY `fk_persona_economia1_idx` (`Id_economia`);

--
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
 ADD PRIMARY KEY (`Id_referencia`), ADD KEY `fk_referencias_persona1_idx` (`Id_persona`);

--
-- Indices de la tabla `responsable`
--
ALTER TABLE `responsable`
 ADD PRIMARY KEY (`Id_responsable`), ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
 ADD PRIMARY KEY (`Id_tipo_usuario`), ADD UNIQUE KEY `tipo_usuario` (`tipo_usuario`);

--
-- Indices de la tabla `trabajos_anteriores`
--
ALTER TABLE `trabajos_anteriores`
 ADD PRIMARY KEY (`Id_trabajo_anterior`), ADD KEY `fk_trabajos_anteriores_persona1_idx` (`Id_persona`), ADD KEY `fk_trabajos_anteriores_jefes1_idx` (`Id_jefe`);

--
-- Indices de la tabla `vacantes`
--
ALTER TABLE `vacantes`
 ADD PRIMARY KEY (`Id_vacante`), ADD KEY `fk_vacantes_empresa1_idx` (`Id_empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_generales`
--
ALTER TABLE `datos_generales`
MODIFY `Id_datos_generales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
MODIFY `Id_datos_personales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `documentacion`
--
ALTER TABLE `documentacion`
MODIFY `Id_documentacion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `domicilio_empresa`
--
ALTER TABLE `domicilio_empresa`
MODIFY `Id_domicilio_empresa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `domicilio_persona`
--
ALTER TABLE `domicilio_persona`
MODIFY `Id_domicilio_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `economia`
--
ALTER TABLE `economia`
MODIFY `Id_economia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
MODIFY `Id_empresa` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
MODIFY `Id_estudio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `info_basica_e`
--
ALTER TABLE `info_basica_e`
MODIFY `Id_info_basica_e` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `jefes`
--
ALTER TABLE `jefes`
MODIFY `Id_jefe` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
MODIFY `Id_notificacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
MODIFY `Id_persona` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
MODIFY `Id_referencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `responsable`
--
ALTER TABLE `responsable`
MODIFY `Id_responsable` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
MODIFY `Id_tipo_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `trabajos_anteriores`
--
ALTER TABLE `trabajos_anteriores`
MODIFY `Id_trabajo_anterior` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `vacantes`
--
ALTER TABLE `vacantes`
MODIFY `Id_vacante` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos_personales`
--
ALTER TABLE `datos_personales`
ADD CONSTRAINT `fk_datos_personales_domicilio_persona1` FOREIGN KEY (`Id_domicilio_persona`) REFERENCES `domicilio_persona` (`Id_domicilio_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `documentos_extra`
--
ALTER TABLE `documentos_extra`
ADD CONSTRAINT `fk_documentos_extra_persona1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empresa`
--
ALTER TABLE `empresa`
ADD CONSTRAINT `fk_empresa_info_basica_e1` FOREIGN KEY (`Id_info_basica_e`) REFERENCES `info_basica_e` (`Id_info_basica_e`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `estudios`
--
ALTER TABLE `estudios`
ADD CONSTRAINT `fk_estudios_persona1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `info_basica_e`
--
ALTER TABLE `info_basica_e`
ADD CONSTRAINT `fk_info_basica_e_domicilio_empresa1` FOREIGN KEY (`Id_domicilio_empresa`) REFERENCES `domicilio_empresa` (`Id_domicilio_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_info_basica_e_responsable1` FOREIGN KEY (`Id_responsable`) REFERENCES `responsable` (`Id_responsable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
ADD CONSTRAINT `fk_login_empresa1` FOREIGN KEY (`Id_empresa`) REFERENCES `empresa` (`Id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_login_persona1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_login_tipo_usuario` FOREIGN KEY (`Id_tipo_usuario`) REFERENCES `tipo_usuario` (`Id_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
ADD CONSTRAINT `fk_empresa_has_persona_empresa1` FOREIGN KEY (`Id_empresa`) REFERENCES `empresa` (`Id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_empresa_has_persona_persona1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
ADD CONSTRAINT `fk_persona_datos_generales1` FOREIGN KEY (`Id_datos_generales`) REFERENCES `datos_generales` (`Id_datos_generales`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_persona_datos_personales1` FOREIGN KEY (`Id_datos_personales`) REFERENCES `datos_personales` (`Id_datos_personales`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_persona_documentacion1` FOREIGN KEY (`Id_documentacion`) REFERENCES `documentacion` (`Id_documentacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_persona_economia1` FOREIGN KEY (`Id_economia`) REFERENCES `economia` (`Id_economia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `referencias`
--
ALTER TABLE `referencias`
ADD CONSTRAINT `fk_referencias_persona1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `trabajos_anteriores`
--
ALTER TABLE `trabajos_anteriores`
ADD CONSTRAINT `fk_trabajos_anteriores_jefes1` FOREIGN KEY (`Id_jefe`) REFERENCES `jefes` (`Id_jefe`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `fk_trabajos_anteriores_persona1` FOREIGN KEY (`Id_persona`) REFERENCES `persona` (`Id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vacantes`
--
ALTER TABLE `vacantes`
ADD CONSTRAINT `fk_vacantes_empresa1` FOREIGN KEY (`Id_empresa`) REFERENCES `empresa` (`Id_empresa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
