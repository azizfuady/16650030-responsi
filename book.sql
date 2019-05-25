-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 06 Apr 2019 pada 04.47
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bookingan`
--

CREATE TABLE IF NOT EXISTS `bookingan` (
`id` int(11) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tgl` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `bookingan`
--

INSERT INTO `bookingan` (`id`, `judul_buku`, `nama_peminjam`, `no_hp`, `tgl`) VALUES
(1, 'Buku Menyelam dan Menaklukan Samudra PHP', 'Ahmad Adha', '089654634357', '2019-04-06 03:07:27'),
(2, 'Buku Algoritma dan Pemrograman Menggunakan Python', 'Desi Umaroh', '08765845694', '2019-04-06 03:59:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `price` varchar(90) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `gambar`, `price`, `status`) VALUES
(0, 'Algoritma dan Pemrograman Menggunakan Python', 'Arik Kurniawati', 'Alogartirma-Python.jpg', '1350', 'Dipinjam'),
(5, 'MySQL 5: Dari Pemula Hingga Mahir', 'Achmad Solichin', 'cover-mysql_51.png', '1500', 'Tersedia'),
(85405, 'Menyelam dan Menaklukan Samudra PHP', 'Loka Dwiartara', 'pbpbook1.jpg', '1350', 'Dipinjam'),
(94783, 'Codeigniter & Laravel - Kasus Membuat Website Pencari Kerja', 'David Naista', 'JPGGAN_5252.jpg', '1900', 'Tersedia'),
(363547, 'WEB SERVICE Pembayaran Uang Kuliah Online dengan PHP dan SOAP WSDL', 'Roki Aditama', 'web-service.jpg', '3000', 'Tersedia'),
(8736065, 'Pemrograman Berorientasi Objek Menggunakan C#', 'Adi Nugroho', 'PBO1.jpg', '2900', 'Tersedia'),
(84906564, 'Kumpulan Source Code Visual Basic 6.0 untuk Skripsi', 'Anhar', '92026_f.jpg', '500', 'Tersedia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingan`
--
ALTER TABLE `bookingan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingan`
--
ALTER TABLE `bookingan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
