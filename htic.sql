-- MySQL dump 10.17  Distrib 10.3.22-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: htic
-- ------------------------------------------------------
-- Server version	10.3.22-MariaDB-1ubuntu1

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
-- Table structure for table `Admin`
--

DROP TABLE IF EXISTS `Admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(45) DEFAULT NULL,
  `Nombre` varchar(45) DEFAULT NULL,
  `Apellidos` varchar(45) DEFAULT NULL,
  `Contrasena` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb4 PAGE_CHECKSUM=1 COMMENT='Contiene los usuarios administradores que pueden acceder al Backend';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Admin`
--

LOCK TABLES `Admin` WRITE;
/*!40000 ALTER TABLE `Admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `Admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Avance`
--

DROP TABLE IF EXISTS `Avance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Avance` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Usuarios_Id` int(10) unsigned NOT NULL,
  `N1` tinyint(1) NOT NULL DEFAULT 0,
  `N2` tinyint(1) NOT NULL DEFAULT 0,
  `N3` tinyint(1) NOT NULL DEFAULT 0,
  `N4` tinyint(1) NOT NULL DEFAULT 0,
  `Cuestionario` tinyint(1) NOT NULL DEFAULT 0,
  `Fecha_creacion` datetime DEFAULT NULL,
  `Ultima_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Usuarios_Id` (`Usuarios_Id`),
  CONSTRAINT `FK_Avance_Usuarios` FOREIGN KEY (`Usuarios_Id`) REFERENCES `Usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Avance`
--

LOCK TABLES `Avance` WRITE;
/*!40000 ALTER TABLE `Avance` DISABLE KEYS */;
INSERT INTO `Avance` VALUES (1,1,1,1,1,0,0,NULL,NULL);
/*!40000 ALTER TABLE `Avance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Cuestionario`
--

DROP TABLE IF EXISTS `Cuestionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Cuestionario` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Usuarios_Id` int(10) unsigned NOT NULL,
  `P1` tinyint(1) DEFAULT 0,
  `P2` tinyint(1) DEFAULT 0,
  `P3` tinyint(1) DEFAULT 0,
  `P4` tinyint(1) DEFAULT 0,
  `P5` tinyint(1) DEFAULT 0,
  `P6` tinyint(1) DEFAULT 0,
  `P7` tinyint(1) DEFAULT 0,
  `P8` tinyint(1) DEFAULT 0,
  `P9` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`Id`),
  KEY `FK_Cuestionario_Usuarios` (`Usuarios_Id`),
  CONSTRAINT `FK_Cuestionario_Usuarios` FOREIGN KEY (`Usuarios_Id`) REFERENCES `Usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Contiene las respuestas del cuestionario de opinión';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Cuestionario`
--

LOCK TABLES `Cuestionario` WRITE;
/*!40000 ALTER TABLE `Cuestionario` DISABLE KEYS */;
/*!40000 ALTER TABLE `Cuestionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Logs`
--

DROP TABLE IF EXISTS `Logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Logs` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Usuarios_Id` int(10) unsigned NOT NULL,
  `Accion` varchar(45) DEFAULT NULL,
  `Tiempo` timestamp NULL DEFAULT current_timestamp(),
  `Url` varchar(100) DEFAULT NULL,
  `Ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Id`),
  KEY `FK_Logs_Usuarios` (`Usuarios_Id`),
  CONSTRAINT `FK_Logs_Usuarios` FOREIGN KEY (`Usuarios_Id`) REFERENCES `Usuarios` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COMMENT='Contiene un seguimiento de la actividad realizada por el usuario';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `Profesores`
--

DROP TABLE IF EXISTS `Profesores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Profesores` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Rfc` varchar(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Plantel` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`),
  UNIQUE KEY `Profesores_UN` (`Rfc`)
) ENGINE=Aria DEFAULT CHARSET=utf8mb4 PAGE_CHECKSUM=1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profesores`
--

LOCK TABLES `Profesores` WRITE;
/*!40000 ALTER TABLE `Profesores` DISABLE KEYS */;
/*!40000 ALTER TABLE `Profesores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuarios`
--

DROP TABLE IF EXISTS `Usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuarios` (
  `Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Usuario` varchar(100) DEFAULT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Contrasena` varchar(20) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL,
  `Plantel` smallint(4) DEFAULT NULL COMMENT '47202=Azcapotzalco, 47203=Naucalpan, 47204=Vallejo, 47205=Oriente, 47206=Sur',
  `Tipo` set('A','P','E') DEFAULT 'A' COMMENT 'A = Alumno, P = Profesor, E = Especial',
  `Generacion` smallint(4) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COMMENT='Contiene los datos de los alumnos y usuarios que ingresaran al sistema';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuarios`
--

LOCK TABLES `Usuarios` WRITE;
/*!40000 ALTER TABLE `Usuarios` DISABLE KEYS */;
INSERT INTO `Usuarios` VALUES (1,'BASJ850331631','Jonathan','Bailon Segura','31/03/1985','jonn59@gmail.com',NULL,'P',NULL),(2,'sdsdsd','dsfsd','sdfsdf','2020-08-05','sdf',NULL,'P',1992);
/*!40000 ALTER TABLE `Usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-09 17:24:42
