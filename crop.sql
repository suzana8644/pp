-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2022 at 02:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crop`
--

-- --------------------------------------------------------

--
-- Table structure for table `apple`
--

CREATE TABLE `apple` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apple`
--

INSERT INTO `apple` (`id`, `ProvinceNo`, `Muncipality`, `WardNo`, `FarmerName`, `FamilyMember`, `Production`, `FarmerRate`, `MarketRate`) VALUES
(19, 1, 'bagmati', 5, 'ravi ', 8, 900, 9000, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `buckwheat`
--

CREATE TABLE `buckwheat` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maize`
--

CREATE TABLE `maize` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maize`
--

INSERT INTO `maize` (`id`, `ProvinceNo`, `Muncipality`, `WardNo`, `FarmerName`, `FamilyMember`, `Production`, `FarmerRate`, `MarketRate`) VALUES
(1, 1, 'lalitpur', 3, 'ram', 7, 1000, 900, 999);

-- --------------------------------------------------------

--
-- Table structure for table `millet`
--

CREATE TABLE `millet` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `potato`
--

CREATE TABLE `potato` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pulses`
--

CREATE TABLE `pulses` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE `rice` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `soyabean`
--

CREATE TABLE `soyabean` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sugar`
--

CREATE TABLE `sugar` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sugarcane`
--

CREATE TABLE `sugarcane` (
  `id` int(11) NOT NULL,
  `ProvinceNo` int(11) NOT NULL,
  `Muncipality` varchar(100) NOT NULL,
  `WardNo` int(11) NOT NULL,
  `FarmerName` varchar(250) NOT NULL,
  `FamilyMember` int(11) NOT NULL,
  `Production` int(11) NOT NULL,
  `FarmerRate` int(11) NOT NULL,
  `MarketRate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apple`
--
ALTER TABLE `apple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buckwheat`
--
ALTER TABLE `buckwheat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maize`
--
ALTER TABLE `maize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `millet`
--
ALTER TABLE `millet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potato`
--
ALTER TABLE `potato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pulses`
--
ALTER TABLE `pulses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rice`
--
ALTER TABLE `rice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soyabean`
--
ALTER TABLE `soyabean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugar`
--
ALTER TABLE `sugar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sugarcane`
--
ALTER TABLE `sugarcane`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apple`
--
ALTER TABLE `apple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `buckwheat`
--
ALTER TABLE `buckwheat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maize`
--
ALTER TABLE `maize`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `millet`
--
ALTER TABLE `millet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `potato`
--
ALTER TABLE `potato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pulses`
--
ALTER TABLE `pulses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rice`
--
ALTER TABLE `rice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soyabean`
--
ALTER TABLE `soyabean`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sugar`
--
ALTER TABLE `sugar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sugarcane`
--
ALTER TABLE `sugarcane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
