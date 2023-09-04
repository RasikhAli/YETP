-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 11:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test4`
--

-- --------------------------------------------------------

--
-- Table structure for table `challanform`
--

CREATE TABLE `challanform` (
  `ChallanNo` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `RollNo` varchar(50) NOT NULL,
  `Courses` varchar(150) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `IssueDate` varchar(25) NOT NULL,
  `DueDate` varchar(25) NOT NULL,
  `TotalFee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `challanform`
--

INSERT INTO `challanform` (`ChallanNo`, `Name`, `RollNo`, `Courses`, `Type`, `IssueDate`, `DueDate`, `TotalFee`) VALUES
(52, 'Arsham Azam', 'YETP21001', 'Digital Marketing & MERN Stack', 'Online', '2021-07-17', '2021-07-17', 5500),
(53, 'Arsham Azam', 'YETP21012', 'Python Programming & Wordpress Development', 'Online', '2021-07-20', '2021-07-28', 5500);

-- --------------------------------------------------------

--
-- Table structure for table `logininfo`
--

CREATE TABLE `logininfo` (
  `ID` int(11) NOT NULL,
  `Username` varchar(80) NOT NULL,
  `Password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logininfo`
--

INSERT INTO `logininfo` (`ID`, `Username`, `Password`) VALUES
(1, 'Yetp21', 'yetp123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challanform`
--
ALTER TABLE `challanform`
  ADD PRIMARY KEY (`ChallanNo`);

--
-- Indexes for table `logininfo`
--
ALTER TABLE `logininfo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logininfo`
--
ALTER TABLE `logininfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
