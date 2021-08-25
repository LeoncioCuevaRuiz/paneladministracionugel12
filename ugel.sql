-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2021 a las 19:55:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ugel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias`
--

CREATE TABLE `convocatorias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatorias`
--

INSERT INTO `convocatorias` (`id`, `titulo`, `descripcion`) VALUES
(1, 'prueba', 'descripcionprueba2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convocatorias_files`
--

CREATE TABLE `convocatorias_files` (
  `convocatorias_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `convocatorias_files`
--

INSERT INTO `convocatorias_files` (`convocatorias_id`, `file_id`) VALUES
(1, 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos`
--

CREATE TABLE `directivos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directivos`
--

INSERT INTO `directivos` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Administrador ', 'Se encarga de supervisar todos los datos'),
(2, 'prueba1', 'pruebadescripcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directivos_files`
--

CREATE TABLE `directivos_files` (
  `directivos_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `directivos_files`
--

INSERT INTO `directivos_files` (`directivos_id`, `file_id`) VALUES
(1, 11),
(2, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(250) NOT NULL,
  `filesize` int(11) NOT NULL,
  `web_path` varchar(250) NOT NULL,
  `system_path` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `files`
--

INSERT INTO `files` (`id`, `filename`, `filesize`, `web_path`, `system_path`) VALUES
(1, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/1.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/1.png'),
(2, '43ecacc4c1d568dbaf6b6bad74030028_1687184559264975024.png', 363463, '/UGEL12/PanelAdministracion/uploads/2.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/2.png'),
(3, '130268419_3420694124647043_1942886870431526498_n.jpg', 39787, '/UGEL12/PanelAdministracion/uploads/3.jpg', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/3.jpg'),
(4, 'c.jpg', 8407, '/UGEL12/PanelAdministracion/uploads/4.jpg', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/4.jpg'),
(5, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/5.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/5.png'),
(6, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/6.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/6.png'),
(7, '130268419_3420694124647043_1942886870431526498_n.jpg', 39787, '/UGEL12/PanelAdministracion/uploads/7.jpg', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/7.jpg'),
(8, '92106456_829821944184723_1558148318909956096_n.png', 44499, '/UGEL12/PanelAdministracion/uploads/8.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/8.png'),
(9, 'c.jpg', 8407, '/UGEL12/PanelAdministracion/uploads/9.jpg', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/9.jpg'),
(10, 'c.jpg', 8407, '/UGEL12/PanelAdministracion/uploads/10.jpg', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/10.jpg'),
(11, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/11.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/11.png'),
(12, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/12.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/12.png'),
(13, '43ecacc4c1d568dbaf6b6bad74030028_1687184559264975024.png', 363463, '/UGEL12/PanelAdministracion/uploads/13.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/13.png'),
(14, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/14.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/14.png'),
(15, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/15.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/15.png'),
(16, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/16.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/16.png'),
(17, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/17.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/17.png'),
(18, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/18.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/18.png'),
(19, '8824c865-1ab9-4fdf-88ca-03273ba15bc4.jpg', 59763, '/UGEL12/PanelAdministracion/uploads/19.jpg', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/19.jpg'),
(20, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/20.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/20.png'),
(21, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/21.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/21.png'),
(22, '3.png', 22675, '/UGEL12/PanelAdministracion/uploads/22.png', 'D:/xampp/htdocs/UGEL12/PanelAdministracion/uploads/22.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucioneseducativas`
--

CREATE TABLE `institucioneseducativas` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucioneseducativas`
--

INSERT INTO `institucioneseducativas` (`id`, `titulo`, `descripcion`) VALUES
(1, 'pruebacolegio', 'descripcionColegio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucioneseducativas_files`
--

CREATE TABLE `institucioneseducativas_files` (
  `institucioneseducativas_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `institucioneseducativas_files`
--

INSERT INTO `institucioneseducativas_files` (`institucioneseducativas_id`, `file_id`) VALUES
(1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id`, `titulo`, `descripcion`) VALUES
(1, 'prueba', 'A flor da honestidade. Conta-se que por volta do ano 250 A.C, na China antiga, um príncipe da região norte do país'),
(8, 'acceso1', 'aceesoprueba1'),
(10, 'prueba3', 'descripcionprueba3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias_files`
--

CREATE TABLE `noticias_files` (
  `noticias_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias_files`
--

INSERT INTO `noticias_files` (`noticias_id`, `file_id`) VALUES
(1, 1),
(8, 19),
(10, 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

CREATE TABLE `organigrama` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `organigrama`
--

INSERT INTO `organigrama` (`id`, `titulo`, `descripcion`) VALUES
(1, 'Organigrama', 'Conociendo nuestra organización institucional:');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama_files`
--

CREATE TABLE `organigrama_files` (
  `organigrama_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `organigrama_files`
--

INSERT INTO `organigrama_files` (`organigrama_id`, `file_id`) VALUES
(1, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobrenosotros`
--

CREATE TABLE `sobrenosotros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `descripcion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sobrenosotros`
--

INSERT INTO `sobrenosotros` (`id`, `titulo`, `descripcion`) VALUES
(1, 'NUESTRA VISIÓN', 'UGEL 10, trabajando con honestidad, y transparencia estableciendo pautas básicas, homogéneas, de acuerdo a las necesidades educativas vinculadas con la ciencia y tecnología; desarrollando innovaciones pedagógicas, orientadas a obtener al máximo la calidad educativa para la satisfacción de la comunidad, contribuyendo con el avance socio económico de la población'),
(2, 'NUESTRA MISIÓN', 'Garantizar un servicio de calidad, con modelos de gestión eficiente y pertinente, basados en un liderazgo democrático acorde con los avances de la ciencia y la tecnología, con personal capacitado, dispuesto a servir con valores éticos y morales, encaminados al desarrollo humano con una comunicación empática, brindando una administración y orientación pedagógica a los agentes educativos.'),
(3, 'prueba3', 'descripcionprueba3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sobrenosotros_files`
--

CREATE TABLE `sobrenosotros_files` (
  `sobrenosotros_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sobrenosotros_files`
--

INSERT INTO `sobrenosotros_files` (`sobrenosotros_id`, `file_id`) VALUES
(1, 5),
(2, 6),
(3, 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Id`, `nombre`, `apellido`, `email`, `pass`) VALUES
(2, 'Leoncio', 'Cueva ', 'leonciocuevaruiz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Luis', 'valenzuela', 'valenzuela@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Alfonso', 'Quiroz', 'quiroz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Ricardo', 'Leon', 'ricardo@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `directivos`
--
ALTER TABLE `directivos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucioneseducativas`
--
ALTER TABLE `institucioneseducativas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sobrenosotros`
--
ALTER TABLE `sobrenosotros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `convocatorias`
--
ALTER TABLE `convocatorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `directivos`
--
ALTER TABLE `directivos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `institucioneseducativas`
--
ALTER TABLE `institucioneseducativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sobrenosotros`
--
ALTER TABLE `sobrenosotros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
