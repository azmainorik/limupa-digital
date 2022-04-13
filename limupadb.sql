-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 01:43 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `limupadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `category_id`, `sub_category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Samsung', 'Korea brand', 'brand-images/1648376863.png', 1, '2022-03-27 04:27:43', '2022-03-27 04:27:43'),
(2, 2, 2, 'Lays', 'american', 'brand-images/1648384995.jpg', 1, '2022-03-27 06:43:15', '2022-03-27 06:43:15'),
(3, 1, 1, 'Xiaomi', 'Xiaomi, a global company producing quality products at honest pricing.', 'brand-images/1648385168.png', 1, '2022-03-27 06:46:08', '2022-03-28 11:49:41');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'daily use materials', 'category-images/1648375331.png', 1, '2022-03-27 04:02:11', '2022-03-27 04:02:11'),
(2, 'Food', 'eating', 'category-images/1648384927.jpg', 1, '2022-03-27 06:42:07', '2022-03-27 06:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `mobile`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Siyam Khan', 'Siyam@gmail.com', '01521334454', '$2y$10$agglKiIWfto6Af4sUYxv6uCi265i1kxZMe9q9JvTeumcYfx7BPHUC', '2022-04-06 04:01:55', '2022-04-06 04:01:55'),
(4, 'robin', 'robin@gmail.com', '01521334458', '$2y$10$Ah0KERevkTc4wJ1hYEow3uGHO6dxOGJpDlbS3dRuopMDLreO9fqxC', '2022-04-06 04:23:30', '2022-04-06 04:23:30'),
(5, 'gr khan', 'gr@gmail.com', '01521334465', '$2y$10$B.QpWzCsemFnxlvv16jvp.3lRAHmBKmZqPZyq8bM4QhNFIarl10tm', '2022-04-06 05:07:44', '2022-04-06 05:07:44'),
(6, 'hm rasel', 'hm@gmail.com', '01521334447', '$2y$10$Ho7LFQD7PEPurb58P/vpEejoy4MtEY19sJjyA8R6N2ZKoG.WVvFUC', '2022-04-06 05:46:02', '2022-04-06 05:46:02'),
(7, 'tanbin', 'th@gmail.com', '01521334555', '$2y$10$Gb4Q74axSvTzCd6bgGNW9OMmYcg/JOauBF0snNoQkRpf5oaYe8pNi', '2022-04-06 05:47:17', '2022-04-06 05:47:17'),
(8, 'hridoy haq', 'hridoy@gmail.com', '01521334559', '$2y$10$TmugWqe1X7MlC2KNNaHodOa0LghWqr0qKF3PHTupkI1pW34YJnwg.', '2022-04-06 05:49:11', '2022-04-06 05:49:11'),
(9, 'Sh hridoy', 'Sh_hridoy@gmail.com', '01521333334', '$2y$10$Lj8vQbOuOQk/iFsxSIpO5.jhe3fz1BqJhoCeVdAkcUClwmvpyekGa', '2022-04-06 05:51:01', '2022-04-06 05:51:01'),
(10, 'robin khan', 'rk@gmail.com', '01521334678', '$2y$10$RpCuvYwUfvWsgrzadB9LWuvXtEtJJjwJJe7E6RuSeONLe.W4PPOna', '2022-04-06 11:17:04', '2022-04-06 11:17:04'),
(11, 'rk rakib', 'rkr@gmail.com', '01521334474', '$2y$10$TdFvAUNAKDFACFZjEzbPh.m8Z.jP5qmiM61B2mNiDOJWAKV82mlrG', '2022-04-07 02:29:40', '2022-04-07 02:29:40'),
(12, 'mehedi hasan', 'mh@gmail.com', '01521334545', '$2y$10$Va/irEqvGUTNydGdihTAfOKE5tcPSR6EpoTboZ5D072BUMeP4r8nu', '2022-04-08 05:20:54', '2022-04-08 05:20:54'),
(13, 'tapan rpy', 'tapan@gmail.com', '01521334666', '$2y$10$U2SptJ84r09TxjRM.oZTDOWnCp3oEpx2KP0aewDBWQHMGaqgsv6s.', '2022-04-08 09:08:06', '2022-04-08 09:08:06'),
(14, 'Md Jackob', 'jackob@gmail.com', '01521334545', '$2y$10$qwE7daFI0gjAW66dYTPFTewFZVCj6d/f.pfjXo3wDuomf9.kKg8AW', '2022-04-08 13:37:28', '2022-04-08 13:37:28'),
(15, 'Md Jack', 'jack@gmail.com', '01521334544', '$2y$10$W4pxwU/k8od7jepbcwdz3uCaTJ2qjaADaYPiCiBJREng20tOIUdMS', '2022-04-08 13:38:53', '2022-04-08 13:38:53'),
(16, 'Md sameer', 'sameer@gmail.com', '01521334543', '$2y$10$wYlimVeJhqoiQZN2.9hBfeCC6/r/K541aptH70MoBPfKVQNuhdEsq', '2022-04-08 13:40:28', '2022-04-08 13:40:28'),
(17, 'khan sameer', 'sm@gmail.com', '01521334343', '$2y$10$n64VryhBCvu8BMdoIk2Doe51PUZK.y5595oonEpd2TaUqbLraa1U2', '2022-04-08 13:42:54', '2022-04-08 13:42:54'),
(18, 'khan sameer', 'ksm@gmail.com', '01521334343', '$2y$10$DiWeFtCuvGhkycpIUjV3s.GYYqqyLF2YqEAcEmx7AXGzwKubvYPru', '2022-04-08 13:44:27', '2022-04-08 13:44:27'),
(19, 'ananda', 'and@gmail.com', '01521334459', '$2y$10$3RvYmoaco.GeEejZb.Y27uZA6fdxvWvQqtWBf8SHQJOcrUW11BaA6', '2022-04-08 13:45:41', '2022-04-08 13:45:41'),
(20, 'fahim hasan', 'fahim@gmail.com', '01521334548', '$2y$10$ff/WYIOY7HaVSSJNL1Lgt.jSH6QAqtK443tzJ6wNSEXKwYU8ZewnW', '2022-04-09 02:44:35', '2022-04-09 02:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_26_134314_create_categories_table', 1),
(7, '2022_01_28_120652_create_sessions_table', 1),
(8, '2022_01_30_130505_create_sub_categories_table', 1),
(9, '2022_01_30_145025_create_brands_table', 1),
(10, '2022_01_30_172440_create_units_table', 1),
(11, '2022_01_31_102128_create_products_table', 1),
(12, '2022_01_31_124332_create_sub_images_table', 1),
(13, '2022_02_16_095641_create_flights_table', 1),
(14, '2022_02_16_100427_create_orders_table', 1),
(15, '2022_02_16_100619_create_customers_table', 1),
(16, '2022_02_16_101001_create_orderdetails_table', 1),
(17, '2022_03_26_194239_add_category_id_to_brands_table', 2),
(18, '2022_03_27_061034_add_to_brands_table', 2),
(19, '2022_03_31_073351_create_customers_table', 3),
(20, '2022_04_05_104754_create_shippings_table', 4),
(21, '2022_04_08_064802_create_shippings_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipping_id` int(111) NOT NULL,
  `customer_id` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `shipping_id`, `customer_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(2, 11, '20', 3, 'Redmi Y3', 28000.00, 1, '2022-04-09 02:44:48', '2022-04-09 02:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_timestamp` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `tax_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_amount` double(10,2) NOT NULL DEFAULT 0.00,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `payment_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_timestamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_timestamp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular_price` double(10,2) NOT NULL,
  `selling_price` double(10,2) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hit_count` int(11) NOT NULL DEFAULT 1,
  `sales_count` int(11) NOT NULL DEFAULT 1,
  `review_count` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `unit_id`, `name`, `code`, `regular_price`, `selling_price`, `short_description`, `long_description`, `image`, `hit_count`, `sales_count`, `review_count`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'Samsung Galaxy A73 5G', '01', 45000.00, 40000.00, 'Android 12, One UI 4.', '28GB 6GB RAM, 128GB 8GB RAM, 256GB 8GB RAM\r\nMain Camera 	Quad 	108 MP, f/1.8, (wide), PDAF, OIS\r\n12 MP, f/2.2, (ultrawide)\r\n5 MP, f/2.4, (macro)\r\n5 MP, f/2.4, (depth)\r\nFeatures 	LED flash, panorama, HDR\r\nVideo 	4K@30fps, 1080p@30/60fps; gyro-EIS\r\nSelfie camera 	Single 	32 MP, f/2.2, 26mm (wide), 1/2.8\", 0.8µm\r\nFeatures 	HDR\r\nVideo 	4K@30fps, 1080p@30fps', 'product-images/1648449228.jpg', 1, 1, '1', 1, '2022-03-28 00:33:48', '2022-03-28 00:33:48'),
(2, 1, 1, 1, 1, 'Samsung Galaxy M32 5G', '002', 30000.00, 20000.00, 'Android 11, One UI 3.1', 'Body 	Dimensions 	164.2 x 76.1 x 9.1 mm (6.46 x 3.00 x 0.36 in)\r\nWeight 	205 g (7.23 oz)\r\nSIM 	Hybrid Dual SIM (Nano-SIM, dual stand-by)\r\nDisplay 	Type 	TFT\r\nSize 	6.5 inches, 102.0 cm2 (~81.6% screen-to-body ratio)\r\nResolution 	720 x 1600 pixels, 20:9 ratio (~270 ppi density)\r\nPlatform 	OS 	Android 11, One UI 3.1\r\nChipset 	MediaTek MT6853 Dimensity 720 5G (7 nm)\r\nCPU 	Octa-core (2x2.0 GHz Cortex-A76 & 6x2.0 GHz Cortex-A55)\r\nGPU 	Mali-G57 MC3', 'product-images/1648449582.jpg', 1, 1, '1', 1, '2022-03-28 00:39:42', '2022-03-28 00:39:42'),
(3, 1, 1, 3, 1, 'Redmi Y3', '001', 30000.00, 28000.00, 'Released 2019, April', 'Dual SIM\r\n\r\n6.26 inch screen, 720 x 1520 resolution\r\n\r\n3GB RAM\r\n\r\n32GB internal storage\r\n\r\n12MP + 2MP rear camera\r\n\r\n32MP selfie camera\r\n\r\n4000 mAh battery', 'product-images/1648489886.jpg', 1, 1, '1', 1, '2022-03-28 11:51:26', '2022-03-28 11:51:26'),
(4, 1, 1, 3, 1, 'Xiaomi 12X', '002', 20000.00, 119999.00, 'Released 2021, December 31', '6g, 8.2mm thickness\r\nAndroid 11, MIUI 13\r\n128GB/256GB storage, no card slot', 'product-images/1648490007.jpg', 1, 1, '1', 1, '2022-03-28 11:53:27', '2022-03-28 11:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2NP1QpGRK6a9AhjKbjJuHKukli1UojM4V9ANJ1nB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2JjNU1BWXNmTGxNcVFFdDR0d2g4NWVtSGxKVmhwZUxyZnEyREg5cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly9sb2NhbGhvc3QvbGltdXBhLWRpZ2l0YWwvcHVibGljL2N1c3RvbWVyLWRldGFpbCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1649446567),
('6Dp3wEU6OLcDlKcB8NS35XQcrCYviJwbGu8yj252', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaE55TVk1dHRTamZsYVhxRTZvUVhKUGNsWUJocW1ScERBNGJadGJpSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTY6Imh0dHA6Ly9sb2NhbGhvc3QvbGltdXBhLWRpZ2l0YWwvcHVibGljL2NoZWNrb3V0L3NoaXBwaW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1649446566),
('7MeSE5rO0tv00GFtJsMw4LH3F1bhUAwAlPzlUOiz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoibTlvaFZza0M4b3RJaWRkVHZoenMyZk1FdG9XM3g0dnJwZG1xbkZlZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTM6Imh0dHA6Ly9sb2NhbGhvc3QvbGltdXBhLWRpZ2l0YWwvcHVibGljL2NvbXBsZXRlLW9yZGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo0OiJjYXJ0IjthOjA6e31zOjEwOiJjdXN0b21lcklkIjtpOjE5O30=', 1649447150),
('KOtB2Dl0nXH3Qd7Foi7xnySkYuRmqgUVs7Y423Sj', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo5OntzOjY6Il90b2tlbiI7czo0MDoiVEYyRmlMQjJzY0NtZFk2bXBuZm4zYTN1ZHM4WkdPbDc5ZlJhbHNyUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3QvbGltdXBhLWRpZ2l0YWwvcHVibGljL29yZGVyLWluZm8vMjAiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjQ6ImNhcnQiO2E6MDp7fXM6MTA6ImN1c3RvbWVySWQiO2k6MjA7czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRTeXlTNmN6dk84bjNIZmFwSW1DbzQub0pELnh4aUxMZnpaRGpER1llZy92Zk5jM2NKMi8wRyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkU3l5UzZjenZPOG4zSGZhcEltQ280Lm9KRC54eGlMTGZ6WkRqREdZZWcvdmZOYzNjSjIvMEciO30=', 1649502619),
('ZLyFGfduNSzBEMzFizVWqgUhd7xsYJINvGfQUfn8', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiRGRXRnhsdzlTYU5VdUZuSWxEQW5PQ05jSjAzRThNVFdOeDJCTEVmTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly9sb2NhbGhvc3QvbGltdXBhLWRpZ2l0YWwvcHVibGljL2Rhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YToxOntzOjc6ImRlZmF1bHQiO086Mjk6IklsbHVtaW5hdGVcU3VwcG9ydFxDb2xsZWN0aW9uIjoyOntzOjg6IgAqAGl0ZW1zIjthOjE6e3M6MzI6IjhjYTdhNDIwYTZhNDQ2ODJiNjNlZGRkNWM3MThlZjg0IjtPOjMyOiJHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbSI6MTE6e3M6NToicm93SWQiO3M6MzI6IjhjYTdhNDIwYTZhNDQ2ODJiNjNlZGRkNWM3MThlZjg0IjtzOjI6ImlkIjtpOjE7czozOiJxdHkiO3M6MToiMSI7czo0OiJuYW1lIjtzOjIxOiJTYW1zdW5nIEdhbGF4eSBBNzMgNUciO3M6NToicHJpY2UiO2Q6NDAwMDA7czo2OiJ3ZWlnaHQiO2Q6MDtzOjc6Im9wdGlvbnMiO086Mzk6Ikdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtT3B0aW9ucyI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjU6ImltYWdlIjtzOjI5OiJwcm9kdWN0LWltYWdlcy8xNjQ4NDQ5MjI4LmpwZyI7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9czo3OiJ0YXhSYXRlIjtpOjIxO3M6NDk6IgBHbG91ZGVtYW5zXFNob3BwaW5nY2FydFxDYXJ0SXRlbQBhc3NvY2lhdGVkTW9kZWwiO047czo0NjoiAEdsb3VkZW1hbnNcU2hvcHBpbmdjYXJ0XENhcnRJdGVtAGRpc2NvdW50UmF0ZSI7aTowO3M6ODoiaW5zdGFuY2UiO3M6NzoiZGVmYXVsdCI7fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFN5eVM2Y3p2TzhuM0hmYXBJbUNvNC5vSkQueHhpTExmelpEakRHWWVnL3ZmTmMzY0oyLzBHIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRTeXlTNmN6dk84bjNIZmFwSW1DbzQub0pELnh4aUxMZnpaRGpER1llZy92Zk5jM2NKMi8wRyI7fQ==', 1649481812);

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order-status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending..',
  `payment_status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `payment_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending..',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `customer_id`, `name`, `email`, `mobile`, `address`, `total_price`, `order-status`, `payment_status`, `payment_type`, `created_at`, `updated_at`) VALUES
(1, 13, 'tapan rpy', 'tapan@gmail.com', '01521334666', 'badda', '119999', 'Pending..', 'pending', 'cash', '2022-04-08 10:01:39', '2022-04-08 10:01:39'),
(3, 14, 'Md Jackob', 'jackob@gmail.com', '01521334545', 'malibag', '40000', 'Pending..', 'pending', 'cash', '2022-04-08 13:37:44', '2022-04-08 13:37:44'),
(5, 15, 'Md Jack', 'jack@gmail.com', '01521334544', 'dhanmondi', '40000', 'Pending..', 'pending', 'cash', '2022-04-08 13:39:16', '2022-04-08 13:39:16'),
(6, 16, 'Md sameer', 'sameer@gmail.com', '01521334543', 'dhanmondi', '40000', 'Pending..', 'pending', 'cash', '2022-04-08 13:40:42', '2022-04-08 13:40:42'),
(7, 17, 'khan sameer', 'sm@gmail.com', '01521334343', 'uttara', '40000', 'Pending..', 'pending', 'cash', '2022-04-08 13:43:08', '2022-04-08 13:43:08'),
(10, 19, 'ananda', 'and@gmail.com', '01521334459', 'uttara', '40000', 'Pending..', 'pending', 'cash', '2022-04-08 13:45:49', '2022-04-08 13:45:49'),
(11, 20, 'fahim hasan', 'fahim@gmail.com', '01521334548', 'merul badda', '28000', 'Pending..', 'pending', 'cash', '2022-04-09 02:44:48', '2022-04-09 02:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mobile', 'Communication', 'subcategory-images/1648375371.png', 1, '2022-03-27 04:02:51', '2022-03-27 04:02:51'),
(2, 2, 'Chips', 'dry food', 'subcategory-images/1648384966.jpg', 1, '2022-03-27 06:42:46', '2022-03-27 06:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `sub_images`
--

CREATE TABLE `sub_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'number', 'decimal number', 1, '2022-03-28 00:29:07', '2022-03-28 00:29:07');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$SyyS6czvO8n3HfapImCo4.oJD.xxiLLfzZDjDGYeg/vfNc3cJ2/0G', NULL, NULL, NULL, NULL, NULL, '2022-03-27 03:51:37', '2022-03-27 03:51:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shippings_email_unique` (`email`),
  ADD UNIQUE KEY `shippings_mobile_unique` (`mobile`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_images`
--
ALTER TABLE `sub_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_images`
--
ALTER TABLE `sub_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
