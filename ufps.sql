-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 07:14 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comercio`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'Programa'),
(2, 'Pensum'),
(3, 'Infraestructura'),
(4, 'Programas'),
(5, 'Investigación'),
(6, 'Acreditación'),
(7, 'Internacionalización');

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`id`, `titulo`, `lugar`, `url`, `fecha`, `texto`) VALUES
(1, 'Funciona', 'la Pm', 'assets/img/11.jpg', '12-09-2019', '  Docente y Estudiantes de proyecto social del Programa Ingeniería de sistemas, comparten con los abuelitos de la Fundación '),
(2, 'Ya casi esta listo eventos en la pagina principal', 'Universidad Francisco de Paula Santander', 'assets/img/22.jpg', '13-09-2019', '  Docente y Estudiantes de proyecto social del Programa Ingeniería de sistemas, comparten con los abuelitos de la Fundación ');

-- --------------------------------------------------------

--
-- Table structure for table `novedad`
--

CREATE TABLE `novedad` (
  `id` int(11) NOT NULL,
  `texto` text NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `novedad`
--

INSERT INTO `novedad` (`id`, `texto`, `fecha`) VALUES
(3, 'Boletín N°02 Consejo Electoral Universitario 2019', '2019-06-15'),
(4, 'Comunicado Autorización grados por Secretaría', '2019-06-14'),
(5, 'Acta de eliminación de documentos, Dpto Procesos Industriales.', '2019-06-02'),
(6, 'Boletín N° 13 Consejo Electoral', '2019-06-12'),
(8, 'Suspensión Términos Vacaciones Colectivas Año 2018', '2019-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `url`, `texto`) VALUES
(1, 'http://ingsistemas.ufps.edu.co/rsc/img/convocatoria%20open%20jobs.jpg', 'Se invita a estudiantes de últimos semestres y egresados del programa a participar de la convocatoria laboral realizada por Open Systems'),
(2, 'http://ingsistemas.ufps.edu.co/rsc/img/semillerosInvestigacion.png', 'Semilleros de Investigacion'),
(3, 'http://ingsistemas.ufps.edu.co/rsc/img/experienciasMovilidadAcademica.jpg', 'Se invita a la comunidad académica del programa a participar de la charla brindada por los estudiantes que han realizado movilidad académica, quienes compartirán sus experiencias.');

-- --------------------------------------------------------

--
-- Table structure for table `subcategoria`
--

CREATE TABLE `subcategoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategoria`
--

INSERT INTO `subcategoria` (`id`, `nombre`, `id_categoria`) VALUES
(3, 'Presentación', 1),
(7, 'Misión, Visión y Valores', 1),
(8, 'Comité Curricular', 1),
(9, 'Calendario de Previos', 1),
(10, 'Autoevaluación', 1),
(11, 'Plan de Acción', 1),
(12, 'Docentes', 1),
(13, 'Pensum', 2),
(14, 'Electivas', 2),
(15, 'Laboratorios', 3),
(16, 'Salas de Cómputo', 3),
(17, 'Auditorio', 3),
(18, 'Software Académico', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategoria`
--
ALTER TABLE `subcategoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subcategoria`
--
ALTER TABLE `subcategoria`
  ADD CONSTRAINT `subcategoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
