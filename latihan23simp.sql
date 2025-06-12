-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2025 at 06:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan23simp`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `headline` varchar(20) NOT NULL,
  `isi_berita` text NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `tanggal_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `kategori`, `headline`, `isi_berita`, `pengirim`, `tanggal_publish`) VALUES
(3, 'apaya', 'gayaua', 'amcnk', '<p>dwuehwfsdhyfuwfupweo</p>', 'njcwn', '2025-05-05'),
(4, 'Banjir', 'Bencana Alam', 'Musibah', '<p>telah terjadi banjir bandanng yng disebabkan oleh<span style=\"background-color: rgb(255, 0, 0);\"> rusaknya daerah resapan air</span></p>', 'nazwa', '2025-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `dokter_pasien`
--

CREATE TABLE `dokter_pasien` (
  `iddokter` int(11) NOT NULL,
  `dokter` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter_pasien`
--

INSERT INTO `dokter_pasien` (`iddokter`, `dokter`) VALUES
(13, 'Poli Penyakit Dalam'),
(14, 'Poli Bedah'),
(15, 'Poli Anak'),
(16, 'Poli Mata'),
(17, 'Poli Gigi'),
(18, 'Poli THT'),
(19, 'Poli Jiwa'),
(20, 'Poli Jantung'),
(21, 'Poli Kandungan'),
(22, 'Poli Umum'),
(23, 'Poli KK');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`idkategori`, `kategori`) VALUES
(2, 'makanan'),
(3, 'minuman');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` int(50) NOT NULL,
  `semester` int(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`id_matkul`, `kode_matkul`, `nama_matkul`, `sks`, `semester`, `jenis`, `prodi`) VALUES
(1, 'UPK200X', 'PENDIDIKAN AGAMA', 2, 3, 'Wajib', 'Sistem Informasi'),
(10, 'UPK1010', 'BAHASA INGGRIS 1', 3, 3, 'Umum', 'Teknik Informatika'),
(11, 'UPK1010', 'PANCASILA', 3, 7, 'Umum', 'Teknologi Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idpasien` int(11) NOT NULL,
  `nm_pasien` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(11) NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `status` varchar(100) DEFAULT 'proses',
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idpasien`, `nm_pasien`, `tgl_lahir`, `alamat`, `no_telp`, `keluhan`, `tgl_kunjungan`, `dokter`, `status`, `id_user`) VALUES
(12, 'jncdc', '2025-06-01', 'jd sjc', 4353242, 'jdjn', '2025-06-14', 'Poli Kandungan', 'diterima', NULL),
(13, 'ww', '2025-06-07', 'hbddcb', 2147483647, 'hbjsac', '2025-06-14', 'Poli Jantung', 'proses', NULL),
(14, 'Nazwa', '2025-06-01', 'Tangerang', 2147483647, 'flu', '2025-06-22', 'Poli Umum', 'proses', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_pasien`
--

CREATE TABLE `status_pasien` (
  `idstatus` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_pasien`
--

INSERT INTO `status_pasien` (`idstatus`, `status`) VALUES
(3, 'Proses'),
(4, 'Ditolak'),
(5, 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `create_at`) VALUES
(1, 'name', '$2y$10$lc4I5E6fAEm301kFL.ggP.itfaXmGI4TNfH//2AbsGWxGxf4Yw6uK', 'admin', '2025-03-18 05:22:53'),
(2, 'name1', '$2y$10$ONHvVcQ/7PADTl.6nfh2xeTz0ooW6IFheQMzKZmt.HkXV6gcVwyQ.', 'user', '2025-05-06 04:15:49'),
(3, 'admin', '$2y$10$i1hvQedQa2RCqZi20GXp1eqpAWDkBRDgeB2fu1J/Hxjm8S/6kv.PS', 'admin', '2025-06-04 09:39:33'),
(4, 'user', '$2y$10$9X9N/WLPj5SOlEVhXT1Oy.ZCIrXpnNMBrlvVLVAgq7gg9qAaPdvGu', 'user', '2025-06-09 05:49:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `dokter_pasien`
--
ALTER TABLE `dokter_pasien`
  ADD PRIMARY KEY (`iddokter`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idpasien`);

--
-- Indexes for table `status_pasien`
--
ALTER TABLE `status_pasien`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dokter_pasien`
--
ALTER TABLE `dokter_pasien`
  MODIFY `iddokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `matakuliah`
--
ALTER TABLE `matakuliah`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `idpasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `status_pasien`
--
ALTER TABLE `status_pasien`
  MODIFY `idstatus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
