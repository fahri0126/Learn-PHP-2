-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 10:22 AM
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
  `image` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_hobby`
--

INSERT INTO `tb_hobby` (`id`, `n_hobby`, `d_hobby`, `image`) VALUES
(1, 'Main game', 'Game faforit saya adalah Kingdom Two Crowns.', 'kingdom.png'),
(2, 'Baca komik', 'komik faforit saya adalah Doraemon.', 'doraemon.jpeg'),
(6, 'Nonton Film', 'Film faforit saya adalah Harry potter.', 'potter.jpg'),
(33, 'Olah raga', 'Olah raga faforit saya adalah Sepak bola.', 'bola.jpg'),
(48, 'Makan', 'Makanan faforit saya adalah ayam kecap.', 'ayam.jpg'),
(49, 'Nonton Film', '', 'potter.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
