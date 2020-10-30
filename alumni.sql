-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2020 at 04:50 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
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



-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `card_id` char(13) NOT NULL,
  `student_id` int(9) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
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
  MODIFY `work_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
