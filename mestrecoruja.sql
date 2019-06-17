CREATE DATABASE  IF NOT EXISTS `mestrecoruja` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `mestrecoruja`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: mestrecoruja
-- ------------------------------------------------------
-- Server version	5.7.19

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
-- Table structure for table `atividade`
--

DROP TABLE IF EXISTS `atividade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `atividade` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `index_img` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `tipo` varchar(150) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `dt_postagem` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `atividade`
--

LOCK TABLES `atividade` WRITE;
/*!40000 ALTER TABLE `atividade` DISABLE KEYS */;
/*!40000 ALTER TABLE `atividade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `solicitacao`
--

DROP TABLE IF EXISTS `solicitacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `solicitacao` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(150) NOT NULL,
  `tema` varchar(150) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `index_img` int(11) NOT NULL,
  `dt_recebe` date DEFAULT NULL,
  `dt_entrega` date DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `solicitacao`
--

LOCK TABLES `solicitacao` WRITE;
/*!40000 ALTER TABLE `solicitacao` DISABLE KEYS */;
INSERT INTO `solicitacao` VALUES (1,'Atividade dia da Agua','','Preciso de uma atividade que contenha lugares onde há água abundante .exemplo:cachoeiras,rios,mar.',0,'2019-06-14','2019-06-17','Jefferson Campos','jefferson@gmail.com','Aguardando');
/*!40000 ALTER TABLE `solicitacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `qtd_moedas` int(11) NOT NULL,
  `forma_pagamento` varchar(150) NOT NULL,
  `ativo` tinyint(1) NOT NULL,
  `nivel` int(11) NOT NULL,
  `venc_cadastro` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Welbert Martins','welbert3388@gmail.com','$2y$10$jlKGbvjrUhTp3jw.y7zcc.5C/2TfmA.1JVHxteBFfcynQHp1GavUK','08149978640',200,'1',1,1,'2019-12-25'),(2,'Joao da Silva','joaodasilva@gmail.com','$2y$10$lxZWo3u1LM.s3XnmyMTS2u8Mxs67GazgTHfcEnSSJ/4pZuzoxaet2','11111111111',50,'2',0,0,'2019-12-31'),(3,'Hebert Prata','hebert-prata@hotmail.com','$2y$10$OBmTZH7rd4IFPepsdNxiTOhu9YmV48rlP4teVkn40EmM.dRmmR4Ii','11111111111',0,'Unitário',1,1,'2019-12-10'),(4,'Jefferson Campos','jefferson@gmail.com','$2y$10$j82K//IhX7vh.6ncg6ccnOdJOzrQJ285LXbx5ZsIklQa1SmpP1ubC','22222222222',0,'Mensal',0,0,'2019-12-10'),(5,'Arthur','arthur@gmail.com','$2y$10$0ez8m5JMV19gKigW6udf0OKRREnWSpo3Sm096i5nPSEW0nZ6B22GC','11111111111',0,'Unitário',0,0,'2019-12-10'),(6,'Luiz Henrique','luiz@gmail.com','$2y$10$quCPf3Q2cl2FtyNkJfjvDewwzef5Nw9qNCTqqMLWoBMVOVFBw5Gey','11111111111',0,'Mensal',0,0,'2019-12-10'),(7,'Patricia Gabriela','patricia@gmail.com','$2y$10$3AFQ7ov6uiKk5xuP/167AuJjmOjbwdfmDtP04q2Hk2sgi1XsxQfz2','11111111111',0,'1',0,0,'2019-08-02'),(8,'Rafaela','rafaela@gmail.com','$2y$10$992/riQGvAqbje06IjC/iuFyBptzePGN19ebipi75zW.5JmVDqzTK','11111111111',0,'1',0,0,'2019-09-13'),(9,'Lucia','lucia@gmail.com','$2y$10$iE./4QwoWykMQwqGY5CFDeUFsMNPq30TDjIVtemq5K5nt8Uekq726','11111111111',0,'unitario',0,0,'2019-08-15'),(10,'Tais','tais@yahoo.com','$2y$10$63icbUhTscBtJAVKyDBYhOKT//9007jwBugHeBg7tkPfW4faYFSxO','22222222222',0,'unitario',0,0,'2030-05-25'),(11,'Silvia','silvia@hotmail.com','$2y$10$CTTYJm8AfU3ueVZizWzhZuSqJQn5IX858nm6.8Xxp/S9udzB6GseS','33333333333',0,'unitario',0,0,'2020-03-01'),(12,'Vania','vania@ig.com','$2y$10$u5OeIHldVPXD/Gejggi8BOQemth1XWaI6Hxh84QKu9O3iO7DDvJZ6','44444444444',0,'mensal',0,0,'2019-08-02'),(13,'erica','ericazinha@gmail.com','$2y$10$uweuDAxbpobbfcwgIs2/1.6NgAq29dEhk.xF3ECZbLv.M.vrsOQl2','55226688332',0,'mensal',0,0,'2019-08-02');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mestrecoruja'
--

--
-- Dumping routines for database 'mestrecoruja'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-17 17:02:45
