-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: cinelitas
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('franklin','1234'),('pruebas','123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bookings`
--

DROP TABLE IF EXISTS `bookings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bookings` (
  `username` varchar(200) NOT NULL,
  `movie` varchar(200) NOT NULL,
  `theatre` varchar(200) NOT NULL,
  `seats` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `movie_time` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `amount` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bookings`
--

LOCK TABLES `bookings` WRITE;
/*!40000 ALTER TABLE `bookings` DISABLE KEYS */;
INSERT INTO `bookings` VALUES ('adminfg','Superman 2','CINELITAS-METROPOLI','A1 A2','24-08-2023','22:00','CARTAGO',400,22),('adminfg','Superman 2','CINELITAS-METROPOLI','D1 D2','24-08-2023','22:00','CARTAGO',400,23),('adminfg','Superman 2','CINELITAS-METROPOLI','C3 C4','24-08-2023','22:00','CARTAGO',400,24),('ejemplo2','Superman 2','CINELITAS-METROPOLI','C6','23-08-2023','22:00','CARTAGO',200,25),('adminfg','Superman 2','CINELITAS-METROPOLI','F2 F3','23-08-2023','22:00','CARTAGO',360,26),('adminfg','Superman 2','CINELITAS-METROPOLI','C7 C8','23-08-2023','22:00','CARTAGO',4000,27);
/*!40000 ALTER TABLE `bookings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `movies` (
  `Movie_Name` varchar(50) NOT NULL,
  `Actor` varchar(25) NOT NULL,
  `Actress` varchar(25) NOT NULL,
  `Release_date` varchar(50) NOT NULL,
  `Director` varchar(50) NOT NULL,
  `Movie_id` int NOT NULL AUTO_INCREMENT,
  `poster` varchar(300) NOT NULL,
  `RunTime` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ActorImg` varchar(300) NOT NULL,
  `ActressImg` varchar(400) NOT NULL,
  `DirectorImg` varchar(300) NOT NULL,
  `Description` varchar(4000) DEFAULT NULL,
  `trailer` varchar(400) NOT NULL,
  `wiki` varchar(400) NOT NULL,
  PRIMARY KEY (`Movie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES ('Superman 2','','','','',29,'','','','','','','','',''),('Barbie','','','','',30,'','','','','','','','',''),('Los Vengadores','','','','',35,'','','','','','','','',''),('Hulk 2','','','','',39,'','','','','','','','',''),('Gran Turismo','','','','',46,'','','','','','','','',''),('Sonido de la Libertad','','','','',47,'','','','','','','','',''),('Rapidos y Furiosos 10','','','','',48,'','','','','','','','',''),('La Cola del Diablo','','','','',49,'','','','','','','','',''),('Venom 2','','','','',50,'','','','','','','','','');
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `theatres`
--

DROP TABLE IF EXISTS `theatres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `theatres` (
  `Theatre_id` int NOT NULL AUTO_INCREMENT,
  `Theatre_Name` varchar(200) NOT NULL,
  `Location` varchar(300) NOT NULL,
  `Movie_Name` varchar(200) NOT NULL,
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `time4` varchar(200) NOT NULL,
  `time5` varchar(200) NOT NULL,
  PRIMARY KEY (`Theatre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `theatres`
--

LOCK TABLES `theatres` WRITE;
/*!40000 ALTER TABLE `theatres` DISABLE KEYS */;
INSERT INTO `theatres` VALUES (3,'CINELITAS-METROPOLI','CARTAGO','Superman 2','10:00','13:30','22:00','',''),(4,'CINELITAS-PASEO DE LAS FLORES','HEREDIA','Barbie','11:00','14:00','','',''),(5,'CINELITAS-ESCAZÚ','SAN JOSE','Gran Turismo','22:00','','','',''),(6,'CINELITAS-LINDORA VIP','LINDORA','TOC TOC TOC','17:00','20:00','23:00','',''),(7,'CINELITAS-LIBERIA','GUANACASTE','La Cola del Diablo','17:00','21:00','','',''),(8,'CINELITAS-CARIBE','LIMON','Venom 2','13:00','16:30','','','');
/*!40000 ALTER TABLE `theatres` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timings`
--

DROP TABLE IF EXISTS `timings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `timings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `showtime` varchar(200) NOT NULL,
  `Theatre_Name` varchar(200) NOT NULL,
  `ticket_rate_Gold` int NOT NULL,
  `ticket_rate_Silver` int NOT NULL,
  `seats` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timings`
--

LOCK TABLES `timings` WRITE;
/*!40000 ALTER TABLE `timings` DISABLE KEYS */;
INSERT INTO `timings` VALUES (5,'22:00','CINELITAS-METROPOLI',2000,1800,95),(6,'22:00','CINELITAS-METROPOLI',1500,1200,95),(7,'11:00','CINELITAS-PASEO DE LAS FLORES',1500,1000,120),(8,'13:00','CINELITAS-PASEO DE LAS FLORES',2000,1800,120),(9,'17:00','CINELITAS-ESCAZÚ',2000,1500,120),(10,'20:00','CINELITAS-LINDORA VIP',2500,2000,120),(11,'10:00','CINELITAS-LIBERIA',1500,1000,120),(12,'22:00','CINELITAS-LIBERIA',2500,2200,120),(13,'22:00','CINELITAS-LIBERIA',2000,1800,120),(14,'13:00','CINELITAS-LIBERIA',2000,1800,120),(15,'17:00','CINELITAS-LIBERIA',2500,2200,117),(16,'20:00','CINELITAS-CARIBE',3000,2800,120),(17,'20:00','CINELITAS-CARIBE',2500,2200,120),(18,'17:00','CINELITAS-CARIBE',2500,2000,118),(19,'23:00','CINELITAS-CARIBE',2500,2100,120),(20,'23:00','CINELITAS-CARIBE',2500,2200,118),(21,'16:00','CINELITAS-METROPOLI',2500,1800,117);
/*!40000 ALTER TABLE `timings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('adminfg','franklin@test.com','$2y$10$sh90DaMMIF0wsB7nl0FuwuKvALWoUD/sh9rjcCsiHM3RqXC42PhXy'),('ejemplo2','admin@gmailcom','$2y$10$Opkh0V1KcEex9vusNHrmI.Ly8Vdxfo.iiTUgAFeZs9cFHNLYIg2Dy'),('fgaitan','frgaitan24@gmail.com','$2y$10$oooXGb8mT8u2EvlnnJ0.3O0FjOAJLNBjj84eZaxMgdmp8UpKQOJq2'),('user','kachaca01@hotmail.es','$2y$10$0gPQKiT9yxpnDvSjG9PiMeUR.ZbPQVuGNl5XqWd93a6bMVu3SWDCm');
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

-- Dump completed on 2023-08-23 23:51:32
