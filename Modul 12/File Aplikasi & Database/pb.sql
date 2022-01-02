-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 07:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(50) NOT NULL,
  `Nama` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`ID`, `Nama`, `username`, `password`, `email`) VALUES
(1, 'Administrator1', 'admin', '1234', 'admin@gmail.com'),
(3, 'Administrator2', 'admin2', '1234', 'admin2@gmail.com'),
(4, 'Administrator3', 'admin3', '1234', 'admin3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `ID` int(10) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Kategori` varchar(50) NOT NULL,
  `Isi` text NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Teks` text NOT NULL,
  `Tanggal` varchar(30) NOT NULL,
  `Updateby` varchar(50) NOT NULL,
  `Viewnum` varchar(20) NOT NULL,
  `Post_type` varchar(20) NOT NULL,
  `Terbit` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`ID`, `Judul`, `Kategori`, `Isi`, `Gambar`, `Teks`, `Tanggal`, `Updateby`, `Viewnum`, `Post_type`, `Terbit`) VALUES
(6, 'Jadwal Liga Inggris: Tak Hanya MU, Laga Lain Juga', 'olahraga', '<p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\"><b>YB Berita</b>, Jakarta Jadwal Liga Inggris 2021/2022 pekan 18 tak bisa berjalan dengan sempurna. Ada lima pertandingan setidaknya dipastikan harus tertunda karena wabah Covid-19 kembali menggila di Inggris.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><span style=\"font-size: 15px; color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif;\">Lima pertandingan yang sudah dipastikan tertunda salah satunya melibatkan Manchester United. Duel MU kontrak Brighton and Hove Albion dipastikan tak jadi digelar Sabtu (18/12/2021).</span></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Banyak pemain MU yang kini harus menjalani karantina Covid-19. Bahkan kabarnya pelatih Ralf Rangnick kini cuma punya tujuh pemain yang siap diturunkan.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Praktis sudah dua laga beruntun MU tak jadi bertanding. Pertengahan pekan ini mereka juga batal melawan klub promosi Brentford akibat kasus Covid-19.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Sorotan utama di pekan 18 ini adalah duel Tottenham Hotspur kontra Liverpool. Namun status laga ini juga masih diragukan. Tottenham juga sempat ditunda pertandingannya karena wabah Covid-19 di skuatnya.</span></font></p><div><br></div><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><span style=\"font-size: 15px; color: rgb(68, 68, 68); font-family: AcuminPro, arial, helvetica, sans-serif;\"></span><br></p>', 'photo/Jadwal_Liga_Inggris__Tak_Hanya_MU__Laga_Lain_Juga.jpg', 'Berita terkini Man UTD', '2021-12-18 20:55:47', 'admin', '24', 'berita', '1'),
(8, 'Keributan dan 3 Kartu Merah Warnai Laga Indonesia vs Singapura', 'olahraga', '<p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\"><b>YB Berita</b>, Jakarta - Pertandingan semifinal leg kedua Piala AFF 2020 (Piala AFF 2021) antara Indonesia vs Singapura diwarnai keributan dan tiga kartu merah.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Keributan terjadi di pengujung babak pertama pertandingan semifinal leg kedua antara Indonesia vs Singapura di Stadion Nasional, Kallang, Sabtu (25/12) malam WIB.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\"><br></span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Keributan itu dipicu oleh pemain Singapura Safuwan Baharudin yang tidak terima mendapatkan kartu merah.</span></font></p><div><br></div>', 'photo/Keributan_dan_3_Kartu_Merah_Warnai_Laga_Indonesia_vs_Singapura.jpg', 'Piala AFF 2021', '2021-12-25 17:05:06', 'admin', '3', 'berita', '1'),
(9, 'PDIP Pecat Kader Tersangka Penganiayaan Pelajar Medan', 'nasonal', '<p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\"><b>YB Berita</b>, Medan - Ketua DPD PDIP Sumatera Utara (Sumut) Rapidin Simbolon meminta maaf atas ulah Wakil Pembina Satgas Cakra Buana PDIP Sumut, HSM (43) yang menganiaya FAL (17), pelajar SMA Al-Azhar di Kota Medan, Sumatera Utara.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">\"Saya sebagai Ketua DPD PDIP Sumatera Utara, pertama saya mohon maaf atas ulah atau arogansi kader kita. Dia seorang kader Satgas Cakra Buana PDIP Sumut,\" kata Rapidin, Sabtu (25/12).</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Rapidin mengatakan tindakan HSM tak dapat dibenarkan. Ia memastikan bakal memecat HSM dari pengurus PDIP karena tindakan tersebut. Pihaknya segera menggelar rapat internal untuk mengambil keputusan.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">\"Nanti akan kita berhentikan dengan tidak hormat. Di partai kita, sesuai dengan arahan ibu Ketua Umum Megawati Soekarnoputri kader tidak dibenarkan melakukan tindakan-tindakan tidak terpuji,\" tegasnya.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">HSM telah ditetapkan sebagai tersangka penganiayaan. Ia diduga menabrak motor, menendang, memukuli dan menampar FAL (17) pelajar SMA Al-Azhar di depan mini market Jalan Pintu Air IV, Kelurahan Kwala Bekala, Kecamatan Medan Johor, Kota Medan.</span></font></p><div><br></div>', 'photo/PDIP_Pecat_Kader_Tersangka_Penganiayaan_Pelajar_Medan.jpg', 'PDIP', '2021-12-25 17:07:44', 'admin', '2', 'berita', '1'),
(10, 'Erick Thohir Bongkar Pasang Bos 7 BUMN Besar Jelang Tutup Tahun', 'ekonomi', '<p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\"><b>YB Berita</b>, Jakarta - Menteri Badan Usaha Milik Negara (BUMN) Erick Thohir merombak jajaran direksi sejumlah perusahaan pelat merah dalam sepekan terakhir. Hal ini dilakukan lewat Rapat Umum Pemegang Saham Luar Biasa (RUPSLB).</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Pertama, Erick membongkar jajaran direksi PT Semen Indonesia (Persero) Tbk. Ia menunjuk Direktur Keuangan PT Jasa Marga (Persero) Tbk Donny Arsal menjadi Direktur Utama Semen Indonesia.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Donny menggantikan posisi Hendi Prio Santoso yang sebelumnya duduk di pucuk pimpinan BUMN Semen Indonesia.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Selain itu, Erick mengangkat beberapa anggota baru di jajaran direksi Semen Indonesia. Mereka adalah Yosviandri sebagai Direktur Operasi, Aulia Mulki sebagai Direktur Strategis Bisnis dan Pengembangan Usaha, dan Agung Wiharto sebagai Direktur SDM dan Umum.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Selain mengangkat anggota baru, Erick memberhentikan anggota direksi lama. Detailnya, Hendi, lalu Benny Wendry dari kursi direktur produksi, Tri Abdisatrijo dari direktur engineering dan proyek, Fadjar Judisiawan dari direktur strategi bisnis dan pengembangan usaha, serta Tina T Kemala dari direktur SDM dan hukum.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><font color=\"#444444\" face=\"AcuminPro, arial, helvetica, sans-serif\"><span style=\"font-size: 15px;\">Kedua, Erick merombak susunan direksi Jasa Marga. Ia menunjuk Ade Wahyu sebagai Direktur Keuangan perusahaan itu.</span></font></p><p style=\"box-sizing: border-box; overflow-wrap: break-word; margin-top: 0px;\"><br></p>', 'photo/Erick_Thohir_Bongkar_Pasang_Bos_7_BUMN_Besar_Jelang_Tutup_Tahun.jpg', 'Erick Thohir  | BUMN', '2021-12-25 17:09:32', 'admin', '11', 'berita', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID` int(5) NOT NULL,
  `Kategori` varchar(100) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `Terbit` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID`, `Kategori`, `alias`, `Terbit`) VALUES
(1, 'Nasional', 'nasonal', '1'),
(7, 'Ekonomi', 'ekonomi', '1'),
(8, 'Olahraga', 'olahraga', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
