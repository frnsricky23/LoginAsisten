-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 06:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `asisten`
--

CREATE TABLE `asisten` (
  `NIM` varchar(9) NOT NULL,
  `NAMA` varchar(50) NOT NULL,
  `PRAKTIKUM` varchar(50) NOT NULL,
  `IPK` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asisten`
--

INSERT INTO `asisten` (`NIM`, `NAMA`, `PRAKTIKUM`, `IPK`) VALUES
('195314058', 'BERNADETHA MEGA DEVINA AYUNINGTYAS', 'Pembelajaran Mesin', '3.12'),
('215314001', 'DEONISIUS AMADEUS FEBRIAN SARDJANANTO', 'Rekayasa Perangkat Lunak', '3.50'),
('215314002', 'WENRY MANGIHUT PURBA', 'Pemrograman Berbasis Platform ', '3.02'),
('215314003', 'RANGGA TRI NUGROHO', 'Struktur Data Linear', '3.30'),
('215314004', 'GERARDUS KRISTHA BAYU INDRAPUTRA', 'Pembelajaran Mesin', '3.80'),
('215314005', 'DOMINICO SAVIO AMADIS FEBRIAN SARDJANANTO', 'Rekayasa Perangkat Lunak', '3.40'),
('215314006', 'FAJAR AL NAJIIM', 'Struktur Data Linear', '3.10'),
('215314007', 'ALEXANDER ADMA KARYADI', 'Pemrograman Berbasis Platform', '3.30'),
('215314009', 'MAXIMUS SIMON WERANG', 'Struktur Data Linear', '3.25'),
('215314010', 'SIRILUS ESPIANTO WILLY WASKITO', 'Pembelajaran Mesin', '3.60'),
('215314122', 'ANGELIN KRISTINA', 'Pemrograman Berbasis Platform', '4.00'),
('215314127', 'FRANSISKUS RICKY HENDARTO', 'Pemrograman Berbasis Platform', '4.00');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(15) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asisten`
--
ALTER TABLE `asisten`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`password`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
