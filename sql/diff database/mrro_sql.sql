-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2020 at 11:19 AM
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
-- Database: `test_sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flag`
--

CREATE TABLE `tbl_flag` (
  `id` int(11) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_flag`
--

INSERT INTO `tbl_flag` (`id`, `flag`) VALUES
(1, '7hisIsnt7H3c0rr3ctFl4g'),
(2, 'l00kC1os3lytHisOneF4k3'),
(3, 'Fif7h0n3is7heCorr3c7fLaG'),
(4, '0hbOyDon7beAf00L'),
(5, 'p30p1e4reVuln3rabl3'),
(6, 'y0um1ss3ditDud3'),
(7, 'D0n7eV3nre4d7h!s');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`) VALUES
(1, 'root', 'root@mrrobotctf.tk', 'root12345'),
(2, 'admin', 'admin@mrrobotctf.tk', 'administrator96'),
(3, 'elliot', 'elliot@mrrobotctf.tk', 'imthebest'),
(4, 'mrrobot', 'mrrobot@mrrobotctf.tk', 'youcantbeatme'),
(5, 'darlene', 'darlene@mrrobotctf.tk', 'beutifulone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_flag`
--
ALTER TABLE `tbl_flag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_flag`
--
ALTER TABLE `tbl_flag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
