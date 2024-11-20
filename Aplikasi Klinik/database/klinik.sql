-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 12:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `no_dokter` varchar(20) NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`no_dokter`, `nama_dokter`, `spesialis`, `alamat`, `no_telp`) VALUES
('1', 'Siti Khofinah', 'Penyakit Dalam', 'Jakarta', '2331414141'),
('2', 'Kevin Risky Setiawan', 'Penyakit Dalam', 'Ciracas', '0987263343');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `nama_pasien` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `umur` varchar(3) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`nama_pasien`, `username`, `password`, `jk`, `umur`, `alamat`, `no_telp`, `hak_akses`) VALUES
('Aldi', 'Aldi', 'aldi', 'Laki-laki', '18', 'Bumi', '081387278461', 0),
('Budiman', '', '', 'Laki-laki', '', 'Jakarta', '123456789', 0),
('doni', 'test', 'test', 'laki-laki', '12', 'Jaka', '12', 1),
('Fahmi', '', '', 'Laki-laki', '', 'Ciracas', '0989876543', 0),
('jeki', 'jeki', 'jeki', 'Laki-laki', '34', 'fefe', '7654321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rkmedis`
--

CREATE TABLE `rkmedis` (
  `no_rek` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `tgl_kunjung` date NOT NULL,
  `nama_dokter` varchar(20) NOT NULL,
  `keluhan` varchar(50) NOT NULL,
  `diagnosis` varchar(50) NOT NULL,
  `terapi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rkmedis`
--

INSERT INTO `rkmedis` (`no_rek`, `nama_pasien`, `tgl_kunjung`, `nama_dokter`, `keluhan`, `diagnosis`, `terapi`) VALUES
('123', 'Fahmi', '2024-11-08', 'Kevin Risky Setiawan', 'Sakit', 'Sakit', 'Sakit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`no_dokter`),
  ADD UNIQUE KEY `nama_dokter` (`nama_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD UNIQUE KEY `nama_pasien` (`nama_pasien`);

--
-- Indexes for table `rkmedis`
--
ALTER TABLE `rkmedis`
  ADD PRIMARY KEY (`no_rek`),
  ADD UNIQUE KEY `no_dokter` (`nama_dokter`),
  ADD UNIQUE KEY `nama_dokter` (`nama_dokter`),
  ADD KEY `k_pasien` (`nama_pasien`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rkmedis`
--
ALTER TABLE `rkmedis`
  ADD CONSTRAINT `k_dokter` FOREIGN KEY (`nama_dokter`) REFERENCES `dokter` (`nama_dokter`),
  ADD CONSTRAINT `k_pasien` FOREIGN KEY (`nama_pasien`) REFERENCES `pasien` (`nama_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
