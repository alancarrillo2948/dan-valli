-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-05-2024 a las 05:43:13
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_gestion_tatuajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda_del_artista`
--

DROP TABLE IF EXISTS `agenda_del_artista`;
CREATE TABLE IF NOT EXISTS `agenda_del_artista` (
  `id_de_agenda` int NOT NULL AUTO_INCREMENT,
  `id_del_artista` int DEFAULT NULL,
  `fecha_y_hora_disponible` timestamp NULL DEFAULT NULL,
  `estado_de_disponibilidad` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_de_agenda`),
  KEY `id_del_artista` (`id_del_artista`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `agenda_del_artista`
--

INSERT INTO `agenda_del_artista` (`id_de_agenda`, `id_del_artista`, `fecha_y_hora_disponible`, `estado_de_disponibilidad`) VALUES
(1, 1, '2023-06-22 19:00:00', 'Available'),
(2, 2, '2023-06-25 16:30:00', 'Available'),
(3, 3, '2023-07-01 21:00:00', 'Available'),
(4, 4, '2023-07-05 17:00:00', 'Available'),
(5, 5, '2023-07-10 20:30:00', 'Available');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista_tatuajes`
--

DROP TABLE IF EXISTS `artista_tatuajes`;
CREATE TABLE IF NOT EXISTS `artista_tatuajes` (
  `id_del_artista` int NOT NULL,
  `nombre_del_artista` varchar(255) DEFAULT NULL,
  `estilo_especializado` varchar(255) DEFAULT NULL,
  `informacion_de_contacto_del_artista` varchar(255) DEFAULT NULL,
  `calificacion_promedio` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id_del_artista`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `artista_tatuajes`
--

INSERT INTO `artista_tatuajes` (`id_del_artista`, `nombre_del_artista`, `estilo_especializado`, `informacion_de_contacto_del_artista`, `calificacion_promedio`) VALUES
(1, 'Emily Ross', 'Realism', 'emily.ross@tattooartist.com', 5),
(2, 'Jacob Thompson', 'Geometric', 'jacob.thompson@tattooartist.com', 5),
(3, 'Sophia Martinez', 'Traditional', 'sophia.martinez@tattooartist.com', 5),
(4, 'William Anderson', 'Watercolor', 'william.anderson@tattooartist.com', 5),
(5, 'Olivia Taylor', 'Illustrative', 'olivia.taylor@tattooartist.com', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacion_y_resena`
--

DROP TABLE IF EXISTS `calificacion_y_resena`;
CREATE TABLE IF NOT EXISTS `calificacion_y_resena` (
  `id_de_resena` int NOT NULL AUTO_INCREMENT,
  `id_del_cliente` int DEFAULT NULL,
  `id_de_tatuaje` int DEFAULT NULL,
  `calificacion` decimal(10,0) DEFAULT NULL,
  `comentario_descripcion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_de_resena`),
  KEY `id_del_cliente` (`id_del_cliente`),
  KEY `id_de_tatuaje` (`id_de_tatuaje`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `calificacion_y_resena`
--

INSERT INTO `calificacion_y_resena` (`id_de_resena`, `id_del_cliente`, `id_de_tatuaje`, `calificacion`, `comentario_descripcion`) VALUES
(1, 1, 3, 5, 'Amazing work! Highly recommended.'),
(2, 2, 1, 4, 'Great tattoo artist, very talented.'),
(3, 3, 4, 5, 'Stunning watercolor tattoo, love it!'),
(4, 4, 2, 4, 'Creative and well-executed geometric design.'),
(5, 5, 5, 5, 'Incredible attention to detail in the illustration.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

DROP TABLE IF EXISTS `cita`;
CREATE TABLE IF NOT EXISTS `cita` (
  `id_de_cita` int NOT NULL AUTO_INCREMENT,
  `id_del_cliente` int DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `id_del_artista` int DEFAULT NULL,
  `fecha_y_hora_de_la_cita` timestamp NULL DEFAULT NULL,
  `telefono` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `duracion_estimada` decimal(10,0) DEFAULT NULL,
  `estado_de_la_cita` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_de_cita`),
  KEY `id_del_cliente` (`id_del_cliente`),
  KEY `id_del_artista` (`id_del_artista`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_de_cita`, `id_del_cliente`, `nombre`, `id_del_artista`, `fecha_y_hora_de_la_cita`, `telefono`, `correo`, `duracion_estimada`, `estado_de_la_cita`) VALUES
(1, 1, NULL, 3, '2023-06-15 16:00:00', '', NULL, 4, 'Scheduled'),
(2, 2, NULL, 1, '2023-06-20 20:30:00', '', NULL, 5, 'Completed'),
(3, 3, NULL, 4, '2023-06-25 22:00:00', '', NULL, 4, 'Scheduled'),
(4, 4, NULL, 2, '2023-07-01 17:30:00', '', NULL, 3, 'Scheduled'),
(5, 5, NULL, 5, '2023-07-10 15:00:00', '', NULL, 6, 'Scheduled'),
(6, NULL, 'Jesus', NULL, '2024-05-22 19:31:00', '33215648646', 'email@email.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_de_cliente` int NOT NULL,
  `nombre_del_cliente` varchar(255) DEFAULT NULL,
  `informacion_de_contacto_del_cliente` varchar(255) DEFAULT NULL,
  `historial_de_tatuajes` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_de_cliente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_de_cliente`, `nombre_del_cliente`, `informacion_de_contacto_del_cliente`, `historial_de_tatuajes`) VALUES
(1, 'John Doe', 'john.doe@email.com', 'Floral sleeve'),
(2, 'Jane Smith', 'jane.smith@email.com', 'Tribal back piece'),
(3, 'Michael Johnson', 'michael.johnson@email.com', 'Portrait tattoo'),
(4, 'Emily Davis', 'emily.davis@email.com', 'Nature-inspired arm tattoo'),
(5, 'David Wilson', 'david.wilson@email.com', 'Script tattoo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudio_de_tatuajes`
--

DROP TABLE IF EXISTS `estudio_de_tatuajes`;
CREATE TABLE IF NOT EXISTS `estudio_de_tatuajes` (
  `id_de_estudio` int NOT NULL,
  `nombre_del_estudio` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_de_estudio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `estudio_de_tatuajes`
--

INSERT INTO `estudio_de_tatuajes` (`id_de_estudio`, `nombre_del_estudio`) VALUES
(1, 'Ink Masters'),
(2, 'Tattoo Lounge'),
(3, 'Skin Art Studio'),
(4, 'Eternal Ink'),
(5, 'Inked Expressions');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tatuaje`
--

DROP TABLE IF EXISTS `tatuaje`;
CREATE TABLE IF NOT EXISTS `tatuaje` (
  `id_del_tatuaje` int NOT NULL AUTO_INCREMENT,
  `id_del_artista` int DEFAULT NULL,
  `descripcion_del_tatuaje` varchar(255) DEFAULT NULL,
  `imagenes_del_tatuaje` varchar(255) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `fecha_de_creacion` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_del_tatuaje`),
  KEY `id_del_artista` (`id_del_artista`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `tatuaje`
--

INSERT INTO `tatuaje` (`id_del_tatuaje`, `id_del_artista`, `descripcion_del_tatuaje`, `imagenes_del_tatuaje`, `precio`, `fecha_de_creacion`) VALUES
(1, 1, 'Realistic portrait tattoo', 'portrait_tattoo.jpg', 450, '2022-08-15 16:30:00'),
(2, 2, 'Geometric sleeve tattoo', 'geometric_sleeve.jpg', 800, '2022-09-20 20:00:00'),
(3, 3, 'Traditional rose tattoo', 'traditional_rose.jpg', 200, '2022-10-05 22:30:00'),
(4, 4, 'Watercolor floral tattoo', 'watercolor_floral.jpg', 350, '2022-11-10 17:15:00'),
(5, 5, 'Illustrative animal tattoo', 'animal_illustration.jpg', 500, '2022-12-01 15:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_de_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre_de_usuario` varchar(255) DEFAULT NULL,
  `correo_electronico` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `informacion_de_contacto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_de_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_de_usuario`, `nombre_de_usuario`, `correo_electronico`, `contrasena`, `informacion_de_contacto`) VALUES
(1, 'jdoe', 'john.doe@email.com', 'password123', 'John Doe, 123 Main St.'),
(2, 'jsmith', 'jane.smith@email.com', 'qwerty456', 'Jane Smith, 456 Oak Rd.'),
(3, 'mjohnson', 'michael.johnson@email.com', 'letmein789', 'Michael Johnson, 789 Elm Ave.'),
(4, 'edavis', 'emily.davis@email.com', 'securepass', 'Emily Davis, 321 Pine Ln.'),
(5, 'dwilson', 'david.wilson@email.com', 'password321', 'David Wilson, 654 Cedar Dr.'),
(6, 'admin', 'email@email.com', 'password', '33145494565');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
