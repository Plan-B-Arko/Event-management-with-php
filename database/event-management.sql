-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 10:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(2) NOT NULL,
  `departmentname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`) VALUES
(1, 'CSE'),
(2, 'EEE'),
(3, 'ME'),
(4, 'Civil'),
(5, 'Physics'),
(6, 'Architecture'),
(7, 'Math'),
(8, 'URP');

-- --------------------------------------------------------

--
-- Table structure for table `eventregistration`
--

CREATE TABLE `eventregistration` (
  `id` int(10) NOT NULL,
  `eventid` int(10) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `volunteer` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventregistration`
--

INSERT INTO `eventregistration` (`id`, `eventid`, `userid`, `category`, `volunteer`) VALUES
(1, 1, '123456', 'student', '1'),
(2, 1, '160000', 'teacher', '1'),
(3, 1, '00021', 'teacher', '1'),
(4, 2, '12', 'teacher', '1'),
(5, 2, '993301', 'employee', '1');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventid` int(10) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `eventdetails` varchar(1000) NOT NULL,
  `eventfee` int(5) NOT NULL,
  `eventdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `eventname`, `eventdetails`, `eventfee`, `eventdate`) VALUES
(1, 'Annual Event -1', ' Event organized by University etc.. Event organized by University etc.. Event organized by University etc.. Event organized by University etc.Event organized by University etc.Event organized by University etc..', 100, '2021-11-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `academicid` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `department` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `academicid`, `username`, `email`, `password`, `phone`, `department`) VALUES
(1, '123456', 'MR rahman', 'rahman@gmail.com', 'admin', 2147483647, 1),
(2, '14725', 'Sumaiya', 'mfkdnjknv@gmail.com', '14725', 2147483647, 2),
(3, '136452', 'Mr p', 'mfkdnjknv@gmail.com', '134652', 2147483647, 3),
(4, '16CSE123', 'A', 'a@gmail.com', 'admin', 1934752565, 1),
(5, '112525', 'Sumaiya Sultana', 'mfkd@gmail.com', '112525', 2147483647, 3),
(6, '12ME1122', 'Rafiq', 'rafiq@gmail.com', 'rafiq', 2147483647, 8),
(7, '15CSE145', 'Mr. Alam', 'mralam@gmail.com', 'alam', 1470250369, 2),
(8, '56EEE01', 'Ahmed', 'ahmed@gmail.com', 'ahmed', 2147483647, 1),
(9, '97CSE001', 'Sumaiya', 'mfknjknv@gmail.com', 'ssn', 2147483647, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventregistration`
--
ALTER TABLE `eventregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventregistration`
--
ALTER TABLE `eventregistration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eventid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
