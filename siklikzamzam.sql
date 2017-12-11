-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 02:43 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siklikzamzam`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `no_telpon_dokter` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `no_telpon_dokter`) VALUES
(1, 'Mulki Fadhillah', 8201820),
(2, 'Haryo Susetyo', 81283812);

-- --------------------------------------------------------

--
-- Table structure for table `informasi_pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `informasi_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `nama_pemeriksaan` varchar(50) NOT NULL,
  `biaya_klinik` int(7) NOT NULL,
  `biaya_dokter` int(7) NOT NULL,
  `biaya_administrasi` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi_pemeriksaan`
--

INSERT INTO `informasi_pemeriksaan` (`id_pemeriksaan`, `nama_pemeriksaan`, `biaya_klinik`, `biaya_dokter`, `biaya_administrasi`) VALUES
(1, 'dokter_umum', 50000, 50000, 5000),
(2, 'nebulizer', 80000, 50000, 5000),
(3, 'khitan', 40000, 40000, 10000),
(4, 'bedah', 50000, 50000, 5000),
(5, 'cek_gula', 10000, 10000, 2000),
(6, 'kb', 20000, 20000, 2000),
(7, 'vitamin', 3000, 3000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(30) NOT NULL,
  `stok_obat` int(5) NOT NULL,
  `harga_beli_obat` int(7) NOT NULL,
  `harga_jual_obat` int(7) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `stok_obat`, `harga_beli_obat`, `harga_jual_obat`) VALUES
(6, 'Paracetamol', 50, 2000, 2500),
(7, 'Panadol', 50, 3000, 4000),
(8, 'Konidin', 20, 2000, 3000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `golongan_darah` varchar(2) NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tensi_darah` varchar(7) NOT NULL,
  `alamat` text NOT NULL,
  `no_telpon` int(15) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `golongan_darah`, `umur`, `jenis_kelamin`, `tensi_darah`, `alamat`, `no_telpon`, `tanggal_daftar`) VALUES
(1, 'Hafidz', 'O', 20, 'L', '120/80', 'Bogor', 8281823, '2017-12-08 10:28:27'),
(3, 'Rizky', 'A', 18, 'L', '130/90', 'Laladon', 85182831, '2017-11-15 10:28:27'),
(4, 'Mawar', 'AB', 30, 'P', '128/60', 'Cibinong', 878881818, '2017-12-08 10:28:27'),
(5, 'Budi', 'B', 21, 'L', '132/55', 'Cibanteng', 818218128, '2017-10-16 10:28:27'),
(6, 'Yudha Prasetya', 'B', 18, 'L', '120/80', 'bogor', 818218128, '2017-12-08 10:28:27');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `no_transaksi` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `tanggal_pembayan` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `biaya_administrasi` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `id_rekam` int(50) NOT NULL,
  `tanggal` date NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `id_obat` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`id_rekam`, `tanggal`, `id_pasien`, `keluhan`, `diagnosa`, `id_obat`, `id_pemeriksaan`, `id_dokter`) VALUES
(1, '2017-12-08', 3, 'dawdawdawd', 'awdawdawd', 6, 1, 1),
(2, '2017-12-06', 3, 'adwadaw', 'dawdad', 8, 5, 1),
(3, '2017-12-03', 4, 'afefef', 'wefwefwef', 6, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `resep_obat`
--

CREATE TABLE IF NOT EXISTS `resep_obat` (
  `id_resep` int(11) NOT NULL,
  `id_rekam` int(10) NOT NULL,
  `id_obat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_logout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `last_login`, `last_logout`) VALUES
(1, 'admin', 'iniadmin', '2017-12-11 09:31:49', '2017-12-10 16:36:16'),
(2, 'siti', 'inisiti', '2017-12-11 13:14:16', '2017-12-11 13:14:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `informasi_pemeriksaan`
--
ALTER TABLE `informasi_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`no_transaksi`);

--
-- Indexes for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD PRIMARY KEY (`id_rekam`);

--
-- Indexes for table `resep_obat`
--
ALTER TABLE `resep_obat`
  ADD PRIMARY KEY (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `informasi_pemeriksaan`
--
ALTER TABLE `informasi_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `no_transaksi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  MODIFY `id_rekam` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resep_obat`
--
ALTER TABLE `resep_obat`
  MODIFY `id_resep` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
