-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2022 at 11:49 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grocery`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE IF NOT EXISTS `addproduct` (
  `pid` varchar(10) NOT NULL,
  `pname` varchar(15) NOT NULL,
  `cou` int(11) NOT NULL,
  `pri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`pid`, `pname`, `cou`, `pri`) VALUES
('101', 'Dove Sampoo', 0, 25),
('102', 'Poni Rice', 0, 0),
('103', 'Anil Semiya', 0, 15),
('104', 'Tata Salt', 100, 25),
('105', 'Hamam Shop', 0, 35),
('106', 'Colgate Paste', 0, 0),
('107', 'Bengal gram', 0, 0),
('108', 'Black gram', 0, 0),
('109', 'Broad Beans', 0, 0),
('110', 'Cowpeas', 0, 0),
('111', 'Green Peas', 0, 0),
('112', 'Horse Gram', 0, 0),
('113', 'Split Red Gram', 0, 0),
('114', 'Sakthi Chili ma', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `alert`
--

CREATE TABLE IF NOT EXISTS `alert` (
  `id` varchar(15) NOT NULL,
  `date` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `comments` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert`
--

INSERT INTO `alert` (`id`, `date`, `type`, `comments`) VALUES
('569', '23/04/2022', 'New Procuct', 'Colgate sault 50');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `cid` varchar(10) NOT NULL,
  `cname` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `mail` varchar(15) NOT NULL,
  `web` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`cid`, `cname`, `address`, `phno`, `mail`, `web`) VALUES
('45632', 'muthu agency', 'coimbature', '7689675434', 'ctscmb3@gmail.c', 'ctscmb3.com'),
('45633', 'Anna Agent', 'Dindigul', '9632587410', 'ss@gmail.com', 'anna.com'),
('45634', 'Sri balaji and ', 'Dindigul', '9874563210', 'bala@gmail.com', 'balaji.com'),
('45635', 'ss Shop', 'madurai', '9871563247', 'ssshop@gmail.om', 'ssshop.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `sid` varchar(15) NOT NULL,
  `sname` varchar(15) NOT NULL,
  `age` varchar(10) NOT NULL,
  `exp` varchar(10) NOT NULL,
  `post` varchar(15) NOT NULL,
  `add` varchar(20) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sid`, `sname`, `age`, `exp`, `post`, `add`, `mno`, `salary`) VALUES
('47890', 'akila', '20', '1', 'Sales Man	', 'dgl', '8797856432', '15000'),
('47891', 'ram', '19', '2', 'Sales Man	', 'dindigul', '9632587410', '6000'),
('47892', 'Kala', '25', '2', 'Sales Man	', 'dindigul', '9632587410', '8000'),
('47893', 'siva', '29', '3', 'Sales Man	', 'dindigul', '9745213698', '11000'),
('47894', 'raja', '34', '7', 'Sales Man', 'madurai', '7896541230', '18000');

-- --------------------------------------------------------

--
-- Table structure for table `empsalary`
--

CREATE TABLE IF NOT EXISTS `empsalary` (
  `eid` varchar(15) NOT NULL,
  `ename` varchar(15) NOT NULL,
  `post` varchar(15) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empsalary`
--

INSERT INTO `empsalary` (`eid`, `ename`, `post`, `salary`, `month`) VALUES
('emp2', 'akil', 'salesman', '15000', 'Feb'),
('emp2', 'akil', 'salesman', '15000', 'Feb'),
('47894', 'raja', 'Sales Man', '18000', 'Mar');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE IF NOT EXISTS `newuser` (
  `name` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `mobno` varchar(10) NOT NULL,
  `mailid` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`name`, `address`, `mobno`, `mailid`, `gender`, `uname`, `password`) VALUES
('vivek', 'cmb', '7890564321', 'vivek45@gmail.c', 'Male', 'vivek', 'vivek'),
('vinoth', 'sivakangai', '9876567843', 'vinoth99@gmail.', 'Male', 'vinoth', 'vinoth');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `cname` varchar(15) NOT NULL,
  `pname` varchar(15) NOT NULL,
  `coun` varchar(10) NOT NULL,
  `price` varchar(15) NOT NULL,
  `amount` varchar(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`cname`, `pname`, `coun`, `price`, `amount`, `date`) VALUES
('muthu agency', 'Dove Sampoo', '10', '5', '50', '2022-04-23'),
('Anna Agent', 'Anil Semiya', '200', '12', '2400', '2022-04-23'),
('muthu agency', 'Tata Salt', '100', '12', '1200', '2022-04-23'),
('muthu agency', 'Tata Salt', '10', '11', '110', '2022-04-23'),
('muthu agency', 'Tata Salt', '1', '5', '5', '2022-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `pname` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `cou` varchar(10) NOT NULL,
  `tamount` varchar(10) NOT NULL,
  `date` varchar(50) NOT NULL,
  `cname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`pname`, `price`, `cou`, `tamount`, `date`, `cname`) VALUES
('honey', '50', '5', '70', '2022-04-11', 'hari'),
('Tata Salt', '25', '20', '500', '23/04/2022', 'senthil'),
('Tata Salt', '25', '11', '275', '23/04/2022', 'senthil');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
