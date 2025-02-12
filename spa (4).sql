-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2025 a las 00:18:08
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
-- Base de datos: `spa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditorias`
--

CREATE TABLE `auditorias` (
  `id` int(11) NOT NULL,
  `mensaje` text DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `auditorias`
--

INSERT INTO `auditorias` (`id`, `mensaje`, `fecha_creacion`) VALUES
(1, 'Un usuario ha sido registrado correo: pedro@gmail.com', '2025-02-04 00:04:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_evento` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `textColor` varchar(45) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `cliente` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_evento`, `title`, `descripcion`, `color`, `textColor`, `start`, `end`, `categoria`, `cliente`) VALUES
(1, 'Masaje Relajante', 'masaje relajante', NULL, NULL, '2025-02-10 10:00:00', '2025-02-10 11:00:00', 'masajes', 'jose'),
(3, 'Masaje Relajante', 'masaje relajante', NULL, NULL, '2025-02-10 10:00:00', '2025-02-10 11:00:00', 'masajista', 'jose');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `id` int(11) NOT NULL,
  `id_usuario_fk` int(11) DEFAULT NULL,
  `mensaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`id`, `id_usuario_fk`, `mensaje`) VALUES
(2, 28, 'Tu reserva para el día: 2025-02-04 a las: 10:00 ha sido aceptada'),
(3, 28, 'Tu reserva para el día: 2025-02-04 a las: 10:00 ha sido aceptada'),
(4, 56, 'Tu reserva para el día: 2025-02-04 a las: 10:00 ha sido aceptada'),
(6, 28, 'Tu reserva para el día: 2025-02-04 a las: 10:00 ha sido aceptada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `fecha_cita` date DEFAULT NULL,
  `hora_cita` varchar(100) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `forma_pago` varchar(25) DEFAULT NULL,
  `nombre_pago` varchar(25) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `color` varchar(45) DEFAULT '#2324ff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_usuario`, `id_servicio`, `fecha_cita`, `hora_cita`, `fecha_creacion`, `fecha_actualizacion`, `forma_pago`, `nombre_pago`, `referencia`, `imagen`, `estado`, `title`, `start`, `end`, `color`) VALUES
(1, 58, 7, '2025-02-04', '08:00 - 09:00', '2025-02-12 14:41:39', '2025-02-12 14:41:39', 'transferencia', 'sdfsdf', 'sdfsdf', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-04', '2025-02-04', '#2324ff'),
(2, 58, 7, '2025-02-04', '08:00 - 09:00', '2025-02-12 14:41:39', '2025-02-12 14:41:39', 'transferencia', 'sdfsdf', 'sdfsdf', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-04', '2025-02-04', '#2324ff'),
(3, 58, 7, '2025-02-06', '17:00 - 18:00', '2025-02-12 14:42:29', '2025-02-12 14:42:29', 'tarjeta', 'asd', 'asd', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-06', '2025-02-06', '#2324ff'),
(4, 58, 7, '2025-02-05', '12:00 - 13:00', '2025-02-12 14:45:37', '2025-02-12 14:45:37', 'efectivo', 'fgh', 'fgh', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-05', '2025-02-05', '#2324ff'),
(5, 58, 7, '2025-02-05', '12:00 - 13:00', '2025-02-12 14:45:37', '2025-02-12 14:51:19', 'efectivo', 'fgh', 'fgh', NULL, 'aceptado', ' Masaje Reductivo', '2025-02-05', '2025-02-05', '#2324ff'),
(6, 58, 7, '2025-02-13', '08:00 - 09:00', '2025-02-12 14:46:22', '2025-02-12 21:26:14', 'efectivo', 'asd', 'asd', NULL, 'aceptado', ' Masaje Reductivo', '2025-02-13', '2025-02-13', '#2324ff'),
(7, 58, 7, '2025-02-13', '08:00 - 09:00', '2025-02-12 14:46:22', '2025-02-12 14:46:22', 'efectivo', 'asd', 'asd', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-13', '2025-02-13', '#2324ff'),
(8, 58, 7, '2025-02-11', '12:00 - 13:00', '2025-02-12 14:47:30', '2025-02-12 14:47:30', 'efectivo', 'asd', 'asd', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-11', '2025-02-11', '#2324ff'),
(9, 58, 7, '2025-02-11', '12:00 - 13:00', '2025-02-12 14:47:30', '2025-02-12 14:47:30', 'efectivo', 'asd', 'asd', NULL, 'pendiente', ' Masaje Reductivo', '2025-02-11', '2025-02-11', '#2324ff'),
(10, 58, 5, '2025-02-17', '12:00 - 13:00', '2025-02-12 14:47:50', '2025-02-12 14:47:50', 'efectivo', 'asd', 'asd', NULL, 'pendiente', ' Masaje Relajante', '2025-02-17', '2025-02-17', '#2324ff'),
(11, 58, 5, '2025-02-17', '12:00 - 13:00', '2025-02-12 14:47:50', '2025-02-12 14:47:50', 'efectivo', 'asd', 'asd', NULL, 'pendiente', ' Masaje Relajante', '2025-02-17', '2025-02-17', '#2324ff'),
(12, 58, 5, '2025-02-18', '08:00 - 09:00', '2025-02-12 14:49:36', '2025-02-12 14:52:27', 'efectivo', 'aaa', 'aaa', NULL, 'aceptado', ' Masaje Relajante', '2025-02-18', '2025-02-18', '#2324ff'),
(13, 58, 5, '2025-02-05', '11:00 - 12:00', '2025-02-12 21:52:31', '2025-02-12 21:52:31', 'efectivo', 'asdas', 'asdasd', NULL, 'pendiente', ' Masaje Relajante', '2025-02-05', '2025-02-05', '#2324ff'),
(14, 58, 11, '2025-02-04', '08:00 - 09:00', '2025-02-12 22:22:34', '2025-02-12 22:22:57', 'tarjeta', 'pedro', '1234', NULL, 'aceptado', ' Corte de cabello', '2025-02-04', '2025-02-04', '#2324ff'),
(15, 58, 13, '2025-02-05', '11:00 - 12:00', '2025-02-12 23:10:49', '2025-02-12 23:11:27', 'efectivo', 'asd', 'asd', NULL, 'aceptado', ' Semipermanente', '2025-02-05', '2025-02-05', '#2324ff');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `fecha_creacion` timestamp NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `nombre`, `categoria`, `descripcion`, `precio`, `imagen`, `fecha_creacion`, `fecha_actualizacion`) VALUES
(5, 'Masaje Relajante', 'masajista', 'Masaje relajante', 50, '2024-12-06-02-23-36masajeRelajante.avif', '2024-12-06 18:23:36', '2025-01-19 15:49:32'),
(7, 'Masaje Reductivo', 'masajista', 'Masaje Reductivo', 40, '2024-12-06-11-51-31reductivo.avif', '2024-12-07 03:51:31', '2024-12-07 03:51:31'),
(10, 'Masaje Descontracturante', 'masajista', 'masaje para alivar dolores ', 50, '2025-01-19-11-42-04masaje_descontracturante.avif', '2025-01-19 15:42:04', '2025-01-19 15:45:04'),
(11, 'Corte de cabello', 'peluquera', 'Cortes', 10, '2025-01-19-12-00-54corte cabello.jpg', '2025-01-19 16:00:54', '2025-01-19 16:00:54'),
(12, 'Peinados', 'peluquera', 'Peinados ', 50, '2025-01-19-12-02-34peinados.jpg', '2025-01-19 16:02:34', '2025-01-19 16:02:34'),
(13, 'Semipermanente', 'manicurista', 'Esmalte especial que se endurece con una lampara', 20, '2025-01-19-12-07-27manicura gel.avif', '2025-01-19 16:07:27', '2025-01-19 16:15:08'),
(14, 'Rubber', 'manicurista', 'Esmalte base semipermanente con textura densa', 25, '2025-01-19-12-13-02manicure rubber.jpg', '2025-01-19 16:13:02', '2025-01-19 16:13:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `cedula` int(11) NOT NULL,
  `edad` tinyint(4) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `rol` varchar(15) NOT NULL,
  `imagen` text DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `trabajo` varchar(45) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `contrasena`, `cedula`, `edad`, `telefono`, `rol`, `imagen`, `fecha_creacion`, `fecha_actualizacion`, `trabajo`, `activo`, `codigo`, `token`) VALUES
(28, 'Andrea', 'Avendaño', 'andreacarolinacastellano@gmail.com', '$2y$10$NbjbFph9q/TIpbq42jkeyuJxWf87jdhAfIMT.AGBDz8b1ggDXPkia', 27284908, NULL, '04127122987', 'empresa', NULL, '2024-11-26 18:36:40', '2025-02-04 00:02:47', NULL, NULL, 155670, NULL),
(56, 'Andres', 'Rodriguez', 'ar5689046@gmail.com', '$2y$10$fabFiOTseSyFWXsca4uxu.Wci.vuKNOvqAjfG7FZwYUlbxuzVJnW6', 1234568, NULL, '04130215485', 'cliente', NULL, '2025-01-19 15:33:28', '2025-01-19 15:37:31', NULL, NULL, 114435, NULL),
(58, 'pedro', 'perez', 'pedro@gmail.com', '$2y$10$lUnvmxI5s1aBhw/OCJrB3ux7sEebqN7VV6G1SVPJRsE40GW4pxgme', 23254587, NULL, '02125488759', 'cliente', NULL, '2025-02-04 00:04:45', '2025-02-04 00:04:45', NULL, NULL, NULL, NULL),
(59, 'Douglas', 'Gonzlaez', 'douglasgv0502@gmail.com', '$2y$10$NbjbFph9q/TIpbq42jkeyuJxWf87jdhAfIMT.AGBDz8b1ggDXPkia', 27284906, NULL, '04121235487', 'empresa', NULL, '2025-02-08 16:06:37', '2025-02-08 16:06:37', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario_fk`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_servicio` (`id_servicio`);

--
-- Indices de la tabla `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `cedula` (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `notificaciones_ibfk_1` FOREIGN KEY (`id_usuario_fk`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
