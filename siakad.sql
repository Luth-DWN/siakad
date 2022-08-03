-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2021 pada 04.51
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolah_sonidwimulyanto_uasgenap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mbank`
--

CREATE TABLE `mbank` (
  `no_virtual_account` varchar(30) NOT NULL,
  `nilai_pebayaran` decimal(4,2) DEFAULT NULL,
  `no_rekening` varchar(30) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `nama_cabang` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mguru`
--

CREATE TABLE `mguru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_ktp` varchar(35) NOT NULL,
  `status_keluarga` enum('Lajang','Menikah') NOT NULL,
  `id_jabatan` varchar(8) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `status_pegawai` enum('Honorer','Tetap') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mguru`
--

INSERT INTO `mguru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_ktp`, `status_keluarga`, `id_jabatan`, `foto`, `status_pegawai`, `created_at`, `updated_at`) VALUES
(1001, '311', 'Diah', 'Bandung', '1995-06-28', 'jln Merdeka', '211', 'Menikah', 'Guru', '1.jpg', 'Honorer', '2021-06-20 07:46:49', '2021-06-20 07:46:49'),
(1002, '312', 'Topik', 'Jakarta', '1993-01-01', 'jln swadaya', '222', 'Menikah', 'Guru', '2.jpg', 'Tetap', '2021-06-20 07:49:42', '2021-06-20 07:49:42'),
(1003, '313', 'Akbar', 'Bekasi', '1992-02-14', 'Jln Bunga', '223', 'Menikah', 'Guru', '3.jpg', 'Honorer', '2021-06-20 07:52:33', '2021-06-20 07:52:33'),
(1004, '314', 'Nia', 'Jogja', '1988-08-17', 'jln Bulak', '224', 'Menikah', 'Guru', '4.jpg', 'Honorer', '2021-06-20 07:54:33', '2021-06-20 07:54:33'),
(1005, '315', 'Siti', 'Surabaya', '1984-09-20', 'Jln Wisma Asri', '225', 'Menikah', 'Guru', '5.jpg', 'Tetap', '2021-06-20 07:55:48', '2021-06-20 07:55:48'),
(1006, '316', 'Sri', 'Kediri', '1984-10-29', 'Jln Baru', '226', 'Menikah', 'Guru', '6.jpg', 'Tetap', '2021-06-20 07:57:59', '2021-06-20 07:58:17'),
(1007, '317', 'Dayat', 'Jakarta', '1992-01-13', 'Jln Arnot', '226', 'Menikah', 'Guru', '7.jpg', 'Tetap', '2021-06-20 08:00:10', '2021-06-20 08:00:10'),
(1008, '318', 'Engkus', 'Bandung', '1995-03-10', 'Jln Cimahi', '228', 'Lajang', 'Guru', '8.jpg', 'Honorer', '2021-06-20 08:01:26', '2021-06-20 08:01:26'),
(1009, '319', 'Asep', 'Cirebon', '1991-04-19', 'Jln Ciremai', '229', 'Menikah', 'Guru', '9.jpg', 'Honorer', '2021-06-20 08:03:00', '2021-06-20 08:03:00'),
(1010, '320', 'Stipen', 'Garut', '1995-07-26', 'Jln Ci Jantung', '230', 'Lajang', 'Guru', '10.jpg', 'Honorer', '2021-06-20 08:04:16', '2021-06-20 08:04:16'),
(1011, '321', 'Joko', 'Semarang', '1989-01-08', 'Jln Kembar', '231', 'Menikah', 'Guru', '11.jpg', 'Tetap', '2021-06-21 05:09:40', '2021-06-21 05:09:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mjenis_pembayaran`
--

