-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 09:08:36
-- Versión del servidor: 8.0.27
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paggatosgraciosos`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertaUsuario` (IN `_nombre` VARCHAR(200), IN `_contraseña` VARCHAR(200))  insert into usuarios(nombre,contraseña) values(_nombre,_contraseña)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `muestraUsuario` ()  select * from usuarios$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contraseña`) VALUES
(1, 'ahorasi', '$2y$10$W1qyrtfEYAGfgNEzv8vN6O4O5UXHXujK6OiJNC5.N33jMFV1KXEqu'),
(2, 'ahorasi', '$2y$10$SjZqMZ2Scv/dFwHkSLsTsuTBTh3nM2WFxzyl81sijYOjIaXPIKvpK'),
(3, 'aya', '$2y$10$am6KDfM79KsbOaQEP68C5Oph03TMSxn7Dd9KkRpLXYr0p9hiG76xq'),
(4, 'ff', '$2y$10$obH9Fs2OwOppuLeCqonx9esVL.Yn/fCDTSFfpnKioMKa7GmkEE6Gi'),
(5, 'mm', '$2y$10$/m.uE8mmPXjClbj.T7jxueHAsR2NfWSHK4bZS/xhWZf7ZfCNGYkle'),
(6, 'hollow', '$2y$10$TxfHmtm3BffH3cbkbbTIJe.36L7UyOFV5Floh9W8XVlsibysYmyzW'),
(7, 'ax', '$2y$10$eQgcdDBtTUqm8STgCg/C7eVzkZe3ybMR4.argIf6lts43A5NXKE7a'),
(8, 'abc', '$2y$10$MBdpl5DcA.HBuuRC3vk05.Me7swGrVG7L68EErAvycWguPnghvAMS'),
(9, 'cba', '$2y$10$3IDvAJB8MKNQC260L82hAuRlRAoS9p3Om5QnTSBTLU6EVIkYFMBS6');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
