-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2023 at 12:41 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_page`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `creted_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `creted_at`, `updated_at`) VALUES
(7, 'assets/uploads/banner/1669626931.jpg', '2022-11-28 09:15:31.334157', '2022-11-28 09:15:31.334157'),
(8, 'assets/uploads/banner/1669626938.jpg', '2022-11-28 09:15:38.620050', '2022-11-28 09:15:38.620050'),
(10, 'assets/uploads/banner/1669627002.jpg', '2022-11-28 09:16:42.225407', '2022-11-28 09:16:42.225407');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `title`, `description`, `type`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Redefines the luxury hospitality experience.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the when an unknown printer took a galley of type scrambled it to make a type specimen book.</p>\r\n', 'The-hotel', '', '2022-11-28 05:29:58', '2022-11-28 09:22:10'),
(2, 'ROOMS & SUITS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Rooms', '', '2022-11-28 05:29:58', '2022-11-28 07:42:32'),
(3, 'HOTEL FACILITIES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Facilities', '', '2022-11-28 05:31:27', '2022-11-28 07:52:03'),
(4, 'Luxury Services', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.\r\n\r\n01.Exclusive interior\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n02.Wellness & spa\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n03.Bar & restaurant\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n04.Parking & security\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Luxury-services', '', '2022-11-28 05:31:27', '2022-11-28 08:03:00'),
(5, 'HOTEL OFFERS', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Offers', '', '2022-11-28 05:32:25', '2022-11-28 08:06:52'),
(6, 'BOOK NOW!', 'Limited rooms available!\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum standard dummy text.', 'Book-now', '', '2022-11-28 05:32:25', '2022-11-28 09:08:03'),
(7, '', '', 'Gallery', '', '2022-11-28 09:19:21', '2022-11-28 09:19:21'),
(8, '', '', 'Features', '', '2022-11-28 09:45:33', '2022-11-28 09:45:33'),
(9, '', '', 'Testimonial', '', '2022-11-28 09:54:01', '2022-11-28 09:54:01'),
(10, '', '', 'Feature-2', '', '2022-11-28 10:06:49', '2022-11-28 10:06:49'),
(11, '', '', 'Contact us', '', '2022-11-28 10:12:51', '2022-11-28 10:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sub_heading` text NOT NULL,
  `sub_content` text NOT NULL,
  `button_title` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `map` varchar(255) DEFAULT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `content_id`, `image`, `sub_heading`, `sub_content`, `button_title`, `button_url`, `name`, `map`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/uploads/pricing/1669627053.png', '', '', 'Read more', 'https://www.google.com/', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:17:33.646781'),
(2, 2, 'assets/uploads/pricing/1669621755.jpg', 'CLASSIC DOUBLE ROOM', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 07:49:15.215984'),
(3, 2, 'assets/uploads/pricing/1669621778.jpg', 'ONE BEDROOM SUITE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 07:49:38.378115'),
(4, 2, 'assets/uploads/pricing/1669621801.jpg', 'EMPIRE STATE VIEW SUITE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 07:50:01.779797'),
(5, 3, 'assets/uploads/pricing/1669622377.jpg', 'swimming and gym.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 07:59:37.698231'),
(6, 3, 'assets/uploads/pricing/1669622423.jpg', 'sports and golf club.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 08:00:23.212363'),
(7, 3, 'assets/uploads/pricing/1669622484.jpg', 'pick up and luggage.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 08:01:24.971617'),
(8, 3, 'assets/uploads/pricing/1669622523.jpg', 'restaurant & banquet hall.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text.  Lorem Ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries, but also the leap into electronic typesetting.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 08:02:03.446818'),
(9, 4, 'assets/uploads/pricing/1669622712.jpg', '', '', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 08:05:12.957203'),
(10, 5, 'assets/uploads/pricing/1669626323.jpg', 'HONEYMOON PACKAGE', 'Lorem Ipsum is simply text dummy text of the printing and typesetting industry. an Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:05:23.402094'),
(11, 5, 'assets/uploads/pricing/1669626348.jpg', 'SURFING PACKAGE', 'Lorem Ipsum is simply text dummy text of the printing and typesetting industry. an Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:05:48.198156'),
(12, 5, 'assets/uploads/pricing/1669626373.jpg', 'COCKTAIL PACKAGE', 'Lorem Ipsum is simply text dummy text of the printing and typesetting industry. an Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:06:13.396849'),
(13, 5, 'assets/uploads/pricing/1669626421.jpg', 'THE LAMB PACKAGE', 'Lorem Ipsum is simply text dummy text of the printing and typesetting industry. an Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:07:01.519146'),
(14, 6, 'assets/uploads/pricing/1669626768.jpg', '', '', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:12:48.477386'),
(15, 7, 'assets/uploads/pricing/1669627716.jpg', '', '', '', '', '', NULL, '2022-11-28 09:28:36.312127', '2022-11-28 09:28:36.312127'),
(16, 7, 'assets/uploads/pricing/1669627727.jpg', '', '', '', '', '', NULL, '2022-11-28 09:28:47.566704', '2022-11-28 09:28:47.566704'),
(17, 7, 'assets/uploads/pricing/1669627736.jpg', '', '', '', '', '', NULL, '2022-11-28 09:28:56.202318', '2022-11-28 09:28:56.202318'),
(18, 7, 'assets/uploads/pricing/1669627744.jpg', '', '', '', '', '', NULL, '2022-11-28 09:29:04.657096', '2022-11-28 09:29:04.657096'),
(19, 7, 'assets/uploads/pricing/1669627752.jpg', '', '', '', '', '', NULL, '2022-11-28 09:29:12.445163', '2022-11-28 09:29:12.445163'),
(21, 8, 'assets/uploads/pricing/1669629105.png', 'GREAT ENVIRONMENT', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:51:45.276566'),
(22, 8, 'assets/uploads/pricing/1669629126.png', 'FREE BREAKFAST', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:52:06.853782'),
(23, 8, 'assets/uploads/pricing/1669629156.png', 'CLEAN EVERYDAY', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:52:36.760245'),
(24, 8, 'assets/uploads/pricing/1669629177.png', 'ENJOY NIGHTLIFE', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.', '', '', '', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 09:52:57.478246'),
(26, 9, 'assets/uploads/pricing/1669629884.jpg', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, printer.', '', '', 'SHOKO MUGIKURA, CANADA', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:04:44.256096'),
(27, 9, 'assets/uploads/pricing/1669629862.jpg', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, printer.', '', '', 'SHOKO MUGIKURA, CANADA', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:04:22.525889'),
(28, 9, 'assets/uploads/pricing/1669629845.jpg', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, printer.', '', '', 'PAUL SCRIVENS, INDIA', NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:04:05.252748'),
(29, 10, '', 'Discover the World', 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been industry\'s standard dummy text since.', '', '', NULL, NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:11:11.908169'),
(30, 10, '', 'Relax and Enjoy', 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been industry\'s standard dummy text since.', '', '', NULL, NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:11:24.062395'),
(31, 10, '', 'Luxury by the Sea', 'Lorem Ipsum is simply text of the printing and typesetting industry. Lorem Ipsum has been industry\'s standard dummy text since.', '', '', NULL, NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:11:38.446333'),
(32, 11, '', ' Contact Address', '301 The Greenhouse, Custard, Factory, London, E2 8DY.', '', '', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58779.43691380291!2d76.007526628469!3d22.96072800586436!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396317850c371de7:0x22947c209f24505!2sDewas, Madhya Pradesh!5e0!3m2!1sen!2sin!4v1669639832919!', '0000-00-00 00:00:00.000000', '2022-11-28 13:12:36.971514'),
(33, 11, '', 'Call Us Today!', '(M) +44 (0) 123 456 7890 (O) +44 (0) 123 456 7890', '', '', NULL, NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:16:11.392812'),
(34, 11, '', 'Email', 'no-reply@domain.com help@domain.com', '', '', NULL, NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:16:31.737250'),
(35, 11, '', 'Working Hours', 'Mon to Sat - 9 AM to 11 PM Sunday 10 AM to 6 PM', '', '', NULL, NULL, '0000-00-00 00:00:00.000000', '2022-11-28 10:16:46.269880');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_items`
--

CREATE TABLE `tbl_items` (
  `itemId` int(11) NOT NULL,
  `itemHeader` varchar(512) NOT NULL COMMENT 'Heading',
  `itemSub` varchar(1021) NOT NULL COMMENT 'sub heading',
  `itemDesc` text DEFAULT NULL COMMENT 'content or description',
  `itemImage` varchar(80) DEFAULT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedDtm` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_items`
--

INSERT INTO `tbl_items` (`itemId`, `itemHeader`, `itemSub`, `itemDesc`, `itemImage`, `isDeleted`, `createdBy`, `createdDtm`, `updatedDtm`, `updatedBy`) VALUES
(1, 'jquery.validation.js', 'Contribution towards jquery.validation.js', 'jquery.validation.js is the client side javascript validation library authored by Jörn Zaefferer hosted on github for us and we are trying to contribute to it. Working on localization now', 'validation.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL),
(2, 'CodeIgniter User Management', 'Demo for user management system', 'This the demo of User Management System (Admin Panel) using CodeIgniter PHP MVC Framework and AdminLTE bootstrap theme. You can download the code from the repository or forked it to contribute. Usage and installation instructions are provided in ReadMe.MD', 'cias.png', 0, 1, '2015-09-02 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reset_password`
--

CREATE TABLE `tbl_reset_password` (
  `id` bigint(20) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activation_id` varchar(32) NOT NULL,
  `agent` varchar(512) NOT NULL,
  `client_ip` varchar(32) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` bigint(20) NOT NULL DEFAULT 1,
  `createdDtm` datetime NOT NULL,
  `updatedBy` bigint(20) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `roleId` tinyint(4) NOT NULL COMMENT 'role id',
  `role` varchar(50) NOT NULL COMMENT 'role text'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`roleId`, `role`) VALUES
(1, 'System Administrator'),
(2, 'Manager'),
(3, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `userId` int(11) NOT NULL,
  `email` varchar(128) NOT NULL COMMENT 'login email',
  `password` varchar(128) NOT NULL COMMENT 'hashed login password',
  `name` varchar(128) DEFAULT NULL COMMENT 'full name of user',
  `mobile` varchar(20) DEFAULT NULL,
  `roleId` tinyint(4) NOT NULL,
  `isDeleted` tinyint(4) NOT NULL DEFAULT 0,
  `createdBy` int(11) NOT NULL,
  `createdDtm` datetime NOT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDtm` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`userId`, `email`, `password`, `name`, `mobile`, `roleId`, `isDeleted`, `createdBy`, `createdDtm`, `updatedBy`, `updatedDtm`) VALUES
(1, 'admin@gmail.com', '$2y$10$SAvFim22ptA9gHVORtIaru1dn9rhgerJlJCPxRNA02MjQaJnkxawq', 'System Administrator', '9890098900', 1, 0, 0, '2015-07-01 18:56:49', 1, '2017-06-19 09:22:53'),
(2, 'manager@bewithdhanu.in', '$2y$10$Gkl9ILEdGNoTIV9w/xpf3.mSKs0LB1jkvvPKK7K0PSYDsQY7GE9JK', 'Manager', '9890098900', 2, 0, 1, '2016-12-09 17:49:56', 1, '2017-06-19 09:22:29'),
(3, 'employee@bewithdhanu.in', '$2y$10$MB5NIu8i28XtMCnuExyFB.Ao1OXSteNpCiZSiaMSRPQx1F1WLRId2', 'Employee', '9890098900', 3, 0, 1, '2016-12-09 17:50:22', 1, '2017-06-19 09:23:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_items`
--
ALTER TABLE `tbl_items`
  ADD PRIMARY KEY (`itemId`);

--
-- Indexes for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_items`
--
ALTER TABLE `tbl_items`
  MODIFY `itemId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_reset_password`
--
ALTER TABLE `tbl_reset_password`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `roleId` tinyint(4) NOT NULL AUTO_INCREMENT COMMENT 'role id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
