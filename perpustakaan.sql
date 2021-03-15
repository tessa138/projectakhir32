-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 10:14 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `idanggota` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(15) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`idanggota`, `nis`, `nama`, `kelas`, `jurusan`) VALUES
(1, 1543, 'Achmad Fauzi Dwi ', '1', 'MM'),
(2, 15462, 'Silvya Una', '2', 'RPL'),
(5, 15464, 'Thesallonika Kris S', '3', 'RPL'),
(6, 1234, 'Tay Tawan Vihokratana', '2', 'RPL');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idbuku` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `jumlahbuku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idbuku`, `judul`, `pengarang`, `penerbit`, `jumlahbuku`) VALUES
('A', 'Matahari', 'Tere Liye', 'PT. Gramedia Pustaka Utama', 2),
('B', 'Bulan ', 'Tere Liye', 'PT. Gramedia Pustaka Utama', 1),
('D', 'Laskar Pelangi', 'Andrea Hirata', 'Benteng Pustaka (Yoogyakarta)', 4),
('E', 'Teluk Alaska', 'Eka Aryani', 'Coconutbooks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `detailbuku`
--

CREATE TABLE `detailbuku` (
  `nobuku` varchar(10) NOT NULL,
  `idbuku` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailbuku`
--

INSERT INTO `detailbuku` (`nobuku`, `idbuku`, `status`) VALUES
('A001', 'A', 'Dipinjam'),
('A002', 'A', 'Tersedia'),
('B001', 'B', 'Tersedia'),
('D1', 'D', 'Tersedia'),
('D2', 'D', 'Tersedia'),
('D3', 'D', 'Tersedia'),
('D4', 'D', 'Tersedia'),
('E1', 'E', 'Tersedia'),
('E2', 'E', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `idpinjam` int(5) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nobuku` varchar(10) NOT NULL,
  `tglpinjam` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`idpinjam`, `nis`, `nama`, `nobuku`, `tglpinjam`, `status`) VALUES
(1, 15464, 'Thesallonika Kris S', 'A001', '2021-02-13', 'K'),
(2, 1234, 'Tay Tawan Vihokratana', 'E1', '2021-02-24', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `pengembalian`
--

CREATE TABLE `pengembalian` (
  `idkembali` int(5) NOT NULL,
  `idpinjam` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nobuku` varchar(10) NOT NULL,
  `tglkembali` date NOT NULL,
  `denda` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengembalian`
--

INSERT INTO `pengembalian` (`idkembali`, `idpinjam`, `nama`, `nobuku`, `tglkembali`, `denda`) VALUES
(1, 1, 'Thesallonika Kris S', 'A001', '2021-02-26', '13000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastlogin` datetime NOT NULL,
  `type` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `lastlogin`, `type`) VALUES
(1, 'tessa ', 'kris ', '2021-03-11 12:22:12', 'A'),
(2, 'kris ', 'kris', '2021-02-26 08:02:32', 'U'),
(5, 'elsa', 'nendya', '2021-01-29 10:33:13', 'U'),
(8, 'admin', 'admin', '2021-03-14 14:14:20', 'A'),
(9, 'tessalo', '123', '2021-02-24 11:42:44', 'U'),
(10, 'silvya', 'una', '0000-00-00 00:00:00', 'A'),
(11, 'user', 'user', '2021-02-24 12:35:11', 'U'),
(12, 'bright', '123', '2021-02-24 12:49:42', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`idanggota`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `detailbuku`
--
ALTER TABLE `detailbuku`
  ADD PRIMARY KEY (`nobuku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`idpinjam`);

--
-- Indexes for table `pengembalian`
--
ALTER TABLE `pengembalian`
  ADD PRIMARY KEY (`idkembali`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `idanggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `idpinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengembalian`
--
ALTER TABLE `pengembalian`
  MODIFY `idkembali` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
