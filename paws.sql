-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2018 at 09:04 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paws`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_urutan` varchar(10) NOT NULL,
  `hrg_total` varchar(50) NOT NULL,
  `total_poin` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dikelola`
--

CREATE TABLE `dikelola` (
  `id_member` varchar(50) NOT NULL,
  `id_urutan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grooming`
--

CREATE TABLE `grooming` (
  `no_urut` varchar(10) NOT NULL,
  `nm_paws` varchar(50) NOT NULL,
  `jns_grooming` varchar(50) NOT NULL,
  `hrg_grooming` varchar(50) NOT NULL,
  `tgl_msk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ingin`
--

CREATE TABLE `ingin` (
  `id_member` varchar(50) NOT NULL,
  `no_kamar` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `melakukan`
--

CREATE TABLE `melakukan` (
  `id_member` varchar(50) NOT NULL,
  `no_urut` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` varchar(50) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `poin` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penginapan`
--

CREATE TABLE `penginapan` (
  `no_kamar` varchar(10) NOT NULL,
  `jlh_hari` int(3) NOT NULL,
  `nama_paws` varchar(50) NOT NULL,
  `hrg_inap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_member` varchar(50) NOT NULL,
  `id_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id_barang` varchar(20) NOT NULL,
  `jns_barang` varchar(50) NOT NULL,
  `stock` varchar(3) NOT NULL,
  `hrg_barang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_urutan`);

--
-- Indexes for table `dikelola`
--
ALTER TABLE `dikelola`
  ADD KEY `fk_member` (`id_member`),
  ADD KEY `fk_id_urutan` (`id_urutan`);

--
-- Indexes for table `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`no_urut`);

--
-- Indexes for table `ingin`
--
ALTER TABLE `ingin`
  ADD KEY `fk_id_member` (`id_member`),
  ADD KEY `fk_no_kamar` (`no_kamar`);

--
-- Indexes for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD KEY `id_member_fk` (`id_member`),
  ADD KEY `fk_no_urut` (`no_urut`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD KEY `fk_member_id` (`id_member`),
  ADD KEY `fk_id_barang` (`id_barang`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id_barang`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dikelola`
--
ALTER TABLE `dikelola`
  ADD CONSTRAINT `fk_id_urutan` FOREIGN KEY (`id_urutan`) REFERENCES `admin` (`id_urutan`),
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `ingin`
--
ALTER TABLE `ingin`
  ADD CONSTRAINT `fk_id_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`),
  ADD CONSTRAINT `fk_no_kamar` FOREIGN KEY (`no_kamar`) REFERENCES `penginapan` (`no_kamar`);

--
-- Constraints for table `melakukan`
--
ALTER TABLE `melakukan`
  ADD CONSTRAINT `fk_no_urut` FOREIGN KEY (`no_urut`) REFERENCES `grooming` (`no_urut`),
  ADD CONSTRAINT `id_member_fk` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `fk_id_barang` FOREIGN KEY (`id_barang`) REFERENCES `storage` (`id_barang`),
  ADD CONSTRAINT `fk_member_id` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
