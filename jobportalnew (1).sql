-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 09:14 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportalnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(10) NOT NULL,
  `auname` varchar(200) NOT NULL,
  `apasswd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `auname`, `apasswd`) VALUES
(1, 'sharath', 'king'),
(2, 'shazeb', 'fahmi');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `jobid` int(100) NOT NULL,
  `empid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`jobid`, `empid`) VALUES
(1, 1),
(1, 5),
(7, 1),
(12, 7),
(14, 1),
(18, 2),
(21, 1),
(23, 4),
(27, 4),
(28, 1),
(28, 2),
(28, 3),
(28, 4),
(28, 5),
(30, 5),
(34, 3),
(35, 4),
(36, 1),
(36, 4),
(37, 1),
(39, 6),
(40, 1),
(43, 1),
(43, 3),
(44, 1),
(44, 7),
(48, 3),
(51, 2),
(51, 3),
(52, 2),
(53, 1),
(54, 2),
(54, 6),
(57, 1),
(58, 3),
(59, 2),
(60, 2),
(61, 1),
(62, 3),
(62, 7),
(63, 3),
(74, 7),
(76, 7),
(77, 6),
(79, 1),
(80, 2),
(83, 5),
(84, 7),
(86, 1),
(88, 6),
(90, 4),
(91, 2),
(92, 6),
(93, 1),
(93, 2),
(94, 1),
(96, 3),
(96, 7),
(106, 1),
(108, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `cid` int(20) NOT NULL,
  `cuname` varchar(100) NOT NULL,
  `cpasswd` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `headquarter` varchar(200) NOT NULL,
  `ctype` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cuname`, `cpasswd`, `cname`, `headquarter`, `ctype`, `emailid`) VALUES
(1, 'wipro', 'WIPRO', 'Wipro', 'Bengaluru', 'MNC', 'wiprolimited@gmail.com'),
(2, 'airtel', 'airtel', 'Airtel Technologies', 'Dehli', 'MNC', '121@airtel.com'),
(3, 'ripple', 'ripple', 'Ripple Labs', 'California', 'Startup', 'ripple@cryptocurrency.com'),
(4, 'tata', 'tata', 'TATA consulatancy service', 'mumbai', 'MNC', 'tata@rediffmail.com'),
(5, 'reliance', 'reliance', 'Reliancer Industries Ltd', 'Mumbai', 'MNC', 'reliance@hotmail.com'),
(6, 'cobrapost', 'cobrapost', 'CobraPost', 'New Dehli', 'Startup', 'investigation@cobrapost.com'),
(7, 'salesforce', 'salesforce', 'Salesforce', 'San francisco', 'Startup', 'trailhead@salesforce.com'),
(8, 'saplabs', 'saplabs', 'SAP Labs', 'Walldorf', 'MNC', 'helpdesk@saplabs.com'),
(9, 'amazon', 'amazon', 'Amazon Web Technologies', 'Chennai', 'MNC', 'info@amazon.com'),
(11, 'bosch', 'bosch', 'Bosch', 'Berlin', 'MNC', 'contact@rexroth.com'),
(12, 'bbcnews', 'bbcnews', 'BBC World News Pvt  Ltd', 'london', 'MNC', 'hr@bbcnews.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(20) NOT NULL,
  `euname` varchar(200) NOT NULL,
  `epasswd` varchar(200) NOT NULL,
  `ename` varchar(200) NOT NULL,
  `edob` varchar(200) NOT NULL,
  `eemailid` varchar(200) NOT NULL,
  `etype` varchar(200) NOT NULL,
  `esex` varchar(200) NOT NULL,
  `eten` float NOT NULL,
  `etwelve` float NOT NULL,
  `ecgpa` float NOT NULL,
  `ehobby` varchar(200) NOT NULL,
  `eskill` varchar(200) NOT NULL,
  `mobno` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `euname`, `epasswd`, `ename`, `edob`, `eemailid`, `etype`, `esex`, `eten`, `etwelve`, `ecgpa`, `ehobby`, `eskill`, `mobno`) VALUES
(1, 'tejas', 'tejas', 'Tejas D', '17/04/1998', 'tejasdinesh@gmail.com', 'fresher', 'male', 99.23, 95.65, 9.65, 'listening music,watching movies', 'FrontEnd Engineer', '8951223645'),
(2, 'yagnesh', 'yagnesh', 'yajnesh', '21/02/1998', 'yagnesh39@manglore.com', 'fresher', 'male', 50.65, 60.2, 8.6, 'flurting,roaming,managing', 'Team Lead', '9988635126'),
(3, 'vaishak', 'vaishak', 'vaishak', '22/03/1999', 'vaishak@yahoo.com', 'experienced', 'male', 85, 66, 9.1, 'assisting,music,watching series', 'HR Manager', '9845632145'),
(4, 'sagarika', 'sagarika', 'Sagarika', '15/11/1998', 'sagarika@gmail.com', 'fresher', 'female', 59.26, 96.2, 8.36, 'music,sleeping,reading novels', 'Full Stack Developer', '8951223654'),
(5, 'shravan', 'shravan', 'shravan', '26/08/1996', 'shravan@reddifmail.com', 'experienced', 'male', 96.25, 98.36, 9.1, 'reading novels, coding', 'Q/A TEST Engineer', '9456875236'),
(6, 'kavya', 'kavya', 'kavya', '22/03/1994', 'kavya@outlook.com', 'experienced', 'female', 85.69, 88.69, 8.62, 'modelling, dancing', 'Data Scientist', '6352417896'),
(7, 'girija', 'girija', 'Girija', '16/07/1991', 'giri@microsoft.com', 'experienced', 'female', 45.36, 65.26, 6.35, 'painting, travelling', 'Software  Engineer', '8951236574');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(20) NOT NULL,
  `compid` int(20) NOT NULL,
  `type` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `ctc` float NOT NULL,
  `yoe` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `compid`, `type`, `location`, `ctc`, `yoe`) VALUES
(1, 2, 'BackEnd Engineer', 'Bengaluru', 3.5, 1),
(2, 2, 'BackEnd Engineer', 'Chennai', 3.5, 1),
(3, 2, 'BackEnd Engineer', 'Noida', 3.5, 1),
(4, 2, 'BackEnd Engineer', 'Pune', 3.5, 1),
(5, 2, 'Data Scientist', 'Ahmadabad', 7.3, 1),
(6, 2, 'Data Scientist', 'Cochin', 7.1, 1),
(7, 2, 'Data Scientist', 'Ghuwati', 8.5, 1),
(8, 2, 'Full Stack Developer', 'Bengaluru', 6, 1),
(9, 2, 'Full Stack Developer', 'Mumbai', 4.5, 2),
(10, 2, 'Full Stack Developer', 'Noida', 3.7, 2),
(11, 2, 'FrontEnd Engineer', 'Pune', 3, 0),
(12, 2, 'FrontEnd Engineer', 'Chennai', 3, 4),
(13, 2, 'FrontEnd Engineer', 'Cochin', 3.8, 1),
(14, 1, 'Data Scientist', 'Bengaluru', 5.5, 0),
(15, 1, 'Data Scientist', 'Chennai', 7.2, 3),
(16, 1, 'Data Scientist', 'Pune', 4.5, 1),
(17, 1, 'Data Scientist', 'Ghuwati', 8, 1),
(18, 1, 'Full Stack Developer', 'Bengaluru', 4.5, 1),
(19, 1, 'Full Stack Developer', 'Pune', 3, 0),
(20, 1, 'Full Stack Developer', 'Mumbai', 6, 5),
(21, 1, 'FrontEnd Engineer', 'Pune', 8, 4),
(22, 1, 'FrontEnd Engineer', 'Ahmadabad', 4.1, 2),
(23, 1, 'FrontEnd Engineer', 'Noida', 12, 3),
(24, 1, 'FrontEnd Engineer', 'Mumbai', 5.8, 1),
(25, 1, 'FrontEnd Engineer', 'Ahmadabad', 4.2, 1),
(26, 1, 'HR Manager', 'Bengaluru', 6, 3),
(27, 1, 'HR Manager', 'Noida', 15, 6),
(28, 1, 'HR Manager', 'Mumbai', 3.5, 2),
(29, 1, 'HR Manager', 'Ahmadabad', 8, 4),
(30, 1, 'HR Manager', 'Bengaluru', 12, 4),
(31, 1, 'HR Manager', 'Pune', 15, 12),
(32, 1, 'Software  Engineer', 'Pune', 8, 4),
(33, 1, 'Q/A TEST Engineer', 'Ghuwati', 3.5, 4),
(34, 1, 'Team Lead', 'Chennai', 5.6, 3),
(35, 3, 'HR Manager', 'Noida', 8.12, 1),
(36, 3, 'Software  Engineer', 'Cochin', 5.1, 3),
(37, 3, 'Q/A TEST Engineer', 'Noida', 7.2, 10),
(38, 3, 'Team Lead', 'Mumbai', 6.1, 3),
(39, 3, 'Full Stack Developer', 'Pune', 7, 5),
(40, 4, 'FrontEnd Engineer', 'Pune', 5, 1),
(41, 4, 'HR Manager', 'Noida', 7.9, 10),
(42, 4, 'FrontEnd Engineer', 'Noida', 4.5, 15),
(43, 4, 'HR Manager', 'Cochin', 8, 4),
(44, 4, 'Team Lead', 'Ghuwati', 6.7, 5),
(45, 4, 'Data Scientist', 'Mumbai', 6.3, 3),
(46, 5, 'Data Scientist', 'Mumbai', 5.1, 1),
(47, 5, 'FrontEnd Engineer', 'Chennai', 6.1, 2),
(48, 5, 'Q/A TEST Engineer', 'Mumbai', 8, 4),
(49, 5, 'Q/A TEST Engineer', 'Mumbai', 7.7, 0),
(50, 5, 'Full Stack Developer', 'Pune', 7.2, 0),
(51, 5, 'Software  Engineer', 'Ghuwati', 5.1, 6),
(52, 5, 'Q/A TEST Engineer', 'Ghuwati', 5.5, 2),
(53, 5, 'Data Scientist', 'Mumbai', 4.89, 6),
(54, 5, 'Q/A TEST Engineer', 'Pune', 6, 3),
(55, 6, 'Data Scientist', 'Noida', 3.4, 1),
(56, 6, 'Data Scientist', 'Mumbai', 10, 0),
(57, 6, 'HR Manager', 'Pune', 7.2, 1),
(58, 6, 'HR Manager', 'Ghuwati', 7.2, 1),
(59, 6, 'Team Lead', 'Mumbai', 6.4, 2),
(60, 6, 'FrontEnd Engineer', 'Ghuwati', 3.5, 0),
(61, 6, 'HR Manager', 'Chennai', 6.3, 6),
(62, 6, 'Q/A TEST Engineer', 'Mumbai', 6.4, 5),
(63, 6, 'Q/A TEST Engineer', 'Cochin', 3.6, 2),
(64, 7, 'HR Manager', 'Pune', 4.5, 3),
(65, 7, 'BackEnd Engineer', 'Noida', 4.5, 4),
(66, 7, 'BackEnd Engineer', 'Noida', 3.6, 0),
(67, 7, 'BackEnd Engineer', 'Pune', 8, 3),
(68, 7, 'BackEnd Engineer', 'Ghuwati', 3.8, 1),
(69, 7, 'BackEnd Engineer', 'Mumbai', 6.8, 1),
(70, 7, 'BackEnd Engineer', 'Ahmadabad', 3.4, 0),
(71, 7, 'BackEnd Engineer', 'Cochin', 5, 2),
(72, 7, 'Data Scientist', 'Bengaluru', 3.9, 3),
(73, 7, 'Data Scientist', 'Noida', 6, 2),
(74, 7, 'Data Scientist', 'Ghuwati', 3.5, 4),
(75, 7, 'Data Scientist', 'Pune', 15, 1),
(76, 7, 'Data Scientist', 'Ahmadabad', 20, 0),
(77, 7, 'Full Stack Developer', 'Pune', 20, 3),
(78, 7, 'Full Stack Developer', 'Ghuwati', 6, 2),
(79, 7, 'Full Stack Developer', 'Ahmadabad', 9.5, 2),
(80, 7, 'Full Stack Developer', 'Cochin', 6, 3),
(81, 7, 'FrontEnd Engineer', 'Bengaluru', 7.2, 4),
(82, 7, 'FrontEnd Engineer', 'Chennai', 6, 2),
(83, 7, 'FrontEnd Engineer', 'Mumbai', 5.5, 1),
(84, 8, 'Full Stack Developer', 'Noida', 6, 2),
(85, 8, 'HR Manager', 'Pune', 7.2, 1),
(86, 8, 'Team Lead', 'Ghuwati', 4.5, 2),
(87, 8, 'Q/A TEST Engineer', 'Ghuwati', 7.2, 2),
(88, 8, 'Full Stack Developer', 'Pune', 8, 3),
(89, 8, 'Full Stack Developer', 'Noida', 3.6, 1),
(90, 8, 'HR Manager', 'Noida', 30, 6),
(91, 8, 'Software  Engineer', 'Bengaluru', 35, 3),
(92, 9, 'Data Scientist', 'Bengaluru', 5.6, 1),
(93, 9, 'Full Stack Developer', 'Chennai', 6, 0),
(94, 9, 'HR Manager', 'Pune', 6, 1),
(95, 9, 'HR Manager', 'Pune', 6, 3),
(96, 9, 'Team Lead', 'Cochin', 3.8, 2),
(97, 5, 'BackEnd Engineer', 'Bengaluru', 25, 4),
(98, 5, 'BackEnd Engineer', 'Bengaluru', 30, 10),
(99, 8, 'BackEnd Engineer', 'Bengaluru', 5.5, 2),
(100, 8, 'BackEnd Engineer', 'Bengaluru', 6, 3),
(101, 4, 'BackEnd Engineer', 'Bengaluru', 13, 5),
(102, 4, 'BackEnd Engineer', 'Bengaluru', 3.6, 0),
(103, 9, 'BackEnd Engineer', 'Bengaluru', 8, 5),
(104, 9, 'BackEnd Engineer', 'Bengaluru', 9, 2),
(105, 4, 'Q/A TEST Engineer', 'Pune', 8, 2),
(106, 4, 'Q/A TEST Engineer', 'Pune', 8, 2),
(107, 4, 'HR Manager', 'Noida', 6, 2),
(108, 4, 'Full Stack Developer', 'Ghuwati', 7.2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `temp_comp`
--

CREATE TABLE `temp_comp` (
  `cuname` varchar(200) NOT NULL,
  `cpasswd` varchar(200) NOT NULL,
  `cname` varchar(200) NOT NULL,
  `headquarter` varchar(200) NOT NULL,
  `ctype` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_comp`
--

INSERT INTO `temp_comp` (`cuname`, `cpasswd`, `cname`, `headquarter`, `ctype`, `emailid`) VALUES
('bosch', 'bosch', 'Bosch', 'Berlin', 'MNC', 'contact@rexroth.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `auname` (`auname`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`jobid`,`empid`),
  ADD KEY `empid` (`empid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cuname` (`cuname`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `euname` (`euname`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `compid` (`compid`);

--
-- Indexes for table `temp_comp`
--
ALTER TABLE `temp_comp`
  ADD UNIQUE KEY `cuname` (`cuname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applied`
--
ALTER TABLE `applied`
  ADD CONSTRAINT `applied_ibfk_1` FOREIGN KEY (`jobid`) REFERENCES `job` (`jid`),
  ADD CONSTRAINT `applied_ibfk_2` FOREIGN KEY (`empid`) REFERENCES `employee` (`eid`);

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`compid`) REFERENCES `company` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
