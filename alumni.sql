-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 10:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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

INSERT INTO `alumni` (`student_id`, `group`, `branch`, `faculty`, `semester`, `education_level`, `year_int`, `year_out`, `outstanding_work`) VALUES
(614259014, '61/47', 'วิศวกรรมซอฟแวร์', 'วิทยาศาสตร์และเทคโนโลยี', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2561', '2563', '-'),
(614259029, '61/47', 'วิศวกรรมซอฟแวร์', 'วิทยาศาสตร์และเทคโนโลยี', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2561', '2563', '-'),
(614259054, '61/47', 'วิศวกรรมซอฟแวร์', 'วิทยาศาสตร์และเทคโนโลยี', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2561', '2563', '---'),
(614259056, '64/47', 'software enginerring', 'sicent', 'ภาคเรียนปกติ', 'ปริญญาตรี', '2563', '2563', '');

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
('1234567890123', 614259014, 'นาย ณัฐชัย สุบรรณเกตุ', 'ชาย', '0000-00-00', '85 - ดำเนินสะดวก เมือง ราชบุรี 82000', '095-456321', 'Nuttachai_Subangate@gmail.com', 'Nuttachai S. Subangate', '1024px-Steve_Jobs_Headshot_2010-CROP.jpg'),
('1579900782724', 614259054, 'นางสาว ศุภาดา ทองไทย', 'หญิง', '2541-05-22', '85 - ตะกุดไร ชนแดน เพชรบูรณ์ 67190', '0638025540', 'suphada22.ae@gmail.com', 'ิBlueWhale', 'alone.jpg'),
('1730501138456', 614259056, 'นางสาวSirinratpanpradidt', 'หญิง', '2020-10-20', '128-บางงปลาบางเลนนครปฐม73130', NULL, '614259029@webmail.npru.ac.th', 'kalumni', NULL),
('1730501138678', 614259029, 'นางสาว สิรินทร์รัตน์ ปานประดิษฐ์', 'หญิง', '2542-08-03', '129  - บางปลา บางเลน Nakhon Pathom 73000', '095-836838', '614259029@webmail.npru.ac.th', 'Sirinrat Hna Panpradidt ', 'basic form.PNG');

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
  `province` varchar(20) NOT NULL,
  `tel` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workinformation`
--

INSERT INTO `workinformation` (`work_id`, `student_id`, `company`, `position`, `address`, `province`, `tel`) VALUES
(8, 614259054, 'Nakhon Pathom Rajabhat University', 'โปรแกรมเมอร์', '99 85  ม.7 หนองปากโรง เมือง Nakhon Pathom 73000', '', '02-12333333'),
(9, 614259014, 'Nakhon Pathom Rajabhat University', 'โปรแกรมเมอร์', '99 85 Malai Man Road, Mueang District, Nakhon Pathom Province 73000 หนองปากโรง เมือง Nakhon Pathom 73000', '', '02-12333333'),
(10, 614259029, 'Nakhon Pathom Rajabhat University', 'โปรแกรมเมอร์', '99 85 Malai Man Road, Mueang District, Nakhon Pathom Province 73000 หนองปากโรง เมือง Nakhon Pathom 73000', '', '02-12333333'),
(11, 614259056, 'rajabhat nakhon pathom university', 'ceo', '128dsfบางปลาบางเลน73130', 'นครปฐม', '0800253481');

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
  MODIFY `work_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
