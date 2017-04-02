-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 07:03 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id_inbox` int(5) NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk_agenda` date NOT NULL,
  `id_perihal` text NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `isi_disposisi` text NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `lokasi_arsip` varchar(255) NOT NULL,
  `tanggal_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox_b`
--

CREATE TABLE `inbox_b` (
  `id_inbox_b` int(5) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk_agenda` date NOT NULL,
  `id_perihal` text NOT NULL,
  `isi_disposisi_a` text NOT NULL,
  `isi_disposisi_b` text NOT NULL,
  `isi_disposisi_c` text NOT NULL,
  `jumlah_lampiran` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `lokasi_arsip` varchar(100) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `tanggal_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox_b`
--

INSERT INTO `inbox_b` (`id_inbox_b`, `no_surat`, `pengirim`, `tanggal_surat`, `tanggal_masuk_agenda`, `id_perihal`, `isi_disposisi_a`, `isi_disposisi_b`, `isi_disposisi_c`, `jumlah_lampiran`, `status`, `lokasi_arsip`, `upload_file`, `tanggal_eksekusi`, `id_user`, `unit_kerja`) VALUES
(17, '1', '2', '2017-03-23', '2017-03-23', '11', '1', '1', '1', '1', '1', '1', '1.PNG', '2017-03-23 06:13:51', 5, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `inbox_g`
--

CREATE TABLE `inbox_g` (
  `id_inbox` int(5) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk_agenda` date NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `id_perihal` text NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id_izin` int(5) NOT NULL,
  `asal_surat` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_ijin` date NOT NULL,
  `id_perihal` text NOT NULL,
  `perihal` varchar(255) NOT NULL,
  `isi_perihal` text NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `lokasi_arsip` varchar(255) NOT NULL,
  `tanggal_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id_kendaraan` int(5) NOT NULL,
  `jenis_kendaraan` varchar(100) NOT NULL,
  `merk` varchar(150) NOT NULL,
  `type` varchar(150) NOT NULL,
  `nomor_polisi` varchar(20) NOT NULL,
  `nomor_rangka` varchar(100) NOT NULL,
  `nomor_mesin` varchar(100) NOT NULL,
  `warna` varchar(50) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `kondisi_kendaraan` varchar(50) NOT NULL,
  `lokasi_kendaraan` varchar(150) NOT NULL,
  `sk_pemegang` varchar(100) NOT NULL,
  `nama_pemegang` varchar(100) NOT NULL,
  `kapasitas_mesin` varchar(50) NOT NULL,
  `keberadaan_bpkb` varchar(100) NOT NULL,
  `nomor_bpkb` varchar(50) NOT NULL,
  `posisi_bpkb` varchar(50) NOT NULL,
  `keberadaan_kendaraan` varchar(150) NOT NULL,
  `asal_usul` varchar(255) NOT NULL,
  `sumber_dana` varchar(100) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `foto_kendaraan` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(5) NOT NULL,
  `pengirim` varchar(150) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `masuk_agenda` date NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `id_perihal` text NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `lokasi_arsip` varchar(150) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `minta_b`
--

CREATE TABLE `minta_b` (
  `id_minta_b` int(5) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `perihal` text NOT NULL,
  `tembusan` varchar(200) NOT NULL,
  `jumlah_lampiran` varchar(50) NOT NULL,
  `isi_perihal` text NOT NULL,
  `penandatanganan` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minta_b`
--

INSERT INTO `minta_b` (`id_minta_b`, `no_surat`, `tanggal_surat`, `tujuan_surat`, `perihal`, `tembusan`, `jumlah_lampiran`, `isi_perihal`, `penandatanganan`, `status`, `upload_file`, `waktu_eksekusi`, `id_user`, `unit_kerja`) VALUES
(1, '00011', '2017-03-23', 'tuhjaa', 'asadada', 'asasd', '2', '211asdadaaddsa', 'aasdadada', 'aaa', 'aaa', '2017-03-23 00:00:00', 5, 'D'),
(2, '1', '2017-03-23', '1', '1', '1', '1', '1', '1', '1', '35.PNG', '2017-03-23 06:08:17', 5, 'D'),
(3, '2', '2017-03-23', '2', '2', '2', '2', '2', '2', '2', '36.PNG', '2017-03-23 06:10:13', 5, 'D'),
(4, '3 1', '2017-03-23', '31', '3 1', '31 ', '31', '31', '', '', '1.PNG', '2017-03-23 06:23:38', 5, 'D'),
(5, '4', '2017-03-23', '4', '4', '4', '4', '4', '4', '4', '36.PNG', '2017-03-23 06:52:00', 1, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `id_outbox` int(5) NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `id_perihal` text NOT NULL,
  `bidang` varchar(150) NOT NULL,
  `nama_penerima` varchar(150) NOT NULL,
  `lokasi_arsip` varchar(150) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_b`
--

CREATE TABLE `outbox_b` (
  `id_outbox_b` int(5) NOT NULL,
  `no_surat` varchar(100) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan_surat` varchar(255) NOT NULL,
  `id_perihal` text NOT NULL,
  `tembusan` varchar(200) NOT NULL,
  `jumlah_lampiran` varchar(50) NOT NULL,
  `diproses_1` varchar(100) NOT NULL,
  `diproses_2` varchar(100) NOT NULL,
  `diproses_3` varchar(100) NOT NULL,
  `diproses_4` varchar(100) NOT NULL,
  `penandatanganan` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `outbox_b`
--

INSERT INTO `outbox_b` (`id_outbox_b`, `no_surat`, `tanggal_surat`, `tujuan_surat`, `id_perihal`, `tembusan`, `jumlah_lampiran`, `diproses_1`, `diproses_2`, `diproses_3`, `diproses_4`, `penandatanganan`, `status`, `upload_file`, `waktu_eksekusi`, `id_user`, `unit_kerja`) VALUES
(16, '1', '2017-03-23', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '36.PNG', '2017-03-23 06:14:08', 5, 'D'),
(15, '', '2017-03-23', '', '', '', '', '', '', '', '', '', '', '', '2017-03-23 06:10:50', 5, 'D');

-- --------------------------------------------------------

--
-- Table structure for table `outbox_g`
--

CREATE TABLE `outbox_g` (
  `id_outbox` int(5) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan_surat` text NOT NULL,
  `isi_ringkas` text NOT NULL,
  `lokasi_arsip` varchar(150) NOT NULL,
  `nama_tanda_tangan` varchar(150) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam_b`
--

CREATE TABLE `pinjam_b` (
  `id_pinjam` int(5) NOT NULL,
  `no_surat` varchar(255) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan_surat` text NOT NULL,
  `isi_ringkas` text NOT NULL,
  `lokasi_arsip` varchar(150) NOT NULL,
  `nama_tanda_tangan` varchar(150) NOT NULL,
  `file_surat` varchar(255) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id_undangan` int(5) NOT NULL,
  `asal_instansi` varchar(255) NOT NULL,
  `no_undangan` varchar(100) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `hari_tanggal_jam` varchar(150) NOT NULL,
  `acara` varchar(150) NOT NULL,
  `disposisi` varchar(255) NOT NULL,
  `isi_disposisi` text NOT NULL,
  `upload_file` varchar(255) NOT NULL,
  `lokasi_arsip` varchar(100) NOT NULL,
  `waktu_eksekusi` datetime NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama_lengkap` varchar(150) NOT NULL,
  `alamat_email` varchar(150) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `level` varchar(20) NOT NULL DEFAULT 'biasa',
  `status` enum('Y','N') NOT NULL DEFAULT 'N',
  `waktu_daftar` datetime NOT NULL,
  `unit_kerja` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `alamat_email`, `no_telpon`, `alamat_lengkap`, `level`, `status`, `waktu_daftar`, `unit_kerja`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Administrator@gmail.com', '0123456789', 'testing', 'user_admin', 'Y', '2015-06-03 00:00:00', '0'),
(2, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes@gmail.com', '0123456789', 'testingting', 'user_input', 'Y', '2015-06-03 00:00:00', 'F'),
(3, 'suhandi', '5fb8c99edcac90f2b27c24e53b5bc594', 'suhandi', 'suhandi@gmail.com', '0123456789', 'testing', 'user_biasa', 'Y', '2015-06-03 00:00:00', 'B'),
(4, 'emus', 'ae6578506451149e4251275a144a69ba', 'emus', 'emus@gmail.com', '0123456789', 'testing', 'user_biasa', 'Y', '2015-06-04 08:03:18', 'A'),
(5, 'towo', 'f03539d484290e1153d688079147062d', 'towo', 'towo@gmail.com', '0123456789', 'testing', 'user_input', 'Y', '0000-00-00 00:00:00', 'D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `inbox_b`
--
ALTER TABLE `inbox_b`
  ADD PRIMARY KEY (`id_inbox_b`);

--
-- Indexes for table `inbox_g`
--
ALTER TABLE `inbox_g`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `minta_b`
--
ALTER TABLE `minta_b`
  ADD PRIMARY KEY (`id_minta_b`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`id_outbox`);

--
-- Indexes for table `outbox_b`
--
ALTER TABLE `outbox_b`
  ADD PRIMARY KEY (`id_outbox_b`);

--
-- Indexes for table `outbox_g`
--
ALTER TABLE `outbox_g`
  ADD PRIMARY KEY (`id_outbox`);

--
-- Indexes for table `pinjam_b`
--
ALTER TABLE `pinjam_b`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id_undangan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id_inbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `inbox_b`
--
ALTER TABLE `inbox_b`
  MODIFY `id_inbox_b` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `inbox_g`
--
ALTER TABLE `inbox_g`
  MODIFY `id_inbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `minta_b`
--
ALTER TABLE `minta_b`
  MODIFY `id_minta_b` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `id_outbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `outbox_b`
--
ALTER TABLE `outbox_b`
  MODIFY `id_outbox_b` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `outbox_g`
--
ALTER TABLE `outbox_g`
  MODIFY `id_outbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pinjam_b`
--
ALTER TABLE `pinjam_b`
  MODIFY `id_pinjam` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id_undangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
