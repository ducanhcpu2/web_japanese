-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2019 at 04:23 PM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_japanese`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_try_exam`
--

CREATE TABLE `detail_try_exam` (
  `id_detail` int(11) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `times` int(11) DEFAULT NULL,
  `date_create` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id_exam` int(11) NOT NULL,
  `topic` text COLLATE utf8_unicode_ci,
  `status` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `level` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id_exam`, `topic`, `status`, `level`) VALUES
(1, 'bài kiểm tra 1', 'not yet', 'n5'),
(2, 'bài kiểm tra số 2', 'not yet', 'N5'),
(3, 'bài kiểm tra số 3', 'not yet', 'N5'),
(4, 'bài kiểm tra số 4', 'not yet', 'N5'),
(5, 'bài kiểm tra số 5', 'not yet', 'N5'),
(6, 'bài kiểm tra số 6', 'not yet', 'N4'),
(7, 'bài kiểm tra số 7', 'not yet', 'N3');

-- --------------------------------------------------------

--
-- Table structure for table `grammar`
--

CREATE TABLE `grammar` (
  `id_gra` int(11) NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_lesson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grammar`
--

INSERT INTO `grammar` (`id_gra`, `content`, `id_lesson`) VALUES
(1, 'A は B です ', 1),
(2, '~ はNです か。Nじゃありません か。', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id_lesson` int(11) NOT NULL,
  `lesson_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lesson`
--

INSERT INTO `lesson` (`id_lesson`, `lesson_name`, `created_at`, `updated_at`) VALUES
(1, 'bài 1', '2019-04-03', NULL),
(2, 'bài học số  2', NULL, NULL),
(3, 'bài học số  3', NULL, NULL),
(4, 'bài học số  4', NULL, NULL),
(5, 'bài học số  5', NULL, NULL),
(6, 'bài học số  6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id_task` int(11) NOT NULL,
  `content` text CHARACTER SET sjis NOT NULL,
  `solution` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sub_task_a` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_task_b` text COLLATE utf8_unicode_ci,
  `sub_task_c` text COLLATE utf8_unicode_ci,
  `sub_task_d` text COLLATE utf8_unicode_ci,
  `key_text` text COLLATE utf8_unicode_ci,
  `master_picture` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_1` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_2` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_3` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_4` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sound` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_exam` int(11) DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id_task`, `content`, `solution`, `sub_task_a`, `sub_task_b`, `sub_task_c`, `sub_task_d`, `key_text`, `master_picture`, `picture_1`, `picture_2`, `picture_3`, `picture_4`, `sound`, `id_exam`, `description`) VALUES
(1, 'あの　__は　わかいです', 'b', 'せんせえ', 'せんせい', 'せんせん', 'せんせ', '先生', '', '', '', '', '', '', 1, ''),
(2, 'あした　えいがかんは　__です。', 'c', 'やつみ', 'やづみ', 'やすみ', 'やずみ', '休み', '', '', '', '', '', '', 1, ''),
(3, 'このセーターは___えんでした。', 'c', 'にっせんきゅうひゃく', 'にっせんくうひゃく', 'にせんきゅうびゃく', 'にせんきゅうひゃく', '二千九百', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(4, 'すみません,___を　わすれました。', 'a', 'おかね', 'おかぬ', 'おがね', 'おがぬ', 'お金', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(5, '___こうえんを　さんぽします。', 'b', 'まえにち', 'まいにち', 'めえにち', 'めいにち', '毎日', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(6, '___がわに　としょかんが　あります。', 'a', 'みぎ', 'みき', 'ひたり', 'ひだり', '右', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(7, 'この　しごとは___が　かかります。', 'd', 'しがん', 'じっかん', 'じがん', 'じかん', '時間', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(8, 'はしの　うえで___が　とまりました。', 'a', 'でんしゃ', 'てんしゃ', 'てんじゃ', 'でんじゃ', '電車', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(9, 'この　なかで　いちばん___のは　どれですか。', 'c', 'たかい', 'はやい', 'やすい', 'ちいさい', '安い', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(10, 'あねに　こどもが　___', 'b', 'おまれました', 'うまれました', 'ゆまれました', 'いまれました', '生まれました', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(11, 'ことしの　なつは___へ　いきます。', 'd', 'ヨ', '出', '川', '山', 'やま', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(12, 'ほっかいどうは　にほんの___に　あります。', 'c', '南', '西', '北', '東', 'きた', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(13, 'この　テーブルは___でした。', 'b', '五方円', '五万円', '五万内', '五方内', 'ごまんえん', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL),
(14, 'へやに ___は　ありますか。', 'd', 'ツェワー', 'ツェワー', 'ツャワー', 'シャワー', 'しゃわー', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `try_exams`
--

CREATE TABLE `try_exams` (
  `id_try` int(11) NOT NULL,
  `try_times` int(11) DEFAULT NULL,
  `id_detail` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci,
  `id_exam` int(11) DEFAULT NULL,
  `id_try` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `id_exam`, `id_try`, `created_at`, `updated_at`, `name`) VALUES
(1, 'ducanh@gmail.com', '$2y$10$3kcILMFagZlmNEWe9jjOauiiWJZw/bjAxt7DdmDOdhpdFjkpsAgky', 1, NULL, '2019-03-29', '2019-03-29', 'nguyễn Đức Anh'),
(8, 'huyen1@gmail.com', '$2y$10$W0bX0SFYlctuw8yNfhtKFeqqInjw1WAXLaQVHtf/fQsbUwlFlXbkO', NULL, NULL, NULL, NULL, 'nguyenvanhuyen'),
(9, 'vanan123@gmail.com', '$2y$10$tGAsheVHU/J1CTkrxiKQ6.mEmFlt05PK3iPQoQzFE362hZIzPSJk.', NULL, NULL, NULL, NULL, 'nguyen van an'),
(10, 'minhduc@gmail.com', '$2y$10$SmxjZwwtxHdxWlrXRFliEuAZHJF9JXoZY0/Zjpx8VcYyF7d6bsMn.', NULL, NULL, NULL, NULL, 'minh duc'),
(11, 'long123@gmail.com', '$2y$10$LfxNo.sZHh99JINji9zhvO8xgQPphXDuiOE3DW9GzZPTqNYeoHwYq', NULL, NULL, NULL, NULL, 'long hack'),
(12, 'tuyen123@gmail.com', '$2y$10$fXkeY.M9pLUlZU8I8gCnLOF4qoziRlWm4fL7rlT17fHl8xlR5IJp2', NULL, NULL, NULL, NULL, 'văn tuyền'),
(13, 'lap123@gmail.com', '$2y$10$b8iCTBaEhgAev.6o1bC8MeeQHRaY9WwWfFlCAC2v4K1MBaxIM89O.', NULL, NULL, NULL, NULL, 'van lap'),
(14, 'tu123@gmail.com', '$2y$10$J7/hJmPuWJKUYoCGKgkKbut6JpyVL9y6FcItA.tm010Q4KOcb.HrW', NULL, NULL, NULL, NULL, 'van tu'),
(15, 'bot1@gmail.com', '$2y$10$6MhwccF9MUXLtwu1bWwbwOWMJfduMtBgGbSJ3x9xHmzfw6PyA1Xg.', NULL, NULL, NULL, NULL, 'ajdakjd'),
(16, 'tom123@gmail.com', '$2y$10$8H2E8PtXq5I7/T8Qy5kAJetStJ5rK9RS.WxaSzhCTsuDvI/Wl/TJu', NULL, NULL, NULL, NULL, 'tom');

-- --------------------------------------------------------

--
-- Table structure for table `vocabularry`
--

CREATE TABLE `vocabularry` (
  `id_voca` int(11) NOT NULL,
  `content` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mean` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sound` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `kanji` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_lesson` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vocabularry`
--

INSERT INTO `vocabularry` (`id_voca`, `content`, `mean`, `sound`, `created_at`, `updated_at`, `kanji`, `id_lesson`) VALUES
(1, 'わたし', 'tôi', '', '2019-01-01', NULL, '私', 1),
(2, 'あのひと', 'người kia, người đó', '', '2019-01-01', NULL, 'あの人', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_try_exam`
--
ALTER TABLE `detail_try_exam`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id_exam`);

--
-- Indexes for table `grammar`
--
ALTER TABLE `grammar`
  ADD PRIMARY KEY (`id_gra`),
  ADD KEY `id_lesson` (`id_lesson`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id_lesson`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id_task`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indexes for table `try_exams`
--
ALTER TABLE `try_exams`
  ADD PRIMARY KEY (`id_try`),
  ADD KEY `id_detail` (`id_detail`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_try` (`id_try`),
  ADD KEY `id_exam` (`id_exam`);

--
-- Indexes for table `vocabularry`
--
ALTER TABLE `vocabularry`
  ADD PRIMARY KEY (`id_voca`),
  ADD KEY `id_lesson` (`id_lesson`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_try_exam`
--
ALTER TABLE `detail_try_exam`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id_exam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `grammar`
--
ALTER TABLE `grammar`
  MODIFY `id_gra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id_lesson` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id_task` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `try_exams`
--
ALTER TABLE `try_exams`
  MODIFY `id_try` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `vocabularry`
--
ALTER TABLE `vocabularry`
  MODIFY `id_voca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `grammar`
--
ALTER TABLE `grammar`
  ADD CONSTRAINT `grammar_ibfk_1` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`id_exam`) REFERENCES `exams` (`id_exam`);

--
-- Constraints for table `try_exams`
--
ALTER TABLE `try_exams`
  ADD CONSTRAINT `try_exams_ibfk_1` FOREIGN KEY (`id_detail`) REFERENCES `detail_try_exam` (`id_detail`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_try`) REFERENCES `try_exams` (`id_try`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`id_exam`) REFERENCES `exams` (`id_exam`);

--
-- Constraints for table `vocabularry`
--
ALTER TABLE `vocabularry`
  ADD CONSTRAINT `vocabularry_ibfk_1` FOREIGN KEY (`id_lesson`) REFERENCES `lesson` (`id_lesson`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
