-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 11:31 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docsrecord`
--

-- --------------------------------------------------------

--
-- Table structure for table `symp`
--

CREATE TABLE `symp` (
  `ID` int(10) NOT NULL,
  `appointment_id` varchar(15) NOT NULL,
  `doctor_id` int(18) NOT NULL,
  `pain` tinyint(5) NOT NULL DEFAULT '0',
  `body pain` tinyint(4) NOT NULL DEFAULT '0',
  `fatigue` tinyint(5) NOT NULL DEFAULT '0',
  `headache` tinyint(5) NOT NULL DEFAULT '0',
  `infection` tinyint(5) NOT NULL DEFAULT '0',
  `abdominal pain` tinyint(6) NOT NULL DEFAULT '0',
  `anxiety` tinyint(5) NOT NULL DEFAULT '0',
  `nausea` tinyint(5) NOT NULL DEFAULT '0',
  `common cold` tinyint(5) NOT NULL DEFAULT '0',
  `dizziness` tinyint(5) NOT NULL DEFAULT '0',
  `diarrhea` tinyint(5) NOT NULL DEFAULT '0',
  `constipation` tinyint(5) NOT NULL DEFAULT '0',
  `hypertension` tinyint(5) NOT NULL DEFAULT '0',
  `fever` tinyint(5) NOT NULL DEFAULT '0',
  `cough` tinyint(5) NOT NULL DEFAULT '0',
  `tinnitus` tinyint(5) NOT NULL DEFAULT '0',
  `perspiration` tinyint(5) NOT NULL DEFAULT '0',
  `migraine` tinyint(5) NOT NULL DEFAULT '0',
  `anorxeia` tinyint(5) NOT NULL DEFAULT '0',
  `bloating` tinyint(5) NOT NULL DEFAULT '0',
  `muscle pain` tinyint(5) NOT NULL DEFAULT '0',
  `arthritis` tinyint(5) NOT NULL DEFAULT '0',
  `problem` text NOT NULL,
  `descr_title` varchar(200) NOT NULL,
  `descr_content` text NOT NULL,
  `date_of_entry` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `symp`
--
ALTER TABLE `symp`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `appointment_id` (`appointment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `symp`
--
ALTER TABLE `symp`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
