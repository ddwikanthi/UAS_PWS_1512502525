# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-06-27 15:28:38
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prodi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES (5,'1512502525','Adiiba','Cipadu','73882622','1512502525@student.budiluhur.ac.id','Sistem Informasi','1997-06-04','Perempuan','2018-06-27 15:01:45','2018-06-27 15:09:07'),(6,'1512502424','Valdy','Ciledug','73882623','1512502424@student.budiluhur.ac.id','Sistem Informasi','1997-06-06','Laki-Laki','2018-06-27 15:02:38','2018-06-27 15:02:38'),(7,'1512502323','Puspa','Tangerang','73882525','1512502323@student.budiluhur.ac.id','Sistem Informasi','1997-01-01','Perempuan','2018-06-27 15:09:59','2018-06-27 15:09:59');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_06_27_053644_mahasiswa',1);
