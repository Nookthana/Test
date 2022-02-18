-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 12:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `militarystatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hight` int(11) NOT NULL,
  `weight` int(255) NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `telephone_number` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_home` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `nickname`, `email`, `status`, `militarystatus`, `gender`, `hight`, `weight`, `nationality`, `birthdate`, `telephone_number`, `telephone_home`, `house_village`, `sub_district`, `district`, `province`, `zipcode`, `created_at`, `pic`, `updated_at`) VALUES
(54, 'Noook', 'ABZZAAAA', 'มิ่ง', '54531@gmail.com', 'สมรส', 'ผ่านการเกณฑ์ทหาร', 'ชาย', 45, 4, '54', '2022-02-12', '456456456', '45645', '5\r\n45\r\n4', 'หนองกระทุ่ม', 'ค่ายบางระจัน', 'สิงห์บุรี', 16150, '2022-02-17 15:16:11', 'images.png', '2022-02-18 10:34:10'),
(55, 'asdasd', 'asdsad', 'จีจี', '123@gmail.com', 'สมรส', 'ผ่านการเกณฑ์ทหาร', 'ชาย', 45, 4, 'ไทย', '2022-02-04', '05555', '6595465', '155/9', 'บางสมบูรณ์', 'องครักษ์', 'นครนายก', 26120, '2022-02-17 15:16:57', 'ดาวน์โหลด (2).jfif', '2022-02-17 19:46:53'),
(58, 'asd', 'asd', 'asd', 'GGWP@gmail.com', 'สมรส', 'ได้รับการยกเว้น', 'ชาย', 564, 56, '56+5', '2022-02-25', '54354654', '457875', '65+56', 'ท่าตะเกียบ', 'ท่าตะเกียบ', 'ฉะเชิงเทรา', 24160, '2022-02-17 20:25:29', 'ดาวน์โหลด.png', '2022-02-17 20:25:29'),
(60, 'นางสาว', 'เทส', 'กหกห', 'ggwp@gmail.com', 'โสด', '-', 'หญิง', 45, 45, 'ไทย', '2022-02-10', '48545', 'กหดกหด', '4545', 'หกด', 'หกด', 'กหเดหก', 454, '2022-02-18 09:45:17', 'ดาวน์โหลด (4).jfif', '2022-02-18 09:45:17'),
(61, 'asdsaAA', 'asdasf', 'asfasf', 'dssgd@gmail.vom', 'โสด', '-', 'หญิง', 45, 45, 'sds', '2022-02-16', '54', '5', 'sdf', 'sdf', 'sddf', 'sdf', 454, '2022-02-18 09:55:44', 'images (1).png', '2022-02-18 10:45:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
