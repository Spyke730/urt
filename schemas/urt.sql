-- MySQL dump 10.15  Distrib 10.0.21-MariaDB, for Linux (i686)
--
-- Host: localhost    Database: bid
-- ------------------------------------------------------
-- Server version	10.0.21-MariaDB-log

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

CREATE DATABASE `urt` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `urt`;

--
-- Table structure for table `failed_logins`
--

DROP TABLE IF EXISTS `failed_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usersId` int(10) unsigned DEFAULT NULL,
  `ipAddress` char(15) NOT NULL,
  `attempted` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usersId` (`usersId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_logins`
--

LOCK TABLES `failed_logins` WRITE;
/*!40000 ALTER TABLE `failed_logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profilesId` int(10) unsigned NOT NULL,
  `resource` varchar(16) NOT NULL,
  `action` varchar(16) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profilesId` (`profilesId`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (23,1,'users','index'),(24,1,'users','search'),(25,1,'users','edit'),(26,1,'users','create'),(27,1,'users','delete'),(28,1,'users','changePassword'),(29,1,'profiles','index'),(30,1,'profiles','search'),(31,1,'profiles','edit'),(32,1,'profiles','create'),(33,1,'profiles','delete'),(34,1,'proyectos','index'),(35,1,'proyectos','search'),(36,1,'proyectos','edit'),(37,1,'proyectos','create'),(38,1,'proyectos','delete'),(39,1,'adscribe','index'),(40,1,'adscribe','search'),(41,1,'adscribe','create'),(42,1,'adscribe','delete'),(43,1,'permissions','index'),(53,3,'users','index'),(54,3,'users','search'),(55,3,'proyectos','index'),(56,3,'proyectos','search'),(57,3,'adscribe','index'),(58,3,'adscribe','search'),(59,3,'adscribe','create'),(60,3,'adscribe','delete'),(63,2,'users','index'),(64,2,'users','search'),(65,2,'users','edit'),(66,2,'users','create'),(67,2,'users','delete'),(68,2,'users','changePassword'),(69,2,'profiles','index'),(70,2,'profiles','search'),(71,2,'profiles','edit'),(72,2,'profiles','create'),(73,2,'profiles','delete'),(74,2,'proyectos','index'),(75,2,'proyectos','search'),(76,2,'proyectos','edit'),(77,2,'proyectos','create'),(78,2,'proyectos','delete'),(79,2,'adscribe','index'),(80,2,'adscribe','search'),(81,2,'adscribe','create'),(82,2,'adscribe','delete'),(83,2,'permissions','index');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `active` char(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `active` (`active`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profiles`
--

LOCK TABLES `profiles` WRITE;
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` VALUES (1,'Administrador','Y'),(2,'Usuario','Y'),(3,'Coordinador(a)','Y'),(4,'Digitador','Y');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `remember_tokens`
--

DROP TABLE IF EXISTS `remember_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `remember_tokens` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usersId` int(10) unsigned NOT NULL,
  `token` char(32) NOT NULL,
  `userAgent` varchar(120) NOT NULL,
  `createdAt` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remember_tokens`
--

LOCK TABLES `remember_tokens` WRITE;
/*!40000 ALTER TABLE `remember_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `remember_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `success_logins`
--

DROP TABLE IF EXISTS `success_logins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `success_logins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usersId` int(10) unsigned NOT NULL,
  `ipAddress` char(15) NOT NULL,
  `userAgent` varchar(120) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usersId` (`usersId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `success_logins`
--

LOCK TABLES `success_logins` WRITE;
/*!40000 ALTER TABLE `success_logins` DISABLE KEYS */;
/*!40000 ALTER TABLE `success_logins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urt`
--

DROP TABLE IF EXISTS `urt`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urt` (
  `id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` smallint(4) unsigned DEFAULT NULL,
  `user` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `p1` tinyint(2) unsigned DEFAULT NULL,
  `p2_anios` tinyint(2) unsigned DEFAULT NULL,
  `p2_meses` tinyint(2) unsigned DEFAULT NULL,
  `p3_anios` tinyint(2) unsigned DEFAULT NULL,
  `p3_meses` tinyint(2) unsigned DEFAULT NULL,
  `p4` tinyint(2) unsigned DEFAULT NULL,
  `p5` tinyint(2) unsigned DEFAULT NULL,
  `p6` tinyint(2) unsigned DEFAULT NULL,
  `p7` tinyint(2) unsigned DEFAULT NULL,
  `p8_1` tinyint(2) unsigned DEFAULT NULL,
  `p8_2` tinyint(2) unsigned DEFAULT NULL,
  `p8_3` tinyint(2) unsigned DEFAULT NULL,
  `p8_4` tinyint(2) unsigned DEFAULT NULL,
  `p8_5` tinyint(2) unsigned DEFAULT NULL,
  `p8_6` tinyint(2) unsigned DEFAULT NULL,
  `p8_7` tinyint(2) unsigned DEFAULT NULL,
  `p8_8` tinyint(2) unsigned DEFAULT NULL,
  `p8_9` tinyint(2) unsigned DEFAULT NULL,
  `p8_10` tinyint(2) unsigned DEFAULT NULL,
  `p8_11` tinyint(2) unsigned DEFAULT NULL,
  `p9` tinyint(2) unsigned DEFAULT NULL,
  `p10` tinyint(2) unsigned DEFAULT NULL,
  `p11` tinyint(2) unsigned DEFAULT NULL,
  `p12` tinyint(2) unsigned DEFAULT NULL,
  `p13_1` tinyint(2) unsigned DEFAULT NULL,
  `p13_2` tinyint(2) unsigned DEFAULT NULL,
  `p13_3` tinyint(2) unsigned DEFAULT NULL,
  `p13_4` tinyint(2) unsigned DEFAULT NULL,
  `p13_5` tinyint(2) unsigned DEFAULT NULL,
  `p13_6` tinyint(2) unsigned DEFAULT NULL,
  `p13_7` tinyint(2) unsigned DEFAULT NULL,
  `p13_8` tinyint(2) unsigned DEFAULT NULL,
  `p13_otrocual` text COLLATE utf8_spanish_ci,
  `p14` tinyint(2) unsigned DEFAULT NULL,
  `p15_1` tinyint(2) unsigned DEFAULT NULL,
  `p15_2` tinyint(2) unsigned DEFAULT NULL,
  `p15_3` tinyint(2) unsigned DEFAULT NULL,
  `p15_4` tinyint(2) unsigned DEFAULT NULL,
  `p15_5` tinyint(2) unsigned DEFAULT NULL,
  `p15_6` tinyint(2) unsigned DEFAULT NULL,
  `p15_7` tinyint(2) unsigned DEFAULT NULL,
  `p15_8` tinyint(2) unsigned DEFAULT NULL,
  `p15_otrocual` text COLLATE utf8_spanish_ci,
  `p16` tinyint(2) unsigned DEFAULT NULL,
  `p17` tinyint(2) unsigned DEFAULT NULL,
  `p18` tinyint(2) unsigned DEFAULT NULL,
  `p19_a` tinyint(2) unsigned DEFAULT NULL,
  `p19_b` tinyint(2) unsigned DEFAULT NULL,
  `p19_c` tinyint(2) unsigned DEFAULT NULL,
  `p20_a` tinyint(2) unsigned DEFAULT NULL,
  `p20_b` tinyint(2) unsigned DEFAULT NULL,
  `p20_c` tinyint(2) unsigned DEFAULT NULL,
  `p20_d` tinyint(2) unsigned DEFAULT NULL,
  `p20_e` tinyint(2) unsigned DEFAULT NULL,
  `p21_a` tinyint(2) unsigned DEFAULT NULL,
  `p21_b` tinyint(2) unsigned DEFAULT NULL,
  `p21_c` tinyint(2) unsigned DEFAULT NULL,
  `p21_d` tinyint(2) unsigned DEFAULT NULL,
  `p21_e` tinyint(2) unsigned DEFAULT NULL,
  `p21_f` tinyint(2) unsigned DEFAULT NULL,
  `p22` tinyint(2) unsigned DEFAULT NULL,
  `p23` tinyint(2) unsigned DEFAULT NULL,
  `p24_1` tinyint(2) unsigned DEFAULT NULL,
  `p24_2` tinyint(2) unsigned DEFAULT NULL,
  `p24_3` tinyint(2) unsigned DEFAULT NULL,
  `p24_4` tinyint(2) unsigned DEFAULT NULL,
  `p24_5` tinyint(2) unsigned DEFAULT NULL,
  `p24_6` tinyint(2) unsigned DEFAULT NULL,
  `p24_7` tinyint(2) unsigned DEFAULT NULL,
  `p24_8` tinyint(2) unsigned DEFAULT NULL,
  `p24_9` tinyint(2) unsigned DEFAULT NULL,
  `p24_10` tinyint(2) unsigned DEFAULT NULL,
  `p24_11` tinyint(2) unsigned DEFAULT NULL,
  `p24_12` tinyint(2) unsigned DEFAULT NULL,
  `p24_13` tinyint(2) unsigned DEFAULT NULL,
  `p24_otrocual` text COLLATE utf8_spanish_ci,
  `p25_a` tinyint(2) unsigned DEFAULT NULL,
  `p25_b` tinyint(2) unsigned DEFAULT NULL,
  `p26_a` tinyint(2) unsigned DEFAULT NULL,
  `p26_b` tinyint(2) unsigned DEFAULT NULL,
  `p27` tinyint(2) unsigned DEFAULT NULL,
  `p28` tinyint(2) unsigned DEFAULT NULL,
  `p29` tinyint(2) unsigned DEFAULT NULL,
  `p30` tinyint(2) unsigned DEFAULT NULL,
  `p31` tinyint(2) unsigned DEFAULT NULL,
  `p32_1` tinyint(2) unsigned DEFAULT NULL,
  `p32_2` tinyint(2) unsigned DEFAULT NULL,
  `p32_3` tinyint(2) unsigned DEFAULT NULL,
  `p32_4` tinyint(2) unsigned DEFAULT NULL,
  `p32_5` tinyint(2) unsigned DEFAULT NULL,
  `p32_6` tinyint(2) unsigned DEFAULT NULL,
  `p32_7` tinyint(2) unsigned DEFAULT NULL,
  `p32_8` tinyint(2) unsigned DEFAULT NULL,
  `p32_9` tinyint(2) unsigned DEFAULT NULL,
  `p32_otrocual` text COLLATE utf8_spanish_ci,
  `p33_1` tinyint(2) unsigned DEFAULT NULL,
  `p33_2` tinyint(2) unsigned DEFAULT NULL,
  `p33_3` tinyint(2) unsigned DEFAULT NULL,
  `p33_4` tinyint(2) unsigned DEFAULT NULL,
  `p33_5` tinyint(2) unsigned DEFAULT NULL,
  `p33_6` tinyint(2) unsigned DEFAULT NULL,
  `p33_7` tinyint(2) unsigned DEFAULT NULL,
  `p33_8` tinyint(2) unsigned DEFAULT NULL,
  `p33_9` tinyint(2) unsigned DEFAULT NULL,
  `p33_otrocual` text COLLATE utf8_spanish_ci,
  `p34_a` tinyint(2) unsigned DEFAULT NULL,
  `p34_b` tinyint(2) unsigned DEFAULT NULL,
  `p34_c` tinyint(2) unsigned DEFAULT NULL,
  `p34_d` tinyint(2) unsigned DEFAULT NULL,
  `p34_e` tinyint(2) unsigned DEFAULT NULL,
  `p35` tinyint(2) unsigned DEFAULT NULL,
  `p35_otrocual` text COLLATE utf8_spanish_ci,
  `p36_a` tinyint(2) unsigned DEFAULT NULL,
  `p36_b` tinyint(2) unsigned DEFAULT NULL,
  `p36_c` tinyint(2) unsigned DEFAULT NULL,
  `p36_d` tinyint(2) unsigned DEFAULT NULL,
  `p36_e` tinyint(2) unsigned DEFAULT NULL,
  `p37_direccion` tinyint(2) unsigned DEFAULT NULL,
  `p37_sede` tinyint(2) unsigned DEFAULT NULL,
  `p38` tinyint(2) unsigned DEFAULT NULL,
  `p39` tinyint(2) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urt`
--

LOCK TABLES `urt` WRITE;
/*!40000 ALTER TABLE `urt` DISABLE KEYS */;
/*!40000 ALTER TABLE `urt` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `registro` char(1) NOT NULL,
  `registro_el` datetime DEFAULT NULL,
  `recordo_el` datetime DEFAULT NULL,
  `vecesRecordo` smallint(4) unsigned NOT NULL,
  `mustChangePassword` char(1) DEFAULT NULL,
  `profilesId` tinyint(1) unsigned NOT NULL,
  `banned` char(1) NOT NULL,
  `suspended` char(1) NOT NULL,
  `active` char(1) DEFAULT NULL,
  `creado_el` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `profilesId` (`profilesId`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'luiscarlosyaya@gmail.com','N','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'N',1,'N','N','Y','2015-10-19 13:00:00'),(2,'invitado@gmail.com','N','0000-00-00 00:00:00','0000-00-00 00:00:00',0,'N',2,'N','N','Y','2015-10-19 13:00:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-10-22 20:21:07
