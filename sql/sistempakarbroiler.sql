-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Aug 04, 2022 at 01:40 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistempakarbroiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kd_admin` int(11) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `user_admin` varchar(30) NOT NULL,
  `pass_admin` varchar(20) NOT NULL,
  `nama_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_densitas`
--

CREATE TABLE `tb_densitas` (
  `kd_densitas` int(11) NOT NULL,
  `densitas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_densitas`
--

INSERT INTO `tb_densitas` (`kd_densitas`, `densitas`) VALUES
(1, 0),
(2, 0.1),
(3, 0.2),
(4, 0.3),
(5, 0.4),
(6, 0.5),
(7, 0.6),
(8, 0.7),
(9, 0.8),
(10, 0.9),
(11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_gejala`
--

CREATE TABLE `tb_gejala` (
  `kd_gejala` int(11) NOT NULL,
  `jns_gejala` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_gejala`
--

INSERT INTO `tb_gejala` (`kd_gejala`, `jns_gejala`) VALUES
(1, 'Nafsu makan menurun'),
(2, 'Sesak napas'),
(3, 'Ngorok'),
(4, 'Diare'),
(5, 'Kelumpuhan parsial atau penuh'),
(6, 'Lesu'),
(7, 'Pertumbuhan terhambat'),
(8, 'Bersin'),
(9, 'Batuk'),
(10, 'Keluar leleran hidung dan eksudat berbuih di mata'),
(11, 'Jengger dan pial terlihat berwarna biru keunguan'),
(12, 'Kurus'),
(13, 'Penurunan produksi telur'),
(14, 'Pembengkakan pada muka dan kepala'),
(15, 'Bulu berdiri'),
(16, 'Perut membesar'),
(17, 'Gemetar'),
(18, 'Tortikolis'),
(19, 'Megap-megap'),
(20, 'Feses disertai darah'),
(21, 'Nampak mengantuk dan mata tertutup'),
(22, 'Sayap menggantung dan bulu kusam'),
(23, 'Anoreksia'),
(24, 'Kelopak mata, telapak kaki dan perut yang tidak ditumbuhi bulu terlihat berwarna biru keunguan'),
(25, 'Adanya pendarahan pada kaki berupa bintik-bintik merah (ptekhie) atau biasa disebut kerokan kaki'),
(26, 'Kematian terjadi dengan cepat'),
(27, 'Kerabang telur tipis dan lembek'),
(28, 'Anak ayam yang terkena tampak tertekan dan akan cenderung meringkuk di dekat sumber panas'),
(29, 'Albumin encer'),
(30, 'Bentuk kerabang telur tidak teratur'),
(31, 'Feses berwarna putih kapur'),
(32, 'Kematian terjadi akibat dehidrasi'),
(33, 'Perut bila diraba terasa mengeras'),
(34, 'Kematian kadang terjadi akibat pendarahan organ dalam karena ruptura hati'),
(35, 'Kematian sering terjadi pada ayam umur 6-9 bulan'),
(36, 'Sekitar lubang hidung terdapat kerak eksudat yang berwarna kuning'),
(37, 'Lipatan sekitar mata membengkak dan mata menjadi tertutup'),
(38, 'Kelemahan pada kaki'),
(39, 'Bergerombol pada suatu tempat'),
(40, 'Pembengkakan pada sendi'),
(41, 'Diare berwarna putih atau coklat kehijau-hijauan'),
(42, 'Terdapat gumpalan seperti pasta di sekitar kloaka'),
(43, 'Kejang'),
(44, 'Jika terjadi infeksi pada mata umumnya hanya menyerang salah satu matanya'),
(45, 'Sayap melintir'),
(46, 'Mendesis'),
(47, 'Pada saat ditimbang dengan posisi kepala dibawah, ayam bisa langsung mati'),
(48, 'Diare berwarna merah kehitaman'),
(49, 'Terjadi pendarahan pada bagian mata'),
(50, 'Kematian terjadi pada saat malam hari'),
(51, 'Anemia'),
(52, 'Keluar darah dari paruh ayam'),
(53, 'Jantung pecah'),
(54, 'Kematian dengan posisi terlentang'),
(55, 'Penyakit menyerang pada ayam yang bertubuh besar dan gemuk'),
(56, 'Kematian terjadi pada saat siang hari dan pada saat suhu udara panas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `kd_member` int(11) NOT NULL,
  `email_member` varchar(50) DEFAULT NULL,
  `user_member` varchar(30) DEFAULT NULL,
  `pass_member` varchar(20) DEFAULT NULL,
  `nama_member` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `peternakan` varchar(50) DEFAULT NULL,
  `alamatternak` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit`
--

CREATE TABLE `tb_penyakit` (
  `kd_penyakit` int(11) NOT NULL,
  `nama_penyakit` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit`
--

INSERT INTO `tb_penyakit` (`kd_penyakit`, `nama_penyakit`) VALUES
(1, 'Flu Burung (Avian Influenza)'),
(2, 'Batuk Ayam Menahun (Infectious Bronchitis)'),
(3, 'Gumboro (Infectious Bursal Disease)'),
(4, 'Marek (Mareks Disease)'),
(5, 'Tetelo (Newcastle Disease)'),
(6, 'Pernapasan Kronis (Chronic Respiratory Disease)'),
(7, 'Salesma (Infectious Coryza)'),
(8, 'Berak Kapur (Pullorum)'),
(9, 'Pneumonia Ayam (Aspergillosis)'),
(10, 'Kandidiasis (Candidiasis)'),
(11, 'Kolibasilosis (Colibaccilosis)'),
(12, 'Berak Darah (Coccidiosis)'),
(13, 'Malaria Ayam (Plasmodiosis)'),
(14, 'Stress Panas (Heat Stress)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyakit_gejala`
--

CREATE TABLE `tb_penyakit_gejala` (
  `kd_p_g` int(11) NOT NULL,
  `kd_penyakit` int(11) NOT NULL,
  `kd_gejala` int(11) NOT NULL,
  `kd_densitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penyakit_gejala`
--

INSERT INTO `tb_penyakit_gejala` (`kd_p_g`, `kd_penyakit`, `kd_gejala`, `kd_densitas`) VALUES
(1, 1, 1, 8),
(2, 1, 3, 7),
(3, 1, 4, 5),
(4, 1, 5, 5),
(5, 1, 8, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indexes for table `tb_densitas`
--
ALTER TABLE `tb_densitas`
  ADD PRIMARY KEY (`kd_densitas`);

--
-- Indexes for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  ADD PRIMARY KEY (`kd_gejala`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`kd_member`);

--
-- Indexes for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  ADD PRIMARY KEY (`kd_penyakit`);

--
-- Indexes for table `tb_penyakit_gejala`
--
ALTER TABLE `tb_penyakit_gejala`
  ADD PRIMARY KEY (`kd_p_g`),
  ADD KEY `kd_penyakit` (`kd_penyakit`),
  ADD KEY `kd_gejala` (`kd_gejala`),
  ADD KEY `kd_densitas` (`kd_densitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `kd_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_densitas`
--
ALTER TABLE `tb_densitas`
  MODIFY `kd_densitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40012;

--
-- AUTO_INCREMENT for table `tb_gejala`
--
ALTER TABLE `tb_gejala`
  MODIFY `kd_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30058;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `kd_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001;

--
-- AUTO_INCREMENT for table `tb_penyakit`
--
ALTER TABLE `tb_penyakit`
  MODIFY `kd_penyakit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_penyakit_gejala`
--
ALTER TABLE `tb_penyakit_gejala`
  MODIFY `kd_p_g` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_penyakit_gejala`
--
ALTER TABLE `tb_penyakit_gejala`
  ADD CONSTRAINT `tb_penyakit_gejala_ibfk_1` FOREIGN KEY (`kd_penyakit`) REFERENCES `tb_penyakit` (`kd_penyakit`),
  ADD CONSTRAINT `tb_penyakit_gejala_ibfk_2` FOREIGN KEY (`kd_gejala`) REFERENCES `tb_gejala` (`kd_gejala`),
  ADD CONSTRAINT `tb_penyakit_gejala_ibfk_3` FOREIGN KEY (`kd_densitas`) REFERENCES `tb_densitas` (`kd_densitas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
