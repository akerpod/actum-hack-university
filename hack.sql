-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 19 2018 г., 11:55
-- Версия сервера: 5.7.19
-- Версия PHP: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hack`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cases`
--

DROP TABLE IF EXISTS `cases`;
CREATE TABLE IF NOT EXISTS `cases` (
  `id_case` int(10) NOT NULL AUTO_INCREMENT,
  `id_hack` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `company` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_case`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `cases`
--

INSERT INTO `cases` (`id_case`, `id_hack`, `description`, `company`) VALUES
(1, 1, 'Проблема: \r\n \r\nХакатоны, как формат обучения, решения прикладных задач и развлечения, становятся все более популярными и востребованными, как среди участников, так и среди компаний заказчиков. Но и стой и с другой стороны есть ряд проблем, которые необходимо решить. Для большинства компаний сейчас слишком дорогой порог входа, небольшой охват аудитории и узкая география. Для участников вне Москвы и СанктПетербурга ограничением служат большие транспортные расходы. В нашей стране много талантливых людей, которые хотели бы участвовать в хакатонах, но не имеют такой возможности из-за сильной удаленности их места жительства от места проведения большинства крупных и интересных хакатонов.  \r\n \r\nРешение:  \r\n \r\nСоздание интернет платформы, с помощью которой можно будет проводить как онлайн, так и смешанные (онлайн и оффлайн) хакатоны и упрощать организацию классических оффлайн хакатонов. Участники смогут принимать участие со всей страны, а компании смогут с меньшими затратами давать свои задачи большему количеству участников. \r\n \r\nОт Актум в рамках текущего хакатона предлагается 2 номинации с призовым фондом 100 тысяч рублей в каждой: \r\n \r\n1) Предложить решение по системе скоринга (рейтингования) отдельных участников и команд участвующих в хакатоне. Решение должно включать перечень необходимых данных для скоринга и алгоритм его проведения.  \r\n \r\n2) Предложить решение на основе IoT, BigData, AI, Blockchain и VR для автоматизации и улучшения проведения оффлайн, онлайн и смешанных хакатонов.  \r\n \r\nКритерии оценки: \r\n \r\n1) Креативность и новизна; 2) Реализуемость с точки зрения доступных технологий; 3) Стоимость и скорость реализации. \r\n \r\nПредставители лучшей команды будут приглашены на закрытую вечеринку ACTUM на яхте вечером 26-го мая в акватории Санкт-Петербурга. ', 'Actum'),
(2, 1, 'Найти информацию о человеке  \r\n \r\nПредоставьте ответ в виде программы (исходный код) и инструкций по установке и запуску. Программа должна корректно работать в Ubuntu 16.04/Windows 10 x64. Отдельно приложите инструкции по работе и формат входных и выходных данных.  Задача: программе даны структурированные данные о человеке, собранные в открытом доступе в сети. Задача сводится к тому, чтобы собрать остальные данные.  \r\n \r\nВозможные поля (должна быть возможность ввести и получить любое из указанных полей):   Фамилия   Имя   Отчество   Дата рождения   Город проживания   Номер телефона   Электронная почта   Место работы   Контекст (пример упоминания персоны в медиа)  \r\n \r\nСистема оценивания  \r\n \r\nДля начала работы имеются сведения по 5 любым из приведенных выше пунктов. Задача программы сводится к тому, чтобы найти оставшиеся. Победит автор программы, которая подберет максимальное количество ответов.  \r\n \r\nВы можете пропускать ответы на некоторые поля, если не знаете на них ответа. \r\n \r\nКоманда, которая предоставит лучшее решение данной задачи получит путёвки на образовательный интенсив, который пройдёт на острове Русский во Владивостоке 10-21 июля. Подробности по ссылке: https://ostrov.2035.university/ \r\nЗадачи ', 'Агентство Стратегических Инициатив'),
(3, 1, 'Создать своего цифрового двойника\r\nПредоставьте ответ в виде программы (исходный код) и инструкций по установке и\r\nзапуску. Программа должна корректно работать в Ubuntu 16.04/Windows 10 x64.\r\nОтдельно приложите инструкции по работе и формат входных и выходных данных.\r\nЗадача: разработать программу, работающую без подключения к сети, которая может давать\r\nна заданные вопросы ответы, максимально приближенные по смыслу к ответам ее автора.\r\nНа вопросы членов жюри ответ дает сначала программа, затем – человек. Если ответ\r\nпрограммы совпадает с ответом человека, начисляются баллы.\r\nСинтаксис вопросов\r\nВопрос состоит из одного предложения и может быть отнесен к следующим типам:\r\n“Сколько?” численные вопросы, связанные со знанием некоторых общеизвестных\r\nфактов. “Сколько сантиметров в метре?”\r\n“Как ты относишься” – необходимость качественной оценки объекта или субъекта. “–\r\nКак ты относишься к медицине? – Хорошо”, “– Как ты относишься к войне? – Плохо”\r\n“Зачем” – восстановление причины. “Зачем нужно учиться?”\r\nОсобенности тестирования:\r\nЧеловек и программа могут получать вопросы с разными формулировками, но\r\nблизкие по смыслу: “Для чего нужно учиться?”, “Зачем нужно учиться?” и пр.\r\nОтвет программы должен быть получен в течение 60 секунд. Ответ может содержать\r\nдо 3 предложений. Допускается несогласование некоторых частей предложения или\r\nслов между собой, но трактовка смысла высказывания остается за судьями.\r\nПосле тестирования программы автор получает аналогичный список вопросов и также\r\nдолжен дать на них ответ в аналогичном формате.\r\n\r\nКоманда, которая предоставит лучшее решение данной задачи\r\nполучит путёвки на образовательный интенсив, который пройдёт\r\nна острове Русский во Владивостоке 10-21 июля. Подробности по\r\nссылке: https://ostrov.2035.university/', 'Агентство\r\nСтратегических\r\nИнициатив');

-- --------------------------------------------------------

--
-- Структура таблицы `commands`
--

DROP TABLE IF EXISTS `commands`;
CREATE TABLE IF NOT EXISTS `commands` (
  `id_command` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date_of_formation` date NOT NULL,
  PRIMARY KEY (`id_command`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `commands`
--

INSERT INTO `commands` (`id_command`, `name`, `date_of_formation`) VALUES
(1, '6 КУБИКОВ', '2018-05-19');

-- --------------------------------------------------------

--
-- Структура таблицы `hacatons`
--

DROP TABLE IF EXISTS `hacatons`;
CREATE TABLE IF NOT EXISTS `hacatons` (
  `id_hack` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `date` date NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_hack`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `hacatons`
--

INSERT INTO `hacatons` (`id_hack`, `name`, `description`, `date`, `img`, `city`) VALUES
(1, 'Actum Digital Hack', 'В преддверии Петербургского международного экономического форума сообщество ACTUM проведёт в Санкт-Петербурге хакатон по созданию решений на стыке цифровых технологий и существующих отраслей экономики. С 18 по 20 мая приглашаем  междисциплинарные команды в Санкт-Петербург', '2018-05-22', 'images/hackatons/actum.jpg', 'Санкт-Петербург'),
(2, 'Blockchain Hacaton', 'Создай свой блокчейн-проект за 36 часов, познакомься с 50+ блокчейн-специалистами, выиграй призовой фонд 200 тыс. руб.\r\n\r\nХакатон для разработчиков блокчейн-проектов\r\n120+ участников\r\n\r\n31 марта - 1 апреля 2018\r\n(с 10 утра субботы до 20.00 воскресенья)\r\n\r\nКрасный Октябрь, Bers Loft м. Кропоткинская\r\nг.Москва, Берсеневская набережная 2с1', '2018-05-31', 'images/hackatons/actum.jpg', 'Москва');

-- --------------------------------------------------------

--
-- Структура таблицы `points`
--

DROP TABLE IF EXISTS `points`;
CREATE TABLE IF NOT EXISTS `points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(10) NOT NULL,
  `id_role` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `status` int(10) NOT NULL DEFAULT '10',
  `auth_key` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `username`, `email`, `role`, `status`, `auth_key`, `password_hash`, `created_at`, `updated_at`) VALUES
(1, 'aleks', 'aleks@yandex.ru', 'user', 10, 'o_YOSYSMXXjG_UjgbVDgGXGnFXZ0PVeI', '$2y$13$SWIvPv2726DKzIR04p3UbuNnEV/GK01oLrLrgU2OYmWQoddGpkN5i', 1526689341, 1526689341),
(2, 'vvko', 'asdasdasd@mail.ru', 'user', 10, '_69r6TQbgkJOJwO-K2O8M69B7ap0Ttmu', '$2y$13$r1eM3d0.PK496PBjCU948.SCIgk030quwh3d6iGqe/Nfdjes2j6Em', 1526689639, 1526689639),
(3, 'Lobzik357', 'dr.leo-pard@yandex.ru', 'user', 10, 'YXO_w4w2oTnq6b0DEbZZuWD6vHIqM97Z', '$2y$13$1lYgAvM3AMiVoVFsotfGoeg.bLJhRccu7j8ZOgyuh54WMg8j1f7bq', 1526690494, 1526690494);

-- --------------------------------------------------------

--
-- Структура таблицы `user_hack`
--

DROP TABLE IF EXISTS `user_hack`;
CREATE TABLE IF NOT EXISTS `user_hack` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_hack` int(11) NOT NULL,
  `id_comand` int(11) DEFAULT NULL,
  `winner` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `user_hack`
--

INSERT INTO `user_hack` (`id`, `id_user`, `id_hack`, `id_comand`, `winner`) VALUES
(1, 2, 1, 1, -1),
(2, 1, 1, NULL, -1),
(3, 2, 2, NULL, -1);

-- --------------------------------------------------------

--
-- Структура таблицы `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `about` text NOT NULL,
  `sex` int(1) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
