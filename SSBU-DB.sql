CREATE DATABASE  IF NOT EXISTS `ssbu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ssbu`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: ssbu
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `characters` (
  `CharID` int unsigned NOT NULL AUTO_INCREMENT,
  `fighter_name` varchar(45) NOT NULL,
  `imagepath` varchar(2083) DEFAULT NULL,
  PRIMARY KEY (`CharID`),
  UNIQUE KEY `CharID` (`CharID`),
  UNIQUE KEY `fighter_name` (`fighter_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credentials`
--

DROP TABLE IF EXISTS `credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credentials` (
  `UID` int unsigned NOT NULL AUTO_INCREMENT,
  `UN` varchar(45) NOT NULL,
  `PWD` varchar(768) NOT NULL,
  `NaCl` tinyblob,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID` (`UID`),
  UNIQUE KEY `UN` (`UN`),
  CONSTRAINT `credentials_ibfk_1` FOREIGN KEY (`UN`) REFERENCES `users` (`displayname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credentials`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
INSERT INTO `credentials` VALUES (1,'TESTER','0715f6cdf92244c850c984ed664843202fe717dc03402d4f49ef38c368beb855edf9052939b1ce6300e894aa75706193bf14399feffc58eff67337f790ab60b2277281da020c7fe259dd98ad5ce4c4f712b0215f8e6ee682c1df20485039caffc60c3755be79347a30214262a51d6ae7bd10881ae0dfa778c849fa887b3e612df4f275671a16e80b7bbc5382348b8efefa2ab9cce126da718a111744d535131041d0790983a97840b4f8c08051cb02dcf970a05d89b7ccd22f865034bca1a752253755ee7795323084fc9e5e85b06e5fe6d9e8bda1e0a57ae8998038bb0cb3c29e9a82275da7660d3e5a9a8f0cdcd130e283bc28c93aa8de0bbc32b52fb21d80c0308b32f3dfaa72d23c879a65a952dd8272ebd99c5aea5b9f14a2d4e8fbf40a388fc557864c0d477988614b903f20b914efd29c3d6806680ef9e94b7d88814e939852f760323374c97d44fd43cd3b88a4f9f18a08a681eac2776c92752cf7ffcc59fd70d4a01d57b1cccc8f6d9399c23095da1c415a686c4b5673b5f72f075b',_binary '7930afe4893ab13298d3d96ba341d54fc21afc6b40cd392cec6c275ffc425c9ef9a0e19b');
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `UID` int unsigned NOT NULL AUTO_INCREMENT,
  `F_Name` varchar(45) NOT NULL,
  `L_Name` varchar(45) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `displayname` varchar(45) NOT NULL,
  `fighter_main` int unsigned DEFAULT NULL,
  `fighter_second` int unsigned DEFAULT NULL,
  `fighter_pocket` int unsigned DEFAULT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID` (`UID`),
  UNIQUE KEY `displayname` (`displayname`),
  KEY `fighter_main` (`fighter_main`),
  KEY `fighter_second` (`fighter_second`),
  KEY `fighter_pocket` (`fighter_pocket`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fighter_main`) REFERENCES `characters` (`CharID`),
  CONSTRAINT `users_ibfk_2` FOREIGN KEY (`fighter_second`) REFERENCES `characters` (`CharID`),
  CONSTRAINT `users_ibfk_3` FOREIGN KEY (`fighter_pocket`) REFERENCES `characters` (`CharID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Test','User','testemail@gmail.com','TESTER',NULL,NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'ssbu'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-30 19:26:33
