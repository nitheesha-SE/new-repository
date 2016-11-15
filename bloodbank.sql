-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 08:41 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--
CREATE DATABASE IF NOT EXISTS `bloodbank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bloodbank`;

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `name` varchar(200) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donation`
--

INSERT INTO `blood_donation` (`name`, `bloodgroup`, `phonenumber`, `address`, `status`) VALUES
('sgdsj', 'B+', 123456, 'svdsjd', '');

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `aname` varchar(20) NOT NULL,
  `blood group` varchar(20) NOT NULL,
  `phone number` int(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `admin acceptence` varchar(20) DEFAULT NULL,
  `donar acceptence` varchar(20) DEFAULT NULL,
  `dname` varchar(200) DEFAULT NULL,
  `dblood` varchar(200) DEFAULT NULL,
  `dphone` int(20) DEFAULT NULL,
  `daddress` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`userid`, `username`, `aname`, `blood group`, `phone number`, `address`, `date`, `admin acceptence`, `donar acceptence`, `dname`, `dblood`, `dphone`, `daddress`) VALUES
(1, 'niteesha', 'abhi', 'APositive', 987, '', '2016-11-15', 'yes', 'accept', 'niteesha', 'o', 98765, NULL),
(1, 'niteesha', 'priyatham', 'ONegative', 45679, 'sbsvdf', '2016-11-15', 'yes', NULL, 'niteesha', NULL, 98765, NULL),
(2, 'abhi', 'abhi1', 'ONegative', 123, 'dgdjf', '2016-11-15', 'yes', NULL, 'preetham', NULL, 4565, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `userid` int(20) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`userid`, `username`, `password`) VALUES
(1, 'niteesha', 'niteesha'),
(2, 'abhi', 'abhi'),
(3, 'preetham', 'preetham');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(20) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `phone number` int(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `Name`, `username`, `Age`, `Gender`, `phone number`, `password`) VALUES
(1, 'niteesha', 'niteesha', 21, 'female', 98765, 'niteesha'),
(2, 'abhi', 'abhi', 45, 'm', 123, 'abhi'),
(3, 'preetham', 'preetham', 42, 'm', 4565, 'preetham');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD KEY `ibfk_1` (`userid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `login_ibfk_1` (`userid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
