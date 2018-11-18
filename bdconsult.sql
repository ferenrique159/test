-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2018 a las 22:07:56
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdconsult`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `idciudad` int(11) NOT NULL,
  `pais_idpais` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`idciudad`, `pais_idpais`, `descripcion`) VALUES
(1, 1, 'Paris'),
(2, 1, 'Marsella'),
(3, 2, 'Madrid'),
(4, 2, 'Barcelona'),
(5, 3, 'Caracas'),
(6, 3, 'Valencia'),
(7, 4, 'Rio de Janeiro'),
(8, 4, 'Sao Paulo'),
(9, 5, 'Buenos Aires'),
(10, 5, 'Ciudad de Cordoba'),
(11, 6, 'Ciudad de mexico'),
(12, 6, 'Monterrey'),
(13, 7, 'MIami'),
(14, 7, 'Orlando'),
(15, 8, 'Santiago de Chile'),
(16, 8, 'Concepcion'),
(17, 9, 'San miguelito'),
(18, 9, 'Ciudad de panama'),
(19, 10, 'Santo Domingo'),
(20, 10, 'Puerto Plata');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `cedula` int(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  `concesionario_idconcesionario` int(11) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`idcliente`, `nombre`, `apellido`, `cedula`, `email`, `telefono`, `concesionario_idconcesionario`, `password`) VALUES
(1, 'FERNANDO', 'ROMERO', 26063145, 'FERENRIQUE159@GMAIL.COM', '04143245450', 16, '123456'),
(2, 'JUAN', 'TORRES', 11705724, 'JART1104@GMAIL.COM', '04241384747', 9, '987654');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concesionario`
--

CREATE TABLE `concesionario` (
  `idconcesionario` int(11) NOT NULL,
  `razon_social` varchar(45) NOT NULL,
  `rif` varchar(45) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `pais_idpais` int(11) NOT NULL,
  `ciudad_idciudad` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `concesionario`
--

INSERT INTO `concesionario` (`idconcesionario`, `razon_social`, `rif`, `telefono`, `email`, `pais_idpais`, `ciudad_idciudad`, `descripcion`) VALUES
(1, 'Inversiones Romero C.A', 'J-123456', 2127864545, 'ferenrique159@gmail.com', 1, 1, 'Satisfaciendo tus necesidades'),
(2, 'Inversiones Romero C.A', 'J-123456', 2122341234, 'ferenrique159@gmail.com', 1, 2, 'Satisfaciendo tus necesidades'),
(3, 'Inversiones Romero C.A', 'J-123456', 2125467656, 'ferenrique159@gmail.com', 2, 3, 'Satisfaciendo tus necesidades'),
(4, 'Inversiones Romero C.A', 'J-123456', 2129877898, 'ferenrique159@gmail.com', 2, 4, 'Satisfaciendo tus necesidades'),
(5, 'Inversiones Romero C.A', 'J-123456', 2129878979, 'ferenrique159@gmail.com', 3, 5, 'Satisfaciendo tus necesidades'),
(6, 'Inversiones Romero C.A', 'J-123456', 2128766787, 'ferenrique159@gmail.com', 3, 6, 'Satisfaciendo tus necesidades'),
(7, 'Inversiones Romero C.A', 'J-123456', 2127655676, 'ferenrique159@gmail.com', 4, 7, 'Satisfaciendo tus necesidades'),
(8, 'Inversiones Romero C.A', 'J-123456', 2126544565, 'ferenrique159@gmail.com', 4, 8, 'Satisfaciendo tus necesidades'),
(9, 'Inversiones Romero C.A', 'J-123456', 2126546454, 'ferenrique159@gmail.com', 5, 9, 'Satisfaciendo tus necesidades'),
(10, 'Inversiones Romero C.A', 'J-123456', 2123245450, 'ferenrique159@gmail.com', 5, 10, 'Satisfaciendo tus necesidades'),
(11, 'Inversiones Romero C.A', 'J-123456', 2125678767, 'fernenque159@gmail.com', 6, 11, 'Satisfaciendo tus necesidades'),
(12, 'Inversions Romero C.A', 'J-123456', 2128765432, 'ferenrique159@gmail.com', 6, 12, 'satisfaciendo tus necesidades'),
(13, 'Inversiones Romero C.A', 'J-123456', 2121234567, 'ferenrique159@gmail.com', 7, 13, 'satisfaciendo tus necesidades'),
(14, 'Inversiones Romero C.A', 'L-123456', 2121234567, 'ferenrique159@gmail.com', 7, 14, 'Satisfaciendo tus necesidades'),
(15, 'Inversiones Romero C.A', 'J-123456', 2123245678, 'ferenrique159@gmail.com', 8, 15, 'Satisfaciendo tus necesidades'),
(16, 'Inversiones Romero C.A', 'J-123456', 2125431234, 'ferenrique159@gmail.com', 8, 16, 'Satisfaciendo tus necesidades'),
(17, 'Inversiones Romero C.A', 'J-123456', 2129876543, 'ferenrique159@gmail.com', 9, 17, 'Satisfaciendo tus necesidades'),
(18, 'Inversiones Romero C.A', 'J-123456', 2123456789, 'ferenrique159@gmail.com', 9, 18, 'Satisfaciendo tus necesidades'),
(19, 'Inversiones Romero C.A', 'J-123456', 2129871234, 'ferenrique159@gmail.com', 10, 19, 'Satisfaciendo tus necesidades'),
(20, 'Inversiones Romero C.A', 'J-123456', 2123456564, 'ferenrique159@gmail.com', 10, 20, 'Satisfaciendo tus necesidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `idpais` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`idpais`, `descripcion`) VALUES
(1, 'Francia'),
(2, 'España'),
(3, 'Venezuela'),
(4, 'Brasil'),
(5, 'Argentina'),
(6, 'Mexico'),
(7, 'EE.UU'),
(8, 'Chile'),
(9, 'Panama'),
(10, 'Republica Dominicana');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`idciudad`),
  ADD KEY `fk_ciudad_pais1_idx` (`pais_idpais`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`),
  ADD KEY `fk_usuario_concesionario1_idx` (`concesionario_idconcesionario`);

--
-- Indices de la tabla `concesionario`
--
ALTER TABLE `concesionario`
  ADD PRIMARY KEY (`idconcesionario`),
  ADD KEY `fk_concesionario_pais_idx` (`pais_idpais`),
  ADD KEY `fk_concesionario_ciudad1_idx` (`ciudad_idciudad`);

--
-- Indices de la tabla `pais`
--
ALTER TABLE `pais`
  ADD PRIMARY KEY (`idpais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `idciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `concesionario`
--
ALTER TABLE `concesionario`
  MODIFY `idconcesionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `pais`
--
ALTER TABLE `pais`
  MODIFY `idpais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `fk_ciudad_pais1` FOREIGN KEY (`pais_idpais`) REFERENCES `pais` (`idpais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_usuario_concesionario1` FOREIGN KEY (`concesionario_idconcesionario`) REFERENCES `concesionario` (`idconcesionario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `concesionario`
--
ALTER TABLE `concesionario`
  ADD CONSTRAINT `fk_concesionario_ciudad1` FOREIGN KEY (`ciudad_idciudad`) REFERENCES `ciudad` (`idciudad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_concesionario_pais` FOREIGN KEY (`pais_idpais`) REFERENCES `pais` (`idpais`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
