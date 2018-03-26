-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 07:33 AM
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
-- Table structure for table `docsinfo`
--

CREATE TABLE `docsinfo` (
  `ID` int(4) NOT NULL,
  `Doctor Name` varchar(30) NOT NULL,
  `Specialist` varchar(50) NOT NULL,
  `Experience` varchar(30) NOT NULL,
  `Degree` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Contact No` int(10) NOT NULL,
  `Fee` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docsinfo`
--

INSERT INTO `docsinfo` (`ID`, `Doctor Name`, `Specialist`, `Experience`, `Degree`, `City`, `Contact No`, `Fee`) VALUES
(1400, 'Dr Amir Shankar Singh', 'Joint Pain', '4+ Years of Experience', 'M.B.B.S', 'Chandigarh', 1724692222, '800'),
(1402, 'Dr RK Behl', 'Dehydration Symptoms', '30+ years experience', 'MBBS, MD', 'Mohali', 1724692222, '1200'),
(1404, 'Dr Sumedha Banerjee', 'Brain Trauma', '5+ years experience', 'M.Phil, M.Sc(Applied Psycholog', 'Mohali', 1724692222, '1000'),
(1406, 'Dr. Ajitabh Srivastava', 'HIV Infection Symptoms', '12+ years of experience', 'M.B.B.S', 'Gurgaon', 1147135000, '1500'),
(1408, 'Abhilekh Srivastav', 'Headache and Movement Symptoms', '3+ years of experience', 'M.B.B.S, MD general medicine', 'Kolkata', 781658472, '1800'),
(1410, 'Dr. Alok Yadav', 'Eye pain', '5+ years of experience', 'MBBS, MD(Pediatrics)', 'Kangra', 1892242555, '1500'),
(1412, 'Dr Avantika Agarwal', 'Behavior Disorder', '5+ years of experience', 'MBBS (Mental Health and Behavi', 'Noida', 1204300222, '800'),
(1414, 'Dr Bijendra Kumar Sinha', 'Diarrhea', '12+ years of experience', 'MS (GENERAL SURGERY), FIAGES, ', 'Gurgaon', 1244962200, '1000'),
(1416, 'Dr Binayak Chanda', 'Caner,Throat', '15+ Years Of Experience', ' MBBS MRCS Glas FRCS CTh Glasg', 'Kolkata', 366284441, '1300'),
(1418, 'Dr Amrutha Balakrishnan', 'Abdominal Pain', '12+ Years Of Experience', 'Internal Medicine Specialist', 'Chandigarh', 1725061222, '1200'),
(1420, 'Dr Geetha M. Arora', 'Joint Pain', '5+ years of experience', 'MBBS,Occupational Therapist', 'Delhi', 1145302222, '1200'),
(1422, 'Dr Kedar Tilwe', 'Altered Mental Status', '7+ years of Experience', 'DNB Psychiatry, DPM', 'Mulund', 243654365, '2000'),
(1424, 'Dr Nikunj Agarwal', 'Swelling, warmth, or redness in the joint.', '8+ years of experinence', 'Swelling, warmth, or redness i', 'Noida', 1204300222, '2500'),
(1426, 'Dr Prateek Tripathi', 'Gastritis Symptoms and Signs', '7+ years of experience', 'D.M (Nephrology)', 'Jaipur', 1412547000, '1500l'),
(1428, 'Dr Priya Gupta', 'Vaginal Pain, Vaginal Bleeding', '15+ Years Of Experience', 'MS - Gynaecology & Obstetrics', 'Jaipur', 1412547000, '1800'),
(1430, 'Dr Ritu Joshi', 'Vaginal Pain', '33+ years experience', 'MS - Gynaecology & Obstetrics', 'Jaipur', 1412547000, '1300'),
(1432, 'Dr Vijay Kumar Harjai', 'Brain Tumor Symptoms', '37+ Years Of Experience', 'MBBS,MD', 'Banglore', 1725061222, '1600'),
(1434, 'Dr. (Col) R. S. Chatterji', 'Burning Mouth Syndrome', '36+ Years Of Experience', 'MD, DNB, MBBS', 'Vasant Kunj Amritsar', 1142776222, '2000'),
(1436, 'Dr. A. K. Singh', 'Breast Cancer Symptoms', '8+ Years of Experience', 'MBBS, MD, EDRM (Switzerland), ', 'Okhla Road, New Delh', 1147135000, '2000'),
(1438, 'Dr. A.A. Chikhalikar', 'Appendictis', '9+ Years of Experience', 'MBBS,MD(General Medicine)', 'Mahim', 226652966, '2500'),
(1440, 'Dr. A.B. Prabhu', 'Dry Skin', '9+ Years Of Experience', 'M.Ch Plastic Surgery', 'Mohali', 1725021222, '1800'),
(1442, 'Dr. A.Govinda Prakash', 'Diabetes and Metabolic disorders', '15+ Years Of Experience', 'MBBS, MD', 'Nagarbhavi', 823014444, '1600'),
(1444, 'Dr. A.K. Singal', 'Nausea', '11+ Years Of Experience', 'MBBS', 'Vashi', 239199222, '1800'),
(1446, 'Dr. A.P Misra', 'Hearing Loss', '30+ Years Of Experience', 'MD (Internal Medicine), MBBS', 'Vasant Kunj', 1142776222, '2000'),
(1448, 'Dr. A.S Bawa', 'Jaundice', '22+ Years Of Experience', ' MS and MCh.', 'Mohali', 1724692222, '1900'),
(1450, 'Dr. A.S.Bhoraskar', 'Gall Bladder Attack Symptoms', '34+ Years Of Experience', 'DM', ' Mahim', 266529666, '3000'),
(1452, 'Dr. AB Govindaraj', 'Joint Problems', '32+ Years Of Experience', 'FRCS (Orthopaedics and Joint R', 'Chennai', 442892222, '2500'),
(1454, 'Dr. AS Chilana', 'Chest Congestion', '5+ years of experience', 'MBBS,MS', 'Chennai', 1145302222, '2300'),
(1456, 'Dr. Aashish Shah', 'Gastric Problems', '14+ Years Of Experience', 'gastrointestinal and laparosco', 'Bengaluru', 866214444, '1950'),
(1458, 'Dr. Aashish Shah', 'Breathing Poblem', '18+ Years Of Experience', 'FRCS(Glas.), DNB, MS(Gen. Surg', 'Dehradun', 841994444, '1800'),
(1460, 'Dr. Aashish Sharma', 'Kidney Problems', '6+ Years Of Experience', 'D.N.B Nephrology', ' Amritsar', 1833012222, '2500'),
(1462, 'Dr. Abhishek Puri', 'Breast Cancer', '10+ Years of Experience', 'MBBS, DNB', 'Mohali', 1724692222, '1800'),
(1464, 'Dr. Ajay Agarwal', 'Dehydration Symptoms', '18+ Years Of Experience', 'MD (Internal Medicine)', 'Noida', 1720430222, '1550'),
(1466, 'Dr. Ajay Kashyap', 'Joints problems', '14+ Years Of Experience', 'American Board certified surge', 'Greater Kailash, New', 1140579400, '1250'),
(1468, 'Dr. Ajay Kumar Kriplani', 'Anzeima', '33+ Years Of Experience', 'MBBS, MS, FALS, FICLS, FIAGES', 'Kanpur', 1244962200, '1650'),
(1472, 'Dr. Ajay Nihlani', 'Mental Disorder', '5+ years of Experience', 'MRCPsych Medicine-Psychiatry', 'Noida', 1204300222, '1250'),
(1474, 'Dr. Ajay Pal Singh', 'Behavior and Mental Disorder', '32+ Years Of Experience', 'M.D (Psychiatry)', 'Ludhiana', 1615222333, '1650'),
(1476, 'Dr. Ajay S Bhambri', 'Chest Pain', '17+ Years Of Experience', 'D. Ortho, MCh', 'Mohali', 1725021222, '2250'),
(1478, 'Dr. Ajay Sharma', 'Asthma Problem', '4+ Years Of Experience', 'MS (General Surgery)', 'Jaipur', 1412547000, '2600'),
(1480, 'Dr. Ajit Kumar Agarwal', 'Nausea or Vomiting', '30+ Years Of Experience', 'MBBS, CCST (UK) ', 'Kolkata', 336628444, '1950'),
(1482, 'Dr. Akhil Gautam', 'Heart or Cardiac Problem', '9+ years of Experience', 'MBBS, MD, DM ', 'Kangra', 1892242555, '1450'),
(1484, 'Dr. Amandeep Singh', 'Constopation', '8+ Years Of Experience', 'MBBS, MD(Medicine)', 'Faridabad', 1292466000, '1350'),
(1486, 'Deepti Khatuja', 'Food Allergy', '3+ years of Experience', 'MSc - therapeutic Nutrition  ', 'Gurgaon', 1244962200, '1150'),
(1488, 'Dr. Aman Gupta', 'Abdominal Pain', '5.7+ Years Of Experience', 'M.Ch , M.S.(Gen.Surgery)', 'Vasant Kunj', 1142776222, '1650'),
(1490, 'Dr. Amanjot Kaur Arora', 'Skin Infection', '6+ Years Of Experience', 'MD, DNB', 'Chandigarh', 1725061222, '1750');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docsinfo`
--
ALTER TABLE `docsinfo`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
