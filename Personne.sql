-- Adminer 4.8.1 MySQL 5.5.5-10.6.12-MariaDB-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `Personne`;
CREATE TABLE `Personne` (
  `Matricule` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `adresse` varchar(40) NOT NULL,
  `AnnéeNaissance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `Personne` (`Matricule`, `nom`, `prenom`, `Age`, `sexe`, `adresse`, `AnnéeNaissance`) VALUES
('cdbeh45',	'mike',	'hawk',	69,	'homme',	'45, rue de baléstèk',	2000),
('gergvffsdf',	'Jean',	'Lasalle',	23,	'Homme',	'44545 fzcenjqsdsz',	1887),
('bsdncndjk',	'Skadamos',	'alphonse',	24,	'femme',	'4856 jfzencfudic',	2077),
('dfgedzfvfgefzedfbggds',	'Damien',	'blond',	19,	'femme',	'dczds554dz2',	769);

-- 2023-09-25 04:27:06
