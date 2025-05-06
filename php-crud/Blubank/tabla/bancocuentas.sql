-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-05-2025 a las 02:34:36
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blubank`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancocuentas`
--

CREATE TABLE `bancocuentas` (
  `Cuenta` int(10) NOT NULL,
  `Tipocuenta` text NOT NULL,
  `Saldo` int(10) NOT NULL,
  `Retiros` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bancocuentas`
--

INSERT INTO `bancocuentas` (`Cuenta`, `Tipocuenta`, `Saldo`, `Retiros`) VALUES
(1234567890, 'corriente', 40000, 30000),
(1472583690, 'corriente', 60000, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancocuentas`
--
ALTER TABLE `bancocuentas`
  ADD PRIMARY KEY (`Cuenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bancocuentas`
--
ALTER TABLE `bancocuentas`
  MODIFY `Cuenta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1472583691;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
