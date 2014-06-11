# Host: 127.0.0.1  (Version: 5.5.8-log)
# Date: 2014-04-14 22:33:55
# Generator: MySQL-Front 5.3  (Build 2.53)

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

DROP DATABASE IF EXISTS `mvcphp1`;
CREATE DATABASE `mvcphp1` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mvcphp1`;

#
# Source for table "ciudades"
#

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(100) DEFAULT NULL,
  `pais` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "ciudades"
#

INSERT INTO `ciudades` VALUES (1,'Santo Domingo',1),(2,'Cartagena',2),(3,'Santiago',1),(4,'Alicante',2),(5,'lima',3),(6,'trujillo',3),(7,'cliclayo',3);

#
# Source for table "paises"
#

DROP TABLE IF EXISTS `paises`;
CREATE TABLE `paises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "paises"
#

INSERT INTO `paises` VALUES (1,'Rep. Dominicana'),(2,'Espana'),(3,'Peru');

#
# Source for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `cuerpo` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'Smarty','demo','upl_534ca5293421b.jpg'),(2,'comentarios','comentario y subido de imagen de Jessica Alba.','upl_534ca5e505906.jpg'),(3,'Test 2','Test de imagen 2, un auto chevere .','upl_534ca68bb5e0d.jpg');

#
# Source for table "prueba"
#

