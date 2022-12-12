-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 10:29 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flag`
--

CREATE TABLE `tbl_flag` (
  `id` int(2) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flag`
--

INSERT INTO `tbl_flag` (`id`, `flag`) VALUES
(0, 'f4fc80e5e72d80c4ced184f0f9dec60c'),
(1, 'c98b8b5385c34b66da50d038de45eb46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `lvl0` int(11) NOT NULL DEFAULT 0,
  `lvl1` int(11) NOT NULL DEFAULT 0,
  `lvl2` int(11) NOT NULL DEFAULT 0,
  `lvl3` int(11) NOT NULL DEFAULT 0,
  `lvl4` int(11) NOT NULL DEFAULT 0,
  `lvl5` int(11) NOT NULL DEFAULT 0,
  `lvl6` int(11) NOT NULL DEFAULT 0,
  `lvl7` int(11) NOT NULL DEFAULT 0,
  `lvl8` int(11) NOT NULL DEFAULT 0,
  `lvl9` int(11) NOT NULL DEFAULT 0,
  `lvl10` int(11) NOT NULL DEFAULT 0,
  `points` int(2) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `lvl0`, `lvl1`, `lvl2`, `lvl3`, `lvl4`, `lvl5`, `lvl6`, `lvl7`, `lvl8`, `lvl9`, `lvl10`, `points`, `create_at`) VALUES
(1, 'sandun', '$2y$10$p9KRpJbIlTi8CkcWQeB36e09VRwz.RrtPHzy3SWoxN9qxtlnh4Mq.', 'sandundananjaya@sd.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28 19:35:08'),
(2, 'nadeesh', '$2y$10$A9ATvTNiX2zWC.TMLaCTruuedrNTAOiqfG5534meUD.UcJlumqy56', 'saasdndundananjaya@asdil.com', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-22 15:51:03'),
(3, 'ac', '$2y$10$UugQosG0O7a/eOTXgWFuDuint2PcgLwjFJ2xaAsiM1x8dFnbSC/Hm', 'ac@abs.com', 5, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-28 20:22:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_flag`
--
ALTER TABLE `tbl_flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
