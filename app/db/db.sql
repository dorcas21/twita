-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2018 at 07:41 PM
-- Server version: 5.7.24-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twita`
--
CREATE DATABASE IF NOT EXISTS `twita` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `twita`;

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `tweet_id` int(255) NOT NULL,
  `body` longtext NOT NULL,
  `user_id` int(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`tweet_id`, `body`, `user_id`, `timestamp`, `status`) VALUES
(1, 'my first tweet!?', 56, '2018-11-11 15:16:15', 0),
(2, 'fdfdd', 56, '2018-11-11 15:17:02', 0),
(3, 'fdfdd', 56, '2018-11-11 15:17:25', 0),
(4, 'my first tweet!', 9, '2018-11-11 15:20:42', 0),
(5, 'my first tweet!', 9, '2018-11-11 15:26:45', 0),
(6, 'my first tweet!', 9, '2018-11-11 15:33:41', 0),
(7, 'my first tweet!', 9, '2018-11-11 15:35:09', 0),
(8, 'my first tweet!', 9, '2018-11-11 15:35:31', 0),
(9, 'my first tweet!', 9, '2018-11-11 16:34:12', 0),
(10, 'dfdfdfd', 1, '2018-11-11 17:16:24', 0),
(11, 'dfdfdfd', 1, '2018-11-11 17:16:29', 0),
(12, 'dfdfdfd', 1, '2018-11-11 17:16:32', 0),
(13, 'uihuyfyfghjnmk', 1, '2018-11-11 17:17:29', 0),
(14, 'hihuihjndjnckmbjf', 1, '2018-11-11 17:35:09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`tweet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `tweet_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
