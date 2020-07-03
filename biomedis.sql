-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 12:52 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biomedis`
--

-- --------------------------------------------------------

--
-- Table structure for table `doagnosa_penyakit`
--

CREATE TABLE `doagnosa_penyakit` (
  `id_penyakit` varchar(20) NOT NULL,
  `id_kunjungan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` varchar(33) NOT NULL,
  `nama_dokter` varchar(255) NOT NULL,
  `alamat_dokter` text NOT NULL,
  `telepon_dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `nama_dokter`, `alamat_dokter`, `telepon_dokter`) VALUES
('DK-001ID', 'nana', 'semarang', '09796875');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(22) NOT NULL,
  `id_dokter` varchar(20) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `waktu_awal` time NOT NULL,
  `waktu_akhir` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penyakit`
--

CREATE TABLE `jenis_penyakit` (
  `id_jenis` int(20) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_penyakit`
--

INSERT INTO `jenis_penyakit` (`id_jenis`, `nama_jenis`) VALUES
(1, 'jerawat'),
(2, 'panu'),
(3, 'kadas');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_penyakit_id`
--

CREATE TABLE `jenis_penyakit_id` (
  `id_penyakait` varchar(20) NOT NULL,
  `id_kunjungan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` varchar(20) NOT NULL,
  `id_dokter` varchar(20) NOT NULL,
  `id_pasien` varchar(20) NOT NULL,
  `tgl_kunjungan` datetime NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id_master` int(22) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id_master`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'dokter', 'dokter', 'dokter'),
(4, 'perawat', 'perawat', 'perawat'),
(5, 'pegawai', 'pegawai', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(20) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `id_bpom` varchar(255) NOT NULL,
  `satuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `id_bpom`, `satuan`) VALUES
('OB001AT', 'paramex', 'BPOM 7784', '1kg');

-- --------------------------------------------------------

--
-- Table structure for table `obat_medis`
--

CREATE TABLE `obat_medis` (
  `id_kunjungan` varchar(20) NOT NULL,
  `id_obat` varchar(20) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat_medis`
--

INSERT INTO `obat_medis` (`id_kunjungan`, `id_obat`, `jumlah`) VALUES
('', '4', 5),
('', '4', 5);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` varchar(20) NOT NULL,
  `no_identitas` varchar(255) NOT NULL,
  `tipe_identitas` varchar(50) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `jk_pasien` char(20) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_pasien` text NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `tgl_register` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_identitas`, `tipe_identitas`, `nama_pasien`, `jk_pasien`, `tempat_lahir`, `tgl_lahir`, `alamat_pasien`, `telepon`, `tgl_register`) VALUES
('PS001EN', '22', 'ktp', 'cas', 'Perempuan', 'csdcc', '2019-01-21', 'csdac', 'c323', '2019-01-22'),
('PS002EN', 'ktp', 'sdasd', 'dsad', 'Perempuan', 'dasd', '2019-01-09', 'dsa', 'dasd', '2019-01-11'),
('PS003EN', '133453534', 'ktp', 'sandi', 'Laki-laki', 'blora', '1994-01-10', 'semarang', '767979789', '2019-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` varchar(20) NOT NULL,
  `id_tipe` varchar(11) NOT NULL,
  `nama_pegawai` varchar(255) NOT NULL,
  `pin_pegawai` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(20) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `desk_penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `id_jenis`, `nama_penyakit`, `desk_penyakit`) VALUES
('Pk001IT', 2, 'panu', 'panu'),
('Pk002IT', 3, 'hati', 'hati');

-- --------------------------------------------------------

--
-- Table structure for table `spesialis`
--

CREATE TABLE `spesialis` (
  `id_spesialis` varchar(23) NOT NULL,
  `nama_spesialis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `spesial_dokter`
--

CREATE TABLE `spesial_dokter` (
  `id_dokter` varchar(33) NOT NULL,
  `id_spesialis` int(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spesial_dokter`
--

INSERT INTO `spesial_dokter` (`id_dokter`, `id_spesialis`) VALUES
('1', 2),
('2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE `tindakan` (
  `id_tindakan` varchar(20) NOT NULL,
  `nama_tindakan` varchar(255) NOT NULL,
  `desk_tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`id_tindakan`, `nama_tindakan`, `desk_tindakan`) VALUES
('PS003EN', '', 'kasian');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `name`, `pass`, `level`) VALUES
(1, 'sapto', '12345', 'admin'),
(2, 'dokter', 'dokter', 'dokter'),
(3, 'perawat', 'perawat', 'perawat'),
(4, 'apoteker', 'apoteker', 'apoteker');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doagnosa_penyakit`
--
ALTER TABLE `doagnosa_penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `id_kunjungan` (`id_kunjungan`),
  ADD KEY `id_penyakit` (`id_penyakit`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`);

--
-- Indexes for table `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `jenis_penyakit_id`
--
ALTER TABLE `jenis_penyakit_id`
  ADD PRIMARY KEY (`id_penyakait`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_pasien` (`id_pasien`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `obat_medis`
--
ALTER TABLE `obat_medis`
  ADD KEY `id_kunjungan` (`id_kunjungan`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `spesialis`
--
ALTER TABLE `spesialis`
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `spesial_dokter`
--
ALTER TABLE `spesial_dokter`
  ADD KEY `id_spesialis` (`id_spesialis`);

--
-- Indexes for table `tindakan`
--
ALTER TABLE `tindakan`
  ADD PRIMARY KEY (`id_tindakan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(22) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_penyakit`
--
ALTER TABLE `jenis_penyakit`
  MODIFY `id_jenis` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id_master` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
