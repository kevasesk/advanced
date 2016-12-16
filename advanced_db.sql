-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 16 2016 г., 16:38
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
-- Структура таблицы `directiories`
--

CREATE TABLE IF NOT EXISTS `directiories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text,
  `id_employee` int(11) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `directiories`
--

INSERT INTO `directiories` (`id`, `title`, `content`, `id_employee`, `icon`) VALUES
(7, 'some', '<p>sdfsdfs</p>', 1, 'http://advanced.front/uploads/directiories/58526e581293c.png'),
(8, 'another', '<p>arohnvieudhvlsd dfg sd f gsd fgsdfgdf g df gsd f</p>', 1, 'http://advanced.front/uploads/directiories/58526e5fa00a5.png'),
(9, 'ыщьу1', '<p>смячмчсм</p>', 0, 'http://advanced.front/uploads/directiories/58526e66e57a6.png'),
(10, 'уууу', '<p><strong>ываываы</strong></p>', 0, 'http://advanced.front/uploads/directiories/58526e6db28c3.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `text`, `shortext`, `direction_text`, `image`) VALUES
(0, 'test name pavlovna', 'RIBAAAAA test', 'RIBAAAAA test SHORT', 'RIBAAAAA test dir', 'http://advanced.front/uploads/employees/58527305d6422.jpg'),
(1, 'Iryna Venediktova', 'Consultant coordinating and following up on the international commercial arbitration practice. Mrs Venediktova is Head of the Department for Civil Law Disciplines at V. N. Karazin Kharkiv National University, Doctor of Letters in Law, Full Professor, arbitrator at the International Commercial Arbitration Court and the Maritime Arbitration Commission at the Ukrainian Chamber of Commerce and Industry.\r\nShe is experienced in following up on the investment funds, preparing projects for legislative and sublegislative statutory acts, solving corporate conflicts, conducting legal audits and restructuring businesses. Took a course in International Commercial Arbitration at Chartered Institute of Arbitrators.\r\nJudge of the standing arbitration court at the Foundation of Medical Law and Bioethics of Ukraine All-Ukrainian Public Organization. Vice-President of the Association of Cosmetologists and Aromologists, Vice-President of the Foundation of Medical Law and Bioethics, holds membership on CIArb and UBA (Ukrainian Bar Association).\r\nAuthor of over 150 theoretical and practical research papers.\r\nLanguages – Ukrainian, English, Russian.', '<p>Consultant coordinating and following up on the international commercial arbitration practice.</p>\r\n <p>Mrs Venediktova is Head of the Department for Civil Law Disciplines at V. N. Karazin Kharkiv National University, Doctor of Letters in Law, Full Professor, arbitrator at the International Commercial Arbitration Court and the Maritime Arbitration Commission at the Ukrainian Chamber of Commerce and Industry. She is experienced in following up and providing legal support to the investment funds, preparing projects for legislative and sublegislative statutory acts, solving corporate conflicts, conducting legal audits and restructuring businesses.</p>', 'Arbitrator at the International Commercial Arbitration Court and the Maritime Arbitration Commission at the Ukrainian Chamber of Commerce and Industry\r\nOver 150 theoretical and practical research papers\r\nDoctor of Letters in Law, Full Professor\r\nHead of the Department for Civil Law Disciplines at V. N. Karazin Kharkiv National University\r\nFollowing up on the investment funds\r\nPreparing projects for legislative and sublegislative statutory acts\r\nSolving corporate conflicts\r\nConducting legal audits and restructuring businesses', 'http://advanced.front/uploads/employees/58527310469ae.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `languages`
--

INSERT INTO `languages` (`id`, `url`, `name`) VALUES
(1, 'ru', 'Russian'),
(2, 'en', 'English');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL,
  `index` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` text,
  `lang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `index`, `field`, `value`, `lang_id`) VALUES
(38, 1, 'icon', 'icon-mouse', 2),
(39, 1, 'title', 'About Us', 2),
(40, 1, 'url', '/site/about', 2),
(41, 2, 'icon', 'icon-directions', 2),
(42, 2, 'title', 'Key Areas', 2),
(43, 2, 'url', '/directions/', 2),
(44, 3, 'icon', 'icon-users', 2),
(45, 3, 'title', 'Our Lawers', 2),
(46, 3, 'url', '/employees/', 2),
(47, 4, 'icon', 'icon-trash', 2),
(48, 4, 'title', 'News', 2),
(49, 4, 'url', '/news/', 2),
(53, 5, 'icon', 'icon-ban', 2),
(54, 5, 'title', 'Contacts', 2),
(55, 5, 'url', '/site/contact', 2);

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
('m130524_201442_init', 1481272673),
('m161214_084822_create_directiories_table', 1481705638),
('m161214_123100_create_news_table', 1481720347),
('m161214_124817_create_languages_table', 1481720347),
('m161214_125325_create_translations_table', 1481720347),
('m161216_084343_creates_menuitems_table', 1481877980);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `short` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `short`, `date`) VALUES
(1, 'Спрощення процедури реєстрації імпортних лікарських засобів', '31 серпня 2016 року набрала чинності постанова Кабінету Міністрів України № 558 від 8 серпня 2016 року «Про внесення змін до Порядку державної реєстрації (перереєстрації) лікарських засобів», що спрощує процедуру реєстрації імпортних лікарських засобів. Відповідно до змін в законодавство, державна реєстрація лікарського засобу, який зареєстрований компетентним органом Сполучених Штатів Америки, Швейцарії, Японії, Австралії, Канади за централізованою процедурою компетентним органом Європейського Союзу для застосування на території таких країн чи держав — членів Європейського Союзу, здійснюється на підставі заяви та висновку Державного експертного центру Міністерства охорони здоров’я України, складеного за результатами проведення у визначеному МОЗ порядку розгляду доданих до заяви матеріалів. Інформація про подані заяви про державну реєстрацію лікарських засобів буде оприлюднюватися на офіційному веб-сайті Державного експертного центру Міністерства охорони здоров’я України.\r\nДо заяви про державну реєстрацію лікарського засобу повинні додаватися матеріали реєстраційного досьє, на підставі якого було здійснено реєстрацію лікарського засобу компетентними органами держави, з якої будуть імпортуватися медикаменти, із зазначенням даних про реєстрацію лікарського засобу в таких країнах, у тому числі назви країни реєстрації і органу реєстрації та дати реєстрації, що підтверджено заявником та/або його представником.', '31 серпня 2016 року набрала чинності постанова Кабінету Міністрів України № 558 від 8 серпня 2016 року «Про внесення змін до Порядку державної реєстрації (перереєстрації) лікарських засобів», що спрощує процедуру реєстрації імпортних лікарських засобів. Відповідно до змін в законодавство, державна реєстрація лікарського засобу, який зареєстрований компетентним органом Сполучених Штатів Америки, Швейцарії, Японії, Австралії, Канади за централізованою процедурою компетентним органом Європейського Союзу для застосування на території таких країн чи держав — членів Європейського Союзу, здійснюється на підставі заяви та висновку Державного експертного центру Міністерства охорони здоров’я України, складеного за результатами проведення у визначеному МОЗ порядку розгляду доданих до заяви матеріалів. Інформація про подані заяви про державну реєстрацію лікарських засобів буде оприлюднюватися на офіційному веб-сайті Державного експертного центру Міністерства охорони здоров’я України.', '2015-12-20'),
(2, 'Окремі аспекти законодавчого ругулювання косметологічної діяльності', 'Проблематика законодавчого регулювання косметологічної діяльності, перш за все, стосується невирішеного питання – хто такий косметолог та яка освіта необхідна для заняття косметологічною діяльністю?Проблематика законодавчого регулювання косметологічної діяльності, перш за все, стосується невирішеного питання – хто такий косметолог та яка освіта необхідна для заняття косметологічною діяльністю?Проблематика законодавчого регулювання косметологічної діяльності, перш за все, стосується невирішеного питання – хто такий косметолог та яка освіта необхідна для заняття косметологічною діяльністю?Проблематика законодавчого регулювання косметологічної діяльності, перш за все, стосується невирішеного питання – хто такиься невирішеного питання – хто такий косметолог та яка освіта необхідна для заняття косметологічною діяльністю?', 'Проблематика законодавчого регулювання косметологічної діяльності, перш за все, стосується невирішеного питання – хто такий косметолог та яка освіта необхідна для заняття косметологічною діяльністю?', '2019-05-20'),
(3, 'Захист гідності, честі та ділової репутації фізичних осіб, які є публічними особами', 'Чинна Конституція УкрЧинна Конституція України передбачає, що людина, її життя і здоров''я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.Чинна Конституція України передбачає, що людина, її життя і здоров''я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.Чинна Конституція України передбачає, що людина, її життя і здоров''я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.Чинна Конституція України передбачає, що людина, її життя і здоров''я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.аїни передбачає, що людина, її життя і здоров''я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.', 'Чинна Конституція України передбачає, що людина, її життя і здоров''я, честь і гідність, недоторканність і безпека визнаються в Україні найвищою соціальною цінністю.', '2005-04-20');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE IF NOT EXISTS `translations` (
  `id` int(11) NOT NULL,
  `id_object` int(11) DEFAULT NULL,
  `id_lang` int(11) DEFAULT NULL,
  `field` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Индексы таблицы `directiories`
--
ALTER TABLE `directiories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT для таблицы `directiories`
--
ALTER TABLE `directiories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
