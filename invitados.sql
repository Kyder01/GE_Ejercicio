-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2021 a las 05:41:26
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ge_test`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

CREATE TABLE `invitados` (
  `tipo_id` varchar(21) NOT NULL,
  `id` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`tipo_id`, `id`, `nombre`, `telefono`, `correo`) VALUES
('Tarjeta de identidad', '10312365896', 'Carlos Guzman', 3126547852, 'Cguzman@mail.com'),
('Cédula de extranjería', 'A1023927633', 'Patricia Velandia', 3201254789, 'Pvelandia@mail.com'),
('Cédula de ciudadanía', 'B1013683694', 'David Restrepo', 3002325689, 'Drestrepo@mail.com'),
('Cédula de ciudadanía', 'F1023992', 'Maria Jose Gomez', 3204586156, 'Mgomez@mail.com'),
('Pasaporte', 'F5553232', 'Jhon Duran', 3182569632, 'Jduran@mail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
