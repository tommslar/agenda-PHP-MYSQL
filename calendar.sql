-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2018 a las 17:57:29
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `eid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(120) NOT NULL,
  `start` varchar(30) NOT NULL,
  `end` varchar(30) DEFAULT NULL,
  `completo` tinyint(1) DEFAULT '0',
  `hora_i` varchar(30) NOT NULL,
  `hora_f` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`eid`, `uid`, `title`, `start`, `end`, `completo`, `hora_i`, `hora_f`) VALUES
(1, 1, 'event1', '2018-08-17', '2018-08-18', 0, '00:00:00', '00:00:00'),
(2, 1, 'evento2', '2018-08-02', '2018-08-11', 0, '5:00', '15:00'),
(4, 1, 'tit4', '2018-08-14', 'Invalid da', 0, '00:00:00', 'e'),
(8, 1, 'rir5', '2018-08-23', '2018-08-25', 0, '00:00:00', '00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `uid` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_n` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`uid`, `nombre`, `correo`, `password`, `fecha_n`) VALUES
(1, 'pepe luis', 'pepe@gmail.com', '$2y$10$IA7ma9E0iXEgxljGKDcIZeSDPfM4Z4X4Iz8R7KG3paSkzdhUrob8y', '20/10/90'),
(2, 'maria', 'maria@gmail.com', '$2y$10$xUojYUWCaTpAc5fbylbu/exe6Q36BMe228W.oJuCnQZZxgVAxzAkW', '10/12/91'),
(3, 'juano', 'juano@gmail.com', '$2y$10$K6/d8M.A3Gh8kVmKkSyUZOVoy5fr8BGtVbR9LV.YyF2YRYV72xrRC', '25/11/94');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`eid`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
