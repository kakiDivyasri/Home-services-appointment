-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 03:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `serviceName` varchar(255) NOT NULL,
  `Message` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `people` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `name`, `serviceName`, `Message`, `email`, `people`, `time`, `date`, `number`) VALUES
(1, 'Vissakoti.Lakshmi Tulasi', 'Electronic', 'khgjfh', 'E@gmail.com', 2, '2:00 am', '2023-11-29', '09866077369'),
(3, 'Vissakoti.Lakshmi Tulasi', 'Home Rennovation And Remodellig', 'khgjfh', 'E@gmail.com', 1, '2:00 am', '2023-11-17', '09866077369'),
(4, 'Vissakoti.Lakshmi Tulasi', 'Cleaning', 'tyui6', 'E@gmail.com', 2, '2:00 am', '2023-11-16', '09866077369');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comments` text DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `comments`, `timestamp`) VALUES
(10, 0, 'aaa', '2023-11-02 06:02:23'),
(11, 0, 'xhjsdhwei', '2023-11-02 06:07:07'),
(12, 0, 'derdtfyguhjk', '2023-11-02 06:11:55'),
(13, 0, '', '2023-11-02 06:13:55'),
(14, 0, '', '2023-11-02 06:15:29'),
(15, 0, 'kugyte65r687yiuiju', '2023-11-02 06:59:32'),
(16, 0, 'kugyte65r687yiuiju', '2023-11-02 07:01:16'),
(17, 0, 'kugyte65r687yiuiju', '2023-11-02 07:01:34'),
(18, 0, 'kutye56rcyh', '2023-11-02 07:08:30'),
(19, 0, ';lioif7t', '2023-11-03 05:21:47'),
(20, 0, ';lioif7t', '2023-11-03 05:21:59'),
(21, 0, 'oiyity5rfygh', '2023-11-03 05:31:31'),
(22, 0, 'kjghuftt', '2023-11-03 05:42:04'),
(23, 0, 'kjghuftt', '2023-11-03 06:04:37'),
(24, 0, 'jhyifutr', '2023-11-03 06:06:18'),
(25, 0, 'iyu7tgfutg', '2023-11-03 06:07:53'),
(26, 0, ';kujytu7rye', '2023-11-03 06:08:42'),
(27, 0, '45yeut5', '2023-11-03 06:24:14'),
(28, 0, 'khgytfud', '2023-11-05 05:13:03'),
(29, 0, 'ygtrsst', '2023-11-05 07:00:52'),
(30, 0, 'yu8i9', '2023-11-05 08:55:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ServiceID` int(30) NOT NULL,
  `ServiceName` varchar(50) NOT NULL,
  `PricePerHour` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ServiceID`, `ServiceName`, `PricePerHour`) VALUES
(1, 'Carpenter', 500),
(2, 'Cleaning', 800),
(3, 'Electrician', 500),
(4, 'Electronic', 1000),
(5, 'Fencing Services', 1000),
(6, 'Home Rennovation And Remodellig', 1500),
(7, 'Home Security Services', 1000),
(8, 'Lawn and Garden Care', 1000),
(9, 'plumbing', 500),
(10, 'Septic Tank Services', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(40) DEFAULT NULL,
  `level` varchar(10) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `level`) VALUES
(1, 'Tulasi', 'cd72429f978ea0f7c9bebda1105a6284', 'admin'),
(2, 'Sravani', 'f4ce7278e3c02fce59f6b7f070969cfa', 'admin'),
(3, 'Divya', '0204175f84a92be3b1d1c221b1d5f892', 'user'),
(4, 'Gayathri', '4406c857daec4846f911b0922b4a460b', 'user'),
(5, 'mani', '07cd55c7b42715ec44c133a6a165e8d2', 'user'),
(6, 'somya', 'ceacd971a54d4f629463fc1a525a2687', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ServiceName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
