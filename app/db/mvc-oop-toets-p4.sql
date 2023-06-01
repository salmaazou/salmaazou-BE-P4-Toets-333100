CREATE DATABASE IF NOT EXISTS `mvc-oop-toets-p4`;
USE `mvc-oop-toets-p4`;

-- Tabel: Examen
CREATE TABLE IF NOT EXISTS `Examen` (
  `Id` INT PRIMARY KEY,
  `Rijbewijscategorie` VARCHAR(10),
  `Studentid` INT,
  `Rijschool` VARCHAR(50),
  `Stad` VARCHAR(50),
  `Datum` DATE,
  `Uitslag` VARCHAR(10)
);

-- Tabel: ExamenPerExaminator
CREATE TABLE IF NOT EXISTS `ExamenPerExaminator` (
  `Id` INT PRIMARY KEY,
  `Examenld` INT,
  `Examinatorld` INT,
  FOREIGN KEY (`Examenld`) REFERENCES `Examen`(`Id`),
  FOREIGN KEY (`Examinatorld`) REFERENCES `Examinator`(`Id`)
);

-- Tabel: Examinator
CREATE TABLE IF NOT EXISTS `Examinator` (
  `Id` INT PRIMARY KEY,
  `Voornaam` VARCHAR(50),
  `Tussenvoegsel` VARCHAR(10),
  `Achternaam` VARCHAR(50),
  `Mobiel` VARCHAR(20)
);

-- Invoegen van testgegevens in de tabellen

-- Tabel: Examen
INSERT INTO `Examen` (Id, Rijbewijscategorie, Studentid, Rijschool, Stad, Datum, Uitslag)
VALUES
(100234, 'B', 123432, 'VolGasVooruit', 'Rotterdam', '2023-04-03', 'Geslaagd'),
(103234, 'B', 106452, 'InZijnVierDoorDeBocht', 'Dordrecht', '2023-05-15', 'Geslaagd'),
(104546, 'c', 100333, 'AltijdGeslaagd', 'Dordrecht', '2023-05-12', 'Geslaagd'),
(124444, 'B', NULL, 'RiflesVoorJou', 'AM', '2023-04-12', 'Geslaagd'),
(123432, 'D', NULL, 'InZijnVierDoorDeBocht', 'Sliedrecht', '2023-03-01', 'Geslaagd'),
(106452, 'B', NULL, 'OpDeVluchtStrook', 'Zwijndrecht', '2023-05-08', 'Gezakt'),
(100333, 'B', NULL, 'RechtDoorEnGaan', 'Rotterdam', '2023-04-17', 'Gezakt');

-- Tabel: ExamenPerExaminator
INSERT INTO `ExamenPerExaminator` (Id, Examenld, Examinatorld)
VALUES
(1, 1, 2),
(2, 3, 3),
(3, 2, 6),
(4, 4, 7),
(5, 7, 2),
(6, 6, 3),
(7, 5, 6),
(8, 9, 2);

-- Tabel: Examinator
INSERT INTO `Examinator` (Id, Voornaam, Tussenvoegsel, Achternaam, Mobiel)
VALUES
(1, 'Manuel', 'van', 'Meekeren', '06-28493823'),
(2, 'Lissette', 'den', 'Dongen', '06-24383299'),
(3, 'Jurswailly', '', 'Luciano', '06-48293846'),
(4, 'Naswha', '', 'Salawi', '06-34291219');
