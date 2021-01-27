-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 03:36 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nrd` varchar(100) DEFAULT NULL,
  `kode_dosen` varchar(12) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nrd`, `kode_dosen`, `nama`, `tanggal_lahir`, `email`, `agama`, `jenis_kelamin`, `alamat`, `gambar`) VALUES
(1, '1', '0', 'fahmi', NULL, 'fahmi@gmail.com', NULL, NULL, 'dosen', '5feeda58d118f.jpg'),
(2, '12314', 'A', 'alvin', '2021-01-03', 'alvinrataja@gmail.com', 'islam', 'laki-laki', 'padengalng', 'rhaptalia.png');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(50) NOT NULL,
  `id_mengajar` int(50) NOT NULL,
  `kode_jurusan` varchar(500) NOT NULL,
  `id_kelas` int(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_masuk` varchar(11) NOT NULL,
  `jam_keluar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `kode_jurusan` varchar(25) DEFAULT NULL,
  `nama_jurusan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `kode_jurusan`, `nama_jurusan`) VALUES
(1, 'J-1', 'Teknik Informatika'),
(2, 'J-2', 'Akuntansi'),
(4, 'J-3', 'Teknik Industri');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kode_jurusan` varchar(50) DEFAULT NULL,
  `nama_jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kode_jurusan`, `nama_jurusan`, `kelas`) VALUES
(2, 'J-2', 'Akuntansi', 'A-2'),
(3, 'J-2', 'Akuntansi', 'A-3');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'fahmi', '', 'fahmi@gmail.com', 'teknik informatika', '5feed9b1906da.jpg'),
(9, 'salwa', '787967654', 'salwa@gmail.com', 'kedokteran', '5fed869b555b4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(11) NOT NULL,
  `kode_matkul` varchar(20) DEFAULT NULL,
  `nama_matkul` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kode_matkul`, `nama_matkul`) VALUES
(1, 'A-1', 'Pemrograman'),
(2, 'A-2', 'Android'),
(5, 'A-3', 'ACCOUNTANSI'),
(6, 'A-4', 'Agama');

-- --------------------------------------------------------

--
-- Table structure for table `mengajar`
--

CREATE TABLE `mengajar` (
  `id_mengajar` int(11) NOT NULL,
  `kode_jurusan` varchar(50) DEFAULT NULL,
  `kode_dosen` varchar(50) NOT NULL,
  `kode_matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mengajar`
--

INSERT INTO `mengajar` (`id_mengajar`, `kode_jurusan`, `kode_dosen`, `kode_matkul`) VALUES
(6, 'J-1', 'A', 'A-1'),
(7, 'J-2', 'A', 'A-2'),
(8, 'J-1', '0', 'A-1'),
(9, 'J-1', '0', 'A-3'),
(10, 'J-1', '0', 'A-2'),
(11, 'J-1', 'A', 'A-4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `role`) VALUES
(1, 'alvi@gmail.com', 'ad', '$2y$10$ILsqEayZWLlEuQ3b3oCU4uvUBz1rMaj43Alwov07blNUXldZwGoES', '0'),
(6, 'alvin@gmail.com', '123', '$2y$10$ZocKClntXtRB8T1wibXGMOzn9optvPkT/k/RW5V0jod8LH3EmECYq', '0'),
(7, 'alvin@gmail.com', 'asda', '$2y$10$/ZEMeElDi4cb210RKuI1f.kk9fcJm2eTw2.Dq2u46lsEPQV7mTTBS', '0'),
(8, 'alvin@gmail.com', 'alvin', '$2y$10$0ARtPGz40MHYuRMl7fWVQOEFcj5.g0ZohLrhLV1jUh1.FUdW2QkEW', 'admin'),
(9, 'alvi@gmail.com', 'alvin123', '$2y$10$QEwcZ0i1uqA0cCQH9eXMzuGXSW3RTYEdRfboCC1DIMZvKI9pmlJTK', '0'),
(20, '', '12345678', '$2y$10$bgaoIYO8REw219aDr7KfD.3f0Il0gW3SzQqVvyk0..51mbasB3sqm', 'dosen'),
(21, '', '1214', '$2y$10$IviqOeFBxMgaPsHZoLBQXOTvit4fCDV7tyNV42bXZRn16xdcmY.1u', 'dosen'),
(22, 'Rahayusri@gmail.com', '1234', '$2y$10$J09rGHAVkh4h92QeUkqwxeibXjcx58AmcSsBDEyaLyHAQPpPQzifO', 'dosen'),
(23, 'alvinrataja63@gmail.', '1214', '$2y$10$9PKWwsMQUU0P8f7gqkzoZO/tBm.9RbWOz6lk6LJJ.cna2xWh/k65G', 'dosen'),
(24, 'alvinrataja63@gmail.', '1214', '$2y$10$SlzAapxZxa1Eh2BtmYZhNOiwbgqTa4WboxtKK926elP3o0tZPjVv6', 'dosen'),
(25, 'andrian@gmail.com', 'andrian', '$2y$10$BJgU1.lQtAGKXwcAJNVg8ugScHfU6DhiikrOw1BghuGYgDdEJ0lZ2', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `nrd` (`nrd`),
  ADD KEY `kode_dosen` (`kode_dosen`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `kode_matkul` (`kode_matkul`);

--
-- Indexes for table `mengajar`
--
ALTER TABLE `mengajar`
  ADD PRIMARY KEY (`id_mengajar`),
  ADD KEY `id_mengajar` (`id_mengajar`),
  ADD KEY `kode_matkul` (`kode_matkul`),
  ADD KEY `kode_dosen` (`kode_dosen`),
  ADD KEY `kode_jurusan` (`kode_jurusan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mengajar`
--
ALTER TABLE `mengajar`
  MODIFY `id_mengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
