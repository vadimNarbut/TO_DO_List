-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3308
-- Время создания: Фев 06 2020 г., 12:04
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `todolist`
--
CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `todolist`;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `task_id` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `url`, `email`, `body`, `task_id`, `dt`) VALUES
(19, 'Вадим Нарбут', 'https://oauth.yandex.ru/authorize?client_id=e2281900ced84819a1ae93143574c714&response_type=code&force_confirm=1&redirect_uri=https%3A%2F%2Fauth.mail.ru%2Fcgi-bin%2Foauth2_yandex_callback%2F&state=info%40kursach.by-30ec540fdf91f47c29905d91ea429045', 'vadim.narbyt12345@gmail.com', 'asdasd', 3, '2020-02-05 07:26:24'),
(18, 'Вадим Нарбут', 'https://oauth.yandex.ru/authorize?client_id=e2281900ced84819a1ae93143574c714&response_type=code&force_confirm=1&redirect_uri=https%3A%2F%2Fauth.mail.ru%2Fcgi-bin%2Foauth2_yandex_callback%2F&state=info%40kursach.by-30ec540fdf91f47c29905d91ea429045', 'vadim.narbyt12345@gmail.com', 'asdasdasda', 3, '2020-02-05 07:26:19'),
(17, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasdas', 8, '2020-02-05 07:26:01'),
(20, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasdas', 3, '2020-02-05 07:26:58'),
(21, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasd', 3, '2020-02-05 07:33:14'),
(22, 'asdasdas', '', 'vadim.narbyt12345@gmail.com', 'asdasd', 6, '2020-02-05 07:34:59'),
(23, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasda', 3, '2020-02-05 07:59:23'),
(24, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasdada', 4, '2020-02-05 08:36:14'),
(25, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasdasd', 1, '2020-02-05 08:36:29'),
(26, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'zxczxc', 3, '2020-02-05 08:37:19'),
(27, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'никита хуй соси', 2, '2020-02-05 13:51:35'),
(28, 'Вадим Нарбут', '', 'john12@gmail.com', 'dsdasdasd', 2, '2020-02-05 13:52:03'),
(29, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasdasd', 1, '2020-02-05 13:53:45'),
(30, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'явапяваряаряваряв', 1, '2020-02-05 19:48:39'),
(31, 'Вадим Нарбут', '', 'vadim.narbyt12345@gmail.com', 'asdasd', 11, '2020-02-05 22:40:56');

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `status`, `date`) VALUES
(1, 'task 11', 'desc1', 'TODO', '2020-02-04 13:43:09'),
(2, 'test1w', 'desc1', 'TODO', '2020-02-04 13:43:16'),
(3, 'test3213131', 'test3w', 'DONE', '2020-02-04 18:20:37'),
(4, 'test4', 'test4', 'DONE', '2020-02-04 18:20:49'),
(5, 'task 5', 'test5', 'DONE', '2020-02-04 18:25:47'),
(6, 'test6', 'desc6', 'DONE', '2020-02-04 18:25:59'),
(7, 'tttttt', 'ttttttttttt', 'DOING', '2020-02-04 20:07:03'),
(8, 'vadim', '11111111111', 'DONE', '2020-02-05 09:25:57'),
(9, 'test1', 'test12', 'DOING', '2020-02-06 01:22:10'),
(10, 'test1asdasdasdasdasd', 'test12', 'DOING', '2020-02-06 01:22:21'),
(11, 'tttttt', 'test1wwww', 'DOING', '2020-02-06 01:23:08');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
