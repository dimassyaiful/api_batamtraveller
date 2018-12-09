-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Des 2018 pada 09.48
-- Versi Server: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batam_traveller`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_laporan_pengunjung`
--

CREATE TABLE `tbl_laporan_pengunjung` (
  `id_laporan` int(50) NOT NULL,
  `id_tempat` int(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id_review` int(50) NOT NULL,
  `id_tempat` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `rating` int(1) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sampah`
--

CREATE TABLE `tbl_sampah` (
  `id_sampah` int(11) NOT NULL,
  `id_tempat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `letak` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tempat`
--

CREATE TABLE `tbl_tempat` (
  `id_tempat` int(50) NOT NULL,
  `id_pemilik` int(50) NOT NULL,
  `nama_tempat` varchar(5000) NOT NULL,
  `alamat` text NOT NULL,
  `kategori` varchar(5000) NOT NULL,
  `file_sk` varchar(5000) NOT NULL,
  `foto_tempat` varchar(5000) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `jam_buka` text NOT NULL,
  `jam_tutup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(50) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(5000) NOT NULL,
  `email` varchar(5000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `no_hp` int(50) DEFAULT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testcrud`
--

CREATE TABLE `testcrud` (
  `id` int(11) NOT NULL,
  `col1` varchar(100) NOT NULL,
  `col2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `testcrud`
--

INSERT INTO `testcrud` (`id`, `col1`, `col2`) VALUES
(1, 'qwe', '123123'),
(2, 'qwer', 'qwerr'),
(3, 'asd', 'asd'),
(4, 'asds', 'asds'),
(5, 'fgdfg', 'dfgdfgdfgdfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_laporan_pengunjung`
--
ALTER TABLE `tbl_laporan_pengunjung`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id_review`);

--
-- Indexes for table `tbl_sampah`
--
ALTER TABLE `tbl_sampah`
  ADD PRIMARY KEY (`id_sampah`);

--
-- Indexes for table `tbl_tempat`
--
ALTER TABLE `tbl_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `testcrud`
--
ALTER TABLE `testcrud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testcrud`
--
ALTER TABLE `testcrud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
