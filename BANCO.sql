-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bd_noticia
-- ------------------------------------------------------
-- Server version	5.7.17

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
-- Table structure for table `adm`
--

DROP TABLE IF EXISTS `adm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `foto` varchar(250) DEFAULT NULL,
  `usuario` varchar(15) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adm`
--

LOCK TABLES `adm` WRITE;
/*!40000 ALTER TABLE `adm` DISABLE KEYS */;
INSERT INTO `adm` VALUES (1,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123',NULL),(2,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123',NULL),(3,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123','2019-01-08 00:45:40'),(4,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123','2019-01-08 23:21:10'),(5,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','12345','2019-01-08 23:22:28'),(6,'veronica henrique ferreira','47442499_594616297638526_6155465077571977216_n.jpg','igor','55','2019-01-08 23:24:37'),(7,'veronica henrique ferreira','48359082_1133305376833401_8094171095457857536_n.png','igor','111','2019-01-08 23:25:20'),(8,'veronica henrique ferreira','48359082_1133305376833401_8094171095457857536_n.png','igor','111','2019-01-08 23:27:46'),(9,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123','2019-01-08 23:27:58'),(10,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123','2019-01-09 00:31:55'),(11,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123','2019-01-09 00:33:24'),(12,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','IVO','123','2019-01-09 00:51:04'),(13,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','IVO','123','2019-01-09 00:51:05'),(14,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','123','2019-01-09 01:01:31'),(15,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','igor','Z','2019-01-09 01:04:26'),(16,'veronica henrique ferreira','45159263_2179090552308951_5210048853377548288_n.jpg','IVO','333','2019-01-09 01:05:24'),(17,'veronica henrique ferreira','download.png','igor','123','2019-01-09 01:18:53'),(18,'veronica henrique ferreira','captura de tela.png','igor','1','2019-01-09 01:23:16');
/*!40000 ALTER TABLE `adm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (1,'geral'),(2,'xbox gold'),(3,'lancamento'),(4,'reviews'),(5,'previas'),(6,'promocao');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `noticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor_id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `post` varchar(100) NOT NULL,
  `categoria` int(11) NOT NULL,
  `texto1` varchar(1500) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `video` varchar(100) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria` (`categoria`),
  KEY `autor_id` (`autor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noticia`
--

LOCK TABLES `noticia` WRITE;
/*!40000 ALTER TABLE `noticia` DISABLE KEYS */;
/*!40000 ALTER TABLE `noticia` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-09 17:23:16