DROP TABLE IF EXISTS `prueba`;
CREATE TABLE `prueba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8;

#
# Data for table "prueba"
#

INSERT INTO `prueba` VALUES (1,'nombre 0'),(2,'nombre 1'),(3,'nombre 2'),(4,'nombre 3'),(5,'nombre 4'),(6,'nombre 5'),(7,'nombre 6'),(8,'nombre 7'),(9,'nombre 8'),(10,'nombre 9'),(11,'nombre 10'),(12,'nombre 11'),(13,'nombre 12'),(14,'nombre 13'),(15,'nombre 14'),(16,'nombre 15'),(17,'nombre 16'),(18,'nombre 17'),(19,'nombre 18'),(20,'nombre 19'),(21,'nombre 20'),(22,'nombre 21'),(23,'nombre 22'),(24,'nombre 23'),(25,'nombre 24'),(26,'nombre 25'),(27,'nombre 26'),(28,'nombre 27'),(29,'nombre 28'),(30,'nombre 29'),(31,'nombre 30'),(32,'nombre 31'),(33,'nombre 32'),(34,'nombre 33'),(35,'nombre 34'),(36,'nombre 35'),(37,'nombre 36'),(38,'nombre 37'),(39,'nombre 38'),(40,'nombre 39'),(41,'nombre 40'),(42,'nombre 41'),(43,'nombre 42'),(44,'nombre 43'),(45,'nombre 44'),(46,'nombre 45'),(47,'nombre 46'),(48,'nombre 47'),(49,'nombre 48'),(50,'nombre 49'),(51,'nombre 50'),(52,'nombre 51'),(53,'nombre 52'),(54,'nombre 53'),(55,'nombre 54'),(56,'nombre 55'),(57,'nombre 56'),(58,'nombre 57'),(59,'nombre 58'),(60,'nombre 59'),(61,'nombre 60'),(62,'nombre 61'),(63,'nombre 62'),(64,'nombre 63'),(65,'nombre 64'),(66,'nombre 65'),(67,'nombre 66'),(68,'nombre 67'),(69,'nombre 68'),(70,'nombre 69'),(71,'nombre 70'),(72,'nombre 71'),(73,'nombre 72'),(74,'nombre 73'),(75,'nombre 74'),(76,'nombre 75'),(77,'nombre 76'),(78,'nombre 77'),(79,'nombre 78'),(80,'nombre 79'),(81,'nombre 80'),(82,'nombre 81'),(83,'nombre 82'),(84,'nombre 83'),(85,'nombre 84'),(86,'nombre 85'),(87,'nombre 86'),(88,'nombre 87'),(89,'nombre 88'),(90,'nombre 89'),(91,'nombre 90'),(92,'nombre 91'),(93,'nombre 92'),(94,'nombre 93'),(95,'nombre 94'),(96,'nombre 95'),(97,'nombre 96'),(98,'nombre 97'),(99,'nombre 98'),(100,'nombre 99'),(101,'nombre 100'),(102,'nombre 101'),(103,'nombre 102'),(104,'nombre 103'),(105,'nombre 104'),(106,'nombre 105'),(107,'nombre 106'),(108,'nombre 107'),(109,'nombre 108'),(110,'nombre 109'),(111,'nombre 110'),(112,'nombre 111'),(113,'nombre 112'),(114,'nombre 113'),(115,'nombre 114'),(116,'nombre 115'),(117,'nombre 116'),(118,'nombre 117'),(119,'nombre 118'),(120,'nombre 119'),(121,'nombre 120'),(122,'nombre 121'),(123,'nombre 122'),(124,'nombre 123'),(125,'nombre 124'),(126,'nombre 125'),(127,'nombre 126'),(128,'nombre 127'),(129,'nombre 128'),(130,'nombre 129'),(131,'nombre 130'),(132,'nombre 131'),(133,'nombre 132'),(134,'nombre 133'),(135,'nombre 134'),(136,'nombre 135'),(137,'nombre 136'),(138,'nombre 137'),(139,'nombre 138'),(140,'nombre 139'),(141,'nombre 140'),(142,'nombre 141'),(143,'nombre 142'),(144,'nombre 143'),(145,'nombre 144'),(146,'nombre 145'),(147,'nombre 146'),(148,'nombre 147'),(149,'nombre 148'),(150,'nombre 149'),(151,'nombre 150'),(152,'nombre 151'),(153,'nombre 152'),(154,'nombre 153'),(155,'nombre 154'),(156,'nombre 155'),(157,'nombre 156'),(158,'nombre 157'),(159,'nombre 158'),(160,'nombre 159'),(161,'nombre 160'),(162,'nombre 161'),(163,'nombre 162'),(164,'nombre 163'),(165,'nombre 164'),(166,'nombre 165'),(167,'nombre 166'),(168,'nombre 167'),(169,'nombre 168'),(170,'nombre 169'),(171,'nombre 170'),(172,'nombre 171'),(173,'nombre 172'),(174,'nombre 173'),(175,'nombre 174'),(176,'nombre 175'),(177,'nombre 176'),(178,'nombre 177'),(179,'nombre 178'),(180,'nombre 179'),(181,'nombre 180'),(182,'nombre 181'),(183,'nombre 182'),(184,'nombre 183'),(185,'nombre 184'),(186,'nombre 185'),(187,'nombre 186'),(188,'nombre 187'),(189,'nombre 188'),(190,'nombre 189'),(191,'nombre 190'),(192,'nombre 191'),(193,'nombre 192'),(194,'nombre 193'),(195,'nombre 194'),(196,'nombre 195'),(197,'nombre 196'),(198,'nombre 197'),(199,'nombre 198'),(200,'nombre 199'),(201,'nombre 200'),(202,'nombre 201'),(203,'nombre 202'),(204,'nombre 203'),(205,'nombre 204'),(206,'nombre 205'),(207,'nombre 206'),(208,'nombre 207'),(209,'nombre 208'),(210,'nombre 209'),(211,'nombre 210'),(212,'nombre 211'),(213,'nombre 212'),(214,'nombre 213'),(215,'nombre 214'),(216,'nombre 215'),(217,'nombre 216'),(218,'nombre 217'),(219,'nombre 218'),(220,'nombre 219'),(221,'nombre 220'),(222,'nombre 221'),(223,'nombre 222'),(224,'nombre 223'),(225,'nombre 224'),(226,'nombre 225'),(227,'nombre 226'),(228,'nombre 227'),(229,'nombre 228'),(230,'nombre 229'),(231,'nombre 230'),(232,'nombre 231'),(233,'nombre 232'),(234,'nombre 233'),(235,'nombre 234'),(236,'nombre 235'),(237,'nombre 236'),(238,'nombre 237'),(239,'nombre 238'),(240,'nombre 239'),(241,'nombre 240'),(242,'nombre 241'),(243,'nombre 242'),(244,'nombre 243'),(245,'nombre 244'),(246,'nombre 245'),(247,'nombre 246'),(248,'nombre 247'),(249,'nombre 248'),(250,'nombre 249'),(251,'nombre 250'),(252,'nombre 251'),(253,'nombre 252'),(254,'nombre 253'),(255,'nombre 254'),(256,'nombre 255'),(257,'nombre 256'),(258,'nombre 257'),(259,'nombre 258'),(260,'nombre 259'),(261,'nombre 260'),(262,'nombre 261'),(263,'nombre 262'),(264,'nombre 263'),(265,'nombre 264'),(266,'nombre 265'),(267,'nombre 266'),(268,'nombre 267'),(269,'nombre 268'),(270,'nombre 269'),(271,'nombre 270'),(272,'nombre 271'),(273,'nombre 272'),(274,'nombre 273'),(275,'nombre 274'),(276,'nombre 275'),(277,'nombre 276'),(278,'nombre 277'),(279,'nombre 278'),(280,'nombre 279'),(281,'nombre 280'),(282,'nombre 281'),(283,'nombre 282'),(284,'nombre 283'),(285,'nombre 284'),(286,'nombre 285'),(287,'nombre 286'),(288,'nombre 287'),(289,'nombre 288'),(290,'nombre 289'),(291,'nombre 290'),(292,'nombre 291'),(293,'nombre 292'),(294,'nombre 293'),(295,'nombre 294'),(296,'nombre 295'),(297,'nombre 296'),(298,'nombre 297'),(299,'nombre 298'),(300,'nombre 299');

#
# Source for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuario` varchar(30) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(40) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `role` enum('admin','especial','usuario') CHARACTER SET latin1 NOT NULL DEFAULT 'admin',
  `estado` tinyint(4) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'nombre1','admin','d1b254c9620425f582e27f0044be34bee087d8b4','admin@localhost.com','admin',1,NULL,NULL),(2,'usuario1','usuario','d1b254c9620425f582e27f0044be34bee087d8b4','usuario@hotmail.com','usuario',1,NULL,NULL),(3,'especial1','especial','d1b254c9620425f582e27f0044be34bee087d8b4','especial@hotmail.com','especial',1,NULL,NULL),(4,'Guillermo','grodriguez','d1b254c9620425f582e27f0044be34bee087d8b4','grodriguez@hotmail.com','admin',1,'2014-04-07 09:30:01',0),(5,'Carlos','carlos1','d1b254c9620425f582e27f0044be34bee087d8b4','g.rodriguezp@hotmail.com','usuario',1,'2014-04-07 16:47:54',1617216438),(6,'PETER','peter','eeb3980e639031f9c0906cd52e2239094e9ee612','petterherrera@hotmail.com','usuario',1,'2014-04-07 16:56:29',1492341464),(7,'Cana','ana1','d1b254c9620425f582e27f0044be34bee087d8b4','ana@hotmail.com','usuario',1,'2014-04-09 21:20:51',1415135896);

#
# Source for procedure "sp_listaPost"
#

DROP PROCEDURE IF EXISTS `sp_listaPost`;
CREATE PROCEDURE `sp_listaPost`(
 
)
begin
   select * from posts order by id desc;
end;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
