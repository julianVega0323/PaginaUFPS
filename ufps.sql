-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 09:04 PM
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
CREATE DATABASE IF NOT EXISTS `comercio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `comercio`;

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
(1, 'Julian Pasa AyD', '2019-05-07'),
(2, 'Julian Pasa Arquitectura', '2019-05-08');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `novedad`
--
ALTER TABLE `novedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
