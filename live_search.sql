-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2019 at 01:11 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `live_searches`
--

CREATE TABLE `live_searches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2019_08_21_070019_create_live_searches_table', 1),
(26, '2019_10_29_052410_create_storages_table', 1),
(27, '2019_10_29_052617_create_warehouses_table', 1),
(28, '2019_10_29_054430_create_storage_warehouse_table', 1);

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
-- Table structure for table `storages`
--

CREATE TABLE `storages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storages`
--

INSERT INTO `storages` (`id`, `storage`, `created_at`, `updated_at`) VALUES
(1, 'Pallet Shuttle', '2019-10-29 00:24:39', '2019-10-29 00:24:39'),
(2, 'Fangkun 3metric tons loading pallet ', '2019-10-29 00:58:52', '2019-10-29 00:58:52'),
(3, 'Warehouse storage mezzanine rack', '2019-10-29 00:58:52', '2019-10-29 00:58:52'),
(4, 'Industrial warehouse drive in rack', '2019-10-29 00:58:52', '2019-10-29 00:58:52'),
(5, 'Warehouse steel cantilever rack', '2019-10-29 00:58:52', '2019-10-29 00:58:52'),
(6, 'Warehouse storage medium duty rack', '2019-10-29 00:58:52', '2019-10-29 00:58:52'),
(7, 'warehouse metal stacking rack', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(8, 'Cable reel storage rack', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(9, 'Temperature-Controlled Warehouse', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(10, 'Mezzanine flooring', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(11, 'Multi-tier racking', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(12, 'Mobile shelving', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(13, 'Metal iron storage rack', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(14, 'Shelving', '2019-10-29 00:58:53', '2019-10-29 00:58:53'),
(15, 'Pallet Racking', '2019-10-29 00:58:53', '2019-10-29 00:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `storage_warehouse`
--

CREATE TABLE `storage_warehouse` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warehouse_id` bigint(20) UNSIGNED NOT NULL,
  `storage_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storage_warehouse`
--

