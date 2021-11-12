-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2021 at 10:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efk`
--

-- --------------------------------------------------------

--
-- Table structure for table `pass_reset`
--

CREATE TABLE `pass_reset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `username` varchar(300) DEFAULT NULL,
  `email` varchar(300) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `gender`, `username`, `email`, `contact_number`, `password`) VALUES
(1, 'Lizel', 'Graaff', 'Female', 'lizelober', 'lizelober@gmail.com', '0721229854', '$2y$04$VdWbp3TnEgHVJ/W0q3n3H.ecBGx9k0/Z3XYdTaAsI8O3BLFzlmtcW'),
(2, 'Shane', 'De Wit', 'Male', 'shanedew', 'sh@gmail.com', '0728776589', '$2y$04$jeomwlRc.PoR1ze0/F5AJOMVc5kvTI5WuDi9jYnk4JXdKvIgDea56'),
(3, 'Sarah', 'Manning', 'Female', 'smanning', 'sma@hotmail.com', '0823253279', '$2y$04$vRzAP5aRsNdGL8AgeCFZ/e7gm752VBPhNR6pWRrbiek4vrnmK8IW6'),
(4, 'Bongiwe', 'Mzondeki', 'Female', 'bongim', 'bongiwe@gmail.com', '0731998654', '$2y$04$8zaq4XJU/OYeVSpEdTjl4..p/WYbVWs8eBDFUR5cbaXR6OcbYQM1y'),
(5, 'Tom', 'Jones', 'Male', 'tomj', 'tomj@hotmail.com', '0835003965', '$2y$04$rZB/YNtTe7JAFhp3LA59Z.qF3Y8nsm2H7W3eBxMvoour3QYi6BI1y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pass_reset`
--
ALTER TABLE `pass_reset`
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
-- AUTO_INCREMENT for table `pass_reset`
--
ALTER TABLE `pass_reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
