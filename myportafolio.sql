-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2022 a las 22:31:20
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myportafolio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id` int(10) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `enlace` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id`, `imagen`, `titulo`, `descripcion`, `enlace`) VALUES
(145, '1663001680_fondo.png', 'EL 12 de septiembre', 'ya no quiero apartarme de la presencia de Dios, quien me rescato', ''),
(147, '1663001809_backend.svg', 'Dios es bueno', 'Cada dia la misericordia de Dios es nueva, como no adorarlo si por elm elvanto cada mañana', ''),
(153, '1663018998_programmer.svg', 'Mi consolador', 'Espiritu santo el santo', ''),
(154, '1663019037_dog.svg', 'Mi consolador', 'La gloria del Espiritu Santo', ''),
(155, '1663102603_love.jpg', 'Love', 'Amor del bueno', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
