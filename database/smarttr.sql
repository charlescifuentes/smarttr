-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2019 a las 05:58:39
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smarttr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuration`
--

CREATE TABLE `configuration` (
  `config_id` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_nit` varchar(20) NOT NULL,
  `company_address` varchar(50) NOT NULL,
  `company_phone` varchar(30) NOT NULL,
  `company_email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `configuration`
--

INSERT INTO `configuration` (`config_id`, `company_name`, `company_nit`, `company_address`, `company_phone`, `company_email`) VALUES
(1, 'Taller Time', '800.914.658-2', 'Carrera 25 # 31-49', '3142584569', 'tallertime@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_nit` int(11) NOT NULL,
  `customer_firstname` varchar(45) DEFAULT NULL,
  `customer_lastname` varchar(45) DEFAULT NULL,
  `customer_address` varchar(45) DEFAULT NULL,
  `customer_phone` varchar(45) DEFAULT NULL,
  `customer_email` varchar(45) DEFAULT NULL,
  `customer_city` varchar(45) DEFAULT NULL,
  `customer_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_nit`, `customer_firstname`, `customer_lastname`, `customer_address`, `customer_phone`, `customer_email`, `customer_city`, `customer_status`) VALUES
(1, 80793699, 'Charles Darwin', 'Cifuentes Arango', 'Calle 26a # 4-28', '3174015114', 'charlescifuentes@gmail.com', 'Tuluá', 1),
(3, 1016254569, 'Carolina', 'Sepulveda', 'Carrera 23 # 32-43', '3103556569', 'carolina@host.com', 'Cali', 1),
(4, 111222333, 'Pepito', 'Perez', 'Carrera 54 # 87-98', '3127678767', 'pepitoperez@hotmail.com', 'Bogotá', 1),
(5, 1116435456, 'Juana', 'de Arco', 'Carrera 56 # 34-43', '3103454656', 'juandearco@test.com', 'Cali', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int(11) NOT NULL,
  `rol_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol_name`) VALUES
(1, 'Administrador'),
(2, 'Técnico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'En Revisión'),
(2, 'En Reparación'),
(3, 'Finalizado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `technical_service`
--

CREATE TABLE `technical_service` (
  `ts_id` int(11) NOT NULL,
  `ts_date_start` date NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ts_watch_brand` varchar(45) DEFAULT NULL,
  `ts_watch_model` varchar(45) DEFAULT NULL,
  `ts_store_sender` varchar(45) DEFAULT NULL,
  `ts_issue_desc` text,
  `ts_diagnosis` text,
  `ts_observation` text,
  `ts_date_end` date DEFAULT NULL,
  `ts_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `technical_service`
--

INSERT INTO `technical_service` (`ts_id`, `ts_date_start`, `customer_id`, `user_id`, `ts_watch_brand`, `ts_watch_model`, `ts_store_sender`, `ts_issue_desc`, `ts_diagnosis`, `ts_observation`, `ts_date_end`, `ts_status`) VALUES
(1, '2019-07-14', 5, 2, 'Casio', 'BF-2332', 'Taller Time', 'Cualquier cosa', 'Por cualquier cosa', 'Ya se reparó', '2019-07-15', 1),
(3, '2019-07-15', 3, 2, 'Casio', 'BG4545', 'Taller Time', 'sddagadas asfgadas', 'asdsadsa asdsafgasga safgagqeqw', 'qweqwe asdsadsa', '2019-07-15', 2),
(4, '2019-07-14', 3, 2, 'Citizen', 'MN-2312', 'Joyas Humberto', 'Asdkjaslkdjksaljd', 'asdjsajd asdlsajdklsaj djsadas', 'asjdlsajd alksdjklasjdklsadj', '2019-07-15', 1),
(5, '2019-07-15', 4, 2, 'Rolex', '87812732-KJKLJ', 'Taller Cali', 'asdsa kasdkljsakldjklsa', 'sajdklsajdklsajdkl skldjsalkjdl', 'asjdklsajdlk asdlksajdklsajdlk', '2019-07-15', 2),
(6, '2019-07-15', 1, 2, 'Mulco', 'MHJ-123', 'Taller Time', 'asdñasdj jasjdlksajdksal', 'kdjsjlkasjdkljsakldj askjdlkasjd', 'sajdkjasd asdjlaskjdlkas', '2019-07-15', 1),
(7, '2019-07-15', 3, 3, 'Yess', 'YE-123', 'Joyas Humberto', 'asdas asdsadasasd asd', 'sadjsadhj hjkasdhjashdjkas', 'askjdjkasdhjkasdh asjdjksahdjkasd', '2019-07-15', 2),
(9, '2019-07-16', 5, 2, 'Mulco', 'TR-23123', 'Taller Time', 'Mica rayada', 'Hay que comprarla y cambiarla', 'Se le cambió la mica y se le dio una limpieza', '2019-07-16', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `user_firstname` varchar(45) DEFAULT NULL,
  `user_lastname` varchar(45) DEFAULT NULL,
  `user_email` varchar(45) DEFAULT NULL,
  `user_phone` varchar(45) DEFAULT NULL,
  `rol_id` int(11) DEFAULT '1',
  `user_status` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_phone`, `rol_id`, `user_status`) VALUES
(2, 'charles', '8cb2237d0679ca88db6464eac60da96345513964', 'Charles', 'Cifuentes', 'charles@test.com', '3174015113', 1, 1),
(3, 'naleja', '8cb2237d0679ca88db6464eac60da96345513964', 'Nadia Alejandra', 'Ospina', 'naleja9@gmail.com ', '3146822104', 1, 1),
(4, 'deiby', '8cb2237d0679ca88db6464eac60da96345513964', 'Deiby Johany', 'Morales Henao', 'djmorales3@misena.edu.co ', '3156578304', 2, 1),
(5, 'santiago', '88a28c2452d5e6b7294a5d9be5b63e42b4e01a05', 'Santiago', 'Cifuentes', 'santiago@test.com', '3198978765', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `configuration`
--
ALTER TABLE `configuration`
  ADD PRIMARY KEY (`config_id`);

--
-- Indices de la tabla `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_nit` (`customer_nit`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indices de la tabla `technical_service`
--
ALTER TABLE `technical_service`
  ADD PRIMARY KEY (`ts_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `ts_status_fk` (`ts_status`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `configuration`
--
ALTER TABLE `configuration`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `technical_service`
--
ALTER TABLE `technical_service`
  MODIFY `ts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `technical_service`
--
ALTER TABLE `technical_service`
  ADD CONSTRAINT `ts_customers_fk` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ts_status_fk` FOREIGN KEY (`ts_status`) REFERENCES `status` (`status_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ts_users_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_fk` FOREIGN KEY (`rol_id`) REFERENCES `roles` (`rol_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
