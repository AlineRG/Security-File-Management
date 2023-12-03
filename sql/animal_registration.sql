-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 03-12-2023 a las 02:59:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animal_registration`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `name`, `image`) VALUES
(1, 'elephant.jpg', './uploads/elephant.jpg'),
(2, 'ostrich.jpg', './uploads/ostrich.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zooanimals`
--

CREATE TABLE `zooanimals` (
  `IDanimal` int(11) NOT NULL,
  `animal` varchar(50) NOT NULL,
  `specie` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `arriveDate` date NOT NULL,
  `personName` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zooanimals`
--

INSERT INTO `zooanimals` (`IDanimal`, `animal`, `specie`, `age`, `arriveDate`, `personName`, `password`) VALUES
(22, 'Ostrich', 'Somali ostrich', 1, '2022-06-09', '', ''),
(23, 'Ostrich', 'Somali ostrich', 1, '2022-06-09', '', ''),
(24, 'Ostrich', 'Somali ostrich', 1, '2022-06-09', '', ''),
(26, 'Lion', 'Panthera leo', 0, '2020-06-20', '', ''),
(27, 'Rhinocero', 'Sumatran rhino', 4, '2019-02-01', '', ''),
(28, 'Penguins', 'Emperor penguin', 6, '2017-06-20', '', ''),
(29, 'Bear', 'Brown bear', 5, '2019-05-06', '', ''),
(30, 'cat', 'orange cat', 2, '2021-02-01', '', ''),
(31, 'Elephant', 'Asian Elephant', 9, '2023-11-07', '', ''),
(32, 'Elephant', 'Asian Elephant', 8, '2023-11-18', '', ''),
(33, 'ostrich', 'somali ostrich', 9, '2023-11-09', 'Aline', 'arg'),
(34, 'ostrich', 'somali ostrich', 5, '2023-11-03', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zooanimals`
--
ALTER TABLE `zooanimals`
  ADD PRIMARY KEY (`IDanimal`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `zooanimals`
--
ALTER TABLE `zooanimals`
  MODIFY `IDanimal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
