-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2022 a las 22:02:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `validar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `codDIr` int(10) NOT NULL,
  `codAr` int(10) NOT NULL,
  `codTip` int(10) NOT NULL,
  `cite` int(10) NOT NULL,
  `areaDep` varchar(100) NOT NULL,
  `descri` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`codDIr`, `codAr`, `codTip`, `cite`, `areaDep`, `descri`, `fecha`, `estado`) VALUES
(200, 210, 211, 1, 'RESPONSABLE DE ACTIVOS FIJOS Y ALMACENES', 'cosas', '2022-08-05 11:47:45', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id` int(50) NOT NULL,
  `Nombres` varchar(60) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

CREATE TABLE `tipodoc` (
  `cite` int(10) NOT NULL,
  `TipoDoc` varchar(50) NOT NULL
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

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `Usuario`, `password`) VALUES
(1, 'POSTULANTE', '123'),
(2, 'CINTHIA', '456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`cite`),
  ADD UNIQUE KEY `codDIr` (`codDIr`,`codAr`),
  ADD UNIQUE KEY `areaDep` (`areaDep`),
  ADD KEY `codcite` (`codTip`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipodoc`
--
ALTER TABLE `tipodoc`
  ADD PRIMARY KEY (`cite`),
  ADD UNIQUE KEY `TipoDoc` (`TipoDoc`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `cite` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
