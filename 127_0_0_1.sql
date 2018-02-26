-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 08:44 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigana`
--
CREATE DATABASE IF NOT EXISTS `sigana` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sigana`;

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `adminname` varchar(100) NOT NULL,
  `adminpwd` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`adminname`, `adminpwd`, `id`) VALUES
('preeti', '12345678', 1),
('', '', 2),
('surbhi', '12345678', 3),
('', '', 4),
('parul', '12345678', 5),
('ruchi', '12345678', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `ffname` varchar(50) NOT NULL,
  `mfname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `birthtime` time NOT NULL,
  `maxloc` varchar(255) NOT NULL,
  `t4` varchar(255) NOT NULL,
  `t3` varchar(255) NOT NULL,
  `t5` varchar(255) NOT NULL,
  `t2` varchar(255) NOT NULL,
  `sound` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `cpwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `ffname`, `mfname`, `dob`, `gender`, `address`, `weight`, `birthplace`, `birthtime`, `maxloc`, `t4`, `t3`, `t5`, `t2`, `sound`, `email`, `pwd`, `cpwd`) VALUES
(1, 'surbhi', 'mahajan', 'xyz', '', '0000-00-00', '', '', 0, '', '00:00:00', '', '', '', '', '', 'images/Sleep Away.mp3', 'suru@gmail.com', '123', '123'),
(24, 'Preeti ', 'Digra', 'Sat paul digra', 'Rano Devi', '1994-10-02', 'female', 'Shanti Nagar', 50, 'Jammu', '08:50:00', 'Jammu', 'square', 'brown', 'violet', 'spicy', 'images/Kalimba.mp3', 'digrapreeti@gmail.com', '12345678', '12345678'),
(27, 'priya', 'sharama', '', '', '0000-00-00', '', '', 0, '', '00:00:00', '', '', '', '', '', '', 'peus2@gmail.com', '123', '123'),
(28, 'pooja', 'seth', '', '', '0000-00-00', '', '', 0, '', '00:00:00', '', '', '', '', '', '', 'poojaseth@gmail.com', '123', '123'),
(29, 'mia', 'thermopolis', 'a', 'b', '1889-08-09', 'female', 'asd', 34, 'jammu', '09:08:00', 'jammu', 'square', 'gray', 'red', 'spicy', 'images/SleepAway.mp3', 'miathermopolis@gmail.com', '1', '1'),
(30, 'rama', 'nath', '', '', '0000-00-00', 'female', '', 0, '', '00:00:00', '', '', '', '', '', 'images/Kalimba.mp3', 'ramanath@gmail.com', '123', '123'),
(31, '', '', '', 'hhh', '0000-00-00', '', '', 0, '', '00:00:00', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
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
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