INSERT INTO `storage_warehouse` (`id`, `warehouse_id`, `storage_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 1, 5, NULL, NULL),
(6, 1, 6, NULL, NULL),
(7, 1, 7, NULL, NULL),
(8, 1, 8, NULL, NULL),
(9, 2, 1, NULL, NULL),
(10, 2, 2, NULL, NULL),
(11, 2, 3, NULL, NULL),
(12, 2, 4, NULL, NULL),
(13, 2, 5, NULL, NULL),
(14, 2, 6, NULL, NULL),
(15, 2, 7, NULL, NULL),
(16, 2, 8, NULL, NULL);

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

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `available_space` bigint(20) NOT NULL,
  `solution_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facilities` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(4) NOT NULL,
  `electric` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperature` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `security` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `opening_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `closing_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_time` tinyint(4) NOT NULL,
  `propertyOwner` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `name`, `code`, `available_space`, `solution_type`, `facilities`, `image`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `address`, `description`, `approved`, `electric`, `temperature`, `security`, `opening_time`, `closing_time`, `all_time`, `propertyOwner`, `created_at`, `updated_at`) VALUES
(1, 'Badda, Dhaka', 'COCACOLA-11254', 9000, 'Warehouse Storage', 'Chilled,CC Camera', 'warehouse_feature/feature.jpg', 'warehouse_img/1.jpg', 'warehouse_img/2.jpg', 'warehouse_img/3.jpg', 'warehouse_img/4.jpg', 'warehouse_img/5.jpg', 'Gudaraghat, Badda', 'Common outdoor loading dock, forklift service available with driver', 1, 'Electric', 'Temperature', 'Security', '10:12', '00:00', 1, 6, '2019-10-29 00:20:42', '2019-10-29 00:20:42'),
(2, 'Gulshan, Dhaka', 'DangerousGoods-1122', 8000, 'E-Commerce Fulfillment', 'Frozen', 'warehouse_feature/feature1.jpg', 'warehouse_img/11.jpg', 'warehouse_img/22.jpg.jpg', 'warehouse_img/33.jpg', 'warehouse_img/44.jpg', 'warehouse_img/55.jpg', 'GulShan 01, Dhaka', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '13:10', '00:00', 1, 6, '2019-10-29 04:52:30', '2019-10-29 04:52:30'),
(3, 'Lalmatia ,Dhaka', 'Warehouse-111', 320, 'Retail Fulfillment', 'Ambient', 'warehouse_feature/28251-fet.jpg', 'warehouse_img/28379-1.jpg', 'warehouse_img/85705-2.jpg', 'warehouse_img/43632-3.jpg', 'warehouse_img/65964-4.jpg', 'warehouse_img/94152-5.jpg', 'Lalmatia, Dhaka', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '13:00', '00:00', 1, 6, '2019-10-29 04:52:31', '2019-10-29 04:52:31'),
(4, 'Uttara ,Dhaka', 'Warehouse-12', 1200, 'Kitting and Special Projects', 'Not Controlled Temp.', 'warehouse_feature/67969-fet.jpg', 'warehouse_img/52603-1.jpg', 'warehouse_img/91418-2.jpg', 'warehouse_img/15002-3.jpg', 'warehouse_img/75938-4.jpg', 'warehouse_img/97676-5.jpg', 'Sector 02, Uttara ', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '10:00', '22:00', 1, 6, '2019-10-29 04:52:31', '2019-10-29 04:52:31'),
(5, 'Banani ,Dhaka', 'Warehouse-13', 1200, 'Warehouse Storage', 'CC Camera,24/7 Security', 'warehouse_feature/27582-fet.jpg', 'warehouse_img/87577-1.jpg', 'warehouse_img/64019-2.jpg', 'warehouse_img/16948-3.jpg', 'warehouse_img/22066-4.jpg', 'warehouse_img/19056-5.jpg', 'Banani, Dhaka', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '10:00', '22:00', 1, 6, '2019-10-29 04:52:31', '2019-10-29 04:52:31'),
(6, 'Dhanmondi ,Dhaka', 'Warehouse-14', 1200, 'E-Commerce Fulfillment', 'CC Camera,24/7 Security', 'warehouse_feature/99916-fet.jpg', 'warehouse_img/51713-1.jpg', 'warehouse_img/42450-2.jpg', 'warehouse_img/81304-3.jpg', 'warehouse_img/55743-4.jpg', 'warehouse_img/53289-5.jpg', 'Dhanmondi 8/A, Dhaka', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '10:00', '22:00', 1, 6, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(7, 'Mirpur ,Dhaka', 'Warehouse-15', 1200, 'Retail Fulfillment', 'Critical Inventory Logistics', 'warehouse_feature/23097-fet.jpg', 'warehouse_img/49003-1.jpg', 'warehouse_img/22023-2.jpg', 'warehouse_img/22755-3.jpg', 'warehouse_img/30931-4.jpg', 'warehouse_img/25559-5.jpg', 'Minpur-2, Dhaka', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '10:00', '22:00', 1, 6, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(8, 'Mohammadpur ,Dhaka', 'Warehouse-16', 1200, 'Kitting and Special Projects', 'Packaging/ Wrapping', 'warehouse_feature/61534-fet.jpg', 'warehouse_img/61116-1.jpg', 'warehouse_img/86753-2.jpg', 'warehouse_img/21978-3.jpg', 'warehouse_img/81831-4.jpg', 'warehouse_img/33448-5.jpg', 'Adabor, Mohhamdpur', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '10:00', '22:00', 1, 6, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(9, 'Shahazadpur, Badda', 'WRS-SEGMENT-17', 350, 'Warehouse Storage', 'Truck Parking', 'warehouse_feature/74609-fet.jpg', 'warehouse_img/47541-1.jpg', 'warehouse_img/94580-2.jpg', 'warehouse_img/13059-3.jpg', 'warehouse_img/25371-4.jpg', 'warehouse_img/79847-5.jpg', 'Link Road, Middle Badda', 'Link Road, Middle Badda', 1, 'Electric', 'Temperature', 'Security', '10:00', '22:00', 1, 9, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(10, 'Jigatola Wirehouse', 'jigatola1111', 1300, 'E-Commerce Fulfillment', 'Packaging/ Wrapping', 'warehouse_feature/36281-fet.jpg', 'warehouse_img/87082-4.jpg', 'warehouse_img/82959-3.jpg', 'warehouse_img/70943-1.jpg', 'warehouse_img/95261-2.jpg', 'warehouse_img/76483-5.jpg', 'Jigatola, Dhaka', '<missing>', 1, 'Electric', '', '', '09:00', '12:00', 1, 10, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(11, 'CBC2', 'Warehouse-11', 1800, 'Retail Fulfillment', 'Critical Inventory Logistics', 'warehouse_feature/12803-1.jpg', 'warehouse_img/47428-1.jpg', 'warehouse_img/50152-2.jpg', 'warehouse_img/38239-3.jpg', 'warehouse_img/80644-4.jpg', 'warehouse_img/74992-5.jpg', 'New Pulton, Dhaka.', 'Looking for Month to Month Storage/Warehouse in St. Louis Park', 1, 'Electric', 'Temperature', 'Security', '10:10', '22:10', 1, 10, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(12, 'Warehouse 560', 'Warehouse-111_66', 350, 'Kitting and Special Projects', '24/7 Security', 'warehouse_feature/81364-fet.jpg', 'warehouse_img/41109-1.jpg', 'warehouse_img/84892-2.jpg', 'warehouse_img/40833-3.jpg', 'warehouse_img/70387-4.jpg', 'warehouse_img/45882-5.jpg', 'Mohakhali, Dhaka', 'Common outdoor loading dock, forklift service available with driver.', 1, 'Electric', 'Temperature', 'Security', '10:10', '22:10', 1, 11, '2019-10-29 04:52:32', '2019-10-29 04:52:32'),
(13, 'Shahbag Warehouse', 'sp03092019', 1000, 'Warehouse Storage', 'Truck Parking', 'warehouse_feature/97205-1.jpg', 'warehouse_img/56681-2.jpg', 'warehouse_img/93441-3.jpg', 'warehouse_img/43436-4.jpg', 'warehouse_img/19986-5.jpg', 'warehouse_img/67898-6.jpg', 'Shahbag, Dhaka', '<missing>', 1, 'Electric', 'Temperature', 'Security', '10:00', '16:00', 1, 14, '2019-10-29 04:52:32', '2019-10-29 04:52:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `live_searches`
--
ALTER TABLE `live_searches`
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
-- Indexes for table `storages`
--
ALTER TABLE `storages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage_warehouse`
--
ALTER TABLE `storage_warehouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `live_searches`
--
ALTER TABLE `live_searches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `storages`
--
ALTER TABLE `storages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `storage_warehouse`
--
ALTER TABLE `storage_warehouse`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
