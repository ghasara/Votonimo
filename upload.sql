-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 04:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `a1` varchar(255) NOT NULL,
  `a11` varchar(255) NOT NULL,
  `a12` varchar(255) NOT NULL,
  `a2` varchar(255) NOT NULL,
  `a21` varchar(255) NOT NULL,
  `a22` varchar(255) NOT NULL,
  `a3` varchar(255) NOT NULL,
  `a31` varchar(255) NOT NULL,
  `a32` varchar(255) NOT NULL,
  `b1` varchar(255) NOT NULL,
  `b11` varchar(255) NOT NULL,
  `b12` varchar(255) NOT NULL,
  `b2` varchar(255) NOT NULL,
  `b21` varchar(255) NOT NULL,
  `b22` varchar(255) NOT NULL,
  `b3` varchar(255) NOT NULL,
  `b31` varchar(255) NOT NULL,
  `b32` varchar(255) NOT NULL,
  `c1` varchar(255) NOT NULL,
  `c11` varchar(255) NOT NULL,
  `c12` varchar(255) NOT NULL,
  `c2` varchar(255) NOT NULL,
  `c21` varchar(255) NOT NULL,
  `c22` varchar(255) NOT NULL,
  `c3` varchar(255) NOT NULL,
  `c31` varchar(255) NOT NULL,
  `c32` varchar(255) NOT NULL,
  `d1` varchar(255) NOT NULL,
  `d11` varchar(255) NOT NULL,
  `d12` varchar(255) NOT NULL,
  `d2` varchar(255) NOT NULL,
  `d21` varchar(255) NOT NULL,
  `d22` varchar(255) NOT NULL,
  `d3` varchar(255) NOT NULL,
  `d31` varchar(255) NOT NULL,
  `d32` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `a1`, `a11`, `a12`, `a2`, `a21`, `a22`, `a3`, `a31`, `a32`, `b1`, `b11`, `b12`, `b2`, `b21`, `b22`, `b3`, `b31`, `b32`, `c1`, `c11`, `c12`, `c2`, `c21`, `c22`, `c3`, `c31`, `c32`, `d1`, `d11`, `d12`, `d2`, `d21`, `d22`, `d3`, `d31`, `d32`) VALUES
(2, '$a1', '$a11', '$a12', '$a2', '$a21', '$a22', '$a3', '$a31', '$a32', '$b1', '$b11', '$b12', '$b2', '$b21', '$b22', '$b3', '$b31', '$b32', '$c1', '$c11', '$c12', '$c2', '$c21', '$c22', '$c3', '$c31', '$c32', '', '', '', '', '', '', '', '', ''),
(3, 'avatar6.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
