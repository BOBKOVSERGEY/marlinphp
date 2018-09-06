-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 06 2018 г., 17:49
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
(1, 'Go to the store', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi assumenda delectus deserunt et expedita explicabo fuga illum iste laboriosam molestiae molestias natus nesciunt nihil omnis quae, qui quidem. Obcaecati?'),
(3, 'Go to the store', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi assumenda delectus deserunt et expedita explicabo fuga illum iste laboriosam molestiae molestias natus nesciunt nihil omnis quae, qui quidem. Obcaecati?'),
(4, 'Go to the PrideClub', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, animi assumenda delectus deserunt et expedita explicabo fuga illum iste laboriosam molestiae molestias natus nesciunt nihil omnis quae, qui quidem. Obcaecati?'),
(5, 'OWASP', 'Посмотреть курс OWASP'),
(6, 'Linux', 'Администрирование Linux'),
(7, 'Linux', 'Администрирование Linux'),
(8, 'Linux', 'Администрирование Linux'),
(9, 'Angular', 'курсы по angular '),
(14, 'Some', 'Some '),
(15, 'OWASP', 'new');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
