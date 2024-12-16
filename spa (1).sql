-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2024 a las 06:28:04
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

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
  `mensaje` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `auditorias`
--

INSERT INTO `auditorias` (`id`, `mensaje`, `fecha_creacion`) VALUES
(1, 'Un usuario ha sido registrado correo: dassss1lasgv0502@gmail.com', '2024-12-01 19:38:59'),
(2, 'Un usuario ha sido registrado correo: 11111111111111@gmail.com', '2024-12-04 05:31:33'),
(3, 'Un usuario ha sido registrado correo: dassssdasdsadass1lasgqweqweqwv0502@gmail.com', '2024-12-04 05:34:10'),
(4, 'Un usuario ha sido registrado correo: sadasdasds@gmail.com', '2024-12-04 05:36:51'),
(5, 'Un usuario ha sido registrado correo: sadasdddsssdasds@gmail.com', '2024-12-04 05:38:00'),
(6, 'Un usuario ha sido registrado correo: jose123@gmail.com rol: ClientePor Parte de: ', '2024-12-05 01:53:38'),
(7, 'Un usuario ha sido registrado correo: jose123@gmail.comcon el rol de Cliente Por Parte de:  Que es:  y el correo: ', '2024-12-05 02:01:06'),
(8, 'Un usuario ha sido registrado correo: jose1234@gmail.comcon el rol de Cliente Por Parte de:  Que es:  y el correo: ', '2024-12-05 02:03:43'),
(9, 'Un usuario ha sido registrado correo: jose12344@gmail.comcon el rol de Cliente Por Parte de:  Que es:  y el correo: ', '2024-12-05 02:12:30'),
(10, 'Un usuario ha sido registrado correo: jose12344@gmail.comcon el rol de Cliente Por Parte de: douglas Que es: empresa y el correo: douglasgv0502@gmail.com', '2024-12-05 02:14:53'),
(11, 'Un usuario ha sido registrado correo: jose1234455@gmail.comcon el rol de Cliente Por Parte de: douglas Que es: empresa y el correo: douglasgv0502@gmail.com', '2024-12-05 02:30:20'),
(12, 'Un usuario ha sido registrado correo: josqwee1234455@gmail.comcon el rol de Peluqero Por Parte de: douglas Que es: empresa y el correo: douglasgv0502@gmail.com', '2024-12-05 03:04:16'),
(13, 'Un usuario ha sido actualizado correo: doug11111lasgv0502@gmail.comcon el rol de Cliente Por Parte de:  Que es:  y el correo: ', '2024-12-05 05:49:25'),
(14, 'Un usuario ha sido actualizado correo: doug11111lasgv0502@gmail.comcon el rol de Cliente Por Parte de:  Que es:  y el correo: ', '2024-12-05 05:52:41'),
(15, 'Un usuario ha sido actualizado correo: doug11111lasgv0502@gmail.comcon el rol de Cliente Por Parte de: douglas Que es: empresa y el correo: douglasgv0502@gmail.com', '2024-12-05 05:53:17'),
(16, 'Se registro el producto de la manera correcta en la base de datos. Registrado Por: douglas', '2024-12-06 17:20:47'),
(17, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Relajante con el precio de: 30con categoria de: manicurista', '2024-12-06 17:29:45'),
(18, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Relajante con el precio de: 30con categoria de: manicurista', '2024-12-06 17:31:42'),
(19, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Relajante con el precio de: 30con categoria de: manicurista', '2024-12-06 18:15:10'),
(20, 'Se actualizó el servicio de: Masaje Relajante de la manera correcta por: douglas', '2024-12-06 18:22:41'),
(21, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Relajante con el precio de: 30con categoria de: manicurista', '2024-12-06 18:23:36'),
(22, 'Se actualizó el servicio de: Masaje Relajante de la manera correcta por: douglas', '2024-12-06 18:23:55'),
(23, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Reductivo con el precio de: 40con categoria de: manicurista', '2024-12-06 22:03:32'),
(24, 'Se actualizó el servicio de: Masaje Reductivo de la manera correcta por: douglas', '2024-12-06 22:04:34'),
(25, 'Se actualizó el servicio de: Masaje Reductivo de la manera correcta por: douglas', '2024-12-06 22:04:39'),
(26, 'Un usuario ha sido registrado correo: jose@gmail.com', '2024-12-07 01:41:09'),
(27, 'Un usuario ha sido registrado correo: jose123@gmail.com', '2024-12-07 01:41:40'),
(28, 'Un usuario ha sido registrado correo: joze@gmail.com', '2024-12-07 01:41:59'),
(29, 'Un usuario ha sido registrado correo: jose@gmail.com', '2024-12-07 01:46:26'),
(30, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Reductivo con el precio de: 40con categoria de: masajista', '2024-12-07 03:51:31'),
(31, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Reductivos con el precio de: 50con categoria de: masajista', '2024-12-07 03:52:09'),
(32, 'Un usuario ha sido actualizado con el nombre de: josee', '2024-12-09 05:35:07'),
(33, 'Un usuario ha sido actualizado con el nombre de: josee', '2024-12-09 05:35:09'),
(34, 'Un usuario ha sido actualizado con el nombre de: joseeee', '2024-12-09 05:36:06'),
(35, 'Un usuario ha sido actualizado con el nombre de: joseeee', '2024-12-09 05:36:06'),
(36, 'Un usuario ha sido actualizado con el nombre de: joseeeeee', '2024-12-09 05:36:09'),
(37, 'Un usuario ha sido actualizado con el nombre de: joseeeeee', '2024-12-09 05:36:09'),
(38, 'Un usuario ha sido actualizado con el nombre de: joseeeeee', '2024-12-09 05:36:10'),
(39, 'Un usuario ha sido actualizado con el nombre de: josee', '2024-12-09 05:36:49'),
(40, 'Un usuario ha sido actualizado con el nombre de: qweqweqwe', '2024-12-09 05:36:57'),
(41, 'Un usuario ha sido actualizado con el nombre de: jose', '2024-12-09 05:37:04'),
(42, 'Un usuario ha sido actualizado correo: jose@gmail.comcon el rol de Cliente Por Parte de: douglas Que es: empresa y el correo: douglasgv0502@gmail.com', '2024-12-09 21:39:41'),
(43, 'Un usuario ha sido registrado correo: ', '2024-12-09 21:48:00'),
(44, 'Un usuario ha sido registrado correo: douglasprg0502@gmail.com', '2024-12-09 21:50:25'),
(45, 'Un usuario ha sido actualizado con el nombre de: jose', '2024-12-09 22:36:55'),
(46, 'Un usuario ha sido actualizado con el nombre de: jose', '2024-12-10 00:04:29'),
(47, 'Un usuario ha sido registrado correo: elimelechattale23@gmail.com', '2024-12-10 00:15:06'),
(48, 'Un usuario ha sido actualizado con el nombre de: Elimelech', '2024-12-10 00:16:21'),
(49, 'Se actualizó el servicio de: Masaje Relajante de la manera correcta por: douglas', '2024-12-10 00:18:05'),
(50, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: douglasServicio registrado: Masaje Reductivos con el precio de: 50con categoria de: masajista', '2024-12-10 00:18:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `mensaje` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` int(11) DEFAULT NULL,
  `nombre_producto` varchar(30) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_servicio` int(11) DEFAULT NULL,
  `feha_cita` date DEFAULT NULL,
  `hora_cita` varchar(25) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_actualizacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `forma_pago` varchar(25) DEFAULT NULL,
  `nombre_pago` varchar(25) DEFAULT NULL,
  `referencia` varchar(45) DEFAULT NULL,
  `imagen` text DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

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
  `fecha_actualizacion` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `services`
--

INSERT INTO `services` (`id`, `nombre`, `categoria`, `descripcion`, `precio`, `imagen`, `fecha_creacion`, `fecha_actualizacion`, `id_usuario`) VALUES
(5, 'Masaje Relajante', 'esticista', 'Masaje relajante', 30, '2024-12-06-02-23-36masajeRelajante.avif', '2024-12-06 18:23:36', '2024-12-10 00:18:05', NULL),
(7, 'Masaje Reductivo', 'masajista', 'Masaje Reductivo', 40, '2024-12-06-11-51-31reductivo.avif', '2024-12-07 03:51:31', '2024-12-07 03:51:31', NULL);

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
  `codigo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `contrasena`, `cedula`, `edad`, `telefono`, `rol`, `imagen`, `fecha_creacion`, `fecha_actualizacion`, `trabajo`, `activo`, `codigo`) VALUES
(28, 'douglas', 'Gonzalez', 'douglasgv0502@gmail.com', '$2y$10$25Y5lBO1u8UcAMseBAjwquDWrZnR5BSPeRsiciZ9BSnOTsYAAoSW2', 27284908, NULL, '04127122987', 'empresa', NULL, '2024-11-26 18:36:40', '2024-12-09 03:56:05', NULL, NULL, 662297),
(49, 'jose', 'ferrer', 'jose@gmail.com', '$2y$10$BrS36h8WHQzIWbn3UD7N5OnJ6MCan8V1Q86vmWKatsEt.sGdIH6Jq', 12345678, NULL, '04121234567', 'cliente', NULL, '2024-12-07 01:46:26', '2024-12-10 00:04:29', NULL, NULL, NULL),
(51, 'douglas', 'Gonzalez', 'douglasprg0502@gmail.com', '$2y$10$y./qPZz4MIjwDx76U7MMx.J3Cl1io6u4eauiM2DNkHPGWPjX/Q6ZS', 12145667, NULL, '04127122941', 'cliente', NULL, '2024-12-09 21:50:25', '2024-12-09 21:50:25', NULL, NULL, NULL),
(52, 'Elimelech', 'attal', 'elimelechattale23@gmail.com', '$2y$10$lhpHlhPJwlWkuddRwTwKB.1QWUNG6WZg9Og4N8kj2myTOBagi6/vq', 24525686, NULL, '5156565156', 'cliente', NULL, '2024-12-10 00:15:06', '2024-12-10 00:20:46', NULL, NULL, 463854);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auditorias`
--
ALTER TABLE `auditorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `notificacion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
