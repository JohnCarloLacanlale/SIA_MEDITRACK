-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 04:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nt3101`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_ID` varchar(255) NOT NULL, 
  `empid` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_ID`, `empid`, `address`) VALUES
('1', '1', 'Pulo'),
('2', '1', 'Lipa'),
('2', '1', 'San Jose');

-- --------------------------------------------------------

--
-- Table structure for table `stud_table`
--

CREATE TABLE `stud_table` (
  `student_ID` int(11) NOT NULL, 
  `studid` int(11) NOT NULL,
  `SRCode` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_table`
--

INSERT INTO `stud_table` (`student_ID`, `studid`, `SRCode`,`birth_date`, `gender`, `address`) VALUES
(1, '1', '21-30099','11-11-2002', 'Male', 'Lipa'),
(2, '2', '21-11223','11-11-2002', 'Female', 'Lipa City');

-- --------------------------------------------------------

--
-- Table structure for table `tbempinfo`
--

CREATE TABLE `tbempinfo` (
  `empid` int(11) NOT NULL, 
  `lastname` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `department` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;  -- Add semicolon here



-- --------------------------------------------------------

--
-- Table structure for table `tbprescription`
--

CREATE TABLE `tbprescription` (
  `prescriptionID` int(11) NOT NULL,
  `PrescriptionDate` date NOT NULL,
  `Symptoms` varchar(255) NOT NULL,
  `Prescription` varchar(255) NOT NULL,
  `empID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbstudinfo`
--

CREATE TABLE `tbstudinfo` (
  `studid` int(11) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `course` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbstudinfo`
--

INSERT INTO `tbstudinfo` (`studid`, `lastname`, `firstname`, `course`) VALUES
(1, 'andes', 'kyla', 'bsit'),
(2, 'alay', 'kathleen', 'bsit');

-- --------------------------------------------------------

--
-- Table structure for table `viewrecord_table`
--

CREATE TABLE `viewrecord_table` (
  `record_ID` int(11) NOT NULL,
  `student_ID` int(11) DEFAULT NULL,
  `doctor` varchar(255) DEFAULT NULL,
  `prescription` text DEFAULT NULL,
  `symptoms` text DEFAULT NULL,
  `body_temperature` decimal(5,2) DEFAULT NULL,
  `pulse_rate` int(11) DEFAULT NULL,
  `rate_of_breathing` int(11) DEFAULT NULL,
  `blood_pressure` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `viewrecord_table`
--

INSERT INTO `viewrecord_table` (`record_ID`, `student_ID`, `doctor`, `prescription`, `symptoms`, `body_temperature`, `pulse_rate`, `rate_of_breathing`, `blood_pressure`) VALUES
(1, 1, 'Alay', 'Take Med 2x a day', 'Fever', '36.10', 16, 16, '120/80'),
(2, 2, 'Quack', 'Drink water moderately', 'Dehydrated', '36.10', 12, 16, '120/80'),
(3, 3, 'Park', 'take med 2x a day', 'Fever', '36.10', 16, 16, '120/80');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_table`
--
ALTER TABLE `stud_table`
  ADD PRIMARY KEY (`student_ID`);

--
-- Indexes for table `tbempinfo`
--
ALTER TABLE `tbempinfo`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `tbprescription`
--
ALTER TABLE `tbprescription`
  ADD PRIMARY KEY (`prescriptionID`);

--
-- Indexes for table `tbstudinfo`
--
ALTER TABLE `tbstudinfo`
  ADD PRIMARY KEY (`studid`);

--
-- Indexes for table `viewrecord_table`
--
ALTER TABLE `viewrecord_table`
  ADD PRIMARY KEY (`record_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_table`
--
ALTER TABLE `stud_table`
  MODIFY `student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbempinfo`
--
ALTER TABLE `tbempinfo`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbprescription`
--
ALTER TABLE `tbprescription`
  MODIFY `prescriptionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbstudinfo`
--
ALTER TABLE `tbstudinfo`
  MODIFY `studid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `viewrecord_table`
--
ALTER TABLE `viewrecord_table`
  MODIFY `record_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
