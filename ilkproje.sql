-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Hazırlanma Vaxtı: 24 Yan, 2023 saat 23:55
-- Server versiyası: 10.4.27-MariaDB
-- PHP Versiyası: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Verilənlər Bazası: `ilkproje`
--

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(11) NOT NULL,
  `ayar_title` varchar(50) NOT NULL,
  `ayar_tel` varchar(50) NOT NULL,
  `ayar_maps` varchar(250) NOT NULL,
  `ayar_mail` varchar(100) NOT NULL,
  `ayar_facebook` varchar(100) NOT NULL,
  `ayar_instagram` varchar(100) NOT NULL,
  `ayar_twitter` varchar(100) NOT NULL,
  `ayar_linkedin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Sxemi çıxarılan cedvel `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_title`, `ayar_tel`, `ayar_maps`, `ayar_mail`, `ayar_facebook`, `ayar_instagram`, `ayar_twitter`, `ayar_linkedin`) VALUES
(1, 'Ali ve Reza', '+989331979951', 'https://www.google.com/maps?q=34.5744929,50.8097137&z=17&hl=tr', 'jafarnuri1994@gmail.com', 'https://www.facebook.com', 'https://www.instagram.com/jafar_nuriyev/', 'https://www.twitter.com', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `haqqimizda`
--

CREATE TABLE `haqqimizda` (
  `haqqimizda_id` int(11) NOT NULL,
  `haqqimizda_muvzu` text NOT NULL,
  `haqqimizda_logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Sxemi çıxarılan cedvel `haqqimizda`
--

INSERT INTO `haqqimizda` (`haqqimizda_id`, `haqqimizda_muvzu`, `haqqimizda_logo`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderitLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit', 'dimg/haqqimizda/27740308142966521325indir.jpg');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_ad` varchar(50) NOT NULL,
  `kullanici_soyad` varchar(50) NOT NULL,
  `kullanici_mail` varchar(50) NOT NULL,
  `kullanici_zaman` datetime NOT NULL DEFAULT current_timestamp(),
  `kullanici_resim` varchar(250) NOT NULL,
  `kullanici_password` varchar(100) NOT NULL,
  `kullanici_yetki` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Sxemi çıxarılan cedvel `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_ad`, `kullanici_soyad`, `kullanici_mail`, `kullanici_zaman`, `kullanici_resim`, `kullanici_password`, `kullanici_yetki`) VALUES
(1, 'jafar', 'Nuri', 'jafarnuri1994@gmail.com', '2023-01-17 19:30:21', '', '25f9e794323b453885f5181f1b624d0b', '5');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `mektub`
--

CREATE TABLE `mektub` (
  `mektub_id` int(11) NOT NULL,
  `mektub_ad` varchar(50) NOT NULL,
  `mektub_email` varchar(50) NOT NULL,
  `mektub_movzu` varchar(500) NOT NULL,
  `mektub_mesaj` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `partnyorlar`
--

CREATE TABLE `partnyorlar` (
  `part_id` int(11) NOT NULL,
  `part_file` varchar(500) NOT NULL,
  `part_title` varchar(50) NOT NULL,
  `part_link` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `post_sekil` varchar(100) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_metin` varchar(500) NOT NULL,
  `post_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Sxemi çıxarılan cedvel `post`
--

INSERT INTO `post` (`post_id`, `post_sekil`, `post_title`, `post_metin`, `post_status`) VALUES
(5, 'dimg/post/21448292333164430963indir.jpg', 'sdf', 'sdf', 'asdf');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `sual`
--

CREATE TABLE `sual` (
  `sual_id` int(11) NOT NULL,
  `sual_sual` varchar(500) NOT NULL,
  `sual_cavab` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Sxemi çıxarılan cedvel `sual`
--

INSERT INTO `sual` (`sual_id`, `sual_sual`, `sual_cavab`) VALUES
(15, 'ali', 'rza'),
(19, '45er6ytui', '456y7ui'),
(21, '45657', '67i'),
(22, 'yaqub', 'cafer');

-- --------------------------------------------------------

--
-- Cədvəl üçün cədvəl strukturu `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorum_foto` varchar(500) NOT NULL,
  `yorum_name` varchar(250) NOT NULL,
  `yorum_comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Sxemi çıxarılan cedvel `yorum`
--

INSERT INTO `yorum` (`yorum_id`, `yorum_foto`, `yorum_name`, `yorum_comment`) VALUES
(2, 'dimg/yorumlar/24872314352534527410indir.jpg', 'ertfhj', 'ertfyhgj');

--
-- Indexes for dumped tables
--

--
-- Cədvəl üçün indekslər `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Cədvəl üçün indekslər `haqqimizda`
--
ALTER TABLE `haqqimizda`
  ADD PRIMARY KEY (`haqqimizda_id`);

--
-- Cədvəl üçün indekslər `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Cədvəl üçün indekslər `mektub`
--
ALTER TABLE `mektub`
  ADD PRIMARY KEY (`mektub_id`);

--
-- Cədvəl üçün indekslər `partnyorlar`
--
ALTER TABLE `partnyorlar`
  ADD PRIMARY KEY (`part_id`);

--
-- Cədvəl üçün indekslər `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Cədvəl üçün indekslər `sual`
--
ALTER TABLE `sual`
  ADD PRIMARY KEY (`sual_id`);

--
-- Cədvəl üçün indekslər `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- Cədvəl üçün AUTO_INCREMENT `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `haqqimizda`
--
ALTER TABLE `haqqimizda`
  MODIFY `haqqimizda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Cədvəl üçün AUTO_INCREMENT `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Cədvəl üçün AUTO_INCREMENT `mektub`
--
ALTER TABLE `mektub`
  MODIFY `mektub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Cədvəl üçün AUTO_INCREMENT `partnyorlar`
--
ALTER TABLE `partnyorlar`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Cədvəl üçün AUTO_INCREMENT `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Cədvəl üçün AUTO_INCREMENT `sual`
--
ALTER TABLE `sual`
  MODIFY `sual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Cədvəl üçün AUTO_INCREMENT `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
