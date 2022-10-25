-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 00:21:20
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
-- Base de datos: `web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `news` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `first_surname` varchar(50) NOT NULL,
  `last_surname` varchar(50) NOT NULL,
  `type_ic` varchar(15) NOT NULL,
  `identitycard` varchar(15) NOT NULL,
  `education_level` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `type_cl` varchar(20) NOT NULL,
  `payment` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `news`, `first_name`, `middle_name`, `first_surname`, `last_surname`, `type_ic`, `identitycard`, `education_level`, `country`, `city`, `address`, `phone`, `type_cl`, `payment`) VALUES
('4343434343', '4343434343@mail.com', '5eb2140f1f73ee38cc784f7154a15325', 'Ninguna', '4343434343', '4343434343', '4343434343', '4343434343', 'Cédula', '4343434343', 'Desconocido', '4343434343', '4343434343', '4343434343', '4343434343', 'Regular', '1'),
('5555555555555555551', '555555555555555551555555555555@mail.com', '537b0c9c21b09b6c9ab337efc5b92f24', 'Ninguna', '5555555555555555551', '5555555555555555551', '5555555555555555551', '5555555555555555551', 'Cédula', '23123213213', 'Desconocido', '5555555555555555551', '5555555555555555551', '5555555555555555551', '5555555555555555551', 'Regular', '1'),
('555555555555555555555555555555', '555555555555555555555555555555@mail.com', 'aaf310d8621c527d7136d56e5b0307b1', 'Ninguna', '555555555555555555555555555555', '555555555555555555555555555555', '555555555555555555555555555555', '555555555555555555555555555555', 'Cédula', '555555555555555', 'Desconocido', '555555555555555555555555555555', '555555555555555555555555555555', '555555555555555555555555555555', '555555555555555555555555555555', 'Regular', '1'),
('admin', 'admin@mail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Ninguna', '', '', '', '', 'Sin especificar', '', 'Desconocido', '', '', '', '', '', ''),
('Contras', 'Contras@mil.com', '6092ddf86ac036172860c6a5e4d3dfef', 'Ninguna', 'Contras', 'Contras', 'Contras', 'Contras', 'Cédula', 'Contras', 'Desconocido', 'Contras', 'Contras', 'Contras', 'Contras', 'Regular', '1'),
('dasdasda', 'dasdasda@mail.com', 'c305fee4627bcb7b120ce1574938e5c3', 'Ninguna', 'dasdasda', 'dasdasda', 'dasdasda', 'dasdasda', 'Cédula', '41414', 'Secundaria', 'dasdasda', 'dasdasda', 'dasdasda', 'dasdasda', 'Regular', '1'),
('Emai', 'Emai@mail.com', 'f94c4789e3f53c1dce9677a1ba66a7e7', 'Ninguna', 'EmaiEmai', 'Emai', 'Emai', 'Emai', 'Cédula', 'Emai', 'Desconocido', 'Emai', 'Emai', 'Emai', 'Emai', 'Regular', '1'),
('ghfgh', 'ghfgh@gmail.com', '8b929ee0dd0a9a8889127faf97c97cbb', 'Ninguna', 'ghfgh', 'ghfgh', 'ghfgh', 'ghfgh', 'Cédula', 'ghfgh', 'Desconocido', 'ghfgh', 'ghfgh', 'ghfgh', 'ghfgh', 'Regular', '1'),
('Grea', 'Grea@mail.com', '7149edda335de263103e3e0a09d2599e', 'Ninguna', 'Grea', 'GreaGrea', 'Grea', 'Grea', 'Cédula', '523523', 'Priamria', 'GreaGrea', 'GreaGrea', 'GreaGrea', 'GreaGrea', 'Regular', '1'),
('jaime909', 'jaimejaramillo@gmail.com', 'f67993462799426d9f8223fb23aaa253', 'Xbox', 'Jaime', 'Adolfo', 'Jaramillo', 'Pérez', 'Cédula', '325543635462', 'Técnico', 'Colombia', 'Cali', 'Calle 78 #23 -12 B Sur', '+57 324 789 2345', 'VIP', '1'),
('jkñlkjfgñskljfglks', 'jkskljfglks@mail.com', '4f1b7d6daf8f9f6a035be20c8166af16', 'Ninguna', 'jkñlkjfgñskljfglks', 'jkñlkjfgñskljfglks', 'jkñlkjfgñskljfglks', 'jkñlkjfgñskljfglks', 'Cédula', 'jkñlkjfgñskljfg', 'Desconocido', 'jkñlkjfgñskljfglks', 'jkñlkjfgñskljfglks', 'jkñlkjfgñskljfglks', 'jkñlkjfgñskljfglks', 'Regular', '1'),
('juan', 'juan@mail.com', '5f276483189018cd669829a7f61adc78', 'Ninguna', 'juan', 'juan', 'juan', 'juan', 'Cédula', '432434243', 'Priamria', 'Italia', 'Cali', 'calle 432 #12 B', '+57 324 789 2345', 'Regular', '3'),
('kfhdjksdaf', 'kfhdjksdaf@mail.com', '94011139b717a46675d02f2342116d83', 'Ninguna', 'kfhdjksdaf', 'kfhdjksdaf', 'kfhdjksdaf', 'kfhdjksdaf', 'Cédula', 'kfhdjksdaf', 'Desconocido', 'kfhdjksdaf', 'kfhdjksdaf', 'kfhdjksdaf', 'kfhdjksdaf', 'Regular', '1'),
('Login', 'Login@mail.com', '91d87203955f45e4cdbb43db6ce3ccfc', 'Ninguna', 'LoginLoginLogin', 'Login', 'Login', 'Login', 'Cédula', 'Login', 'Desconocido', 'Login', 'Login', 'Login', 'Login', 'Regular', '1'),
('Nombre', 'Nombre@mail.com', '79257de28e0d25f2937e04fec0c154fe', 'Ninguna', 'Nombre', 'Nombre', 'Nombre', 'Nombre', 'Cédula', 'Nombre', 'Desconocido', 'Nombre', 'Nombre', 'Nombre', 'Nombre', 'Regular', '1'),
('opoipop', 'opoipop@gmail.com', 'd46ed0e6a5a7a3f0405b2ea49a40595f', 'Ninguna', 'opoipop', 'opoipop', 'opoipop', 'opoipop', 'Cédula', 'opoipop', 'Desconocido', 'opoipop', 'opoipop', 'opoipop', 'opoipop', 'Regular', '1'),
('pedro_32313123', 'pedro@gmail.com', '1250918ca39f939d1ad7f3a070f29cbe', 'play Station', 'Pedro', 'Antonio', 'Gomez', 'Alvarez', 'Cédula', '532523352352352', 'Media', 'China', 'Shangai', 'calle 432 #12 B', '52545252325325', 'Regular', '2'),
('Regis', 'Regis@mail.com', '282c52349816a25f81f366e25a862e17', 'Ninguna', 'Regis', 'Regis', 'Regis', 'Regis', 'Cédula', 'Regis', 'Desconocido', 'Regis', 'Regis', 'Regis', 'Regis', 'Regular', '1'),
('Registro@mail.com', 'Registro@mail.com', '56d38fae55f73763c3e0023b29f831a4', 'Ninguna', 'Registro@mail.com', 'Registro@mail.com', 'Registro@mail.com', 'Registro@mail.com', 'Cédula', 'Registro@mail.c', 'Desconocido', 'Registro@mail.com', 'Registro@mail.com', 'Registro@mail.com', 'Registro@mail.com', 'Regular', '1'),
('sdjlskdfhdkl', 'sdjlskdfhdkl@mail.com', 'ca2cff8f127b0b6ddafdf7292715ed77', 'Ninguna', 'sdjlskdfhdkl', 'sdjlskdfhdkl', 'sdjlskdfhdkl', 'sdjlskdfhdkl', 'Cédula', 'sdjlskdfhdkl', 'Desconocido', 'sdjlskdfhdkl', 'sdjlskdfhdkl', 'sdjlskdfhdkl', 'sdjlskdfhdkl', 'Regular', '1'),
('window.location.href = \"login.', 'zsadas@mail.com', '86a7291081ebdf30b3a2e72c96b74d06', 'Ninguna', 'window.location.href = \"login.php\";', 'window.location.href = \"login.php\";', 'window.location.href = \"login.php\";', 'window.location.href = \"login.php\";', 'Cédula', 'window.location', 'Desconocido', 'window.location.href = \"login.php\";', 'window.location.href = \"login.php\";', 'window.location.href = \"login.php\";', 'window.location.href = \"login.', 'Regular', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
