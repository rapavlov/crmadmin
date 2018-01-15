-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 12 2018 г., 11:47
-- Версия сервера: 5.5.53-log
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `azsclient`
--

CREATE TABLE `azsclient` (
  `id` int(3) NOT NULL,
  `address` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `azsclient`
--

INSERT INTO `azsclient` (`id`, `address`, `company`, `city`) VALUES
(1, 'ТранСиб, Малахова бензин, Барнаул, Малахова, 149а', 'ТранСиб', 'Барнаул'),
(2, 'ТранСиб, Малахова газ, Барнаул, Малахова, 149а', 'ТранСиб', 'Барнаул'),
(3, 'ТранСиб, Ленина, Барнаул, Ленина, 104б', 'ТранСиб', 'Барнаул'),
(4, 'ТранСиб, Кулагина ТИРС, Барнаул, Кулагина, 9в', 'ТранСиб', 'Барнаул'),
(5, 'ТранСиб, Змеиногорский тракт, Барнаул, Змеиногорский тракт, 91ж', 'ТранСиб', 'Барнаул'),
(6, 'ТранСиб, Лента Провинция, Барнаул, Павловский тракт, 154', 'ТранСиб', 'Барнаул'),
(7, 'Баррель, Новоалтайск, Промплощадка, 36', 'Баррель', 'Новоалтайск'),
(8, 'Транспорт, АЗС КЖБИ-2, Барнаул, Калинина, 112', 'Транспорт', 'Барнаул'),
(9, 'Ресурс-Групп, АЗС Наумово', 'Ресурс-Групп', 'Наумово'),
(10, 'Ресурс-Групп, АЗС Тальменка', 'Ресурс-Групп', 'Тальменка');

-- --------------------------------------------------------

--
-- Структура таблицы `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birth_date` date NOT NULL,
  `notes` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `dutymehaniks`
--

CREATE TABLE `dutymehaniks` (
  `id` int(11) NOT NULL,
  `begin_duty` datetime NOT NULL,
  `end_duty` datetime NOT NULL,
  `mehanik` int(11) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='график дежурства механиков';

--
-- Дамп данных таблицы `dutymehaniks`
--

INSERT INTO `dutymehaniks` (`id`, `begin_duty`, `end_duty`, `mehanik`, `comment`) VALUES
(1, '2018-01-01 23:00:09', '2018-01-11 23:00:09', 1, ''),
(2, '2018-01-11 13:35:31', '2018-01-21 23:35:31', 2, ''),
(3, '2018-01-21 23:55:55', '2018-01-31 23:40:55', 1, ''),
(4, '2017-12-01 14:05:49', '2018-01-10 00:00:49', 1, ''),
(5, '2017-12-01 14:05:49', '2018-01-10 00:00:49', 1, ''),
(6, '2018-01-31 23:50:43', '2018-02-07 23:55:43', 2, ''),
(7, '2018-02-07 23:55:16', '2018-02-11 23:55:17', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `importance`
--

CREATE TABLE `importance` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `importance`
--

INSERT INTO `importance` (`id`, `name`) VALUES
(1, 'обычная'),
(2, 'срочная');

-- --------------------------------------------------------

--
-- Структура таблицы `mehaniks`
--

CREATE TABLE `mehaniks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_work` int(11) NOT NULL,
  `coment` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mehaniks`
--

INSERT INTO `mehaniks` (`id`, `name`, `is_work`, `coment`) VALUES
(1, 'Вова Грибов', 1, ''),
(2, 'Глазунов Виктор', 1, '');

-- --------------------------------------------------------

--
-- Структура таблицы `phone`
--

CREATE TABLE `phone` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `number` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `remont_zayavki`
--

CREATE TABLE `remont_zayavki` (
  `id` int(15) UNSIGNED NOT NULL,
  `data_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `importance` tinyint(1) DEFAULT NULL,
  `address` int(5) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `problem` text,
  `status` int(2) DEFAULT '1',
  `mehanic_id` int(3) DEFAULT NULL,
  `begin_work_time` datetime DEFAULT NULL,
  `end_work_time` datetime DEFAULT NULL,
  `description_work` text,
  `materials` text,
  `recommendations` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `remont_zayavki`
--

INSERT INTO `remont_zayavki` (`id`, `data_create`, `importance`, `address`, `company`, `problem`, `status`, `mehanic_id`, `begin_work_time`, `end_work_time`, `description_work`, `materials`, `recommendations`) VALUES
(14, '2017-12-22 09:10:12', 1, 3, NULL, 'шланг', 2, 2, '2017-12-22 17:25:15', '2017-12-22 22:30:15', 'замена шланга', 'шланг', 'ТО через месяц'),
(15, '2017-12-22 09:25:45', 2, 4, NULL, 'неисправно табло', 2, 2, '2017-12-22 18:25:42', '2017-12-22 19:50:42', 'протер пыль', 'тряпка', 'протирать чаще'),
(16, '2017-12-22 09:30:54', 2, 4, NULL, 'табло', 1, 1, NULL, NULL, NULL, NULL, NULL),
(17, '2017-12-22 09:30:54', 1, 7, NULL, 'дверь', 1, 1, NULL, NULL, NULL, NULL, NULL),
(18, '2017-12-22 10:35:55', 1, 3, NULL, 'пистолет', 4, 1, '2017-12-22 16:45:14', NULL, 'ыыыы', 'ыыы', ''),
(19, '2017-12-22 09:40:45', 1, 7, NULL, 'пистолет', 2, 1, '2017-12-22 16:40:34', '2017-12-22 16:55:34', 'апппппппп', 'ыыыыы', ''),
(20, '2017-12-22 09:45:06', 1, 7, NULL, 'пистолет', 3, 2, '2017-12-22 16:45:40', '2017-12-22 17:45:40', 'ввыы', 'ффф', ''),
(21, '2017-12-25 01:55:25', 1, 3, NULL, 'пистолет', 2, 1, '2017-12-26 15:30:30', '2017-12-27 18:30:30', 'ремонт', 'лента', ''),
(22, '2017-12-25 02:25:13', 1, 6, NULL, 'шланг', 2, 2, '2017-12-25 17:25:29', '2017-12-25 17:55:29', 'ремонт', '', 'то'),
(23, '2017-12-25 08:05:11', 1, 4, NULL, 'течь', 1, 2, NULL, NULL, NULL, NULL, NULL),
(24, '2017-12-26 08:30:28', 1, 10, NULL, 'табло', 1, 2, NULL, NULL, NULL, NULL, NULL),
(25, '2018-01-09 04:00:31', 1, 3, NULL, 'пистолет', 2, 2, '2018-01-09 10:00:13', '2018-01-09 12:05:13', 'заменил пистолет', 'пистолет', 'через 1 месяц проверить'),
(26, '2018-01-09 04:10:59', 1, 5, NULL, 'шланг', 4, 2, '2018-01-09 11:55:00', '2018-01-17 17:15:00', 'шланг', 'шланг', 'протирать чаще'),
(27, '2018-01-09 04:25:54', 1, NULL, NULL, 'на Клевере бийская трасса пистолет', 1, 1, NULL, NULL, NULL, NULL, NULL),
(28, '2018-01-12 07:45:24', 1, NULL, NULL, 'павловский тракт 32 км', 1, 1, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Активная'),
(2, 'Выполнено'),
(3, 'Отменено'),
(4, 'В работе');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `auth_key` varchar(255) DEFAULT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `auth_key`, `role`) VALUES
(1, 'admin', '$2y$13$2G5H5gvTU.uyseol9SFCluUJLCTfvCleQpQm28pchNCeRd6fm8/Hm', 'VWIuh4IV46-HgRHWj9u6SnSk0uzwq6eE', 'admin'),
(2, 'mehanik', '$2y$13$7DIHzyP6Mz3DyGkho7t6NOVG6DHwL2BzFTbbvCcbhE2lPhXzK/Ot6', 'dNNR3ZPrRW_-EEl1J82xeZXIGJvY3s-y', 'mehanik'),
(3, 'office', '$2y$13$IpUpT7dbjmvLjM8xf5gEbe1yqIwh5Av6fYmH9uMvYlsebZ8/M2G1u', 'EsyMAgcH2hRagQwhnBmXicu56d5ywm5W', 'office');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `azsclient`
--
ALTER TABLE `azsclient`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dutymehaniks`
--
ALTER TABLE `dutymehaniks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `importance`
--
ALTER TABLE `importance`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mehaniks`
--
ALTER TABLE `mehaniks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `remont_zayavki`
--
ALTER TABLE `remont_zayavki`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id_2` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_3` (`id`),
  ADD KEY `id_4` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `azsclient`
--
ALTER TABLE `azsclient`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `dutymehaniks`
--
ALTER TABLE `dutymehaniks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `importance`
--
ALTER TABLE `importance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `mehaniks`
--
ALTER TABLE `mehaniks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `remont_zayavki`
--
ALTER TABLE `remont_zayavki`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
