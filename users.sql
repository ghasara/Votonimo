-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2020 at 01:05 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `profilephoto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `yourname` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilephoto`, `username`, `email`, `yourname`, `bio`, `password`) VALUES
(28, '', 'akashchikara1998@gmail.com', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(29, 'www.YTS.LT.jpg', '7427843664', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(30, 'www.YTS.LT.jpg', 'asdf', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(31, '', 'ghasara', 'Ghssara.village.1998@gmail.com', 'Akash Chikara', 'hii man', '5d41402abc4b2a76b9719d911017c592'),
(32, '', 'akash1', 'akash2', 'akash3', 'akash4', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(33, '', 'a1', 'a2', 'a3', 'a4', '32cfe6c19200b67afb7c3d0e1c43eadb'),
(34, 'www.YTS.LT.jpg', 'aa', 'aa', 'aa', 'aa', '4124bc0a9335c27f086f24ba207a4912'),
(35, '', 'Akash Chikara', 'Ghssara.village.1998@gmail.com', 'hello', 'a4', '94754d0abb89e4cf0a7f1c494dbb9d2c'),
(36, '', 'a', 'a', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661'),
(37, 'Screenshot (80).png', 'hello', 'hello', 'hello', 'hello', '5d41402abc4b2a76b9719d911017c592'),
(38, '', 'aka', 'a@gmail.com', 'a', 'a', '0cc175b9c0f1b6a831c399e269772661');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