CREATE TABLE `mjenis_pembayaran` (
  `id_jenis_pembayaran` int(11) NOT NULL,
  `nama_jenis_pembayaran` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mjenis_pembayaran`
--

INSERT INTO `mjenis_pembayaran` (`id_jenis_pembayaran`, `nama_jenis_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Tunai', '2019-12-20 18:08:06', '2019-12-20 18:08:55'),
(2, 'Transfer', '2019-12-20 18:08:06', '2019-12-20 18:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkasir`
--

CREATE TABLE `mkasir` (
  `id_kasir` int(11) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mkasir`
--

INSERT INTO `mkasir` (`id_kasir`, `nama_kasir`, `created_at`, `updated_at`) VALUES
(1, 'Yanti', '2019-12-20 18:08:06', '2019-12-20 18:08:55'),
(2, 'Udin', '2019-12-20 18:08:06', '2019-12-20 18:08:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mkelas`
--

CREATE TABLE `mkelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(35) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nis` int(11) DEFAULT NULL,
  `id_tahun_ajaran` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mkelas`
--

INSERT INTO `mkelas` (`id_kelas`, `nama_kelas`, `id_guru`, `nis`, `id_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(201, 'X TKJ A', 1001, 2005114, 1, '2021-06-20 08:13:11', '2021-06-20 08:13:11'),
(202, 'X TKJ B', 1010, 2005111, 1, '2021-06-20 08:13:53', '2021-06-20 08:13:53'),
(203, 'X TKJ C', 1004, 2005119, 1, '2021-06-20 08:15:53', '2021-06-20 08:15:53'),
(204, 'X TKJ D', 1001, 2005117, 1, '2021-06-20 08:16:16', '2021-06-20 08:16:16'),
(205, 'X TKJ E', 1008, 2005113, 1, '2021-06-20 08:16:33', '2021-06-20 08:16:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mmatpel`
--

CREATE TABLE `mmatpel` (
  `id_matpel` varchar(15) NOT NULL,
  `nama_matpel` varchar(70) NOT NULL,
  `status_pelajaran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mmatpel`
--

INSERT INTO `mmatpel` (`id_matpel`, `nama_matpel`, `status_pelajaran`, `created_at`, `updated_at`) VALUES
('A001', 'Bahasa Indonesia', 'Aktif', '2021-06-20 07:37:25', '2021-06-20 07:37:25'),
('A002', 'Bahasa Inggris', 'Aktif', '2021-06-20 07:37:37', '2021-06-20 07:37:37'),
('A003', 'Agama Islam', 'Aktif', '2021-06-20 07:37:52', '2021-06-20 07:37:52'),
('A004', 'Matematika', 'Aktif', '2021-06-20 07:38:07', '2021-06-20 07:38:07'),
('A005', 'Fisika', 'Aktif', '2021-06-20 07:38:23', '2021-06-20 07:38:23'),
('A006', 'IPA', 'Aktif', '2021-06-20 07:38:58', '2021-06-20 07:39:07'),
('A007', 'IPS', 'Aktif', '2021-06-20 07:39:34', '2021-06-20 07:39:34'),
('A008', 'PKN', 'Aktif', '2021-06-20 07:39:43', '2021-06-20 07:39:43'),
('A009', 'Jaringan Komputer', 'Aktif', '2021-06-20 07:39:58', '2021-06-20 07:39:58'),
('A010', 'Sistem Operasi', 'Aktif', '2021-06-20 07:40:17', '2021-06-20 07:40:17'),
('A011', 'Web Design', 'Aktif', '2021-06-20 07:40:31', '2021-06-20 07:40:31'),
('M1', 'jarkom', 'Aktif', '2021-06-21 05:00:49', '2021-06-21 05:00:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `msemester`
--

CREATE TABLE `msemester` (
  `id_semester` int(5) NOT NULL,
  `nama_semester` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `msemester`
--

INSERT INTO `msemester` (`id_semester`, `nama_semester`, `created_at`, `updated_at`) VALUES
(1, 'Semester 1', '2019-12-20 18:08:06', '2021-06-21 14:48:29'),
(2, 'Semester 2', '2019-12-20 18:08:06', '2021-06-21 14:48:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `msiswa`
--

CREATE TABLE `msiswa` (
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_kelamin` enum('L','W') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan_ortu` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `msiswa`
--

INSERT INTO `msiswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `no_hp`, `foto`, `id_kelas`, `asal_sekolah`, `nama_ortu`, `pekerjaan_ortu`, `created_at`, `updated_at`) VALUES
(2005111, 'Akmal', 'L', 'Bandung', '2005-03-19', 'Jln Cimahi', '0899821', '28.jpg', 201, 'Sdn cimahi 5', 'Burhan', 'Pengusaha', '2021-06-21 14:32:22', '2021-06-21 14:32:22'),
(2005112, 'Jamal', 'L', 'Bandung', '2005-06-11', 'jln Baros', '0859882', '28.jpg', 201, 'Sdn Baros', 'Joko', 'Buruh', '2021-06-21 14:34:03', '2021-06-21 14:34:03'),
(2005113, 'Ilham', 'L', 'Bali', '2005-04-08', 'Jln Badung', '0823133', '28.jpg', 201, 'Sdn Mandiri', 'Asep', 'Petani', '2021-06-21 14:35:33', '2021-06-21 14:35:33'),
(2005114, 'Dhea', 'W', 'Bandung', '2005-08-20', 'Jln Cibaduyut', '0813326', '28.jpg', 202, 'Sdn Baros', 'Budi', 'Pengusaha', '2021-06-21 14:37:23', '2021-06-21 14:37:23'),
(2005115, 'Akbar', 'L', 'Jakarta', '2005-10-29', 'Jln Buaran', '0890932', '28.jpg', 202, 'Sdn Jakarta 1', 'Santoso', 'Pengusaha', '2021-06-21 14:38:32', '2021-06-21 14:38:32'),
(2005116, 'Aulia', 'W', 'Bekasi', '2005-12-26', 'Jln Alinda', '0852246', '28.jpg', 202, 'Sdn Perwira', 'Alif', 'Petani', '2021-06-21 14:40:05', '2021-06-21 14:40:05'),
(2005117, 'azzahra', 'W', 'Jogja', '2004-09-21', 'Jln Malioboro', '873312', '28.jpg', 204, 'Sdn Malioboro', 'Winda', 'Buruh', '2021-06-21 14:41:42', '2021-06-21 14:41:42'),
(2005118, 'Bila', 'W', 'Bekasi', '2005-10-10', 'Jln Wisma Asri', '0883319', '28.jpg', 204, 'Sdn Agustus', 'Mawan', 'Pengusaha', '2021-06-21 14:43:46', '2021-06-21 14:43:46'),
(2005119, 'June', 'L', 'Jakarta', '2004-01-15', 'Jln Kemayoran', '0899021', '28.jpg', 205, 'Sdn Jakarta 2', 'Albert', 'Pengusaha', '2021-06-21 14:44:53', '2021-06-21 14:44:53'),
(2005120, 'Upi', 'L', 'Bandung', '2005-02-18', 'Jln Cimahi', '0812033', '28.jpg', 205, 'Sdn Cimindi', 'Young', 'Pengusaha', '2021-06-21 14:46:05', '2021-06-21 14:46:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mtahun_ajaran`
--

CREATE TABLE `mtahun_ajaran` (
  `id_tahun_ajaran` int(5) NOT NULL,
  `nama_tahun_ajaran` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mtahun_ajaran`
--

INSERT INTO `mtahun_ajaran` (`id_tahun_ajaran`, `nama_tahun_ajaran`, `created_at`, `updated_at`) VALUES
(1, '2019/2020', '2019-12-20 18:08:06', '2021-06-21 14:48:56'),
(2, '2020/2021', '2019-12-20 18:08:06', '2021-06-21 14:49:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tdata_ujian`
--

CREATE TABLE `tdata_ujian` (
  `id` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `id_matpel` varchar(15) NOT NULL,
  `nama_matpel` varchar(70) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tdata_ujian`
--

INSERT INTO `tdata_ujian` (`id`, `nis`, `nama_siswa`, `id_matpel`, `nama_matpel`, `nilai_ujian`, `created_at`, `updated_at`) VALUES
(6, 2005111, 'Akmal', 'A001', 'Bahasa Indonesia', '85.00', '2021-06-22 01:44:54', '2021-06-22 01:44:54'),
(7, 2005111, 'Akmal', 'A002', 'Bahasa Inggris', '85.00', '2021-06-22 01:45:11', '2021-06-22 01:45:11'),
(8, 2005111, 'Akmal', 'A003', 'Agama Islam', '90.00', '2021-06-22 01:45:30', '2021-06-22 01:45:30'),
(9, 2005111, 'Akmal', 'A009', 'Jaringan Komputer', '86.00', '2021-06-22 01:45:46', '2021-06-22 01:45:46'),
(10, 2005114, 'Dhea', 'A011', 'Web Design', '88.00', '2021-06-22 01:46:03', '2021-06-22 01:46:03'),
(11, 2005114, 'Dhea', 'A011', 'Web Design', '88.00', '2021-06-22 01:46:17', '2021-06-22 01:46:17'),
(12, 2005114, 'Dhea', 'A011', 'Web Design', '85.00', '2021-06-22 01:46:27', '2021-06-22 01:46:27'),
(13, 2005111, 'June', 'A009', 'Jaringan Komputer', '90.00', '2021-06-22 01:46:41', '2021-06-22 01:46:41'),
(14, 2005119, 'June', 'A010', 'Sistem Operasi', '79.00', '2021-06-22 01:46:55', '2021-06-22 01:46:55'),
(15, 2005119, 'June', 'A011', 'Web Design', '92.00', '2021-06-22 01:47:24', '2021-06-22 01:47:24'),
(16, 2005116, 'Aulia', 'A006', 'IPA', '86.00', '2021-06-22 01:47:42', '2021-06-22 01:47:42'),
(17, 2005111, 'azzahra', 'A005', 'Fisika', '87.00', '2021-06-22 01:47:55', '2021-06-22 01:47:55'),
(18, 2005111, 'azzahra', 'A009', 'Jaringan Komputer', '90.00', '2021-06-22 01:48:08', '2021-06-22 01:48:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tnilai_siswa`
--

CREATE TABLE `tnilai_siswa` (
  `id_nilai_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_matpel` varchar(15) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `id_tahun_ajaran` int(5) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `nilai_harian1` decimal(5,2) DEFAULT NULL,
  `nilaiharian2` decimal(5,2) DEFAULT NULL,
  `nilaiharian3` decimal(5,2) DEFAULT NULL,
  `nilai_tugas1` decimal(5,2) DEFAULT NULL,
  `nilai_tugas2` decimal(5,2) DEFAULT NULL,
  `nilai_uts` decimal(5,2) DEFAULT NULL,
  `nilai_uas` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tnilai_siswa`
--

INSERT INTO `tnilai_siswa` (`id_nilai_siswa`, `nis`, `id_matpel`, `id_kelas`, `id_guru`, `id_tahun_ajaran`, `id_semester`, `nilai_harian1`, `nilaiharian2`, `nilaiharian3`, `nilai_tugas1`, `nilai_tugas2`, `nilai_uts`, `nilai_uas`, `created_at`, `updated_at`) VALUES
(16, 2005111, 'A001', 201, 1001, 1, 1, '80.00', '80.00', '85.00', '87.00', '85.00', '80.00', '85.00', '2021-06-22 01:36:01', '2021-06-22 01:36:01'),
(17, 2005112, 'A001', 201, 1001, 1, 1, '79.00', '82.00', '80.00', '85.00', '86.00', '80.00', '90.00', '2021-06-22 01:36:47', '2021-06-22 01:36:47'),
(18, 2005113, 'A009', 201, 1001, 1, 2, '80.00', '78.00', '84.00', '80.00', '87.00', '85.00', '83.00', '2021-06-22 01:37:36', '2021-06-22 01:37:36'),
(19, 2005114, 'A010', 201, 1008, 1, 2, '80.00', '82.00', '80.00', '85.00', '70.00', '92.00', '85.00', '2021-06-22 01:39:22', '2021-06-22 01:39:22'),
(20, 2005115, 'A009', 202, 1008, 2, 1, '80.00', '80.00', '80.00', '85.00', '70.00', '92.00', '90.00', '2021-06-22 01:40:07', '2021-06-22 01:40:07'),
(22, 2005116, 'A011', 203, 1010, 2, 2, '95.00', '82.00', '85.00', '80.00', '86.00', '92.00', '95.00', '2021-06-22 01:41:19', '2021-06-22 01:41:19'),
(23, 2005118, 'A010', 204, 1004, 2, 2, '80.00', '82.00', '84.00', '87.00', '86.00', '80.00', '80.00', '2021-06-22 01:41:52', '2021-06-22 01:41:52'),
(24, 2005118, 'A001', 204, 1001, 2, 1, '95.00', '78.00', '84.00', '87.00', '70.00', '92.00', '95.00', '2021-06-22 01:42:23', '2021-06-22 01:42:23'),
(25, 2005119, 'A003', 205, 1011, 2, 1, '82.00', '87.00', '85.00', '80.00', '80.00', '93.00', '90.00', '2021-06-22 01:42:56', '2021-06-22 01:42:56'),
(26, 2005120, 'A006', 201, 1008, 2, 1, '80.00', '78.00', '80.00', '87.00', '86.00', '80.00', '95.00', '2021-06-22 01:44:32', '2021-06-22 01:44:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tpembayaran`
--

CREATE TABLE `tpembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(5) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_jenis_pembayaran` int(11) NOT NULL,
  `no_virtual_account` varchar(30) DEFAULT NULL,
  `nilai_pebayaran` decimal(4,2) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `id_kasir` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mbank`
--
ALTER TABLE `mbank`
  ADD PRIMARY KEY (`no_virtual_account`);

--
-- Indeks untuk tabel `mguru`
--
ALTER TABLE `mguru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`);

--
-- Indeks untuk tabel `mjenis_pembayaran`
--
ALTER TABLE `mjenis_pembayaran`
  ADD PRIMARY KEY (`id_jenis_pembayaran`);

--
-- Indeks untuk tabel `mkasir`
--
ALTER TABLE `mkasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indeks untuk tabel `mkelas`
--
ALTER TABLE `mkelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `fk_guru` (`id_guru`),
  ADD KEY `fk_siswa` (`nis`);

--
-- Indeks untuk tabel `mmatpel`
--
ALTER TABLE `mmatpel`
  ADD PRIMARY KEY (`id_matpel`);

--
-- Indeks untuk tabel `msemester`
--
ALTER TABLE `msemester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `msiswa`
--
ALTER TABLE `msiswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `mtahun_ajaran`
--
ALTER TABLE `mtahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indeks untuk tabel `tdata_ujian`
--
ALTER TABLE `tdata_ujian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tnilai_siswa`
--
ALTER TABLE `tnilai_siswa`
  ADD PRIMARY KEY (`id_nilai_siswa`),
  ADD KEY `id_matpel` (`id_matpel`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_guru` (`id_guru`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_semester` (`id_semester`);

--
-- Indeks untuk tabel `tpembayaran`
--
ALTER TABLE `tpembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mjenis_pembayaran`
--
ALTER TABLE `mjenis_pembayaran`
  MODIFY `id_jenis_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mkasir`
--
ALTER TABLE `mkasir`
  MODIFY `id_kasir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `msemester`
--
ALTER TABLE `msemester`
  MODIFY `id_semester` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `mtahun_ajaran`
--
ALTER TABLE `mtahun_ajaran`
  MODIFY `id_tahun_ajaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tdata_ujian`
--
ALTER TABLE `tdata_ujian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tnilai_siswa`
--
ALTER TABLE `tnilai_siswa`
  MODIFY `id_nilai_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tpembayaran`
--
ALTER TABLE `tpembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tnilai_siswa`
--
ALTER TABLE `tnilai_siswa`
  ADD CONSTRAINT `tnilai_siswa_ibfk_1` FOREIGN KEY (`id_matpel`) REFERENCES `mmatpel` (`id_matpel`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `mkelas` (`id_kelas`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_3` FOREIGN KEY (`nis`) REFERENCES `msiswa` (`nis`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `mguru` (`id_guru`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_5` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `mtahun_ajaran` (`id_tahun_ajaran`),
  ADD CONSTRAINT `tnilai_siswa_ibfk_6` FOREIGN KEY (`id_semester`) REFERENCES `msemester` (`id_semester`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
