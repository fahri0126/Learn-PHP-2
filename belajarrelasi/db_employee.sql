-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 06:36 PM
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
-- Database: `db_employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id` int(11) NOT NULL,
  `divisi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id`, `divisi`) VALUES
(1, 'Teknologi'),
(2, 'Operasi'),
(3, 'Humas'),
(4, 'Pemasaran');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(9) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `tgl` varchar(13) NOT NULL,
  `id_divisi` int(11) DEFAULT NULL,
  `id_nik` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `nama`, `jk`, `foto`, `tgl`, `id_divisi`, `id_nik`) VALUES
(210, 'Fahri', 'Laki Laki', 'noimg.jpg', '24 | Jul | 23', 1, 95),
(211, 'Ramadhan', 'Laki Laki', 'noimg.jpg', '24 | Jul | 23', 1, 96);

-- --------------------------------------------------------

--
-- Table structure for table `employee_project`
--

CREATE TABLE `employee_project` (
  `employee_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee_project`
--

INSERT INTO `employee_project` (`employee_id`, `project_id`) VALUES
(210, 95),
(211, 96);

-- --------------------------------------------------------

--
-- Table structure for table `nik`
--

CREATE TABLE `nik` (
  `id` int(11) NOT NULL,
  `nik` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `nik`
--

INSERT INTO `nik` (`id`, `nik`) VALUES
(95, '00062927010'),
(96, '00062927010');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `nama_project` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `nama_project`, `deskripsi`) VALUES
(95, 'Membuat sesuatu', 'kosong'),
(96, 'Review Sesuatu', 'tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `employee_ibfk_1` (`id_nik`);

--
-- Indexes for table `employee_project`
--
ALTER TABLE `employee_project`
  ADD PRIMARY KEY (`employee_id`,`project_id`),
  ADD KEY `employee_project_ibfk_2` (`project_id`);

--
-- Indexes for table `nik`
--
ALTER TABLE `nik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `nik`
--
ALTER TABLE `nik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `FK_divisi_INdivisi` FOREIGN KEY (`id_divisi`) REFERENCES `divisi` (`id`),
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id_nik`) REFERENCES `nik` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee_project`
--
ALTER TABLE `employee_project`
  ADD CONSTRAINT `employee_project_ibfk_1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `employee_project_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
