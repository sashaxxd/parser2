-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 07 2018 г., 17:11
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
-- База данных: `parser2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `title`, `text`) VALUES
(1, 'О компании', '<p>Энерго-сан &ndash; это один из крупнейших компаний на Российском солнечных батарей. Мы предлагаем своим клиентам комплексные решения и индивидуальный подход. Мы имеем большой штат высококлассных специалистов, которые возьмут на себя весь цикл реализации задачи - от создания проекта до запуска оборудования.</p>\r\n'),
(2, 'Услуги ', '<p>&nbsp;</p>\r\n\r\n<p>Мы предлагаем:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>1. Проектирование солнечных батарей. Наши специалисты проведут предпроектное обследование и выполнят непосредственно проектирование</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>2. Пусконаладка оборудования. Мы можем доставить оборудование и выполнить запуск &quot;под ключ&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>3. Сервисное обслуживание. Мы производим сервисное обслуживание, а также гарантийный и поле гарантийный ремонт с выездом к заказчику.</p>\r\n'),
(3, 'Контакты ', 'ООО «Энерго-сан\" \r\n\r\nАдрес офиса: ');

-- --------------------------------------------------------

--
-- Структура таблицы `parsing`
--

CREATE TABLE `parsing` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `toplivo` varchar(255) NOT NULL,
  `power` varchar(255) NOT NULL,
  `voltage` varchar(255) NOT NULL,
  `abp` varchar(255) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `price_sale` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `parsing`
--

INSERT INTO `parsing` (`id`, `image`, `name`, `toplivo`, `power`, `voltage`, `abp`, `performance`, `link`, `price`, `price_sale`) VALUES
(271, 'generatorgenese-standart-otkrytaya_19.jpg', 'Дизельный генератор Genese D8', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8/', '220000', '220000'),
(272, 'generatorgenese-standart-otkrytaya_19.jpg', 'Дизельный генератор Genese D8 с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-s-avr/', '259750', '259750'),
(273, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_17.jpg', 'Дизельный генератор Genese D8 в кожухе', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-kojuhe/', '280000', '280000'),
(274, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_17.jpg', 'Дизельный генератор Genese D8 в кожухе с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-kojuhe-s-avr/', '319750', '319750'),
(275, 'generatorkont-erbk-1_211.jpg', 'Дизельный генератор Genese D8 в контейнере', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-konteynere/', '511900', '511900'),
(276, 'generatorkont-erbk-1_216.jpg', 'Дизельный генератор Genese D8 в контейнере с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-konteynere-s-avr/', '551650', '551650'),
(277, 'generatorgenese-standart-otkrytaya_20.jpg', 'Дизельный генератор Genese D12', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12/', '240000', '240000'),
(278, 'generatorgenese-standart-otkrytaya_20.jpg', 'Дизельный генератор Genese D12 с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-s-avr/', '279750', '279750'),
(279, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_18.jpg', 'Дизельный генератор Genese D12 в кожухе', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-kojuhe/', '310000', '310000'),
(280, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_18.jpg', 'Дизельный генератор Genese D12 в кожухе с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-kojuhe-s-avr/', '349750', '349750'),
(281, 'generatorkont-erbk-1_212.jpg', 'Дизельный генератор Genese D12 в контейнере', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-konteynere/', '531900', '531900'),
(282, 'generatorkont-erbk-1_217.jpg', 'Дизельный генератор Genese D12 в контейнере с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-konteynere-s-avr/', '571650', '571650'),
(283, 'generatorgenese-standart-otkrytaya_21.jpg', 'Дизельный генератор Genese D16', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16/', '250000', '250000'),
(284, 'generatorgenese-standart-otkrytaya_21.jpg', 'Дизельный генератор Genese D16 с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-s-avr/', '289750', '289750'),
(285, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_19.jpg', 'Дизельный генератор Genese D16 в кожухе', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-kojuhe/', '365000', '365000'),
(286, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_19.jpg', 'Дизельный генератор Genese D16 в кожухе с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-kojuhe-s-avr/', '404750', '404750'),
(287, 'generatorkont-erbk-1_213.jpg', 'Дизельный генератор Genese D16 в контейнере', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-konteynere/', '541900', '541900'),
(288, 'generatorkont-erbk-1_218.jpg', 'Дизельный генератор Genese D16 в контейнере с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-konteynere-s-avr/', '581650', '581650'),
(289, 'generatorgenese-standart-otkrytaya_22.jpg', 'Дизельный генератор Genese D20', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20/', '290000', '290000'),
(290, 'generatorgenese-standart-otkrytaya_22.jpg', 'Дизельный генератор Genese D20 с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-s-avr/', '329750', '329750'),
(291, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_20.jpg', 'Дизельный генератор Genese D20 в кожухе', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-kojuhe/', '420000', '420000'),
(292, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_20.jpg', 'Дизельный генератор Genese D20 в кожухе с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-kojuhe-s-avr/', '459750', '459750'),
(293, 'generatorkont-erbk-1_214.jpg', 'Дизельный генератор Genese D20 в контейнере', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-konteynere/', '581900', '581900'),
(294, 'generatorkont-erbk-1_219.jpg', 'Дизельный генератор Genese D20 в контейнере с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-konteynere-s-avr/', '621650', '621650'),
(295, 'generatorgenese-standart-otkrytaya_23.jpg', 'Дизельный генератор Genese D30', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30/', '360000', '360000'),
(296, 'generatorgenese-standart-otkrytaya_23.jpg', 'Дизельный генератор Genese D30 с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-s-avr/', '399750', '399750'),
(297, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_21.jpg', 'Дизельный генератор Genese D30 в кожухе', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-kojuhe/', '490000', '490000'),
(298, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_21.jpg', 'Дизельный генератор Genese D30 в кожухе с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-kojuhe-s-avr/', '529750', '529750'),
(299, 'generatorkont-erbk-1_215.jpg', 'Дизельный генератор Genese D30 в контейнере', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-konteynere/', '651900', '651900'),
(300, 'generatorkont-erbk-1_220.jpg', 'Дизельный генератор Genese D30 в контейнере с АВР', 'дизель', '8.8', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-konteynere-s-avr/', '691650', '691650');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `toplivo` varchar(255) NOT NULL,
  `power` decimal(10,2) NOT NULL,
  `voltage` varchar(255) NOT NULL,
  `abp` varchar(255) NOT NULL,
  `performance` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `toplivo`, `power`, `voltage`, `abp`, `performance`, `link`, `price`, `price_sale`) VALUES
(1, 'generatorgenese-standart-otkrytaya_19.jpg', 'Дизельный генератор Genese D8', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8/', 220000, 220000),
(2, 'generatorgenese-standart-otkrytaya_19.jpg', 'Дизельный генератор Genese D8 с АВР', 'бензин', '8.80', '230/400 В', 'нет', 'в кожухе', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-s-avr/', 259750, 259750),
(3, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_17.jpg', 'Дизельный генератор Genese D8 в кожухе', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-kojuhe/', 280000, 280000),
(4, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_17.jpg', 'Дизельный генератор Genese D8 в кожухе с АВР', 'газ', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-kojuhe-s-avr/', 319750, 319750),
(5, 'generatorkont-erbk-1_211.jpg', 'Дизельный генератор Genese D8 в контейнере', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-konteynere/', 511900, 511900),
(6, 'generatorkont-erbk-1_216.jpg', 'Дизельный генератор Genese D8 в контейнере с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-konteynere-s-avr/', 551650, 551650),
(7, 'generatorgenese-standart-otkrytaya_20.jpg', 'Дизельный генератор Genese D12', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12/', 240000, 240000),
(8, 'generatorgenese-standart-otkrytaya_20.jpg', 'Дизельный генератор Genese D12 с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-s-avr/', 279750, 279750),
(9, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_18.jpg', 'Дизельный генератор Genese D12 в кожухе', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-kojuhe/', 310000, 310000),
(10, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_18.jpg', 'Дизельный генератор Genese D12 в кожухе с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-kojuhe-s-avr/', 349750, 349750),
(11, 'generatorkont-erbk-1_212.jpg', 'Дизельный генератор Genese D12 в контейнере', 'дизель', '6.00', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-konteynere/', 531900, 531900),
(12, 'generatorkont-erbk-1_217.jpg', 'Дизельный генератор Genese D12 в контейнере с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-konteynere-s-avr/', 571650, 571650),
(13, 'generatorgenese-standart-otkrytaya_21.jpg', 'Дизельный генератор Genese D16', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16/', 250000, 250000),
(14, 'generatorgenese-standart-otkrytaya_21.jpg', 'Дизельный генератор Genese D16 с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-s-avr/', 289750, 289750),
(15, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_19.jpg', 'Дизельный генератор Genese D16 в кожухе', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-kojuhe/', 365000, 365000),
(16, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_19.jpg', 'Дизельный генератор Genese D16 в кожухе с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'на кронштейне', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-kojuhe-s-avr/', 404750, 404750),
(17, 'generatorkont-erbk-1_213.jpg', 'Дизельный генератор Genese D16 в контейнере', 'дизель', '8.80', '230', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-konteynere/', 541900, 541900),
(18, 'generatorkont-erbk-1_218.jpg', 'Дизельный генератор Genese D16 в контейнере с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-konteynere-s-avr/', 581650, 581650),
(19, 'generatorgenese-standart-otkrytaya_22.jpg', 'Дизельный генератор Genese D20', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20/', 290000, 290000),
(20, 'generatorgenese-standart-otkrytaya_22.jpg', 'Дизельный генератор Genese D20 с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-s-avr/', 329750, 329750),
(21, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_20.jpg', 'Дизельный генератор Genese D20 в кожухе', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-kojuhe/', 420000, 420000),
(22, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_20.jpg', 'Дизельный генератор Genese D20 в кожухе с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-kojuhe-s-avr/', 459750, 459750),
(23, 'generatorkont-erbk-1_214.jpg', 'Дизельный генератор Genese D20 в контейнере', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-konteynere/', 581900, 581900),
(24, 'generatorkont-erbk-1_219.jpg', 'Дизельный генератор Genese D20 в контейнере с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-konteynere-s-avr/', 621650, 621650),
(25, 'generatorgenese-standart-otkrytaya_23.jpg', 'Дизельный генератор Genese D30', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30/', 360000, 360000),
(26, 'generatorgenese-standart-otkrytaya_23.jpg', 'Дизельный генератор Genese D30 с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-s-avr/', 399750, 399750),
(27, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_21.jpg', 'Дизельный генератор Genese D30 в кожухе', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-kojuhe/', 490000, 490000),
(28, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_21.jpg', 'Дизельный генератор Genese D30 в кожухе с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-kojuhe-s-avr/', 529750, 529750),
(29, 'generatorkont-erbk-1_215.jpg', 'Дизельный генератор Genese D30 в контейнере', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-konteynere/', 651900, 651900),
(30, 'generatorkont-erbk-1_220.jpg', 'Дизельный генератор Genese D30 в контейнере с АВР', 'дизель', '8.80', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-konteynere-s-avr/', 691650, 691650);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `isAdmin`) VALUES
(1, 'admin', 'test@bk.ru', '8cb2237d0679ca88db6464eac60da96345513964', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `parsing`
--
ALTER TABLE `parsing`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `parsing`
--
ALTER TABLE `parsing`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=301;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
