-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 30, 2016 at 01:52 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi-unwaha`
--

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `waktuubah` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tampil` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `waktuubah`, `tampil`) VALUES
(1, 'Biaya', '<ol><li>Biaya Skripsi sebesar Rp 750.000,- .</li><li><strong>Surat pengantar ke Pembimbing</strong>, <strong>Buku Panduan Skripsi</strong>, dan <strong>Kartu Bimbingan</strong> dapat diambil di Kantor FTI dengan menggunakan Slip Pembayaran Skripsi minimal 50%.</li></ol>', '2015-11-28 23:50:14', 1),
(2, 'Usulan Judul', '<p>Usulan Judul Skripsi beserta Usulan Pembimbing Skripsi diserahkan kepada Kaprodi masing-masing atau dititipkan kepada staff Kantor FTI <strong>paling lambat Sabtu, 12 Desember 2015</strong>.</p>', '2015-11-28 23:56:02', 1),
(4, 'Panduan Skripsi', '<p>Panduan Skripsi Sementara dapat diunduh di: <a href="./filePermanen/PEDOMANSKRIPSI.rar">PANDUAN SKRIPSI SEMENTARA</a>.</p><p>Yang Perlu disiapkan: Halaman Judul, Halaman Persetujuan dosen Pembimbing, dan isi. (Mengacu pada BAB II: USULAN PENELITIAN halaman 3 sampai dengan halaman 4).</p><p>Isi proposal selain yang tercantum ditambahkan: <strong>Landasan Teori</strong> Konsep, Teori, dan istiah yang membutuhkan penjelasan lebih lanjut perlu dicantumkan untuk memperjelas skripsi yang akan dibuat. Hanya perlu mencantumkan istilah yang tidak umum. <strong>Rancangan Sistem</strong> Diagram dan atau Sketsa yang dapat memberi gambaran sistem yang akan dibuat. Sketsa diwajibkan untuk judul skripsi berupa game.</p><p>Harap membawa proposal skripsi yang sudah dicetak sebanyak rangkap 3 ketika Seminar Proposal.</p>', '2015-12-06 11:50:23', 1),
(5, 'Jadwal Seminar Proposal', '<p>Kepada seluruh mahasiswa FTI Semester VII, bahwasannya&nbsp;Seminar Proposal Skripsi akan dilaksanakan pada hari Ahad, 20 Desember 2015 jam 07.30 wib.</p>', '2015-12-14 04:48:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `nim` varchar(16) NOT NULL,
  `judul1` text,
  `desjudul1` text NOT NULL,
  `judul2` text,
  `desjudul2` text NOT NULL,
  `disetujui` tinyint(4) DEFAULT NULL,
  `prodi` tinyint(4) DEFAULT NULL,
  `kelas` tinyint(4) DEFAULT NULL,
  `mahasiswa` varchar(255) DEFAULT NULL,
  `pembimbing1` tinyint(4) DEFAULT NULL,
  `pembimbing2` tinyint(4) DEFAULT NULL,
  `pembimbing` tinyint(4) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`nim`, `judul1`, `desjudul1`, `judul2`, `desjudul2`, `disetujui`, `prodi`, `kelas`, `mahasiswa`, `pembimbing1`, `pembimbing2`, `pembimbing`, `password`) VALUES
