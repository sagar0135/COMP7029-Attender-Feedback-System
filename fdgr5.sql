-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 08:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdgr5`
--

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `is_admin` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`Username`, `Email`, `Password`, `is_admin`) VALUES
('Sadie', '18002410@brookes.ac.uk', '$2y$10$qYOv57rpysub/jEMnDBnEeUlEiUPgjdxbiYpppPwtLwJzez5H4fuG', 'Admin'),
('Ahmed', '19234576@brookes.ac.uk', '$2y$10$TaRrJh1aoUeLYs.DiSRTh.3NqrknXOXdeaBr1V.iHBWJQrCFZqLgm', 'Admin'),
('Sagar', '19280233@brookes.ac.uk', '$2y$10$rKEGmI/j1rx./JB/clvFH.5aeMhDdC/e5/zIL9qxfWFX5RAeT61Vi', 'Admin'),
('Radha', '19276146@brookes.ac.uk', '$2y$10$OxJayktKLH2ntWhjXW.qU.8e9caaTbBT5xwf11.ZhxnY7Ga1G8VSi', 'Admin'),
('Stephanie', 'p0088119@brookes.ac.uk', '$2y$10$UHSdeBQy/wd/ydBvp.Xxduf6AzU34z6hYF9VjUvLhO3Dv0Jr6T/gu', 'Admin'),
('Ramandeep', '19277035@brookes.ac.uk', '$2y$10$9mjShOF25./36T7GNa2LXeNeNVw2t4FoAy9qh/kOGJPxlVpRnrso.', 'Admin'),
('Vitalie', '19188039@brookes.ac.uk', '$2y$10$9KguvI282Ybw72UK6ikD8eIC4SQpe3wIjfKoF9BSMdq4a4K9Ka/.O', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback1`
--

CREATE TABLE `feedback1` (
  `likedMost` text NOT NULL,
  `improvement` text NOT NULL,
  `recommendation` text NOT NULL,
  `overallExperience` text NOT NULL,
  `anonymityRating` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback2`
--

CREATE TABLE `feedback2` (
  `likedMost` text NOT NULL,
  `improvement` text NOT NULL,
  `recommendation` text NOT NULL,
  `overallExperience` text NOT NULL,
  `anonymityRating` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback3`
--

CREATE TABLE `feedback3` (
  `likedMost` text NOT NULL,
  `improvement` text NOT NULL,
  `recommendation` text NOT NULL,
  `overallExperience` text NOT NULL,
  `anonymityRating` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD UNIQUE KEY `Username` (`Username`) USING HASH;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
