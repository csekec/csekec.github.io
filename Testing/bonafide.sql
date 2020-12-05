-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 12:14 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonafide`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `type` text NOT NULL,
  `studentname` text NOT NULL,
  `fathername` text NOT NULL,
  `gender` char(6) NOT NULL,
  `rollno` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `year` int(1) NOT NULL,
  `section` char(1) NOT NULL,
  `dob` date NOT NULL,
  `community` char(20) NOT NULL,
  `caste` char(10) NOT NULL,
  `admitted` varchar(17) NOT NULL,
  `category` int(25) NOT NULL,
  `fees` int(50) NOT NULL,
  `scholar` char(6) NOT NULL,
  `hostelname` char(25) NOT NULL,
  `roomno` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `bankname` char(50) NOT NULL,
  `place` char(20) NOT NULL,
  `bemail` varchar(50) NOT NULL,
  `purpose` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
