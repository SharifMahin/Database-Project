-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 09:02 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `account_no` varchar(15) NOT NULL,
  `balance` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_no`, `balance`) VALUES
('AC-3', 50000),
('AC-2', 80000),
('AC-1', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('Israk Ahmed', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE `borrower` (
  `borrower_id` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `loan_no` varchar(20) NOT NULL,
  `loan_amount` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`borrower_id`, `id`, `Name`, `loan_no`, `loan_amount`) VALUES
('B-1', '1', 'Mahin', 'L-1', 5000),
('B-2', '2', 'Israk', 'L-2', 10000),
('B-3', '3', 'Sabbir', 'L-3', 15000);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chome`
-- (See below for the actual view)
--
CREATE TABLE `chome` (
`id` varchar(30)
,`Name` varchar(20)
,`password` varchar(15)
,`account_no` varchar(15)
,`balance` bigint(20) unsigned
,`loan_no` varchar(20)
,`loan_amount` int(25)
,`address` varchar(35)
,`Date_of_Birth` date
,`phone` int(15)
,`email` varchar(25)
,`borrower_id` varchar(20)
,`dep_id` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `depositor`
--

CREATE TABLE `depositor` (
  `dep_id` varchar(20) NOT NULL,
  `id` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `account_no` varchar(15) NOT NULL,
  `balance` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositor`
--

INSERT INTO `depositor` (`dep_id`, `id`, `Name`, `account_no`, `balance`) VALUES
('D-1', '1', 'Mahin', 'AC-1', 100000),
('D-2', '2', 'Israk', 'AC-2', 80000),
('D-3', '3', 'Sabbir', 'AC-3', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_no` varchar(20) NOT NULL,
  `loan_amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_no`, `loan_amount`) VALUES
('L-1', 5000),
('L-2', 10000),
('L-3', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(35) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(15) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `phone`, `address`, `email`, `password`, `Date_of_Birth`, `Gender`) VALUES
('1', 'Mahin', 1639714636, 'Nikunja-2', 'sbzm.mahin@gmail.com', 'abc', '1997-10-16', 'male'),
('2', 'Israk', 1913390784, 'Malibag', 'israksadi28@gmail.com', '123', '2000-12-12', 'male'),
('3', 'Sabbir', 1625159014, 'Merul Badda', 'saberhosen008@gmail.com', 'xyz', '2012-12-12', 'male');

-- --------------------------------------------------------

--
-- Structure for view `chome`
--
DROP TABLE IF EXISTS `chome`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chome`  AS  (select `register`.`id` AS `id`,`register`.`Name` AS `Name`,`register`.`password` AS `password`,`account`.`account_no` AS `account_no`,`account`.`balance` AS `balance`,`borrower`.`loan_no` AS `loan_no`,`borrower`.`loan_amount` AS `loan_amount`,`register`.`address` AS `address`,`register`.`Date_of_Birth` AS `Date_of_Birth`,`register`.`phone` AS `phone`,`register`.`email` AS `email`,`borrower`.`borrower_id` AS `borrower_id`,`depositor`.`dep_id` AS `dep_id` from ((((`register` join `account`) join `borrower` on(`register`.`id` = `borrower`.`id` and `register`.`Name` = `borrower`.`Name`)) join `loan` on(`borrower`.`loan_no` = `loan`.`loan_no` and `borrower`.`loan_amount` = `loan`.`loan_amount`)) join `depositor` on(`register`.`id` = `depositor`.`id` and `register`.`Name` = `depositor`.`Name` and `account`.`account_no` = `depositor`.`account_no` and `account`.`balance` = `depositor`.`balance`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `balance` (`balance`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `borrower`
--
ALTER TABLE `borrower`
  ADD PRIMARY KEY (`borrower_id`);

--
-- Indexes for table `depositor`
--
ALTER TABLE `depositor`
  ADD PRIMARY KEY (`dep_id`),
  ADD UNIQUE KEY `balance` (`balance`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `balance` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000002;

--
-- AUTO_INCREMENT for table `depositor`
--
ALTER TABLE `depositor`
  MODIFY `balance` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
