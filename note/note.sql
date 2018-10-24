-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 24 2018 г., 16:46
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `note`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`) VALUES
(5, 'OWASP', 'Посмотреть курс OWASP'),
(8, 'Linux', 'Администрирование Linux'),
(9, 'Angular', 'курсы по angular '),
(14, 'Some', 'Some '),
(15, 'OWASPl', 'newl'),
(17, 'OWASP Newl', 'OWASP Newl'),
(22, '12355jj', '12355kk');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(2, 'sergey_bobkov@inbox.ru', '$2y$10$YpoIcj1HgWIMSKDXXLJGEuSDVBfUPFZWmrmc0BAobDBh8lTFbRpIO'),
(3, 'sergey_bobkov2@inbox.ru', '$2y$10$AJK9NipngvLjTycYD54yReGioryKiBq5RIkpieHnVBRY1eM/fw70K'),
(4, 'sergey_bobkov2@inbox.ru', '$2y$10$p1a0SYDgTZGMhUcwwIxDveJrQUqpFISgOUw85J1Wkjolh/moVS0n.'),
(5, 'sergey_bobkov2@inbox.ru', '$2y$10$/c/bm3D18Ai0BS9FUe08RuZbxhqfUdhO8Ad0YezvRbychBVH2Oro6'),
(6, 'sergey_bobkov2@inbox.ru', '$2y$10$tDZNQgdzPQk8pkpi5GfYAuyE9wedvNDjxjlTeu3o19XnoxycbKPXK'),
(7, 'sergey_bobkov2@inbox.ru', '$2y$10$hB85XM.bE7/XaVyPb5TTtOgNep7WJwfq2F/0.xYqoGOET7z7MVTdW'),
(8, 'sergey_bobkov2@inbox.ru', '$2y$10$8Am36aHX1dTk183mYSioE.imHmsj4AKsaFcubq5x.yEwxn23eCLVa'),
(9, 'sergey_bobkov2@inbox.ru', '$2y$10$.L0ro9fA6V.u.z5zuxFXquz7AMKOysoeRm61O7hluNozNvBTIPX3a'),
(10, 'sergey_bobkov2@inbox.ru', '$2y$10$3hgNXrzOeizHoBa5IrjmXOTK9b7pMnIOXIkVQ1pmJeoM9t7nw1ZuK'),
(11, 'sergey_bobkov2@inbox.ru', '$2y$10$vgK6eaYSLSl9HeEpAJWexeQDi0ul3wA/zyT9LbmN5.x7pmvM6xJwm'),
(12, 'sergey_bobkov2@inbox.ru', '$2y$10$ZEgqYt3gp2Hlchqz0F5u6u0KfpbyNTu5wsVMravMrmq.v5TCJ1fPm'),
(13, 'sergey_bobkov2@inbox.ru', '$2y$10$wLdxS8xMRL.jOwAQK6Nn8OJQggfDffwR3azHO7zf71R4W8VHi9RiK'),
(14, 'sergey_bobkov2@inbox.ru', '$2y$10$fxR2eBVUF8s/zcDFwoQTyOsOye//L0Q73XLXw3RfezHmRKQorTF2m');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
