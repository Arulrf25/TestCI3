/*
SQLyog Community v13.1.9 (64 bit)
MySQL - 5.7.33 : Database - beritacoding
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`beritacoding` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `beritacoding`;

/*Table structure for table `article` */

DROP TABLE IF EXISTS `article`;

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `slug` varchar(225) DEFAULT NULL,
  `content` tinytext,
  `draft` enum('''true'',''false''') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `article` */

/*Table structure for table `com_jobdesc` */

DROP TABLE IF EXISTS `com_jobdesc`;

CREATE TABLE `com_jobdesc` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `jobdesc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `com_jobdesc` */

insert  into `com_jobdesc`(`id_pegawai`,`nama`,`posisi`,`jobdesc`) values 
(2509,'Arul Rachman','Software Development & BDC','Membuat aplikasi dengan framework'),
(2510,'Nouval Rizky','UI/UX Designer','Membuat desai poster kegiatan');

/*Table structure for table `tb_mhs` */

DROP TABLE IF EXISTS `tb_mhs`;

CREATE TABLE `tb_mhs` (
  `nim` int(11) NOT NULL,
  `nama_mhs` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_mhs` */

insert  into `tb_mhs`(`nim`,`nama_mhs`,`jurusan`) values 
(1903063,'Ariq Naufal','Teknik Informatika'),
(1903064,'Arul Rachman Faruqhy','Manajemen Informatika'),
(1903065,'Ayu Nurul Khairunnisa','Manajemen Informatika');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
