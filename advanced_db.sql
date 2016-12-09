-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 09 2016 г., 16:24
-- Версия сервера: 5.6.29
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `advanced_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `shortext` text NOT NULL,
  `direction_text` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `text`, `shortext`, `direction_text`, `image`) VALUES
(1, 'Iryna Venediktova', 'Consultant coordinating and following up on the international commercial arbitration practice. Mrs Venediktova is Head of the Department for Civil Law Disciplines at V. N. Karazin Kharkiv National University, Doctor of Letters in Law, Full Professor, arbitrator at the International Commercial Arbitration Court and the Maritime Arbitration Commission at the Ukrainian Chamber of Commerce and Industry.\r\nShe is experienced in following up on the investment funds, preparing projects for legislative and sublegislative statutory acts, solving corporate conflicts, conducting legal audits and restructuring businesses. Took a course in International Commercial Arbitration at Chartered Institute of Arbitrators.\r\nJudge of the standing arbitration court at the Foundation of Medical Law and Bioethics of Ukraine All-Ukrainian Public Organization. Vice-President of the Association of Cosmetologists and Aromologists, Vice-President of the Foundation of Medical Law and Bioethics, holds membership on CIArb and UBA (Ukrainian Bar Association).\r\nAuthor of over 150 theoretical and practical research papers.\r\nLanguages – Ukrainian, English, Russian.', 'Consultant coordinating and following up on the international commercial arbitration practice. Mrs Venediktova is Head of the Department for Civil Law Disciplines at V. N. Karazin Kharkiv National University, Doctor of Letters in Law, Full Professor, arbitrator at the International Commercial Arbitration Court and the Maritime Arbitration Commission at the Ukrainian Chamber of Commerce and Industry. She is experienced in following up and providing legal support to the investment funds, preparing projects for legislative and sublegislative statutory acts, solving corporate conflicts, conducting legal audits and restructuring businesses.', 'Arbitrator at the International Commercial Arbitration Court and the Maritime Arbitration Commission at the Ukrainian Chamber of Commerce and Industry\r\nOver 150 theoretical and practical research papers\r\nDoctor of Letters in Law, Full Professor\r\nHead of the Department for Civil Law Disciplines at V. N. Karazin Kharkiv National University\r\nFollowing up on the investment funds\r\nPreparing projects for legislative and sublegislative statutory acts\r\nSolving corporate conflicts\r\nConducting legal audits and restructuring businesses', ''),
(2, 'test name pavlovna', 'RIBAAAAA test', 'RIBAAAAA test SHORT', 'RIBAAAAA test dir', '');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1481272665),
('m130524_201442_init', 1481272673);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'B33XTxW-yw7RU690I309F1-4fmiPPxEE', '$2y$13$RspdPboBbpH0732vBI8l0eWQGezmmzsJptKYIoEWiuBbjPKVihlxe', NULL, 'admin@mail.ru', 10, 1481273855, 1481273855);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
