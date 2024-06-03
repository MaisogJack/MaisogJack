-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2024 at 06:31 AM
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
-- Database: `db4`
--

-- --------------------------------------------------------

--
-- Table structure for table `joyce`
--

CREATE TABLE `joyce` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Age` int(3) NOT NULL,
  `bday` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Salary` int(255) NOT NULL,
  `Bonus` int(255) NOT NULL,
  `Pay` int(255) NOT NULL,
  `Pension` int(255) NOT NULL,
  `Funds` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joyce`
--

INSERT INTO `joyce` (`Id`, `Name`, `Age`, `bday`, `Address`, `Gender`, `Salary`, `Bonus`, `Pay`, `Pension`, `Funds`) VALUES
(1, 'celherson a guzman', 22, '2024-04-27', 'MEYCUAYAN BULACAN', 'Male', 5000, 2000, 400, 200, 165000),
(2, 'Ana Caylen', 12, '2024-04-03', 'MEYCUAYAN BULACAN', 'Female', 40000, 90000, 400, 123, 12414);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginID` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` int(255) NOT NULL,
  `Account_Type` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `joyce`
--
ALTER TABLE `joyce`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `joyce`
--
ALTER TABLE `joyce`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
