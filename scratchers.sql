-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 31-05-2018 a las 19:01:45
-- Versión del servidor: 5.6.37
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `apitest`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scratchers`
--

CREATE TABLE IF NOT EXISTS `scratchers` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `description` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `size` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `scratchers`
--

INSERT INTO `scratchers` (`id`, `name`, `description`, `size`, `price`) VALUES
(6, 'Glitz and Gold', 'Gold handle and fancy emeralds', 'XL,L,M,S', '4343'),
(1, 'Laptop', 'ABC Trading Inc.', 'L', '1200'),
(9, 'Remera Negra', 'Remera Adidas', 'XL', '120'),
(8, 'Remera Rosa', 'Rever Pass', 'S', '123'),
(7, 'Remera Verde', 'Remera Raider', 'M', '10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `scratchers`
--
ALTER TABLE `scratchers`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `id_producto` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `scratchers`
--
ALTER TABLE `scratchers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
