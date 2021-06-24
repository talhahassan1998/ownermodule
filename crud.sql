-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2021 at 08:34 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `availabilitystatus`
--

CREATE TABLE IF NOT EXISTS `availabilitystatus` (
  `id` int(255) NOT NULL,
  `roomnumber` varchar(255) NOT NULL,
  `availabilitystatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `checkoutdetails`
--

CREATE TABLE IF NOT EXISTS `checkoutdetails` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `roomnumber` varchar(255) NOT NULL,
  `customername` varchar(255) NOT NULL,
  `customercnicpassport` varchar(255) NOT NULL,
  `customerroomrent` varchar(255) NOT NULL,
  `customerrestaurantbill` varchar(255) NOT NULL,
  `customertotalbill` varchar(255) NOT NULL,
  `customerstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenditures`
--

CREATE TABLE IF NOT EXISTS `expenditures` (
  `id` int(255) NOT NULL,
  `monthyear` varchar(255) NOT NULL,
  `electricitybill` varchar(255) NOT NULL,
  `gasbill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE IF NOT EXISTS `income` (
  `id` int(255) NOT NULL,
  `monthyear` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `earnings` varchar(255) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(10) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(250) NOT NULL,
  `roomnumber` varchar(255) NOT NULL,
  `customername` varchar(250) NOT NULL,
  `cnicpassport` varchar(255) NOT NULL,
  `customeraddress` varchar(255) NOT NULL,
  `customerphonenumber` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL,
  `vehiclenumber` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `roomnumber` varchar(255) NOT NULL,
  `mealname` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `ordernumber` varchar(255) NOT NULL,
  `waiterservice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffdutytimings`
--

CREATE TABLE IF NOT EXISTS `staffdutytimings` (
  `id` int(255) NOT NULL,
  `date` date NOT NULL,
  `employeeid` varchar(255) NOT NULL,
  `employeename` varchar(255) NOT NULL,
  `employeegender` varchar(255) NOT NULL,
  `employeeentrytime` varchar(255) NOT NULL,
  `employeeexittime` varchar(255) NOT NULL,
  `employeeperformeddutyhours` varchar(255) NOT NULL,
  `employeeposition` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availabilitystatus`
--
ALTER TABLE `availabilitystatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditures`
--
ALTER TABLE `expenditures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffdutytimings`
--
ALTER TABLE `staffdutytimings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availabilitystatus`
--
ALTER TABLE `availabilitystatus`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `checkoutdetails`
--
ALTER TABLE `checkoutdetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `expenditures`
--
ALTER TABLE `expenditures`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffdutytimings`
--
ALTER TABLE `staffdutytimings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
