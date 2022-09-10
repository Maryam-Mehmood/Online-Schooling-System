-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 06:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-schooling-system(vision)`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `Id` int(11) NOT NULL,
  `Activity` varchar(225) NOT NULL,
  `Pic` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Id`, `Activity`, `Pic`) VALUES
(7, 'Library', 'Testing'),
(9, 'Art & Craft', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `Full_Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Message` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `Full_Name`, `Email`, `Phone`, `Message`) VALUES
(1, 'Ali Khan', 'a@gmail.com', '033345', 'Test'),
(3, 'Ali', 'a@gmail.com', '033345', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `Id` int(11) NOT NULL,
  `Day` varchar(225) NOT NULL,
  `Date` varchar(225) NOT NULL,
  `Holiday` varchar(225) NOT NULL,
  `Detail` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`Id`, `Day`, `Date`, `Holiday`, `Detail`) VALUES
(2, 'Monday', '2022-09-05', 'Labour Day', 'Testing');

-- --------------------------------------------------------

--
-- Table structure for table `onlie_fees_voucher`
--

CREATE TABLE `onlie_fees_voucher` (
  `Id` int(11) NOT NULL,
  `Student_Id_No` varchar(225) NOT NULL,
  `Student_Name` varchar(225) NOT NULL,
  `Reciept_No` varchar(225) NOT NULL,
  `Current_Month` varchar(225) NOT NULL,
  `Total_Amount` varchar(225) NOT NULL,
  `Amount(in_words)` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `Id` int(11) NOT NULL,
  `Image-Url` varchar(225) NOT NULL,
  `Title` varchar(225) NOT NULL,
  `Description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`Id`, `Image-Url`, `Title`, `Description`) VALUES
(2, 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(225) NOT NULL,
  `Father_Name` varchar(225) NOT NULL,
  `Mother_Name` varchar(225) NOT NULL,
  `Date_of_Birth` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Pass` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Nationality` varchar(225) NOT NULL,
  `Religion` varchar(225) NOT NULL,
  `Class` varchar(225) NOT NULL,
  `Date` varchar(225) NOT NULL,
  `Report_Card` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `First_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Email`, `Pass`, `Phone`, `Address`, `Nationality`, `Religion`, `Class`, `Date`, `Report_Card`) VALUES
(2, 'Amna', 'Khan', 'test', '01-01-2004', 'a@gmail.com', '', '033345', 'testing', 'Pak', 'Islam', '10', '2022-06-27', 'test'),
(11, 'Ali', 'Khan', 'test', '2022-08-16', 'a@gmail.com', '', '03030', 'test', 'Pak', 'Islam', '9', '2022-08-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `Id` int(11) NOT NULL,
  `Image_Url` varchar(225) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Pass` varchar(225) NOT NULL,
  `Phone` varchar(225) NOT NULL,
  `Qualification` varchar(225) NOT NULL,
  `Subjects` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `onlie_fees_voucher`
--
ALTER TABLE `onlie_fees_voucher`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `onlie_fees_voucher`
--
ALTER TABLE `onlie_fees_voucher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
