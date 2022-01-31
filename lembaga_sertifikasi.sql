-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2022 at 05:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lembaga_sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `judul` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `gambar`, `judul`) VALUES
(1, '5e6cf9f064469_1584200176.jpg', 'Potensi & Tantangan Bisnis IT Di Era Revolusi Industri 4.0'),
(2, '5e6cf954c1b8c_1584200020.jpg', '1 Tahun Asosiasi Guru Marketing Indonesia'),
(3, '5f3fee47aa8e8_1598025287.jpeg', 'Uji Kompetensi di Gooshi'),
(4, '5f3feec83f758_1598025416.jpeg', 'Uji Kompetensi di Gooshi'),
(5, '5f45236c7541b_1598366572.jpeg', 'Workshop Digital Marketing UMKM Banjarmasin'),
(6, '5f452309bcc81_1598366473.jpeg', 'Sertifikasi Digital Marketing SMKN 49 Jakarta'),
(7, '61077bb4a4827_1627880372.png', 'Sertifikasi Online BPPTIK 2021'),
(8, '5e7634af7c965_1584805039.png', 'Info Grafis Covid 19');

-- --------------------------------------------------------

--
-- Table structure for table `skema_sertifikasi`
--

CREATE TABLE `skema_sertifikasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `slug` varchar(300) NOT NULL,
  `jenis` varchar(300) NOT NULL,
  `gambar` varchar(300) NOT NULL,
  `penjelasan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skema_sertifikasi`
--

INSERT INTO `skema_sertifikasi` (`id`, `judul`, `slug`, `jenis`, `gambar`, `penjelasan`) VALUES
(1, 'Digital Marketing', '', 'digital_marketing', 'undraw_marketing_re_7f1g.svg', 'Melakukan aktivitas promosi untuk sebuah produk atau brand menggunakan media Digital.'),
(2, 'ICT Project Manager', '', 'project_quality', 'undraw_file_manager_j-85-s.svg', 'Profesi terkait ini antara lain Project dan Supervisor Manager, Business Development Manager, Scrum Master.'),
(3, 'Network Administrator Muda', '', 'network', 'undraw_remotely_-2-j6y.svg', 'Profesi terkait skema ini antara lain Network Engineer, Sys admin, IT Network, IT Infrastructure dsb'),
(4, 'Junior Data Scientist', '', 'data_science', 'undraw_data_re_80ws.svg', 'Profesi terkait pengolahan data untuk di jadikan pengetahuan baru.'),
(5, 'Operator Komputer Muda', '', 'digital_marketing', 'undraw_dev_productivity_umsq.svg', 'Skema dasar pengoperasian komputer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skema_sertifikasi`
--
ALTER TABLE `skema_sertifikasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skema_sertifikasi`
--
ALTER TABLE `skema_sertifikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
