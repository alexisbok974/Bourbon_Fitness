-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Client`;
CREATE TABLE `Client` (
  `idClient` varchar(20) NOT NULL,
  `nomClient` varchar(30) DEFAULT NULL,
  `prenomClient` varchar(30) DEFAULT NULL,
  `sexeClient` varchar(10) DEFAULT NULL,
  `AdrPostale` varchar(50) DEFAULT NULL,
  `emailClient` varchar(50) DEFAULT NULL,
  `telephoneClient` int(15) DEFAULT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `Coach`;
CREATE TABLE `Coach` (
  `idCoach` varchar(20) NOT NULL,
  `nomCoach` varchar(30) DEFAULT NULL,
  `prenomCoach` varchar(30) DEFAULT NULL,
  `sexeCoach` varchar(10) DEFAULT NULL,
  `specialite` varchar(30) DEFAULT NULL,
  `emailCoach` varchar(50) DEFAULT NULL,
  `telephoneCoach` int(15) DEFAULT NULL,
  `idCli` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idCoach`),
  KEY `fk_coach` (`idCli`),
  CONSTRAINT `fk_coach` FOREIGN KEY (`idCli`) REFERENCES `Client` (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Coach` (`idCoach`, `nomCoach`, `prenomCoach`, `sexeCoach`, `specialite`, `emailCoach`, `telephoneCoach`, `idCli`) VALUES
('1',	'Lauret',	'Raphael',	'Homme',	'Musculation',	'Lauretraphaelsio@gmail.com',	123456789,	NULL),
('2',	'Lebon',	'Emmanuel',	'Homme',	'Musculation',	'lebonemmanuel99@gmail.com',	987654321,	NULL),
('3',	'Rivière',	'Théo',	'Homme',	'Cardio',	'theoriv974@gmail.com',	49874268,	NULL);

-- 2023-09-20 07:36:42
