-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 09-08-2022 a las 22:59:29
-- Versión del servidor: 5.1.36
-- Versión de PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE IF NOT EXISTS `documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `ap_pat` varchar(500) DEFAULT NULL,
  `ap_mat` varchar(500) DEFAULT NULL,
  `ci` varchar(500) DEFAULT NULL,
  `cod_a` varchar(500) DEFAULT NULL,
  `cod_u` varchar(500) DEFAULT NULL,
  `estado` varchar(500) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcar la base de datos para la tabla `documento`
--

INSERT INTO `documento` (`id`, `nombre`, `ap_pat`, `ap_mat`, `ci`, `cod_a`, `cod_u`, `estado`, `url`, `type`) VALUES

(1, 'Roberto', 'Cazorla', 'Gomez', '7894563', '212.30.02', 'RCG.212.30.02', 'En tramite', 'archivo/pensum25pdf.pdf', NULL),
(2, 'Fernando', 'Fernandez', 'Fuentes', '102030', '212.40.02', 'FFF.212.40.02', 'En tramite', 'archivo/pensum25pdf.pdf', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_us` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `ap_pat` varchar(25) NOT NULL,
  `ap_mat` varchar(25) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_us`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_us`, `nombre`, `ap_pat`, `ap_mat`, `usuario`, `password`) VALUES
(1, 'Veronica', 'Suxo', 'Calle', 'veronicasc', '123'),
(2, 'Rene', 'Lopes', 'Calle', 'renelc', '147'),
(3, 'Luis', 'Ramires', 'Rammalo', 'luisrr', '123');
