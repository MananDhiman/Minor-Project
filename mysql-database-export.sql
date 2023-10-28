-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2023 at 01:52 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
  `class` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `admission_no`, `name`, `father_name`, `class`, `section`, `dob`) VALUES
(1, 1228, 'manish', 'manish\'s father', '10', 'A', '12-11-2002'),
(2, 700, 'muskan', 'muskan\'s father', '12', 'B', '01-01-2000'),
(3, 1111, 'mehak', 'mehak\'s father', '1', '1', '01-06-2002'),
(4, 12, 'gagan', 'gagan\'s father', '12', '12', '05-06-2003'),
(5, 13, 'kunwar', 'kunwar\'s father', '12', '12', '11-12-2001'),
(6, 200, 'manan', 'manan\'s father', '12', '12', '17-11-2002');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `is_admin`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(2, 'student', 'student', 'student', '0'),
(3, 'student1000', 'student1000', 'student', '0'),
(4, 'Test0000', 'Test0000', 'Test', '0');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
