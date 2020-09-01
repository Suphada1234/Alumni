-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 09:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ae`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `student_id` int(9) NOT NULL,
  `group` varchar(10) DEFAULT NULL,
  `branch` varchar(255) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `semester` enum('ภาคเรียนปกติ','ภาคเรียนพิเศษ') DEFAULT NULL,
  `education_level` enum('ปริญญาตรี','ปริญญาโท','ปริญญาเอก') DEFAULT NULL,
  `year_int` char(4) DEFAULT NULL,
  `year_out` char(4) DEFAULT NULL,
  `outstanding_work` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`student_id`, `group`, `branch`, `faculty`, `semester`, `education_level`, `year_int`, `year_out`, `outstanding_work`) VALUES
(12, '13', '13', '13', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2563', '2553', '13'),
(121, '2', '', '', '', '', '-', '-', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `card_id` char(13) NOT NULL,
  `student_id` int(9) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` enum('ชาย','หญิง') DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`card_id`, `student_id`, `name`, `gender`, `birthday`, `address`, `tel`, `email`, `facebook`, `img`) VALUES
('12', 12, '13', 'ชาย', '2013-03-13', '13', '13', '13', '13', 'Untitled.png'),
('121', 121, '121', 'หญิง', '2020-03-11', '121', '121', '121', '121', 'noImage');

-- --------------------------------------------------------

--
-- Table structure for table `workinformation`
--

CREATE TABLE `workinformation` (
  `work_id` int(9) NOT NULL,
  `student_id` int(9) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workinformation`
--

INSERT INTO `workinformation` (`work_id`, `student_id`, `company`, `position`, `address`, `tel`) VALUES
(6, 12, '13', '13', '13', '13'),
(7, 121, '', '', '     ', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`card_id`),
  ADD KEY `FK` (`student_id`);

--
-- Indexes for table `workinformation`
--
ALTER TABLE `workinformation`
  ADD PRIMARY KEY (`work_id`),
  ADD KEY `FK` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workinformation`
--
ALTER TABLE `workinformation`
  MODIFY `work_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`);

--
-- Constraints for table `workinformation`
--
ALTER TABLE `workinformation`
  ADD CONSTRAINT `workinformation_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `personal` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
