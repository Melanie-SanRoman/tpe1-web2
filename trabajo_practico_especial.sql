-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-09-2023 a las 00:41:42
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
-- Base de datos: `trabajo_practico_especial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id_autor` int(50) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Fecha de nacimiento` varchar(100) NOT NULL,
  `Nacionalidad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`id_autor`, `Nombre`, `Apellido`, `Fecha de nacimiento`, `Nacionalidad`) VALUES
(1, 'Gabriel', 'Garcia Marquez', '06/03/1927', 'Colombiano'),
(2, 'Julio', 'Cortazar', '26/08/1914', 'Argentino'),
(3, 'Maria Elena', 'Walsh', '01/02/1930', 'Argentina'),
(4, 'John', 'Green', '24/08/1977', 'Estadounidense'),
(5, 'Roberto', 'Cossa', '30/11/1934', 'Argentino'),
(6, 'Miguel', 'de Cervantes', '22/04/1616', 'Española');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id_libros` int(11) NOT NULL,
  `Nombre del libro` varchar(100) NOT NULL,
  `Genero` varchar(100) NOT NULL,
  `Lanzamiento` varchar(100) NOT NULL,
  `id_autor` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id_libros`, `Nombre del libro`, `Genero`, `Lanzamiento`, `id_autor`) VALUES
(1, 'La Reina Batata', 'Cuento infantil', '1987', 3),
(2, 'Don Quijote de la Mancha', 'Novela, parodia, sátira', '1605', 6),
(3, 'Ciudades de Papel', 'Novela, ficción, adulto joven', '2008', 4),
(4, 'Hojarasca', 'Cuento, ficción, novela corta', '1955', 1),
(5, 'La Nona', 'Dramático', '1977', 5),
(6, 'Rayuela', 'Novela, Ficcion', '1963', 2),
(7, 'La Gitanilla', 'Ficción', '1613', 6),
(8, 'Bestiario', 'Cuento, Ficción', '1951', 2),
(9, 'Nuestro Fin de Semana', 'Obra de teatro', '1954', 5),
(10, 'Cien Años de Soledad', 'Novela, Realismo Magico', '1967', 1),
(11, 'Bajo la Misma Estrella', 'Novela, Ficción, Adulto Joven', '2012', 4),
(12, 'Manuelita', 'Cuento Infantil', '1987', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id_autor`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libros`),
  ADD KEY `fk_libros_autores` (`id_autor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id_autor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `fk_libros_autores` FOREIGN KEY (`id_autor`) REFERENCES `autores` (`id_autor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
