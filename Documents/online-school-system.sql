-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 08:54 AM
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
-- Database: `online-school-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `Id` int(11) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Activity` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`Id`, `Image`, `Activity`) VALUES
(12, 'test', 'Sports'),
(13, 'Library', 'test'),
(14, 'Art & Craft', 'test');

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
  `Date` varchar(225) NOT NULL,
  `Day` varchar(225) NOT NULL,
  `Holiday` varchar(225) NOT NULL,
  `Detail` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`Id`, `Date`, `Day`, `Holiday`, `Detail`) VALUES
(2, '2022-09-05', 'Monday', 'Labour Day', 'Labour Day is an annual holiday to celebrate the achievements of workers.'),
(4, '2022-09-11', 'Sunday', 'Urs of Shah Abdul Latif Bhattai', 'Shah Abdul Latif (1689 – 1752) was a Sindhi Sufi scholar, mystic, saint, poet, and musician. He is known as the poet of Sindh. He died on January 1st 1752, which was 14 Safar 1165'),
(5, '2022-10-09', 'Sunday', 'Eid Milad-un-Nabi', 'Eid-e-Milad-un-Nabi or Mawlid is the birth anniversary of Prophet Muhammad. The popular Islamic festival is celebrated across the world in the third month of the Muslim lunar calendar.'),
(6, '2022-12-25', 'Sunday', 'Quaid-e-Azam Day', 'Quaid-e-Azam Day in Pakistan is celebrated every year on December 25. It is a celebration of Muhammad Ali Jinnah\'s birthday across Pakistan. He is believed to be the founder of the country and was known as \'Qaid-e-Azam,\' whic');

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
(2, 'test', 'My School Education System', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(11) NOT NULL,
  `First_Name` varchar(225) DEFAULT NULL,
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
  `Report_Card` varchar(225) NOT NULL,
  `Role` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `First_Name`, `Father_Name`, `Mother_Name`, `Date_of_Birth`, `Email`, `Pass`, `Phone`, `Address`, `Nationality`, `Religion`, `Class`, `Date`, `Report_Card`, `Role`) VALUES
(2, 'Amna', 'Khan', 'test', '01-01-2004', 'a@gmail.com', '123', '033345', 'testing', 'Pak', 'Islam', '10', '2022-06-27', 'test', 2);

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
  `Subjects` varchar(225) NOT NULL,
  `Role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`Id`, `Image_Url`, `Name`, `Email`, `Pass`, `Phone`, `Qualification`, `Subjects`, `Role`) VALUES
(4, '', 'Momna Khan', 'm@gmail.com', '123', '03000', 'B.A', 'English,Maths', 1),
(6, '', 'Amna', 'a@gmail.com', '', '0333344', 'BSC', 'Urdu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Fullname` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Pass` varchar(225) NOT NULL,
  `Role` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Fullname`, `Email`, `Pass`, `Role`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345', 0);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `onlie_fees_voucher`
--
ALTER TABLE `onlie_fees_voucher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
