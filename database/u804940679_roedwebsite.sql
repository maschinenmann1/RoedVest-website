-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-06-2021 a las 11:09:09
-- Versión del servidor: 10.4.18-MariaDB-cll-lve
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- DATABASE: `u804940679_roedwebsite`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Admin`
--

CREATE TABLE `Admin` (
  `usuario` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contraseña` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `Admin`
--

INSERT INTO `Admin` (`usuario`, `contraseña`, `id`) VALUES
('RoedVestAdmin', '$2y$10$OLhPskGDMLNr6l8u4QdIJOPY/0YvFjOpwls16G/DRSMIwqz6v5yMa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesNormales`
--

CREATE TABLE `imagenesNormales` (
  `cod_imagen` int(11) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenesNormales`
--

INSERT INTO `imagenesNormales` (`cod_imagen`, `imagen`, `nombre`) VALUES
(10, 'G.jpg', NULL),
(11, 'H.jpg', NULL),
(12, 'A.jpg', NULL),
(13, 'B.jpg', NULL),
(14, 'F.jpg', NULL),
(15, 'E.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesSlider`
--

CREATE TABLE `imagenesSlider` (
  `cod_imagen` int(25) NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `imagenesSlider`
--

INSERT INTO `imagenesSlider` (`cod_imagen`, `imagen`, `nombre`) VALUES
(9, 'Webinar gratuito 2.jpg', NULL),
(12, 'Webinar gratuito 1.jpg', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagenesNormales`
--
ALTER TABLE `imagenesNormales`
  ADD PRIMARY KEY (`cod_imagen`);

--
-- Indices de la tabla `imagenesSlider`
--
ALTER TABLE `imagenesSlider`
  ADD PRIMARY KEY (`cod_imagen`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `imagenesNormales`
--
ALTER TABLE `imagenesNormales`
  MODIFY `cod_imagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `imagenesSlider`
--
ALTER TABLE `imagenesSlider`
  MODIFY `cod_imagen` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
