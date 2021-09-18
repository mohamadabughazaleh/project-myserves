-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 11:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `khidma`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(11) NOT NULL,
  `title_cat` varchar(255) NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'F'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `title_cat`, `type`) VALUES
(2, 'صيانة مركبات ', 'S'),
(6, 'صرف صحي', 'S'),
(7, 'كهرباء', 'S'),
(8, 'فلاتر مياه ', 'S'),
(9, 'أثاث', 'S'),
(10, 'الأعمال', 'F'),
(11, 'برمجة و تطوير ', 'F'),
(12, 'دورات عن بعد ', 'F'),
(13, 'تصميم ', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `category_id`, `user_id`, `img`) VALUES
(1, 'roll games', 'how to play games', 3, 6, ''),
(2, 'roll games', 'learning the game', 4, 2, ''),
(7, 'كهربائي سيارات ', 'عمل صيانه كامله ', 3, 1, ''),
(17, 'Test1', 'sgagasaagsagd', 11, 1, '60779_image.png'),
(18, 'صرف مجاري ', 'شسلشسلشسشس', 6, 1, '48373_pexels-fauxels-3184418 (1) (2).jpg'),
(22, 'كهرباء فاييبر ', 'تمديد انترنت', 8, 1, '43134_aa771843-0bf0-4339-95b2-ad6048f08aa4.jpg'),
(23, 'كهربائي منازل', 'تمديد منازل كهرباء', 8, 1, '53624_16830029-b61a-4c3b-bf44-feca49fb4211.jpg'),
(24, 'كهربائي اناره ', 'تمديد منازل', 8, 1, '10769_1153bb44-5a4f-4c0d-ae5b-8d4d060fe97c.jpg'),
(25, 'استخراج البيانات من صفحة ويب ', 'ادخال بيانات بشكل جيد ', 23, 1, '66542_pexels-christina-morillo-1181673.jpg'),
(26, 'عمال بناء', 'خدمه مميزه', 8, 1, '67715_download.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `Name`, `parent_id`) VALUES
(3, 'ميكانيكي عام ', 2),
(4, 'كهربائي مركبات ', 2),
(6, 'قطع صرف صحي', 6),
(7, 'تركيب مضخات مياه ', 6),
(8, 'كهربائي مشاريع ', 7),
(9, 'تركيب تمديدات طاقه شمسيه ', 6),
(10, 'تركيب فلاترمياه ', 8),
(11, 'صيانة فلاتر ', 8),
(16, 'تركيب محطاة فلاتر', 8),
(17, 'غرف نوم', 9),
(18, 'ابواب خشب', 9),
(19, 'ثلاجات ', 9),
(20, 'فرن منزلي', 9),
(21, 'مهندس كهرباء', 7),
(22, 'اختصاصي كهربائي منازل', 7),
(23, 'ادخال بيانات ', 10),
(24, 'تجاره الكترونيه ', 10),
(25, 'خدمات ماليه ', 10),
(26, 'ادخال بيانات ', 11),
(27, 'السيرفرات', 11),
(28, 'برمجة واجهات اماميه Front-End', 11),
(29, 'برمجة Java \r\n', 11),
(30, 'برمجة Php ', 11),
(31, 'تعلم البرمجه ', 12),
(32, 'تعلم الستويق الإلكتروني', 12),
(33, 'تلعم اللغات ', 12),
(34, 'تصميم واجهات اعلاميه ', 13),
(35, 'تصميم معماري', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Group_ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `Num_Phone` int(11) NOT NULL,
  `Response` datetime NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Group_ID`, `name`, `password`, `Email`, `Num_Phone`, `Response`, `Location`) VALUES
(1, 1, 'khaled', 'ff4ddf20548f8007bfc0f195e4be53eb52c0a8b4', 'khaled@mail.com', 781392568, '2021-08-04 04:20:03', 'Jordan'),
(2, 0, 'ayham', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0, '2021-08-19 00:00:00', ''),
(6, 0, 'hamza', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 0, '2021-08-19 00:00:00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `sub_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `main_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
