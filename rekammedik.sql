-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2013 at 09:24 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rekammedik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('reza', 'bb98b1d0b523d5e783f931550d7702b6');

-- --------------------------------------------------------

--
-- Table structure for table `datapasien`
--

CREATE TABLE IF NOT EXISTS `datapasien` (
  `noKartu` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  PRIMARY KEY (`noKartu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapasien`
--

INSERT INTO `datapasien` (`noKartu`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `riwayat_penyakit`) VALUES
(1, 'Reza Maulana', 'Punge Jurong', 'Lhoksukon', '1994-03-16', 'Sakit Kepala');

-- --------------------------------------------------------

--
-- Table structure for table `datarekammedik`
--

CREATE TABLE IF NOT EXISTS `datarekammedik` (
  `noKartu` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `poli` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pemeriksaan` varchar(200) COLLATE latin1_general_ci NOT NULL,
  `resep` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `namaDokter` varchar(25) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `datarekammedik`
--

INSERT INTO `datarekammedik` (`noKartu`, `tanggal`, `poli`, `pemeriksaan`, `resep`, `namaDokter`) VALUES
(1, '2013-05-12', 'Poli Gigi', 'Sakit Gigi', 'Obat Sakit Gigi', 'Maulana'),
(1, '2013-05-15', 'Poli Umum', 'Sakit kepala', 'Obat Sakit Kepala', 'Maulana');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
