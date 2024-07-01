-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 07:33 AM
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
-- Database: `event_dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_tb`
--

CREATE TABLE `event_tb` (
  `event_id` int(3) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `event_desc` varchar(250) NOT NULL,
  `event_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_tb`
--

INSERT INTO `event_tb` (`event_id`, `event_name`, `event_desc`, `event_image`) VALUES
(1, 'SIH 2023', 'Smart India Hackathon (SIH-2023) \'Senior\' Grand Finale has been scheduled to be held at New Horizon College of Engineering, the SIH-2023 Nodal Center, from 19th to 20th December 2023 for the participating teams of various Higher Educational Instituti', 'pic/sih23.webp'),
(2, 'Hacknovate 5.0', 'Hacknovate 5.0 will gather brightest programmers, engineers, developers, and business visionaries. Our goal is to create a space where the brightest minds may collaborate to develop the most creative solutions.\r\n📅 *When:* 10 – 11th May 2024\r\n🌎 *Where', 'pic/heck5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(3) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`, `email`, `age`) VALUES
(1, 'Ramesh', '1234', 'ramesh@gmail.com', 22),
(4, 'mani', '12345', 'mani@gmail.com', 21),
(5, 'Ravi', '1234', 'ravi@gmail.com', 23),
(6, 'Naveen', '1234', 'vijay.kumar@abesit.edu.in', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event_tb`
--
ALTER TABLE `event_tb`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_tb`
--
ALTER TABLE `event_tb`
  MODIFY `event_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
