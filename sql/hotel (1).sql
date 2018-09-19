-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 03:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hallbook`
--

CREATE TABLE IF NOT EXISTS `hallbook` (
`custId` int(20) NOT NULL,
  `chk_in` date NOT NULL,
  `chk_out` date NOT NULL,
  `capacity` int(10) NOT NULL,
  `noOfperson` int(10) NOT NULL,
  `price` int(10) NOT NULL,
  `package` varchar(20) NOT NULL,
  `cus_nic` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hallbook`
--

INSERT INTO `hallbook` (`custId`, `chk_in`, `chk_out`, `capacity`, `noOfperson`, `price`, `package`, `cus_nic`) VALUES
(56, '2018-08-29', '2018-08-29', 456, 12, 12, 'hall-B', ''),
(57, '2018-08-29', '2018-08-29', 56, 45, 48, 'hall-B', ''),
(58, '2018-08-30', '2018-08-30', 2323, 12121, 222, 'supreme', ''),
(59, '2018-08-31', '2018-09-02', 148, 589, 450, 'hall-B', ''),
(65, '2018-09-02', '2018-09-02', 25, 56, 456, 'hallA', '');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE IF NOT EXISTS `halls` (
  `cusId` int(10) DEFAULT NULL,
  `hallId` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `hallType` varchar(50) NOT NULL,
  `noOfhalls` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`cusId`, `hallId`, `price`, `hallType`, `noOfhalls`) VALUES
(52, 1, 100000, 'hallA', 1),
(53, 2, 200000, 'hallB', 1),
(54, 3, 300000, 'hallC', 1),
(55, 4, 300000, 'hallD', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE IF NOT EXISTS `roombook` (
`cusId` int(10) NOT NULL,
  `chk_in` date NOT NULL,
  `chk_out` date NOT NULL,
  `noOfrooms` int(10) NOT NULL,
  `noOfadults` int(10) NOT NULL,
  `noOfchild` int(10) NOT NULL,
  `roomType` varchar(50) NOT NULL,
  `bookingId` int(20) NOT NULL,
  `cus_nic` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`cusId`, `chk_in`, `chk_out`, `noOfrooms`, `noOfadults`, `noOfchild`, `roomType`, `bookingId`, `cus_nic`) VALUES
(74, '2018-09-13', '2018-09-14', 0, 0, 0, 'Deluxe', 0, '951020770'),
(75, '2018-09-14', '2018-09-15', 0, 0, 0, 'Deluxe', 0, '951020770v');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
`RoomID` int(11) NOT NULL,
  `roomType` varchar(100) NOT NULL,
  `priceForNight` float NOT NULL,
  `priceForHours` float NOT NULL,
  `noOfRooms` int(11) NOT NULL,
  `noOfRoomsAvailable` int(11) NOT NULL,
  `roomNo` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`RoomID`, `roomType`, `priceForNight`, `priceForHours`, `noOfRooms`, `noOfRoomsAvailable`, `roomNo`) VALUES
(1, 'Deluxe', 16000, 2000, 10, 10, 0),
(3, 'Supreme', 20000, 4000, 7, 6, 0),
(4, 'Honeymoon', 15000, 222, 4, 4, 0),
(5, 'Premier', 25000, 5000, 2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userbooking`
--

CREATE TABLE IF NOT EXISTS `userbooking` (
`cusId` int(11) NOT NULL,
  `MrMs` varchar(10) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nic_pass` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `unique_code` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userbooking`
--

INSERT INTO `userbooking` (`cusId`, `MrMs`, `f_name`, `l_name`, `gender`, `nic_pass`, `address`, `mobile`, `email`, `unique_code`) VALUES
(56, 'Ms', 'saranh', 'sarab', '', '95551\r\n\r\n', 'klkjlkjlkj', 'System.Windows.Forms', 'System.Windows.Forms.TextBox, Text: jkkkkmm', ''),
(57, 'Ms', 'saranh', 'sarab', '', '95551\r\n\r\n', 'klkjlkjlkj', 'System.Windows.Forms', 'System.Windows.Forms.TextBox, Text: jkkkkmm', ''),
(58, 'Ms', 'saranh', 'sarab', '', '95551\r\n\r\n', 'klkjlkjlkj', 'System.Windows.Forms', 'System.Windows.Forms.TextBox, Text: jkkkkmm', ''),
(59, 'Ms', 'saranh', 'sarab', '', '95551\r\n\r\n', 'klkjlkjlkj', 'System.Windows.Forms', 'System.Windows.Forms.TextBox, Text: jkkkkmm', ''),
(87, '', 'Malitha', 'Balawardhana', '', '951020770', '', '07047432024', 'malithabalawardana@gmail.com', '6f48f51310c2d2e'),
(88, '', 'Malitha', 'Balawardhana', '', '951020770', '', '07047432024', 'malithabalawardana@gmail.com', '956a88f4874843e'),
(89, 'Mr', 'Malitha', 'Balawardhana', '', '951020770', '', '07047432024', 'malithabalawardana@gmail.com', '9ab12cb45c46eea'),
(90, 'Mr', 'Malitha', 'Balawardhana', '', '951020770', '', '07047432024', 'malithabalawardana@gmail.com', 'cb48e9960e43a3d'),
(91, 'Miss', 'Malitha', 'Balawardhana', '', '951020770v', '', '07047432024', 'malithabalawardana@gmail.com', '276353bf797d0c9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hallbook`
--
ALTER TABLE `hallbook`
 ADD UNIQUE KEY `cusId` (`custId`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
 ADD UNIQUE KEY `cusId` (`cusId`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
 ADD PRIMARY KEY (`cusId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
 ADD PRIMARY KEY (`RoomID`), ADD UNIQUE KEY `roomType` (`roomType`);

--
-- Indexes for table `userbooking`
--
ALTER TABLE `userbooking`
 ADD PRIMARY KEY (`cusId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hallbook`
--
ALTER TABLE `hallbook`
MODIFY `custId` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
MODIFY `cusId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `userbooking`
--
ALTER TABLE `userbooking`
MODIFY `cusId` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
