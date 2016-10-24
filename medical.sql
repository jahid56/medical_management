-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2016 at 09:35 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ru_medical`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE IF NOT EXISTS `doctors` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `dept` text NOT NULL,
  `institute` text NOT NULL,
  `degree` text NOT NULL,
  `room` int(5) NOT NULL,
  `time` text NOT NULL,
  `day` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `phone`, `email`, `dept`, `institute`, `degree`, `room`, `time`, `day`) VALUES
(1, 'Rafiq', '03583459345', 'sdfh@azmol.net', 'Eye Speacialist', 'RMC', 'MBBS', 0, '09:00-12:00', 'Sunday, Tuesday, Friday'),
(2, 'Rafiq', '03583459345', 'sdfh@azmol.net', 'Eye Speacialist', 'RMC', 'MBBS', 107, '09:00-12:00', 'Sunday, Tuesday, Friday'),
(3, 'Rafiq', '03583459345', 'sdfh@azmol.net', 'Eye Speacialist', 'RMC', 'MBBS', 109, '09:00-12:00', 'Sunday, Tuesday, Friday');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `position` text NOT NULL,
  `time` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE IF NOT EXISTS `instruments` (
  `id` int(9) NOT NULL,
  `name` text NOT NULL,
  `quantity` int(9) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`id`, `name`, `quantity`) VALUES
(1, 'Ambulance', 2),
(2, 'Bed', 5),
(3, 'Chair', 50),
(4, 'Table', 30);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(9) NOT NULL,
  `name` text NOT NULL,
  `age` int(3) NOT NULL,
  `phone` text NOT NULL,
  `roll` text NOT NULL,
  `email` text NOT NULL,
  `dept` text NOT NULL,
  `hall` text NOT NULL,
  `blood_group` text NOT NULL,
  `weight` text NOT NULL,
  `height` text NOT NULL,
  `symptoms` text NOT NULL,
  `analysis` text NOT NULL,
  `rx` text NOT NULL,
  `doctor_id` int(5) NOT NULL,
  `status` int(2) NOT NULL,
  `status_medicine` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `age`, `phone`, `roll`, `email`, `dept`, `hall`, `blood_group`, `weight`, `height`, `symptoms`, `analysis`, `rx`, `doctor_id`, `status`, `status_medicine`) VALUES
(1, 'sdfsdf', 25, '456', '453453', 'sdfg', '', '', 'B+', '70', '1.33', 'xgv54sx4 ,sdvgsdv45sd8vg47@b cfbh5467415454\nsdfsd\n\nsdfsdf', 'a', 'p', 2, 1, 1),
(2, 'Rafiqul Islam', 25, '01715145151', '12045404', 'sdfsd@fgdsg.dfg', 'CSE', 'Amir Ali', 'B+', '60', '1.2', 'sgsg,sgsfg sgdfsdg\r\nsdgsdgsdg,\r\n\r\nsgsdgsdg sd,gsd,g,sdg sdgsdgsdg', 'dfhgfh', 'fghfghfghfgh\r\nfgh\r\nfg\r\nhfg\r\nh\r\nfg\r\nh\r\nfgh\r\nfg\r\nh\r\nfgh\r\nfg\r\nh\r\nfgh\r\nfghfgh', 2, 1, 1),
(3, 'xdvsdf', 25, '4565464', '74577', '5sdfgsd@fgh', '', '', 'sdgsg', '5635', '4536453', 'fdhdfhdfh\r\ndfh\r\ndfh', 'fg', 'fdgfdg', 2, 1, 1),
(4, 'Rafiqul Islam 2', 25, '01715145151', '120454504', 'sdfsd@fgdsg.dfg', 'CSE', 'Amir Ali', 'B+', '60', '1.2', 'sgsg,sgsfg sgdfsdg\r\nsdgsdgsdg,\r\n\r\nsgsdgsdg sd,gsd,g,sdg sdgsdgsdg', 'fgfdg', 'fdgfdgdfgdfg b\r\nfdgfdgdfg', 2, 1, 1),
(5, 'sdfsdf sdfgsdf', 25, '01715145151', '120454504', 'sdfsd@fgdsg.dfg', 'CSE', 'Amir Ali', 'B+', '60', '1.2', 'sgsg,sgsfg sgdfsdg\r\nsdgsdgsdg,\r\n\r\nsgsdgsdg sd,gsd,g,sdg sdgsdgsdg', 'sdfgsdfgsdfgsdg\r\ng\r\nsdgsdgsdg', 'sdg 2\r\nsdgsdg 2\r\nsdgsdg 3fsdgsfdg\r\ndfsgsdfg4', 2, 0, 0),
(6, 'sfsdaf sdfsdfd', 25, '01715145151', '1204404', 'sdfsd@fgdsg.dfg', 'CSE', 'Amir Ali', 'B+', '60', '1.2', 'sgsg,sgsfg sgdfsdg\r\nsdgsdgsdg,\r\n\r\nsgsdgsdg sd,gsd,g,sdg sdgsdgsdg', 'sdfgsdfgsdfgsdg\r\ng\r\nsdgsdgsdg', 'sdg 2\r\nsdgsdg 2\r\nsdgsdg 3fsdgsfdg\r\ndfsgsdfg4', 2, 0, 0),
(7, 'xfgvfdxg', 456, '456456', '5654', '456456', '', '', 'fgfdg', '4563456', '546456', '456456546', '', '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `id` int(5) NOT NULL,
  `room_number` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(1, 'mda', 'mda', 1),
(2, 'doc', 'doc', 2),
(3, 'med', 'med', 3),
(4, 'admin', 'admin', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
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
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
