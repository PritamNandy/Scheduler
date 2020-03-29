-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2020 at 08:58 AM
-- Server version: 10.3.22-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heydpqhj_scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_details`
--

CREATE TABLE `date_details` (
  `id` int(100) NOT NULL,
  `date` varchar(500) NOT NULL,
  `status` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `day_heading`
--

CREATE TABLE `day_heading` (
  `id` int(100) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_heading`
--

INSERT INTO `day_heading` (`id`, `name`, `description`, `status`) VALUES
(2, 'Pesach Day 2', '', '1'),
(3, 'Pesach Day 3', '', '1'),
(4, 'Erev Shabbos', '', '1'),
(5, 'Pesach Day 4', '', '1'),
(7, 'Pesach Day 1', '', '1'),
(8, 'Shabbos', '', '1'),
(9, 'Chol HaMoad', '', '1'),
(10, 'Yizkor', '', '1'),
(11, 'Pesach Day 5', NULL, '1'),
(12, 'Bedikas Chametz', NULL, '1'),
(13, 'Yom Tov ', '', '1'),
(23, 'Bedikas Chametz', NULL, '1'),
(15, 'Chol Hamoed Day 1', '', '1'),
(16, 'Chol Hamoed Day 2', '', '1'),
(17, 'Chol Hamoed Day 3', '', '1'),
(18, 'Pesach Day 6', '', '1'),
(19, 'Chol Hamoed Day 4', '', '1'),
(20, 'Pesach Day 7', '', '1'),
(21, 'Pesach Day 8', '', '1'),
(22, 'Isru Chag', '', '1'),
(24, 'Welcome!', '', '1'),
(25, 'test', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `day_heading_time`
--

CREATE TABLE `day_heading_time` (
  `id` int(100) NOT NULL,
  `date` varchar(100) CHARACTER SET utf8 NOT NULL,
  `time` varchar(500) CHARACTER SET utf8 NOT NULL,
  `day_heading` varchar(100) DEFAULT NULL,
  `sunrise` varchar(100) DEFAULT NULL,
  `chatzos` varchar(100) DEFAULT NULL,
  `kriyas_shema_1` varchar(100) DEFAULT NULL,
  `kriyas_shema_2` varchar(100) DEFAULT NULL,
  `shkiya_1` varchar(100) DEFAULT NULL,
  `shkiya_2` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `day_heading_time`
--

INSERT INTO `day_heading_time` (`id`, `date`, `time`, `day_heading`, `sunrise`, `chatzos`, `kriyas_shema_1`, `kriyas_shema_2`, `shkiya_1`, `shkiya_2`) VALUES
(30, '1584331200', '', '2', '12:00 AM', '12:12 AM', '12:00 PM', '12:00 PM', '12:00 PM', '12:00 AM'),
(31, '1584417600', '', '3', '12:00 AM', '12:00 AM', '12:00 PM', '12:00 PM', '12:00 PM', '12:00 AM');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `event_type` varchar(500) NOT NULL,
  `color` varchar(100) NOT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `day_heading` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `start_time` varchar(500) NOT NULL,
  `end_time` varchar(100) DEFAULT NULL,
  `location` varchar(500) NOT NULL,
  `isAged` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `event_type`, `color`, `notes`, `day_heading`, `date`, `start_time`, `end_time`, `location`, `isAged`) VALUES
(37, 'Test', '1', '#328dff', '', '3', '1584417600', '1584367200', '', '2', NULL),
(36, 'Test', '1', '#328dff', 'Test', '2', '1584331200', '1584367200', '1584370800', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `event_types`
--

CREATE TABLE `event_types` (
  `id` int(100) NOT NULL,
  `name` varchar(500) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 DEFAULT NULL,
  `color` varchar(500) CHARACTER SET utf8 NOT NULL,
  `font_color` varchar(100) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `description`, `color`, `font_color`, `status`) VALUES
(1, 'Demo', '', '#328dff', '#f5f5f5', '1'),
(2, 'Demo2', '', '#ff323a', '', '1'),
(3, 'Swimming', '', '#328dff', '#ffffff', '1'),
(4, 'Excersize', '', '#42814a', '#ffffff', '1'),
(5, 'Misc', '', '#b524a8', '#ffffff', '1');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`, `description`, `status`) VALUES
(1, 'Crystal Ballroom', '', '1'),
(2, 'Continental Room', '', '1'),
(3, 'Oval Room', '', '1'),
(4, 'Steinbah', '', '1'),
(5, 'Palm Court', '', '1'),
(6, 'Kingsley Ballroom', '', '1'),
(7, 'Kingsley I', '', '1'),
(8, 'Kingsley II', '', '1'),
(9, 'Kingsley IV', '', '1'),
(10, 'Kingsley V', '', '1'),
(11, 'Garden Room', '', '1'),
(12, 'Pool & Gym', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `language` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `email`, `phone`, `address`, `language`) VALUES
(1, 'Schedule Management System', 'scheduler@example.com', '+0123456789', 'Bangladesh', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$12$4QYROyASaVuAvtRJZT7Ur.f/YESaehZ3ZsoxxPV9MUYVoPG9H/G7q', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1584370405, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_details`
--
ALTER TABLE `date_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_heading`
--
ALTER TABLE `day_heading`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day_heading_time`
--
ALTER TABLE `day_heading_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_details`
--
ALTER TABLE `date_details`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day_heading`
--
ALTER TABLE `day_heading`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `day_heading_time`
--
ALTER TABLE `day_heading_time`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
