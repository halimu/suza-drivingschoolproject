-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 09:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `driving_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `application_id` int(20) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `nationality` varchar(200) NOT NULL,
  `blood` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `period` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`application_id`, `fullname`, `dob`, `gender`, `address`, `nationality`, `blood`, `class`, `phone`, `period`) VALUES
(5, 'sulhiya', '0199-08-04', 'Female', 'chumbuni', 'Kenya', 'A+', 'D1', 876543219, 'everning'),
(6, 'zai', '2020-08-10', 'Female', 'KINONDONI', 'Tanzanian', 'A+', 'A', 1234567897, 'everning'),
(7, 'mimi', '2020-07-28', 'Male', 'hgilo;E', 'Tanzanian', 'A+', 'A', 123456789, 'Morning');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(200) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `address`, `amount`) VALUES
(8, 'AS DRIVING SCHOOL', 'chumbuni', 23334456);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(200) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `fullname`, `gender`, `address`, `occupation`, `phone`) VALUES
('st12', 'bushir', 'male', 'chumbuni', 'lecturer', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` varchar(20) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fullname`, `gender`, `address`, `dob`, `phone`) VALUES
('st12', 'bushir', 'male', 'chumbuni', '2020-08-20', 987654321);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `username`, `password`, `role`) VALUES
('sulhiya', 'Makame', 'chully', '12345', 'student'),
('sulhiya', 'Abdulla', 'chuly', '123', 'staff'),
('Abdulhalim', 'Abdulla', 'halimu', '12345', 'student'),
('Bushir', 'Mgongo', 'mgongo', '12345', 'admin'),
('sulhiya ', 'hajji', 'sulhiya', '12345', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`application_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `application_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
