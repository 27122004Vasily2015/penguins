-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2024 г., 21:47
-- Версия сервера: 10.8.4-MariaDB
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `OJJO`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `Caterg_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_cat`, `Caterg_name`) VALUES
(1, 'кольца'),
(2, 'серьги'),
(3, 'подвески'),
(4, 'запонки'),
(5, 'браслеты'),
(6, 'часы');

-- --------------------------------------------------------

--
-- Структура таблицы `jewelries`
--

CREATE TABLE `jewelries` (
  `id_jewel` int(11) NOT NULL,
  `name_jewel` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `Image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descr` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_categ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `jewelries`
--

INSERT INTO `jewelries` (`id_jewel`, `name_jewel`, `Price`, `Image`, `Descr`, `id_categ`) VALUES
(1, 'Dolce & Gabanna', 175000, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ', 1),
(2, 'Gabanna (2)', 175000, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ', 2),
(3, 'Gaba (3)', 100000, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.   ', 5),
(4, 'Dolce (4)', 120000, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.   ', 4),
(5, 'Doe (5)', 123000, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.   ', 2),
(6, 'Dolceee (6)', 1500000, '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.  ', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `ListOrder`
--

CREATE TABLE `ListOrder` (
  `id_jewel` int(11) NOT NULL,
  `id_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `ListOrder`
--

INSERT INTO `ListOrder` (`id_jewel`, `id_order`) VALUES
(4, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Orders`
--

CREATE TABLE `Orders` (
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `DateOrder` date NOT NULL,
  `DateGet` date NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `Orders`
--

INSERT INTO `Orders` (`id_order`, `id_user`, `DateOrder`, `DateGet`, `Price`) VALUES
(1, 1, '2024-01-24', '2024-01-25', 175000),
(2, 2, '2024-01-10', '2024-01-11', 123000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_surname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `user_surname`, `Login`, `Password`) VALUES
(1, 'pit\'a', 'pit\'a', '111'),
(2, 'bmo', 'bmo', '222');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `jewelries`
--
ALTER TABLE `jewelries`
  ADD PRIMARY KEY (`id_jewel`),
  ADD KEY `id_categ` (`id_categ`);

--
-- Индексы таблицы `ListOrder`
--
ALTER TABLE `ListOrder`
  ADD KEY `id_jewel` (`id_jewel`),
  ADD KEY `id_order` (`id_order`);

--
-- Индексы таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `jewelries`
--
ALTER TABLE `jewelries`
  MODIFY `id_jewel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `Orders`
--
ALTER TABLE `Orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `jewelries`
--
ALTER TABLE `jewelries`
  ADD CONSTRAINT `jewelries_ibfk_1` FOREIGN KEY (`id_categ`) REFERENCES `categories` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `ListOrder`
--
ALTER TABLE `ListOrder`
  ADD CONSTRAINT `listorder_ibfk_1` FOREIGN KEY (`id_jewel`) REFERENCES `jewelries` (`id_jewel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `listorder_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `Orders` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `Orders`
--
ALTER TABLE `Orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
