-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2018 a las 17:56:26
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diaro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `nombre`, `fecha`, `descripcion`, `tipo`) VALUES
(2, 'Dia del padre', '14  junio', 'CelebraciÃ³n del dÃ­a del padre', 'Extracurricular'),
(3, 'Semana cultural', '20 noviembre', 'Celebracion de la semana cultural, donde se realiz', 'Extracurricular'),
(4, 'Dia de la madre', '8 mayo', 'CelebraciÃ³n del dÃ­a de la madre ', 'extracurricular'),
(5, 'Semana santa', '09 de mayo', 'Misa', 'extracurricular'),
(7, 'Pruebas SupÃ©rate', '04 de Abril al 11 de Mayo', 'Actividad acadÃ©mica que proporciona informaciÃ³n ', 'Curricular'),
(8, 'Dia del ingles', '14 Mayo', 'Semana del ingles', 'extracurricular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_academico`
--

CREATE TABLE `estado_academico` (
  `id_estado` int(11) NOT NULL,
  `materias` varchar(50) NOT NULL,
  `nota` int(11) NOT NULL,
  `grado` varchar(50) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `estado_academico`
--

INSERT INTO `estado_academico` (`id_estado`, `materias`, `nota`, `grado`, `id_estudiante`) VALUES
(3, 'TecnologÃ­a e informÃ¡tica', 3, 'Decimo', 1),
(5, 'Matematicas', 4, 'Decimo', 2),
(6, 'Fisica', 5, 'Sexto', 3),
(7, 'ReligiÃ³n', 4, 'Octavo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL,
  `identificacion` int(50) NOT NULL,
  `nombre_est` varchar(50) NOT NULL,
  `nombre2_est` varchar(50) NOT NULL,
  `apellido_est` varchar(50) NOT NULL,
  `apellido2_est` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `id_padresflia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id_estudiante`, `identificacion`, `nombre_est`, `nombre2_est`, `apellido_est`, `apellido2_est`, `curso`, `id_padresflia`) VALUES
(1, 97081613, 'Katy', 'Elenea', 'Cantillo', 'Cervantes', 'Tercero', 3),
(2, 98031231, 'Maria', 'Rosa', 'Macea', 'Portillo', 'Cuarto', 2),
(3, 76312204, 'Carlos', 'Miguel', 'Galindo', 'Gonzales', 'Sexto', 4),
(4, 10312422, 'Maria', 'Alejandra ', 'Perez', 'Tenorio', 'Quinto', 2),
(5, 1066751922, 'Leidy', 'Andrea', 'Mendoza', 'Meza', 'Once', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_estado_academico`
--

CREATE TABLE `estudiante_estado_academico` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante_informacion`
--

CREATE TABLE `estudiante_informacion` (
  `id` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_informacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `informacion`
--

CREATE TABLE `informacion` (
  `id` int(11) NOT NULL,
  `actividades` varchar(50) NOT NULL,
  `llamados_aten` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `estado_aca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `informacion`
--

INSERT INTO `informacion` (`id`, `actividades`, `llamados_aten`, `horario`, `estado_aca`) VALUES
(1, 'Semana del ingles', 'Pelea en clase', 'Lunes 9 de abril del 2018', '3.5'),
(2, 'Dia del idioma', 'Llegada tarde a la clase', 'Martes 27 abril 2018', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamados_atencion`
--

CREATE TABLE `llamados_atencion` (
  `id` int(11) NOT NULL,
  `falta` varchar(50) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `grado` varchar(50) NOT NULL,
  `id_estudiante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `llamados_atencion`
--

INSERT INTO `llamados_atencion` (`id`, `falta`, `fecha`, `grado`, `id_estudiante`) VALUES
(16, 'Desorden en clase', '15', 'Decimo', 1),
(17, 'Pelea durante la clase', '21 de marzo', 'Decimo', 2),
(18, 'Llegadas tarde a clase', '13 abril', 'Octavo', 3),
(19, 'Incumplimiento de actividades', '17 mayo', 'Once', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(11) NOT NULL,
  `nombre_mate` varchar(50) NOT NULL,
  `docente_cargo` varchar(50) NOT NULL,
  `grado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id_materia`, `nombre_mate`, `docente_cargo`, `grado`) VALUES
(1, 'TecnologÃ­a e informÃ¡tica', 'Mirian Lobo', 'Decimo'),
(5, 'Matematica', 'Maira Saez', 'Noveno'),
(6, 'Ingles', 'Roquelina Elena Murillo Tapia', 'Once'),
(7, 'InglÃ©s', 'Xilema', 'segundo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padresflia`
--

CREATE TABLE `padresflia` (
  `id_padres` int(11) NOT NULL,
  `identificacion` int(50) NOT NULL,
  `nombre_1` varchar(50) NOT NULL,
  `nombre_2` varchar(50) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) NOT NULL,
  `num_cel` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `padresflia`
--

INSERT INTO `padresflia` (`id_padres`, `identificacion`, `nombre_1`, `nombre_2`, `apellido_1`, `apellido_2`, `num_cel`) VALUES
(2, 1064608224, 'Mirian ', 'Del carmen', 'Lobo', 'Pinto', 31262040),
(3, 34998389, 'Maira ', 'Luz ', 'SÃ¡ez', 'Murillo', 7842109),
(4, 1029391121, 'Rudy', 'Gabriel', 'Alean', 'Murillo', 7814804),
(5, 2147483647, 'Estefany', 'Milena', 'Arroyo', 'Durango', 2147483647),
(6, 76312409, 'Adrian', 'Alejandro', 'Murillo', 'Garcia', 31203003);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_profesores` int(11) NOT NULL,
  `identificacion` int(50) NOT NULL,
  `nombre_pro` varchar(50) NOT NULL,
  `nombre2_pro` varchar(50) NOT NULL,
  `apellido_pro` varchar(50) NOT NULL,
  `apellido2_pro` varchar(50) NOT NULL,
  `num_cel_pro` int(50) NOT NULL,
  `cargo_aca` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_profesores`, `identificacion`, `nombre_pro`, `nombre2_pro`, `apellido_pro`, `apellido2_pro`, `num_cel_pro`, `cargo_aca`) VALUES
(1, 76312408, 'Alejandro', 'Andres', 'Solarte', 'Saez', 7828719, 'Licenciado'),
(2, 78312182, 'Lucia', 'Eneria', 'Valencia', 'Lopez', 7812102, 'Licenciada en matematicas'),
(3, 76312666, 'Roquelina', 'Elena', 'Murillo', 'Tapia', 312543134, 'Lic. en informÃ¡tica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `nombre_usu` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `nombre_usu`, `contrasena`, `telefono`, `email`) VALUES
(1, 'sebastian', 'Solarte', 'Sebas_solarte', '12345', 7842109, 'sebastiansolarsaez@hotmail.com'),
(4, 'Aurora ', 'Humanez', 'Aurora_humanez', '54321', 320782, 'aurora@humanez.com'),
(6, 'Estefany ', 'Arroyo Durango', 'Tefany_Arroyo', '12345', 312630, 'tefyarroyo@hotmail.com'),
(7, 'Maria', 'Perez', 'Maria_perez', '12345', 2147483647, 'mariaalejandrapreztenorio@gmail.com'),
(8, 'jesus', 'martinez', 'jesmar', '12345', 322456799, 'j@gmail.com'),
(12, 'Mirian', 'Lobo', 'Miyo', '12345', 6543233, 'Miyo@hotmail.com'),
(15, 'Daniel', 'Solarte', 'Dani_solarte13', '12345', 6543455, 'daniel@hotmail.com'),
(16, 'Luisa', 'Mellado', 'Lumellado', '12345', 2147483647, 'Lumellado@hotmail.com'),
(17, 'Alexander', 'Toscano', 'Alexander_toscano', '12345', 312620222, 'kikret@gmail.com'),
(18, 'Dayanna', 'Cordero', 'dayanna_cordero', '54321', 33334567, 'dayanna_cordero@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_registrado`
--

CREATE TABLE `tipo_registrado` (
  `id_re` int(11) NOT NULL,
  `ntregistrado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_academico`
--
ALTER TABLE `estado_academico`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `FK_estudiante_padresflia` (`id_padresflia`);

--
-- Indices de la tabla `estudiante_estado_academico`
--
ALTER TABLE `estudiante_estado_academico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK1estudiante_estado_academico` (`id_estado`),
  ADD KEY `FK2estudiante_estado_academico` (`id_estudiante`);

--
-- Indices de la tabla `estudiante_informacion`
--
ALTER TABLE `estudiante_informacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_estudiante_informacion_estudiante` (`id_estudiante`),
  ADD KEY `FK_estudiante_informacion_actividades` (`id_informacion`);

--
-- Indices de la tabla `informacion`
--
ALTER TABLE `informacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `llamados_atencion`
--
ALTER TABLE `llamados_atencion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_llamados_atencion_estudiante` (`id_estudiante`);

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `padresflia`
--
ALTER TABLE `padresflia`
  ADD PRIMARY KEY (`id_padres`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_profesores`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_registrado`
--
ALTER TABLE `tipo_registrado`
  ADD PRIMARY KEY (`id_re`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `estado_academico`
--
ALTER TABLE `estado_academico`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id_estudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `estudiante_estado_academico`
--
ALTER TABLE `estudiante_estado_academico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `informacion`
--
ALTER TABLE `informacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `llamados_atencion`
--
ALTER TABLE `llamados_atencion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `padresflia`
--
ALTER TABLE `padresflia`
  MODIFY `id_padres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_profesores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT de la tabla `tipo_registrado`
--
ALTER TABLE `tipo_registrado`
  MODIFY `id_re` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD CONSTRAINT `FK_estudiante_padresflia` FOREIGN KEY (`id_padresflia`) REFERENCES `padresflia` (`id_padres`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante_estado_academico`
--
ALTER TABLE `estudiante_estado_academico`
  ADD CONSTRAINT `FK1estudiante_estado_academico` FOREIGN KEY (`id_estado`) REFERENCES `estado_academico` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK2estudiante_estado_academico` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiante_informacion`
--
ALTER TABLE `estudiante_informacion`
  ADD CONSTRAINT `FK_estudiante_informacion_actividades` FOREIGN KEY (`id_informacion`) REFERENCES `llamados_atencion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_estudiante_informacion_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `llamados_atencion`
--
ALTER TABLE `llamados_atencion`
  ADD CONSTRAINT `FK_llamados_atencion_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `estudiante` (`id_estudiante`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
