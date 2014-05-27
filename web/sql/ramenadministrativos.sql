-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-05-2014 a las 23:17:08
-- Versión del servidor: 5.1.44
-- Versión de PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
create database ramenadministrativos;
use ramenadministrativos;
--
-- Base de datos: `ramenadministrativos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Volcar la base de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `nombre`, `activo`) VALUES
(1, 'BOGOTA', 1),
(2, 'BUCARAMANGA', 1),
(3, 'BOJACA', 1),
(4, 'CAJICA', 1),
(5, 'CHIA', 1),
(6, 'COGUA', 1),
(7, 'COTA', 1),
(8, 'CUNDINAMARCA', 1),
(9, 'FACATATIVA', 1),
(10, 'FUNZA', 1),
(11, 'GACHANCIPA', 1),
(12, 'GIRON SANTANDER', 1),
(13, 'MADRID', 1),
(14, 'MOSQUERA', 1),
(15, 'PIEDECUESTA', 1),
(16, 'SIBATE', 1),
(17, 'SOACHA', 1),
(18, 'SOPO', 1),
(19, 'SUBACHOQUE', 1),
(20, 'SUTATAUSA', 1),
(21, 'TABIO', 1),
(22, 'TENJO', 1),
(23, 'TOCANCIPA', 1),
(24, 'UBATE', 1),
(25, 'ZIPACON', 1),
(26, 'ZIPAQUIRA', 1),
(27, 'MEDELLIN', 1),
(28, 'aaaae', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(11) NOT NULL COMMENT 'Id del menu',
  `idPadre` int(11) DEFAULT NULL COMMENT 'Id del menu padre',
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripcion de la opcion de menu',
  `enlace` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Enlace al formulario principal',
  `estado` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Estado del menu',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcar la base de datos para la tabla `menus`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id del perfil',
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL COMMENT 'Descripcion del perfil',
  `estado` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Estado del perfil',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de perfiles' AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`id`, `descripcion`, `estado`) VALUES
(1, 'administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE IF NOT EXISTS `permisos` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del permiso',
  `idPerfil` int(11) NOT NULL COMMENT 'id del Perfil',
  `idOpcionMenu` int(11) NOT NULL COMMENT 'id opciones de menu separadas por el simbolo ,',
  `estado` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idPerfilPermisosPerfiles` (`idPerfil`),
  KEY `fk_idOpcionMenuPermisosMenu` (`idOpcionMenu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='tabla de permisos' AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `permisos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE IF NOT EXISTS `sedes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `idCiudad` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_idCiudadSedesCiudades` (`idCiudad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `nombre`, `idCiudad`, `activo`) VALUES
(1, 'principal', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `primerNombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `segundoNombre` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `primerApellido` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `segundoApellido` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nickname` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `sessionActiva` text COLLATE utf8_spanish_ci COMMENT 'Session activa del usuario',
  `idPerfil` int(11) NOT NULL,
  `idSede` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fk_idPerfilUsuariosPerfiles` (`idPerfil`),
  KEY `fk_idSedeUsuariosSedes` (`idSede`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `primerNombre`, `segundoNombre`, `primerApellido`, `segundoApellido`, `nickname`, `contrasena`, `sessionActiva`, `idPerfil`, `idSede`, `estado`) VALUES
(106036869, 'administrador', NULL, 'administrador', NULL, 'admin', 'c2d628ba98ed491776c9335e988e2e3b', '', 1, 1, 1);

--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `fk_idOpcionMenuPermisosMenu` FOREIGN KEY (`idOpcionMenu`) REFERENCES `menus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idPerfilPermisosPerfil` FOREIGN KEY (`idPerfil`) REFERENCES `perfiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD CONSTRAINT `fk_idCiudadSedesCiudades` FOREIGN KEY (`idCiudad`) REFERENCES `ciudades` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_idPerfilUsuariosPerfiles` FOREIGN KEY (`idPerfil`) REFERENCES `perfiles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_idSedeUsuariosSedes` FOREIGN KEY (`idSede`) REFERENCES `sedes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
