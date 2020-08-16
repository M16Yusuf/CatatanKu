/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.11-MariaDB : Database - apakabarcuaca
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apakabarcuaca` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `apakabarcuaca`;

/*Table structure for table `tb_catatan` */

DROP TABLE IF EXISTS `tb_catatan`;

CREATE TABLE `tb_catatan` (
  `id_catatan` int(11) NOT NULL AUTO_INCREMENT,
  `Catatan` varchar(400) NOT NULL,
  PRIMARY KEY (`id_catatan`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_catatan` */

insert  into `tb_catatan`(`id_catatan`,`Catatan`) values 
(1,'Pengumpulan tugas atol hari minggu jam 24.00WIB'),
(2,'Besok minggu lari pagi agar sehat \r\n                    '),
(12,'Revisi RPL sama BASDAT'),
(14,'Cuci pakaian dalam'),
(15,'Ajakan bakar sate nanti tanggal 19 agustus'),
(20,'nim 10118370'),
(21,'Nama Muhammad Yusuf');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
