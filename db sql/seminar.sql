-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 05:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seminar`
--

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `narasumber` varchar(255) NOT NULL,
  `mc` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `kuota` varchar(255) NOT NULL,
  `mulai` varchar(255) NOT NULL,
  `selesai` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `nama`, `periode`, `narasumber`, `mc`, `kontak`, `deskripsi`, `kuota`, `mulai`, `selesai`, `file`, `gambar`) VALUES
(16, 'Estate Planning and Life Insurance', 'Jun 29, 2022 14:54:00', 'Manusia', 'Manusia', '08204293856', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.', '100', '30 Juni 2022 09:00', '30 Juni 2022 10:00', 'file_4.pdf', 'seminar_2.jpg'),
(17, 'Dicoding Developer Coaching #55: Flutter ', 'Jun 28, 2022 12:54:00', 'Manusia', 'Manusia', '08204293856', 'The Lorm alphabet is a method of tactile signing named after Hieronymus Lorm, who developed it in the late 19th century. Letters are spelled by tapping or stroking different parts of the listener\'s hand. The Lorm alphabet is mostly used in German-speaking countries, the Netherlands, Czech Republic, Poland and Georgia.', '10', '30 Juni 2022 09:00', '30 Juni 2022 10:00', 'file_5.pdf', 'seminar_3.jpg'),
(18, 'IKPI Gelar Seminar Pajak Soal PPS, Tertarik?', 'Jun 28, 5000 14:54:00', 'Manusia', 'Manusia', '081567792360', 'lorem', '1', '30 Juni 2022 09:00', '30 Juni 2022 10:00', 'Kelompok 1.pptx', 'seminar_4.jpg'),
(19, 'Teknik Meniup Gelembung', 'Jun 29, 2030 14:54:00', 'Manusia', 'Manusia', '081567792360', 'asd', '5', '30 Juni 2022 09:00', '30 Juni 2022 10:00', 'PPT_KELOMPOK 4_2IA19_TUGAS11_SUMBER INFORMASI TENTANG PENAWARAN ATAU PELUANG PROYEK TIK.pptx', 'seminar_5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `subject`, `email`, `message`) VALUES
(35, 'Andi Sitohang', 'Ingin membuat seminar', 'andi@gmail.com', 'Bagaimana cara ingin membuat seminar disini'),
(36, 'Danang Anto', 'Bikin Seminar', 'anto@gmail.com', 'Bagaimana cara upload seminar disini');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `nama_seminar` varchar(255) NOT NULL,
  `nama_pendaftar` varchar(255) NOT NULL,
  `no_pendaftar` varchar(255) NOT NULL,
  `email_pendaftar` varchar(255) NOT NULL,
  `instansi_pendaftar` varchar(255) NOT NULL,
  `jurusan_pendaftar` varchar(255) NOT NULL,
  `status_pendaftar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `nama_seminar`, `nama_pendaftar`, `no_pendaftar`, `email_pendaftar`, `instansi_pendaftar`, `jurusan_pendaftar`, `status_pendaftar`) VALUES
(13, 'Teknik Meniup Gelembung', 'Anto', '089696969', 'anto@gmail.com', 'asd', 'asd', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
