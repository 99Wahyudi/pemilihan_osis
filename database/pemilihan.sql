-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jun 2021 pada 14.16
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemilihan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '$2y$10$qotFmzacpHjPUVrXZjHBPOSxef7vQzkNSV47hy.fGuqnuM2V9dfSq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilih`
--

CREATE TABLE `pemilih` (
  `username` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL,
  `status` int(11) NOT NULL,
  `pilihan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pemilih`
--

INSERT INTO `pemilih` (`username`, `password`, `status`, `pilihan`) VALUES
('18NCWD18VY', 'CEF1SN', 1, ''),
('2VKRGVLV38', '116RTV', 1, ''),
('3E0XFKGT6S', 'DWAOFI', 1, ''),
('4H1KXGD5W8', 'VN0FAF', 1, ''),
('A27FYKP5D9', 'D29KOB', 1, 'I2RBBXIB'),
('B68VUZL2BS', '5M6N6B', 0, ''),
('D0X1UOBVOB', '9E3RP7', 1, ''),
('DDPAB165XC', 'PLVMRQ', 0, ''),
('DKIGY5E2NG', 'K5OBZ9', 0, ''),
('DOCLFSVR5X', 'Q7RXWH', 0, ''),
('FHF2I7FDG2', '3OR6NV', 0, ''),
('FVP1S994DK', 'WMV66N', 0, ''),
('HG37XEUBNS', 'XZN71K', 0, ''),
('MHWSNNKWQF', 'KZDW6U', 0, ''),
('UP1EKHM2HV', 'ZYKHTG', 0, ''),
('VBYXAO8XSC', 'IP3N8D', 0, ''),
('WH0CG61SCE', 'C9AJCW', 0, ''),
('XI6JP9FTO9', '4NBKJY', 0, ''),
('ZRZ1T2JIN5', 'WMY498', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `jumlah_suara` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`id_peserta`, `nama`, `foto`, `kelas`, `jurusan`, `visi`, `misi`, `jumlah_suara`) VALUES
('719L3ISB', 'ICONG', '5d35497c7e34b.jpg', 'XII', ' RPL 2', 'Bucin', 'Bucin', 3),
('E2Q729VM', 'OTONG', '3000668013.jpg', 'XII', 'TKJ 1', 'HAHA', 'HAHA', 6),
('I2RBBXIB', 'AJIS', '2s.PNG', 'XII', 'MM 2', 'Ndorong', 'Ndorong', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pemilih`
--
ALTER TABLE `pemilih`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
