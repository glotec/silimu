-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2020 at 01:19 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sante`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `commune` varchar(30) DEFAULT NULL,
  `personne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `commune`, `personne`) VALUES
(1, 'Female', 1),
(2, 'Female', 2),
(3, 'Female', 3),
(6, 'Male', 6);

-- --------------------------------------------------------

--
-- Table structure for table `affectations`
--

CREATE TABLE `affectations` (
  `id` int(11) NOT NULL,
  `affectation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `affectations`
--

INSERT INTO `affectations` (`id`, `affectation`) VALUES
(1, 'Territoire'),
(2, 'Structure');

-- --------------------------------------------------------

--
-- Table structure for table `autresinfos`
--

CREATE TABLE `autresinfos` (
  `id` int(11) NOT NULL,
  `position` varchar(30) DEFAULT NULL,
  `matricule` varchar(20) DEFAULT NULL,
  `numeroordre` varchar(15) DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  `prime` int(11) DEFAULT NULL,
  `devise` varchar(8) DEFAULT 'FC',
  `personne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `autresinfos`
--

INSERT INTO `autresinfos` (`id`, `position`, `matricule`, `numeroordre`, `salaire`, `prime`, `devise`, `personne`) VALUES
(1, 'Actif', '1996', '1990612', 700000, 500000, 'FC', 1),
(2, 'Actif', '4567', '1990612', 400000, 200000, 'FC', 2),
(3, 'Actif', '44532', '645ji', 10000, 0, 'FC', 3),
(4, 'Actif', '-', '-', 0, 0, 'FC', 6);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `personne` int(11) DEFAULT NULL,
  `lieuaffect` int(11) DEFAULT NULL,
  `service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `personne`, `lieuaffect`, `service`) VALUES
(1, 1, 9, 1),
(2, 2, 9, 2),
(3, 3, 13, 3),
(4, 6, 21, 6);

-- --------------------------------------------------------

--
-- Table structure for table `detailspers`
--

CREATE TABLE `detailspers` (
  `id` int(11) NOT NULL,
  `datengange` date DEFAULT NULL,
  `numeroref` varchar(8) DEFAULT NULL,
  `dernierefonction` varchar(30) DEFAULT NULL,
  `personne` int(11) DEFAULT NULL,
  `fonction` int(11) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `qualification` int(11) DEFAULT NULL,
  `profession` int(11) DEFAULT NULL,
  `nivetude` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detailspers`
--

INSERT INTO `detailspers` (`id`, `datengange`, `numeroref`, `dernierefonction`, `personne`, `fonction`, `grade`, `qualification`, `profession`, `nivetude`) VALUES
(1, '2020-02-14', '1990612', 'ANALYSTE', 1, 21, 4, 20, 1, 5),
(2, '2020-02-28', '1990612', 'CHEF DE BUREAU', 2, 12, 8, 20, 3, 5),
(3, '2017-03-16', '645ji', 'MEDECIN DIRECTEUR', 3, 6, 11, 18, 2, 6),
(4, '2020-03-02', '-', 'CHARGER DE COMMUNICATION', 6, 14, 1, 21, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `fonctions`
--

CREATE TABLE `fonctions` (
  `id` int(11) NOT NULL,
  `fonction` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fonctions`
--

INSERT INTO `fonctions` (`id`, `fonction`) VALUES
(1, 'SECRETAIRE GENERAL'),
(2, 'SECRETAIRE GENERAL A.I'),
(3, 'DIRECTEUR CHEF DE SERVICE'),
(4, 'DIRECTEUR'),
(5, 'POLICIER SANITAIRE'),
(6, 'CHEF DE DIVISION'),
(7, 'BRIGADIER'),
(8, 'INSPECTUER'),
(9, 'VACCINATEUR'),
(10, 'CHEF DE BUREAU'),
(11, 'ANALYSTE'),
(12, 'ANALYSTE ASSISTANT'),
(13, 'LABORANTIN'),
(14, 'SECRETAIRE DE DIRECTION'),
(15, 'RADIOLOGUE'),
(16, 'MEDECIN DIRECTEUR'),
(17, 'MEDECIN TRAITANT'),
(18, 'DIRECTEUR DE NURSING'),
(19, 'CHARGER DE COMMUNICATION'),
(20, 'INFIRMIER TITULAIRE'),
(21, 'DATA MANAGER'),
(22, 'CHEF DE SERVICE'),
(23, 'MEDECIN CHEF DE STAFF'),
(24, 'PHARMACIEN'),
(25, 'SURVEILLANT'),
(26, 'LOGISTICIENT'),
(27, 'OPS'),
(28, 'ENSEIGNANT'),
(29, 'PREFET'),
(30, 'CHAUFFEUR'),
(31, 'DIRECTEUR CHARGE DE DISCIPLINE'),
(32, 'ELECTRICIEN'),
(33, 'SENTINELLE'),
(34, 'PROVISEUR'),
(35, 'MECANICIEN'),
(36, 'CHEF DE SECTION'),
(37, 'CHEF CHARIO AUTOMOBILE'),
(38, 'ANIMATEUR COMMUNICATAIRE'),
(39, 'SUPERVISEUR'),
(40, 'SUPERVISEUR EHA'),
(42, 'OUVRIER'),
(43, 'MCP'),
(44, 'MCZ'),
(45, 'MENUISIER');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `grade` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `grade`) VALUES
(1, 'SECRETAIRE GENERAL'),
(2, 'DIRECTEUR GENERAL'),
(3, 'DIRECTEUR CHEF DE SERVICE'),
(4, 'DIRECTEUR'),
(5, 'CHEF DE DIVISION PREMIERE ECHELON'),
(6, 'CHEF DE DIVISION DEUXIEME ECHELON'),
(7, 'CHEF DE CLINIQUE'),
(8, 'INSPECTUER'),
(9, 'CHEF DE SERVICE'),
(10, 'CHEF DE BUREAU PREMIERE ECHELON'),
(11, 'CHEF DE BUREAU DEUXIEME ECHELON'),
(12, 'ATTACHE D\'ADMINISTRATION PREMIERE CLASSE PREMIERE ECHELON'),
(13, 'ATTACHE D\'ADMINISTRATION PREMIERE CLASSE DEUXIEME ECHELON'),
(14, 'ATTACHE D\'ADMINISTRATION DEUXIEME CLASSE PREMIERE ECHELON'),
(15, 'ATTACHE D\'ADMINISTRATION DEUXIEME CLASSE DEUXIEME ECHELON'),
(16, 'AGENT D\'ADMINISTRATION PREMIERE CLASSE PREMIERE ECHELON'),
(17, 'AGENT D\'ADMINISTRATION PREMIERE CLASSE DEUXIEME ECHELON'),
(18, 'AGENT D\'ADMINISTRATION DEUXIEME CLASSE PREMIERE ECHELON'),
(19, 'AGENT D\'ADMINISTRATION DEUXIEME CLASSE DEUXIEME ECHELON'),
(20, 'MEDECIN GENERAL'),
(21, 'MEDECIN CHEF DE CLINIQUE'),
(22, 'MEDECIN RESIDENT'),
(23, 'MEDECIN REGENT'),
(24, 'MEDECIN JUNIOR'),
(25, 'MEDECIN INTERNE'),
(26, 'EN CHEF'),
(27, 'EN CHEF PREMIERE ECHELON'),
(28, 'EN CHEF DEUXIEME ECHELON'),
(29, 'EN CHEF TROISIEME ECHELON'),
(30, 'EN CHEF QUATRIEME ECHELON'),
(31, 'HUISSIER'),
(32, 'DES ADJOINTS'),
(33, 'HOSP PREMIERE CLASSE'),
(34, 'HOSP DEUXIEME CLASSE'),
(35, 'OUVRIER');

-- --------------------------------------------------------

--
-- Table structure for table `lieux`
--

CREATE TABLE `lieux` (
  `id` int(11) NOT NULL,
  `lieu` varchar(30) DEFAULT NULL,
  `affectation` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lieux`
--

INSERT INTO `lieux` (`id`, `lieu`, `affectation`) VALUES
(1, 'Kabare Territoire', 1),
(2, 'Idjwi Territoire', 1),
(3, 'Walungu Territoire', 1),
(4, 'Shabunda Territoire', 1),
(5, 'Uvira Territoire', 1),
(6, 'Kalehe Territoire', 1),
(7, 'Fizi Territoire', 1),
(8, 'Mwenga Terriroire', 1),
(9, 'Bukavu ville Territoire', 1),
(10, 'Ibanda', 2),
(11, 'Kadutu', 2),
(12, 'Bagira', 2),
(13, 'DPS', 2),
(14, 'Ibanda', 2),
(15, 'Kadutu', 2),
(17, 'Katana', 2),
(18, 'Kabare', 2),
(19, 'Miti Murhesa', 2),
(20, 'Bunyakiri', 2),
(21, 'Idjwi', 2),
(22, 'Kalehe', 2),
(23, 'Kalonge', 2),
(24, 'Minova', 2),
(25, 'Uvira', 2),
(26, 'Lemera', 2),
(27, 'Ruzizi', 2),
(28, 'Haut Plateau', 2),
(29, 'Nundu', 2),
(30, 'Fizi', 2),
(31, 'Kimbi Lulenge', 2),
(32, 'Minembwe', 2),
(33, 'Itombwe', 2),
(34, 'Walungu', 2),
(35, 'Mubumbano', NULL),
(36, 'Kaniola', 2),
(37, 'Kaziba', 2),
(38, 'Nyantende', 2),
(39, 'Nyangezi', 2),
(40, 'Mwana', 2),
(41, 'Mwenga', 2),
(42, 'Kamituga', 2),
(43, 'Kitutu', 2),
(44, 'Shabunda', 2),
(45, 'Kalole', 2),
(46, 'Lulinga', 2),
(47, 'Mulungu', 2);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `nomutil` varchar(20) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `type` varchar(15) NOT NULL,
  `personne` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `nomutil`, `motdepasse`, `active`, `type`, `personne`) VALUES
(1, 'admin', 'admin', 1, 'admin', 1),
(2, 'lor', 'lor', 1, 'user', 2),
(3, 'styven', '1234', 0, '', 3),
(4, 'sifa', 'sifa', 0, '', 6);

-- --------------------------------------------------------

--
-- Table structure for table `niveauetudes`
--

CREATE TABLE `niveauetudes` (
  `id` int(11) NOT NULL,
  `niveauetude` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `niveauetudes`
--

INSERT INTO `niveauetudes` (`id`, `niveauetude`) VALUES
(1, 'DOCTORAT'),
(2, 'MASTER'),
(3, 'MPH'),
(4, 'MPD'),
(5, 'LICENCE'),
(6, 'GRADUAT'),
(7, 'D.E.A'),
(8, 'D.E.S'),
(9, 'SQ'),
(10, 'A3'),
(11, 'A2'),
(12, 'A1'),
(13, 'PP6'),
(14, 'PP5'),
(15, 'D4'),
(16, 'D6'),
(17, 'CERTIFICAT'),
(18, 'BREVET'),
(19, 'AUCUN'),
(20, 'AUTRES');

-- --------------------------------------------------------

--
-- Table structure for table `personnes`
--

CREATE TABLE `personnes` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `postnom` varchar(40) DEFAULT NULL,
  `nationalite` varchar(10) DEFAULT NULL,
  `etatcivil` varchar(15) DEFAULT NULL,
  `genre` varchar(8) DEFAULT NULL,
  `lieunaissance` varchar(50) DEFAULT NULL,
  `datenaissance` date DEFAULT NULL,
  `contact` decimal(10,0) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personnes`
--

INSERT INTO `personnes` (`id`, `nom`, `postnom`, `nationalite`, `etatcivil`, `genre`, `lieunaissance`, `datenaissance`, `contact`, `email`, `photo`) VALUES
(1, 'Gloire', 'Exode', 'Congolaise', 'CÃ©libataire', 'Masculin', 'Goma', '2020-03-13', '990176656', 'glotec@glo.com', '1584962203_database.png'),
(2, 'Lorris', 'Asima KIRUSHA', 'Congolaise', 'MariÃ©', 'Masculin', 'Bukavu', '1992-07-16', '987654321', 'lorris@gmail.com', '1584721266_souse .jpg'),
(3, 'Styven', 'Exode', 'Congolaise', 'MariÃ©', 'Masculin', 'Idjwi', '2000-07-19', '987654321', 'test@gmail.com', '1584720432_sante login.png'),
(6, 'Sifa', 'CIRIMWAMI', 'Congolaise', 'CÃ©libataire', 'FÃ©minin', 'Bukavu', '1997-02-04', '898765432', 'sifa@gmail.com', '1584962570_scr1.png');

-- --------------------------------------------------------

--
-- Table structure for table `professions`
--

CREATE TABLE `professions` (
  `id` int(11) NOT NULL,
  `profession` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `professions`
--

INSERT INTO `professions` (`id`, `profession`) VALUES
(1, 'ADMINISTRATIF'),
(2, 'MEDECIN'),
(3, 'PROFESSIONNEL DE SANTE');

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `qualification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`id`, `qualification`) VALUES
(1, 'PEDAGOGUE'),
(2, 'INFIRMIER'),
(3, 'HOSPITALIER'),
(4, 'ACCOUCHEUSE'),
(5, 'LABORANTIN'),
(6, 'BIOLOGISTE MEDICALE'),
(7, 'CHIRURGIEN DENTISTE'),
(8, 'RADIOLOGUE'),
(9, 'KINESITHERAPEUTE'),
(10, 'NUTRITIONISTE'),
(11, 'ASSISTANT EN PHARMACIE'),
(12, 'ADMINISTRATEUR GESTIONNAIRE'),
(13, 'EPIDEMOLOGISTE'),
(14, 'SANTE COMMUNAUTAIRE'),
(15, 'MEDECIN VETERINAIRE'),
(16, 'MEDECIN GENERALISTE'),
(17, 'MEDECIN SPECIALISTE'),
(18, 'JURISTE'),
(19, 'INFORMATICIEN DE GESTION'),
(20, 'INFORMATICIEN DES RESEAUX ET SYSTEMES'),
(21, 'ECONOMISTE'),
(22, 'PHARMACIEN'),
(23, 'ELECTRICIEN'),
(24, 'PROFESSIONNEL DE SANTE'),
(25, 'CHAUFFEUR'),
(26, 'ANESTHESISTE'),
(27, 'MINE ET HYDROCARBURE'),
(28, 'TECHNICIEN DE LA LABORATOIRE MEDICAL'),
(29, 'TECHNICIEN DE RADIOLOGIE'),
(30, 'MEDECIN PHYSIQUE'),
(31, 'TECHNICIEN D\'ASSAINISSEMENT'),
(32, 'SANS QUALIFICATION'),
(33, 'AUTRES');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service`) VALUES
(1, 'Informatique'),
(2, 'Reseau'),
(3, 'Professionel de sante'),
(4, 'Professionel de sante'),
(5, 'Nurserie'),
(6, 'Finance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_addres` (`personne`);

--
-- Indexes for table `affectations`
--
ALTER TABLE `affectations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autresinfos`
--
ALTER TABLE `autresinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_p` (`personne`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pers` (`personne`),
  ADD KEY `fk_ser` (`service`),
  ADD KEY `fk_afli` (`lieuaffect`);

--
-- Indexes for table `detailspers`
--
ALTER TABLE `detailspers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_person` (`personne`),
  ADD KEY `fk_fonc` (`fonction`),
  ADD KEY `fk_gr` (`grade`),
  ADD KEY `fk_qual` (`qualification`),
  ADD KEY `fk_prof` (`profession`),
  ADD KEY `fk_ne` (`nivetude`);

--
-- Indexes for table `fonctions`
--
ALTER TABLE `fonctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lieux`
--
ALTER TABLE `lieux`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aff` (`affectation`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pe` (`personne`);

--
-- Indexes for table `niveauetudes`
--
ALTER TABLE `niveauetudes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnes`
--
ALTER TABLE `personnes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professions`
--
ALTER TABLE `professions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `affectations`
--
ALTER TABLE `affectations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `autresinfos`
--
ALTER TABLE `autresinfos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `detailspers`
--
ALTER TABLE `detailspers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fonctions`
--
ALTER TABLE `fonctions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lieux`
--
ALTER TABLE `lieux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `niveauetudes`
--
ALTER TABLE `niveauetudes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personnes`
--
ALTER TABLE `personnes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `professions`
--
ALTER TABLE `professions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `fk_addres` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `autresinfos`
--
ALTER TABLE `autresinfos`
  ADD CONSTRAINT `fk_p` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `fk_afli` FOREIGN KEY (`lieuaffect`) REFERENCES `lieux` (`id`),
  ADD CONSTRAINT `fk_pers` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ser` FOREIGN KEY (`service`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detailspers`
--
ALTER TABLE `detailspers`
  ADD CONSTRAINT `fk_fonc` FOREIGN KEY (`fonction`) REFERENCES `fonctions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_gr` FOREIGN KEY (`grade`) REFERENCES `grades` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ne` FOREIGN KEY (`nivetude`) REFERENCES `niveauetudes` (`id`),
  ADD CONSTRAINT `fk_person` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_prof` FOREIGN KEY (`profession`) REFERENCES `professions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_qual` FOREIGN KEY (`qualification`) REFERENCES `qualifications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lieux`
--
ALTER TABLE `lieux`
  ADD CONSTRAINT `fk_aff` FOREIGN KEY (`affectation`) REFERENCES `affectations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logins`
--
ALTER TABLE `logins`
  ADD CONSTRAINT `fk_pe` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
