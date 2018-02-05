-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2018. Feb 05. 12:42
-- Kiszolgáló verziója: 5.7.19
-- PHP verzió: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `baseball`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `champions`
--

DROP TABLE IF EXISTS `champions`;
CREATE TABLE IF NOT EXISTS `champions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year_of_winning` int(11) NOT NULL,
  `flag` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `champions`
--

INSERT INTO `champions` (`id`, `year_of_winning`, `flag`, `country_name`) VALUES
(1, 2017, 'et.png', 'Etiópia'),
(2, 2018, 'lk.png', 'Srí Lanka'),
(3, 2019, 'tg.png', 'Togo'),
(4, 2020, 'cu.png', 'Kuba'),
(5, 2021, 'jo.png', 'Jordánia'),
(6, 2022, 'bb.png', 'Barbados'),
(7, 2023, 'fm.png', 'Mikronézia'),
(8, 2024, 'tt.png', 'Trinidád és Tobago'),
(9, 2025, 'gw.png', 'Bissau-Guinea'),
(10, 2026, 'dk.png', 'Dánia'),
(11, 2027, 'jm.png', 'Jamaica'),
(12, 2028, 'gw.png', 'Bissau-Guinea'),
(13, 2029, 'ni.png', 'Nicaragua'),
(14, 2030, 'jo.png', 'Jordánia'),
(15, 2031, 'by.png', 'Fehéroroszország'),
(16, 2032, 'kz.png', 'Kazahsztán'),
(17, 2033, 'ir.png', 'Irán'),
(18, 2034, 'fj.png', 'Fidzsi-szigetek'),
(19, 2035, 'ks.png', 'Koszovó');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `continents`
--

DROP TABLE IF EXISTS `continents`;
CREATE TABLE IF NOT EXISTS `continents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gold_medals` int(11) NOT NULL,
  `silver_medals` int(11) NOT NULL,
  `bronze_medals` int(11) NOT NULL,
  `total_medals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `continents`
--

INSERT INTO `continents` (`id`, `continent_name`, `gold_medals`, `silver_medals`, `bronze_medals`, `total_medals`) VALUES
(1, 'Afrika', 4, 7, 4, 15),
(2, 'Amerika', 5, 2, 3, 10),
(3, 'Ázsia', 5, 3, 4, 12),
(4, 'Európa', 3, 2, 6, 11),
(5, 'Óceánia', 2, 5, 2, 9);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `continent_participation`
--

DROP TABLE IF EXISTS `continent_participation`;
CREATE TABLE IF NOT EXISTS `continent_participation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `continent_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_countries` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `continent_participation`
--

INSERT INTO `continent_participation` (`id`, `continent_name`, `number_of_countries`) VALUES
(1, 'Afrika', 24),
(2, 'Amerika', 22),
(3, 'Ázsia', 24),
(4, 'Európa', 26),
(5, 'Óceánia', 13);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `medal_table`
--

