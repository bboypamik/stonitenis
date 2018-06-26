-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 11:29 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tvrdjava021`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'tvrdjava', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) NOT NULL,
  `title` varchar(256) NOT NULL,
  `text` longtext NOT NULL,
  `picture` varchar(256) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `text`, `picture`, `date`) VALUES
(10, 'Second part of study programme concludes in Split', 'Organised by Goran Munivrana, PhD, ITTF Sports Science and Medical Committee member, the second practical part of the Table Tennis Study Programme was successfully organised at the University of Split in Croatia from Sunday 17th to Sunday 24th June 2018.\r\n\r\nA university degree study programme in sports coaching, especially designed to suit the needs of table tennis players and coaches, the project was initiated two years ago at the Faculty of Kinesiology; it is supported by the International Table Tennis Federation and the European Table Tennis Union.', 'tabletennis1.jpg', '0000-00-00'),
(11, 'Four rounds completed, close race for top spot', 'Entertainment but serious, Indiaâ€™s Ultimate Table Tennis is sport in the fast lane; as play concluded on the second step of the journey in New Delhi on Monday 25th June, as on the previous evenings the Thyagaraj Sports Complex was full to the brim; each evening a crowd approaching 1,500 delighted in the fare on offer.\r\n\r\nOverall four rounds for each of the six teams had been completed; the picture as to which would secure a top four place and qualify for the semi-finals still very much in doubt.\r\n\r\n', 'tabletennis2.jpg', '0000-00-00'),
(12, 'Good decision, two years later hit jackpot in Las Vegas', 'It could be fun; those were the thoughts of Swedenâ€™s Petra SÃ¶rling just over two years ago as the entry date for the 2016 World Veteran Championships in Alicante / Elche loomed. Eventually convinced, erstwhile friend Denmarkâ€™s Pia Toelhoj agreed.\r\n\r\nA good decision; it could hardly have been better! On Saturday 23rd June in Las Vegas, they were crowned World champions. ', 'tabletennis3.jpg', '0000-00-00'),
(15, 'Heart to Heart: Marcelo Aguirre', 'Three times an Olympian and Latin American Champion in 2013, Marcelo Aguirre has firmly established himself as a major presence on the Latin American continent and one of the greatest players in the history of Paraguayan table tennis.\r\n\r\nSpeaking about his personal journey the 25-year-old reveals his reasons for taking up the sport, the benefits it has had on his life and more.\r\n\r\nLearn more about Marcelo Aguirre and his table tennis story:', 'tabletennis4.jpg', '0000-00-00'),
(16, 'SveÄano otvorene XVIII Mediteranske igre u Taragoni', 'U Taragoni na Nou Estadi stadionu sveÄanom ceremonijom juÄe su otvorene XVIII Mediteranske igre.\r\n\r\nKako se navodi u saopÅ¡tenju, Srbiju predstavljati 139 sportista koji Ä‡e se takmiÄiti u 27 sportova: atletika, boks, boÄ‡anje, basket 3Ã—3, biciklizam, dÅ¾udo, karate, dizanje tegova, golf, jedrenje, stoni tenis, maÄevanje, kajak, odbojka na pesku, plivanje, rukomet, rvanje, skijanje na vodi, gimnastika (sportska i ritmiÄka), streliÄarstvo, streljaÅ¡tvo, leteÄ‡e mete, tekvondo, triatlon, vaterpolo i veslanje.\r\n\r\nZastavu Srbije je tokom ceremonije otvaranja XVIII Mediteranskih igara, kojoj su u ime Olimpijskog komiteta prisustvovali potpredsednik OKS Å½arko ZeÄeviÄ‡ i generalni sekretar ÄorÄ‘e ViÅ¡acki, nosio rvaÄ Davor Å tefanek, osvajaÄ zlatne medalje na Olimpijskim igrama u Rio de Å½aneiru 2016. godine,\r\n\r\nTokom ceremonije otvaranja XVIII Mediteranskih igara, Predsednik MKMI Amar Adadi naglasio je da su ove igre najmasovnije ikada obzirom da uÄestvuje preko 4000 sportista iz 26 zemalja u 33 sporta.\r\n\r\nPrvog dana takmiÄenja su nastupili i prvi sportisti iz Srbije, streliÄari Aleksandar BeatoviÄ‡ i Nikola StefanoviÄ‡ koji su se takmiÄili u kvalifikacijama discipline recurve 70m, Aleksandar BeatoviÄ‡ Ä‡e kroz dodatne kvalifikaije pokuÅ¡ati da se plasira u 1/16 finala, dok je Nikola StefanoviÄ‡ izborio za direktni plasman u 1/16 finala.\r\n\r\nKako je najavljeno u saopÅ¡tenju Olimpijskog komiteta Srbije, danas Ä‡e na sportska boriliÅ¡ta izaÄ‡i 29 naÅ¡ih sportista u osam individualnih sportova, Å¡tafeta 4*100 slobodno (plivanje) i muÅ¡ka i Å¾enska rukometna reprezentacija. MuÅ¡karci Ä‡e igrati prvi meÄ u takmiÄenju po grupama protiv reprezentacije Egipta, dok Ä‡e rukometaÅ¡ice igrati protiv reprezentativki Crne Gore.', 'Otvaranje-MI-Taragona-2018-678x382.jpg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD UNIQUE KEY `news_id` (`news_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
