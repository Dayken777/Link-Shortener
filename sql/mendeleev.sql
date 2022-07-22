SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
-- База данных: `mendeleev`
--
-- --------------------------------------------------------
--
-- Структура таблицы `url-shortener`
--
CREATE TABLE `url-shortener` (
  `id` int NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `short_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `url-shortener`
--
ALTER TABLE `url-shortener`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT для сохранённых таблиц
--
--
-- AUTO_INCREMENT для таблицы `url-shortener`
--
ALTER TABLE `url-shortener`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;
COMMIT;

