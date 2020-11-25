-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 10:47 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_grid`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marks` int(11) NOT NULL,
  `city` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `marks`, `city`) VALUES
(1, 'Najmul', 85, 'Feni'),
(2, 'Juwel', 75, 'Mymensingh'),
(3, 'Shamim', 80, 'Khulna'),
(4, 'Aslam Shikder', 78, 'Gazipur'),
(7, 'Nibir', 70, 'Comilla'),
(8, 'Najmeen', 88, 'Dhaka'),
(9, 'Amit', 65, 'Sylhet'),
(10, 'Rakib', 72, 'Chittagong'),
(11, 'Shihab', 80, 'Dhaka'),
(12, 'Mitu', 84, 'Rajshahi'),
(13, 'Asif', 45, 'Barisal'),
(14, 'Omor', 55, 'Tongi'),
(15, 'Faisal', 93, 'Feni'),
(16, 'Kabir', 60, 'Cox\'s Bazar'),
(17, 'Amir', 77, 'Bhola'),
(18, 'Sumit', 66, 'Comilla');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
