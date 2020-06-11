-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2020 pada 06.01
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_captcha`
--

CREATE TABLE `cms_captcha` (
  `captcha_id` bigint(13) NOT NULL,
  `captcha_time` int(10) UNSIGNED NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cms_captcha`
--

INSERT INTO `cms_captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
(3284, 1591839792, '::1', '666741'),
(3285, 1591839812, '::1', '928860');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_log`
--

CREATE TABLE `cms_log` (
  `id_log` int(30) NOT NULL,
  `ip` varchar(30) DEFAULT NULL,
  `mac_address` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `kegiatan` text,
  `user` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cms_log`
--

INSERT INTO `cms_log` (`id_log`, `ip`, `mac_address`, `time`, `kegiatan`, `user`) VALUES
(1, '::1', '', '2019-01-30 20:39:29', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(2, '::1', '', '2019-11-05 17:45:51', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(3, '::1', '', '2019-11-05 17:47:27', 'Menambah Purchasing Invoice dengan data sbb:<br />\r\n                    <ul><li><b>no_pi</b> dengan value <b>001/kalingga/11/2019</b></li><li><b>id_buyer</b> dengan value <b>1</b></li><li><b>tgl</b> dengan value <b>2019-11-05</b></li><li><b>tgl_pengiriman</b> dengan value <b>2020-02-01</b></li><li><b>fsc_cert</b> dengan value <b>34124</b></li><li><b>fsc_lisence</b> dengan value <b>524554</b></li><li><b>buyer_po_nr</b> dengan value <b>778</b></li><li><b>pembayaran</b> dengan value <b>2</b></li><li><b>id</b> dengan value <b>1</b></li></ul>', 'superadmin'),
(4, '::1', '', '2020-03-10 17:15:13', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(5, '::1', '', '2020-03-12 09:55:56', 'Menambah menu dengan data sbb:<br />\r\n                    <ul><li><b>nama</b> dengan value <b>Instansi</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>alias</b> dengan value <b>instansi</b></li><li><b>allowed_level</b> dengan value <b>1,2</b></li><li><b>url</b> dengan value <b>master/instansi</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>1</b></li><li><b>grup</b> dengan value <b>2</b></li></ul>', 'superadmin'),
(6, '::1', '', '2020-03-12 13:25:13', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(7, '::1', '', '2020-03-12 13:39:55', 'Mengubah data instansi sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama</b> dengan value <b>1</b></li><li><b>alamat</b> dengan value <b>kosong</b></li><li><b>kode</b> dengan value <b>kosong</b></li><li><b>provinsi</b> dengan value <b>kosong</b></li><li><b>email</b> dengan value <b>kosong</b></li><li><b>website</b> dengan value <b>kosong</b></li><li><b>telepon</b> dengan value <b>kosong</b></li><li><b>kementerian</b> dengan value <b>kosong</b></li><li><b>tahun_ajaran</b> dengan value <b>kosong</b></li><li><b>nama_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_dekan</b> dengan value <b>kosong</b></li><li><b>alamat_fakultas</b> dengan value <b>kosong</b></li><li><b>telepon_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_jurusan</b> dengan value <b>kosong</b></li><li><b>nama_kajur</b> dengan value <b>kosong</b></li><li><b>nama_kalab</b> dengan value <b>kosong</b></li><li><b>telepon_jurusan</b> dengan value <b>kosong</b></li><li><b>alamat_jurusan</b> dengan value <b>kosong</b></li><li><b>deskripsi_jurusan</b> dengan value <b>kosong</b></li><li><b>peta_jurusan</b> dengan value <b>kosong</b></li><li><b>zona_waktu</b> dengan value <b>kosong</b></li></ul>', 'superadmin'),
(8, '::1', '', '2020-03-12 13:40:20', 'Mengubah data instansi sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama</b> dengan value <b>Universitas Negeri Semarang</b></li><li><b>alamat</b> dengan value <b>kosong</b></li><li><b>kode</b> dengan value <b>kosong</b></li><li><b>provinsi</b> dengan value <b>kosong</b></li><li><b>email</b> dengan value <b>kosong</b></li><li><b>website</b> dengan value <b>kosong</b></li><li><b>logo</b> dengan value <b>files/2020/03/ebcff3bcfaf285d80bf3e5144993191d.png</b></li><li><b>telepon</b> dengan value <b>kosong</b></li><li><b>kementerian</b> dengan value <b>kosong</b></li><li><b>tahun_ajaran</b> dengan value <b>kosong</b></li><li><b>nama_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_dekan</b> dengan value <b>kosong</b></li><li><b>alamat_fakultas</b> dengan value <b>kosong</b></li><li><b>telepon_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_jurusan</b> dengan value <b>kosong</b></li><li><b>nama_kajur</b> dengan value <b>kosong</b></li><li><b>nama_kalab</b> dengan value <b>kosong</b></li><li><b>telepon_jurusan</b> dengan value <b>kosong</b></li><li><b>alamat_jurusan</b> dengan value <b>kosong</b></li><li><b>deskripsi_jurusan</b> dengan value <b>kosong</b></li><li><b>zona_waktu</b> dengan value <b>kosong</b></li></ul>', 'superadmin'),
(9, '::1', '', '2020-03-12 13:40:52', 'Mengubah data instansi sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama</b> dengan value <b>Universitas Negeri Semarang</b></li><li><b>alamat</b> dengan value <b>Kampus Sekaran, Gunungpati, Semarang</b></li><li><b>kode</b> dengan value <b>kosong</b></li><li><b>provinsi</b> dengan value <b>kosong</b></li><li><b>email</b> dengan value <b>kosong</b></li><li><b>website</b> dengan value <b>kosong</b></li><li><b>telepon</b> dengan value <b>kosong</b></li><li><b>kementerian</b> dengan value <b>kosong</b></li><li><b>tahun_ajaran</b> dengan value <b>kosong</b></li><li><b>nama_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_dekan</b> dengan value <b>kosong</b></li><li><b>alamat_fakultas</b> dengan value <b>kosong</b></li><li><b>telepon_fakultas</b> dengan value <b>kosong</b></li><li><b>nama_jurusan</b> dengan value <b>kosong</b></li><li><b>nama_kajur</b> dengan value <b>kosong</b></li><li><b>nama_kalab</b> dengan value <b>kosong</b></li><li><b>telepon_jurusan</b> dengan value <b>kosong</b></li><li><b>alamat_jurusan</b> dengan value <b>kosong</b></li><li><b>deskripsi_jurusan</b> dengan value <b>kosong</b></li><li><b>peta_jurusan</b> dengan value <b>kosong</b></li><li><b>zona_waktu</b> dengan value <b>kosong</b></li></ul>', 'superadmin'),
(10, '::1', '', '2020-05-08 07:34:20', 'Login  by Jihan Ali Ahmad', 'superadmin'),
(11, '::1', '', '2020-05-08 07:47:34', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>MK01</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop</b></li><li><b>keterangan</b> dengan value <b>-</b></li></ul>', 'superadmin'),
(12, '::1', '', '2020-05-08 07:47:56', 'Mengedit Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kode</b> dengan value <b>MK01</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop</b></li><li><b>keterangan</b> dengan value <b>lihat</b></li></ul>', 'superadmin'),
(13, '::1', '', '2020-05-08 09:37:33', 'Login  by Kholiq', 'kholiq'),
(14, '::1', '', '2020-05-08 09:39:40', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>MK02</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop Besar</b></li><li><b>keterangan</b> dengan value <b>Mikroskop Besar</b></li></ul>', 'kholiq'),
(15, '::1', '', '2020-05-13 12:11:31', 'Login  by aldabernika', 'alda'),
(16, '::1', '', '2020-05-14 04:53:26', 'Login  by aldabernika', 'alda'),
(17, '::1', '', '2020-05-14 05:07:09', 'Mengedit Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kode</b> dengan value <b>MK01</b></li><li><b>nama_alat</b> dengan value <b>Mikroskop</b></li><li><b>keterangan</b> dengan value <b>Mikroskop</b></li></ul>', 'alda'),
(18, '::1', '', '2020-05-14 05:08:14', 'Mengedit Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kode</b> dengan value <b>MK01</b></li><li><b>nama_alat</b> dengan value <b>Router</b></li><li><b>keterangan</b> dengan value <b>Router</b></li></ul>', 'alda'),
(19, '::1', '', '2020-05-14 05:08:52', 'Mengedit Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>2</b></li><li><b>kode</b> dengan value <b>MK02</b></li><li><b>nama_alat</b> dengan value <b>kabel LAN</b></li><li><b>keterangan</b> dengan value <b>Kabel</b></li></ul>', 'alda'),
(20, '::1', '', '2020-05-14 15:06:15', 'Login  by aldabernika', 'alda'),
(21, '::1', '', '2020-05-14 16:30:44', 'Logout SIONLAB by aldabernika', 'alda'),
(22, '::1', '', '2020-05-14 16:37:42', 'Login  by Kholiq', 'kholiq'),
(23, '::1', '', '2020-05-14 18:45:03', 'Login  by Kholiq', 'kholiq'),
(24, '::1', '', '2020-05-15 07:20:09', 'Login  by Kholiq', 'kholiq'),
(25, '::1', '', '2020-05-15 10:28:00', 'Login  by Kholiq', 'kholiq'),
(26, '::1', '', '2020-05-15 11:32:08', 'Login  by Kholiq', 'kholiq'),
(27, '::1', '', '2020-05-21 15:24:30', 'Login  by Kholiq', 'kholiq'),
(28, '::1', '', '2020-05-21 15:30:15', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>mk03</b></li><li><b>nama_alat</b> dengan value <b>laptop</b></li><li><b>keterangan</b> dengan value <b>baru</b></li></ul>', 'kholiq'),
(29, '::1', '', '2020-05-21 15:34:15', 'Menambah Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>kategori</b> dengan value <b>sim</b></li><li><b>nomor_induk</b> dengan value <b>536252</b></li></ul>', 'kholiq'),
(30, '::1', '', '2020-05-21 15:34:28', 'Mengedit Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kategori</b> dengan value <b>nik</b></li><li><b>nomor_induk</b> dengan value <b>657365262729</b></li></ul>', 'kholiq'),
(31, '::1', '', '2020-05-21 16:16:50', 'Mengedit Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>0</b></li><li><b>kategori</b> dengan value <b>sim</b></li><li><b>nomor_induk</b> dengan value <b>536253</b></li></ul>', 'kholiq'),
(32, '::1', '', '2020-05-21 16:22:56', 'Menambah Master nama_alat dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>mk04</b></li><li><b>nama_alat</b> dengan value <b>kabel</b></li><li><b>keterangan</b> dengan value <b>rusak</b></li></ul>', 'kholiq'),
(33, '::1', '', '2020-05-21 16:27:01', 'Mengedit Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>0</b></li><li><b>kategori</b> dengan value <b>sim</b></li><li><b>nomor_induk</b> dengan value <b>536253</b></li></ul>', 'kholiq'),
(34, '::1', '', '2020-05-21 16:37:48', 'Mengedit Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>0</b></li><li><b>kategori</b> dengan value <b>sim</b></li><li><b>nomor_induk</b> dengan value <b>536252</b></li></ul>', 'kholiq'),
(35, '::1', '', '2020-05-21 19:43:18', 'Menambah Master master_bahan dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>mk03</b></li><li><b>jenis_bahan</b> dengan value <b>laptop rog</b></li></ul>', 'kholiq'),
(36, '::1', '', '2020-05-21 19:58:59', 'Mengedit menu dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>131</b></li><li><b>nama</b> dengan value <b>Kategori Alat Bahan</b></li><li><b>deskripsi</b> dengan value <b>-</b></li><li><b>allowed_level</b> dengan value <b>1,2</b></li><li><b>url</b> dengan value <b>master/kategori_alat_bahan</b></li><li><b>aktif</b> dengan value <b>1</b></li><li><b>urutan</b> dengan value <b>4</b></li><li><b>grup</b> dengan value <b>2</b></li></ul>', 'kholiq'),
(37, '::1', '', '2020-05-21 20:14:33', 'Mengedit Master master_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>3</b></li><li><b>kode</b> dengan value <b>mk03</b></li><li><b>jenis_bahan</b> dengan value <b>laptop</b></li><li><b>nama_bahan</b> dengan value <b>Laptop rog</b></li></ul>', 'kholiq'),
(38, '::1', '', '2020-05-21 21:00:29', 'Menambah Master satuan dengan data sbb:<br />\r\n                    <ul><li><b>nama_satuan</b> dengan value <b>buku</b></li><li><b>keterangan</b> dengan value <b>sistem operasi</b></li></ul>', 'kholiq'),
(39, '::1', '', '2020-05-21 21:00:46', 'Mengedit Master satuan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>0</b></li><li><b>nama_satuan</b> dengan value <b>buku</b></li><li><b>keterangan</b> dengan value <b>sistem operasi SI</b></li></ul>', 'kholiq'),
(40, '::1', '', '2020-05-22 07:24:12', 'Login  by Kholiq', 'kholiq'),
(41, '::1', '', '2020-05-28 16:08:06', 'Login  by Kholiq', 'kholiq'),
(42, '::1', '', '2020-05-28 16:15:15', 'Menambah Master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>A001</b></li><li><b>nama_alat_bahan</b> dengan value <b>Laptop Asus ROG</b></li><li><b>jenis</b> dengan value <b>Laptop</b></li></ul>', 'kholiq'),
(43, '::1', '', '2020-05-28 16:33:06', 'Mengedit Master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kode</b> dengan value <b>A001</b></li><li><b>nama_alat_bahan</b> dengan value <b>Laptop Asus rog</b></li><li><b>jenis</b> dengan value <b>Laptop</b></li></ul>', 'kholiq'),
(44, '::1', '', '2020-05-28 19:29:59', 'Logout SIONLAB by ', 'Tamu'),
(45, '::1', '', '2020-05-28 19:30:37', 'Login  by Kholiq', 'kholiq'),
(46, '::1', '', '2020-05-28 19:38:10', 'Mengedit Master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>kode</b> dengan value <b>A001</b></li><li><b>nama_alat_bahan</b> dengan value <b>Laptop Asus ROG</b></li><li><b>jenis</b> dengan value <b>Laptop</b></li></ul>', 'kholiq'),
(47, '::1', '', '2020-05-28 21:31:21', 'Menambah Master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>A002</b></li><li><b>nama_alat_bahan</b> dengan value <b>Router</b></li><li><b>jenis</b> dengan value <b>router</b></li></ul>', 'kholiq'),
(48, '::1', '', '2020-05-28 21:32:42', 'Mengedit Master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>2</b></li><li><b>kode</b> dengan value <b>a002</b></li><li><b>nama_alat_bahan</b> dengan value <b>Router</b></li><li><b>jenis</b> dengan value <b>router</b></li></ul>', 'kholiq'),
(49, '::1', '', '2020-05-28 21:38:54', 'Menambah Master master_bahan dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>mk04</b></li><li><b>jenis_bahan</b> dengan value <b>kabel</b></li></ul>', 'kholiq'),
(50, '::1', '', '2020-05-28 22:00:11', 'Mengedit Master satuan dengan data sbb:<br />\r\n                    <ul><li><b>id</b> dengan value <b>1</b></li><li><b>nama_satuan</b> dengan value <b>buku</b></li><li><b>keterangan</b> dengan value <b>managemen sainss</b></li></ul>', 'kholiq'),
(51, '::1', '', '2020-05-28 22:01:43', 'Menambah Master kategori_alat_bahan dengan data sbb:<br />\r\n                    <ul><li><b>kode</b> dengan value <b>mk004</b></li><li><b>nama_alat_bahan</b> dengan value <b>kabel lan</b></li><li><b>jenis</b> dengan value <b>kabel</b></li></ul>', 'kholiq'),
(52, '::1', '', '2020-05-29 08:01:40', 'Login  by Kholiq', 'kholiq'),
(53, '::1', '', '2020-05-31 12:00:05', 'Login  by Kholiq', 'kholiq'),
(54, '::1', '', '2020-06-01 13:50:49', 'Login  by Kholiq', 'kholiq'),
(55, '::1', '', '2020-06-02 10:49:46', 'Login  by Kholiq', 'kholiq'),
(56, '127.0.0.1', '', '2020-06-03 12:17:17', 'Login  by Kholiq', 'kholiq'),
(57, '::1', '', '2020-06-03 20:04:29', 'Login  by Kholiq', 'kholiq'),
(58, '::1', '', '2020-06-04 14:39:08', 'Login  by Kholiq', 'kholiq'),
(59, '::1', '', '2020-06-04 20:06:29', 'Login  by Kholiq', 'kholiq'),
(60, '::1', '', '2020-06-04 21:08:02', 'Menambah Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>kategori</b> dengan value <b>kta</b></li><li><b>nomor_induk</b> dengan value <b>4612418016</b></li></ul>', 'kholiq'),
(61, '::1', '', '2020-06-04 21:49:02', 'Menambah Master kategori_no_induk dengan data sbb:<br />\r\n                    <ul><li><b>kategori</b> dengan value <b>sim</b></li><li><b>nomor_induk</b> dengan value <b>5362532535</b></li></ul>', 'kholiq'),
(62, '127.0.0.1', '', '2020-06-10 21:15:04', 'Login  by Kholiq', 'kholiq'),
(63, '::1', '', '2020-06-10 23:25:18', 'Logout TOKO GUBUG MART by Kholiq', 'kholiq'),
(64, '::1', '', '2020-06-11 08:43:32', 'Login  by Kholiq', 'kholiq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_menu`
--

CREATE TABLE `cms_menu` (
  `id` int(11) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `allowed_level` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT '1',
  `urutan` int(11) NOT NULL,
  `grup` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cms_menu`
--

INSERT INTO `cms_menu` (`id`, `alias`, `nama`, `deskripsi`, `allowed_level`, `url`, `aktif`, `urutan`, `grup`) VALUES
(3, 'menu', 'Menu', 'Untuk memanajemen menu administrasi (back-end)', '+1+', 'cms/manage/menu', 1, 7, 1),
(89, 'reset_pass', 'Reset Password User', 'Reset Password User', '+1+', 'apl/reset', 1, 1, 3),
(35, 'semua', 'semua', 'untuk login semua', '+1+2+3+4+5+6+8+7+', 'cms/login/admin_page', 1, 1, 3),
(88, 'crud_user', 'Tambah,edit,delete user', 'tambah_edit_delete', '+1+2+3+4+', 'apl/crud', 1, 1, 3),
(102, 'log', 'Log System', 'Log System', '+1+2+', 'cms/catatan/catat', 1, 2, 1),
(104, 'status_pak', 'Home', 'Status Pengajuan PAK', '+1+2+3+4+5+6+', 'pak/dashboard/status_pak', 1, 1, 101);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_menu_grup`
--

CREATE TABLE `cms_menu_grup` (
  `id_grup_menu` int(11) NOT NULL,
  `nama_grup` varchar(255) DEFAULT NULL,
  `icon` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cms_menu_grup`
--

INSERT INTO `cms_menu_grup` (`id_grup_menu`, `nama_grup`, `icon`) VALUES
(3, 'Hidden Menu', NULL),
(1, 'Manajemen', 'fa fa-fw fa-book'),
(2, 'Master', 'fa fa-fw fa-archive'),
(101, 'Dashboard', 'fa fa-dashboard'),
(172, NULL, NULL),
(4, 'Peminjaman', 'fa fa-fw fa-folder');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_online`
--

CREATE TABLE `cms_online` (
  `user_id` int(5) NOT NULL,
  `last_activity` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `cms_online`
--

INSERT INTO `cms_online` (`user_id`, `last_activity`) VALUES
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cms_user`
--

CREATE TABLE `cms_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` int(10) DEFAULT NULL,
  `bagian` int(11) DEFAULT '1',
  `no_hp` varchar(100) DEFAULT NULL,
  `alamat` text,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `cms_user`
--

INSERT INTO `cms_user` (`id`, `nama`, `gambar`, `username`, `password`, `level`, `bagian`, `no_hp`, `alamat`, `last_login`) VALUES
(1, 'Kholiq', NULL, 'kholiq', '*F1378C253EEBE31F135CC41EF4A98D077EB98F5D', 1, 1, NULL, NULL, '2020-06-11 08:43:32'),
(2, 'RENSI EKA PRATTISTIA', 'files/2016/10/197f1fe92d49367824b4ec55d06af614.jpg', 'rensi', '*711CD8D9847EE80DEDC2B331ADB185CD0100EA86', 2, 1, '-', '-', '2017-03-01 18:05:17'),
(3, 'Damas Fahmi Assena', 'files/2016/09/062918947f59511ed8824be8462b2669.jpg', 'damas', '*A8244C6E6B51D4D7C6F89A1D145CE244EF9A12A5', 2, 1, '089 884 189 22', 'Jl. Shima No.6 Pengkol, Jepara', '2017-03-02 11:27:31'),
(7, 'Suparno', 'files/2016/09/15322f731347f50f18ceee0b7e5d346a.jpg', 'parno', '*BDEE3A29CD9E06BC8896561176692DD675D75D45', 6, 1, '0291-595628', 'Jl. Citrosoma RT. 17/06', '2017-01-20 13:28:02'),
(8, 'Anto', 'files/2016/10/a9a1c61937e5c422841f2f95360dfda7.jpg', 'anto', '*BDEE3A29CD9E06BC8896561176692DD675D75D45', 6, 1, '0291595628', 'Jl. Citrosoma RT.017/006, Senenan, Jepara', '2017-03-01 08:26:51'),
(9, 'Admin Supplier', 'files/2016/10/5d1a93bc69ca0cbc6777f940955285ba.png', 'admin', '*E3CCE608FE4C2B066CB6AE607CB6A53C309EC0E6', 3, 1, '0291-595628', 'Jl. Citrosoma RT. 17/06', '2017-03-02 14:28:19'),
(10, 'Staff Kalingga', 'files/2016/10/6f8c1070cf71eaca2fa5c544f6fb2bfa.png', 'kalinggajati', '*63B6331B1B9E1A7D8BA3B2B5666EDD5EE2C460CC', 5, 1, '0291-595628', 'Jl. Citrosoma RT. 17/06', '2017-03-02 11:12:52'),
(11, 'Admin Outstanding', 'files/2016/10/e511c2db7c393226effc9f303cf2a674.png', 'admin2', '*E3CCE608FE4C2B066CB6AE607CB6A53C309EC0E6', 4, 1, '0291-595628', 'Jl. Citrosoma RT. 17/06', '2017-02-24 11:47:36'),
(12, 'Bittaqwa', 'files/2017/01/850a0830a9fb703e55f1ef318d2195df.jpg', 'bittaqwa', '*2900EA52D759AACA10038BA767FDDA68A9F7853A', 6, 1, '', '', '2017-03-01 10:11:37'),
(13, 'coba', 'files/2017/04/f6b70ba5e4de413f8832472bef538c0d.JPG', 'coba', '*FD64E348EC9DCCE6525B358693A9CFDC733F5184', 3, 1, 'qq', 'qq', '2017-04-25 09:27:29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_level`
--

CREATE TABLE `master_level` (
  `id` int(11) NOT NULL,
  `level` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `master_level`
--

INSERT INTO `master_level` (`id`, `level`) VALUES
(1, 'Admin'),
(2, 'Pegawai'),
(3, 'Supplier'),
(4, 'Pembeli'),
(5, 'Level 3'),
(6, 'Level 0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_user`
--

CREATE TABLE `master_user` (
  `id` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `master_user`
--

INSERT INTO `master_user` (`id`, `nip`, `level`) VALUES
(2, 'jihan', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cms_captcha`
--
ALTER TABLE `cms_captcha`
  ADD PRIMARY KEY (`captcha_id`) USING BTREE,
  ADD KEY `word` (`word`) USING BTREE;

--
-- Indeks untuk tabel `cms_log`
--
ALTER TABLE `cms_log`
  ADD PRIMARY KEY (`id_log`) USING BTREE;

--
-- Indeks untuk tabel `cms_menu`
--
ALTER TABLE `cms_menu`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `cms_menu_grup`
--
ALTER TABLE `cms_menu_grup`
  ADD PRIMARY KEY (`id_grup_menu`) USING BTREE;

--
-- Indeks untuk tabel `cms_online`
--
ALTER TABLE `cms_online`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- Indeks untuk tabel `cms_user`
--
ALTER TABLE `cms_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `master_level`
--
ALTER TABLE `master_level`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cms_captcha`
--
ALTER TABLE `cms_captcha`
  MODIFY `captcha_id` bigint(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3286;

--
-- AUTO_INCREMENT untuk tabel `cms_log`
--
ALTER TABLE `cms_log`
  MODIFY `id_log` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `cms_menu`
--
ALTER TABLE `cms_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT untuk tabel `cms_menu_grup`
--
ALTER TABLE `cms_menu_grup`
  MODIFY `id_grup_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT untuk tabel `cms_user`
--
ALTER TABLE `cms_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `master_level`
--
ALTER TABLE `master_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `master_user`
--
ALTER TABLE `master_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
