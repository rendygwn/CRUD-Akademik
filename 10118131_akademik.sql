-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 01:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10118131_akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `kd_admin` int(11) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `username` varchar(40) DEFAULT NULL,
  `password` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama`, `username`, `password`) VALUES
(1, 'Rendi Gunawan', '10118001', '12345*r'),
(2, 'Kira Maskerina', '10118005', '12345*k');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `kd_mhs` char(11) NOT NULL,
  `kd_admin` int(15) DEFAULT NULL,
  `nim` int(11) NOT NULL,
  `nama` varchar(20) DEFAULT NULL,
  `kelas` varchar(4) DEFAULT NULL,
  `jurusan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`kd_mhs`, `kd_admin`, `nim`, `nama`, `kelas`, `jurusan`) VALUES
('MHS01', NULL, 10118001, 'Rendi Gunawan', 'IF-3', 'Teknik Informatika'),
('MHS02', NULL, 10118002, 'Yudi Santinizer', 'IF-7', 'Teknik Informatika'),
('MHS03', NULL, 10118003, 'Salma Covidah', 'IF-1', 'Teknik Informatika'),
('MHS04', NULL, 10118004, 'Tira Karantina', 'SI-2', 'Sistem Informasi'),
('MHS05', NULL, 10118005, 'Kira Maskerina', 'TK-6', 'Teknik Komputer');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kd_matkul` varchar(6) NOT NULL,
  `nama_matkul` varchar(20) DEFAULT NULL,
  `sks` int(4) DEFAULT NULL,
  `semester` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kd_matkul`, `nama_matkul`, `sks`, `semester`) VALUES
('MT001', 'Basis Data', 3, 'IV'),
('MT002', 'Provis', 2, 'IV'),
('MT003', 'Sistem Operasi', 3, 'IV'),
('MT004', 'Metode Numerik', 3, 'IV'),
('MT005', 'RPL', 3, 'IV');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `kd_nilai` int(11) NOT NULL,
  `kd_mhs` char(11) DEFAULT NULL,
  `kd_matkul` varchar(6) DEFAULT NULL,
  `nilai` int(4) DEFAULT NULL,
  `indeks` varchar(15) DEFAULT NULL,
  `ket` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`kd_nilai`, `kd_mhs`, `kd_matkul`, `nilai`, `indeks`, `ket`) VALUES
(101, 'MHS01', 'MT001', 95, 'A', 'LULUS'),
(102, 'MHS02', 'MT002', 85, 'A', 'LULUS'),
(103, 'MHS03', 'MT003', 65, 'B', 'LULUS'),
(104, 'MHS04', 'MT004', 75, 'B', 'LULUS'),
(105, 'MHS05', 'MT005', 55, 'C', 'LULUS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`kd_mhs`) USING BTREE,
  ADD KEY `kd_admin` (`kd_admin`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kd_matkul`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_nilai`),
  ADD KEY `kd_matkul` (`kd_matkul`),
  ADD KEY `nim` (`kd_mhs`),
  ADD KEY `nim_2` (`kd_mhs`),
  ADD KEY `nim_3` (`kd_mhs`),
  ADD KEY `nim_4` (`kd_mhs`),
  ADD KEY `nim_5` (`kd_mhs`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kd_admin`) REFERENCES `admin` (`kd_admin`);

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`kd_matkul`) REFERENCES `matakuliah` (`kd_matkul`),
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`kd_mhs`) REFERENCES `mahasiswa` (`kd_mhs`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
