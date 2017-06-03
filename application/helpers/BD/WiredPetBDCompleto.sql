-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 03, 2017 at 07:40 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiredpet`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopcion`
--

CREATE TABLE `adopcion` (
  `idADOPCION` int(11) NOT NULL,
  `DetalleAdopcion` varchar(45) DEFAULT NULL,
  `Instance` date DEFAULT NULL,
  `idMASCOTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

CREATE TABLE `citas` (
  `idCITAS` int(11) NOT NULL,
  `Descripcion` varchar(300) DEFAULT NULL,
  `Instancia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `idCOMENTARIO` int(11) NOT NULL,
  `Instancia` date DEFAULT NULL,
  `Descripcion` varchar(400) DEFAULT NULL,
  `idPUBLICACION` int(11) DEFAULT NULL,
  `idVALORACIONES` int(11) DEFAULT NULL,
  `idMASCOTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmaradopcion`
--

CREATE TABLE `confirmaradopcion` (
  `idADOPCION` int(11) DEFAULT NULL,
  `idUSUARIOS` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `confirmarcita`
--

CREATE TABLE `confirmarcita` (
  `idCITAS` int(11) DEFAULT NULL,
  `idMASCOTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `idLOGIN` int(11) NOT NULL,
  `idUSUARIOS` int(11) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Clave` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`idLOGIN`, `idUSUARIOS`, `Usuario`, `Clave`) VALUES
(2, NULL, 'jerovolvio', '5e006f4a47cfff2ecd68a5e2c144503c'),
(3, NULL, 'gaby1994', '2893e5aa4cae4972f62a4c0454a0a521'),
(4, NULL, 'dani_piola', '44e7afc0943b18930d0a81fc7ebb5e9d'),
(5, NULL, 'sebaf', '28a666762f5c6fd09fedbdf7fecb2e1e'),
(6, NULL, 'patotrica', '6210325f74de822244cb118f84aea1da');

-- --------------------------------------------------------

--
-- Table structure for table `mascota`
--

CREATE TABLE `mascota` (
  `idMASCOTA` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Tamaño` varchar(45) DEFAULT NULL,
  `idTIPOMASCOTA` int(11) DEFAULT NULL,
  `idRAZA` int(11) DEFAULT NULL,
  `idTAMAÑO` int(11) DEFAULT NULL,
  `idUSUARIO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `publicacion`
--

CREATE TABLE `publicacion` (
  `idPUBLICACION` int(11) NOT NULL,
  `Instancia` date DEFAULT NULL,
  `Descripcion` varchar(400) DEFAULT NULL,
  `idMASCOTA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `raza`
--

CREATE TABLE `raza` (
  `idRAZA` int(11) NOT NULL,
  `idUSUARIOS` int(11) DEFAULT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Clave` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tamaño`
--

CREATE TABLE `tamaño` (
  `idTAMAÑO` int(11) NOT NULL,
  `NombreTamaño` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tipomascota`
--

CREATE TABLE `tipomascota` (
  `idTIPOMASCOTA` int(11) NOT NULL,
  `NombreTipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUSUARIOS` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellido` varchar(45) DEFAULT NULL,
  `Coordenadas` varchar(45) DEFAULT NULL,
  `Mail` varchar(45) DEFAULT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `FechaNac` varchar(45) DEFAULT NULL,
  `Domicilio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUSUARIOS`, `Nombre`, `Apellido`, `Coordenadas`, `Mail`, `Telefono`, `Sexo`, `FechaNac`, `Domicilio`) VALUES
(2, 'Jeronimo', 'Tricarico', NULL, 'jerotrica@gmail.com', '1158494235', 'Masculino', '05/30/2017', 'Albariños, 2554'),
(3, 'Gabriela', 'Onorato', NULL, 'aluonorato@hotmail.com', '39459745', 'Femenino', '02/18/1994', 'Río negro 725'),
(4, 'Daniel', 'Jarc', NULL, 'danielhyn@hotmail.com', '42446698', 'Masculino', '01/01/1980', 'Don Bosco 472, Haedo'),
(5, 'Sebastian', 'Fernandez', NULL, 'sfa@hotmail.com', '1142406243', 'Masculino', '05/27/1993', 'Ituzaingo 1292'),
(6, 'Patricia', 'Tricarico', NULL, 'patotrica@hotmail.com', '4246101', 'Femenino', '03/11/1957', 'Albariños, 2554');

-- --------------------------------------------------------

--
-- Table structure for table `valoraciones`
--

CREATE TABLE `valoraciones` (
  `idVALORACIONES` int(11) NOT NULL,
  `TipoValoracion` varchar(30) DEFAULT NULL,
  `Instancia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopcion`
--
ALTER TABLE `adopcion`
  ADD PRIMARY KEY (`idADOPCION`),
  ADD KEY `idMASCOTA` (`idMASCOTA`);

--
-- Indexes for table `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCITAS`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idCOMENTARIO`),
  ADD KEY `idPUBLICACION` (`idPUBLICACION`),
  ADD KEY `idVALORACIONES` (`idVALORACIONES`),
  ADD KEY `idMASCOTA` (`idMASCOTA`);

--
-- Indexes for table `confirmaradopcion`
--
ALTER TABLE `confirmaradopcion`
  ADD KEY `idADOPCION` (`idADOPCION`),
  ADD KEY `idUSUARIOS` (`idUSUARIOS`);

--
-- Indexes for table `confirmarcita`
--
ALTER TABLE `confirmarcita`
  ADD KEY `idCITAS` (`idCITAS`),
  ADD KEY `idMASCOTA` (`idMASCOTA`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`idLOGIN`),
  ADD KEY `idUSUARIOS` (`idUSUARIOS`);

--
-- Indexes for table `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idMASCOTA`),
  ADD KEY `idTIPOMASCOTA` (`idTIPOMASCOTA`),
  ADD KEY `idRAZA` (`idRAZA`),
  ADD KEY `idTAMAÑO` (`idTAMAÑO`),
  ADD KEY `idUSUARIO` (`idUSUARIO`);

--
-- Indexes for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`idPUBLICACION`),
  ADD KEY `idMASCOTA` (`idMASCOTA`);

--
-- Indexes for table `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`idRAZA`),
  ADD KEY `idUSUARIOS` (`idUSUARIOS`);

--
-- Indexes for table `tamaño`
--
ALTER TABLE `tamaño`
  ADD PRIMARY KEY (`idTAMAÑO`);

--
-- Indexes for table `tipomascota`
--
ALTER TABLE `tipomascota`
  ADD PRIMARY KEY (`idTIPOMASCOTA`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUSUARIOS`);

--
-- Indexes for table `valoraciones`
--
ALTER TABLE `valoraciones`
  ADD PRIMARY KEY (`idVALORACIONES`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopcion`
--
ALTER TABLE `adopcion`
  MODIFY `idADOPCION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `citas`
--
ALTER TABLE `citas`
  MODIFY `idCITAS` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idCOMENTARIO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `idLOGIN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idMASCOTA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `idPUBLICACION` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `raza`
--
ALTER TABLE `raza`
  MODIFY `idRAZA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tamaño`
--
ALTER TABLE `tamaño`
  MODIFY `idTAMAÑO` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipomascota`
--
ALTER TABLE `tipomascota`
  MODIFY `idTIPOMASCOTA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUSUARIOS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `valoraciones`
--
ALTER TABLE `valoraciones`
  MODIFY `idVALORACIONES` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `adopcion`
--
ALTER TABLE `adopcion`
  ADD CONSTRAINT `adopcion_ibfk_1` FOREIGN KEY (`idMASCOTA`) REFERENCES `mascota` (`idMASCOTA`);

--
-- Constraints for table `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`idPUBLICACION`) REFERENCES `publicacion` (`idPUBLICACION`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`idVALORACIONES`) REFERENCES `valoraciones` (`idVALORACIONES`),
  ADD CONSTRAINT `comentario_ibfk_3` FOREIGN KEY (`idMASCOTA`) REFERENCES `mascota` (`idMASCOTA`);

--
-- Constraints for table `confirmaradopcion`
--
ALTER TABLE `confirmaradopcion`
  ADD CONSTRAINT `confirmaradopcion_ibfk_1` FOREIGN KEY (`idADOPCION`) REFERENCES `adopcion` (`idADOPCION`),
  ADD CONSTRAINT `confirmaradopcion_ibfk_2` FOREIGN KEY (`idUSUARIOS`) REFERENCES `usuarios` (`idUSUARIOS`);

--
-- Constraints for table `confirmarcita`
--
ALTER TABLE `confirmarcita`
  ADD CONSTRAINT `confirmarcita_ibfk_1` FOREIGN KEY (`idCITAS`) REFERENCES `citas` (`idCITAS`),
  ADD CONSTRAINT `confirmarcita_ibfk_2` FOREIGN KEY (`idMASCOTA`) REFERENCES `mascota` (`idMASCOTA`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`idUSUARIOS`) REFERENCES `usuarios` (`idUSUARIOS`);

--
-- Constraints for table `mascota`
--
ALTER TABLE `mascota`
  ADD CONSTRAINT `mascota_ibfk_1` FOREIGN KEY (`idTIPOMASCOTA`) REFERENCES `tipomascota` (`idTIPOMASCOTA`),
  ADD CONSTRAINT `mascota_ibfk_2` FOREIGN KEY (`idRAZA`) REFERENCES `raza` (`idRAZA`),
  ADD CONSTRAINT `mascota_ibfk_3` FOREIGN KEY (`idTAMAÑO`) REFERENCES `tamaño` (`idTAMAÑO`),
  ADD CONSTRAINT `mascota_ibfk_4` FOREIGN KEY (`idUSUARIO`) REFERENCES `usuarios` (`idUSUARIOS`);

--
-- Constraints for table `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`idMASCOTA`) REFERENCES `mascota` (`idMASCOTA`);

--
-- Constraints for table `raza`
--
ALTER TABLE `raza`
  ADD CONSTRAINT `raza_ibfk_1` FOREIGN KEY (`idUSUARIOS`) REFERENCES `usuarios` (`idUSUARIOS`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
