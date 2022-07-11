-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2022 a las 17:43:47
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_clientes`
--
CREATE DATABASE IF NOT EXISTS `bd_clientes` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bd_clientes`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

DROP TABLE IF EXISTS `tb_clientes`;
CREATE TABLE `tb_clientes` (
  `idcliente` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`idcliente`, `nombre`, `direccion`, `telefono`, `email`) VALUES
(1, 'Wilson Moreno', '27 de Septiembre', 23255667, 'wilsona_q@hotmail.com'),
(2, 'Elias', '27 de Marzo', 23403451, 'www@gmail.com'),
(3, 'Wilson ', '27 de Septiembre', 23255667, 'wilsona_q@hotmail.com'),
(4, 'Moreno', '27 de Septiembre', 23255667, 'wilsona_q@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pagos`
--

DROP TABLE IF EXISTS `tb_pagos`;
CREATE TABLE `tb_pagos` (
  `idpago` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `valorpago` int(20) NOT NULL,
  `concepto` varchar(35) NOT NULL,
  `idpersona` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `tb_pagos`
--
ALTER TABLE `tb_pagos`
  ADD PRIMARY KEY (`idpago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `idcliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_pagos`
--
ALTER TABLE `tb_pagos`
  MODIFY `idpago` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
