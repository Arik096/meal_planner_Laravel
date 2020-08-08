-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 04:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meal_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breakfast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `student_id`, `date`, `breakfast`, `lunch`, `dinner`, `created_at`, `updated_at`) VALUES
(1, '1103080', '2020-08-03', '0', '1', '1', '2020-08-01 23:55:11', '2020-08-01 23:55:11'),
(2, '1103089', '2020-08-03', '0', '0', '0', '2020-08-02 00:03:17', '2020-08-02 00:03:17'),
(3, '1103096', '2020-08-03', '1', '1', '1', '2020-08-02 00:04:09', '2020-08-02 00:04:09'),
(5, '1103017', '2020-08-03', '0', '0', '0', '2020-08-02 07:26:17', '2020-08-02 07:26:17'),
(6, '1103018', '2020-08-03', '1', '1', '1', '2020-08-02 09:33:00', '2020-08-02 09:33:00'),
(9, '1103080', '2020-08-02', '1', '1', '1', '2020-08-02 11:11:13', '2020-08-02 11:11:13'),
(10, '1103096', '2020-08-02', '1', '1', '1', '2020-08-02 11:23:05', '2020-08-02 11:23:05'),
(11, '1103080', '2020-08-12', '1', '1', '1', '2020-08-02 11:29:35', '2020-08-02 11:29:35'),
(12, '1103096', '2020-08-31', '1', '1', '1', '2020-08-02 11:31:44', '2020-08-02 11:31:44'),
(13, '1103096', '2020-08-19', '1', '1', '1', '2020-08-02 14:05:25', '2020-08-02 14:05:25'),
(14, '1103096', '2020-08-01', '0', '0', '0', '2020-08-02 14:07:12', '2020-08-02 14:07:12'),
(15, '1103080', '2020-08-30', '1', '1', '1', '2020-08-03 08:55:42', '2020-08-03 08:55:42'),
(16, '1103080', '2020-08-04', '1', '1', '1', '2020-08-03 15:25:19', '2020-08-03 15:25:19'),
(17, '1103080', '2020-08-11', '1', '1', '1', '2020-08-04 16:14:31', '2020-08-04 16:14:31'),
(18, '1103080', '2020-08-02', '1', '1', '1', '2020-08-04 16:14:43', '2020-08-04 16:14:43'),
(19, '1103080', '2020-08-05', '1', '1', '1', '2020-08-04 17:27:59', '2020-08-04 17:27:59'),
(20, '1103096', '2020-08-06', '1', '1', '1', '2020-08-04 18:09:22', '2020-08-04 18:09:22'),
(21, '1103080', '2020-08-06', '0', '1', '1', '2020-08-06 10:36:04', '2020-08-06 10:36:04'),
(22, '1103080', '2020-08-07', '1', '1', '1', '2020-08-06 15:52:48', '2020-08-06 15:52:48'),
(23, '1103080', '2020-08-07', '1', '1', '1', '2020-08-06 15:53:12', '2020-08-06 15:53:12'),
(24, '1103080', '2020-08-08', '1', '1', '1', '2020-08-06 15:53:24', '2020-08-06 15:53:24'),
(25, '1103096', '2020-08-08', '0', '1', '0', '2020-08-06 22:21:00', '2020-08-06 22:21:00'),
(26, '1103080', '2020-08-08', '1', '1', '1', '2020-08-06 22:36:43', '2020-08-06 22:36:43'),
(27, '1103080', '2020-08-08', '0', '1', '0', '2020-08-06 22:37:11', '2020-08-06 22:37:11'),
(28, '1103080', '2020-08-08', '1', '1', '1', '2020-08-07 04:18:10', '2020-08-07 04:18:10'),
(29, '1103080', '2020-08-08', '0', '0', '1', '2020-08-07 04:18:43', '2020-08-07 04:18:43'),
(30, '1103019', '2020-08-08', '1', '1', '1', '2020-08-07 04:20:54', '2020-08-07 04:20:54'),
(31, '1103019', '2020-08-07', '1', '1', '1', '2020-08-07 04:21:36', '2020-08-07 04:21:36'),
(32, '1103017', '2020-08-08', '1', '1', '1', '2020-08-07 04:23:58', '2020-08-07 04:23:58'),
(33, '1103017', '2020-08-08', '0', '0', '0', '2020-08-07 04:24:13', '2020-08-07 04:24:13'),
(34, '1103080', '2020-08-28', '1', '1', '1', '2020-08-07 04:25:05', '2020-08-07 04:25:05'),
(35, '1103080', '2020-08-07', '0', '0', '0', '2020-08-07 04:30:33', '2020-08-07 04:30:33'),
(36, '1103080', '2020-08-08', '1', '1', '1', '2020-08-07 14:13:34', '2020-08-07 14:13:34'),
(37, '1103080', '2020-08-08', '1', '1', '1', '2020-08-07 14:28:05', '2020-08-07 14:28:05'),
(38, '1103080', '2020-08-08', '0', '1', '0', '2020-08-07 15:05:23', '2020-08-07 15:05:23'),
(39, '1103017', '2020-08-08', '0', '0', '1', '2020-08-07 17:47:10', '2020-08-07 17:47:10'),
(40, '1103090', '2020-08-08', '0', '1', '0', '2020-08-07 17:51:41', '2020-08-07 17:51:41'),
(41, '1103080', '2020-08-09', '0', '1', '0', '2020-08-08 02:29:25', '2020-08-08 02:29:25'),
(42, '3', '2020-08-09', '1', '1', '1', '2020-08-08 02:32:58', '2020-08-08 02:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_31_040546_laratrust_setup_tables', 2),
(6, '2020_08_01_124454_create_students_table', 3),
(7, '2020_08_02_050733_create_meals_table', 4),
(9, '2020_08_04_190628_create_routines_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-users', 'Create Users', 'Create Users', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(2, 'read-users', 'Read Users', 'Read Users', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(3, 'update-users', 'Update Users', 'Update Users', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(4, 'delete-users', 'Delete Users', 'Delete Users', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(5, 'create-acl', 'Create Acl', 'Create Acl', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(6, 'read-acl', 'Read Acl', 'Read Acl', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(7, 'update-acl', 'Update Acl', 'Update Acl', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(8, 'delete-acl', 'Delete Acl', 'Delete Acl', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(9, 'read-profile', 'Read Profile', 'Read Profile', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(10, 'update-profile', 'Update Profile', 'Update Profile', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(11, 'create-profile', 'Create Profile', 'Create Profile', '2020-07-30 22:12:36', '2020-07-30 22:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_user`
--

INSERT INTO `permission_user` (`permission_id`, `user_id`, `user_type`) VALUES
(9, 4, 'App\\User'),
(10, 4, 'App\\User'),
(11, 4, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2020-07-30 22:12:35', '2020-07-30 22:12:35'),
(2, 'administrator', 'Administrator', 'Administrator', '2020-07-30 22:12:36', '2020-07-30 22:12:36'),
(3, 'user', 'User', 'User', '2020-07-30 22:12:36', '2020-07-30 22:12:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(3, 3, 'App\\User'),
(3, 5, 'App\\User'),
(3, 6, 'App\\User'),
(3, 7, 'App\\User'),
(3, 8, 'App\\User'),
(3, 9, 'App\\User'),
(3, 10, 'App\\User'),
(3, 11, 'App\\User'),
(3, 12, 'App\\User'),
(3, 13, 'App\\User'),
(3, 14, 'App\\User'),
(3, 18, 'App\\User'),
(3, 21, 'App\\User'),
(3, 22, 'App\\User'),
(3, 23, 'App\\User'),
(3, 24, 'App\\User'),
(3, 25, 'App\\User'),
(3, 30, 'App\\User'),
(3, 31, 'App\\User'),
(3, 32, 'App\\User'),
(3, 33, 'App\\User'),
(3, 34, 'App\\User'),
(3, 35, 'App\\User'),
(3, 36, 'App\\User'),
(3, 37, 'App\\User'),
(3, 38, 'App\\User'),
(3, 39, 'App\\User'),
(3, 40, 'App\\User'),
(3, 41, 'App\\User'),
(3, 42, 'App\\User'),
(3, 43, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breakfast` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `day`, `breakfast`, `lunch`, `dinner`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', 'Ruti, Vegetable', 'Rice, Chicken', 'Rice ,Fish , Dal', NULL, '2020-08-07 15:02:05'),
(2, 'Sunday', 'Ruti, Dal', 'Rice, Chicken', 'Rice, Fish', NULL, '2020-08-04 15:29:39'),
(3, 'Monday', 'Ruti, Vegetable', 'Rice, Chicken', 'Rice, Fish, Dal', NULL, '2020-08-04 15:30:51'),
(4, 'Tuesday', 'Ruti, Vegetable', 'Rice, Chicken', 'Rice, Fish', NULL, '2020-08-07 17:54:18'),
(5, 'Wednesday', 'Teheri', 'Pulao\r\nRoast', 'Rice\r\nChicken', NULL, NULL),
(6, 'Thursday', 'Teheri', 'Pulao\r\nRoast', 'Rice\r\nChicken', NULL, NULL),
(7, 'Friday', 'Teheri', 'Pulao\r\nRoast', 'Rice\r\nChicken', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_dept` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_lt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_id`, `email`, `student_dept`, `student_lt`, `batch`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tafsir Haque Arnob', '1103080', 'tharnob@gmail.com', 'cse', 'L4T2', '3', '1596655114.jpeg', '2020-08-01 09:45:30', '2020-08-08 01:34:26'),
(3, 'Abdullah Al Momin', '1103089', 'momin@gmail.com', 'bba', 'L4T2', '3', '1596655138.jpg', '2020-08-01 09:51:49', '2020-08-05 13:18:58'),
(4, 'Arik Md Ishtique', '1103096', 'arik@gmail.com', 'cse', 'L4T2', '3', '1596655155.jpeg', '2020-08-01 09:53:00', '2020-08-05 13:19:15'),
(6, 'Pritilota Bissash', '1103017', 'puja@gmail.com', 'cse', 'L4T2', '3', '1596659012.jpg', '2020-08-01 11:48:39', '2020-08-05 14:23:32'),
(7, 'Mehedi Hasan Sami', '1103019', 'sami@gmail.com', 'cse', 'L4T2', '3', '1596655654.jpeg', '2020-08-01 12:14:51', '2020-08-05 13:27:34'),
(11, 'amit', '1111', 'amit@gmail.com', 'cse', 'L1T1', '3', '1596655667.jpeg', '2020-08-04 18:33:47', '2020-08-08 01:41:02'),
(41, 'Ashik', '1103090', 'ashik@gmail.com', 'cse', 'L4T2', '3', '1596852061.jpg', '2020-08-07 17:50:51', '2020-08-08 02:01:01'),
(46, 'jony', '1103009', 'jony@gmail.com', 'cse', 'L1T1', '3', 'default.png', '2020-08-08 02:01:42', '2020-08-08 02:01:42'),
(47, 'pavel', '1103013', 'pavel@gmail.com', 'cse', 'L4T2', '3', 'default.png', '2020-08-08 02:19:52', '2020-08-08 02:19:52'),
(48, 'q', '3', 'q@gmail', 'cse', 'L1T1', '1', 'default.png', '2020-08-08 02:30:23', '2020-08-08 02:30:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'aurohaque1996@gmail.com', NULL, '$2y$10$zmWY3JFHYImQYIKDEQFMouF5Ei/w2NSpzS71AfmdIUIaHt.n.UO.G', 'Qo7IkAYYDs1XCrEeCCNIW9ZdSsMCN1GS2LgDt7p3GQoaXLRjqaqgE1f0kGFu', '2020-07-30 22:12:36', '2020-08-07 05:11:17'),
(2, 'Administrator', 'administrator@app.com', NULL, '$2y$10$2oVAuQmGvCkLdoWX7mskX.d6cY0L4inHsfYs4f639N16pwDmFQs1K', NULL, '2020-07-30 22:12:36', '2020-07-30 22:12:36'),
(3, 'User', 'user@app.com', NULL, '$2y$10$Ql5zOhW2foXO6G8XbAw/TOtSCgODg93NwlEeJ.pySQf8tPq6bLxKy', NULL, '2020-07-30 22:12:36', '2020-07-30 22:12:36'),
(4, 'Cru User', 'cru_user@app.com', NULL, '$2y$10$fietMb0hsOfkMkBa0FRfsupvIQJALXDvYwSlPp1V6qnSJJPilAHPm', 'aDKBdfiw4P', '2020-07-30 22:12:36', '2020-07-30 22:12:36'),
(5, 'Tafsir Haque Arnob', 'tharnob@gmail.com', NULL, '$2y$10$Mg8eipeE0u/3BfD.tyoS/eNtr.AzfecXt/Uf6Pgyv736CUM03KnQS', '4m6lx0Kh89x0PSqTcNxnXu41GfHJhKmJNDx1S2ykm1IawCzF4tqjmYFbg0g1', '2020-07-30 22:54:12', '2020-08-07 15:45:57'),
(7, 'tharnobhi', 'tharnobhi@gmail.com', NULL, '$2y$10$DtfuOnB1xqnEHLyLadSQaud8mZR05KQrZVUMRleH6pjrmfDAse7f.', '5OeKHyNHFPQgcM63tQG80Z2hW36QbxjHdDDQz4Wd1ePb6mQk7ZRzBLCYzu58', '2020-07-31 10:36:57', '2020-07-31 12:18:54'),
(8, 'kali', 'kali@gmail.com', NULL, '$2y$10$NlOhf50eTBMXlgZXeQ7nUOqlO6SvpGw5rTV3w13kMNYx9p/BDcrny', NULL, '2020-07-31 11:53:53', '2020-07-31 11:53:53'),
(9, 'Tanjib Haque Amit', 'amit@gmail.com', NULL, '$2y$10$vuzqiSaJ0FW/tsaLmyTHwOKvfytut.LitOMhFMhJMoBFSkizW0JZe', NULL, '2020-08-01 09:05:06', '2020-08-01 09:05:06'),
(10, 'Arik Md. Ishtique', 'arik@gmail.com', NULL, '$2y$10$JY83XQICpvU72CFh9hETXO9Hm6KTUK/3XN33O.BC7.csArA32CSEm', NULL, '2020-08-02 11:19:14', '2020-08-02 11:19:14'),
(11, 'mofiz', 'mofiz@gmail.com', NULL, '$2y$10$Z1tUK5BdAnq3lO2lGJHKiOH4xlj0/epPLd4Cx2jEYpeP70MufCkMG', NULL, '2020-08-06 10:46:55', '2020-08-06 10:46:55'),
(18, 'Abdullah Al Momin', 'momin@gmail.com', NULL, '$2y$10$h9BlbzGP3MbJxZGt6UXgeuCGQezDQNFL9pa8pFitcg3wfXiXklj/a', NULL, '2020-08-06 23:17:41', '2020-08-06 23:17:41'),
(32, 'sami', 'sami@gmail.com', NULL, '$2y$10$rBea/TbWykqVr5pCKHEfzeMzF1qYxEokRYO3EjNh3/ON6diWlZ7Kq', NULL, '2020-08-07 04:19:52', '2020-08-07 04:19:52'),
(33, 'puja', 'puja@gmail.com', NULL, '$2y$10$/rsLGFkKH5z0HdMv1OU8KO.ua8rZrWQihbCUX7/liBezU.tqH2u6O', NULL, '2020-08-07 04:23:43', '2020-08-07 04:23:43'),
(35, 'dummy', 'dummy@gmail.com', NULL, '$2y$10$tFCPw9tw2UKcyAUu8RX32.S3l3npoOnKE8I0.tqZ/xDlI41i66nLu', NULL, '2020-08-07 15:35:21', '2020-08-07 15:35:21'),
(37, 'ashik', 'ashik@gmail.com', NULL, '$2y$10$Gsa5dKt7hNab/rodA1c2.eBFYqaLlCwmMiWHY2I3C1fx.8pnZhDpi', NULL, '2020-08-07 17:50:04', '2020-08-07 17:50:04'),
(40, 'kaka', 'kaka@gmail.com', NULL, '$2y$10$tpgRt4W40Xihhwp9NxRrX.TlzK8/yF5BlbuzmwpAKzvw/ix0yKyMu', NULL, '2020-08-08 00:07:01', '2020-08-08 00:07:01'),
(41, 'k', 'k@gmail.com', NULL, '$2y$10$ExzklvcJ7N2qsplb5sojauAZ87CuNQECaA6Q6.Z2DcTVYjhmhd..O', NULL, '2020-08-08 01:58:41', '2020-08-08 01:58:41'),
(42, 'pavel', 'pavel@gmail.com', NULL, '$2y$10$15pQCWu0SpgIiabF.OkArOBh9GCPNhhNGbn3IxZzri5LPtATEKG2m', NULL, '2020-08-08 02:21:18', '2020-08-08 02:21:18'),
(43, 'q', 'q@gmail', NULL, '$2y$10$6FmJX1FrLNe/S38gHTPbeO5w5Cd2QvHCfHpZdu6yG2AFVCaohUQLq', NULL, '2020-08-08 02:31:19', '2020-08-08 02:31:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
