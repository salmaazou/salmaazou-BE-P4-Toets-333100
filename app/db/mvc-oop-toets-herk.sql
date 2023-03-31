CREATE DATABASE IF NOT EXISTS `mvc-oop-toets-herk`;
USE `mvc-oop-toets-herk`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Country`
--

DROP TABLE IF EXISTS `PoundForPound`;

CREATE TABLE IF NOT EXISTS `PoundForPound` (
  `Id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Ranking` smallint(100) NOT NULL,
  `Length` varchar(100) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `Age` tinyint(3) NOT NULL,
  `WinsByKnockout` tinyint(3) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB;












-- --------------------------------------------------------


--


INSERT INTO `PoundForPound` (`Id`, `Name`, `Ranking`, `Length`, `Weight`, `Age`, `WinsByKnockout`) VALUES
(1, 'Anthony Joshua', 1, '2.06', '111', 29, 22),
(2, 'Tyson Fury', 2, '1.98', '108', 31, 27),
(3, 'Deontay Wilder', 3, '1.96', '107', 34, 41),
(4, 'Canelo Alvarez', 4, '1.85', '75', 30, 56),
(5, 'Errol Spence', 5, '1.88', '77', 31, 24);
--



