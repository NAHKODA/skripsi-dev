-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: localhost    Database: judul_skripsi
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
-- Table structure for table `skripsi`
--

DROP TABLE IF EXISTS `skripsi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `skripsi` (
  `nim` varchar(16) NOT NULL,
  `judul1` text,
  `desjudul1` text NOT NULL,
  `judul2` text,
  `desjudul2` text NOT NULL,
  `status_judul1` tinyint(4) NOT NULL,
  `status_judul2` tinyint(4) NOT NULL,
  `disetujui` tinyint(4) DEFAULT NULL,
  `prodi` tinyint(4) DEFAULT NULL,
  `kelas` tinyint(4) DEFAULT NULL,
  `mahasiswa` varchar(255) DEFAULT NULL,
  `pembimbing1` tinyint(4) DEFAULT NULL,
  `pembimbing2` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skripsi`
--

LOCK TABLES `skripsi` WRITE;
/*!40000 ALTER TABLE `skripsi` DISABLE KEYS */;
INSERT INTO `skripsi` VALUES ('1402040424','Deteksi Daging Dengan Arduino','Deteksi Daging Dengan Arduino','Ramal Kematangan Tomat Dengan Arduino Berbasis Android','Ramal Kematangan Tomat Dengan Arduino Berbasis Android',2,1,NULL,1,NULL,'Fika Ridaul Maulayya',2,3),('1402040425','Membangun Sistem Perangkat Lunak untuk Efisiensi Biaya Proyek Pembangunan dengan Memanfaatkan FLOAT pada Metode Analisis Jaringan Kerja','Membangun Sistem Perangkat Lunak untuk Efisiensi Biaya Proyek Pembangunan dengan Memanfaatkan FLOAT pada Metode Analisis Jaringan Kerja','Sistem Informasi Eksekutif untuk Perencanaan Tata Letak Anak Cabang Perusahaan (Studi Kasus Bank PD. BPR Bapas 69 Magelang)','Sistem Informasi Eksekutif untuk Perencanaan Tata Letak Anak Cabang Perusahaan (Studi Kasus Bank PD. BPR Bapas 69 Magelang)',1,0,NULL,1,1,'Mahsun jauhari',3,2),('1402040426','Deteksi Muka Depan Manusia dari Sebuah Citra Berwarna dengan Template Matching','Deteksi Muka Depan Manusia dari Sebuah Citra Berwarna dengan Template Matching','Implementasi SMS gateway dengan menggunakan bahasa alami dalam sistem informasi perdagangan (Studi Kasus Toko Amanna)','Implementasi SMS gateway dengan menggunakan bahasa alami dalam sistem informasi perdagangan (Studi Kasus Toko Amanna)',1,2,NULL,1,1,'Fkri Rofiudin',5,5);
/*!40000 ALTER TABLE `skripsi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_admin` (
  `id` int(150) NOT NULL AUTO_INCREMENT,
  `username` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_admin`
--

LOCK TABLES `tbl_admin` WRITE;
/*!40000 ALTER TABLE `tbl_admin` DISABLE KEYS */;
INSERT INTO `tbl_admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3','Fika Ridaul Maulayya','ridaulmaulayya@gmail.com');
/*!40000 ALTER TABLE `tbl_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_informasi`
--

DROP TABLE IF EXISTS `tbl_informasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_informasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `isi_informasi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_informasi`
--

LOCK TABLES `tbl_informasi` WRITE;
/*!40000 ALTER TABLE `tbl_informasi` DISABLE KEYS */;
INSERT INTO `tbl_informasi` VALUES (1,'INFORMASI','<p><strong>JALUR UNDANGAN</strong></p>\r\n\r\n<p>JALUR UNDANGAN adalah jalur penerimaan mahasiswa baru&nbsp;<strong>BEBAS TEST TULIS</strong></p>\r\n\r\n<p><strong>a. Prestasi Akademik</strong></p>\r\n\r\n<p style=\"text-align:justify\">Nilai Raport Kelas XII Semester Ganjil Minimal 7.00 pada mata pelajaran Matematika, IPA/IPS, Bahasa Inggris, dan Bahasa Indonesia.</p>\r\n\r\n<p><strong>b. Prestasi Seni, Olah Raga, Keagamaan, Karya Ilmiah</strong></p>\r\n\r\n<p style=\"text-align:justify\">Dibuktikan dengan surat keterangan atau sertifikat dari sekolah/madrasah, dan atau masuk dalam peringkat 5 besar.</p>\r\n\r\n<p><strong>Jadwal Kegiatan</strong></p>\r\n\r\n<table style=\"background-color:transparent; border-collapse:collapse; border-spacing:0px; box-sizing:border-box; color:rgb(85, 85, 85); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px; max-width:100%; width:550px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<ol>\r\n				<li>Gelombang I</li>\r\n				<li>Pengumuman Kelulusan</li>\r\n				<li>Biaya Pendaftaran</li>\r\n				<li>Gelombang II</li>\r\n				<li>Pengumuman Kelulusan</li>\r\n				<li>Biaya Pendaftaran</li>\r\n			</ol>\r\n			</td>\r\n			<td>\r\n			<ul>\r\n				<li>: 1 November 2016 s.d. 22 Februari 2017</li>\r\n				<li>: 25 Februari 2017</li>\r\n				<li>: Rp. 200.000,-</li>\r\n				<li>: 23 Februari 2017 s.d. 27 April 2017</li>\r\n				<li>: 29 April 2017</li>\r\n				<li>: Rp. 250.000,-</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n');
/*!40000 ALTER TABLE `tbl_informasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_mahasiswa`
--

DROP TABLE IF EXISTS `tbl_mahasiswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_mahasiswa` (
  `nim` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_mhs` varchar(150) NOT NULL,
  `kode_tahun` varchar(150) NOT NULL,
  `kode_jurusan` int(100) NOT NULL,
  `semester` int(100) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_mahasiswa`
--

LOCK TABLES `tbl_mahasiswa` WRITE;
/*!40000 ALTER TABLE `tbl_mahasiswa` DISABLE KEYS */;
INSERT INTO `tbl_mahasiswa` VALUES ('1402040422','admin','Faisal Mahadi','20124',205,6),('1402040424','admin','Fika Ridaul Maulayya ','20142',205,6),('1402040425','admin','Mahsun jauhari','20142',205,6),('1402040426','admin','Fkri Rofiudin','20142',205,6),('1402040427','admin','Candra Kirana','20142',205,6),('1402040428','admin','M Yazidinniam','20142',205,6),('1402040429','maulayyacyber17','Kurnia Andi Nugroho','20142',205,6),('1402040430','admin','rootImam Syafii','20142',205,6),('1402040431','maulayyacyber17','Teguh Santoso','20142',205,6),('1402040432','maulayyacyber17','Ali Mustofa','20142',205,6),('1402040433','admin','Hadlik Lutfi','20142',205,6);
/*!40000 ALTER TABLE `tbl_mahasiswa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-17 20:08:36
