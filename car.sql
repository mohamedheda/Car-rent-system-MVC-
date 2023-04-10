-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 أبريل 2023 الساعة 00:39
-- إصدار الخادم: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- بنية الجدول `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL,
  `discription` text NOT NULL,
  `img` text NOT NULL,
  `profit` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `car`
--

INSERT INTO `car` (`id`, `name`, `cost`, `discription`, `img`, `profit`, `status`) VALUES
(17, 'one', 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th?id=OIP.A3mZK-HH_Eo5xlDelp1HagHaEK&w=180&h=120&c=2&rs=1&qlt=80&o=6&cdv=1&dpr=1.8&pid=16.1', 0, 0),
(18, 'two', 50, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th?id=OIP.DbB2a6IKr3IYoG3XIRyfJAHaEK&w=180&h=120&c=2&rs=1&qlt=80&o=6&cdv=1&dpr=1.8&pid=16.1', 0, 0),
(19, 'three', 40, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th?id=OIP.vWDm-jQBzUwr-pKkD3jf1QHaEK&w=180&h=120&c=2&rs=1&qlt=80&o=6&cdv=1&dpr=1.8&pid=16.1', 0, 0),
(20, 'four', 25, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th?id=OIP.p_DkCmfHJYw1JaBhr-7JjgHaE6&w=180&h=120&c=2&rs=1&qlt=80&o=6&cdv=1&dpr=1.8&pid=16.1', 0, 0),
(21, 'BMW', 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th/id/R.9ad327d0f813ea4dd36e57b647052c97?rik=qriG17O1J%2fwYAg&pid=ImgRaw&r=0', 0, 0),
(22, 'five', 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://i.pinimg.com/600x315/c7/5a/38/c75a38432a07c988d44ed84ce37b81b0.jpg', 0, 0),
(23, 'six', 80, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th/id/OIP.b3hlrdhm9B_SJGTDd2fzzAHaDl?pid=ImgDet&rs=1', 0, 0),
(24, 'seven', 90, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th/id/OIP.l99kzux9eBVduRxl4jXlTwHaEK?w=274&h=180&c=7&r=0&o=5&dpr=1.8&pid=1.7', 0, 0),
(25, 'eight', 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt, ducimus alias beatae nesciunt sed sit numquam ipsum tempore maxime aspernatur, iste, pariatur reiciendis corrupti! Optio labore voluptas delectus beatae doloremque.', 'https://th.bing.com/th/id/R.0b83a686a46297cfef6642c08a0e37a0?rik=F9aw3lcXlEA5wg&pid=ImgRaw&r=0', 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `idendity`
--

CREATE TABLE `idendity` (
  `id` int(11) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `front` varchar(100) DEFAULT NULL,
  `back` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `idendity`
--

INSERT INTO `idendity` (`id`, `type`, `front`, `back`) VALUES
(3, 'id', '63ff6c2f827f2.jpg', '63ff6c2f827f4.jpg'),
(4, 'id', '63ff6c749b3e4.jpg', '63ff6c749b3e6.jpg'),
(5, 'id', '63ff6d890b82b.jpg', '63ff6d890b82e.jpg'),
(6, 'id', '63ff6d8c39e15.jpg', '63ff6d8c39e18.jpg'),
(7, 'id', '63ff6da8a941c.jpg', '63ff6da8a941d.jpg'),
(8, 'id', '63ff6dcddd5a0.jpg', '63ff6dcddd5a2.jpg'),
(9, 'id', '63ff6dde776e6.jpg', '63ff6dde776e8.jpg'),
(10, 'id', '63ff6e5d84b21.jpg', '63ff6e5d84b25.jpg'),
(11, 'id', '63ff6ef55e96f.jpg', '63ff6ef55e971.jpg'),
(12, 'id', '63ff6f01ea218.jpg', '63ff6f01ea219.jpg'),
(13, 'id', '63ff6f7b52c98.jpg', '63ff6f7b52c9b.jpg'),
(14, 'id', '63ff6fa550ca2.jpg', '63ff6fa550ca4.jpg'),
(15, 'id', '63ff6fb54c4b1.jpg', '63ff6fb54c4b3.jpg'),
(16, 'id', '63ff6fc05dc70.jpg', '63ff6fc05dc72.jpg'),
(17, 'id', '63ff6fc32dadf.jpg', '63ff6fc32dae5.jpg'),
(18, 'id', '63ff6fd2b1e1f.jpg', '63ff6fd2b1e21.jpg'),
(19, 'id', '63ff6fef6f4ff.jpg', '63ff6fef6f500.jpg'),
(20, 'id', '63ff701591243.jpg', '63ff701591244.jpg'),
(21, 'id', '63ff702418851.jpg', '63ff702418853.jpg'),
(22, 'id', '63ff70310a5b1.jpg', '63ff70310a5b3.jpg'),
(23, 'id', '63ff742c0d3d4.jpg', '63ff742c0d3d7.jpg'),
(24, 'id', '6400152254362.png', '6400152254363.png'),
(25, 'id', '640015e50935b.png', '640015e50935d.png'),
(26, 'id', '640015ea10912.png', '640015ea10913.png'),
(27, 'driving-license', '6400160d0b857.png', '6400160d0b858.png'),
(28, 'id', '6401ee953781b.png', '6401ee953781d.png'),
(29, 'id', '6402107fc6ee1.png', '6402107fc6ee2.png'),
(30, 'id', '640218c98c003.png', '640218c98c005.png'),
(31, 'driving-license', '640227b35c205.png', '640227b35c207.png'),
(32, 'driving-license', '64022937b2e74.png', '64022937b2e76.png');

-- --------------------------------------------------------

--
-- بنية الجدول `rate`
--

CREATE TABLE `rate` (
  `rate_id` int(11) NOT NULL,
  `availability` text NOT NULL,
  `credibility` text NOT NULL,
  `attitude` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `rate`
--

INSERT INTO `rate` (`rate_id`, `availability`, `credibility`, `attitude`) VALUES
(1, 'gsghhg', 'bgdgb', 'gdgfnfhn'),
(2, 'gsfghghsg', 'hgsdhhfgh', 'hgfshfsg'),
(3, 'hdgjhj', 'jdgjh', 'jhdjgk'),
(4, 'vsdv', 'bgdgb', 'bkhbhjb');

-- --------------------------------------------------------

--
-- بنية الجدول `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `hours` int(11) NOT NULL,
  `identity` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `status` int(11) DEFAULT 0,
  `requested_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `rent`
--

INSERT INTO `rent` (`id`, `car_id`, `user_id`, `hours`, `identity`, `payment`, `status`, `requested_at`) VALUES
(94, 21, 5, 5, 'driving-license', 'subscription', 0, '2023-03-03 19:07:07'),
(95, 19, 3, 4, 'passport', 'subscription', 0, '2023-03-07 13:49:10');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'mohamed', 'heda@gmail.com', '12345'),
(3, 'ali', 'ali@gmail.com', '12345'),
(4, 'hend', 'hend@gamil.com', '1234'),
(5, 'habeba', 'habeba@gmail.com', '12345'),
(6, 'mahmoud', 'mahmoud@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `idendity`
--
ALTER TABLE `idendity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `car_id` (`car_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `idendity`
--
ALTER TABLE `idendity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- قيود الجداول المحفوظة
--

--
-- القيود للجدول `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
