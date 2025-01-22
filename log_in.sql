-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: mySQL-8.0
-- Время создания: Янв 23 2025 г., 05:58
-- Версия сервера: 8.0.35
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `log_in`
--

-- --------------------------------------------------------

--
-- Структура таблицы `log_in`
--

CREATE TABLE `log_in` (
  `id` int NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` text NOT NULL,
  `login` varchar(20) NOT NULL,
  `username` varchar(31) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `visit` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'ofline',
  `status` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `log_in`
--

INSERT INTO `log_in` (`id`, `password`, `email`, `login`, `username`, `visit`, `status`) VALUES
(1, '2', 'masanaguy@gmail.com', 'qqq', 'maks ignatiev', 'ofline', 'I will save you from lonelinss, but I do not know how to save myself.'),
(2, '2', 'ewqeqweqweqe@gmasil.com', 'www', 'Sonya Split', 'online', NULL),
(3, '2', 'q@gmail.com', 'eee', 'Alex Hol', 'ofline', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `log_in`
--
ALTER TABLE `log_in`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
