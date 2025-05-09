-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-05-2025 a las 01:34:11
-- Versión del servidor: 8.0.39-0ubuntu0.22.04.1
-- Versión de PHP: 8.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bogsings`
--
CREATE DATABASE IF NOT EXISTS `bogsings` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bogsings`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `idcomentarios` int NOT NULL,
  `asunto` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `comentario` varchar(150) DEFAULT NULL,
  `idusuario` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`idcomentarios`, `asunto`, `comentario`, `idusuario`) VALUES
(1, 'aaaaa', 'aaaaa', NULL),
(2, 'aaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `consultaPuntaje`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `consultaPuntaje` (
`nombreDelUsuario` varchar(45)
,`juego` varchar(45)
,`puntaje` int
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `idjuegos` int NOT NULL,
  `denominacion` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`idjuegos`, `denominacion`) VALUES
(1, 'concentrece'),
(2, 'ahorcado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista`
--

CREATE TABLE `lista` (
  `idlista` int NOT NULL,
  `nombre` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `lista`
--

INSERT INTO `lista` (`idlista`, `nombre`) VALUES
(1, 'colombia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras`
--

CREATE TABLE `palabras` (
  `idpalabras` int NOT NULL,
  `imagen` varchar(300) DEFAULT NULL,
  `idlista` int DEFAULT NULL,
  `palabra` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `palabras`
--

INSERT INTO `palabras` (`idpalabras`, `imagen`, `idlista`, `palabra`) VALUES
(1, 'imagenes/nariz.png', 1, 'nariz'),
(2, 'imagenes/hola.png', 1, 'hola'),
(3, 'imagenes/adios', 1, 'adios'),
(4, 'imagenes/porfavor.png', 1, 'por favor'),
(5, 'imagenes/comoestas.png', 1, '¿Como esta?');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practica`
--

CREATE TABLE `practica` (
  `idpractica` int NOT NULL,
  `fechaingreso` date DEFAULT NULL,
  `duracion` time DEFAULT NULL,
  `puntaje` int NOT NULL,
  `idusuario` int DEFAULT NULL,
  `idjuegos` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `practica`
--

INSERT INTO `practica` (`idpractica`, `fechaingreso`, `duracion`, `puntaje`, `idusuario`, `idjuegos`) VALUES
(1, '2024-11-01', '00:30:00', 500, 13, 1),
(2, '2024-10-31', '00:15:00', 1000, 15, 1),
(3, '2024-10-23', '00:05:00', 200, 14, 1),
(4, '2024-10-15', '00:05:00', 800, 13, 2),
(5, '2024-09-25', '01:00:00', 100, 16, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp`
--

CREATE TABLE `temp` (
  `idtemp` int NOT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `idUsuario` int DEFAULT NULL,
  `comentario` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`idtemp`, `usuario`, `fecha`, `idUsuario`, `comentario`) VALUES
(0, 'root@localhost', '2024-05-05 23:49:11', 4, 'Se modifico clave');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contrasena` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `telefono` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`) VALUES
(13, 'Sergio', 'Lopez', 'gabriel1@hotmail.com', '$2y$10$oQrpsOFgx0It0omOefZGZ.RXW6euv0rnkPjR6HrqrRolOve6eHldG', '3212132137'),
(14, 'Maria', 'Rodriguez', 'maria@hotmail.com', '$2y$10$xV.Px.Z7qdSO7ugI90Mbn.48q6uEYx49Z/3FjD/4JWo4RAdSU4idG', '3215476854'),
(15, 'Mariana', 'Lozano', 'mariana@hotmail.com', '$2y$10$U3o5FmFumEneKJj5Iufzje7bKzuBceqJ8/kEk3on8lR6ld4OmqvsG', '3215476852'),
(16, 'Juan', 'Sanchez', 'juan@hotmail.com', '$2y$10$qdervinAeTKxJvtFORUjCuRknCxtszMS2jc6mLheEHVpcqb9gvUx.', '3215476856'),
(22, 'Daniel', 'Prado', 'Daniel.pverano@gmail.com', '$2y$10$ypXWjhy4hPa49rOecMzrXuNEKh6Cg9R8bdccOEyHQSaE2vrbU90Jq', '3203987623'),
(23, 'a', 'a', 'a@hotmail.com', '$2y$10$1/GX/gj0fWeaOt04XECVle2.dM5TQbHVwm6cwt4JTB7KOd1/gwpNy', 'a');

--
-- Disparadores `usuario`
--
DELIMITER $$
CREATE TRIGGER `actualizarClave` BEFORE UPDATE ON `usuario` FOR EACH ROW begin
	insert into temp(usuario,fecha,idusuario,Comentario)
    values(user(),now(),OLD.idusuario,"Se modifico clave");
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura para la vista `consultaPuntaje`
--
DROP TABLE IF EXISTS `consultaPuntaje`;

CREATE ALGORITHM=UNDEFINED DEFINER=`admin`@`%` SQL SECURITY DEFINER VIEW `consultaPuntaje`  AS SELECT `usuario`.`nombre` AS `nombreDelUsuario`, `juegos`.`denominacion` AS `juego`, `practica`.`puntaje` AS `puntaje` FROM ((`usuario` join `practica` on((`usuario`.`idusuario` = `practica`.`idusuario`))) join `juegos` on((`practica`.`idjuegos` = `juegos`.`idjuegos`))) WHERE ((`juegos`.`idjuegos` = 1) AND (`practica`.`puntaje` > 600)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`idcomentarios`),
  ADD KEY `idusuario` (`idusuario`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`idjuegos`);

--
-- Indices de la tabla `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`idlista`);

--
-- Indices de la tabla `palabras`
--
ALTER TABLE `palabras`
  ADD PRIMARY KEY (`idpalabras`),
  ADD KEY `idlista` (`idlista`);

--
-- Indices de la tabla `practica`
--
ALTER TABLE `practica`
  ADD PRIMARY KEY (`idpractica`),
  ADD KEY `fkusuarioPractica_idx` (`idusuario`),
  ADD KEY `fkjuegopractica_idx` (`idjuegos`);

--
-- Indices de la tabla `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`idtemp`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `idcomentarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `practica`
--
ALTER TABLE `practica`
  MODIFY `idpractica` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `palabras`
--
ALTER TABLE `palabras`
  ADD CONSTRAINT `palabras_ibfk_1` FOREIGN KEY (`idlista`) REFERENCES `lista` (`idlista`);

--
-- Filtros para la tabla `practica`
--
ALTER TABLE `practica`
  ADD CONSTRAINT `fkjuegopractica` FOREIGN KEY (`idjuegos`) REFERENCES `juegos` (`idjuegos`),
  ADD CONSTRAINT `fkusuarioPractica` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
