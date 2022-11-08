-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2022 a las 20:43:21
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `copscdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_esp` int(11) NOT NULL,
  `nom_esp` varchar(50) NOT NULL,
  `desc_esp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_esp`, `nom_esp`, `desc_esp`) VALUES
(1, 'Especialidad de prueba', 'Descripcion de prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int(11) NOT NULL,
  `hora_ent` varchar(12) NOT NULL,
  `hora_sal` varchar(12) NOT NULL,
  `dia` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id_horario`, `hora_ent`, `hora_sal`, `dia`) VALUES
(1, '8:00 am', '11:59 am', 'Lunes'),
(2, '1:00 pm', '5:00 pm', 'Lunes'),
(3, '8:00 am', '11:59 pm', 'Martes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_cedulam` varchar(12) NOT NULL,
  `nombrem` varchar(50) NOT NULL,
  `apellidom` varchar(50) NOT NULL,
  `direccionm` text NOT NULL,
  `correom` varchar(50) NOT NULL,
  `fec_nacm` date NOT NULL,
  `tel_movilm` varchar(20) NOT NULL,
  `tel_localm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_cedulam`, `nombrem`, `apellidom`, `direccionm`, `correom`, `fec_nacm`, `tel_movilm`, `tel_localm`) VALUES
('1234567', 'medico', 'ape medico', 'vivienda casa', 'correo@ejemplo.com', '1995-01-01', '0414-1234567', '0414-1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `med_esp`
--

CREATE TABLE `med_esp` (
  `id_esp_med` int(11) NOT NULL,
  `id_cedulam` varchar(12) NOT NULL,
  `id_esp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `med_horario`
--

CREATE TABLE `med_horario` (
  `id_medhorario` int(11) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `id_cedulam` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_cedulap` varchar(12) NOT NULL,
  `nombrep` varchar(40) NOT NULL,
  `apellidop` varchar(40) NOT NULL,
  `direccionp` text NOT NULL,
  `correop` varchar(65) NOT NULL,
  `fec_nacp` date NOT NULL,
  `telmovil` varchar(20) NOT NULL,
  `tellocal` varchar(20) NOT NULL,
  `motcita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_cedulap`, `nombrep`, `apellidop` , `direccionp` , `correop`, `fec_nacp`, `telmovil`, `tellocal`, `motcita`) VALUES
('25747905', 'Alejandro José', 'Rodríguez Hernándes' , 'Av. Andres Bello' , 'kingproingenius@gmail.com', '1995-02-21', '0414-5684670', '0251-1234567', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_cedulau` varchar(50) NOT NULL,
  `nombreu` varchar(50) NOT NULL,
  `apellidou` varchar(50) NOT NULL,
  `direccionu` text NOT NULL,
  `fec_nacu` date NOT NULL,
  `tel_movilu` varchar(20) NOT NULL,
  `tel_localu` varchar(20) NOT NULL,
  `nvl_acceso` varchar(20) NOT NULL,
  `nom_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_cedulau`, `nombreu`, `apellidou`, `direccionu`, `fec_nacu`, `tel_movilu`, `tel_localu`, `nvl_acceso`, `nom_user`) VALUES
('1234', 'Alejandro', 'Rodriguez', 'Av. Andrés Bello', '1995-02-21', '0414-7654321', '0251-7654321', 'Administrador', 'Admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_esp`);

--
-- Indices de la tabla `med_esp`
--
ALTER TABLE `med_esp`
  ADD PRIMARY KEY (`id_esp_med`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_cedulam`);

--
-- Indices de la tabla `med_horario`
--
ALTER TABLE `med_horario`
  ADD PRIMARY KEY (`id_medhorario`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_cedulap`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_cedulau`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
