-- MySQL dump 10.17  Distrib 10.3.24-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: BloodBankDB
-- ------------------------------------------------------
-- Server version	10.3.24-MariaDB-2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `BloodBankDB`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `BloodBankDB` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `BloodBankDB`;

--
-- Table structure for table `available_blood_bank`
--

DROP TABLE IF EXISTS `available_blood_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `available_blood_bank` (
  `hospital_username` varchar(50) NOT NULL,
  `blood_type` varchar(3) NOT NULL,
  `blood_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `available_blood_bank`
--

LOCK TABLES `available_blood_bank` WRITE;
/*!40000 ALTER TABLE `available_blood_bank` DISABLE KEYS */;
INSERT INTO `available_blood_bank` VALUES ('hospital1','B+',32),('hospital1','A+',24),('hospital1','A-',50),('hospital1','AB+',50),('hospital2','A-',50),('hospital2','AB+',50),('hospital2','B+',48),('admin','B+',78);
/*!40000 ALTER TABLE `available_blood_bank` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credentials`
--

DROP TABLE IF EXISTS `credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credentials` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` char(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credentials`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
INSERT INTO `credentials` VALUES ('hospital1','49f0bad299687c62334182178bfd75d8','hospital'),('hospital2','49f0bad299687c62334182178bfd75d8','hospital'),('hospital3','49f0bad299687c62334182178bfd75d8','hospital'),('rhitayu2','49f0bad299687c62334182178bfd75d8','receiver'),('test','49f0bad299687c62334182178bfd75d8','receiver'),('test2','49f0bad299687c62334182178bfd75d8','receiver');
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hospitals` (
  `username` varchar(50) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `hospital_phone_number` int(11) NOT NULL,
  `hospital_address` varchar(100) NOT NULL,
  `hospital_email_address` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospitals`
--

LOCK TABLES `hospitals` WRITE;
/*!40000 ALTER TABLE `hospitals` DISABLE KEYS */;
INSERT INTO `hospitals` VALUES ('hospital1','hospital1',999999999,'sadfasfasf','sad@sad'),('hospital2','Hospital2',999999999,'aksjfhkasjfhkasj','sad@sad'),('hospital3','Hospital3',99999,'sad@sad','sad@sad');
/*!40000 ALTER TABLE `hospitals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receivers`
--

DROP TABLE IF EXISTS `receivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `receivers` (
  `username` varchar(50) NOT NULL,
  `receiver_name` varchar(50) NOT NULL,
  `receiver_gender` char(1) NOT NULL,
  `receiver_age` int(11) NOT NULL,
  `receiver_phone_number` bigint(11) NOT NULL,
  `receiver_email_address` varchar(50) NOT NULL,
  `receiver_blood_type` varchar(3) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receivers`
--

LOCK TABLES `receivers` WRITE;
/*!40000 ALTER TABLE `receivers` DISABLE KEYS */;
INSERT INTO `receivers` VALUES ('rhitayu2','Rhitayu ','m',22,9999999999,'sad@sad','A+'),('test','Rhitayu','m',22,99999999999,'sad@sad','B+'),('test2','Rhitayu ','f',22,9998887776,'sad@sad','A+');
/*!40000 ALTER TABLE `receivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requested_blood_bank`
--

DROP TABLE IF EXISTS `requested_blood_bank`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requested_blood_bank` (
  `hospital_username` varchar(50) NOT NULL,
  `receiver_username` varchar(50) NOT NULL,
  `blood_type` varchar(3) NOT NULL,
  `blood_quantity` int(11) NOT NULL,
  `time_requested` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requested_blood_bank`
--

LOCK TABLES `requested_blood_bank` WRITE;
/*!40000 ALTER TABLE `requested_blood_bank` DISABLE KEYS */;
INSERT INTO `requested_blood_bank` VALUES ('hospital1','test','B+',12,'2020-12-02 08:27:58'),('hospital2','test','B+',2,'2020-12-02 08:28:08'),('hospital1','test2','A+',12,'2020-12-02 08:31:52'),('hospital1','test2','A+',12,'2020-12-02 08:34:03'),('hospital1','rhitayu2','A+',2,'2020-12-02 08:40:44'),('hospital1','test','B+',2,'2020-12-02 09:21:35'),('hospital1','test','B+',3,'2020-12-02 09:21:41'),('hospital1','test','B+',1,'2020-12-02 13:42:46');
/*!40000 ALTER TABLE `requested_blood_bank` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-02 19:35:48
