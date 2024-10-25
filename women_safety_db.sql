-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 03:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `women_safety_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `police_id` int(11) DEFAULT NULL,
  `complaint_type` varchar(100) DEFAULT NULL,
  `complaint_details` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending',
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`id`, `user_id`, `police_id`, `complaint_type`, `complaint_details`, `status`, `date_created`) VALUES
(1, 6, NULL, 'Harassment', 'help me', 'Pending', '2024-10-24 22:21:04'),
(2, 6, NULL, 'Harassment', 'help me', 'Pending', '2024-10-24 22:21:04'),
(3, 6, NULL, 'Others', 'kuch nhu hua h, its a test complaint', 'In Progress', '2024-10-24 22:21:04'),
(4, 11, NULL, 'Robbery', 'someone stole my money', 'Pending', '2024-10-25 01:11:32'),
(5, 11, NULL, 'Robbery', 'someone stolen my money', 'Pending', '2024-10-25 05:43:46'),
(6, 11, NULL, 'Harassment', 'nothing, just testing', 'Pending', '2024-10-25 06:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `guardians`
--

CREATE TABLE `guardians` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardians`
--

INSERT INTO `guardians` (`id`, `user_id`, `guardian_name`, `guardian_phone`) VALUES
(1, 6, 'saini', '09690020293'),
(2, 11, 'govind kumar', '09690020293'),
(3, 11, 'gorav', '9690020293');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

CREATE TABLE `police` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `station` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`id`, `name`, `station`, `email`, `phone_number`, `password`) VALUES
(3, 'suraj', 'sadar thana', 'gyananand90@gmail.com', '9045229266', ''),
(4, 'sagar', 'pnjb', 'sagar@gmail.com', '9757571218', ''),
(5, 'harsit', 'phg station', 'harsit@gmail.com', '08470850200', ''),
(6, 'harsit', 'phg station', 'harsit@gmail.com', '08470850200', '$2y$10$ZonWdefpkytDU/2vxUKH3OZeI/7ksDnGbuF/CkFSYEEIRKSy8UV4S'),
(7, 'shivam', 'up station', 'shivam@gmail.com', '893434584732', '$2y$10$DWjMi88x2E2c0CVm9qxlguYUM2D9uEhFGuSrHIHcpiFe0a/LF.s0K');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`) VALUES
(1, 'Ujjaval Saini', 'sainiujvlpc@gmail.com', '$2y$10$aOUZx1FSPwtk3x7z9Kf7TumAJtRKcb46pfMzwoHW0O3LKm9NmdNhS', '09690020293'),
(2, 'aditya raj', 'adityagaurajraj@gmail.com', '$2y$10$Fm3w9fbZGzIrERl7CSR2Fe2p2EVKz7QoCLRQPc.7YKhoXFwPLgt0y', '552005845124'),
(6, 'radha', 'radha@gmail.com', '$2y$10$DnBFk2VJ3peKTEETOZQ64e1WpPi6W46Zm35d8QioH9V8A7BK0lUei', '12345'),
(10, 'test1', 'test1@gmail.com', '$2y$10$txnA2AR3QT68jJvn6LgrGORFatyoFBa.XXqVtXib42HNwvabw.jgS', ''),
(11, 'Aman galav', 'aman@gmail.com', '$2y$10$YOlQdarCPdfL3el1/QgMautvPG1YXgWdmFafEHGk60MYa8IHFULsu', '9012218389');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `police_id` (`police_id`);

--
-- Indexes for table `guardians`
--
ALTER TABLE `guardians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `guardians`
--
ALTER TABLE `guardians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `police`
--
ALTER TABLE `police`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `complaints_ibfk_2` FOREIGN KEY (`police_id`) REFERENCES `police` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `guardians`
--
ALTER TABLE `guardians`
  ADD CONSTRAINT `guardians_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
