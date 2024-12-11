-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-06-2024 a las 20:31:50
-- Versión del servidor: 5.7.37
-- Versión de PHP: 8.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `masterinpets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `pkCarrito` int(11) NOT NULL,
  `fkCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`pkCarrito`, `fkCliente`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `pkCategoria` int(11) NOT NULL,
  `Categoria` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`pkCategoria`, `Categoria`, `Descripcion`) VALUES
(1, 'Alimentos', 'Alimentos adaptados a las diferentes necesidades de mascotas según su edad, tamaño y condiciones de salud.'),
(2, 'Medicamentos', 'Medicamentos para tratar diversas condiciones y enfermedades en mascotas.'),
(3, 'Accesorios', 'Accesorios útiles como collares, correas, camas y juguetes.'),
(4, 'Higiene', 'Productos para la higiene y el cuidado diario de las mascotas, incluyendo champús y productos de limpieza dental.'),
(5, 'Salud Preventiva', 'Suplementos y vitaminas para el mantenimiento de la salud preventiva de las mascotas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `pkCliente` int(11) NOT NULL,
  `fkUsuario` int(11) DEFAULT NULL,
  `cDNI` varchar(20) DEFAULT NULL,
  `cNombre` varchar(255) DEFAULT NULL,
  `cApellido` varchar(255) DEFAULT NULL,
  `cCorreo` varchar(255) DEFAULT NULL,
  `cTelefono` varchar(20) DEFAULT NULL,
  `cDireccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`pkCliente`, `fkUsuario`, `cDNI`, `cNombre`, `cApellido`, `cCorreo`, `cTelefono`, `cDireccion`) VALUES
(1, 2, '12345', 'Gustavo', 'Reategui', 'gustavo@gmail.com', '1231456', 'chorrillos av 123'),
(2, 3, '73050787', 'Nilton', 'Vera', 'veraalonso88@gmail.com', '923914213', 'Jr. Nazca 684 dpto. 1402'),
(3, 4, '1234567', 'Micaela', 'MuÃ±oz', 'micaespinoza410@gmail.com', '987654321', 'abcde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecarrito`
--

CREATE TABLE `detallecarrito` (
  `pkDetalleCarrito` int(11) NOT NULL,
  `fkCarrito` int(11) DEFAULT NULL,
  `fkProducto` int(11) DEFAULT NULL,
  `cCantidad` int(11) DEFAULT NULL,
  `cPrecio` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallecarrito`
--

INSERT INTO `detallecarrito` (`pkDetalleCarrito`, `fkCarrito`, `fkProducto`, `cCantidad`, `cPrecio`) VALUES
(12, 1, 1, 1, '25.50'),
(13, 1, 4, 1, '35.00'),
(14, 2, 2, 2, '44.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventa`
--

CREATE TABLE `detalleventa` (
  `pkDetalleVenta` int(11) NOT NULL,
  `fkVenta` int(11) DEFAULT NULL,
  `fkProducto` int(11) DEFAULT NULL,
  `cCantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalleventa`
--

INSERT INTO `detalleventa` (`pkDetalleVenta`, `fkVenta`, `fkProducto`, `cCantidad`) VALUES
(4, 4, 1, 3),
(5, 5, 1, 1),
(6, 5, 2, 1),
(7, 6, 1, 3),
(8, 7, 1, 3),
(9, 7, 9, 1),
(10, 8, 2, 2),
(11, 9, 13, 1),
(12, 10, 4, 2),
(13, 10, 6, 1),
(14, 11, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `pkPersonal` int(11) NOT NULL,
  `fkUsuario` int(11) NOT NULL,
  `cNombre` varchar(255) DEFAULT NULL,
  `cApellido` varchar(255) DEFAULT NULL,
  `cCorreo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`pkPersonal`, `fkUsuario`, `cNombre`, `cApellido`, `cCorreo`) VALUES
(1, 1, 'Nilton', 'Vera', 'nilton.vera@usil.pe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `pkProducto` int(11) NOT NULL,
  `fkCategoria` int(11) NOT NULL,
  `Producto` varchar(255) DEFAULT NULL,
  `Descripcion` text,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Stock` int(11) DEFAULT NULL,
  `Imagen` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`pkProducto`, `fkCategoria`, `Producto`, `Descripcion`, `Precio`, `Stock`, `Imagen`) VALUES
(1, 1, 'Alimento para perros adultos', 'Alimento seco rico en proteï¿½nas para perros adultos de todas las razas', '25.50', 93, 'OIP (1).jpg'),
(2, 1, 'Alimento para gatos adultos', 'Alimento completo y equilibrado para gatos adultos con sabor a salmÃ³n', '22.00', 146, 'OIP (2).jpg'),
(4, 2, 'Anti pulgas para gatos', 'Pipeta antipulgas de larga duraciï¿½n para gatos', '35.00', 78, 'R.jpg'),
(5, 3, 'Cama para perro pequeï¿½o', 'Cama suave y cï¿½moda para perros de tamaï¿½o pequeï¿½o', '30.00', 50, 'listado-de-cama-perro-pequeno-para-comprar-online.jpg'),
(6, 3, 'Rascador para gatos', 'Rascador de sisal con juguete interactivo para gatos', '20.00', 39, 'rascador-con-raton-30cm-1024x960.jpg'),
(7, 4, 'Shampoo para perros', 'Shampoo hipoalergï¿½nico para perros con piel sensible', '15.00', 90, 'sirdogshampootonalizadormarron.jpg'),
(8, 4, 'Toallitas hï¿½medas para mascotas', 'Toallitas para limpieza y cuidado de la piel y pelo de las mascotas', '10.00', 200, 'D_NQ_NP_973766-MLA45837748817_052021-F.jpg'),
(9, 5, 'Suplemento multivitamï¿½nico para perros', 'Suplementos en forma de tabletas para la salud integral de los perros', '18.00', 99, 'R (1).jpg'),
(10, 5, 'Vitaminas para gatos', 'Suplemento vitamï¿½nico para mejorar la salud y el pelaje de los gatos', '16.00', 120, 'X_apeticat2249.jpg'),
(13, 1, 'Canchita  salada', 'Canchita sabor a mantequilla', '20.00', 2, 'Captura de pantalla 2024-04-11 183217.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `pkRol` int(11) NOT NULL,
  `cRol` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`pkRol`, `cRol`) VALUES
(1, 'Administrador'),
(2, 'Personal'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `pkUsuario` int(11) NOT NULL,
  `fkRol` int(11) NOT NULL,
  `cNombre` varchar(255) DEFAULT NULL,
  `cCorreo` varchar(255) DEFAULT NULL,
  `cPassword` varchar(255) DEFAULT NULL,
  `cFoto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`pkUsuario`, `fkRol`, `cNombre`, `cCorreo`, `cPassword`, `cFoto`) VALUES
(1, 1, 'Nilton', 'nilton.vera@usil.pe', '4250254', 'b4a5950d09ec91d7d779ffe676a3d45c.jpg'),
(2, 3, 'Gustavo', 'gustavo@gmail.com', '$2y$10$fB/YkBVIUEUGF.zA3q533uBw4G4l7ERCtuB3VUaiTLkohcagxOxKm', NULL),
(3, 3, 'Nilton', 'veraalonso88@gmail.com', '$2y$10$2zwIP1QTPT5L1/WDVgx3cOP/CN2.1e1/PM/d2vRY2RYrHB1H2KDvW', NULL),
(4, 3, 'Micaela', 'micaespinoza410@gmail.com', '$2y$10$LBgizBnJW3qqhkxwHp0DoOynur6/UzUgBI8CK6yaYXIne0R/LwiRm', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `pkVenta` int(11) NOT NULL,
  `fFechaVenta` datetime DEFAULT NULL,
  `cTotal` decimal(10,2) DEFAULT NULL,
  `fkCliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`pkVenta`, `fFechaVenta`, `cTotal`, `fkCliente`) VALUES
(4, '2024-06-24 18:26:16', '76.50', 1),
(5, '2024-06-24 19:38:30', '47.50', 1),
(6, '2024-06-25 04:21:45', '76.50', 2),
(7, '2024-06-26 02:19:37', '94.50', 2),
(8, '2024-06-26 03:57:35', '44.00', 2),
(9, '2024-06-27 01:23:03', '20.00', 2),
(10, '2024-06-27 02:43:58', '90.00', 2),
(11, '2024-06-27 20:23:15', '22.00', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`pkCarrito`),
  ADD KEY `fkCliente` (`fkCliente`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`pkCategoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`pkCliente`),
  ADD KEY `fkUsuario` (`fkUsuario`);

--
-- Indices de la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD PRIMARY KEY (`pkDetalleCarrito`),
  ADD KEY `fkCarrito` (`fkCarrito`),
  ADD KEY `fkProducto` (`fkProducto`);

--
-- Indices de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD PRIMARY KEY (`pkDetalleVenta`),
  ADD KEY `fkVenta` (`fkVenta`),
  ADD KEY `fkProducto` (`fkProducto`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`pkPersonal`),
  ADD KEY `fkUsuario` (`fkUsuario`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`pkProducto`),
  ADD KEY `fkCategoria` (`fkCategoria`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`pkRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`pkUsuario`),
  ADD KEY `fkRol` (`fkRol`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`pkVenta`),
  ADD KEY `fkCliente` (`fkCliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `pkCarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `pkCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `pkCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  MODIFY `pkDetalleCarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  MODIFY `pkDetalleVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `pkPersonal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `pkProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `pkRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `pkUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `pkVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`pkCliente`);

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`fkUsuario`) REFERENCES `usuario` (`pkUsuario`);

--
-- Filtros para la tabla `detallecarrito`
--
ALTER TABLE `detallecarrito`
  ADD CONSTRAINT `detallecarrito_ibfk_1` FOREIGN KEY (`fkCarrito`) REFERENCES `carrito` (`pkCarrito`),
  ADD CONSTRAINT `detallecarrito_ibfk_2` FOREIGN KEY (`fkProducto`) REFERENCES `producto` (`pkProducto`);

--
-- Filtros para la tabla `detalleventa`
--
ALTER TABLE `detalleventa`
  ADD CONSTRAINT `detalleventa_ibfk_1` FOREIGN KEY (`fkVenta`) REFERENCES `venta` (`pkVenta`),
  ADD CONSTRAINT `detalleventa_ibfk_2` FOREIGN KEY (`fkProducto`) REFERENCES `producto` (`pkProducto`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`fkUsuario`) REFERENCES `usuario` (`pkUsuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`fkCategoria`) REFERENCES `categoria` (`pkCategoria`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`fkRol`) REFERENCES `rol` (`pkRol`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`fkCliente`) REFERENCES `cliente` (`pkCliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
