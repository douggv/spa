-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2025 a las 17:24:37
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
(1, 'Se actualizó el servicio de: Masaje Relajante de la manera correcta por: Andrea', '2025-01-19 15:49:32'),
(2, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: AndreaServicio registrado: Corte de cabello con el precio de: 10con categoria de: peluquera', '2025-01-19 16:00:54'),
(3, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: AndreaServicio registrado: Peinados con el precio de: 50con categoria de: peluquera', '2025-01-19 16:02:34'),
(4, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: AndreaServicio registrado: Manicura gel con el precio de: 20con categoria de: manicurista', '2025-01-19 16:07:27'),
(5, 'Se registro el servicio de la manera correcta en la base de datos. Registrado Por: AndreaServicio registrado: Rubber con el precio de: 25con categoria de: manicurista', '2025-01-19 16:13:02'),
(6, 'Se actualizó el servicio de: Semipermanente de la manera correcta por: Andrea', '2025-01-19 16:15:08'),
(7, 'Un usuario ha sido actualizado correo: josefa@gmail.comcon el rol de cliente Por Parte de: Andrea Que es: empresa y el correo: andreacarolinacastellano@gmail.com', '2025-01-19 16:16:00');

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
(5, 'Masaje Relajante', 'masajista', 'Masaje relajante', 50, '2024-12-06-02-23-36masajeRelajante.avif', '2024-12-06 18:23:36', '2025-01-19 15:49:32', NULL),
(7, 'Masaje Reductivo', 'masajista', 'Masaje Reductivo', 40, '2024-12-06-11-51-31reductivo.avif', '2024-12-07 03:51:31', '2024-12-07 03:51:31', NULL),
(10, 'Masaje Descontracturante', 'masajista', 'masaje para alivar dolores ', 50, '2025-01-19-11-42-04masaje_descontracturante.avif', '2025-01-19 15:42:04', '2025-01-19 15:45:04', NULL),
(11, 'Corte de cabello', 'peluquera', 'Cortes', 10, '2025-01-19-12-00-54corte cabello.jpg', '2025-01-19 16:00:54', '2025-01-19 16:00:54', NULL),
(12, 'Peinados', 'peluquera', 'Peinados ', 50, '2025-01-19-12-02-34peinados.jpg', '2025-01-19 16:02:34', '2025-01-19 16:02:34', NULL),
(13, 'Semipermanente', 'manicurista', 'Esmalte especial que se endurece con una lampara', 20, '2025-01-19-12-07-27manicura gel.avif', '2025-01-19 16:07:27', '2025-01-19 16:15:08', NULL),
(14, 'Rubber', 'manicurista', 'Esmalte base semipermanente con textura densa', 25, '2025-01-19-12-13-02manicure rubber.jpg', '2025-01-19 16:13:02', '2025-01-19 16:13:02', NULL);

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
(28, 'Andrea', 'avendaño', 'andreacarolinacastellano@gmail.com', '$2y$10$v3c7OeO/DUQzXjsMSd0BxuLVuPPTqckxkngSKjOTifWmnSBsWImoO', 27284908, NULL, '04127122987', 'empresa', NULL, '2024-11-26 18:36:40', '2025-01-19 15:44:01', NULL, NULL, 48624, NULL),
(49, 'josefa', 'fereira', 'josefa@gmail.com', '$2y$10$BrS36h8WHQzIWbn3UD7N5OnJ6MCan8V1Q86vmWKatsEt.sGdIH6Jq', 12345679, NULL, '04121234568', 'cliente', NULL, '2024-12-07 01:46:26', '2025-01-19 16:16:00', NULL, NULL, NULL, NULL),
(56, 'Andres', 'Rodriguez', 'ar5689046@gmail.com', '$2y$10$fabFiOTseSyFWXsca4uxu.Wci.vuKNOvqAjfG7FZwYUlbxuzVJnW6', 1234568, NULL, '04130215485', 'cliente', NULL, '2025-01-19 15:33:28', '2025-01-19 15:37:31', NULL, NULL, 114435, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
