-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-03-2017 a las 14:31:46
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bibliotecario`
--

CREATE TABLE `bibliotecario` (
  `idbibliotecario` int(11) NOT NULL,
  `nombrebibliotecario` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultalibro`
--

CREATE TABLE `consultalibro` (
  `idConsultaLibro` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `Autor` varchar(45) DEFAULT NULL,
  `Genero` varchar(45) DEFAULT NULL,
  `Editorial` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `FichaDePrestamo_idFichaDePrestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleprestamo`
--

CREATE TABLE `detalleprestamo` (
  `Libro_idLibros` int(11) NOT NULL,
  `FichaDePrestamo_idFichaDePrestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoconservacion`
--

CREATE TABLE `estadoconservacion` (
  `idEstadoDeConservacion` int(11) NOT NULL,
  `Descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadoconservacion`
--

INSERT INTO `estadoconservacion` (`idEstadoDeConservacion`, `Descripcion`) VALUES
(1, 'Nuevo'),
(2, 'deteriorado'),
(3, 'faltante de hojas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoprestamo`
--

CREATE TABLE `estadoprestamo` (
  `idEstadoPrestamo` int(11) NOT NULL,
  `DescripciondelEstado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estadoprestamo`
--

INSERT INTO `estadoprestamo` (`idEstadoPrestamo`, `DescripciondelEstado`) VALUES
(1, 'alquilado'),
(2, 'perdido'),
(3, 'obsoleto'),
(4, 'devuelto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichadeprestamo`
--

CREATE TABLE `fichadeprestamo` (
  `idFichaDePrestamo` int(11) NOT NULL,
  `FechaDeEntrega` datetime DEFAULT NULL,
  `FechaDedevolucion` datetime DEFAULT NULL,
  `CantidadDelibros` int(11) DEFAULT NULL,
  `Bibliotecario_idbibliotecario` int(11) NOT NULL,
  `Usuario_idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `idLibros` int(11) NOT NULL,
  `Frase` varchar(35) DEFAULT NULL,
  `Titulo` varchar(45) DEFAULT NULL,
  `Autor` varchar(45) DEFAULT NULL,
  `Genero` varchar(45) DEFAULT NULL,
  `Editorial` varchar(45) DEFAULT NULL,
  `FechaPublicacion` int(11) DEFAULT NULL,
  `DescripcionFisica` varchar(45) DEFAULT NULL,
  `RegistroLibro` varchar(45) DEFAULT NULL,
  `EstadoConservacion_idEstadoDeConservacion` int(11) NOT NULL,
  `TiempoLimitePrestamo_idTiempoPrestamo` int(11) NOT NULL,
  `EstadoPrestamo_idEstadoPrestamo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`idLibros`, `Frase`, `Titulo`, `Autor`, `Genero`, `Editorial`, `FechaPublicacion`, `DescripcionFisica`, `RegistroLibro`, `EstadoConservacion_idEstadoDeConservacion`, `TiempoLimitePrestamo_idTiempoPrestamo`, `EstadoPrestamo_idEstadoPrestamo`) VALUES
(1, 'Cien años de soledad', 'Cien años de soledad', 'Gabriel Garcia Marquez', 'Novela', 'harper', 1967, 'nuevo', 'registrado', 1, 1, 4),
(2, 'El Diablo', 'El Diablo', 'Papaini', 'Ensayo', 'Porrua', 1953, 'nuevo', 'registrado', 3, 1, 1),
(3, 'Un hombre acabado', 'Un hombre acabado', 'Papaini', 'Ensayo', 'Porrua', 1953, 'nuevo', 'registrado', 3, 1, 1),
(4, 'el origen de las especies', 'El Origen de las especies', 'charles darwin', 'literatura cientifica', 'john murray', 1859, 'nuevo', 'registrado', 1, 1, 2),
(5, 'el origen de las especies', 'El Origen de las especies', NULL, 'literatura cientifica', 'john murray', 1859, 'nuevo', 'registrado', 1, 1, 2),
(6, 'el viaje del beagle', 'el viaje del beagle', 'charles darwin', 'biologia', 'john murray', 1890, 'faltante de hojas', 'registrado', 2, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `idLogin` int(11) NOT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) DEFAULT NULL,
  `Usuario_idUsuario` int(11) NOT NULL,
  `Bibliotecario_idbibliotecario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiempolimiteprestamo`
--

CREATE TABLE `tiempolimiteprestamo` (
  `idTiempoPrestamo` int(11) NOT NULL,
  `Dias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiempolimiteprestamo`
--

INSERT INTO `tiempolimiteprestamo` (`idTiempoPrestamo`, `Dias`) VALUES
(1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `Identificacion` int(11) DEFAULT NULL,
  `NombreUsuario` varchar(45) DEFAULT NULL,
  `ApellidoUsuario` varchar(45) DEFAULT NULL,
  `CorreoPersonal` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `Identificacion`, `NombreUsuario`, `ApellidoUsuario`, `CorreoPersonal`, `telefono`, `Direccion`, `Email`, `password`) VALUES
(1, 1012450823, 'DANIEL', 'BASTIDAS ORTIZ', 'danielyesid02@hotmail.com', '1234567', 'CR80IBIS#73F41SUR', 'dybastidas32@misena.edu.co', '123'),
(2, 1023014587, 'Duvan', 'robayo', 'duvan123@live.com', '7687929', '82-A sur', 'duvan123@live.com', '123'),
(3, 2147483647, 'YeinerJr', 'Contreras Caro', 'yeikarcapo@gmail.com', '3016224739', 'cra 140 no 39', 'yeikarcapo@gmail.com', 'yeinerjr11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bibliotecario`
--
ALTER TABLE `bibliotecario`
  ADD PRIMARY KEY (`idbibliotecario`);

--
-- Indices de la tabla `consultalibro`
--
ALTER TABLE `consultalibro`
  ADD PRIMARY KEY (`idConsultaLibro`),
  ADD KEY `fk_ConsultaLibro_Usuario1_idx` (`Usuario_idUsuario`),
  ADD KEY `fk_ConsultaLibro_FichaDePrestamo1_idx` (`FichaDePrestamo_idFichaDePrestamo`);

--
-- Indices de la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD PRIMARY KEY (`Libro_idLibros`,`FichaDePrestamo_idFichaDePrestamo`),
  ADD KEY `fk_Libro_has_FichaDePrestamo_FichaDePrestamo1_idx` (`FichaDePrestamo_idFichaDePrestamo`),
  ADD KEY `fk_Libro_has_FichaDePrestamo_Libro1_idx` (`Libro_idLibros`);

--
-- Indices de la tabla `estadoconservacion`
--
ALTER TABLE `estadoconservacion`
  ADD PRIMARY KEY (`idEstadoDeConservacion`);

--
-- Indices de la tabla `estadoprestamo`
--
ALTER TABLE `estadoprestamo`
  ADD PRIMARY KEY (`idEstadoPrestamo`);

--
-- Indices de la tabla `fichadeprestamo`
--
ALTER TABLE `fichadeprestamo`
  ADD PRIMARY KEY (`idFichaDePrestamo`),
  ADD KEY `fk_FichaDePrestamo_Bibliotecario1_idx` (`Bibliotecario_idbibliotecario`),
  ADD KEY `fk_FichaDePrestamo_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`idLibros`),
  ADD KEY `fk_Libro_EstadoConservacion1_idx` (`EstadoConservacion_idEstadoDeConservacion`),
  ADD KEY `fk_Libro_TiempoLimitePrestamo1_idx` (`TiempoLimitePrestamo_idTiempoPrestamo`),
  ADD KEY `fk_Libro_EstadoPrestamo1_idx` (`EstadoPrestamo_idEstadoPrestamo`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLogin`),
  ADD KEY `fk_Login_Usuario1_idx` (`Usuario_idUsuario`),
  ADD KEY `fk_Login_Bibliotecario1_idx` (`Bibliotecario_idbibliotecario`);

--
-- Indices de la tabla `tiempolimiteprestamo`
--
ALTER TABLE `tiempolimiteprestamo`
  ADD PRIMARY KEY (`idTiempoPrestamo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bibliotecario`
--
ALTER TABLE `bibliotecario`
  MODIFY `idbibliotecario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `consultalibro`
--
ALTER TABLE `consultalibro`
  MODIFY `idConsultaLibro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estadoconservacion`
--
ALTER TABLE `estadoconservacion`
  MODIFY `idEstadoDeConservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `estadoprestamo`
--
ALTER TABLE `estadoprestamo`
  MODIFY `idEstadoPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `fichadeprestamo`
--
ALTER TABLE `fichadeprestamo`
  MODIFY `idFichaDePrestamo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `idLibros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `idLogin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tiempolimiteprestamo`
--
ALTER TABLE `tiempolimiteprestamo`
  MODIFY `idTiempoPrestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultalibro`
--
ALTER TABLE `consultalibro`
  ADD CONSTRAINT `fk_ConsultaLibro_FichaDePrestamo1` FOREIGN KEY (`FichaDePrestamo_idFichaDePrestamo`) REFERENCES `fichadeprestamo` (`idFichaDePrestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ConsultaLibro_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalleprestamo`
--
ALTER TABLE `detalleprestamo`
  ADD CONSTRAINT `fk_Libro_has_FichaDePrestamo_FichaDePrestamo1` FOREIGN KEY (`FichaDePrestamo_idFichaDePrestamo`) REFERENCES `fichadeprestamo` (`idFichaDePrestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libro_has_FichaDePrestamo_Libro1` FOREIGN KEY (`Libro_idLibros`) REFERENCES `libro` (`idLibros`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `fichadeprestamo`
--
ALTER TABLE `fichadeprestamo`
  ADD CONSTRAINT `fk_FichaDePrestamo_Bibliotecario1` FOREIGN KEY (`Bibliotecario_idbibliotecario`) REFERENCES `bibliotecario` (`idbibliotecario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FichaDePrestamo_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `fk_Libro_EstadoConservacion1` FOREIGN KEY (`EstadoConservacion_idEstadoDeConservacion`) REFERENCES `estadoconservacion` (`idEstadoDeConservacion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libro_EstadoPrestamo1` FOREIGN KEY (`EstadoPrestamo_idEstadoPrestamo`) REFERENCES `estadoprestamo` (`idEstadoPrestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Libro_TiempoLimitePrestamo1` FOREIGN KEY (`TiempoLimitePrestamo_idTiempoPrestamo`) REFERENCES `tiempolimiteprestamo` (`idTiempoPrestamo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `fk_Login_Bibliotecario1` FOREIGN KEY (`Bibliotecario_idbibliotecario`) REFERENCES `bibliotecario` (`idbibliotecario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Login_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
