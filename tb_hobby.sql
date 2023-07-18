-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 11:07 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hobby`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_hobby`
--

CREATE TABLE `tb_hobby` (
  `id` int(11) NOT NULL,
  `n_hobby` varchar(255) NOT NULL,
  `d_hobby` varchar(255) NOT NULL,
  `gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_hobby`
--

INSERT INTO `tb_hobby` (`id`, `n_hobby`, `d_hobby`, `gambar`) VALUES
(63, 'Main game', 'Game faforit saya adalah Kingdom Two Crowns.\r\n', 'kingdom.png'),
(64, 'Baca Komik', 'Komik faforit saya adalah Doraemon.', 'doraemon.jpeg'),
(65, 'Olah Raga', 'Saya suka lari sore.', 'lari.jpg'),
(66, 'Nonton Film', 'FIlm faforit saya adalah Harry Potter.', 'potter.jpg'),
(67, 'Makan', 'Saya suka ayam kecap.', 'ayam.jpg'),
(72, 'minum', 'saya suka minum jus alpukat.', 'noimg.jpg'),
(76, 'a', 'a', 'noimg.jpg'),
(77, 'b', 'b', 'noimg.jpg'),
(78, 'c', 'c', 'noimg.jpg'),
(79, '0', '0', 'noimg.jpg'),
(80, 'd', 'd', 'noimg.jpg'),
(82, 'e', 'e', 'kingdom.png'),
(84, 'f', 'f', 'ayam.jpg'),
(85, 'g', 'g', 'potter.jpg'),
(86, 'h', 'h', 'noimg.jpg'),
(88, 'j', 'j', 'noimg.jpg'),
(89, 'k', 'k', 'noimg.jpg'),
(90, 'la', 'l', 'noimg.jpg'),
(91, 'ma', 'm', 'noimg.jpg'),
(93, 'ma', 'm', 'noimg.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_hobby`
--
ALTER TABLE `tb_hobby`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_hobby`
--
ALTER TABLE `tb_hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
