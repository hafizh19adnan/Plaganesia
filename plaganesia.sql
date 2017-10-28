-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2017 at 03:19 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `plaganesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 1),
(2, 'pemerintah', 'pemerintah', 1),
(3, 'surveyor.jaksel', 'surveyor', 2),
(4, 'surveyor.jaktim', 'surveyor', 2),
(5, 'surveyor.jakbar', 'surveyor', 2),
(6, 'surveyor.jakut', 'surveyor', 2),
(7, 'surveyor.jakpus', 'surveyor', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_provinsi` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`id`, `nama`, `id_provinsi`) VALUES
(1, 'Jakarta Selatan', 2),
(2, 'Jakarta Timur', 2),
(3, 'Jakarta Barat', 2),
(4, 'Jakarta Utara', 2),
(5, 'Jakarta Pusat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_kabupaten` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama`, `id_kabupaten`) VALUES
(1, 'Kebayoran Baru', 1),
(2, 'Kebayoran Lama', 1),
(3, 'Pesanggrahan', 1),
(4, 'Cilandak', 1),
(5, 'Pasar Minggu', 1),
(6, 'Jagakarsa', 1),
(7, 'Mampang Prapatan', 1),
(8, 'Pancoran', 1),
(9, 'Tebet', 1),
(10, 'Setiabudi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama_pelapor` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `id_kabupaten` int(6) UNSIGNED NOT NULL,
  `isi` text NOT NULL,
  `tgl_lapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama_pelapor`, `alamat`, `id_kabupaten`, `isi`, `tgl_lapor`) VALUES
(1, 'Batman bin Suparman', 'Jl. Kaca Piring No. 20, Cijantung', 2, 'Malam pak/bu, di sebelah rumah saya ada ayam mati mendadak. Tapi ayam yang lain selamet. saya ga yakin klo ayamnya cuman keselek. Mungkin ada penyakit yang belum ketahuan. Mohon diselidiki trims', '2017-10-28'),
(2, 'Batman bin Supi Darman', 'Jl. Kaca Piring No. 12, Cijantung', 2, 'Malam pak/bu, di sebelah rumah saya ada sapimati mendadak. Tapi sapi yang lain selamet. saya ga yakin klo sapinya cuman keselek. Mungkin ada penyakit yang belum ketahuan. Mohon diselidiki trims', '2017-10-28'),
(3, 'Ibu Fradya', 'Jl. Bangkok No. 45', 4, 'Di perumahan PLN Kebayoran Baru banyak yang terkena DB. Harap segera di fogging. thx', '2017-10-28'),
(4, 'Pak Pradyo', 'Jl. Bangkok No. 45', 4, 'Tolong pak/bu. Di perumahan PLN Kebayoran Baru banyak yang terkena DB. Harap segera di fogging. thx', '2017-10-28'),
(5, 'Mas Paryo', 'Jl. Bangkok No. 40', 4, 'Pak Tolong ini di perumahan PLN banyak yang sakit DB', '2017-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`) VALUES
(1, 'Demam Berdarah'),
(2, 'HIV/AIDS'),
(3, 'Malaria'),
(4, 'Tuberkulosis');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'Banten'),
(2, 'DKI Jakarta'),
(3, 'Jawa Barat'),
(4, 'Jawa Tengah'),
(5, 'Yogyakarta'),
(6, 'Jawa Timur'),
(7, 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(6) UNSIGNED NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_penyakit` int(6) UNSIGNED NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rekomendasi`
--

INSERT INTO `rekomendasi` (`id`, `judul`, `deskripsi`, `id_penyakit`, `level`) VALUES
(1, 'Fogging', 'Yukz difogging difogging tapi jangan pake vape', 1, 2),
(2, 'Sosialisasi 3M', 'Menutup Penampungan Air, Menguras Penampungan Air, Mengubur Barang Bekas', 1, 3),
(3, 'Pembagian Abate', 'Abate bubuk ajaib dari kantong Doraemon bisa bikin nyamuk semaput', 1, 2),
(4, 'Sosialisasi HIV', 'Jauhi narkoba', 2, 3),
(5, 'Pembagian Pil Kina', 'Kina wa omae no mirai desu you', 3, 1),
(6, 'Tim Cepat Tanggap', 'uhuk uhuk uhuk tau tau sembuh yeay', 4, 1),
(7, 'Sanatorium', 'uhuk uhuk uhuk tidur minum obat tau tau sembuh yeay', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sample`
--

CREATE TABLE `sample` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `is_sakit` tinyint(1) NOT NULL,
  `id_survey` int(6) UNSIGNED NOT NULL,
  `tgl_data` date DEFAULT NULL,
  `tgl_sakit` date DEFAULT NULL,
  `id_surveyor` int(6) UNSIGNED DEFAULT NULL,
  `umur` int(10) DEFAULT NULL,
  `gender` char(1) DEFAULT NULL,
  `is_meninggal` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sample`
--

INSERT INTO `sample` (`id`, `nama`, `is_sakit`, `id_survey`, `tgl_data`, `tgl_sakit`, `id_surveyor`, `umur`, `gender`, `is_meninggal`) VALUES
(51, 'Mamad Sukirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 1),
(52, 'Mamad Sakirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 1),
(53, 'Budi Sukirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 1),
(54, 'Balai Sukirman', 1, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 1),
(55, 'Ucup Sukirman', 0, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 0),
(56, 'Baba Rafi', 0, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 0),
(57, 'Sosro Seger', 1, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 0),
(58, 'Macan Biskuat', 1, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 0),
(59, 'Harimau Superindo', 0, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 0),
(60, 'Tentara Hero', 0, 1, '2017-10-10', '2017-10-10', 1, 19, 'L', 0),
(61, 'Sarah Sechan', 1, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(62, 'Multatuli', 1, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(63, 'Darwis Dekker', 1, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(64, 'Suparno', 1, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(65, 'Megawan Suparnoputro', 0, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(66, 'Mangunhardjo', 0, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(67, 'Joko Tingkir', 1, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(68, 'Topan Mengamuk', 1, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(69, 'Armin Artlert', 0, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(70, 'Erwin Smith', 0, 2, '2017-10-10', '2017-10-10', 2, 19, 'L', 0),
(71, 'Naegi Makoto', 1, 3, '2017-10-10', '2017-10-10', 3, 19, 'L', 0),
(72, 'Gantt', 1, 3, '2017-10-10', '2017-10-10', 3, 19, 'L', 0),
(73, 'Parkinson', 1, 3, '2017-10-10', '2017-10-10', 3, 19, 'L', 0),
(74, 'Murphy', 1, 3, '2017-10-10', '2017-10-10', 3, 19, 'L', 0),
(75, 'Malkist', 0, 3, '2017-10-10', '2017-10-10', 3, 19, 'P', 0),
(76, 'Oreo', 0, 3, '2017-10-10', '2017-10-10', 3, 19, 'P', 0),
(77, 'Ritter', 1, 3, '2017-10-10', '2017-10-10', 3, 19, 'P', 0),
(78, 'Top', 1, 3, '2017-10-10', '2017-10-10', 3, 19, 'P', 0),
(79, 'Slai Olay', 0, 3, '2017-10-10', '2017-10-10', 3, 19, 'P', 0),
(80, 'Rivaille', 0, 3, '2017-10-10', '2017-10-10', 3, 19, 'P', 0),
(81, 'Tyrone', 1, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(82, 'Pablo', 1, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(83, 'Uniqua', 1, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(84, 'Tingky Wingky', 1, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(85, 'Dipsy', 0, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(86, 'Lala', 0, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(87, 'Po', 1, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(88, 'Ian', 1, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(89, 'Strepsils', 0, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(90, 'Panadol', 0, 4, '2017-10-10', '2017-10-10', 4, 19, 'P', 0),
(91, 'Onigiri', 1, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(92, 'Yaki Udon', 1, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(93, 'Teppanyaki', 1, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(94, 'Robatayaki', 1, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(95, 'Ababu', 0, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(96, 'Pepper Lunch', 0, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(97, 'UncleK', 1, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(98, 'Mujigae', 1, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(99, 'Maxx Coffee', 0, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0),
(100, 'Panadol', 0, 5, '2017-10-10', '2017-10-10', 5, 19, 'P', 0);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(300) NOT NULL,
  `id_penyakit` int(6) UNSIGNED NOT NULL,
  `id_kabupaten` int(6) UNSIGNED NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `panduan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `nama`, `id_penyakit`, `id_kabupaten`, `token`, `tgl_mulai`, `tgl_selesai`, `panduan`) VALUES
(1, 'Survey Demam Berdarah Jakarta Selatan Oktober 2017', 1, 1, 'jkt-s-10-17', '2017-10-01', '2017-10-25', 'Isi dengan hati yang lapang'),
(2, 'Survey Demam Berdarah Jakarta Timur Oktober 2017', 1, 2, 'jkt-t-10-17', '2017-10-01', '2017-10-25', 'Isi dengan hati yang lapang'),
(3, 'Survey Demam Berdarah Jakarta Barat Oktober 2017', 1, 3, 'jkt-b-10-17', '2017-10-01', '2017-10-25', 'Isi dengan hati yang lapang'),
(4, 'Survey Demam Berdarah Jakarta Utara Oktober 2017', 1, 4, 'jkt-u-10-17', '2017-10-01', '2017-10-25', 'Isi dengan hati yang lapang'),
(5, 'Survey Demam Berdarah Jakarta Pusat Oktober 2017', 1, 5, 'jkt-p-10-17', '2017-10-01', '2017-10-25', 'Isi dengan hati yang lapang');

-- --------------------------------------------------------

--
-- Table structure for table `user_gov`
--

CREATE TABLE `user_gov` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_account` int(6) UNSIGNED NOT NULL,
  `tingkat` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_gov`
--

INSERT INTO `user_gov` (`id`, `nama`, `id_account`, `tingkat`) VALUES
(1, 'Pemerintah Jakarta Selatan', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_surveyor`
--

CREATE TABLE `user_surveyor` (
  `id` int(6) UNSIGNED NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id_account` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_surveyor`
--

INSERT INTO `user_surveyor` (`id`, `nama`, `id_account`) VALUES
(1, 'Topan Rezeki', 3),
(2, 'Mehmet Cavabi', 3),
(3, 'Mahmud Eskisehir', 3),
(4, 'Thomas Muentzer', 3),
(5, 'Sarwoto Mangkuharjo', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_provinsi` (`id_provinsi`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `sample`
--
ALTER TABLE `sample`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_survey` (`id_survey`),
  ADD KEY `id_surveyor` (`id_surveyor`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_penyakit` (`id_penyakit`),
  ADD KEY `id_kabupaten` (`id_kabupaten`);

--
-- Indexes for table `user_gov`
--
ALTER TABLE `user_gov`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_account` (`id_account`);

--
-- Indexes for table `user_surveyor`
--
ALTER TABLE `user_surveyor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_account` (`id_account`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kabupaten`
--
ALTER TABLE `kabupaten`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sample`
--
ALTER TABLE `sample`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_gov`
--
ALTER TABLE `user_gov`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_surveyor`
--
ALTER TABLE `user_surveyor`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kabupaten_ibfk_1` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsi` (`id`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`);

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`);

--
-- Constraints for table `sample`
--
ALTER TABLE `sample`
  ADD CONSTRAINT `sample_ibfk_1` FOREIGN KEY (`id_survey`) REFERENCES `survey` (`id`),
  ADD CONSTRAINT `sample_ibfk_2` FOREIGN KEY (`id_surveyor`) REFERENCES `user_surveyor` (`id`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`id_penyakit`) REFERENCES `penyakit` (`id`),
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`id_kabupaten`) REFERENCES `kabupaten` (`id`);

--
-- Constraints for table `user_gov`
--
ALTER TABLE `user_gov`
  ADD CONSTRAINT `user_gov_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id`);

--
-- Constraints for table `user_surveyor`
--
ALTER TABLE `user_surveyor`
  ADD CONSTRAINT `user_surveyor_ibfk_1` FOREIGN KEY (`id_account`) REFERENCES `account` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
