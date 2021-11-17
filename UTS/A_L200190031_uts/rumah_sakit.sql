-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 07:57 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah_sakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(55) NOT NULL,
  `nama_dokter` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`) VALUES
(22, 'Dr.Bambang'),
(33, 'Dr.Christy'),
(11, 'Dr.Sucipto');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(55) NOT NULL,
  `no_ktp` int(55) NOT NULL,
  `nama_pasien` varchar(55) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `tanggal_lahir` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `nohp` int(55) NOT NULL,
  `agama` varchar(55) NOT NULL,
  `keluhan` varchar(55) NOT NULL,
  `nama_dokter` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_ktp`, `nama_pasien`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `nohp`, `agama`, `keluhan`, `nama_dokter`) VALUES
(1, 123, 'Daffa', 'Laki-Laki', '29/10/2000', 'Sukoharjo', 8591234, 'Islam', 'Meriang', 'Dr.Sucipto'),
(2, 456, 'Rey', 'Laki-Laki', '20/11/2001', 'Klaten', 8595678, 'Islam', 'Mual', 'Dr.Bambang'),
(3, 789, 'Lala', 'Perempuan', '03/12/1999', 'Surakarta', 8591122, 'Kristen', 'Muntah Darah', 'Dr.Christy'),
(4, 100, 'Supriyadi', 'laki-laki', '11/11/1991', 'Kartasura', 8595543, 'Kristen', 'Sakit Kepala', 'Dr.Bambang');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(55) NOT NULL,
  `id_dokter` int(55) NOT NULL,
  `id_pasien` int(55) NOT NULL,
  `id_ruang` int(55) NOT NULL,
  `diagnosa_penyakit` varchar(55) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_dokter`, `id_pasien`, `id_ruang`, `diagnosa_penyakit`, `tgl_masuk`, `tgl_keluar`) VALUES
(101, 11, 1, 100, 'Demam Tinggi', '2021-11-02', '2021-11-17'),
(102, 22, 2, 200, 'Maag Akut', '2021-11-05', '2021-11-06'),
(103, 33, 3, 300, 'TBC', '2021-11-01', '2021-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(55) NOT NULL,
  `nama_ruang` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`) VALUES
(100, 'Mawar'),
(200, 'Anggrek'),
(300, 'Kenanga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD UNIQUE KEY `nama_dokter` (`nama_dokter`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD KEY `nama_dokter` (`nama_dokter`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pasien`
--
ALTER TABLE `pasien`
  ADD CONSTRAINT `pasien_ibfk_1` FOREIGN KEY (`nama_dokter`) REFERENCES `dokter` (`nama_dokter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
