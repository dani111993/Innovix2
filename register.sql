-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-01-2024 a las 06:46:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `register`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(35) NOT NULL,
  `confirmaremail` varchar(35) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmarpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `confirmaremail`, `password`, `confirmarpassword`) VALUES
(1, 'dan_rock666@hotmail.com', 'dan_rock666@hotmail.com', '123', '123'),
(3, 'ppp@hotmail.com', 'ppp@hotmail.com', '123', '123'),
(4, 'ppp@hotmail.com', 'ppp@hotmail.com', '123', '123'),
(5, 'aaa@hotmail.com', 'aaa@hotmail.com', '123', '123'),
(6, 'aaa@hotmail.com', 'aaa@hotmail.com', '123', '123'),
(7, 'ita@gmail.com', 'ita@gmail.com', '123', '123'),
(8, 'daniel', '', '', ''),
(9, 'danielislas56387@gmail.com', 'danielislas56387@gmail.com', 'abc', 'abc'),
(10, 'pluma@gmail.com', 'pluma@gmail.com', '567', '567');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
