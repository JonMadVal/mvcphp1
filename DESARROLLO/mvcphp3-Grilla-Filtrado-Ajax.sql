# Host: 127.0.0.1  (Version: 5.5.8-log)
# Date: 2014-06-15 18:33:25
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "paises"
#

INSERT INTO `paises` VALUES (1,'Rep. Dominicana'),(2,'Espana'),(3,'Peru');

#
# Source for table "permisos"
#

DROP TABLE IF EXISTS `permisos`;
CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL AUTO_INCREMENT,
  `permiso` varchar(100) NOT NULL,
  `key` varchar(50) NOT NULL,
  PRIMARY KEY (`id_permiso`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

#
# Data for table "permisos"
#

INSERT INTO `permisos` VALUES (1,'Tareas de administracion','admin_access'),(2,'Agregar Posts','nuevo_post'),(3,'Editar Posts','editar_post'),(4,'Eliminar Posts','eliminar_post');

#
# Source for table "permisos_role"
#

DROP TABLE IF EXISTS `permisos_role`;
CREATE TABLE `permisos_role` (
  `role` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) NOT NULL,
  UNIQUE KEY `role` (`role`,`permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "permisos_role"
#

INSERT INTO `permisos_role` VALUES (1,1,1),(1,2,1),(1,3,1),(1,4,1),(2,2,1),(2,3,1),(2,4,1),(3,2,1),(3,3,1);

#
# Source for table "permisos_usuario"
#

DROP TABLE IF EXISTS `permisos_usuario`;
CREATE TABLE `permisos_usuario` (
  `usuario` int(11) NOT NULL,
  `permiso` int(11) NOT NULL,
  `valor` tinyint(4) DEFAULT NULL,
  UNIQUE KEY `usuario` (`usuario`,`permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "permisos_usuario"
#

INSERT INTO `permisos_usuario` VALUES (1,2,1),(1,3,1),(1,4,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

#
# Data for table "posts"
#

INSERT INTO `posts` VALUES (1,'Smarty','demo','upl_534ca5293421b.jpg'),(2,'comentarios','comentario y subido de imagen de Jessica Alba.','upl_534ca5e505906.jpg'),(3,'Test 2','Test de imagen 2, un auto chevere .','upl_534ca68bb5e0d.jpg'),(4,'Registro','Posr registeado con permiso ACL','upl_53541d19c6d7c.jpg'),(5,'Smarty','ggffg','upl_5354912389bd9.jpg'),(6,'macro','niños','upl_539d0063eb34a.jpg'),(7,'2121','320202','upl_539da804849e6.jpg'),(8,'sdcz','xczxczxc','upl_539da81448bba.jpg'),(9,'zxc','zxczxczxc','upl_539da83050bd1.jpg'),(10,'xczxc','zxczxc','upl_539da842070a2.jpg'),(11,'zxc','zxczxczx','upl_539da84f3ccf5.jpg');

#
# Source for table "prueba"
#

DROP TABLE IF EXISTS `prueba`;
CREATE TABLE `prueba` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `id_pais` int(11) DEFAULT NULL,
  `id_ciudad` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8;

#
# Data for table "prueba"
#

INSERT INTO `prueba` VALUES (1,'nombre 0',1,1),(2,'nombre 1',1,1),(3,'nombre 2',1,1),(4,'nombre 3',1,1),(5,'nombre 4',1,1),(6,'nombre 5',1,1),(7,'nombre 6',1,1),(8,'nombre 7',1,1),(9,'nombre 8',1,1),(10,'nombre 9',1,1),(11,'nombre 10',1,1),(12,'nombre 11',1,1),(13,'nombre 12',1,1),(14,'nombre 13',1,1),(15,'nombre 14',1,1),(16,'nombre 15',1,1),(17,'nombre 16',1,1),(18,'nombre 17',1,1),(19,'nombre 18',1,1),(20,'nombre 19',1,1),(21,'nombre 20',1,1),(22,'nombre 21',1,1),(23,'nombre 22',1,1),(24,'nombre 23',1,1),(25,'nombre 24',1,1),(26,'nombre 25',1,1),(27,'nombre 26',1,1),(28,'nombre 27',1,1),(29,'nombre 28',1,1),(30,'nombre 29',1,1),(31,'nombre 30',1,1),(32,'nombre 31',1,1),(33,'nombre 32',1,1),(34,'nombre 33',1,1),(35,'nombre 34',1,1),(36,'nombre 35',1,1),(37,'nombre 36',1,1),(38,'nombre 37',1,1),(39,'nombre 38',1,1),(40,'nombre 39',1,1),(41,'nombre 40',1,1),(42,'nombre 41',1,1),(43,'nombre 42',1,1),(44,'nombre 43',1,1),(45,'nombre 44',1,1),(46,'nombre 45',1,1),(47,'nombre 46',1,1),(48,'nombre 47',1,1),(49,'nombre 48',1,1),(50,'nombre 49',1,1),(51,'nombre 50',1,1),(52,'nombre 51',1,1),(53,'nombre 52',1,1),(54,'nombre 53',1,1),(55,'nombre 54',1,1),(56,'nombre 55',1,1),(57,'nombre 56',1,1),(58,'nombre 57',1,1),(59,'nombre 58',1,1),(60,'nombre 59',1,1),(61,'nombre 60',1,1),(62,'nombre 61',1,1),(63,'nombre 62',1,1),(64,'nombre 63',1,1),(65,'nombre 64',1,1),(66,'nombre 65',1,1),(67,'nombre 66',1,1),(68,'nombre 67',1,1),(69,'nombre 68',1,1),(70,'nombre 69',1,1),(71,'nombre 70',1,1),(72,'nombre 71',1,1),(73,'nombre 72',1,1),(74,'nombre 73',1,1),(75,'nombre 74',1,1),(76,'nombre 75',1,3),(77,'nombre 76',1,3),(78,'nombre 77',1,3),(79,'nombre 78',1,3),(80,'nombre 79',1,3),(81,'nombre 80',1,3),(82,'nombre 81',1,3),(83,'nombre 82',1,3),(84,'nombre 83',1,3),(85,'nombre 84',1,3),(86,'nombre 85',1,3),(87,'nombre 86',1,3),(88,'nombre 87',1,3),(89,'nombre 88',1,3),(90,'nombre 89',1,3),(91,'nombre 90',1,3),(92,'nombre 91',1,3),(93,'nombre 92',1,3),(94,'nombre 93',1,3),(95,'nombre 94',1,3),(96,'nombre 95',1,3),(97,'nombre 96',1,3),(98,'nombre 97',1,3),(99,'nombre 98',1,3),(100,'nombre 99',1,3),(101,'nombre 100',1,3),(102,'nombre 101',1,3),(103,'nombre 102',1,3),(104,'nombre 103',1,3),(105,'nombre 104',1,3),(106,'nombre 105',1,3),(107,'nombre 106',1,3),(108,'nombre 107',1,3),(109,'nombre 108',1,3),(110,'nombre 109',1,3),(111,'nombre 110',1,3),(112,'nombre 111',1,3),(113,'nombre 112',1,3),(114,'nombre 113',1,3),(115,'nombre 114',1,3),(116,'nombre 115',1,3),(117,'nombre 116',1,3),(118,'nombre 117',1,3),(119,'nombre 118',1,3),(120,'nombre 119',1,3),(121,'nombre 120',1,3),(122,'nombre 121',1,3),(123,'nombre 122',1,3),(124,'nombre 123',1,3),(125,'nombre 124',1,3),(126,'nombre 125',1,3),(127,'nombre 126',1,3),(128,'nombre 127',1,3),(129,'nombre 128',1,3),(130,'nombre 129',1,3),(131,'nombre 130',1,3),(132,'nombre 131',1,3),(133,'nombre 132',1,3),(134,'nombre 133',1,3),(135,'nombre 134',1,3),(136,'nombre 135',1,3),(137,'nombre 136',1,3),(138,'nombre 137',1,3),(139,'nombre 138',1,3),(140,'nombre 139',1,3),(141,'nombre 140',1,3),(142,'nombre 141',1,3),(143,'nombre 142',1,3),(144,'nombre 143',1,3),(145,'nombre 144',1,3),(146,'nombre 145',1,3),(147,'nombre 146',1,3),(148,'nombre 147',1,3),(149,'nombre 148',1,3),(150,'nombre 149',1,3),(151,'nombre 150',2,2),(152,'nombre 151',2,2),(153,'nombre 152',2,2),(154,'nombre 153',2,2),(155,'nombre 154',2,2),(156,'nombre 155',2,2),(157,'nombre 156',2,2),(158,'nombre 157',2,2),(159,'nombre 158',2,2),(160,'nombre 159',2,2),(161,'nombre 160',2,2),(162,'nombre 161',2,2),(163,'nombre 162',2,2),(164,'nombre 163',2,2),(165,'nombre 164',2,2),(166,'nombre 165',2,2),(167,'nombre 166',2,2),(168,'nombre 167',2,2),(169,'nombre 168',2,2),(170,'nombre 169',2,2),(171,'nombre 170',2,2),(172,'nombre 171',2,2),(173,'nombre 172',2,2),(174,'nombre 173',2,2),(175,'nombre 174',2,2),(176,'nombre 175',2,2),(177,'nombre 176',2,2),(178,'nombre 177',2,2),(179,'nombre 178',2,2),(180,'nombre 179',2,2),(181,'nombre 180',2,2),(182,'nombre 181',2,2),(183,'nombre 182',2,2),(184,'nombre 183',2,2),(185,'nombre 184',2,2),(186,'nombre 185',2,2),(187,'nombre 186',2,2),(188,'nombre 187',2,2),(189,'nombre 188',2,2),(190,'nombre 189',2,2),(191,'nombre 190',2,2),(192,'nombre 191',2,2),(193,'nombre 192',2,2),(194,'nombre 193',2,2),(195,'nombre 194',2,2),(196,'nombre 195',2,2),(197,'nombre 196',2,2),(198,'nombre 197',2,2),(199,'nombre 198',2,2),(200,'nombre 199',2,2),(201,'nombre 200',2,2),(202,'nombre 201',2,2),(203,'nombre 202',2,2),(204,'nombre 203',2,2),(205,'nombre 204',2,2),(206,'nombre 205',2,2),(207,'nombre 206',2,2),(208,'nombre 207',2,2),(209,'nombre 208',2,2),(210,'nombre 209',2,2),(211,'nombre 210',2,2),(212,'nombre 211',2,2),(213,'nombre 212',2,2),(214,'nombre 213',2,2),(215,'nombre 214',2,2),(216,'nombre 215',2,2),(217,'nombre 216',2,2),(218,'nombre 217',2,2),(219,'nombre 218',2,2),(220,'nombre 219',2,2),(221,'nombre 220',2,2),(222,'nombre 221',2,2),(223,'nombre 222',2,2),(224,'nombre 223',2,2),(225,'nombre 224',2,2),(226,'nombre 225',2,2),(227,'nombre 226',2,2),(228,'nombre 227',2,2),(229,'nombre 228',2,2),(230,'nombre 229',2,2),(231,'nombre 230',2,2),(232,'nombre 231',2,2),(233,'nombre 232',2,2),(234,'nombre 233',2,2),(235,'nombre 234',2,2),(236,'nombre 235',2,2),(237,'nombre 236',2,2),(238,'nombre 237',2,2),(239,'nombre 238',2,2),(240,'nombre 239',2,2),(241,'nombre 240',2,2),(242,'nombre 241',2,2),(243,'nombre 242',2,2),(244,'nombre 243',2,2),(245,'nombre 244',2,2),(246,'nombre 245',2,2),(247,'nombre 246',2,2),(248,'nombre 247',2,2),(249,'nombre 248',2,2),(250,'nombre 249',2,2),(251,'nombre 250',2,2),(252,'nombre 251',2,2),(253,'nombre 252',2,2),(254,'nombre 253',2,2),(255,'nombre 254',2,2),(256,'nombre 255',2,4),(257,'nombre 256',2,4),(258,'nombre 257',2,4),(259,'nombre 258',2,4),(260,'nombre 259',2,4),(261,'nombre 260',2,4),(262,'nombre 261',2,4),(263,'nombre 262',2,4),(264,'nombre 263',2,4),(265,'nombre 264',2,4),(266,'nombre 265',2,4),(267,'nombre 266',2,4),(268,'nombre 267',2,4),(269,'nombre 268',2,4),(270,'nombre 269',2,4),(271,'nombre 270',2,4),(272,'nombre 271',2,4),(273,'nombre 272',2,4),(274,'nombre 273',2,4),(275,'nombre 274',2,4),(276,'nombre 275',2,4),(277,'nombre 276',2,4),(278,'nombre 277',2,4),(279,'nombre 278',2,4),(280,'nombre 279',2,4),(281,'nombre 280',2,4),(282,'nombre 281',2,4),(283,'nombre 282',2,4),(284,'nombre 283',2,4),(285,'nombre 284',2,4),(286,'nombre 285',2,4),(287,'nombre 286',2,4),(288,'nombre 287',2,4),(289,'nombre 288',2,4),(290,'nombre 289',2,4),(291,'nombre 290',2,4),(292,'nombre 291',2,4),(293,'nombre 292',2,4),(294,'nombre 293',2,4),(295,'nombre 294',2,4),(296,'nombre 295',2,4),(297,'nombre 296',2,4),(298,'nombre 297',2,4),(299,'nombre 298',2,4),(300,'nombre 299',2,4);

#
# Source for table "roles"
#

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "roles"
#

INSERT INTO `roles` VALUES (1,'Administrador'),(2,'Gestor'),(3,'Editor');

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
  `role` int(11) NOT NULL DEFAULT '0',
  `estado` tinyint(4) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `codigo` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `codigo` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'nombre1','admin','d1b254c9620425f582e27f0044be34bee087d8b4','admin@localhost.com',1,1,NULL,NULL),(2,'usuario1','usuario','d1b254c9620425f582e27f0044be34bee087d8b4','usuario@hotmail.com',3,1,NULL,NULL),(3,'especial1','especial','d1b254c9620425f582e27f0044be34bee087d8b4','especial@hotmail.com',2,1,NULL,NULL),(4,'Guillermo','grodriguez','d1b254c9620425f582e27f0044be34bee087d8b4','grodriguez@hotmail.com',1,1,'2014-04-07 09:30:01',0),(5,'Carlos','carlos1','d1b254c9620425f582e27f0044be34bee087d8b4','g.rodriguezp@hotmail.com',3,1,'2014-04-07 16:47:54',1617216438),(6,'PETER','peter','d1b254c9620425f582e27f0044be34bee087d8b4','petterherrera@hotmail.com',3,1,'2014-04-07 16:56:29',1492341464),(7,'Cana','ana1','d1b254c9620425f582e27f0044be34bee087d8b4','ana@hotmail.com',0,1,'2014-04-09 21:20:51',1415135896),(8,'arturo','arturo','d1b254c9620425f582e27f0044be34bee087d8b4','g.rodriguezp@hotmail.com',0,1,'2014-04-21 00:07:14',1744751713);

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
