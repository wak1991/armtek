-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 16 2019 г., 23:30
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `armtek`
--

-- --------------------------------------------------------

--
-- Структура таблицы `parts_list`
--

CREATE TABLE `parts_list` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `weight` float NOT NULL,
  `volume` float NOT NULL,
  `length` float NOT NULL,
  `width` float NOT NULL,
  `height` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parts_list`
--

INSERT INTO `parts_list` (`id`, `title`, `weight`, `volume`, `length`, `width`, `height`, `img`) VALUES
(1, 'Амортизатор', 11, 11, 11, 11, 11, 'cat.jpg'),
(2, 'Крышка', 1, 1, 1, 10000000, 1, ''),
(26, 'Бак', 44, 44, 44, 44, 44, ''),
(27, 'Люк', 6, 6, 6, 6, 6, ''),
(28, 'Сиденье', 4, 4, 4, 4, 4, ''),
(29, 'Колодки', 88, 88, 88, 88, 88, ''),
(30, 'Ремень ГРМ', 7, 7, 7, 7, 7, ''),
(31, 'Водяная помпа', 12, 12, 12, 12, 12, '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `parts_list`
--
ALTER TABLE `parts_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `parts_list`
--
ALTER TABLE `parts_list`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
