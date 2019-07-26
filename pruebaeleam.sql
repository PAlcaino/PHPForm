-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2019 a las 18:10:20
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebaeleam`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `nombreResidente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `fechaDeNacimiento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefonoDeContaco` int(20) NOT NULL,
  `foto` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `nombrePaciente` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `rut` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(30) NOT NULL,
  `fechaNacimiento` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `prevision` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` int(30) NOT NULL,
  `medicos` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `quirurgicos` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `farmacos` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `alergias` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `tbq` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `oh` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `drogas` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sueno` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `alimentacion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `deposicion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `escolaridad` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `redApoyo` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `gradoDependencia` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `motivoEstadia` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
  `fechaEntrada` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `frecuenciaCardiaca` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `frecuenciaRespiratoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sato2` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `presionArterial` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mmhgpam` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `temperatura` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estadoNutricional` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `estadoConciencia` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `cabezaCuello` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `pulmonar` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `cardiologico` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `mamario` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `abdominal` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `extermidades` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `upp` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `otros` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `examenesLaboratorio` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
  `imagenes` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
  `otrosExamenes` varchar(700) COLLATE utf8_spanish_ci NOT NULL,
  `diagnosticoYProblemas` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `derivaciones` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `fechaProximoControl` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comentarios` varchar(1000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
