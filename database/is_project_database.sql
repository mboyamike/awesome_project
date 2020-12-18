-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is_project_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`First Name`, `Last Name`, `Email`, `Password`) VALUES
('EDMOND', 'MENYA', 'EMenya88@gmail.com', 'LEC@STRATH'),
('Edmond ', 'Menya', 'Emenya@strathmore.edu', 'LEC@STRATH');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Scheduled_Time` datetime(6) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `Department_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Scheduled_Time`, `Email`, `Location`, `Department_Name`) VALUES
('2020-12-18 18:32:06.000000', 'maryann.ruto@strathmore.edu', 'Strathmore Medical Center', 'Maternity'),
('2020-12-21 23:49:42.000000', 'maryann.ruto@strathmore.edu', 'Strathmore Medical Center', 'Maternity'),
('2020-12-25 09:05:00.000000', 'maryann.ruto@strathmore.edu', 'KNH', 'Maternity'),
('2021-01-01 11:04:00.000000', 'maryann.ruto@strathmore.edu', 'Strathmore University Medical Center', 'Maternity');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_Name` int(11) NOT NULL,
  `Department_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medication`
--

CREATE TABLE `medication` (
  `Medicine_ID` int(11) NOT NULL,
  `Medicine_Name` varchar(255) NOT NULL,
  `Medicine_Type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medication`
--

INSERT INTO `medication` (`Medicine_ID`, `Medicine_Name`, `Medicine_Type`, `Description`, `Email`) VALUES
(1, 'insulin', 'diabetes', '1x5 ', 'maryann.ruto@strathmore.edu');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_ID` int(255) NOT NULL,
  `Pregnancy_Trimester` varchar(255) NOT NULL,
  `Medical_Condition` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_ID`, `Pregnancy_Trimester`, `Medical_Condition`, `Email`) VALUES
(1, '3', 'diabetes', 'maryann.ruto@strathmore.edu'),
(2, '', '', 'roselindamwita@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `physician`
--

CREATE TABLE `physician` (
  `Physician_ID` varchar(255) NOT NULL,
  `Physician_Name` varchar(255) NOT NULL,
  `Department_Number` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `User_Type` varchar(255) NOT NULL DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`First_Name`, `Last_Name`, `Email`, `Password`, `User_Type`) VALUES
('Edmond', 'Menya', 'edmondmenya@gmail.com', '$2y$10$XhbhdRuO0XJK1yZ7b8xTsOA3gsbBiEnSjC7RCF8i0R0nf0NoSjo12', 'doctor'),
('Maryann', 'Ruto', 'maryann.ruto@strathmore.edu', '$2y$10$tJvi9DVP5iW/g7guSFuzO.l1iuk3HXGeJwibtr/snpVbKjVFpMyde', 'patient'),
('Melissa', 'Mungai', 'melissa.mungai@strathmore.edu', '$2y$10$XhbhdRuO0XJK1yZ7b8xTsOA3gsbBiEnSjC7RCF8i0R0nf0NoSjo12', 'doctor'),
('Rachel', 'Kanini', 'rachel.kanini@strathmore.edu', '$2y$10$XhbhdRuO0XJK1yZ7b8xTsOA3gsbBiEnSjC7RCF8i0R0nf0NoSjo12', 'doctor'),
('Roselinda', 'Mwita', 'roselindamwita@gmail.com', '$2y$10$2nfSP9OmXGc7AsVqsge4MeIeYJoiJaWBfjh8P9FX739I6Xdvktgbm', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Scheduled_Time`,`Email`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_Number`);

--
-- Indexes for table `medication`
--
ALTER TABLE `medication`
  ADD PRIMARY KEY (`Medicine_ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_ID`);

--
-- Indexes for table `physician`
--
ALTER TABLE `physician`
  ADD PRIMARY KEY (`Physician_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medication`
--
ALTER TABLE `medication`
  MODIFY `Medicine_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
