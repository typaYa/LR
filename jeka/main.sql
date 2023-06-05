-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 05 2023 г., 14:47
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `main`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `path` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `cost` int NOT NULL,
  `post` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `name`, `path`, `description`, `cost`, `post`) VALUES
(1, 'Трансформатор ТМГ21-1600-10/0,4 Д/Ун-11', '3164139e-635e-4275-98e9-9cb582841519.jfif', 'Трансформатор ТМГ 1600 МЭТЗ, Минск трёхфазный масляный предназначен для преобразования электроэнергии в сетях энергосистем и потребителей электроэнергии в условиях наружной или внутренней установки умеренного (от плюс 40 до минус 45 оС) или холодного (от плюс 40 до минус 60 оС) климата. Окружающая среда невзрывоопасная, не содержащая пыли в концентрациях, снижающих параметры изделий в недопустимых пределах.', 900000, 'Трансформатор ТМГ21-1600-10/0,4 Д/Ун-11'),
(2, ' Трансформатор разделительный TS 40/12-24 C безопасный', '3f55bec2-a7f6-412c-9564-af6d875569c6.jfif', 'Трансформатор ТМГ 1600 Минск не предназначен для работы в условиях тряски, вибрации, ударов, в химически активной среде. Высота установки над уровнем моря не более 1000 м. Номинальная частота 50 Гц. Регулирование напряжения осуществляется в диапазоне до ± 5% на полностью отключенном трансформаторе (ПБВ) переключением ответвлений обмотки ВН ступенями по 2,5 %.  ', 1000000, ' Трансформатор разделительный TS 40/12-24 C безопасный'),
(3, ' Трансформатор тока СТ4/200/5 А класс 1', 'ce880c40-1295-45f0-a7a9-d3ce64e90c29.jfif', 'Для измерения температуры верхних слоев масла и управления внешними электрическими цепями трансформаторы мощностью от 630 до 1600 кВА, предназначенные для эксплуатации в помещении или под навесом, по заказу потребителя комплектуются манометрическим сигнализирующим термометром. В ассортименте нашего магазина присутствуют только высококачественные товары, которые Вы можете купить с доставкой. Мы делаем все возможное, чтобы покупки в ТМТОРГ были выгодными и приятными для Вас, ведь наши клиенты - наша главная ценность.', 582934, ' Трансформатор тока СТ4/200/5 А класс 1');

-- --------------------------------------------------------

--
-- Структура таблицы `postavshik`
--

CREATE TABLE `postavshik` (
  `id` int NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `id_tovara` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `postavshik`
--

INSERT INTO `postavshik` (`id`, `name`, `id_tovara`) VALUES
(1, 'Трансформатор ТМГ21-1600-10/0,4 Д/Ун-11', 1),
(2, ' Трансформатор разделительный TS 40/12-24 C безопасный', 2),
(3, ' Трансформатор тока СТ4/200/5 А класс 1', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullName` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `gender` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `desc` text COLLATE utf8mb4_general_ci NOT NULL,
  `refer` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `blood` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `factor` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `postavshik`
--
ALTER TABLE `postavshik`
  ADD KEY `id_tovara` (`id_tovara`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `postavshik`
--
ALTER TABLE `postavshik`
  ADD CONSTRAINT `postavshik_ibfk_1` FOREIGN KEY (`id_tovara`) REFERENCES `img` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
