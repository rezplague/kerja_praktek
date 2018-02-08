-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2018 at 12:14 PM
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

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `tahun_ajaran`, `semester`) VALUES
('K0001', '2 A', '2017/2018', 'Ganjil'),
('K0002', '3 B', '2017/2018', 'Ganjil');

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

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_matapelajaran`, `nama_matapelajaran`, `SKBM`) VALUES
('MP001', 'Matematika', 70),
('MP002', 'Agama', 75),
('MP003', 'Bahasa Indonesia', 76),
('MP004', 'Bahasa Inggris', 65),
('MP005', 'Pendidikan Kewarganegaraan', 70),
('MP006', 'Ilmu Pengetahuan Alam', 70);

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

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_matapelajaran`, `NIS`, `UTS`, `US`, `UN`, `Keterangan`) VALUES
('MP001', '22902', 77, 75, 70, 'Baik'),
('MP002', '22902', 70, 75, 76, 'Cukup');

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
  `tugas_tambahan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidik`
--

INSERT INTO `pendidik` (`NIP`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `jabatan`, `TMT_sekolah`, `TMT_pns`, `alamat_guru`, `telp`, `tugas_tambahan`) VALUES
('195512301982121002', 'Drs. Ardi Putra', 'Padang', '1955-12-30', 'L', 'ISLAM', 'Guru', '2001-07-25', '2000-06-22', 'Jl. Gajah Mada Gang Mela Ujung No.24 Padang', '082312312322', 'Bendahara'),
('195811231991072002', 'Dra. Asmiati, MM KK', 'Pariaman', '1958-11-23', 'L', 'ISLAM', 'Wakil Kesiswaan', '2009-02-03', '2010-09-22', 'Komp. DPRD No.22 I Lapai', '23123332', 'Sekretaris'),
('195912311985031093', 'Drs. M.Ikbal', 'Palembang', '1960-12-04', 'L', 'ISLAM', 'Guru', '2006-08-10', '2001-05-02', 'Komp. Altarindo Blok B/10 Koto Tangah Padang', '99999', 'Sekretaris'),
('196909211995031002', 'Habibul Fuadi, S.Pd, M.Si', 'Surabaya', '1962-09-21', 'L', 'ISLAM', 'Guru', '2013-04-13', '2015-07-22', 'Komp. Cendana B 15 Lubuk Buaya', '1234', 'Sekretaris');

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

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `level`, `NIP`) VALUES
('user01', 'user01', 'SUPER USER', '195512301982121002'),
('user02', 'user02', 'USER', '195912311985031093');

-- --------------------------------------------------------

--
-- Table structure for table `peserta_didik`
--

CREATE TABLE `peserta_didik` (
  `NIS` char(10) NOT NULL,
  `NISN` char(10) DEFAULT NULL,
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
-- Dumping data for table `peserta_didik`
--

INSERT INTO `peserta_didik` (`NIS`, `NISN`, `nama_siswa`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_siswa`, `jenis_kelainan`, `nama_ayah`, `nama_ibu`) VALUES
('22902', '123123123', 'Adela Harimartini Putri', 'Subang', '1999-08-01', 'P', 'ISLAM', 'Kayu Kalek No. 43', 'A', 'Hariman Z', 'Trintiani'),
('22903', NULL, 'Adytia Pratama', 'Lampung', '2018-02-01', 'L', 'HINDU', 'Gurun Laweh Lubug Begalung', 'B', 'Musrizal', 'Afriyeni'),
('22904', NULL, 'Adzalia Fitri Annisa', 'Jakarta', '1999-06-22', 'P', 'ISLAM', 'Komp. Lubuk Gading Permai III C/2', 'A', 'Alfurqan', 'Daswita');

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
