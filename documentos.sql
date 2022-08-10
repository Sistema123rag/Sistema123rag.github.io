-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-08-2022 a las 03:20:19
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `documentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

DROP TABLE IF EXISTS `datos`;
CREATE TABLE IF NOT EXISTS `datos` (
  `codDIr` int(10) NOT NULL,
  `codAr` int(10) NOT NULL,
  `codTip` int(10) NOT NULL,
  `cite` int(10) NOT NULL AUTO_INCREMENT,
  `areaDep` varchar(100) NOT NULL,
  `descri` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` varchar(50) NOT NULL,
  PRIMARY KEY (`cite`),
  UNIQUE KEY `codDIr` (`codDIr`,`codAr`),
  UNIQUE KEY `areaDep` (`areaDep`),
  KEY `codcite` (`codTip`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`codDIr`, `codAr`, `codTip`, `cite`, `areaDep`, `descri`, `fecha`, `estado`) VALUES
(200, 210, 211, 1, 'RESPONSABLE DE ACTIVOS FIJOS Y ALMACENES', 'cosas', '2022-08-05 11:47:45', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

DROP TABLE IF EXISTS `documento`;
CREATE TABLE IF NOT EXISTS `documento` (
  `id_doc` int(11) NOT NULL AUTO_INCREMENT,
  `ci` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `ap_pat` varchar(25) NOT NULL,
  `ap_mat` varchar(25) NOT NULL,
  `estado` varchar(250) NOT NULL,
  `codigo` varchar(250) NOT NULL,
  `tamano` int(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `nombre_archivo` varchar(250) NOT NULL,
  PRIMARY KEY (`id_doc`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`id_doc`, `ci`, `nombre`, `ap_pat`, `ap_mat`, `estado`, `codigo`, `tamano`, `tipo`, `nombre_archivo`) VALUES
(1, 1, 'Luis', 'Peres', 'Casas', 'Tramite aprobado', '212.10.01.1', 124565, 'pdf', 'pdf'),
(2, 4578965, 'Lola', 'Bony', 'Bony', 'Tramite observado', '212.30.02.4578965', 124565, 'pdf', 'pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(60) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Contraseña` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `Nombres`, `Apellidos`, `Usuario`, `Contraseña`) VALUES
(2, 'Ruben', 'Alanoca Gutierrez', 'POSTULANTE', '123'),
(15, 'Josue', 'Barrancos', 'Ivan', '789'),
(19, '', '', 'CINTHIA', '456'),
(20, '', '', 'POSTULANTE', '789'),
(21, '', '', 'POSTULANTE', '123'),
(22, '', '', 'POSTULANTE', '123'),
(23, '', '', 'POSTULANTE', '123'),
(24, '', '', 'POSTULANTE', '123'),
(25, '', '', 'POSTULANTE', '123'),
(26, '', '', 'POSTULANTE', '123'),
(27, '', '', 'POSTULANTE', '123'),
(28, '', '', 'POSTULANTE', '123'),
(29, '', '', '', '123'),
(30, '', '', 'POSTULANTE', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodoc`
--

DROP TABLE IF EXISTS `tipodoc`;
CREATE TABLE IF NOT EXISTS `tipodoc` (
  `cite` int(10) NOT NULL,
  `TipoDoc` varchar(50) NOT NULL,
  PRIMARY KEY (`cite`),
  UNIQUE KEY `TipoDoc` (`TipoDoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodoc`
--

INSERT INTO `tipodoc` (`cite`, `TipoDoc`) VALUES
(213, 'AUXILIAR CONTABLE Y ARCHIVO'),
(212, 'ENCARGADO DE RECUADACIONES Y CAJA'),
(211, 'RESPONSABLE DE ACTIVOS FIJOS Y ALMACENES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `password`) VALUES
(1, 'POSTULANTE', '123'),
(2, 'CINTHIA', '456');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datos`
--
ALTER TABLE `datos`
  ADD CONSTRAINT `codcite` FOREIGN KEY (`codTip`) REFERENCES `tipodoc` (`cite`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `datos_ibfk_1` FOREIGN KEY (`areaDep`) REFERENCES `tipodoc` (`TipoDoc`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