DROP TABLE IF EXISTS `medal_table`;
CREATE TABLE IF NOT EXISTS `medal_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `gold_medals` int(11) NOT NULL,
  `silver_medals` int(11) NOT NULL,
  `bronze_medals` int(11) NOT NULL,
  `total_medals` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `medal_table`
--

INSERT INTO `medal_table` (`id`, `flag`, `country_name`, `gold_medals`, `silver_medals`, `bronze_medals`, `total_medals`) VALUES
(1, 'et.png', 'Etiópia', 1, 0, 0, 1),
(2, 'lk.png', 'Srí Lanka', 1, 1, 0, 2),
(3, 'bb.png', 'Barbados', 1, 1, 1, 3),
(4, 'ba.png', 'Bosznia és Hercegovina', 0, 1, 1, 2),
(5, 'fm.png', 'Mikronézia', 1, 0, 1, 2),
(6, 'tg.png', 'Togo', 1, 0, 0, 1),
(7, 'pw.png', 'Palau', 0, 1, 0, 1),
(8, 'sn.png', 'Szenegál', 0, 1, 1, 2),
(9, 'cu.png', 'Kuba', 1, 1, 0, 2),
(10, 'jo.png', 'Jordánia', 2, 0, 0, 2),
(11, 'lv.png', 'Lettország', 0, 1, 0, 1),
(12, 'py.png', 'Paraguay', 0, 0, 1, 1),
(13, 'zm.png', 'Zambia', 0, 1, 1, 2),
(14, 'bn.png', 'Brunei', 0, 0, 1, 1),
(15, 'sc.png', 'Seychelle-szigetek', 0, 1, 2, 3),
(16, 'tt.png', 'Trinidád és Tobago', 1, 0, 0, 1),
(17, 'gw.png', 'Bissau-Guinea', 2, 0, 0, 2),
(18, 'ge.png', 'Grúzia', 0, 1, 0, 1),
(19, 'to.png', 'Tonga', 0, 1, 1, 2),
(20, 'dk.png', 'Dánia', 1, 0, 1, 2),
(21, 'jm.png', 'Jamaica', 1, 0, 0, 1),
(22, 'nr.png', 'Nauru', 0, 1, 0, 1),
(23, 'mo.png', 'Makaó', 0, 1, 1, 2),
(24, 'sb.png', 'Salamon-szigetek', 0, 2, 0, 2),
(25, 'ni.png', 'Nicaragua', 1, 0, 0, 1),
(26, 'by.png', 'Fehéroroszország', 1, 0, 1, 2),
(27, 'cv.png', 'Zöld-foki köztársaság', 0, 1, 0, 1),
(28, 'me.png', 'Montenegró', 0, 0, 2, 2),
(29, 'bj.png', 'Benin', 0, 1, 0, 1),
(30, 'th.png', 'Thaiföld', 0, 0, 1, 1),
(31, 'kz.png', 'Kazahsztán', 1, 0, 1, 2),
(32, 'tn.png', 'Tunézia', 0, 1, 0, 1),
(33, 'ir.png', 'Irán', 1, 0, 0, 1),
(34, 'bs.png', 'Bahama-szigetek', 0, 0, 1, 1),
(35, 'fj.png', 'Fidzsi-szigetek', 1, 0, 0, 1),
(36, 'ng.png', 'Nigéria', 0, 1, 0, 1),
(37, 'ks.png', 'Koszovó', 1, 0, 0, 1),
(38, 'nl.png', 'Hollandia', 0, 0, 1, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medal_id` int(11) DEFAULT NULL,
  `flag` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_participations` int(11) NOT NULL,
  `participating_years` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `medal_id` (`medal_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `participation`
--

