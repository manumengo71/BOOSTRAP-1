-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 26-11-2023 a las 19:03:58
-- Versión del servidor: 8.1.0
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academiaingles`
--
CREATE DATABASE IF NOT EXISTS `academiaingles` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `academiaingles`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exams`
--

CREATE TABLE `exams` (
  `exam_id` int NOT NULL,
  `exam_subject` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `exam_date` date NOT NULL,
  `student_id` int NOT NULL,
  `qualification` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_subject`, `exam_date`, `student_id`, `qualification`) VALUES
(1, 'Comprensión oral B2 - Examen 1', '2023-11-24', 1, 10),
(2, 'Prueba escrita genérica A1 - Examen 3', '2023-02-22', 4, 8),
(3, 'Comprensión oral B2 - Examen 2', '2022-05-02', 4, 3),
(4, 'Examen oficial escrito C1 2023', '2023-12-17', 6, 10),
(5, 'Examen de ingreso a la academia', '2023-01-01', 1, 8),
(6, 'Prueba oral A2 específica con nativo', '2022-07-06', 2, 6),
(7, 'Reading C2 - Examen 3', '2023-03-19', 3, 9),
(8, 'Writing Genérico C2 - Examen 7', '2023-04-09', 3, 7),
(9, 'Reading B1 - Examen 2', '2021-04-22', 9, 4),
(10, 'Examen A2 ingreso AÑO 2021', '2023-01-02', 7, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `student_id` int NOT NULL,
  `student_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `student_birthdate` date NOT NULL,
  `student_number` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_birthdate`, `student_number`) VALUES
(1, 'Manuel C. Mendoza González', '2004-04-22', '695847321'),
(2, 'Dolores González Troncoso', '1987-07-07', '321654789'),
(3, 'MrBeast', '9999-09-09', '123456789'),
(4, 'Alejandro Baquero Márquez', '2004-04-21', '654987123'),
(5, 'Manuel Mendoza Campanario', '1972-10-21', '695478123'),
(6, 'Rocio Domínguez Gayango', '2006-08-11', '258147456'),
(7, 'Gustavo Rueda Ruiz', '2001-04-09', '657193428'),
(8, 'Carolina Nuñez Gangoso', '1999-12-25', '627143218'),
(9, 'Nano mengo', '2014-09-14', '217456119'),
(10, 'Inmaculada González Pérez', '2004-10-31', '321738912');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_id`),
  ADD KEY `fk_estudiantes` (`student_id`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `fk_estudiantes` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
