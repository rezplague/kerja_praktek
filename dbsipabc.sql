-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2018 at 11:08 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsipabc`
--

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` char(5) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `tahun_ajaran` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_matapelajaran`
--

CREATE TABLE `kelas_matapelajaran` (
  `id_kelas` char(5) NOT NULL,
  `id_matapelajaran` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_pendidik`
--

CREATE TABLE `kelas_pendidik` (
  `id_kelas` char(5) NOT NULL,
  `NIP` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_peserta_didik`
--

CREATE TABLE `kelas_peserta_didik` (
  `NIS` char(10) NOT NULL,
  `id_kelas` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_matapelajaran` char(5) NOT NULL,
  `nama_matapelajaran` varchar(30) NOT NULL,
  `SKBM` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_matapelajaran` char(5) NOT NULL,
  `NIS` char(10) NOT NULL,
  `UTS` int(3) DEFAULT NULL,
  `US` int(3) DEFAULT NULL,
  `UN` int(3) DEFAULT NULL,
  `Keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendidik`
--

CREATE TABLE `pendidik` (
  `NIP` char(18) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDDHA','KONG HU CU') NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `TMT_sekolah` date NOT NULL,
  `TMT_pns` date NOT NULL,
  `alamat_guru` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `tugas_tambahan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  `level` enum('USER','SUPER USER') NOT NULL,
  `NIP` char(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peserta_didik`
--

CREATE TABLE `peserta_didik` (
  `NIS` char(10) NOT NULL,
  `NISN` char(10) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `agama` enum('ISLAM','KRISTEN','KATOLIK','HINDU','BUDDHA','KONG HU CU') NOT NULL,
  `alamat_siswa` varchar(50) NOT NULL,
  `jenis_kelainan` enum('A','B','C','AUTIS') NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kelas_matapelajaran`
--
ALTER TABLE `kelas_matapelajaran`
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_matapelajaran` (`id_matapelajaran`);

--
-- Indexes for table `kelas_pendidik`
--
ALTER TABLE `kelas_pendidik`
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `kelas_peserta_didik`
--
ALTER TABLE `kelas_peserta_didik`
  ADD KEY `NIS` (`NIS`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_matapelajaran`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `id_matapelajaran` (`id_matapelajaran`),
  ADD KEY `NIS` (`NIS`);

--
-- Indexes for table `pendidik`
--
ALTER TABLE `pendidik`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `peserta_didik`
--
ALTER TABLE `peserta_didik`
  ADD PRIMARY KEY (`NIS`),
  ADD UNIQUE KEY `NISN` (`NISN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas_matapelajaran`
--
ALTER TABLE `kelas_matapelajaran`
  ADD CONSTRAINT `kelas_matapelajaran_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_matapelajaran_ibfk_2` FOREIGN KEY (`id_matapelajaran`) REFERENCES `mata_pelajaran` (`id_matapelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas_pendidik`
--
ALTER TABLE `kelas_pendidik`
  ADD CONSTRAINT `kelas_pendidik_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pendidik` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_pendidik_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas_peserta_didik`
--
ALTER TABLE `kelas_peserta_didik`
  ADD CONSTRAINT `kelas_peserta_didik_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_peserta_didik_ibfk_2` FOREIGN KEY (`NIS`) REFERENCES `peserta_didik` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `peserta_didik` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_matapelajaran`) REFERENCES `mata_pelajaran` (`id_matapelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `pendidik` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
