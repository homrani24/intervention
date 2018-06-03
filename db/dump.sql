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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`id`,`name`,`adresse`,`tel`,`fax`,`ville`,`email`) values (1,'ddfb','dfrgv','551518','55555555555','ggggggggg','dffrgsv@hotmail.com'),(2,'ddfb','dfrgv','551518','55555555555','ggggggggg','dffrgsv@hotmail.com');

/*Table structure for table `contrat` */

DROP TABLE IF EXISTS `contrat`;

CREATE TABLE `contrat` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_deb` varchar(50) DEFAULT NULL,
  `date_fin` varchar(50) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `id_company` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contrat` */

insert  into `contrat`(`id`,`date_deb`,`date_fin`,`type`,`id_company`) values (1,'0000-00-00','0000-00-00','dsdf',1);

/*Table structure for table `intervention` */

DROP TABLE IF EXISTS `intervention`;

CREATE TABLE `intervention` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_heure` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `id_company` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  `id_invention` int(10) DEFAULT NULL,
  `id_client` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `intervention` */

insert  into `intervention`(`id`,`date_heure`,`description`,`id_company`,`id_user`,`active`,`id_invention`,`id_client`) values (1,'0000-00-00 00:00:00','wcxdc',0,3,0,NULL,3),(2,'0000-00-00 00:00:00','sdfgrgf drer',0,3,0,NULL,3),(3,'2018-05-27 10:51:54','sdfgrgf drer',0,3,0,NULL,2),(4,'2018-05-27 10:51:54','sdfgrgf drer',0,3,0,NULL,2),(5,'2018-05-27 10:51:54','sdfgrgf drer',0,3,0,NULL,22),(6,'2018-05-27 10:51:54','sdfgrgf drer',0,3,1,2,3),(7,'2018-05-27 10:51:54','sdfgrgf drer',0,3,1,2,3),(8,'0000-00-00 00:00:00','fddffv',1,1,0,2,3),(9,'06/20/2018 10:25 AM','ffgfxbg dfdc',2,NULL,0,2,3);

/*Table structure for table `reclamation` */

DROP TABLE IF EXISTS `reclamation`;

CREATE TABLE `reclamation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date_heure` varchar(50) DEFAULT NULL,
  `sujet` varchar(200) DEFAULT NULL,
  `panne` varchar(500) DEFAULT NULL,
  `id_company` int(10) DEFAULT NULL,
  `id_user` int(10) DEFAULT NULL,
  `active` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `reclamation` */

insert  into `reclamation`(`id`,`date_heure`,`sujet`,`panne`,`id_company`,`id_user`,`active`) values (1,'0000-00-00 00:00:00','drdergzedf','dvffcc',1,3,1),(2,'2018-05-16 18:11:46','drdergzedf','dvffcc',1,3,0),(3,'0000-00-00 00:00:00','drdergzedf','dvffcc',2,3,1),(4,'0000-00-00 00:00:00','drdergzedf','dvffcc',2,3,1),(5,'0000-00-00 00:00:00','drdergzedf','dvffcc',2,3,1),(6,'0000-00-00 00:00:00','drdergzedf','dvffcc',1,3,1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`email`,`password`,`name`,`mobile`,`role`,`created_at`,`update_at`,`statut`) values (1,'homrani@hotmail.com','sniper99','mouh','55622525',1,'2018-05-26 13:13:17','2018-05-26 13:13:25',0),(2,'homrani2@hotmail.com','sniper99','mouh','55622525',2,'2018-05-26 13:13:17','2018-05-26 13:13:25',0),(3,'client@exemple.com','client','dali','22255447',3,'2018-05-26 01:35:03','2018-05-26 01:38:47',0),(4,'client2@exemple.com','client','dali','22255447',3,'2018-05-26 01:35:03','2018-05-26 01:38:47',0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
