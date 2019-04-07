-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: record
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `login_tbl`
--

DROP TABLE IF EXISTS `login_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_tbl` (
  `user_id` int(200) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` longtext NOT NULL,
  `user_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_tbl`
--

LOCK TABLES `login_tbl` WRITE;
/*!40000 ALTER TABLE `login_tbl` DISABLE KEYS */;
INSERT INTO `login_tbl` VALUES (1,'stephen','$2y$10$LdnOTbz4hMWEkPSA/aOKKuISBhw7eSPllS7dWitm1d5PKz/DKXZVS','2019-02-09 02:44:39');
/*!40000 ALTER TABLE `login_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_patient_records`
--

DROP TABLE IF EXISTS `tbl_patient_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_patient_records` (
  `patient_id` int(100) NOT NULL AUTO_INCREMENT,
  `patient_folder_number` varchar(50) NOT NULL,
  `patient_type` varchar(20) NOT NULL,
  `patient_f_name` varchar(20) NOT NULL,
  `patient_s_name` varchar(20) NOT NULL,
  `patient_dob` varchar(20) NOT NULL,
  `patient_age` int(10) NOT NULL,
  `patient_address` mediumtext NOT NULL,
  `patient_gender` varchar(20) NOT NULL,
  `patient_occupation` varchar(20) NOT NULL,
  `patient_marital_status` varchar(20) NOT NULL,
  `patient_telephone` varchar(50) NOT NULL,
  `patient_relative` varchar(50) NOT NULL,
  `relative_telephone` varchar(50) NOT NULL,
  `patient_nhis_number` varchar(50) NOT NULL,
  `patient_nhis_id` varchar(50) NOT NULL,
  `patient_religion` varchar(50) NOT NULL,
  `patient_current_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_patient_records`
--

LOCK TABLES `tbl_patient_records` WRITE;
/*!40000 ALTER TABLE `tbl_patient_records` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_patient_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'record'
--

--
-- Dumping routines for database 'record'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-29 18:37:09
