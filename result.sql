-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2020 at 04:14 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintable`
--

CREATE TABLE IF NOT EXISTS `admintable` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `email`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE IF NOT EXISTS `board` (
  `Examtype` varchar(100) NOT NULL,
  `sem_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `board`
--

INSERT INTO `board` (`Examtype`, `sem_id`) VALUES
('board', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `marks1`
--

CREATE TABLE IF NOT EXISTS `marks1` (
  `Name` varchar(300) NOT NULL,
  `Principles_of_Management` varchar(100) NOT NULL,
  `Digital_Logic` varchar(100) NOT NULL,
  `Computer_Information_System` varchar(100) NOT NULL,
  `English` varchar(100) NOT NULL,
  `Business_Mathematics` varchar(100) NOT NULL,
  `ms1` int(100) NOT NULL,
  `s_roll` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks1`
--

INSERT INTO `marks1` (`Name`, `Principles_of_Management`, `Digital_Logic`, `Computer_Information_System`, `English`, `Business_Mathematics`, `ms1`, `s_roll`) VALUES
('Dipasha Rokka', '85', '55', '55', '80', '86', 13, 100),
('Dipankar', '85', '52', '50', '89', '89', 14, 101),
('Sumedh', '40', '40', '40', '40', '40', 15, 102);

-- --------------------------------------------------------

--
-- Table structure for table `sem1`
--

CREATE TABLE IF NOT EXISTS `sem1` (
  `sem_id` varchar(100) NOT NULL,
  `sub_id` varchar(100) NOT NULL,
  `s_roll` varchar(100) NOT NULL,
  `ExamType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_roll` varchar(100) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_phone` varchar(50) NOT NULL,
  `s_batch` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_roll`, `s_name`, `s_phone`, `s_batch`, `email`, `pass`) VALUES
('100', 'Dipasha  Rokka', '9841236589', 15, 'dipa@dipa.com', 'diparokka'),
('101', 'dips', '9843206142', 15, 'dipaka.sasd@gmail.com', 'dips'),
('102', 'Sumedh', '9898996', 15, 'sum@ataek.com', 'abcde12345');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `sub_id` varchar(100) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sem_id` varchar(100) NOT NULL,
  `Marks` int(100) NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sem_id`, `Marks`, `Name`) VALUES
('1', 'English', '1st', 0, ''),
('2', 'Computer Information System', '1st', 0, ''),
('5', 'Digital Logic Design', '1st', 0, ''),
('6', 'Principles of Management', '1st', 0, ''),
('9', 'Basic Mathematics', '1st', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks1`
--
ALTER TABLE `marks1`
  ADD PRIMARY KEY (`ms1`);

--
-- Indexes for table `sem1`
--
ALTER TABLE `sem1`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_roll`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `marks1`
--
ALTER TABLE `marks1`
  MODIFY `ms1` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
