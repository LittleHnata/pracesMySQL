-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 13, 2015 at 04:38 PM
-- Server version: 5.1.57
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ita12chladekj`
--

-- --------------------------------------------------------

--
-- Table structure for table `asw_inzerat`
--

CREATE TABLE IF NOT EXISTS `asw_inzerat` (
  `id_i` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nadpis_inzeratu` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `text_inzeratu` varchar(300) COLLATE utf8_czech_ci NOT NULL,
  `obrazek` varchar(300) COLLATE utf8_czech_ci NOT NULL,
  `datum_vlozeni` date NOT NULL,
  `cena` varchar(30) COLLATE utf8_czech_ci NOT NULL,
  `typ` enum('nabídka','poptávka') COLLATE utf8_czech_ci NOT NULL,
  `id_kategorie` int(11) NOT NULL,
  PRIMARY KEY (`id_i`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `asw_inzerat`
--

INSERT INTO `asw_inzerat` (`id_i`, `nadpis_inzeratu`, `text_inzeratu`, `obrazek`, `datum_vlozeni`, `cena`, `typ`, `id_kategorie`) VALUES
(2, 'koupim nabytek', 'nejlepe z masivu cena neni dulezita', '', '2015-03-22', '2000', 'poptávka', 1),
(3, 'prodam nabytek', 'Prodam masivní nábytek', '', '2015-03-17', '1500', 'nabídka', 1),
(4, 'prodam nabytek', 'Prodam masivní nábytek', '', '2015-03-26', '1500', 'nabídka', 1),
(6, 'pppp', 'pppppppp', '', '2015-03-11', '120', 'nabídka', 2),
(19, 'neco pro skolu', 'koupim neco pro skolu ', '', '0000-00-00', 'cena dohodou', 'nabídka', 3),
(18, 'neco pro skolu', 'koupim neco pro skolu ', '', '0000-00-00', 'cena dohodou', 'nabídka', 3),
(17, 'neco pro skolu', 'koupim neco pro skolu ', '', '0000-00-00', 'cena dohodou', 'nabídka', 3),
(20, 'neco pro skolu', 'koupim neco pro skolu ', '', '0000-00-00', 'cena dohodou', 'nabídka', 3),
(21, 'dadsdasd', 'dasdasdasdas', '/srv/www/htdocs/ita12/ita12chladekj/asw/3/img/Chrysanthemum.jpg', '0000-00-00', 'dasdasdasdas', 'poptávka', 2),
(22, 'fsdfesdfsdf', 'sdfsdfsdfsd', '/srv/www/htdocs/ita12/ita12chladekj/asw/3/img/Hydrangeas.jpg', '0000-00-00', 'fsdfsdfsdfsdf', 'poptávka', 2),
(23, 'prodam fikus', 'prodam ficus, je stary 3 roky', '/srv/www/htdocs/ita12/ita12chladekj/asw/3/img/ficus.jpg', '2015-04-20', '205', 'nabídka', 7),
(24, 'květiny', 'prodam ficus, je stary 3 roky', '/srv/www/htdocs/ita12/ita12chladekj/asw/3/img/ficus.jpg', '2015-04-22', 'dohodou', 'nabídka', 7);
