-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 07:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twoandfr_aieps_full`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `ID` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_target` int(11) DEFAULT NULL,
  `target_table` varchar(32) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`ID`, `id_user`, `id_target`, `target_table`, `note`, `created_time`) VALUES
(1, NULL, NULL, 'users', 'User &ldquo;&rdquo; logged out. (base)', '2024-04-11 16:06:02'),
(2, 9, 9, 'users', 'User &ldquo;&rdquo; logged in.', '2024-04-11 16:06:41'),
(3, NULL, NULL, 'users', 'User &ldquo;&rdquo; logged out. (base)', '2024-04-11 16:06:44'),
(4, 9, 9, 'users', 'User &ldquo;&rdquo; logged in.', '2024-04-11 16:10:02'),
(5, NULL, NULL, 'users', 'User &ldquo;&rdquo; logged out. (base)', '2024-04-11 16:10:10'),
(6, 9, 9, 'users', 'User logged out. (base)', '2024-04-11 16:15:22'),
(7, 9, 9, 'users', 'User &ldquo;&rdquo; logged in.', '2024-04-11 16:15:42'),
(8, 9, 9, 'users', 'User logged out. (base)', '2024-04-11 16:15:46'),
(9, 9, 9, 'users', 'User &ldquo;&rdquo; logged in.', '2024-04-11 17:34:37'),
(10, 9, 9, 'users', 'User logged out. (base)', '2024-04-11 17:42:22'),
(11, 9, 9, 'users', 'User &ldquo;&rdquo; logged in.', '2024-04-11 18:05:55'),
(12, 9, 9, 'users', 'User logged out. (base)', '2024-04-11 18:05:57'),
(13, 9, 9, 'users', 'User &ldquo;&rdquo; logged in. (ajax)', '2024-04-11 18:15:13'),
(14, 9, 9, 'users', 'User logged out. (base)', '2024-04-11 18:15:18'),
(15, 9, 9, 'users', 'User &ldquo;&rdquo; logged in. (ajax)', '2024-04-11 18:16:44'),
(16, 9, 9, 'users', 'User logged out. (base)', '2024-04-11 18:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `lectors`
--

CREATE TABLE `lectors` (
  `ID` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '-1-deleted, 0-blocked, 1-pending email confirmation, 2-pending admin confirmation, 3-active',
  `admin_status` int(11) DEFAULT NULL,
  `token_rememberme` varchar(64) DEFAULT NULL,
  `token_validare_email` varchar(64) DEFAULT NULL,
  `token_resetare_parola` varchar(64) DEFAULT NULL,
  `trp_time` datetime DEFAULT NULL,
  `firstname` varbinary(128) DEFAULT NULL,
  `lastname` varbinary(128) DEFAULT NULL,
  `email` varbinary(256) DEFAULT NULL,
  `email_confirmation_time` datetime DEFAULT NULL,
  `telefon` varbinary(64) DEFAULT NULL,
  `token_validare_telefon` varchar(64) DEFAULT NULL,
  `telefon_validat` tinyint(1) NOT NULL DEFAULT 0,
  `acc_nl` varchar(2) DEFAULT NULL,
  `acc_nl_time` datetime DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `ID` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_target` int(11) DEFAULT NULL,
  `target_table` varchar(32) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '-1-deleted, 0-blocked, 1-pending email confirmation, 2-pending admin confirmation, 3-active',
  `admin_status` int(11) DEFAULT NULL,
  `token_rememberme` varchar(64) DEFAULT NULL,
  `token_validare_email` varchar(64) DEFAULT NULL,
  `token_resetare_parola` varchar(64) DEFAULT NULL,
  `trp_time` datetime DEFAULT NULL,
  `firstname` varbinary(128) DEFAULT NULL,
  `lastname` varbinary(128) DEFAULT NULL,
  `email` varbinary(256) DEFAULT NULL,
  `email_confirmation_time` datetime DEFAULT NULL,
  `tel` varbinary(64) DEFAULT NULL,
  `acc_nl` varchar(2) DEFAULT NULL,
  `acc_nl_time` datetime DEFAULT NULL,
  `source` varchar(32) DEFAULT NULL,
  `created_time` datetime DEFAULT NULL,
  `modified_time` datetime DEFAULT NULL,
  `delete_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `status`, `admin_status`, `token_rememberme`, `token_validare_email`, `token_resetare_parola`, `trp_time`, `firstname`, `lastname`, `email`, `email_confirmation_time`, `tel`, `acc_nl`, `acc_nl_time`, `source`, `created_time`, `modified_time`, `delete_time`) VALUES
(14, NULL, '$2y$10$jbz.vxHS3EmTIvgG3J/4Y.oW4b38MQJekMrkiqj11pprLtjgawy0O', 3, NULL, '798b96e185e70bf66fc171f51383832bb6a255a14b3561e7064b3fb2aef694fb', '3379f89358c7a78a0d006a9f249b52cbcd59e1e7', NULL, NULL, NULL, 0xe68c31f766051de4f0a3f237e71d5ecd, 0xd6c9e6c1932e9885efed5f35499d77a1cc3711c5daa67f663ebdff53ed9c6de7, '2024-04-22 12:11:02', NULL, 'da', '2024-04-22 12:10:46', 'b_acc_login', '2024-04-22 12:10:46', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lectors`
--
ALTER TABLE `lectors`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `token_rememberme` (`token_rememberme`),
  ADD KEY `token_validare_email` (`token_validare_email`),
  ADD KEY `token_resetare_parola` (`token_resetare_parola`),
  ADD KEY `token_validare_telefon` (`token_validare_telefon`),
  ADD KEY `telefon` (`telefon`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `telefon` (`tel`),
  ADD KEY `token_rememberme` (`token_rememberme`),
  ADD KEY `token_validare_email` (`token_validare_email`),
  ADD KEY `token_resetare_parola` (`token_resetare_parola`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lectors`
--
ALTER TABLE `lectors`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
