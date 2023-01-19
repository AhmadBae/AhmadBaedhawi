-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 07.54
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visualy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `no` bigint(255) NOT NULL,
  `nip` bigint(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` bigint(255) NOT NULL,
  `foto` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`no`, `nip`, `nama`, `tgl_lahir`, `alamat`, `no_telp`, `foto`) VALUES
(2, 41520010001, 'AhmadBaedhawi', '2022-12-26', 'jl.selatan', 815, 'Windah1.JPG'),
(3, 41520021352, 'Hari ini', '2022-11-29', 'jl timur', 852, 'Shaggy_UI.jpg'),
(5, 41520001111, 'Lusani', '2022-12-29', 'jl.barat', 815, 'Hina_Hisakawa.png'),
(6, 41520010032, 'Sanjay', '2022-12-21', 'Jl.barat', 821, 'Marnie.jpg'),
(7, 41520010016, 'Alexander', '2022-12-24', 'Jl.timur', 21, 'logomercu.png'),
(8, 4152001015, 'Liana', '2022-12-20', 'jl.selatan', 821, 'logomercu.png'),
(9, 41520010653, 'Lyndsay', '2022-12-16', '6 Comanche Plaza', 9613283932, 'logomercu.png'),
(10, 41520011085, 'Charmian', '2022-11-13', '23430 Surrey Trail', 7295476089, 'logomercu.png'),
(11, 41520014564, 'Lettie', '2022-10-04', '7101 Hauk Way', 6114656177, 'logomercu.png'),
(12, 41520016098, 'Randy', '2022-09-21', '34910 Sage Circle', 3485925681, 'logomercu.png'),
(13, 41520013822, 'Lancelot', '2022-01-23', '63 Dexter Court', 7838195050, 'logomercu.png'),
(14, 41520017707, 'Idette', '2022-09-21', '8 Larry Circle', 8059627954, 'logomercu.png'),
(15, 41520012426, 'Jarib', '2022-04-10', '3323 Barnett Drive', 9543007875, 'logomercu.png'),
(16, 41520010110, 'Theobald', '2022-04-23', '4 Briar Crest Drive', 8109606517, 'logomercu.png'),
(17, 41520012802, 'Silvanus', '2022-06-15', '6066 Westend Court', 5541750425, 'logomercu.png'),
(18, 41520018124, 'Gene', '2022-12-13', '1 Monterey Junction', 3515880255, 'logomercu.png'),
(19, 41520010790, 'Waverley', '2022-03-28', '4 Forest Point', 5544636420, 'logomercu.png'),
(20, 41520014476, 'Wendi', '2022-02-13', '39162 Swallow Drive', 8249645867, 'logomercu.png'),
(21, 41520011835, 'Eward', '2022-01-31', '0370 Helena Crossing', 4616804534, 'logomercu.png'),
(22, 41520018734, 'Emery', '2021-12-27', '63077 Arkansas Circle', 6564142661, 'logomercu.png'),
(23, 41520016821, 'Way', '2022-01-17', '9 Granby Crossing', 3045002501, 'logomercu.png'),
(24, 41520013302, 'Maryann', '2022-02-01', '8 Warrior Circle', 1883322835, 'logomercu.png'),
(25, 41520018496, 'Cliff', '2022-01-20', '1 Rowland Crossing', 7931151719, 'logomercu.png'),
(26, 41520014009, 'Barbey', '2022-10-30', '659 Butternut Road', 6453420109, 'logomercu.png'),
(27, 41520011595, 'Nikaniki', '2022-08-05', '84 Sommers Circle', 5694204797, 'logomercu.png'),
(28, 41520016363, 'Antoni', '2022-01-27', '100 Granby Crossing', 3702331152, 'logomercu.png'),
(29, 41520011068, 'Barbara', '2022-05-12', '64632 Maple Wood Parkway', 4669739401, 'logomercu.png'),
(30, 41520017653, 'Rea', '2022-06-14', '1472 Service Road', 4271200235, 'logomercu.png'),
(31, 41520010763, 'Kamilah', '2022-07-19', '12212 Graedel Junction', 4992238492, 'logomercu.png'),
(32, 41520019380, 'Nolana', '2022-10-11', '2 Bultman Place', 3475796337, 'logomercu.png'),
(33, 41520016907, 'Aleta', '2022-01-21', '774 Hauk Road', 8435195060, 'logomercu.png'),
(34, 41520017655, 'Jillane', '2021-12-30', '683 Tennessee Circle', 3138912916, 'logomercu.png'),
(35, 41520011369, 'Lemmy', '2022-08-21', '34 Red Cloud Place', 2331486667, 'logomercu.png'),
(36, 41520012006, 'Bridget', '2022-11-18', '796 Schmedeman Parkway', 9779503308, 'logomercu.png'),
(37, 41520015153, 'Austen', '2022-09-14', '96 Dayton Junction', 5905073111, 'logomercu.png'),
(38, 41520015152, 'Bev', '2022-10-23', '3 Charing Cross Junction', 6049799664, 'logomercu.png'),
(39, 41520012475, 'Collette', '2022-01-07', '3 Colorado Trail', 4521108280, 'logomercu.png'),
(40, 41520015695, 'Elston', '2022-07-15', '451 Maywood Pass', 4886565857, 'logomercu.png'),
(41, 41520011190, 'Charmian', '2022-02-14', '4 Chinook Center', 9981792464, 'logomercu.png'),
(42, 41520013269, 'Jilleen', '2022-04-25', '34673 Little Fleur Parkway', 2869751117, 'logomercu.png'),
(43, 41520011723, 'Rozella', '2022-12-10', '3 Elmside Road', 5868881088, 'logomercu.png'),
(44, 41520011432, 'Oriana', '2022-04-03', '3 Corry Junction', 7721151535, 'logomercu.png'),
(45, 41520013292, 'Tracey', '2022-08-07', '05784 Carberry Way', 5297758236, 'logomercu.png'),
(46, 41520012814, 'Krystal', '2022-04-18', '39807 Ridgeway Parkway', 2281735480, 'logomercu.png'),
(47, 41520018112, 'Hillary', '2022-03-25', '1998 Petterle Pass', 8292849876, 'logomercu.png'),
(48, 41520011762, 'Julietta', '2022-05-18', '3 Loftsgordon Avenue', 6118082943, 'logomercu.png'),
(49, 41520017396, 'Sabine', '2022-10-08', '8141 7th Center', 5693450967, 'logomercu.png'),
(50, 41520014137, 'Carlen', '2022-07-26', '51 Colorado Place', 2748772826, 'logomercu.png'),
(51, 41520019547, 'Roseann', '2022-02-15', '5 Nevada Parkway', 2301764789, 'logomercu.png'),
(52, 41520011068, 'Jeri', '2022-06-24', '2 Valley Edge Terrace', 9285632900, 'logomercu.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `no` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