('1402040424', 'Home Automation Engineering System', 'hahahah', 'Jual Beli Hp Jombang', 'hhaha', 1, 2, 0, 'Fika Ridaul Maulayya', 13, 12, 0, 'admin'),
('1402040490', 'Program Applikasi Penjualan dan Stock barang Kopentren Al-Hidayah', '', 'Perancangan Sistem Informasi Sekolah berbasis Web di SMK Al-Hidayah Ngimbang', '', 2, 2, 1, 'Agus Halui Imam Santoso', 7, 2, 1, ''),
('1502040544', 'Kuis Pintar Metode Pembelajaran Untuk Anak TK Berbasis Android', '', 'Metode Pembelajaran Asma''ul Husna', '', 1, 2, 0, 'Syahrul Putra P.', 1, 13, 1, ''),
('1502040547', 'Perancangan dan Implementasi Sistem Informasi Area Parkir Menggunakan Java dan Database Oracle Studi Kasus di Mall Bravo', '', 'Perancangan Toko Komputer Online dengan Web PHP', '', 1, 2, 0, 'Dian Aristiawan', 5, 8, 1, ''),
('1502040548', 'Peta Digital Interaktif Obyek Wisata Kabupaten Lamongan', '', 'Sistem Informasi Kependudukan Desa Paciran Berbasis Web', '', 1, 2, 0, 'Eky Hafidhuddin', 5, 10, 1, ''),
('1502040549', 'Sistem Informasi Akademik Sekolah Berbasis Client Server (Study Kasus di MI Islamiyah Mulyoagung Singgahan Tuban)', '', 'Sistem Pendukung Keputusan Rekomendasi Penerimaan Bantuan Siswa Miskin (BSM) dengan Metode Simple Additive Weighting (SAW)', '', 1, 2, 0, 'M. Zakky Musthofa', 7, 10, 1, ''),
('1502040551', 'Sistem Informasi Administrasi Weding Organizer', '', 'Sistim Informasi Aplikasi Stok barang di Toko Dian Snack Menggunakan Visual Basic', '', 1, 2, 0, 'Nindia Mustoffirin', 5, 13, 1, ''),
('1502040552', 'Sistem Pendukung Keputusan Penerimaan Tenaga Pengajar BimbinganBeajar di SSC Tuban dengan metode SAW', '', 'Rencana Anggaran Biaya Building dan Proyek dengan Java netbeans IDE', '', 1, 2, 0, 'Ginto Agus Setyawan', 5, 4, 1, ''),
('1502040553', 'Sistem Informasi dan Managemen CV.ProFAT Indonesia Berbasis Web ( Study Kasus CV.Profat Indonesia Cabang Tuban)', '', 'Game Edukatif Berbasis Android untuk Jenjang Pendidikan TK/PAUD', '', 1, 2, 0, 'Septiar Mibnul', 1, 13, 1, ''),
('1502040554', 'Aplikasi Penjualan dan cara pakai alat Hadrah Banjari study kasus "Putra Toha" Kec. Palang Kab. Tuban', '', 'Aplikasi media pembelajaran Hadrah Banjari berbasis android', '', 2, 2, 0, 'M. Syaiful Ula Almubarok', 9, 13, 1, ''),
('1502040555', 'Sistem Informasi Pengolahan Data Pasar (study kasus: Pasar Karangagung KEC. Palang Kab. Tuban)', '', 'Sistem Informasi Arsip Berbasis Web', '', 1, 2, 0, 'Siti Nuvia Ika Sulistyowati', 3, 11, 1, ''),
('1502040556', 'Aplikasi Cek Bayar Pajak Kendaraan Bermotor Berbasis Android', '', 'Sistem Informasi Geografis  KB Samsat Seluruh JATIM Berbasis Android', '', 1, 2, 0, 'Subagiyo', 3, 4, 1, ''),
('1502040557', 'Aplikasi Pembelajaran Ilmu Pengetahuan Alam Berbasis Android', '', 'Multi Chating Berbasis Lan', '', 1, 2, 0, 'Fatchul Ibad', 5, 2, 1, ''),
('1502040558', 'Rancang bangun sistem pendataan kendaraan dan pemasukan uang dari kendaraan pengangkut pasir menggunakan foxpro di desa Glagah Sari kec Soko kab Tuban', '', 'Sistem Informasi Penjualan Tiket Bus Online Berbasis Website Menggunakan Php dan MYSQL', '', 1, 2, 0, 'Muhammad Mahrus Arif Ahyani', 3, 6, 1, ''),
('1502040559', 'Perancangan dan Penerapan Sistem Informasi Dana Hibah UIntuk Tempat Ibadah Berbasis Website', '', 'Perancangan dan Penerapan Sistem Informasi Akademik MTS SumberSari Berbasis Website Menggunakan PHP dan MySQL', '', 1, 2, 0, 'M. Wahyudi', 3, 11, 1, ''),
('1502040560', 'Sistem Informasi Manajemen Retribusi Pemandian Baktiharjo', '', 'Sistem Informasi Inventori Kantor Pada SDN Prunggahan', '', 1, 2, 1, 'Kartika Wahyu. T', 9, 11, 1, ''),
('1502040564', 'Aplikasi Monitoring Omset dan Stock Pada Kebab Baba rafi Tuban Berbasis Web PHP MyAdmin', '', 'Aplikasi E-Comerce Penjualan Clothing Berbasis Web PHP MyAdmin', '', 1, 2, 0, 'Imam Wahyudi', 9, 13, 1, ''),
('1502040565', 'Aplikasi E-Commerce Penjualan Batik Online "Griya Batik Anggun" Berbasis PHP MYADMIN', '', 'Animasi Siklus PLTU UNIT 3-4 PJB Gersik', '', 1, 2, 0, 'Danny Linggar P', 7, 6, 1, ''),
('1502040566', '', '', '', '', 0, 2, 0, 'Pulung Siwanata', 3, 11, 1, ''),
('1502040567', 'Sistem Informasi Angsuran Kredit Di PT. Finansia Multi Finance (Kredit Plus) Cabang Tuban Berbasis Web', '', 'APLIKASI PEMBELAJARAN "BELAJAR SHOLEH DAN PINTAR" UNTUK ANAK USIA DINI BERBASIS ANDROID ', '', 1, 2, 0, 'Ahmad Sarwo Edi', 1, 2, 1, ''),
('1502040570', 'Aplikasi Input Data Gapoktan (Gabungan Kelompok Tani) Berbasis JAVA', '', 'Aplikasi Sistem Pengambilan Pupuk Kelompok Tani DS. Cendoro', '', 1, 2, 0, 'Alfaneka Riyatul Fitriya Ilha', 7, 6, 1, ''),
('1502040571', 'Aplikasi Input Data dan Penerimaan Hasil Uji Jelly Strenght serta Whitenes Berbasis Java Pada Industri Surimi PT. KML Tuban', '', 'Kamus Bahasa Jawa Berbasis Web', '', 1, 2, 0, 'Nur Arini', 1, 4, 1, ''),
('1502040572', 'Aplikasi Sistem Absensi Karyawan PT.POS Indonesia Menggunakan Barcode Berbasis Java', '', 'Sistem Antrean Pada Transaksi Teller di PT POS Indonesia Cabang Tuban', '', 1, 2, 0, 'Putri Miftachul Jannah', 5, 8, 1, ''),
('1502040573', 'Aplikasi Managemen badan Amil Zakat Nasional Kab. Tuban', '', 'Sistem Informasi Pemesanan TiketvBus Online Pada PT. Lorena Karina Transport Berbasis Web dan SMS Gateway', '', 1, 2, 0, 'Adif Purnomo', 7, 6, 1, ''),
('1502040574', 'Sistem Informasi pemesanan tiket kereta api online, pada PT. KAI berbasis web', '', 'Sistem Informasi pembuatan antrian tiket berobat pada kantor puskesmas tambakboyo berbasis web', '', 2, 2, 0, 'Juwanto', 3, 4, 1, ''),
('1502040576', 'Animasi Pembelajaran Kerajaan Samudra Pasai', '', '', '', 1, 2, 0, 'Hanafi Mude Sedang', 9, 2, 1, ''),
('1502050539', 'Rancang Bangun Aplikasi Manajemen Data Pada Rumah Sakit Al-Aziz berbasis PHP dan MySql', '', '', '', 1, 1, 0, 'Yudi Ismanto', 5, 2, 1, ''),
('1502050545', 'Rancang Bangun Administrasi Gudang Sparepart di PT. Sejahtera Usaha Bersama Jombang', '', 'Sistem Informasi Penerimaan Mahasiswa Baru di Amik Jombang', '', 1, 1, 0, 'Agus Sukamto', 3, 8, 1, ''),
('1502050546', 'Perancangan Sistem Informassi Pembayaran Mahasiswa Berbasis Web di AMIK Jombang', '', '', '', 1, 1, 0, 'Zainal Fanani', 3, 4, 1, ''),
('1502050548', 'Perancnagan Sistem Informasi Akademik Kampus berbasis Web di AMIK Jombang', '', '', '', 1, 1, 0, 'Indra Puji Sholeh', 3, 11, 1, ''),
('1502050557', 'Sistem Informasi Pondok Pesantren di Kementerian Agama Berbasis Web', '', 'Sistem Informasi Pelacakan Barang di Expedisi Berbasis Web di PT. Citoxpress Jombang', '', 2, 1, 0, 'Oktaviani W.V.', 1, 2, 1, ''),
('1502050561', 'Sistem Informasi Pariwisata Jombang di Dinas Pariwisata Jombang Berbasis Web', '', 'Sistem Informasi Pendaftaran Online di LBB Gravitasi Jombang', '', 1, 1, 0, 'Riza Umami', 3, 10, 1, ''),
('1502050563', 'Sistem Informasi Penggajian Karyawan berbasis Web menggunakan Fingerprint di Amik Jombang', '', 'Sistem Informasi Website Sekolah menggunakan PHP dan MySQL', '', 1, 1, 0, 'Ara Satria Komara', 3, 2, 1, ''),
('1502050564', 'Sistem Informasi Geografis Penerimaan dan Pendistribusian Zakat Menggunakan Grass Berbasis Linux Pada Masjid Payak Santren Rejoagug Ngoro Jombang', '', 'Aplikasi Untuk Menganalisa Penerimaan dan Penyaluran Zakat pada Masjid Payak Santren Rejoagung Ngoro Jombang Menggunakan PHP dan MySQL', '', 1, 1, 0, 'M. Wildan Novi', 5, 2, 1, ''),
('20115720100364', 'Pendaftaran Siswa Baru Secara Online Berbasis Android', '', 'Sistem Informasi Manajemen Laundry dan Laporan Keuangan Menggunakan Visual Foxpro 9.0', '', 1, 1, 1, 'Fitrah Choiruddin', 9, 6, 1, ''),
('20115720100373', '', '', '', '', 0, 1, 1, 'Muchammad Abi Aunillah', 1, 13, 1, ''),
('20125520100310', 'Rancang Bangun Aplikasi Garment', '', 'Aplikasi Penjualan', '', 0, 2, 1, 'Achmad Abidurrochman', 9, 8, 1, ''),
('20125520100312', 'Sistem Tes Potensial Akademik Berbasis Jaringan', '', 'Sistem Surat Keluar Desa TambakRejo Berbasis Website', '', 1, 2, 1, 'Agus Triono', 3, 10, 1, ''),
('20125520100313', 'Pembangunan Sistem Informasi Absensi Input Fingerprint Berbasis Web', '', 'Sistem Aplikasi Perpustakaan', '', 1, 2, 1, 'Ahmad Zeni', 5, 8, 1, ''),
('20125520100314', 'Sistem Pakar Diagnosa Penyakit kulit Pada Anak', '', 'Aplikasi Perhitungan Zakat Mal', '', 1, 2, 1, 'Ainul Farid H', 9, 2, 1, ''),
('20125520100318', 'Sistem Perpustakaam Online Berbasis Web Di Madrasah Tsanawiyah Negri Tembelang', '', 'Sistem Informasi Pendukung Belajar Mengajar Berbasis Web di Madrasah Ibtidaiyah Sentul', '', 2, 2, 1, 'Faisal Khoirudin', 7, 13, 1, ''),
('20125520100319', 'Aplikasi Tabungan Siswa di MI Nurusl ''Ulum Benjeng dengan VB 6.0', '', 'Aplikasi Penggajian Guru dan Karyawan di MI Nurul ''Ulum dengan Menggunakan VB 6.0', '', 1, 2, 1, 'Fatchan', 1, 6, 1, ''),
('20125520100320', 'Rancang Bangun Sistem Informasi Manajemen Proyek Konstruksi Berbasis Web', '', 'Pengembangan Sistem Informasi Pendataan Penduduk Tingkat Desa', '', 1, 2, 1, 'Gamma Ziza Lutfitasari', 9, 8, 1, ''),
('20125520100322', 'Perancangan Sistem Pembelajaran Dan Nilai di SMK Kyai Mojo', '', 'Sistem Inventori Barang di SMK Kyai mojo', '', 1, 2, 1, 'M. Alamsyah Thohir', 5, 11, 1, ''),
('20125520100323', 'Otomatisasi Penjadwalan Mata Pelajaran Menggunakan Genetic Algorithm', '', 'Rancang Bangun Aplikasi  Pemantauan Ruangan Menggunakan Webcam Sebagai IP Camera Berbasis Android Dengan Metode Frame Differences', '', 2, 2, 1, 'Moh. Asrori Hilaluddin', 7, 10, 1, ''),
('20125520100325', 'Perancangan Sistem Informasi Surveilans Demam Berdarah Dengue Di Puskesmas Wiayah Kota Semarang', '', 'Sistem Pakar Diagnosa Penyakit Demam Berdarah dengue', '', 1, 2, 1, 'Muhamad Iqbal', 1, 10, 1, ''),
('20125520100327', 'Sistem Inventori Barang di PC Lakpesdam NU Jombang dengan VB 6.0', '', 'Game Education untuk Anaka Usia Dini dengan Menggunakan Macromedia Flash', '', 1, 2, 1, 'Neneng Aslikhah', 3, 4, 1, ''),
('20125520100330', 'Program Kesesuaian Lahan Dengan Komoditas Pertanian', '', 'Program Pembayaran SPP SMK Kita Bakti Mojosari', '', 1, 2, 1, 'Taufiq Purnomo', 9, 2, 1, ''),
('20125520100333', 'Implementasi Sistem Pendukung Keputusan Peramalan Penjualan Barang Dengan Metode Trendmoment', '', 'Sistem Pendukung Keputusan Aplikasi Pemilihan Siswa Untuk Mengikuti Olimpiade Sains Disekolah Dengan Metode PHP', '', 1, 2, 1, 'M. Fatoni', 12, 11, 1, ''),
('20125520100334', 'Aplikasi Mini Koperasi Berbasis Pinjaman Kelompok Tani Sejati Ds. Kawurejo, blulu Lamongan', '', 'Program Aplikasi Ketatausahaan', '', 1, 2, 1, 'Sami''in', 12, 11, 1, ''),
('20125520100335', 'Aplikasi Penjualan Pada Toko Mainan Dengan Fisual Fox Pro', '', 'Apikasi Absensi Karyawan Dengan Finger Print', '', 1, 2, 1, 'Taufik Huda Harianto', 5, 4, 1, ''),
('20125520100336', 'Sistem Aplikasi Pembayaran Siswa Baru MTsBU menggunakan FoxPro', '', 'Aplikasi Laporan Biaya Operasional Organisasi BKM Tambak rejo Menggunakan Bhs. Visual Foxpro', '', 2, 2, 1, 'Moh. Farih Alil Himam', 12, 6, 1, ''),
('20125520100337', 'Implementasi Sistem Perpustakaan Dengan Kombinasi Tombol Enter Berbasis Desktop di STIE Al Anwar', '', 'Aplikasi Pembayaran Siswa berbasis Desktop di SMKTN Diwek', '', 1, 2, 1, 'Fatoni', 5, 6, 1, ''),
('20125520100339', 'Aplikasi Rental Mobil "Helmo Rent" Menggunakan GPS', '', 'Rancang Bangun Aplikasi Rencana Anggaran Biaya Dalam Pembangunan Rumah', '', 1, 2, 1, 'Helmy Rahmawanto', 1, 4, 1, ''),
('20125720100411', 'Sistem Aplikasi Kepegawaian PT. Kebun Tebu Mas Ngimbang Lamongan', '', '', '', 1, 1, 1, 'Achmad Yusuf', 1, 11, 1, ''),
('20125720100415', 'Sistem Informasi Manajemen Kepegawaian (Simpeg)', '', 'Perancangan Sistem Informasi Pariwisata Berbasis Web', '', 1, 1, 1, 'Arifatul Khumaidah', 3, 10, 1, ''),
('20125720100416', 'Perancangan Aplikasi Pembuatan Kartu Tanda Penduduk Berbasiskan Web', '', 'Sistem Informasi Persediaan Obat pada Puskesmas Menggunakan PHP dan MySql', '', 0, 1, 1, 'Ayu Kurnia', 7, 4, 1, ''),
('20125720100417', 'Sistem Informasi Stok Barang Berbasis Android', '', 'Sistem Pelaporan Tugas Mahasiswa Berbasis PHP', '', 1, 1, 1, 'Chandra Adi Kurniawan', 1, 13, 1, ''),
('20125720100418', 'Aplikasi Jual Beli Suku Cadang Baru dan Second Bengkel Usaha Baru Melalui Web', '', 'Persewaan Rental Mobil Berbasis Web Java Transport', '', 2, 1, 1, 'Charias Jaka Anggara', 7, 6, 1, ''),
('20125720100419', 'Rancang Bangun Aplikasi Pembelajaran Pepak Bahasa Jawa Usia Dasar Berbasis Android', '', 'Simulasi CAT PNS Berbasis Android', '', 1, 1, 1, 'Dhinar Saloka', 9, 13, 1, ''),
('20125720100422', 'Rancang Bangun Sistem Informasi E-Voting Pemilihan Kepala Daerah Berbasis Web', '', 'Sistem Informasi Rental Mobil Berbasis Web', '', 1, 1, 1, 'Ika Maria Ulfah', 7, 10, 1, ''),
('20125720100423', 'Desain dan Analisis Sistem Komputerisasi Penjualan dan Pemesanan Barang Berbasis Multiuser dan Client Server Menggunakan VB dan MySQL', '', 'Sistem Informasi Perwalian Berbasis Web di Unwaha Jombang', '', 1, 1, 1, 'Imam Arif', 9, 8, 1, ''),
('20125720100425', 'Sistem Penggajian Karyawan dengan Menggunakan Visual Basic 6.0', '', 'Rancang Bangun Sistem Antrian Pusat Kesehatan Masyarakat Ds. Pulo Lor Jombang', '', 2, 1, 1, 'Kurniawan Junaidi', 7, 8, 1, ''),
('20125720100426', 'Aplikasi SMS dan Polling Berbasis Desktop', '', 'Aplikasi Olah Data Konveksi', '', 1, 1, 1, 'Labib Muhajir', 1, 8, 1, ''),
('20125720100427', 'Sistem Informasi Manajemen Pengarsipan Dokumen Digital Berbasis Web', '', 'Aplikasi Pengenalan Ilmu Tajwid Berbasis Android', '', 1, 1, 1, 'Lailatul Umroh', 9, 4, 1, ''),
('20125720100428', 'Aplikasi pengisian Raport K13 untuk MA menggunakan VB', '', 'Rancang Bangun Aplikasi Multimedia Sebagai Perangkat Ajar Seni Budaya', '', 1, 1, 1, 'Lilis Nur Indahsari', 5, 8, 1, ''),
('20125720100429', 'Aplikasi Perincian Hasil Perdagangan Berbasis Smartphone', '', 'Aplikasi Penghitung Dosis Obat Untuk Apotek Berbasis Android', '', 2, 1, 1, 'Lutfi Ardiansyah Zain', 1, 2, 1, ''),
('20125720100431', 'Sistem Pendaftaran Mahasiswa Baru Menggunakan SMS Gateway', '', 'Sistem Tryout Ujian Nasional Berbasis Web', '', 1, 1, 1, 'Nevi Novianita', 9, 4, 1, ''),
('20125720100432', 'Rancang Bangun Sistem Tailor Online Kemeja Khusus Pria di Kota Jombang', '', 'Merancang dan Membuat Aplikasi Sistem Informasi Rental DVD', '', 1, 1, 1, 'Nurfita Fatmayanti', 7, 10, 1, ''),
('20125720100433', 'Sistem pengambil keputusan untuk menentukan beasiswa menggunakan rule base dan forward chaining', '', 'Aplikasi Penjualan pada butik "Ridho Jaya" berbasis Web', '', 1, 1, 1, 'Nurul Azizaturrizqiyah', 9, 8, 1, ''),
('20125720100435', 'Aplikasi Penghitung Ransum Gizi Ayam Broiler Berbasis Android', '', 'Game Tebas Bebek Berbasis Android', '', 1, 1, 1, 'Randi Antono', 1, 13, 1, ''),
('20125720100436', 'Analisis dan Perancangan Sistem Administrasi Pasien Menggunakan M. Visual Foxpro 9.0', '', 'Perancangan Aplikasi Rental Mobil Pada CV. Karya Mekar Bersama Kediri Menggunakan Ms. Visual Foxpro 9.0', '', 1, 1, 1, 'Siswoko', 12, 6, 1, ''),
('20125720100441', 'Game Edukasi Perahu Pintar Berbasis Android', '', 'Game Masih Di Lain Dunia Berbasis Android', '', 1, 1, 1, 'Teguh Santoso', 7, 13, 1, ''),
('20125720100442', 'Sistem Informasi Administrasi Desa Berbasis Web', '', 'Sistem Informasi Perpustakaan Menggunakan Barcode', '', 1, 1, 1, 'Yeni Purwati', 5, 10, 1, ''),
('20125720100443', 'Sistem Pengajuan Online Kredit Pinjaman Modal Jaminan BPKB Mobil', '', 'Sistem Informasi Pendaftaran Membership Business Agency Perbankan Melalui Online', '', 1, 1, 1, 'Zulkarnain', 7, 10, 1, ''),
('20125720100445', 'Sistem Pengendalian Pemberian Bantuan Rumah Tangga Miskin Dalam Penanggulangan Kemiskinan Melalui Aplikasi Teknologi Informasi', '', 'Sistem Penilaian Kinerja Karyawan di Media Computer Menggunakan Visual Foxpro', '', 1, 1, 1, 'Rianto', 3, 6, 1, ''),
('20125720100469', 'Aplikasi Pengukuran Desain Pola Dasar Baju Berbasis Android', '', 'Sistem Informasi Manajemen Administrasi Penjualan Sparepart di CV. Syafaat Teknik', '', 1, 1, 1, 'Kelfi Dianita Nansi', 5, 11, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `spi_category`
--

CREATE TABLE `spi_category` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `penjelasan` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spi_pengurus`
--

CREATE TABLE `spi_pengurus` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hak` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spi_pengurus`
--

INSERT INTO `spi_pengurus` (`username`, `password`, `hak`) VALUES
('unwaha', '617b17fd063e377a036d336ac452ebf44b122ffd', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `jenis_kegiatan` text NOT NULL,
  `mulai_pelaksanaan` varchar(100) NOT NULL,
  `selesai_pelaksanaan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `jenis_kegiatan`, `mulai_pelaksanaan`, `selesai_pelaksanaan`) VALUES
