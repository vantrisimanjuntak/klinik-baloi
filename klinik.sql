-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 04:53 AM
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
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'Administrator', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_pemeriksaan`
--

CREATE TABLE `daftar_pemeriksaan` (
  `antrian` int(10) NOT NULL,
  `pasien` int(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `tgl_daftar_pemeriksaan` date NOT NULL,
  `layanan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_pelayanan` date NOT NULL,
  `jam_pelayanan` time NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `tgl_pelayanan`, `jam_pelayanan`, `jabatan`) VALUES
(1, 'Vantri', '2023-12-26', '10:00:00', 'Dokter Kepala');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `title_layanan` varchar(100) NOT NULL,
  `desc_layanan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `title_layanan`, `desc_layanan`) VALUES
(1, 'Layanan Poli Umum', 'Merupakan salah satu layanan yang ada di Klinik Baloi Batam yang memberikan pelayanan kedokteran berupa pemeriksaan kesehatan, pengobatan dan penyuluhan kepada pasien atau masyarakat agar tidak terjadi penularan dan komplikasi penyakit, serta meningkatkan pengetahuan dan kesadaran masyarakat dalam bidang kesehatan. Pelayanan kesehatan dilakukan oleh dokter dan perawat yang memiliki sertifikat dan kompetensi yang dibutuhkan untuk pelayanan kesehatan primer.'),
(2, 'Layanan Poli Gigi dan Kesehatan Mulut', 'Layanan poli gigi dan kesegatan mulut merupakan salah satu dari jenis layanan di puskesmas yang memberikan pelayanan kesehatan gigi dan mulut berupa pemeriksaan kesehatan gigi dan mulut, pengobatan dan pemberian tindakan medis dasar kesehatan gigi dan mulut.');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id` int(11) NOT NULL,
  `id_shadow` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `no_hp` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendaftar`
--

INSERT INTO `pendaftar` (`id`, `id_shadow`, `nama`, `no_ktp`, `no_hp`, `jenis_kelamin`, `alamat`, `password`, `status`) VALUES
(22, '58268b09e1d296f4', 'Vantri A Simanjuntak', '1209202410980002', '085358904344', 'Pria', 'Kisaran', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Aktif'),
(23, '76a8685e188b00ca', 'Findy Christy', '120901012123123', '085312390123', 'Wanita', 'Kisaran', '4297f44b13955235245b2497399d7a93', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no_ktp`, `nama`, `alamat`, `jenis_kelamin`, `status`, `no_hp`, `password`) VALUES
('1209202410980002', 'Vantri A Simanjuntak', 'Kisaran', 'Pria', 'Aktif', '085358904344', 'f6fdffe48c908deb0f4c3bd36c032e72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_pemeriksaan`
--
ALTER TABLE `daftar_pemeriksaan`
  ADD PRIMARY KEY (`antrian`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`no_ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_pemeriksaan`
--
ALTER TABLE `daftar_pemeriksaan`
  MODIFY `antrian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
