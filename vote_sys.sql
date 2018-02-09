-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2018 a las 02:02:57
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vote_sys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vote_table`
--

CREATE TABLE `vote_table` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `oa` varchar(200) NOT NULL,
  `ob` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `range_n` int(2) NOT NULL,
  `date_n` varchar(100) NOT NULL,
  `f_date` varchar(100) NOT NULL,
  `count_a` int(255) NOT NULL,
  `count_b` int(255) NOT NULL,
  `unique_ident` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vote_table`
--

INSERT INTO `vote_table` (`id`, `title`, `oa`, `ob`, `description`, `range_n`, `date_n`, `f_date`, `count_a`, `count_b`, `unique_ident`) VALUES
(3, 'Primera prueba', 'Opcion uno', 'Opcion dos', 'Esta es una primera prueba.', 3, '9-02-18', '12', 12, 0, '76ba7ff77e2d01ab4238'),
(4, 'Segunda prueba.', 'Prueba', 'Pruebota', 'Esta es una segunda prueba.', 5, '9-02-18', '14', 1, 0, '7e11464e303c95f66d75'),
(5, 'Segunda prueba.', 'Prueba', 'Pruebota', 'Esta es una segunda prueba.', 4, '9-02-18', '13', 0, 1, 'b833f9c2bc1874b4a699'),
(6, 'Nueva encuesta', 'Otra encuesta mÃ¡s.', 'Otra encuesta.', 'kjsdkljskljd', 5, '9-02-18', '14', 0, 0, '91d34fd878d8ea8f1916');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vote_table`
--
ALTER TABLE `vote_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vote_table`
--
ALTER TABLE `vote_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