INSERT INTO `participation` (`id`, `medal_id`, `flag`, `country_name`, `number_of_participations`, `participating_years`) VALUES
(1, NULL, 'al.png', 'Albánia', 1, '2017'),
(2, 1, 'et.png', 'Etiópia', 2, '2017, 2018'),
(3, NULL, 'lr.png', 'Libéria', 2, '2017, 2018'),
(4, NULL, 'dj.png', 'Djibouti', 2, '2017, 2018'),
(5, 2, 'lk.png', 'Srí Lanka', 4, '2017, 2018, 2019, 2020'),
(6, NULL, 'sv.png', 'El Salvador', 2, '2017, 2019'),
(7, NULL, 'sk.png', 'Szlovákia', 2, '2017, 2034'),
(8, NULL, 'sa.png', 'Szaud-Arábia', 1, '2017'),
(9, 9, 'cu.png', 'Kuba', 10, '2017, 2018, 2019, 2020, 2021, 2022, 2031, 2032, 2033, 2034'),
(10, NULL, 'hu.png', 'Magyarország', 1, '2017'),
(11, NULL, 'kh.png', 'Kambodzsa', 2, '2017, 2018'),
(12, 3, 'bb.png', 'Barbados', 9, '2017, 2018, 2019, 2020, 2022, 2023, 2024, 2025, 2026'),
(13, 5, 'fm.png', 'Mikronézia', 5, '2017, 2018, 2019, 2023, 2024'),
(14, NULL, 'vu.png', 'Vanuatu', 2, '2017, 2031'),
(15, NULL, 'pg.png', 'Pápua Új-Guinea', 4, '2017, 2028, 2029, 2030'),
(16, NULL, 'mh.png', 'Marshall-szigetek', 4, '2017, 2024, 2025, 2033'),
(17, NULL, 'mm.png', 'Mianmar', 1, '2018'),
(18, NULL, 'va.png', 'Vatikánváros', 4, '2018, 2023, 2024, 2025'),
(19, 4, 'ba.png', 'Bosznia és Hercegovina', 5, '2018, 2019, 2020, 2021, 2026'),
(20, NULL, 'ec.png', 'Ecuador', 2, '2018, 2028'),
(21, NULL, 'rs.png', 'Szerbia', 1, '2018'),
(22, 24, 'sb.png', 'Salamon-szigetek', 9, '2018, 2019, 2020, 2021, 2022, 2028, 2029, 2030, 2031'),
(23, 7, 'pw.png', 'Palau', 3, '2018, 2019, 2020'),
(24, 33, 'ir.png', 'Irán', 4, '2018, 2019, 2033, 2034'),
(25, NULL, 'tl.png', 'Kelet-Timor', 2, '2019, 2020'),
(26, 29, 'bj.png', 'Benin', 4, '2019, 2030, 2031, 2032'),
(27, NULL, 'bg.png', 'Bulgária', 3, '2019, 2020, 2032'),
(28, NULL, 'li.png', 'Liechtenstein', 1, '2019'),
(29, 6, 'tg.png', 'Togo', 3, '2019, 2020, 2021'),
(30, 8, 'sn.png', 'Szenegál', 4, '2019, 2020, 2021, 2022'),
(31, NULL, 'ga.png', 'Gabon', 1, '2019'),
(32, NULL, 'cl.png', 'Chile', 1, '2020'),
(33, 11, 'lv.png', 'Lettország', 3, '2020, 2021, 2022'),
(34, NULL, 'mg.png', 'Madagaszkár', 4, '2020, 2024, 2025, 2035'),
(35, 14, 'bn.png', 'Brunei', 5, '2020, 2021, 2022, 2023, 2029'),
(36, NULL, 'ws.png', 'Szamoa', 9, '2020, 2021, 2022, 2023, 2026, 2027, 2031, 2032, 2033'),
(37, NULL, 'mk.png', 'Macedónia', 2, '2020, 2021'),
(38, 12, 'py.png', 'Paraguay', 2, '2021, 2022'),
(39, NULL, 'pa.png', 'Panama', 1, '2021'),
(40, 19, 'to.png', 'Tonga', 11, '2021, 2022, 2023, 2024, 2025, 2026, 2027, 2032, 2033, 2034, 2035'),
(41, NULL, 'ml.png', 'Mali', 3, '2021, 2033, 2034'),
(42, NULL, 'bh.png', 'Bahrain', 4, '2021, 2022, 2023, 2024'),
(43, NULL, 'cn.png', 'Kína', 6, '2021, 2022, 2023, 2028, 2029, 2030'),
(44, 10, 'jo.png', 'Jordánia', 5, '2021, 2022, 2023, 2030, 2031'),
(45, NULL, 'ee.png', 'Észtország', 2, '2022, 2023'),
(46, NULL, 'gh.png', 'Ghána', 1, '2022'),
(47, 26, 'by.png', 'Fehéroroszország', 6, '2022, 2029, 2030, 2031, 2032, 2033'),
(48, 13, 'zm.png', 'Zambia', 3, '2022, 2023, 2024'),
(49, NULL, 'pr.png', 'Puerto Rico', 2, '2023, 2031'),
(50, 15, 'sc.png', 'Seychelle-szigetek', 5, '2023, 2024, 2025, 2026, 2027'),
(51, 16, 'tt.png', 'Trinidád és Tobago', 4, '2023, 2024, 2025, 2026'),
(52, NULL, 'cf.png', 'Közép-afrikai Köztársaság', 1, '2023'),
(53, NULL, 'fi.png', 'Finnország', 1, '2023'),
(54, 20, 'dk.png', 'Dánia', 6, '2024, 2025, 2026, 2027, 2028, 2029'),
(55, NULL, 'ca.png', 'Kanada', 3, '2024, 2025, 2035'),
(56, NULL, 'it.png', 'Olaszország', 2, '2024, 2025'),
(57, NULL, 'pk.png', 'Pakisztán', 1, '2024'),
(58, NULL, 'tr.png', 'Törökország', 2, '2024, 2025'),
(59, NULL, 'km.png', 'Comore-szigetek', 1, '2024'),
(60, NULL, 'la.png', 'Laos', 2, '2025, 2026'),
(61, 18, 'ge.png', 'Grúzia', 2, '2025, 2026'),
(62, 17, 'gw.png', 'Bissau-Guinea', 9, '2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032, 2033'),
(63, NULL, 'nz.png', 'Új-Zéland', 2, '2025, 2032'),
(64, NULL, 'mv.png', 'Maldív-szigetek', 1, '2025'),
(65, NULL, 'is.png', 'Izland', 1, '2026'),
(66, NULL, 'ye.png', 'Jemen', 3, '2026, 2027, 2028'),
(67, NULL, 'zw.png', 'Zimbabwe', 1, '2026'),
(68, NULL, 'mx.png', 'Mexikó', 1, '2026'),
(69, 22, 'nr.png', 'Nauru', 3, '2026, 2027, 2028'),
(70, 23, 'mo.png', 'Makaó', 6, '2026, 2027, 2028, 2033, 2034, 2035'),
(71, NULL, 'vn.png', 'Vietnám', 6, '2027, 2028, 2029, 2030, 2031, 2032'),
(72, NULL, 'gq.png', 'Egyenlítői Guinea', 1, '2027'),
(73, 21, 'jm.png', 'Jamaica', 2, '2027, 2028'),
(74, NULL, 'md.png', 'Moldova', 2, '2027, 2028'),
(75, NULL, 'ro.png', 'Románia', 2, '2027, 2028'),
(76, NULL, 've.png', 'Venezuela', 3, '2027, 2029, 2032'),
(77, NULL, 'dm.png', 'Dominika', 1, '2027'),
(78, NULL, 'ls.png', 'Lesotho', 1, '2027'),
(79, NULL, 'gd.png', 'Grenada', 1, '2028'),
(80, NULL, 'sd.png', 'Szudán', 2, '2028, 2029'),
(81, NULL, 'tz.png', 'Tanzánia', 2, '2028, 2029'),
(82, NULL, 'bt.png', 'Bhután', 1, '2029'),
(83, NULL, 'gt.png', 'Guatemala', 2, '2029, 2030'),
(84, NULL, 'mc.png', 'Monaco', 1, '2029'),
(85, 25, 'ni.png', 'Nicaragua', 3, '2029, 2030, 2031'),
(86, NULL, 'ki.png', 'Kiribati', 3, '2029, 2034, 2035'),
(87, NULL, 'ag.png', 'Antigua és Barbuda', 3, '2030, 2033, 2034'),
(88, 27, 'cv.png', 'Zöld-foki köztársaság', 2, '2030, 2031'),
(89, 37, 'ks.png', 'Koszovó', 3, '2030, 2031, 2035'),
(90, NULL, 'tv.png', 'Tuvalu', 1, '2030'),
(91, 28, 'me.png', 'Montenegró', 4, '2030, 2031, 2032, 2033'),
(92, NULL, 'lt.png', 'Litvánia', 1, '2030'),
(93, 30, 'th.png', 'Thaiföld', 2, '2031, 2032'),
(94, NULL, 'kp.png', 'Észak-Korea', 1, '2031'),
(95, 32, 'tn.png', 'Tunézia', 3, '2032, 2033, 2035'),
(96, 31, 'kz.png', 'Kazahsztán', 4, '2032, 2033, 2034, 2035'),
(97, 34, 'bs.png', 'Bahama-szigetek', 3, '2032, 2033, 2034'),
(98, NULL, 'kr.png', 'Dél-Korea', 1, '2032'),
(99, NULL, 'es.png', 'Spanyolország', 1, '2033'),
(100, NULL, 'uy.png', 'Uruguay', 3, '2033, 2034, 2035'),
(101, NULL, 'pt.png', 'Portugália', 2, '2034, 2035'),
(102, 36, 'ng.png', 'Nigéria', 2, '2034, 2035'),
(103, NULL, 'bw.png', 'Botswana', 1, '2034'),
(104, NULL, 'sm.png', 'San Marino', 1, '2034'),
(105, 35, 'fj.png', 'Fidzsi-szigetek', 2, '2034, 2035'),
(106, 38, 'nl.png', 'Hollandia', 1, '2035'),
(107, NULL, 'hk.png', 'Hong Kong', 1, '2035'),
(108, NULL, 'gy.png', 'Guyana', 1, '2035'),
(109, NULL, 'ht.png', 'Haiti', 1, '2035');

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `participation`
--
ALTER TABLE `participation`
  ADD CONSTRAINT `participation_ibfk_1` FOREIGN KEY (`medal_id`) REFERENCES `medal_table` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
