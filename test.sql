-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 24 2021 г., 12:27
-- Версия сервера: 5.7.19
-- Версия PHP: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image_table`
--

CREATE TABLE `image_table` (
  `id` int(11) NOT NULL,
  `imagePath` varchar(255) NOT NULL,
  `id_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image_table`
--

INSERT INTO `image_table` (`id`, `imagePath`, `id_author`) VALUES
(1, '../uploades/4828d1180e4a3b5da15bfaeb44b1ac8d.jpg', '1'),
(2, '../uploades/macos-big-sur-1280x720-23121.jpg', '1'),
(3, '../uploades/4828d1180e4a3b5da15bfaeb44b1ac8d.jpg', '1'),
(4, '../uploades/macos-big-sur-1920x1080-22654.jpg', '1'),
(5, '../uploades/macos-big-sur-1280x720-23121.jpg', '1'),
(6, '../uploades/macos-big-sur-1920x1080-23117.jpg', '2'),
(7, '../uploades/macos-big-sur-1920x1080-23094.jpg', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `secondName` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `number`, `password`) VALUES
(1, 'a1z', 'sad', 77777, '12345'),
(2, 'zor', 'cap', 88888, '54321');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image_table`
--
ALTER TABLE `image_table`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image_table`
--
ALTER TABLE `image_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
