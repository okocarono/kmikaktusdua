-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 08:45 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kmikaktus`
--

-- --------------------------------------------------------

--
-- Table structure for table `aksesoris`
--

CREATE TABLE `aksesoris` (
  `kode_aksesoris` char(5) NOT NULL,
  `nama` varchar(40) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `id_penjual` int(1) NOT NULL,
  `jenis_aksesoris` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `kode_artikel` char(5) NOT NULL,
  `judul` varchar(60) DEFAULT NULL,
  `isi` text,
  `gambar` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beli_aksesoris`
--

CREATE TABLE `beli_aksesoris` (
  `kode_pesanan` char(5) NOT NULL,
  `kode_aksesoris` char(5) DEFAULT NULL,
  `id_pembeli` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beli_paket`
--

CREATE TABLE `beli_paket` (
  `kode_pesanan` char(5) NOT NULL,
  `kode_paket` char(5) DEFAULT NULL,
  `id_pembeli` char(5) NOT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `beli_tanaman`
--

CREATE TABLE `beli_tanaman` (
  `kode_pesanan` char(5) NOT NULL,
  `id_pembeli` char(5) NOT NULL,
  `kode_tanaman` char(5) DEFAULT NULL,
  `total_harga` int(10) DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `tanggal_beli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `kode_paket` char(5) NOT NULL,
  `nama_paket` varchar(45) DEFAULT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `id_penjual` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` char(5) NOT NULL,
  `nama_pembeli` varchar(40) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(15) DEFAULT NULL,
  `kabupaten` varchar(15) DEFAULT NULL,
  `propinsi` varchar(15) DEFAULT NULL,
  `alamatlengkap` varchar(50) DEFAULT NULL,
  `catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `id_penjual` int(1) NOT NULL,
  `nama_penjual` varchar(40) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanaman`
--

CREATE TABLE `tanaman` (
  `kode_tanaman` char(5) NOT NULL,
  `id_penjual` int(11) NOT NULL,
  `nama_tanaman` varchar(45) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(3) DEFAULT NULL,
  `diameter` int(3) DEFAULT NULL,
  `tinggi` int(3) DEFAULT NULL,
  `bobot` int(3) DEFAULT NULL,
  `gambar` varchar(35) DEFAULT NULL,
  `jenis_tanaman` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD PRIMARY KEY (`kode_aksesoris`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`kode_artikel`);

--
-- Indexes for table `beli_aksesoris`
--
ALTER TABLE `beli_aksesoris`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `kode_aksesoris` (`kode_aksesoris`,`id_pembeli`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `beli_paket`
--
ALTER TABLE `beli_paket`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `kode_paket` (`kode_paket`),
  ADD KEY `id_pembeli` (`id_pembeli`);

--
-- Indexes for table `beli_tanaman`
--
ALTER TABLE `beli_tanaman`
  ADD PRIMARY KEY (`kode_pesanan`),
  ADD KEY `id_pembeli` (`id_pembeli`,`kode_tanaman`),
  ADD KEY `kode_tanaman` (`kode_tanaman`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`kode_paket`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`id_penjual`);

--
-- Indexes for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD PRIMARY KEY (`kode_tanaman`),
  ADD KEY `id_penjual` (`id_penjual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tanaman`
--
ALTER TABLE `tanaman`
  MODIFY `id_penjual` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aksesoris`
--
ALTER TABLE `aksesoris`
  ADD CONSTRAINT `aksesoris_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `beli_aksesoris`
--
ALTER TABLE `beli_aksesoris`
  ADD CONSTRAINT `beli_aksesoris_ibfk_1` FOREIGN KEY (`kode_aksesoris`) REFERENCES `aksesoris` (`kode_aksesoris`),
  ADD CONSTRAINT `beli_aksesoris_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `beli_paket`
--
ALTER TABLE `beli_paket`
  ADD CONSTRAINT `beli_paket_ibfk_1` FOREIGN KEY (`kode_paket`) REFERENCES `paket` (`kode_paket`),
  ADD CONSTRAINT `beli_paket_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `beli_tanaman`
--
ALTER TABLE `beli_tanaman`
  ADD CONSTRAINT `beli_tanaman_ibfk_1` FOREIGN KEY (`kode_tanaman`) REFERENCES `tanaman` (`kode_tanaman`),
  ADD CONSTRAINT `beli_tanaman_ibfk_2` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`);

--
-- Constraints for table `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);

--
-- Constraints for table `tanaman`
--
ALTER TABLE `tanaman`
  ADD CONSTRAINT `tanaman_ibfk_1` FOREIGN KEY (`id_penjual`) REFERENCES `penjual` (`id_penjual`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
