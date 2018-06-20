-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jun 2018 pada 20.06
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_urutan` varchar(10) NOT NULL,
  `hrg_total` varchar(50) NOT NULL,
  `total_poin` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookgrooming`
--

CREATE TABLE `bookgrooming` (
  `username` varchar(50) NOT NULL,
  `jns_grooming` varchar(50) NOT NULL,
  `harga` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `pets` varchar(2) NOT NULL,
  `id_book` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bookgrooming`
--

INSERT INTO `bookgrooming` (`username`, `jns_grooming`, `harga`, `date`, `time`, `pets`, `id_book`) VALUES
('', '', 0, '0000-00-00', '00:00:00', '', 1),
('', 'Sisir|33000', 0, '2018-06-21', '11:30:00', 'ju', 2),
('', 'Shampoo|65000', 0, '2018-06-27', '14:30:00', '3', 3),
('', 'Sisir|33000', 33000, '2018-06-26', '00:12:00', '1', 4),
('', 'Sisir Kawat', 25000, '2018-06-22', '14:30:00', '2', 5),
('', 'Gunting Kuku', 26000, '2018-06-22', '13:30:00', '1', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookhotel`
--

CREATE TABLE `bookhotel` (
  `username` varchar(50) NOT NULL,
  `cek_in` date NOT NULL,
  `wktu_cekin` time NOT NULL,
  `cek_out` date NOT NULL,
  `wktu_cekout` time NOT NULL,
  `waktu` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `pets` varchar(5) NOT NULL,
  `id_booking` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bookhotel`
--

INSERT INTO `bookhotel` (`username`, `cek_in`, `wktu_cekin`, `cek_out`, `wktu_cekout`, `waktu`, `harga`, `pets`, `id_booking`) VALUES
('', '2018-06-21', '22:30:00', '2018-06-27', '12:50:00', 0, 0, '2', 1),
('', '2018-06-07', '21:33:00', '2018-06-13', '23:55:00', 526920, 300000, '1', 2),
('', '2018-06-05', '15:12:00', '2018-06-07', '16:17:00', 176700, 100000, '1', 3),
('', '2018-06-22', '11:30:00', '2018-06-22', '16:30:00', 18000, 0, '1', 4),
('', '2018-06-21', '12:30:00', '2018-06-22', '12:30:00', 86400, 50000, '1', 5),
('', '2018-06-21', '07:00:00', '2018-06-21', '16:00:00', 32400, 450000, '1', 6),
('', '2018-06-21', '07:00:00', '2018-06-21', '09:00:00', 7200, 10000, '1', 7),
('', '2018-06-22', '12:00:00', '2018-06-22', '12:00:00', 0, 0, '1', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dikelola`
--

CREATE TABLE `dikelola` (
  `id_member` varchar(50) NOT NULL,
  `id_urutan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `grooming`
--

CREATE TABLE `grooming` (
  `no_urut` int(10) NOT NULL,
  `jns_grooming` varchar(50) NOT NULL,
  `hrg_grooming` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `grooming`
--

INSERT INTO `grooming` (`no_urut`, `jns_grooming`, `hrg_grooming`) VALUES
(1, 'Sisir', 33000),
(2, 'Shampoo', 65000),
(3, 'Pengering Bulu', 325000),
(4, 'Sisir Kawat', 25000),
(5, 'Gunting Kuku', 26000),
(6, 'Kikir dan Gunting Kuku', 110000),
(7, 'Cukur Bulu', 299000),
(8, 'Cukur Bulu Elektrik', 120000),
(9, 'Sisir Sarung Tangan Bulu Rontok', 59000),
(10, 'Shampoo Anti Kutu', 60000),
(11, 'Sisir Mandi Kucing', 23000),
(12, 'Sisir Kutu', 60000),
(13, 'Paket A (Basic Grooming)', 30000),
(14, 'Paket B (Full Grooming)', 80000),
(15, 'Paket C (Mandi Obat/Obat Kutu)', 50000),
(16, 'Paket D (Cukur Botak)', 85000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `poin` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`username`, `nama`, `no_hp`, `email`, `password`, `poin`) VALUES
('aamel', 'amel', '', 'amaliaulfa225@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('amaliau', 'amalia ulfa', '', 'amalia@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('amel', 'amaliaulfa', '', 'amel@mhs.unsyiah.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('amelia', 'amel', '', 'amaliaulfa225@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('faris', 'Faris', '', 'thk@trrt', '202cb962ac59075b964b07152d234b70', NULL),
('ma/aq', 'malaq', '', 'malaq@mhs.unsyiah.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('malaq', 'malaq aimana', '', 'malaq@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('salifah', 'siti alifah', '', 'alifah@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('sayanya', 'saya', '', 'malaq@mhs.unsyiah.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', NULL),
('tyass', 'tya', '', 'tya@mhs.unsyiah.ac.id', '827ccb0eea8a706c4c34a16891f84e7b', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `no_kamar` varchar(10) NOT NULL,
  `jlh_hari` int(3) NOT NULL,
  `nama_paws` varchar(50) NOT NULL,
  `hrg_inap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `storage`
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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_urutan`);

--
-- Indeks untuk tabel `bookgrooming`
--
ALTER TABLE `bookgrooming`
  ADD PRIMARY KEY (`id_book`);

--
-- Indeks untuk tabel `bookhotel`
--
ALTER TABLE `bookhotel`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indeks untuk tabel `dikelola`
--
ALTER TABLE `dikelola`
  ADD KEY `fk_member` (`id_member`),
  ADD KEY `fk_id_urutan` (`id_urutan`);

--
-- Indeks untuk tabel `grooming`
--
ALTER TABLE `grooming`
  ADD PRIMARY KEY (`no_urut`),
  ADD UNIQUE KEY `no_urut` (`no_urut`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indeks untuk tabel `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bookgrooming`
--
ALTER TABLE `bookgrooming`
  MODIFY `id_book` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `bookhotel`
--
ALTER TABLE `bookhotel`
  MODIFY `id_booking` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `grooming`
--
ALTER TABLE `grooming`
  MODIFY `no_urut` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dikelola`
--
ALTER TABLE `dikelola`
  ADD CONSTRAINT `fk_id_urutan` FOREIGN KEY (`id_urutan`) REFERENCES `admin` (`id_urutan`),
  ADD CONSTRAINT `fk_member` FOREIGN KEY (`id_member`) REFERENCES `member` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
