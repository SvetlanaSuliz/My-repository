-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 09 2019 г., 13:52
-- Версия сервера: 10.4.6-MariaDB
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pastry_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cakes`
--

CREATE TABLE `cakes` (
  `id` int(11) NOT NULL,
  `Date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `code` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cakes`
--

INSERT INTO `cakes` (`id`, `Date`, `name`, `price`, `code`, `quantity`) VALUES
(1, '2019-10-17', '\"Unicorn\"', 1490, 100001, 3),
(2, '2019-10-15', '\"Three chocolates\"', 1490, 334567, 2),
(3, '2019-09-11', '\"Northern Lights\"', 1490, 434567, 15),
(4, '2019-07-09', '\"Strawberry heart\"\r\n', 1490, 894545, 6),
(5, '2019-07-16', '\"Superman\"', 1490, 500001, 11),
(6, '2019-10-28', 'Sweet cake', 1490, 974370, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Surname` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Zip` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `Email`, `Password`, `Name`, `Surname`, `City`, `Zip`, `Address`) VALUES
(1, 'ushakova@mail.ru', '12345678', 'Natalia', 'Ushakova', 'Volgograd', 400024, '64 army street'),
(2, 'mironov@mail.ru', '87654321', 'Mikhail', 'Mironov', 'Saratov', 400088, 'Worker-Peasant Street');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cakes`
--
ALTER TABLE `cakes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cakes`
--
ALTER TABLE `cakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
