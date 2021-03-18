-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2019 at 07:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `A_Id` varchar(10) NOT NULL,
  `Aname` varchar(20) NOT NULL,
  `Email_id` varchar(25) NOT NULL,
  `ContactNo` int(10) NOT NULL,
  `Apsed` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `P_Id` varchar(10) NOT NULL,
  `C_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `Company_Id` varchar(10) NOT NULL,
  `Company_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_Id` varchar(10) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Cname` varchar(20) NOT NULL,
  `Email_id` varchar(30) NOT NULL,
  `Contactno` int(10) NOT NULL,
  `Cadd` varchar(50) NOT NULL,
  `Que` varchar(50) NOT NULL,
  `Ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `Model_no` varchar(10) NOT NULL,
  `Company_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `O_Id` varchar(10) NOT NULL,
  `C_Id` varchar(10) NOT NULL,
  `P_Id` varchar(10) NOT NULL,
  `Odate` date NOT NULL,
  `Ostatus` varchar(10) NOT NULL,
  `Oquantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_Id` varchar(10) NOT NULL,
  `Pcompany` varchar(20) NOT NULL,
  `Pmodel` varchar(20) NOT NULL,
  `Pprice` int(10) NOT NULL,
  `RAM` varchar(10) NOT NULL,
  `PColor` varchar(20) NOT NULL,
  `PImage` longblob NOT NULL,
  `PMemory` varchar(10) NOT NULL,
  `Descri` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `Pur_Id` varchar(10) NOT NULL,
  `P_Id` varchar(10) NOT NULL,
  `Pur_quantity` int(10) NOT NULL,
  `Pur_date` date NOT NULL,
  `Company_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `P_Id` varchar(10) NOT NULL,
  `Pname` varchar(20) NOT NULL,
  `Oquantity` int(4) DEFAULT NULL,
  `O_Id` varchar(10) DEFAULT NULL,
  `Pur_Id` varchar(10) DEFAULT NULL,
  `Pur_quantity` int(10) DEFAULT NULL,
  `Balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`A_Id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `C_Id` (`C_Id`),
  ADD KEY `P_Id` (`P_Id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`Company_Id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`Model_no`),
  ADD KEY `Company_Id` (`Company_Id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`O_Id`),
  ADD KEY `C_Id` (`C_Id`),
  ADD KEY `P_Id` (`P_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_Id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`Pur_Id`),
  ADD KEY `P_Id` (`P_Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`P_Id`),
  ADD KEY `O_Id` (`O_Id`),
  ADD KEY `Pur_Id` (`Pur_Id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`C_Id`) REFERENCES `customer` (`C_Id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`P_Id`) REFERENCES `product` (`P_Id`);

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`Company_Id`) REFERENCES `company` (`Company_Id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`C_Id`) REFERENCES `customer` (`C_Id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`P_Id`) REFERENCES `product` (`P_Id`);

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `purchase_ibfk_1` FOREIGN KEY (`P_Id`) REFERENCES `product` (`P_Id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`O_Id`) REFERENCES `order` (`O_Id`),
  ADD CONSTRAINT `stock_ibfk_2` FOREIGN KEY (`Pur_Id`) REFERENCES `purchase` (`Pur_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
