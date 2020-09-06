-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2020 at 09:05 PM
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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `username`) VALUES
(31, 'hii man', 'Akash Chikara'),
(32, 'hknknk', 'Akash Chikara');

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
(3, 'avatar6.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'dr.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'circle-cropped (7).png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'WhatsApp Image 2020-07-27 at 15.41.41.jpeg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'WhatsApp Image 2020-07-25 at 17.46.32.jpeg', '', '', 'back (1).png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `yourname` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilephoto`, `username`, `email`, `yourname`, `bio`, `website`, `country`, `phone`, `password`) VALUES
(28, '', 'akashchikara1998@gmail.com', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(29, 'www.YTS.LT.jpg', '7427843664', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(30, 'www.YTS.LT.jpg', 'asdf', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(31, '', 'ghasara', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '5d41402abc4b2a76b9719d911017c592'),
(32, '', 'akash1', 'akash2', 'akash3', 'akash4', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(33, '', 'a1', 'a2', 'a3', 'a4', '', '', '', '32cfe6c19200b67afb7c3d0e1c43eadb'),
(34, 'www.YTS.LT.jpg', 'aa', 'aa', 'aa', 'aa', '', '', '', '4124bc0a9335c27f086f24ba207a4912'),
(35, '', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'hello', 'a4', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(36, '', 'a', 'a', 'a', 'a', '', '', '', '0cc175b9c0f1b6a831c399e269772661'),
(37, 'Screenshot (80).png', 'hello', 'hello', 'hello', 'hello', '', '', '', '5d41402abc4b2a76b9719d911017c592'),
(38, '', 'aka', 'a@gmail.com', 'a', 'a', '', '', '', '0cc175b9c0f1b6a831c399e269772661'),
(39, '', 'z', 'Ghssara.village.1998@gmail.com', 'z', 'z', '', '', '', 'fbade9e36a3f36d3d676c1b808451dd7'),
(40, 'avatar6.jpg', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'a', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(41, '', 'akash', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(42, 'avatar5.jpg', 'q', 'Ghssara.village.1998@gmail.com', 'q', 'q', '', '', '', '7694f4a66316e53c8cdd9d9954bd611d'),
(43, '74.jpg', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'w', 'w', '', '', '', 'f1290186a5d0b1ceab27f4e77c0c5d68'),
(44, '', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'a', '', '', '', '9e24ff27867e729a42986a3358234332'),
(45, 'avatar6.jpg', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '9e24ff27867e729a42986a3358234332'),
(46, 'circle-cropped (7).png', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '9e24ff27867e729a42986a3358234332'),
(47, 'circle-cropped (7).png', 'akash', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '9e24ff27867e729a42986a3358234332'),
(48, 'santosh-verma-i49yJtWD57w-unsplash.jpg', 'ghasara1234', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '', '', '', '9e24ff27867e729a42986a3358234332'),
(49, 'Home page.jpg', 'asdf', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'a', '', '', '', '9e24ff27867e729a42986a3358234332'),
(50, 'avatar5.jpg', 'hy', 'hy@gmail.com', 'hy', 'hy', '', '', '', '035ed2311b96d2a65ec6a6fe71046c14'),
(51, 'avatar5.jpg', 'i', 'i@gmail.com', 'i', 'i', '', '', '', '865c0c0b4ab0e063e5caa3387c1a8741'),
(52, '74.jpg', 'asd', 'akashchikara1998@gmail.com', 'Akash Chikara', 'hello', '', '', '', '0cc175b9c0f1b6a831c399e269772661'),
(53, 'white3.jpg', 'sd', 'akashchikara1998@gmail.com', 'faran', 'hello', '', '', '', '0cc175b9c0f1b6a831c399e269772661'),
(54, '', 'Akash Chikara', 'akashchikara1998@gmail.com', 'Akash Chikara', 'a', '', '', '', '0cc175b9c0f1b6a831c399e269772661'),
(55, 'circle-cropped (3).png', 'Akash Chikara', 'akashchikara1998@gmail.com', 'chikara', 'This is the bio section', '', '', '', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
