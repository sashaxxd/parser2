-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 05 2018 г., 01:03
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
-- База данных: `parser`
--

-- --------------------------------------------------------

--
-- Структура таблицы `archive_1533298421_products`
--

CREATE TABLE `archive_1533298421_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `archive_1533299013_products`
--

CREATE TABLE `archive_1533299013_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Структура таблицы `products`
--

CREATE TABLE `products` (
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
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `image`, `name`, `toplivo`, `power`, `voltage`, `abp`, `performance`, `link`, `price`, `price_sale`) VALUES
(2754, 'generatorgenese-standart-otkrytaya_19.jpg', 'Дизельный генератор Genese D8', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8/', '220 000 руб.', '220 000 руб.'),
(2755, 'generatorgenese-standart-otkrytaya_19.jpg', 'Дизельный генератор Genese D8 с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-s-avr/', '259 750 руб.', '259 750 руб.'),
(2756, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_17.jpg', 'Дизельный генератор Genese D8 в кожухе', 'газ     ', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-kojuhe/', '280 000 руб.', '280 000 руб.'),
(2757, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_17.jpg', 'Дизельный генератор Genese D8 в кожухе с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-kojuhe-s-avr/', '319 750 руб.', '319 750 руб.'),
(2758, 'generatorkont-erbk-1_211.jpg', 'Дизельный генератор Genese D8 в контейнере', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-konteynere/', '511 900 руб.', '511 900 руб.'),
(2759, 'generatorkont-erbk-1_216.jpg', 'Дизельный генератор Genese D8 в контейнере с АВР', 'бензин', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d8-v-konteynere-s-avr/', '551 650 руб.', '551 650 руб.'),
(2760, 'generatorgenese-standart-otkrytaya_20.jpg', 'Дизельный генератор Genese D12', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12/', '240 000 руб.', '240 000 руб.'),
(2761, 'generatorgenese-standart-otkrytaya_20.jpg', 'Дизельный генератор Genese D12 с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-s-avr/', '279 750 руб.', '279 750 руб.'),
(2762, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_18.jpg', 'Дизельный генератор Genese D12 в кожухе', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-kojuhe/', '310 000 руб.', '310 000 руб.'),
(2763, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_18.jpg', 'Дизельный генератор Genese D12 в кожухе с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-kojuhe-s-avr/', '349 750 руб.', '349 750 руб.'),
(2764, 'generatorkont-erbk-1_212.jpg', 'Дизельный генератор Genese D12 в контейнере', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-konteynere/', '531 900 руб.', '531 900 руб.'),
(2765, 'generatorkont-erbk-1_217.jpg', 'Дизельный генератор Genese D12 в контейнере с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d12-v-konteynere-s-avr/', '571 650 руб.', '571 650 руб.'),
(2766, 'generatorgenese-standart-otkrytaya_21.jpg', 'Дизельный генератор Genese D16', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16/', '250 000 руб.', '250 000 руб.'),
(2767, 'generatorgenese-standart-otkrytaya_21.jpg', 'Дизельный генератор Genese D16 с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-s-avr/', '289 750 руб.', '289 750 руб.'),
(2768, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_19.jpg', 'Дизельный генератор Genese D16 в кожухе', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-kojuhe/', '365 000 руб.', '365 000 руб.'),
(2769, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_19.jpg', 'Дизельный генератор Genese D16 в кожухе с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-kojuhe-s-avr/', '404 750 руб.', '404 750 руб.'),
(2770, 'generatorkont-erbk-1_213.jpg', 'Дизельный генератор Genese D16 в контейнере', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-konteynere/', '541 900 руб.', '541 900 руб.'),
(2771, 'generatorkont-erbk-1_218.jpg', 'Дизельный генератор Genese D16 в контейнере с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d16-v-konteynere-s-avr/', '581 650 руб.', '581 650 руб.'),
(2772, 'generatorgenese-standart-otkrytaya_22.jpg', 'Дизельный генератор Genese D20', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20/', '290 000 руб.', '290 000 руб.'),
(2773, 'generatorgenese-standart-otkrytaya_22.jpg', 'Дизельный генератор Genese D20 с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-s-avr/', '329 750 руб.', '329 750 руб.'),
(2774, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_20.jpg', 'Дизельный генератор Genese D20 в кожухе', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-kojuhe/', '420 000 руб.', '420 000 руб.'),
(2775, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_20.jpg', 'Дизельный генератор Genese D20 в кожухе с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-kojuhe-s-avr/', '459 750 руб.', '459 750 руб.'),
(2776, 'generatorkont-erbk-1_214.jpg', 'Дизельный генератор Genese D20 в контейнере', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-konteynere/', '581 900 руб.', '581 900 руб.'),
(2777, 'generatorkont-erbk-1_219.jpg', 'Дизельный генератор Genese D20 в контейнере с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d20-v-konteynere-s-avr/', '621 650 руб.', '621 650 руб.'),
(2778, 'generatorgenese-standart-otkrytaya_23.jpg', 'Дизельный генератор Genese D30', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30/', '360 000 руб.', '360 000 руб.'),
(2779, 'generatorgenese-standart-otkrytaya_23.jpg', 'Дизельный генератор Genese D30 с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-s-avr/', '399 750 руб.', '399 750 руб.'),
(2780, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_21.jpg', 'Дизельный генератор Genese D30 в кожухе', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-kojuhe/', '490 000 руб.', '490 000 руб.'),
(2781, 'generatorgenese-standart-v-kozhukhe-ot10kvt-4_21.jpg', 'Дизельный генератор Genese D30 в кожухе с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-kojuhe-s-avr/', '529 750 руб.', '529 750 руб.'),
(2782, 'generatorkont-erbk-1_215.jpg', 'Дизельный генератор Genese D30 в контейнере', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-konteynere/', '651 900 руб.', '651 900 руб.'),
(2783, 'generatorkont-erbk-1_220.jpg', 'Дизельный генератор Genese D30 в контейнере с АВР', 'дизель', '8.8 кВт                                                                                    (11 кВА)', '230/400 В', 'нет', 'открытое', 'https://www.sklad-generator.ru/elektrostancii/genese/d30-v-konteynere-s-avr/', '691 650 руб.', '691 650 руб.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `archive_1533298421_products`
--
ALTER TABLE `archive_1533298421_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `archive_1533299013_products`
--
ALTER TABLE `archive_1533299013_products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `archive_1533298421_products`
--
ALTER TABLE `archive_1533298421_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `archive_1533299013_products`
--
ALTER TABLE `archive_1533299013_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2784;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
