-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2017. Dec 15. 21:30
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(18, 2034, 'fj.png', 'Fidzsi-szigetek');

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
(3, 'Ázsia', 5, 2, 4, 11),
(4, 'Európa', 2, 2, 5, 9),
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
(2, 'Amerika', 20),
(3, 'Ázsia', 23),
(4, 'Európa', 25),
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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(23, 'mo.png', 'Makaó', 0, 0, 1, 1),
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
(36, 'ng.png', 'Nigéria', 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `participation`
--

DROP TABLE IF EXISTS `participation`;
CREATE TABLE IF NOT EXISTS `participation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flag` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_participations` int(11) NOT NULL,
  `participating_years` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `participation`
--

INSERT INTO `participation` (`id`, `flag`, `country_name`, `number_of_participations`, `participating_years`) VALUES
(1, 'al.png', 'Albánia', 1, '2017'),
(2, 'et.png', 'Etiópia', 2, '2017, 2018'),
(3, 'lr.png', 'Libéria', 2, '2017, 2018'),
(4, 'dj.png', 'Djibouti', 2, '2017, 2018'),
(5, 'lk.png', 'Srí Lanka', 4, '2017, 2018, 2019, 2020'),
(6, 'sv.png', 'El Salvador', 2, '2017, 2019'),
(7, 'sk.png', 'Szlovákia', 2, '2017, 2034'),
(8, 'sa.png', 'Szaud-Arábia', 1, '2017'),
(9, 'cu.png', 'Kuba', 10, '2017, 2018, 2019, 2020, 2021, 2022, 2031, 2032, 2033, 2034'),
(10, 'hu.png', 'Magyarország', 1, '2017'),
(11, 'kh.png', 'Kambodzsa', 2, '2017, 2018'),
(12, 'bb.png', 'Barbados', 9, '2017, 2018, 2019, 2020, 2022, 2023, 2024, 2025, 2026'),
(13, 'fm.png', 'Mikronézia', 5, '2017, 2018, 2019, 2023, 2024'),
(14, 'vu.png', 'Vanuatu', 2, '2017, 2031'),
(15, 'pg.png', 'Pápua Új-Guinea', 4, '2017, 2028, 2029, 2030'),
(16, 'mh.png', 'Marshall-szigetek', 4, '2017, 2024, 2025, 2033'),
(17, 'mm.png', 'Mianmar', 1, '2018'),
(18, 'va.png', 'Vatikánváros', 4, '2018, 2023, 2024, 2025'),
(19, 'ba.png', 'Bosznia és Hercegovina', 5, '2018, 2019, 2020, 2021, 2026'),
(20, 'ec.png', 'Ecuador', 2, '2018, 2028'),
(21, 'rs.png', 'Szerbia', 1, '2018'),
(22, 'sb.png', 'Salamon-szigetek', 9, '2018, 2019, 2020, 2021, 2022, 2028, 2029, 2030, 2031'),
(23, 'pw.png', 'Palau', 3, '2018, 2019, 2020'),
(24, 'ir.png', 'Irán', 4, '2018, 2019, 2033, 2034'),
(25, 'tl.png', 'Kelet-Timor', 2, '2019, 2020'),
(26, 'bj.png', 'Benin', 4, '2019, 2030, 2031, 2032'),
(27, 'bg.png', 'Bulgária', 3, '2019, 2020, 2032'),
(28, 'li.png', 'Liechtenstein', 1, '2019'),
(29, 'tg.png', 'Togo', 3, '2019, 2020, 2021'),
(30, 'sn.png', 'Szenegál', 4, '2019, 2020, 2021, 2022'),
(31, 'ga.png', 'Gabon', 1, '2019'),
(32, 'cl.png', 'Chile', 1, '2020'),
(33, 'lv.png', 'Lettország', 3, '2020, 2021, 2022'),
(34, 'mg.png', 'Madagaszkár', 3, '2020, 2024, 2025'),
(35, 'bn.png', 'Brunei', 5, '2020, 2021, 2022, 2023, 2029'),
(36, 'ws.png', 'Szamoa', 9, '2020, 2021, 2022, 2023, 2026, 2027, 2031, 2032, 2033'),
(37, 'mk.png', 'Macedónia', 2, '2020, 2021'),
(38, 'py.png', 'Paraguay', 2, '2021, 2022'),
(39, 'pa.png', 'Panama', 1, '2021'),
(40, 'to.png', 'Tonga', 10, '2021, 2022, 2023, 2024, 2025, 2026, 2027, 2032, 2033, 2034'),
(41, 'ml.png', 'Mali', 3, '2021, 2033, 2034'),
(42, 'bh.png', 'Bahrain', 4, '2021, 2022, 2023, 2024'),
(43, 'cn.png', 'Kína', 6, '2021, 2022, 2023, 2028, 2029, 2030'),
(44, 'jo.png', 'Jordánia', 5, '2021, 2022, 2023, 2030, 2031'),
(45, 'ee.png', 'Észtország', 2, '2022, 2023'),
(46, 'gh.png', 'Ghána', 1, '2022'),
(47, 'by.png', 'Fehéroroszország', 6, '2022, 2029, 2030, 2031, 2032, 2033'),
(48, 'zm.png', 'Zambia', 3, '2022, 2023, 2024'),
(49, 'pr.png', 'Puerto Rico', 2, '2023, 2031'),
(50, 'sc.png', 'Seychelle-szigetek', 5, '2023, 2024, 2025, 2026, 2027'),
(51, 'tt.png', 'Trinidád és Tobago', 4, '2023, 2024, 2025, 2026'),
(52, 'cf.png', 'Közép-afrikai Köztársaság', 1, '2023'),
(53, 'fi.png', 'Finnország', 1, '2023'),
(54, 'dk.png', 'Dánia', 6, '2024, 2025, 2026, 2027, 2028, 2029'),
(55, 'ca.png', 'Kanada', 2, '2024, 2025'),
(56, 'it.png', 'Olaszország', 2, '2024, 2025'),
(57, 'pk.png', 'Pakisztán', 1, '2024'),
(58, 'tr.png', 'Törökország', 2, '2024, 2025'),
(59, 'km.png', 'Comore-szigetek', 1, '2024'),
(60, 'la.png', 'Laos', 2, '2025, 2026'),
(61, 'ge.png', 'Grúzia', 2, '2025, 2026'),
(62, 'gw.png', 'Bissau-Guinea', 9, '2025, 2026, 2027, 2028, 2029, 2030, 2031, 2032, 2033'),
(63, 'nz.png', 'Új-Zéland', 2, '2025, 2032'),
(64, 'mv.png', 'Maldív-szigetek', 1, '2025'),
(65, 'is.png', 'Izland', 1, '2026'),
(66, 'ye.png', 'Jemen', 3, '2026, 2027, 2028'),
(67, 'zw.png', 'Zimbabwe', 1, '2026'),
(68, 'mx.png', 'Mexikó', 1, '2026'),
(69, 'nr.png', 'Nauru', 3, '2026, 2027, 2028'),
(70, 'mo.png', 'Makaó', 5, '2026, 2027, 2028, 2033, 2034'),
(71, 'vn.png', 'Vietnám', 6, '2027, 2028, 2029, 2030, 2031, 2032'),
(72, 'gq.png', 'Egyenlítői Guinea', 1, '2027'),
(73, 'jm.png', 'Jamaica', 2, '2027, 2028'),
(74, 'md.png', 'Moldova', 2, '2027, 2028'),
(75, 'ro.png', 'Románia', 2, '2027, 2028'),
(76, 've.png', 'Venezuela', 3, '2027, 2029, 2032'),
(77, 'dm.png', 'Dominika', 1, '2027'),
(78, 'ls.png', 'Lesotho', 1, '2027'),
(79, 'gd.png', 'Grenada', 1, '2028'),
(80, 'sd.png', 'Szudán', 2, '2028, 2029'),
(81, 'tz.png', 'Tanzánia', 2, '2028, 2029'),
(82, 'bt.png', 'Bhután', 1, '2029'),
(83, 'gt.png', 'Guatemala', 2, '2029, 2030'),
(84, 'mc.png', 'Monaco', 1, '2029'),
(85, 'ni.png', 'Nicaragua', 3, '2029, 2030, 2031'),
(86, 'ki.png', 'Kiribati', 2, '2029, 2034'),
(87, 'ag.png', 'Antigua és Barbuda', 3, '2030, 2033, 2034'),
(88, 'cv.png', 'Zöld-foki köztársaság', 2, '2030, 2031'),
(89, 'ks.png', 'Koszovó', 2, '2030, 2031'),
(90, 'tv.png', 'Tuvalu', 1, '2030'),
(91, 'me.png', 'Montenegró', 4, '2030, 2031, 2032, 2033'),
(92, 'lt.png', 'Litvánia', 1, '2030'),
(93, 'th.png', 'Thaiföld', 2, '2031, 2032'),
(94, 'kp.png', 'Észak-Korea', 1, '2031'),
(95, 'tn.png', 'Tunézia', 2, '2032, 2033'),
(96, 'kz.png', 'Kazahsztán', 3, '2032, 2033, 2034'),
(97, 'bs.png', 'Bahama-szigetek', 3, '2032, 2033, 2034'),
(98, 'kr.png', 'Dél-Korea', 1, '2032'),
(99, 'es.png', 'Spanyolország', 1, '2033'),
(100, 'uy.png', 'Uruguay', 2, '2033, 2034'),
(101, 'pt.png', 'Portugália', 1, '2034'),
(102, 'ng.png', 'Nigéria', 1, '2034'),
(103, 'bw.png', 'Botswana', 1, '2034'),
(104, 'sm.png', 'San Marino', 1, '2034'),
(105, 'fj.png', 'Fidzsi-szigetek', 1, '2034');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
