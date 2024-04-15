-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2024 at 06:16 PM
-- Server version: 8.0.36-0ubuntu0.20.04.1
-- PHP Version: 7.4.3-4ubuntu2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `institute_directory`
--

CREATE TABLE `institute_directory` (
  `id` int NOT NULL,
  `institute_name` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `director_name` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_email` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_password` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_contact` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_uid` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_logo` varchar(350) COLLATE utf8mb4_general_ci NOT NULL,
  `onboarding_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute_directory`
--

INSERT INTO `institute_directory` (`id`, `institute_name`, `director_name`, `institute_email`, `institute_password`, `institute_contact`, `institute_uid`, `institute_logo`, `onboarding_date`) VALUES
(1, 'Demo', 'Remo', 'robin@gmail.com', '12345', '9199450345', 'INS2-04248FD6K', 'http://localhost/reportCard/images/emblem/emblem1.png', '2024-04-15 12:42:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `institute_directory`
--
ALTER TABLE `institute_directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `institute_directory`
--
ALTER TABLE `institute_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
