-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2023 a las 21:59:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vaneshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `fk_user` int(11) NOT NULL,
  `fk_producto` int(11) NOT NULL,
  `cantida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `folio_detalle` int(11) NOT NULL,
  `fk_tiket` int(11) NOT NULL,
  `fk_prenda` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `importe` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`folio_detalle`, `fk_tiket`, `fk_prenda`, `cant`, `importe`) VALUES
(1, 1, 2, 1, 376.00),
(2, 1, 2, 1, 376.00),
(3, 1, 2, 1, 376.00),
(4, 1, 6, 1, 322.00),
(5, 1, 5, 1, 383.00),
(6, 1, 8, 1, 113.00),
(7, 1, 7, 1, 371.00),
(8, 1, 1, 1, 237.00),
(9, 1, 2, 1, 376.00),
(10, 1, 3, 1, 290.00),
(11, 2, 8, 1, 113.00),
(12, 2, 8, 1, 113.00),
(13, 2, 8, 1, 113.00),
(14, 2, 8, 1, 113.00),
(15, 2, 8, 1, 113.00),
(16, 2, 8, 1, 113.00),
(17, 2, 8, 1, 113.00),
(18, 2, 8, 1, 113.00),
(19, 2, 8, 1, 113.00),
(20, 2, 8, 1, 113.00),
(21, 2, 8, 1, 113.00),
(22, 2, 8, 1, 113.00),
(23, 2, 8, 1, 113.00),
(24, 2, 8, 1, 113.00),
(25, 3, 1, 1, 237.00),
(26, 3, 1, 1, 237.00),
(27, 3, 1, 1, 237.00),
(28, 3, 1, 1, 237.00),
(29, 3, 1, 1, 237.00),
(30, 4, 3, 1, 290.00),
(31, 4, 5, 1, 383.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prendas`
--

CREATE TABLE `prendas` (
  `folio_prenda` int(11) NOT NULL,
  `nombre_prenda` varchar(30) NOT NULL,
  `diseñador` varchar(60) NOT NULL,
  `price_ant` decimal(7,2) DEFAULT 0.00,
  `price` decimal(7,2) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prendas`
--

INSERT INTO `prendas` (`folio_prenda`, `nombre_prenda`, `diseñador`, `price_ant`, `price`, `cantidad`) VALUES
(1, 'VESTIDO ROJO CON PUNTOS', 'vanessa hernandez', 989.00, 237.00, 9),
(2, 'FALDA ROSA', 'vanessa hernandez', 597.00, 376.00, 2),
(3, 'CAMISA PARA HOMBRE', 'vanessa hernandez', 940.00, 290.00, 7),
(4, 'ROPA INTERIOR', 'vanessa hernandez', 942.00, 237.00, 7),
(5, 'OBEROL PARA NIÑO', 'vanessa hernandez', 695.00, 383.00, 1),
(6, 'BLUSA LARGA CON FALDA', 'vanessa hernandez', 884.00, 322.00, 9),
(7, 'FALDA CON CINTURON', 'vanessa hernandez', 833.00, 371.00, 9),
(8, 'ZAPATOS ROJOS', 'vanessa hernandez', 792.00, 113.00, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(90) NOT NULL,
  `mail` varchar(60) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `nombre`, `mail`, `phone`, `pass`) VALUES
(1, 'VANESA HERNANDEZ NIÑO', 'nhernandezvanee@gmail.com', '5515851835', 'vane123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `folio_venta` int(11) NOT NULL,
  `fecha` datetime DEFAULT current_timestamp(),
  `total` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`folio_venta`, `fecha`, `total`) VALUES
(1, '2023-11-07 17:12:08', 3220.00),
(2, '2023-11-07 18:40:35', 1582.00),
(3, '2023-11-07 18:43:05', 1185.00),
(4, '2023-12-10 14:53:31', 673.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`folio_detalle`),
  ADD KEY `fk_tiket` (`fk_tiket`),
  ADD KEY `fk_prenda` (`fk_prenda`);

--
-- Indices de la tabla `prendas`
--
ALTER TABLE `prendas`
  ADD PRIMARY KEY (`folio_prenda`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`folio_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `folio_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `prendas`
--
ALTER TABLE `prendas`
  MODIFY `folio_prenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `folio_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `detalle_venta_ibfk_1` FOREIGN KEY (`fk_tiket`) REFERENCES `ventas` (`folio_venta`),
  ADD CONSTRAINT `detalle_venta_ibfk_2` FOREIGN KEY (`fk_prenda`) REFERENCES `prendas` (`folio_prenda`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