(1, 'Pendaftaran dan Pengumpulan Judul Skripsi', '25 September 2015', '31 Oktober 2015'),
(2, 'Seminar Proposal Skripsi', '12 Desember 2015', '-'),
(3, 'Seminar Hasil Skripsi', '08 Mei 2016', '-'),
(4, 'UAS SEMESTER 8', '14-16 Mei 2016', '-'),
(5, 'Ujian Skripsi', '21 Mei 2016', '-'),
(6, 'Pengumpulan Skripsi (setelah direvisi dan siap dijilid)', '28 Mei 2016', '-'),
(7, 'Yudisium', '-', '-'),
(8, 'Wisuda', '-', '-');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vpembimbing`
--
CREATE TABLE `vpembimbing` (
`pembimbing` tinyint(4)
,`disetujui` tinyint(4)
);

-- --------------------------------------------------------

--
-- Structure for view `vpembimbing`
--
DROP TABLE IF EXISTS `vpembimbing`;

CREATE ALGORITHM=UNDEFINED DEFINER=`u902002681_skrip`@`localhost` SQL SECURITY INVOKER VIEW `vpembimbing`  AS  select `skripsi`.`pembimbing1` AS `pembimbing`,`skripsi`.`disetujui` AS `disetujui` from `skripsi` union all select `skripsi`.`pembimbing2` AS `pembimbing`,`skripsi`.`disetujui` AS `disetujui` from `skripsi` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `spi_category`
--
ALTER TABLE `spi_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `spi_category`
--
ALTER TABLE `spi_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
