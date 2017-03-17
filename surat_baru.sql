-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2017 at 11:07 AM
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

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id_inbox`, `asal_surat`, `no_surat`, `tanggal_surat`, `tanggal_masuk_agenda`, `id_perihal`, `disposisi`, `isi_disposisi`, `file_surat`, `lokasi_arsip`, `tanggal_eksekusi`, `id_user`, `unit_kerja`) VALUES
(1, 'Dinas Pertanian Padang', '09/LP.001/1/MRK-2105 ', '2015-06-04', '2017-01-17', '3', 'Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.', 'Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to Glyphicons whenever possible.', '060515-surat.pdf', 'Rak 42 BAC', '2015-06-06 00:00:00', 1, 'A'),
(2, 'Dinas Kehutanan Sumatera Barat', '09/LP.001/1/MRK-2105 ', '2015-06-05', '2017-02-17', '1', 'Dropdowns are automatically positioned via CSS within the normal flow of the document. ', 'Dropdowns are automatically positioned via CSS within the normal flow of the document. This means dropdowns may be cropped by parents with certain overflow properties or appear out of bounds of the viewport. Address these issues on your own as they arise.', 'surat-no-2.pdf', 'Rak 23 ABC', '2015-06-07 00:00:00', 1, 'A'),
(3, 'Dinas Kehutanan Propinsi Jawa Barat', '12/LP.003/4/MRK-2109', '2015-06-07', '2017-01-16', '2', 'Website ini didesain untuk membantu anda dan mencari informasi SMP Negeri 7 Lubuk Basung', 'Website ini didesain untuk membantu anda dan mencari informasi SMP Negeri 7 Lubuk Basung menyangkut profil sekolah, sumber daya manusia, informasi akademik, berita dan lain sebagainya.', 'Slip Gaji.docx', 'Rak 12 DTR', '2015-06-07 10:02:08', 1, 'F'),
(7, 'Muhammad Mustofa', '09/LP.001/8/MRK-2105', '2015-08-05', '2017-02-06', '2', 'Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.', 'normally not available for free, but their creator has made them available for Bootstrap free of cost.&nbsp;normally not available for free, but their creator has made them available for Bootstrap free of cost.&nbsp;normally not available for free, but their creator has made them available for Bootstrap free of cost.&nbsp;normally not available for free, but their creator has made them available for Bootstrap free of cost.&nbsp;normally not available for free, but their creator has made them available for Bootstrap free of cost.', 'SURAT KUASA PENGAMBILAN BPKB.docx', 'Rak 49 BAC', '2015-08-05 02:48:03', 2, 'F');

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
(1, '09/LP.001/1/MRK-2105 ', 'Dinas Pertanian Padang', '2015-06-04', '2015-06-17', '3', 'A Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.', 'B Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost. As a thank you, we only ask that you include a link back to Glyphicons whenever possible.', 'C Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.', '5', 'Bagus', 'Rak 34 UYT', 'suratkendaraan1.zip', '2015-06-06 00:00:00', 1, 'D'),
(2, '09/LP.001/1/MRK-2105', 'Dinas Kehutanan Sumatera Barat', '2015-06-05', '2015-06-16', '1', 'A Dropdowns are automatically positioned via CSS within the normal flow of the document. ', 'B Dropdowns are automatically positioned via CSS within the normal flow of the document. This means dropdowns may be cropped by parents with certain overflow properties or appear out of bounds of the viewport. Address these issues on your own as they arise.', 'C Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.', '7', 'Kurang', 'Rak 76 TCD', 'suratkendaraan2.zip', '2015-06-07 00:00:00', 1, 'B'),
(3, '12/LP.003/4/MRK-2109', 'Dinas Kehutanan Propinsi Jawa Barat', '2015-06-07', '2015-06-11', '2', 'A Website ini didesain untuk membantu anda dan mencari informasi SMP Negeri 7 Lubuk Basung', 'B Website ini didesain untuk membantu anda dan mencari informasi SMP Negeri 7 Lubuk Basung menyangkut profil sekolah, sumber daya manusia, informasi akademik, berita dan lain sebagainya.', 'C Glyphicons Halflings are normally not available for free, but their creator has made them available for Bootstrap free of cost.', '3', 'Bagus', 'Rak 23 KUT', 'suratkendaraan3.zip', '2015-06-07 10:02:08', 1, 'C');

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

--
-- Dumping data for table `inbox_g`
--

INSERT INTO `inbox_g` (`id_inbox`, `no_surat`, `tanggal_surat`, `tanggal_masuk_agenda`, `pengirim`, `lampiran`, `nama_penerima`, `id_perihal`, `file_surat`, `id_user`, `unit_kerja`) VALUES
(1, '09/LP.001/1/MRK-2105 ', '2015-06-04', '2015-06-17', 'Sutarman Abidin', '3', 'Udin Sedunia', '3', '060515-surat.pdf', 1, 'G'),
(2, '09/LP.001/1/MRK-2105 ', '2015-06-05', '2015-06-16', 'Jeremy Tomas', '2', 'Robby Sugara', '1', 'surat-no-2.pdf', 1, 'G'),
(3, '12/LP.003/4/MRK-2109', '2015-06-07', '2015-06-11', 'Adam Suseno', '4', 'Amaik Sapihi', '2', 'Slip Gaji.docx', 1, 'G'),
(7, '09/LP.001/8/MRK-2105', '2015-08-05', '2015-08-09', 'Sugeng Artajasa', '6', 'Poltak Manulang', '2', 'laporan-pmb.xls', 2, 'G'),
(8, '05/LP.001/6/MRK-2105', '2015-08-05', '2015-08-09', 'Dewi Safitri', '2', 'Sureza Oktaviani', '1', 'BAB V Feri.docx', 2, 'G');

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

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id_izin`, `asal_surat`, `no_surat`, `tanggal_surat`, `tanggal_masuk`, `tanggal_ijin`, `id_perihal`, `perihal`, `isi_perihal`, `file_surat`, `lokasi_arsip`, `tanggal_eksekusi`, `id_user`, `unit_kerja`) VALUES
(9, 'ali nurdin update', '0002 update', '2017-03-18', '2017-03-20', '2017-03-19', '1 update', 'Izin Kawin update', '<h2>ijih dong ahh update</h2>', 'logo siap print.docx', 'c12 update', '2017-03-17 05:27:16', 1, 'SDM');

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

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `jenis_kendaraan`, `merk`, `type`, `nomor_polisi`, `nomor_rangka`, `nomor_mesin`, `warna`, `tahun`, `kondisi_kendaraan`, `lokasi_kendaraan`, `sk_pemegang`, `nama_pemegang`, `kapasitas_mesin`, `keberadaan_bpkb`, `nomor_bpkb`, `posisi_bpkb`, `keberadaan_kendaraan`, `asal_usul`, `sumber_dana`, `harga`, `foto_kendaraan`, `keterangan`, `waktu_eksekusi`, `id_user`) VALUES
(1, 'Kecil', 'Honda Beat', 'Matic', 'BA 4814 CJ', 'Bidang Kuhutanan', 'MSN123112', 'Putih', '2012', 'Bagus', 'Padang', 'SK5343423', 'Udin Sedunia', '125 cc', 'Ada', 'BPKB754646324', 'Pemilik', 'Ada', 'CV. Limau Manis', 'Orang Tua', '12000000', 'foto1.jpg', 'Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan ', '2015-06-06 00:00:00', 1),
(2, 'Besar', 'Yamaha Mio', 'Bebek', 'BA 2354 AB', 'Bidang Olahraga', 'MSN123000', 'Hitam', '2011', 'Rusak', 'Payakumbuh', 'SK5343000', 'Robby Prihandaya', '250 cc', 'Tidak Ada', 'BPKB754456884', 'Pemilik', 'Tidak Ada', 'CV. Ayam Lapeh', 'Sendiri', '18000000', '1.PNG', 'Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan', '2015-06-08 03:55:46', 1),
(4, 'Besar', 'Yamaha Vixion', 'Moge', 'BM 1234 AC', 'Bidang Pemupukan', 'MSN123899', 'Merah', '2000', 'Lumayan', 'Pariaman', 'SK5343111', 'Dewi Safitri', '145 cc', 'Ada', 'BPKB754100024', 'Perusahaan', 'Ada', 'CV. Manis Raya', 'Perusahaan', '21500000', 'kendaraan.jpg', 'Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan Keterangan Kendaraan', '2015-06-18 06:50:03', 1);

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

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `pengirim`, `tanggal_surat`, `masuk_agenda`, `no_surat`, `id_perihal`, `disposisi`, `upload_file`, `lokasi_arsip`, `waktu_eksekusi`, `id_user`) VALUES
(1, 'Sawir Surahman', '2015-06-17', '2015-06-18', '03/LP.002/1/MRK-2106', 'Disposisi 1', 'Disposisi 1', 'logo siap print.docx', 'Rak 34 YUR', '2015-06-06 00:00:00', 1),
(2, 'Ahmad Hambali', '2015-06-07', '2015-06-08', '03/LP.002/1/MRK-2108', '2', 'Disposisi 2', 'laporan2.pdf', 'Rak 44 UIO', '2015-06-08 03:55:46', 1),
(4, 'Juan Rocarlos', '2015-06-09', '2015-06-10', '03/LP.002/1/MRK-2103', '3', 'Disposisi 3 ini dia bro', 'laporan3.pdf', 'Rak 11 THY', '2015-06-18 06:50:03', 1);

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

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`id_outbox`, `tujuan_surat`, `no_surat`, `tanggal_surat`, `id_perihal`, `bidang`, `nama_penerima`, `lokasi_arsip`, `file_surat`, `waktu_eksekusi`, `id_user`, `unit_kerja`) VALUES
(1, 'Untuk Memusnahkan Sampah Masyarakat', '03/LP.002/1/MRK-2106', '2015-06-18', '1', 'Bidang Kuhutanan', 'Udin Sedunia', 'Rak 89 TGF', 'surat1.docx', '2015-06-06 00:00:00', 1, 'A'),
(2, 'Redirect domain ke subfolder baru', '09/LP.001/1/MRK-2105 ', '2015-06-08', '2', 'Bidang Olahraga', 'Amaik Sapihi', 'Rak 90 UJY', 'surat2.docx', '2015-06-08 03:55:46', 1, 'A'),
(4, 'Untuk Peningkatan Kinerja Karyawan', '03/LP.002/1/MRK-1234', '2015-06-10', '2', 'Bidang Pemupukan', 'Muhammad Safarudin', 'Rak 77 GCA', 'COVER Penologi.docx', '2015-06-18 06:50:03', 1, 'F');

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
(1, '03/LP.002/1/MRK-1234', '2015-06-18', 'Tujuan Surat 1', '1', 'Bidang Kuhutanan', '2', 'Diproses 1', 'Diproses 2', 'Diproses 3', 'Diproses 4', 'Udin Sedunia', 'Bagus', 'outbox1.docx', '2015-06-06 00:00:00', 1, 'D'),
(2, '03/LP.002/1/MRK-1211', '2015-06-03', 'Tujuan Surat 2', '2', 'Bidang Olahraga', '3', 'Diproses 1', 'Diproses 2', 'Diproses 3', 'Diproses 4', 'Robby Prihandaya', 'Sedang', 'outbox2.docx', '2015-06-08 03:55:46', 1, 'B'),
(4, '03/LP.002/1/MRK-1200', '2015-06-03', 'Tujuan Surat 3', '2', 'Bidang Pemupukan', '5', 'Diproses 1', 'Diproses 2', 'Diproses 3', 'Diproses 4', 'Dewi Safitri', 'Kurang', 'outbox3.docx', '2015-06-18 06:50:03', 1, 'C'),
(5, '03/LP.002/1/MRK-1235', '2015-08-05', 'Dewi Safitri', 'The confirm box takes the focus away from the current window, and forces the browser to read the message. Do not overuse this method, as it prevents the user from accessing other parts of the page until the box is closed.', 'Kelurahan Tunggul Hitam', '4', 'The confirm', 'The confirm 2', 'The confirm 3', 'The confirm 4', 'Udin Sedunia', 'oke', 'COVER Penologi.docx', '2015-08-05 10:46:57', 1, 'B');

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

