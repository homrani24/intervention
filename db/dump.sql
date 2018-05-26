/*
SQLyog Professional v12.09 (64 bit)
MySQL - 5.7.19 : Database - intervention_pfe
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`intervention_pfe` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `intervention_pfe`;

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL,
  `ville` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `company` */

/*Table structure for table `contrat` */

DROP TABLE IF EXISTS `contrat`;

CREATE TABLE `contrat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contrat` */

/*Table structure for table `intervention` */

DROP TABLE IF EXISTS `intervention`;

CREATE TABLE `intervention` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_heure` datetime DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `id_company` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `intervention` */

/*Table structure for table `reclamation` */

DROP TABLE IF EXISTS `reclamation`;

CREATE TABLE `reclamation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_heure` datetime DEFAULT NULL,
  `sujet` varchar(200) DEFAULT NULL,
  `panne` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reclamation` */

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id`,`name`) values (1,'chefProjet'),(2,'intervpnant'),(3,'client');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `role` int(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `statut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`,`name`,`mobile`,`role`,`created_at`,`update_at`,`statut`) values (1,'homrani@hotmail.com','sniper99','mouh','55622525',1,'2018-05-26 13:13:17','2018-05-26 13:13:25',0),(2,'homrani2@hotmail.com','sniper99','mouh','55622525',2,'2018-05-26 13:13:17','2018-05-26 13:13:25',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
