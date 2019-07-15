-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 08:32 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL),
(2, 'afroz', 'afroz@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Ti-shirt', 'Good product', 1, NULL, NULL),
(8, 'Television', 'Well product', 1, NULL, NULL),
(9, 'Toys', 'Toys s very good product', 1, NULL, NULL),
(10, 'Mobile Phones', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(11, 'Desktop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(12, 'Laptop', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(13, 'Accessories', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(14, 'Software', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(15, 'Sports $ Fitness', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(16, 'Footwear', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(17, 'Jewellery', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(18, 'Clothing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(19, 'Home Decor $ kitchen', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(20, 'Beauty & Health care', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL),
(21, 'Toys kids & Babies', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `email_address`, `password`, `phone`, `address`, `city`, `country`, `zip_code`, `created_at`, `updated_at`) VALUES
(5, 'afroza', 'afroza@gmail.com', 'a09417501e2cd205ade459841fb4a9d9', 'Phone', 'Address', 'City', 'Country', 'Zip Code', '2019-05-04 13:58:36', NULL),
(6, 'afroza', 'afroza@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01786942732', 'Dhaka', 'Tangail', 'Bangladesh', '12345', '2019-05-06 19:30:13', NULL),
(7, 'Name', 'E-Mail', 'dc647eb65e6711e155375218212b3964', 'Phone', 'Address', 'City', 'Country', 'Zip Code', '2019-05-25 20:36:02', NULL),
(8, 'Name', 'E-Mail', 'dc647eb65e6711e155375218212b3964', 'Phone', 'Address', 'City', 'Country', 'Zip Code', '2019-05-27 10:57:46', NULL),
(9, 'fg@', 'E-Mail', 'dc647eb65e6711e155375218212b3964', 'Phone', 'Address', 'City', 'Country', 'Zip Code', '2019-06-19 09:22:02', NULL),
(10, 'nisha', 'nisha@', 'dc647eb65e6711e155375218212b3964', 'Phone', 'Address', 'City', 'Country', 'Zip Code', '2019-06-19 19:01:18', NULL),
(15, 'Name', 'E-Mail', 'dc647eb65e6711e155375218212b3964', NULL, NULL, NULL, NULL, NULL, '2019-06-23 14:46:12', NULL),
(16, 'Name', 'E-Mail', 'dc647eb65e6711e155375218212b3964', NULL, NULL, NULL, NULL, NULL, '2019-06-23 14:47:56', NULL),
(17, 'Name', 'E-Mail', 'dc647eb65e6711e155375218212b3964', '01786942732', 'tangail', 'Dhaka', 'Bangladesh', '234', '2019-06-23 14:48:11', NULL),
(18, 'Name', 'afroz@gmail.com', 'f6c79f4af478638c39b206ec30ab166b', NULL, NULL, NULL, NULL, NULL, '2019-06-23 15:24:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `manufacturer_id` int(10) UNSIGNED NOT NULL,
  `manufacturer_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`manufacturer_id`, `manufacturer_name`, `manufacturer_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(5, 'Iphone', 'Lorem ipsum dolor sit amet sed do eiusmod', 1, NULL, NULL),
(6, 'Samsung', 'Lorem ipsum dolor sit amet, sed do eiusmod.', 1, NULL, NULL),
(7, 'Acer', 'Lorem ipsum dolor sit amet, sed do eiusmod', 1, NULL, NULL),
(8, 'HP', 'Lorem ipsum dolor sit amet, sed do eiusmod', 1, NULL, NULL),
(9, 'Dell', 'Lorem ipsum dolor sit amet, sed do eiusmod', 1, NULL, NULL),
(10, 'Walton', 'Lorem ipsum dolor sit amet, sed do eiusmod', 1, NULL, NULL),
(11, 'Canon', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. </p>', 1, NULL, NULL);

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
(3, '2019_04_04_173729_create_admin_table', 2),
(4, '2019_04_10_161733_create_category_table', 3),
(5, '2019_04_13_181046_create_manufacturer_table', 4),
(6, '2019_04_18_140718_create_product_table', 5),
(7, '2019_04_18_175832_create_product_table', 6),
(8, '2019_05_03_212525_create_customer_table', 7),
(9, '2019_05_04_155846_create_shipping_table', 8),
(10, '2019_06_18_064324_create_slider_table', 9),
(11, '2019_06_22_195446_create_payment_table', 10),
(12, '2019_06_22_195623_create_order_table', 10),
(13, '2019_06_22_195743_create_order_details_table', 10),
(14, '2019_06_27_175506_create_social_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 5, 16, 1, '1,024,689.60', 'pending', '2019-06-23 16:36:23', NULL),
(2, 5, 16, 2, '1,024,689.60', 'pending', '2019-06-23 16:38:43', NULL),
(3, 5, 16, 3, '1,024,689.60', 'pending', '2019-06-23 17:41:08', NULL),
(4, 5, 16, 4, '1,024,689.60', 'pending', '2019-06-23 17:41:16', NULL),
(5, 5, 17, 5, '1,537,034.40', 'pending', '2019-06-23 17:58:17', NULL),
(6, 5, 17, 6, '0.00', 'pending', '2019-06-23 17:59:00', NULL),
(7, 5, 17, 7, '0.00', 'pending', '2019-06-23 17:59:29', NULL),
(8, 5, 17, 8, '0.00', 'pending', '2019-06-23 18:01:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 11, 'Freze', '465768', '2', NULL, NULL),
(2, 4, 11, 'Freze', '465768', '2', NULL, NULL),
(3, 5, 11, 'Freze', '465768', '3', NULL, NULL);

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'bkash', 'pending', '2019-06-23 16:36:23', NULL),
(2, 'handcash', 'pending', '2019-06-23 16:38:43', NULL),
(3, 'handcash', 'pending', '2019-06-23 17:41:08', NULL),
(4, 'bkash', 'pending', '2019-06-23 17:41:16', NULL),
(5, 'handcash', 'pending', '2019-06-23 17:58:17', NULL),
(6, 'handcash', 'pending', '2019-06-23 17:59:00', NULL),
(7, 'handcash', 'pending', '2019-06-23 17:59:29', NULL),
(8, 'handcash', 'pending', '2019-06-23 18:01:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` float(10,2) NOT NULL,
  `product_quantity` float(10,2) NOT NULL,
  `category_id` int(20) DEFAULT NULL,
  `manufacturer_id` int(50) DEFAULT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `re_order_status` tinyint(4) NOT NULL DEFAULT '0',
  `hit_counter` tinyint(4) NOT NULL DEFAULT '0',
  `publication_status` tinyint(4) NOT NULL,
  `product_featuerd` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_model`, `product_price`, `product_quantity`, `category_id`, `manufacturer_id`, `product_description`, `product_stock`, `product_image`, `re_order_status`, `hit_counter`, `publication_status`, `product_featuerd`, `created_at`, `updated_at`) VALUES
(11, 'Freze', 465768.00, 2.00, 13, 10, '<p>ghkhljlkl</p>', 20, 'public/product_image/191453pic3.png', 0, 0, 1, 0, NULL, NULL),
(13, 'Canon', 54667.00, 2.00, 13, 11, '<p>camera camera camera</p>', 5, 'public/product_image/2016513.jpg', 0, 0, 1, 0, NULL, NULL),
(14, 'Pc', 45678.00, 3.00, 11, 7, '<p>Computer is very important</p>', 10, 'public/product_image/201944pic3.jpg', 0, 0, 1, 0, NULL, NULL),
(16, 'Cleaner', 344567.00, 2.00, 13, 10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 2, 'public/product_image/075849feature-pic1.png', 0, 0, 1, 1, NULL, NULL),
(17, 'Audio Player', 45678.00, 2.00, 13, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 2, 'public/product_image/075942feature-pic2.jpg', 0, 0, 1, 1, NULL, NULL),
(18, 'Fan', 45679.00, 6.00, 13, 10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 2, 'public/product_image/080030feature-pic3.jpg', 0, 0, 1, 1, NULL, NULL),
(19, 'Jucer', 77785.00, 1.00, 13, 10, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 2, 'public/product_image/080145feature-pic4.png', 0, 0, 1, 1, NULL, NULL),
(20, 'Iphone', 56789.00, 1.00, 10, 5, '<p>Iphone is very smart phone</p>', 2, 'public/product_image/161035pic4.png', 0, 0, 1, 0, NULL, NULL),
(21, 'Desktop', 34456.00, 3.00, 11, 8, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>', 33, 'public/product_image/064358new-pic1.jpg', 0, 0, 1, 0, NULL, NULL),
(22, 'Microsoft', 56478.00, 3.00, 13, 11, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>', 2, 'public/product_image/064655new-pic2.jpg', 0, 0, 1, 0, NULL, NULL),
(23, 'Speaker', 3456.00, 3.00, 13, 10, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>', 2, 'public/product_image/065714feature-pic2.jpg', 0, 0, 1, 0, NULL, NULL),
(24, 'Filter', 7654.00, 3.00, 13, 10, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>', 4, 'public/product_image/065335new-pic3.jpg', 0, 0, 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `shipping_name`, `email_address`, `password`, `phone`, `address`, `city`, `country`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'afroza', 'afroza@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01786942732', 'Dhaka', 'Tangail', 'Bangladesh', '12345', NULL, NULL),
(2, 'afroza', 'afroza@gmail.com', '25f9e794323b453885f5181f1b624d0b', '01786942732', 'Dhaka', 'Tangail', 'Bangladesh', '12345', NULL, NULL),
(16, 'Name', 'afroza@gmail.com', 'f6c79f4af478638c39b206ec30ab166b', '01786942732', 'tangail', 'Dhaka', 'Bangladesh', '234', NULL, NULL),
(17, 'asdf', 'afroz@gmail.com', 'dc647eb65e6711e155375218212b3964', '01786942732', 'tangail', 'Dhaka', 'Bangladesh', '234', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(10) UNSIGNED NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'public/slider_image/0732131.jpg', 1, NULL, NULL),
(2, 'public/slider_image/0733372.jpg', 1, NULL, NULL),
(3, 'public/slider_image/0733493.jpg', 1, NULL, NULL),
(4, 'public/slider_image/0734024.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twiter` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instragram` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `twiter`, `google`, `instragram`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.google.com', 'https://www.instagram.com', NULL, NULL);

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
(1, 'afroza', 'afroza@gmail.com', NULL, '$2y$10$OqVztSNHMrfb1Q2vz5i.KOg36OpQF4/JJYDuN3FcAyL3KNJJ0Btgm', NULL, '2019-04-04 11:49:54', '2019-04-04 11:49:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `manufacturer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
