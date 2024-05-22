-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 01:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mywebshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_bericht` text NOT NULL,
  `blog_maker` varchar(255) NOT NULL,
  `tijd_gemaakt` datetime DEFAULT current_timestamp(),
  `laatst_edit` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_bericht`, `blog_maker`, `tijd_gemaakt`, `laatst_edit`) VALUES
(1, 'WOW WOWd WOW WvOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW WOW ', 'Jessedddddddd', '2024-05-21 14:18:52', '2024-05-21 14:31:51'),
(2, 'hweyt', 'Jesse', '2024-05-21 14:38:42', '2024-05-21 14:38:42'),
(10, 'HALLLLLLLLLLLOO VALIDATIE PROOF LETTSGOO', 'PIET', '2024-05-22 11:51:07', '2024-05-22 11:51:07'),
(22, '&lt;script&gt;', 'Jesse', '2024-05-22 11:48:34', '2024-05-22 11:48:34'),
(33, '&gt;AWD&gt;AW', '2WDA2@', '2024-05-22 11:48:17', '2024-05-22 11:48:17'),
(34, 'dawda', 'HAIA', '2024-05-21 14:29:47', '2024-05-22 11:55:35'),
(232, 'Dit is het nieuwste bericht', 'Jesse', '2024-05-22 11:25:36', '2024-05-22 11:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `producten`
--

CREATE TABLE `producten` (
  `id` int(11) NOT NULL,
  `product_naam` varchar(255) NOT NULL,
  `product_prijs` varchar(255) NOT NULL,
  `product_bio` text NOT NULL,
  `product_kleinbio` text NOT NULL,
  `foto_1` varchar(255) NOT NULL,
  `foto_2` varchar(255) NOT NULL,
  `foto_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producten`
--

INSERT INTO `producten` (`id`, `product_naam`, `product_prijs`, `product_bio`, `product_kleinbio`, `foto_1`, `foto_2`, `foto_3`) VALUES
(1, 'Paard', '104.99', 'Dit is een paard en hij is heel blij en leuk.', 'Dit is een blij paardje', 'paard.png', '2paard.png', '3paard.png'),
(2, 'Kip', '4.99', 'Deze kip legt zilveren eieren. Alleen als je hem goed behandelt. Geef hem 1 high-five per 6 uur.', 'Deze kip legt zilveren eieren.', 'kip.png', '2kip.png', '3kip.png'),
(3, 'Koe', '259.99', 'Deze koe heeft de lekkerste melk in de wereld. Maar hij laat je hem alleen melken als je om de dag een leuke mop zegt.', 'Deze koe heeft de lekkerste melk in de wereld.', 'koe.png', '2koe.png', '3koe.png'),
(4, 'Paard 2', '80.50', 'Dit is de snelte paard van Europa. Zijn favoriete land is Spanje. Als hij in spanje zit dan rent hij het hardst. Rij een rondje op hem 1 keer per week om hem blij te houden.', 'Deze paard rent het hardst van ze allemaal.', 'paard2.png\r\n', '2paard2.png\r\n', '3paard2.png\r\n'),
(5, 'Kip 2', '5.99', 'Deze kip is heel bang voor mensen. Als je dichtbij komt dan vliegt hij weg. Hij vliegt hoger dan de wolken. Hij is niet bang voor je als je de kippendans doet elke keer wanneer je hem ziet.', 'Deze kip kan hoog vliegen.', 'kip2.png', '2kip2.png', '3kip2.png'),
(6, 'Kip 3', '5.50', 'Dit is een hele lekkere kip. Maar als je hem op eet dan word je verkouden.', 'Deze kip is heel lekker.', 'kip3.png\r\n', '2kip3.png\r\n', '3kip3.png\r\n'),
(7, 'Kikker', '2.99', 'Deze kikker kan heel hoog springen. Om precies te zijn 5 meter hoog.', 'Deze kikker kan heel hoog springen.', 'kikker.png', '2kikker.png', '3kikker.png'),
(8, 'Vogel', '10.00', 'Dit is een 3 jaar oude vogel. Hij is wel heel aardig. Voer 1 keer per dag een leuk gesprekje met hem.', 'Deze vogel is 3 jaar oud.', 'vogel.png', '2vogel.png', '3vogel.png'),
(9, 'Vogel 2', '315.00', 'Deze vogel is heel boos. Ze noemen hem ook wel de Angry Bird. Hij houdt niet van groene slechte varkens.', 'Deze vogel is heel boos.', 'vogel2.png', '2vogel2.png', '3vogel2.png'),
(10, 'Vogel 3', '13.50', 'Deze vogel is heel erg oud. 20 Jaar om precies te zijn. Ze houdt van slapen.', 'Deze vogel is 20 jaar oud.', 'vogel3.png', '2vogel3.png', '3vogel3.png'),
(11, 'Kat', '20.00', 'Deze kat kan er aardig uit zien maar dat is ze niet. Ze houdt neit van mensen en vooral niet van honden. Als je haar een slaapliedje zingt dat valt ze in slaap.', 'Deze kat is boos.', 'kat.png', '2kat.png', '3kat.png'),
(12, 'Hond', '35.00', 'Deze hond is niet een normale hond. Dit is een bescherm hond. Hij beschermt je tegen alle negatieve energie.', 'Deze hond beschermt jou.', 'hond.png', '2hond.png', '3hond.png'),
(13, 'Hond 2', '55.00', 'Deze hond poept veel. Geef hem een luier en verschoon hem om de dag.', 'Deze hond poept veel.', 'hond2.png', '2hond2.png', '3hond2.png'),
(14, 'Hond 3', '49.99', 'Dit is een hond gemaakt van ijs. Het ziet er heel erg echt uit maar dat is hij niet. Zet het in een koelkast zodat het niet smelt.', 'Deze hond is van ijs gemaakt.', 'hond3.png', '2hond3.png', '3hond3.png'),
(15, 'Hond 4', '999.99', 'Deze hond is heel goed in muziek maken. Hij heeft heel veel fans.', 'Deze Dogg is een goeie artiest.', 'hond4.png', '2hond4.png', '3hond4.png'),
(16, 'Varken', '150.00', 'Dit is een varken. Hij houdt van rollen in modder. Hij houdt heel erg van aardappelen dus geef hem 10 er per dag.', 'Dit is een varken.', 'varken.png', '2varken.png', '3varken.png'),
(17, 'Ei', '100.00', 'Niemand weet wat er in dit ei zit.', 'Mysterieus ei', 'ei.png', '2ei.png', '3ei.png'),
(18, 'Worm', '0.50', 'Dit is een worm. Hij is gevonden door Freek Fonk hemzelf. Hij komt uit Noord-Afrika.', 'Dit is een worm.', 'worm.png', '2worm.png', '3worm.png'),
(19, 'Olifant', '249.99', 'Tembo is heel bij en hij is heel erg cool, omdat hij een tijger heeft verslagen.', 'Dit is Tembo', 'olifant.png', '2olifant.png', '3olifant.png'),
(20, 'Giraffe', '777.77', 'Dit is een Giraffe. Hij is 7 jaar oud. Zet hem op een plek waar 7 bomen zijn. Hij houdt van bomen.', 'Heeft een lange nek.', 'giraffe.png', '2giraffe.png', '3giraffe.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `producten`
--
ALTER TABLE `producten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `producten`
--
ALTER TABLE `producten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
