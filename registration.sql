-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 05:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `ace2023`
--

CREATE TABLE `ace_2023` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `department` varchar(20) NOT NULL,
  `interests` varchar(30) NOT NULL,
  `ace_id` varchar(30) NOT NULL,
  `goodies` varchar(30) NOT NULL,
  `payment_mode` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ace2023`
--

INSERT INTO `ace_2023` (`id`, `name`, `phone_number`, `email`, `gender`, `department`, `interests`, `ace_id`,`goodies` ,`payment_mode`) VALUES
(1, 'asdfghj', '1234567890', 'cammcamm@gmail.com', 'male', 'CSE', 'Dance, Singing', '23ACEA001'),
(2, 'sreesowmya', '1234567890', 'sreesowmyamadisi@gma', 'female', 'CIC', 'Dance, Singing', '23ACEA001'),
(3, 'sreesowmyajj', '1234567890', 'sreesowmyamadisi@gma', 'female', 'CIC', 'Dance, Singing', '23ACEA001'),
(4, 'sowmya', '9441773359', 'sreesowmyamadisi@gma', 'female', 'AIML', 'Dance, Singing', '23ACEA004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ace2023`
--
ALTER TABLE `ace_2023`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ace2023`
--
ALTER TABLE `ace_2023`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