--
-- Dumping data for table `outbox_g`
--

INSERT INTO `outbox_g` (`id_outbox`, `no_surat`, `tanggal_surat`, `tujuan_surat`, `isi_ringkas`, `lokasi_arsip`, `nama_tanda_tangan`, `file_surat`, `waktu_eksekusi`, `id_user`, `unit_kerja`) VALUES
(1, '03/LP.002/1/MRK-2106', '2015-06-18', 'Bidang Kuhutanan', 'Udin Sedunia', 'Rak 89 TGF', 'Muhammad Soleh', 'surat1.docx', '2015-06-06 00:00:00', 1, 'G'),
(2, '09/LP.001/1/MRK-2105 ', '2015-06-08', 'Bidang Olahraga', 'Amaik Sapihi', 'Rak 90 UJY', 'Maimatul Muktar', 'surat2.docx', '2015-06-08 03:55:46', 1, 'G'),
(4, '03/LP.002/1/MRK-1234', '2015-06-10', 'Bidang Pemupukan', 'Muhammad Safarudin', 'Rak 77 GCA', 'Sutejo Lukman', 'COVER Penologi.docx', '2015-06-18 06:50:03', 1, 'G');

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

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id_undangan`, `asal_instansi`, `no_undangan`, `tempat`, `hari_tanggal_jam`, `acara`, `disposisi`, `isi_disposisi`, `upload_file`, `lokasi_arsip`, `waktu_eksekusi`, `id_user`) VALUES
(1, 'Instansi SDM', '03/LP.002/1/MRK-2106', 'JKARTA ', 'Jumat, 12 Jun 2015 13:25:00', 'Undangan 1', 'Ini adalah Disposisi 3', 'Pembenuatan sosialiasi', 'surat1.docx', 'Rak 89 TGF', '2015-06-06 00:00:00', 1),
(2, 'Instansi Pertanian', '09/LP.001/1/MRK-2105 ', 'Payakumbuh', 'Kamis, 16 Jul 2015 20:00:00', 'Undangan 2', 'Ini adalah Disposisi 2', 'Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi ', 'surat1.docx', 'Rak 45 TGF', '2015-06-08 03:55:46', 1),
(4, 'Instansi Kesehatan', '03/LP.002/1/MRK-1234', 'Medan', 'Senin, 23 Agu 2015 21:30:00', 'Undangan 3', 'Ini adalah Disposisi', 'Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi Ini adalah Isi Disposisi', 'Surat3.docx', 'Rak 21 TGF', '2015-06-18 06:50:03', 1);

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
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@gmail.com', '09785613566', 'testing karna testing ', 'user_admin', 'Y', '2015-06-03 00:00:00', '0'),
(2, 'testing', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes@gmail.com', '58966', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'user_input', 'Y', '2015-06-03 00:00:00', 'PY'),
(3, 'Suhandi', '275badd7f3bcd124836fbdf594ce1220', 'Suhandi', 'Suhandi@gmail.com', '096752456', 'testing doa ahhh testing ', 'user_biasa', 'Y', '2015-06-03 00:00:00', 'B'),
(4, 'udin', '6bec9c852847242e384a4d5ac0962ba0', 'udin', 'udin@gmail.com', '0867994566', 'testing ajaa karana testing itu enak', 'user_biasa', 'Y', '2015-06-04 08:03:18', 'C'),
(5, 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 'tes', 'tes@gmail.com', '019235671123', 'testing   aaaa aaaaaaa', 'user_input', 'Y', '0000-00-00 00:00:00', 'D');

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
  MODIFY `id_inbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `inbox_b`
--
ALTER TABLE `inbox_b`
  MODIFY `id_inbox_b` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `inbox_g`
--
ALTER TABLE `inbox_g`
  MODIFY `id_inbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id_izin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id_kendaraan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `id_outbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `outbox_b`
--
ALTER TABLE `outbox_b`
  MODIFY `id_outbox_b` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `outbox_g`
--
ALTER TABLE `outbox_g`
  MODIFY `id_outbox` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id_undangan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
