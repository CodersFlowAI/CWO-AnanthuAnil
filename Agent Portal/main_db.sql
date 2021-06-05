-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 09:37 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `admin_level` int(1) NOT NULL COMMENT 'Levels:\r\n1. Admin\r\n2. Upgraded Admin\r\n3. Temp Admin\r\n4. Agent',
  `active` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 = Active; 0 = Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `full_name`, `email`, `password`, `admin_level`, `active`) VALUES
(1, 'Test Admin', 'admin@test.com', '$2y$10$lYO7dL0nUgfGkDjnRFOPm.0DtUS3Lc98qAw8Qy/W8LDeTrkCeg8cS', 1, 1),
(3, 'Test Agent', 'agent@test.com', '$2y$10$l0CusZqrTlmTquH5.kJTfeWbtHOObNvvcChZ92uLX6lueiMpfqe7O', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cybercases`
--

CREATE TABLE `cybercases` (
  `total_no` int(11) NOT NULL,
  `ongoing_no` int(11) NOT NULL,
  `new_cases` int(11) NOT NULL,
  `solved_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cybercases`
--

INSERT INTO `cybercases` (`total_no`, `ongoing_no`, `new_cases`, `solved_no`) VALUES
(1224, 12, 4, 1212);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(100) NOT NULL,
  `task_name` varchar(10000) NOT NULL,
  `task_date` date NOT NULL,
  `agent_id` int(11) NOT NULL,
  `agent_name` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_date`, `agent_id`, `agent_name`) VALUES
(1, 'Case 1', '2021-06-03', 2, 'Jane Doe'),
(2, 'Case 2', '2021-06-03', 2, 'Jane Doe'),
(3, 'Case 3', '2021-06-03', 3, 'Suzy Q'),
(4, 'Case 4', '2021-06-03', 1, 'John Doe'),
(5, 'Case 5', '2021-06-03', 2, 'Jane Doe'),
(6, 'Case 6', '2021-06-03', 3, 'Suzy Q'),
(7, 'Case 7', '2021-06-03', 3, 'Suzy Q'),
(8, 'Case 8', '2021-06-03', 1, 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `active`) VALUES
(1, 'Jane Doe', 'test@test.com', '$2y$10$MMWC6kkA3IVChHakNqv5Iu/feNn5DyBpGVn5UThGAKweUKtVqyPNK', 1),
(5, 'Ananthu Anil', 'ananthuanil4u@gmail.com', '$2y$10$l0CusZqrTlmTquH5.kJTfeWbtHOObNvvcChZ92uLX6lueiMpfqe7O', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visited_admin_users`
--

CREATE TABLE `visited_admin_users` (
  `id` int(255) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `browser` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visited_admin_users`
--

INSERT INTO `visited_admin_users` (`id`, `ip_address`, `date_time`, `browser`) VALUES
(1, '::1', 'May 29, 2021, 2:29 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(2, '::1', 'May 29, 2021, 2:29 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(3, '::1', 'May 29, 2021, 2:30 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(4, '::1', 'May 29, 2021, 2:31 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(5, '::1', 'May 29, 2021, 2:33 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(6, '::1', 'May 30, 2021, 9:11 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(7, '::1', 'May 30, 2021, 9:11 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(8, '::1', 'May 31, 2021, 10:01 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(9, '::1', 'May 31, 2021, 10:01 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(10, '::1', 'May 31, 2021, 10:01 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(11, '::1', 'June 1, 2021, 11:00 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(12, '::1', 'June 1, 2021, 11:00 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(13, '::1', 'June 2, 2021, 9:44 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(14, '::1', 'June 2, 2021, 9:44 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(15, '::1', 'June 3, 2021, 11:01 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(16, '::1', 'June 3, 2021, 11:01 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(17, '::1', 'June 4, 2021, 9:48 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(18, '::1', 'June 4, 2021, 9:48 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(19, '::1', 'June 5, 2021, 8:39 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(20, '::1', 'June 5, 2021, 8:41 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(21, '::1', 'June 5, 2021, 8:42 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(22, '::1', 'June 5, 2021, 8:42 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(23, '::1', 'June 5, 2021, 8:42 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(24, '::1', 'June 5, 2021, 9:36 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(25, '::1', 'June 5, 2021, 9:36 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `visited_users`
--

CREATE TABLE `visited_users` (
  `id` int(255) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  `browser` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visited_users`
--

INSERT INTO `visited_users` (`id`, `ip_address`, `date_time`, `browser`) VALUES
(4, '::1', 'May 29, 2021, 2:04 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(5, '::1', 'May 29, 2021, 2:10 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(6, '::1', 'May 29, 2021, 2:10 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(7, '::1', 'May 29, 2021, 2:12 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(8, '::1', 'May 29, 2021, 2:19 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(9, '::1', 'May 29, 2021, 2:19 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(10, '::1', 'May 29, 2021, 2:22 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(11, '::1', 'May 29, 2021, 2:23 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(12, '::1', 'May 29, 2021, 2:23 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(13, '::1', 'May 29, 2021, 2:24 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(14, '::1', 'May 29, 2021, 2:24 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(15, '::1', 'May 29, 2021, 2:28 pm', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(16, '::1', 'June 5, 2021, 8:41 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36'),
(17, '::1', 'June 5, 2021, 8:41 am', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.77 Safari/537.36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visited_admin_users`
--
ALTER TABLE `visited_admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visited_users`
--
ALTER TABLE `visited_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visited_admin_users`
--
ALTER TABLE `visited_admin_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `visited_users`
--
ALTER TABLE `visited_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
