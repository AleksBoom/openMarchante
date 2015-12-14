-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-12-2015 a las 09:00:41
-- Versión del servidor: 5.5.46
-- Versión de PHP: 5.3.10-1ubuntu3.21

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `openMarchante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `usuario` varchar(12) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apPaterno` varchar(30) NOT NULL,
  `apMaterno` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`usuario`, `nombre`, `apPaterno`, `apMaterno`, `email`, `password`, `sexo`) VALUES
('AleksBoom', 'Carlos Alejandro', 'García', 'Jiménez', 'flacone_0585@hotmail.com', 'Juanson1', 'h'),
('brauuriel', 'Braulio', 'Medina', 'Sánchez', 'bruiliourielito97@outlook.com', 'braulio', 'h'),
('Perla', 'Perla', 'Godinez', '', 'contactoperlagodinez@gmail.com', 'Perla1234', 'M');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
