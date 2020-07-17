CREATE DATABASE  IF NOT EXISTS `silimudb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `silimudb`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: silimudb
-- ------------------------------------------------------
-- Server version	5.7.9-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `addresse` varchar(70) DEFAULT NULL,
  `personne` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pers_idx` (`personne`),
  CONSTRAINT `pers` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'',1),(2,'',2),(3,'Goma, av du musee',4),(4,'Bukavu',5),(5,'Bukavu ',6),(6,'kivu',7),(7,'17, Circulaire, le Volcan, Goma DRC',8),(8,'Bukavu',20208),(9,'Goma, av du musee',20209),(10,'Goma, Himbi',202010),(11,'hguoggy',202011);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `affectation`
--

DROP TABLE IF EXISTS `affectation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `affectation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affectation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affectation`
--

LOCK TABLES `affectation` WRITE;
/*!40000 ALTER TABLE `affectation` DISABLE KEYS */;
INSERT INTO `affectation` VALUES (1,'Goma'),(2,'Bukavu'),(3,'Uvira');
/*!40000 ALTER TABLE `affectation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detactif`
--

DROP TABLE IF EXISTS `detactif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detactif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_rec` datetime DEFAULT NULL,
  `motif` varchar(100) DEFAULT NULL,
  `personne` int(11) DEFAULT NULL,
  `actif` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detactif`
--

LOCK TABLES `detactif` WRITE;
/*!40000 ALTER TABLE `detactif` DISABLE KEYS */;
/*!40000 ALTER TABLE `detactif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_engagement` date DEFAULT NULL,
  `service` int(11) DEFAULT NULL,
  `personne` int(11) DEFAULT NULL,
  `affectation` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `aff_idx` (`affectation`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `details`
--

LOCK TABLES `details` WRITE;
/*!40000 ALTER TABLE `details` DISABLE KEYS */;
INSERT INTO `details` VALUES (1,'2020-06-30',3,4,400),(2,'2018-10-17',4,5,500),(3,'2015-07-16',5,6,700),(4,'2020-07-14',6,7,150),(5,'2017-10-17',7,8,700),(6,'2015-03-04',2,20209,1),(7,'2019-10-03',5,202010,2),(8,'2020-07-09',5,202011,1);
/*!40000 ALTER TABLE `details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etat`
--

DROP TABLE IF EXISTS `etat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `etat` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etat`
--

LOCK TABLES `etat` WRITE;
/*!40000 ALTER TABLE `etat` DISABLE KEYS */;
/*!40000 ALTER TABLE `etat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logins`
--

DROP TABLE IF EXISTS `logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomutil` varchar(20) DEFAULT NULL,
  `motdepasse` varchar(255) DEFAULT NULL,
  `personne` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT 'user',
  `active` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `pe_idx` (`personne`),
  CONSTRAINT `pe` FOREIGN KEY (`personne`) REFERENCES `personnes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logins`
--

LOCK TABLES `logins` WRITE;
/*!40000 ALTER TABLE `logins` DISABLE KEYS */;
INSERT INTO `logins` VALUES (1,'lkirusha@utb.ac.rw','sd',4,'user',0),(2,'glo','glo',5,'user',1),(3,'admin','admin',6,'admin',1),(4,'venus','venus',7,'user',1),(5,'lor','lor',8,'user',1);
/*!40000 ALTER TABLE `logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnes`
--

DROP TABLE IF EXISTS `personnes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) DEFAULT NULL,
  `postnom` varchar(45) DEFAULT NULL,
  `etatcivil` varchar(15) DEFAULT NULL,
  `genre` varchar(8) DEFAULT NULL,
  `lieu_naissance` varchar(45) DEFAULT NULL,
  `date_naissance` date DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `niveau_etude` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=202012 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnes`
--

LOCK TABLES `personnes` WRITE;
/*!40000 ALTER TABLE `personnes` DISABLE KEYS */;
INSERT INTO `personnes` VALUES (1,'glo','yt','Célibataire','Masculin','goma','2020-07-22',8,'lorriskir@gmail.com','1593687384_IMG_0950.jpg',NULL),(2,'John','Bag','Marié','Masculin','goma','2018-06-13',990176656,'john@gmail.com','1593687852_IMG_0950.jpg',NULL),(3,'Martes','ger','Célibataire','Féminin','bukavu','2002-02-27',990176656,'gr@gmail.com','1593688276_IMG_0950.jpg',NULL),(4,'Glo','Dip','Célibataire','Masculin','goma','1997-12-28',12547,'glo@gmail.com','1593688527_IMG_0950.jpg',NULL),(5,'Gloire','Exode','Célibataire','Masculin','Goma','1997-11-13',853873371,'gloire@gmail.com','1593688917_IMG_0950.jpg',NULL),(6,'Armel','Matakuya','Marié','Masculin','Bukavu','1995-11-15',990176656,'armel@gmail.com','1593689587_IMG_0950.jpg',NULL),(7,'ex','dus','Célibataire','Féminin','goma','2017-01-31',785,'geo2@gmail.com','1593689870_IMG_0950.jpg',NULL),(8,'LORRIS ','KIRUSHA','Célibataire','Masculin','bukavu','1999-02-02',990176656,'lorriskir@gmail.com','1593695820_IMG_0950.jpg',NULL),(20208,'Marie','Louise','Célibataire','Féminin','G3 marketing','1994-03-03',990176656,'marie@gmail.com','1593726604_image-1592515785538.png',NULL),(20209,'Marie','Mayala','Marié','Féminin','Goma','1989-07-02',853873371,'mayala@gmail.com','1593727100_image-1592518403396.png','L2 Management'),(202010,'Sarah','Math','Célibataire','Féminin','Uvira','2015-11-03',987632,'sarahm@gmail.com','1593730965_image-1592518212403.png','G2 info'),(202011,'jijokk','hbhbl','Marié','Masculin','iuphiuh','2019-04-03',5687,'lor@gmail.vom','1593760739_image-1592515785538.png','L2 Management');
/*!40000 ALTER TABLE `personnes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fonction` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service`
--

LOCK TABLES `service` WRITE;
/*!40000 ALTER TABLE `service` DISABLE KEYS */;
INSERT INTO `service` VALUES (1,'Directeur Générale'),(2,'SecretaireGénérale'),(3,'Directeur'),(4,'Secretaire'),(5,'Informaticien'),(6,'Technicien'),(7,'Superviseur'),(8,'Capitaine'),(9,'Maintenancien');
/*!40000 ALTER TABLE `service` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-07-11 23:17:13
