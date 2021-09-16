-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: db
-- 生成日時: 2021 年 8 月 29 日 04:59
-- サーバのバージョン： 8.0.23
-- PHP のバージョン: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `quizy`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `question`
--

CREATE TABLE `question` (
  `id` int NOT NULL,
   `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `question`
--

INSERT INTO `question` (`id`, `name`) VALUES
(1, '東京の難読地名クイズ'),
(2, '広島県の難読地名クイズ');

-- --------------------------------------------------------


--
-- テーブルの構造 `choices`
--

CREATE TABLE `choices` (
  `id` int NOT NULL,
 `question_id` int NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
 `valid` int NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `choices`
--

INSERT INTO `choices` (`id`, `question_id`, `name`, `valid`) VALUES
(1, 1, 'たかなわ', 1),
(2, 1, 'たかわ', 0),
(3, 1, 'こうわ', 0),
(4, 2, 'むこうひら', 0),
(5, 2, 'むきひら', 0),
(6, 2, 'むかいなだ', 1);


-- --------------------------------------------------------

