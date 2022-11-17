-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 17-11-2022 a las 11:54:06
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
-- Base de datos: `bituca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Categorias`
--

CREATE TABLE `Categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Categorias`
--

INSERT INTO `Categorias` (`id`, `nombre`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_pru`
--

CREATE TABLE `cat_pru` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `pru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_pru`
--

INSERT INTO `cat_pru` (`id`, `cat`, `pru`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2),
(4, 3, 5),
(5, 3, 6),
(6, 3, 9),
(7, 4, 2),
(8, 4, 5),
(9, 4, 6),
(10, 4, 9),
(11, 5, 11),
(12, 5, 6),
(13, 5, 9),
(14, 5, 10),
(15, 6, 11),
(16, 6, 12),
(17, 3, 10),
(18, 4, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Centroed`
--

CREATE TABLE `Centroed` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Centroed`
--

INSERT INTO `Centroed` (`id`, `nombre`) VALUES
(1, 'IES Vega de Toranzo'),
(2, 'IES Ocho de Marzo'),
(3, 'IES Las Llamas'),
(4, 'IES La Albericia'),
(5, 'IES Garcilaso de la Vega'),
(6, 'IES Fuente Fresnedo'),
(7, 'IES Foramontanos'),
(8, 'IES Estelas de Cantabria'),
(9, 'IES Cantabria'),
(10, 'IES Bernardino Escalante'),
(11, 'CRA Asón'),
(12, 'CEO Principe de Asturias'),
(13, 'CEIP Valle de Reocín'),
(14, 'CEIP Rodríguez de Celis'),
(15, 'CEIP Pedro Velarde'),
(16, 'CEIP Malacoria'),
(17, 'CEIP Leonardo Torres Quevedo'),
(18, 'CEIP Las Dunas'),
(19, 'CEIP Gerardo Diego Cayón'),
(20, 'CEIP Fray Pablo de Colindres'),
(21, 'CEIP Dionisio García Barredo'),
(22, 'CEIP De Palacio'),
(23, 'CEIP Arturo Dúo'),
(24, 'CEIP Alto Ebro'),
(25, 'CEIP  Los Puentes'),
(26, 'CC Torrevelo-Peñalabra'),
(27, 'CC San José Astillero'),
(28, 'CC Sagrada Familia'),
(29, 'CC María Auxiliadora'),
(30, 'CC Kostka'),
(31, 'CC Cumbres'),
(32, 'CC Centro Social Bellavista'),
(33, 'CC Miguel Bravo'),
(34, 'CC Sagrado Corazón de Jesús');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Pruebas`
--

CREATE TABLE `Pruebas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `Pruebas`
--

INSERT INTO `Pruebas` (`id`, `nombre`) VALUES
(1, 'Actividades desenchufadas'),
(2, 'Programación por bloques'),
(5, 'Minecraft'),
(6, 'Death Squared'),
(9, 'Geoguessr'),
(10, 'Wikipedia Speedrun'),
(11, 'Diseño de app'),
(12, 'Programación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuaciones`
--

CREATE TABLE `puntuaciones` (
  `id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `prueba` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  `centro` int(11) NOT NULL,
  `puntuacion` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indices de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cat_pru`
--
ALTER TABLE `cat_pru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat` (`cat`),
  ADD KEY `pru` (`pru`);

--
-- Indices de la tabla `Centroed`
--
ALTER TABLE `Centroed`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Pruebas`
--
ALTER TABLE `Pruebas`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `puntuaciones`
--
ALTER TABLE `puntuaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria` (`categoria`),
  ADD KEY `centro` (`centro`),
  ADD KEY `prueba` (`prueba`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Categorias`
--
ALTER TABLE `Categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cat_pru`
--
ALTER TABLE `cat_pru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `Centroed`
--
ALTER TABLE `Centroed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `Pruebas`
--
ALTER TABLE `Pruebas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `puntuaciones`
--
ALTER TABLE `puntuaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_pru`
--
ALTER TABLE `cat_pru`
  ADD CONSTRAINT `cat_pru_ibfk_1` FOREIGN KEY (`pru`) REFERENCES `Pruebas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cat_pru_ibfk_2` FOREIGN KEY (`cat`) REFERENCES `Categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntuaciones`
--
ALTER TABLE `puntuaciones`
  ADD CONSTRAINT `puntuaciones_ibfk_1` FOREIGN KEY (`centro`) REFERENCES `Centroed` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `puntuaciones_ibfk_2` FOREIGN KEY (`categoria`) REFERENCES `Categorias` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `puntuaciones_ibfk_3` FOREIGN KEY (`prueba`) REFERENCES `Pruebas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
