-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2021 a las 08:45:44
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_brm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `id` int(10) NOT NULL,
  `n_lote` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`id`, `n_lote`) VALUES
(1, 'Lote 1'),
(2, 'Lote 2'),
(3, 'Lote 3'),
(4, 'Lote 4'),
(5, 'Lote 5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_p` varchar(100) NOT NULL,
  `lote_id` int(50) NOT NULL,
  `precio` int(50) NOT NULL,
  `fecha_vencimieto` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre_p`, `lote_id`, `precio`, `fecha_vencimieto`) VALUES
(102, '2', 1, 5000, '2021-07-15'),
(103, '2', 1, 5000, '2021-07-15'),
(105, '2', 1, 5000, '2021-07-15'),
(106, '2', 1, 5000, '2021-07-15'),
(107, '2', 1, 5000, '2021-07-15'),
(108, '2', 1, 5000, '2021-07-15'),
(109, '2', 1, 5000, '2021-07-15'),
(110, '2', 1, 5000, '2021-07-15'),
(111, '2', 1, 5000, '2021-07-15'),
(112, '2', 1, 5000, '2021-07-15'),
(113, '2', 1, 5000, '2021-07-15'),
(114, '2', 1, 5000, '2021-07-15'),
(115, '2', 1, 5000, '2021-07-15'),
(116, '2', 1, 5000, '2021-07-15'),
(117, '2', 1, 5000, '2021-07-15'),
(118, '2', 1, 5000, '2021-07-15'),
(119, '2', 1, 5000, '2021-07-15'),
(120, '2', 1, 5000, '2021-07-15'),
(121, '2', 1, 5000, '2021-07-15'),
(122, '2', 1, 5000, '2021-07-15'),
(123, '2', 1, 5000, '2021-07-15'),
(124, '2', 1, 5000, '2021-07-15'),
(125, '2', 1, 5000, '2021-07-15'),
(126, '2', 1, 5000, '2021-07-15'),
(127, '2', 1, 5000, '2021-07-15'),
(128, '2', 1, 5000, '2021-07-15'),
(129, '2', 1, 5000, '2021-07-15'),
(130, '2', 1, 5000, '2021-07-15'),
(131, '2', 1, 5000, '2021-07-15'),
(132, '2', 1, 5000, '2021-07-15'),
(133, '2', 1, 5000, '2021-07-15'),
(134, '2', 1, 5000, '2021-07-15'),
(135, '2', 1, 5000, '2021-07-15'),
(136, '2', 1, 5000, '2021-07-15'),
(137, '2', 1, 5000, '2021-07-15'),
(138, '2', 1, 5000, '2021-07-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_prods`
--

CREATE TABLE `tipo_prods` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_prods`
--

INSERT INTO `tipo_prods` (`id`, `nombre`, `foto`) VALUES
(1, 'wilson julian perez ramirez', 'C:\\xampp\\tmp\\php2C1A.tmp'),
(2, 'gaseosa', 'uploads/JFsPBRpS60enbIMTkb5YzN4RkzR0s4dzR9STL8vE.jpg'),
(3, 'Jugo', 'uploads/JFsPBRpS60enbIMTkb5YzN4RkzR0s4dzR9STL8vE.jpg'),
(4, 'galletas', 'uploads/1bWqNV4SmesbkruKTHa98ijz63CIu3afcxDJ5V12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_users`
--

CREATE TABLE `tipo_users` (
  `id` int(10) NOT NULL,
  `tipo_u` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_users`
--

INSERT INTO `tipo_users` (`id`, `tipo_u`) VALUES
(1, 'Cliente'),
(2, 'Proveedor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `tipo`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'julian', 3, 'jp@gmail.com', NULL, '$2y$10$0czt72yMA3kL5Ie.hSXL1.RBFStM8Jl.7Yxvucwb0QgWDCcUtbSw6', NULL, '2021-07-04 05:11:05', '2021-07-04 05:11:05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_prods`
--
ALTER TABLE `tipo_prods`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_users`
--
ALTER TABLE `tipo_users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lote`
--
ALTER TABLE `lote`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT de la tabla `tipo_prods`
--
ALTER TABLE `tipo_prods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_users`
--
ALTER TABLE `tipo_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
