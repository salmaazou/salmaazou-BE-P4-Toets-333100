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
(1, 'Jon Jones', 1, '1.93', '112', 35, 10),
(2, 'Alexander Volkanovski', 2, '1.68', '66', 34, 12),
(3, 'Islam Makhachev', 3, '1.78', '70', 31, 4),
(4, 'Leon Edwards', 4, '1.83', '77', 31, 7),
(5, 'Israel Adesanya', 5, '1.93', '84', 33, 15);
--



