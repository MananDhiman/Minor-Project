-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2023 at 05:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bca-minor-project`
--
CREATE DATABASE IF NOT EXISTS `bca-minor-project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bca-minor-project`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `admission_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_no`, `name`, `father_name`, `mother_name`, `class`, `section`, `dob`, `address`, `phone`) VALUES
(1, 1228, 'manish', 'manish\'s father', 'manish\'s mother', '10', 'A', '12-11-2002', 'address 1', '1234'),
(2, 700, 'muskan', 'muskan\'s father', 'muskan\'s mother', '12', 'B', '01-01-2000', 'address 2', '4567'),
(3, 1111, 'mehak', 'mehak\'s father', 'mehak\'s mother', '1', '1', '01-06-2002', 'address 3', '2367'),
(4, 12, 'gagan', 'gagan\'s father', 'gagan\'s mother', '12', '12', '05-06-2003', 'address 4', '7788'),
(5, 13, 'kunwar', 'kunwar\'s father', 'kunwar\'s mother', '12', '12', '11-12-2001', 'address 5', '89787'),
(6, 200, 'manan', 'manan\'s father', 'manan\'s mother', '12', '12', '17-11-2002', 'address 6', '200'),
(11, 1234, 'Aman Kumar', 'Amit Kumar', 'Ananya Sharma', 'Nursery', 'A', '2002-11-12', '132458', '98765541100');

-- --------------------------------------------------------

--
-- Table structure for table `students_marks`
--

DROP TABLE IF EXISTS `students_marks`;
CREATE TABLE `students_marks` (
  `admission_no` int(11) NOT NULL,
  `subject_1` tinyint(4) NOT NULL,
  `subject_2` tinyint(4) NOT NULL,
  `subject_3` tinyint(4) NOT NULL,
  `subject_4` tinyint(4) NOT NULL,
  `subject_5` tinyint(4) NOT NULL,
  `avg` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_marks`
--

INSERT INTO `students_marks` (`admission_no`, `subject_1`, `subject_2`, `subject_3`, `subject_4`, `subject_5`, `avg`) VALUES
(1228, 10, 20, 30, 40, 50, 30);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `is_admin` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `is_admin`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(2, 'student', 'student', 'student', '0'),
(3, 'student1000', 'student1000', 'student', '0'),
(4, 'Test0000', 'Test0000', 'Test', '0'),
(5, 'Aman Kumar1234', 'Aman Kumar1234', 'Aman Kumar', '0'),
(6, 'zzzzzzzzz111111', 'zzzzzzzzz111111', 'zzzzzzzzz', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
