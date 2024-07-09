-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2017 a las 15:23:04
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pajonales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivo`
--

CREATE TABLE `cultivo` (
  `idcultivo` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NombreCultivo` varchar(50) NOT NULL COMMENT 'Nombre Cultivo para la Idenificacion',
  `Idtipo_cultivo` bigint(20) NOT NULL COMMENT 'Tipo de Cultivo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cultivo`
--

INSERT INTO `cultivo` (`idcultivo`, `NombreCultivo`, `Idtipo_cultivo`) VALUES
(1, 'CEBADA', 1),
(2, 'TRIGO', 1),
(3, 'AVENA', 1),
(4, 'MAIZ (HIBRIDO)', 1),
(5, 'MAIZ (HIBRIDO-VAR)', 1),
(6, 'SORGO', 1),
(7, 'ARROZ RIEGO (LLANOS)', 1),
(8, 'ARROZ RIEGO', 1),
(9, 'ARROZ RIEGO (TOL)', 1),
(10, 'ARROZ RIEGO (HUILA)', 1),
(11, 'PAPA (VAR.)', 2),
(12, 'PAPA (VAR. R-12)', 2),
(13, 'YUCA', 2),
(14, 'BATATA', 2),
(15, 'NAME', 2),
(16, 'REMOLACHA AZUCAR', 2),
(17, 'PAPA CRIOLLA', 2),
(18, 'TOMATE', 3),
(19, 'ESPARRAGOS', 3),
(20, 'ZANAHORIA', 3),
(21, 'COLIFLOR', 3),
(22, 'REPOLLO', 3),
(23, 'APIO', 3),
(24, 'LECHUGA', 3),
(25, 'CEBOLLA CABEZONA', 3),
(26, 'CEBOLLA', 3),
(27, 'REMOLACHA', 3),
(28, 'ESPINACAS', 3),
(29, 'BERENJENA', 3),
(30, 'PEPINO COHOMBRO', 3),
(31, 'PEPINO COHOMBRO', 3),
(32, 'FRIJOL VERDE', 3),
(33, 'AJO', 3),
(34, 'AJI (CAPSICUM)', 3),
(35, 'PEPINILLO', 3),
(36, 'HABICHUELA', 3),
(37, 'PIMENTON (HIBRIDO)', 3),
(38, 'HABA', 4),
(39, 'FRIJOL', 4),
(40, 'HABICHUELA', 4),
(41, 'GUISANTE', 4),
(42, 'ALFALFA', 4),
(43, 'ALVERJON', 4),
(44, 'ARVEJA', 4),
(45, 'SOYA (VAR.)', 5),
(46, 'PALMA AFRICANA.', 5),
(47, 'GIRASOL', 5),
(48, 'AJONJOLI', 5),
(49, 'COCOTERO (COCO)', 5),
(50, 'MANI', 5),
(51, 'COLZA', 5),
(52, 'JATROPHA CURCAS', 5),
(53, 'CAFÃ‰ TECNIFICADO', 6),
(54, 'CAFÃ‰(SEMI LIMP)', 6),
(55, 'CACAO - VIVERO', 6),
(56, 'SOYA', 4),
(57, 'PALMA AFRICANA', 5),
(58, 'COCO', 5),
(59, 'CACAO VIVERO', 6),
(60, 'CACAO PRODUCCION', 6),
(61, 'TABACO', 6),
(62, 'TÃ‰', 6),
(63, 'PIMIENTA NG', 6),
(64, 'ALGODÃ“N', 6),
(65, 'CAÃ‘A PANELERA', 6),
(66, 'CAÃ‘A AZUCAR', 6),
(67, 'ALGODÃ“N HILO', 6),
(68, 'CAUCHO', 6),
(69, 'CAUCHO LATEX SEC', 6),
(70, 'YUTE FIBRA SECA', 6),
(71, 'AGUACATE', 7),
(72, 'BADEA', 7),
(73, 'BANANO', 7),
(74, 'CIRUELO', 7),
(75, 'CHULUPA', 7),
(76, 'CITRICOS', 7),
(77, 'DURAZNO', 7),
(78, 'GUANABANA', 7),
(79, 'GUAYABA', 7),
(80, 'GULUPA', 7),
(81, 'LULO', 7),
(82, 'MANGO', 7),
(83, 'MANZANO', 7),
(84, 'MARACUYA', 7),
(85, 'MELON HIBRIDO', 7),
(86, 'MORA', 7),
(87, 'MORA CASTILLA', 7),
(88, 'PAPAYA', 7),
(89, 'PERA', 7),
(90, 'PLATANO HARTON', 7),
(91, 'PIÃ‘A', 7),
(92, 'SANDIA', 7),
(93, 'TOMATE ARB', 7),
(94, 'UVA', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hacienda`
--

CREATE TABLE `hacienda` (
  `Idhacienda` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre de la finca para su identificacion',
  `Tamano` float NOT NULL COMMENT 'Tamaño En Hectareas',
  `kml` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hacienda`
--

INSERT INTO `hacienda` (`Idhacienda`, `Nombre`, `Tamano`, `kml`) VALUES
(1, 'PAJONALES', 162, 'poligono_pajonales.kml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

CREATE TABLE `lote` (
  `Idlote` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `NumeroLote` varchar(50) NOT NULL COMMENT 'Numero del lote en la finca',
  `IdHacienda` bigint(20) NOT NULL COMMENT 'Hacienda A la Cual pertenece el lote',
  `Ha` float NOT NULL COMMENT 'Tamaño En Hectareas',
  `kml` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`Idlote`, `NumeroLote`, `IdHacienda`, `Ha`, `kml`) VALUES
(1, 'SUERTE 1', 1, 20, 'KML_1_NOMBRE.kml'),
(2, 'SUERTE 2', 1, 20, 'KML_2_NOMBRE.kml'),
(3, 'SUERTE 3', 1, 10, 'KML_3_NOMBRE.kml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotecultivo`
--

CREATE TABLE `lotecultivo` (
  `Idlotecultivo` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Idlote` bigint(20) NOT NULL COMMENT 'Numero del lote en la finca',
  `idcultivo` bigint(20) NOT NULL COMMENT 'Cultivo que tiene el lote',
  `Extension` float NOT NULL COMMENT 'Extension del cultivo en el lote',
  `kml` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lotecultivo`
--

INSERT INTO `lotecultivo` (`Idlotecultivo`, `Idlote`, `idcultivo`, `Extension`, `kml`) VALUES
(1, 2, 1, 10, 'KML_3.kml'),
(2, 1, 64, 10, 'KML_5.kml'),
(3, 1, 67, 10, 'KML_7.kml'),
(4, 1, 10, 10, 'KML_6.kml'),
(5, 1, 11, 10, 'KML_8.kml');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preparacion_suelo`
--

CREATE TABLE `preparacion_suelo` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `profundidadpreparacion_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `tamanoterrones_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `preparacion_suelo`
--

INSERT INTO `preparacion_suelo` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `profundidadpreparacion_ps`, `tamanoterrones_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '544242', 'NORTE', '4325235345', 'ESTE', '232', '232', '2017-12-06', '23', '3223', '23', '232', '323', '323', '323', '323', '2323', '323', '23', '323', '23', '32', '323', '323', '32', '32', '23', '323', '232', '323', '323', '32', '32', '323', '23', '323', '323', '32', '32', '3232', '323', '323', '23', '323', '32', '323', '2017-12-18 11:26:22', 1),
(2, 0, '324354', 'NORTE', '43254325', 'ESTE', '435432', '5435', '2017-12-10', '43543', '5354', '543', '5435', '435435', '4354354', '35435', '435435', '535', '435435', '3543543', '5435', '45', '43543', '543543', '55435', '435', '435435', '435435', '5', '43543', '435435', '5435', '6546', '54654', '6456', '546546', '46546', '5656546', '546546546', '546546', '54654', '54654', '56546', '5464', '6546546', '546546', '54654', '2017-12-18 15:17:54', 1),
(3, 2, '546546', 'NORTE', '5646', 'ESTE', '56', '546', '2017-12-21', '5464', '6546', '6546', '546', '6546', '6546', '6546', '54', '654', '5654', '654', '654', '6546', '5464', '6546', '5', '54654', '654', '54', '6465', '546', '6546', '65466', '646', '5464', '54', '564', '546', '', '54654', '546', '654', '654', '546', '6546', '54', '546', '546546', '2017-12-18 15:19:07', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r0_r1`
--

CREATE TABLE `r0_r1` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechainicioPrimordio_ps` date NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `r0_r1`
--

INSERT INTO `r0_r1` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechainicioPrimordio_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 1, '4.7488868935934345', 'SUR', '-74.81758117675781', 'OESTE', '2017-12-29', '2017-12-28', '44', '4', '4', '4', '444', '4', '4', '44', '4', '44', '44', '44', '4', '44', '4', '4', '44', '4', '4', '44', '4', '4', '4', '4', '44', '44', '44', '44', '4', '4', '44', '44', '44', '44', '4', '4', '44', '44', '2017-12-18 12:02:36', 1),
(2, 1, '4.751589239724975', 'SUR', '-74.822901752802792', 'OESTE', '2017-12-29', '2017-12-28', '44', '4', '4', '4', '444', '4', '4', '44', '4', '44', '44', '44', '4', '44', '4', '4', '44', '4', '4', '44', '4', '4', '4', '4', '44', '44', '44', '44', '4', '4', '44', '44', '44', '44', '4', '4', '44', '44', '2017-12-18 12:02:36', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r2_r3`
--

CREATE TABLE `r2_r3` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechafloracion_ps` date NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `r2_r3`
--

INSERT INTO `r2_r3` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechafloracion_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '6879887987', 'NORTE', '8798798987', 'ESTE', '2017-12-27', '2017-12-28', '555', '555', '555', '55', '55', '55', '555', '55', '55', '55', '55', '55', '55', '55', '55', '5', '55', '55', '55', '55', '55', '55', '55', '555', '555', '55', '55', '55', '55', '55', '5555', '555', '55', '555', '55', '55', '555', '55', '2017-12-18 13:21:15', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r4_r5`
--

CREATE TABLE `r4_r5` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `macollas_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `r4_r5`
--

INSERT INTO `r4_r5` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `macollas_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '4325235', 'NORTE', '54355645', 'ESTE', '888', '2017-08-24', '88', '88', '88', '88', '88', '88', '88', '888', '888', '88', '88', '88', '88', '88', '88', '88', '88', '888', '88', '88', '88', '88', '88', '888', '88', '88', '888', '888', '88', '88', '88', '88', '88', '888', '88', '88', '88', '88', '2017-12-18 13:27:47', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r6_r8`
--

CREATE TABLE `r6_r8` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `numGranosPanicula_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `peso_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `vaneamiento_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `r6_r8`
--

INSERT INTO `r6_r8` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `numGranosPanicula_ps`, `peso_ps`, `vaneamiento_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '78769867', 'NORTE', '8989', 'ESTE', '888', '888', '8888', '2017-12-24', '88', '88', '88', '88', '9999', '889', '888', '8899', '88', '999', '99', '999', '999', '999', '999', '999', '9999', '9999', '999', '999', '999', '99999', '999', '999', '99999', '9999', '999', '999', '999', '99999', '9999', '9999', '9999', '999', '999', '9999', '99', '9999', '2017-12-18 13:37:27', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r9`
--

CREATE TABLE `r9` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `numGranosPanicula_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `peso_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `vaneamiento_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `r9`
--

INSERT INTO `r9` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `numGranosPanicula_ps`, `peso_ps`, `vaneamiento_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '8765', 'NORTE', '757565', 'ESTE', '555', '555', '555', '0005-05-05', '5555', '555', '5555', '5555', '5555', '555', '5555', '555', '5555', '555', '5555', '555', '555', '555', '55555', '55', '555', '555', '55', '55', '5555', '5555', '555', '55', '555', '555', '555', '555', '555', '555', '555', '5555', '555', '555', '555', '555', '555', '555', '2017-12-18 13:38:25', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra_s0`
--

CREATE TABLE `siembra_s0` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechasiembra_ps` date NOT NULL,
  `profundidadsiembra_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `variedad_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `densidadsiembra_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `siembra_s0`
--

INSERT INTO `siembra_s0` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechasiembra_ps`, `profundidadsiembra_ps`, `variedad_ps`, `densidadsiembra_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '5435435543', 'NORTE', '4354543543', 'ESTE', '2018-01-07', '656', '56', '565', '2017-05-30', '656', '656', '656', '656', '656', '65', '65', '656', '56', '656', '656', '656', '656', '56', '65', '656', '656', '65', '656', '65', '656', '656', '656', '56', '65', '65', '65', '56', '65', '65', '656', '65', '656', '6565', '65', '65', '656', '56', '2017-12-18 11:28:11', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `siembra_s3`
--

CREATE TABLE `siembra_s3` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechaemergencia_ps` date NOT NULL,
  `germinacionsemilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `plantasemergidas_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `siembra_s3`
--

INSERT INTO `siembra_s3` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechaemergencia_ps`, `germinacionsemilla_ps`, `plantasemergidas_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '5435435435', 'NORTE', '4543543543', 'ESTE', '2017-03-13', '4543', '121', '2017-02-14', '122', '121', '212', '12', '212', '212', '21', '212', '212', '12', '121', '212', '212', '212', '21', '212', '212', '212', '212', '212', '12', '12', '121', '21', '12', '21', '21', '12', '21', '21', '21', '212', '21', '212', '21', '21', '12', '212', '2017-12-18 11:29:32', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cultivo`
--

CREATE TABLE `tipo_cultivo` (
  `Idtipo_cultivo` bigint(20) NOT NULL COMMENT 'Llave primaria',
  `Nombre` varchar(50) NOT NULL COMMENT 'Nombre del Tipo de cultivo para identificarlo es decir Cereales,Hortalizas ETC..'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_cultivo`
--

INSERT INTO `tipo_cultivo` (`Idtipo_cultivo`, `Nombre`) VALUES
(1, 'CEREALES'),
(2, 'TUBERCULOS Y RAICES'),
(3, 'HORTALIZAS'),
(4, 'LEGUMINOSAS'),
(5, 'OLEAGINOSAS'),
(6, 'ESTIMULANTES E INDUSTRIALES'),
(7, 'FRUTALES'),
(8, 'PASTOS'),
(9, 'ENSILAJE'),
(10, 'FLORES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `rol_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `password_ps` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_ps`, `rol_ps`, `usuario_ps`, `password_ps`) VALUES
(1, 'Luis Fernando Chamorro R.', 'ADMINISTRADOR', 'PAJONALES', 'ec6a6536ca304edf844d1d248a4f08dc');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `v3_v5`
--

CREATE TABLE `v3_v5` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fechainiciomacollamiento_ps` date NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `v3_v5`
--

INSERT INTO `v3_v5` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `fechainiciomacollamiento_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '8989797898', 'NORTE', '8987989879', 'ESTE', '2017-12-17', '2018-04-14', '090', '090', '90', '90', '0', '0909', '909', '090', '9090', '09', '090', '090', '090', '090', '090', '090', '090', '090', '090', '90', '90', '090', '90', '0990', '90', '909', '09', '090', '090', '09', '090', '090', '90', '90', '90', '09', '90', '90', '2017-12-18 11:30:48', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `v6_v9`
--

CREATE TABLE `v6_v9` (
  `id_preparacionSuelo` int(11) NOT NULL,
  `Idlotecultivo` bigint(20) NOT NULL,
  `latitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLat` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `longitud_ps` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `orientacionLon` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `macollas_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_ps` date NOT NULL,
  `Spodoptera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Grillotalpa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Blissus_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `GusanoAlambre_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Mocis_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Spodoptera_ps_comedor` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Panoquina_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Platinota_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Tipotidae` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `diatrea_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rupella_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Chinches_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sogata` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Helmintosporium_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cercospa_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Piricularia_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Rizhoctorinia` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Gaeumanonomices` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Sarocladium` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pseudomona_fuscovagine_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Burkholderia_glumae_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `En_la_Espiga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Arroz_Rojo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Liendrepuerco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Falsa_Caminadora_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Peluda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Paja_Mona_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Guardarocio_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Pinita_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Suelda_con_suelda_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Verdolaga_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Bledo_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Batatilla_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Boton_Blanco_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Clavito_de_Agua_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Cortadera_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `Coquito_ps` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `v6_v9`
--

INSERT INTO `v6_v9` (`id_preparacionSuelo`, `Idlotecultivo`, `latitud_ps`, `orientacionLat`, `longitud_ps`, `orientacionLon`, `macollas_ps`, `fecha_ps`, `Spodoptera_ps`, `Grillotalpa_ps`, `Blissus_ps`, `GusanoAlambre_ps`, `Mocis_ps`, `Spodoptera_ps_comedor`, `Panoquina_ps`, `Platinota_ps`, `Tipotidae`, `diatrea_ps`, `Rupella_ps`, `Chinches_ps`, `Sogata`, `Helmintosporium_ps`, `Cercospa_ps`, `Piricularia_ps`, `Rizhoctorinia`, `Gaeumanonomices`, `Sarocladium`, `Pseudomona_fuscovagine_ps`, `Burkholderia_glumae_ps`, `En_la_Espiga_ps`, `Arroz_Rojo_ps`, `Liendrepuerco_ps`, `Caminadora_ps`, `Falsa_Caminadora_ps`, `Paja_Peluda_ps`, `Paja_Mona_ps`, `Guardarocio_ps`, `Pinita_ps`, `Suelda_con_suelda_ps`, `Verdolaga_ps`, `Bledo_ps`, `Batatilla_ps`, `Boton_Blanco_ps`, `Clavito_de_Agua_ps`, `Cortadera_ps`, `Coquito_ps`, `fechaRegistro`, `id_usuario`) VALUES
(1, 0, '2122321233', 'NORTE', '-213213213', 'OESTE', '23', '2018-01-03', '23', '23', '32', '32', '23', '23', '23', '32', '23', '23', '323', '23', '32', '23', '23', '32', '32', '32', '323', '23', '32', '23', '23', '32', '32', '232', '323', '32', '23', '32', '32', '32', '323', '23', '323', '32', '323', '3232', '2017-12-18 11:59:28', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `hacienda`
--
ALTER TABLE `hacienda`
  ADD PRIMARY KEY (`Idhacienda`);

--
-- Indices de la tabla `lote`
--
ALTER TABLE `lote`
  ADD PRIMARY KEY (`Idlote`);

--
-- Indices de la tabla `lotecultivo`
--
ALTER TABLE `lotecultivo`
  ADD PRIMARY KEY (`Idlotecultivo`);

--
-- Indices de la tabla `preparacion_suelo`
--
ALTER TABLE `preparacion_suelo`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `r0_r1`
--
ALTER TABLE `r0_r1`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `r2_r3`
--
ALTER TABLE `r2_r3`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `r4_r5`
--
ALTER TABLE `r4_r5`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `r6_r8`
--
ALTER TABLE `r6_r8`
  ADD PRIMARY KEY (`id_preparacionSuelo`);

--
-- Indices de la tabla `r9`
--
ALTER TABLE `r9`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `siembra_s0`
--
ALTER TABLE `siembra_s0`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `siembra_s3`
--
ALTER TABLE `siembra_s3`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tipo_cultivo`
--
ALTER TABLE `tipo_cultivo`
  ADD PRIMARY KEY (`Idtipo_cultivo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `v3_v5`
--
ALTER TABLE `v3_v5`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `v6_v9`
--
ALTER TABLE `v6_v9`
  ADD PRIMARY KEY (`id_preparacionSuelo`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `preparacion_suelo`
--
ALTER TABLE `preparacion_suelo`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `r0_r1`
--
ALTER TABLE `r0_r1`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `r2_r3`
--
ALTER TABLE `r2_r3`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `r4_r5`
--
ALTER TABLE `r4_r5`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `r6_r8`
--
ALTER TABLE `r6_r8`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `r9`
--
ALTER TABLE `r9`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `siembra_s0`
--
ALTER TABLE `siembra_s0`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `siembra_s3`
--
ALTER TABLE `siembra_s3`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tipo_cultivo`
--
ALTER TABLE `tipo_cultivo`
  MODIFY `Idtipo_cultivo` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `v3_v5`
--
ALTER TABLE `v3_v5`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `v6_v9`
--
ALTER TABLE `v6_v9`
  MODIFY `id_preparacionSuelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
