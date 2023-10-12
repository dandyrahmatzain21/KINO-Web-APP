-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jul 2023 pada 00.18
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eperformance`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_divisi`
--

CREATE TABLE `t_divisi` (
  `id_divisi` bigint(20) NOT NULL,
  `nama_divisi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_divisi`
--

INSERT INTO `t_divisi` (`id_divisi`, `nama_divisi`) VALUES
(40001, 'Farmasi'),
(40002, 'Limbah Medis'),
(40003, 'Perawat'),
(40004, 'Pendaftaran'),
(40005, 'Rekam Medis'),
(40006, 'Kasir'),
(40007, 'Keuangan'),
(40008, 'Akunting'),
(40009, 'Finance'),
(40010, 'Peralatan Dan Bahan'),
(40011, 'Laboratorium'),
(40012, 'Marketing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_human_resource`
--

CREATE TABLE `t_human_resource` (
  `id_hr` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_human_resource`
--

INSERT INTO `t_human_resource` (`id_hr`) VALUES
(20001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_index_prestasi`
--

CREATE TABLE `t_index_prestasi` (
  `id_ip` bigint(20) NOT NULL,
  `id_periode` bigint(20) NOT NULL,
  `id_karyawan` bigint(20) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `index_prestasi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_index_prestasi`
--

INSERT INTO `t_index_prestasi` (`id_ip`, `id_periode`, `id_karyawan`, `nama_karyawan`, `id_divisi`, `total_nilai`, `index_prestasi`) VALUES
(1, 50001, 30001, 'Dandy Rahmat Zain', 40005, 69, 'Kinerja Sangat Baik'),
(2, 50001, 30002, 'Mursita Hidayanto', 40001, 60, 'Kinerja Baik'),
(3, 50001, 30003, 'Lili Wahyuni', 40003, 60, 'Kinerja Baik'),
(4, 50001, 30004, 'Jaka Budiyanto', 40004, 60, 'Kinerja Baik'),
(5, 50001, 30005, 'Jono Halim', 40008, 45, 'Kinerja Cukup Baik'),
(6, 50001, 30006, 'Slamet Narpati', 40011, 45, 'Kinerja Cukup Baik'),
(7, 50001, 30007, 'Nilam Haryanti', 40012, 44, 'Kinerja Cukup Baik'),
(8, 50001, 30008, 'Kacung Napitupulu', 40006, 46, 'Kinerja Cukup Baik'),
(9, 50001, 30009, 'Lukita Maulana', 40010, 45, 'Kinerja Cukup Baik'),
(10, 50001, 30010, 'Devi Wahyuni', 40002, 45, 'Kinerja Cukup Baik'),
(11, 50002, 30001, 'Dandy Rahmat Zain', 40005, 68, 'Kinerja Sangat Baik'),
(12, 50002, 30002, 'Mursita Hidayanto', 40001, 53, 'Kinerja Cukup Baik'),
(13, 50002, 30003, 'Lili Wahyuni', 40003, 38, 'Kinerja Buruk'),
(14, 50002, 30004, 'Jaka Budiyanto', 40004, 23, 'Kinerja Sangat Buruk'),
(15, 50002, 30005, 'Jono Halim', 40008, 43, 'Kinerja Cukup Baik'),
(16, 50002, 30006, 'Slamet Narpati', 40011, 67, 'Kinerja Sangat Baik'),
(17, 50002, 30007, 'Nilam Haryanti', 40012, 52, 'Kinerja Cukup Baik'),
(18, 50002, 30008, 'Kacung Napitupulu', 40006, 37, 'Kinerja Buruk'),
(19, 50002, 30009, 'Lukita Maulana', 40010, 22, 'Kinerja Sangat Buruk'),
(20, 50002, 30010, 'Devi Wahyuni', 40002, 47, 'Kinerja Cukup Baik'),
(21, 50003, 30001, 'Dandy Rahmat Zain', 40005, 75, 'Kinerja Sangat Baik'),
(22, 50003, 30002, 'Mursita Hidayanto', 40001, 60, 'Kinerja Baik'),
(23, 50003, 30003, 'Lili Wahyuni', 40003, 45, 'Kinerja Cukup Baik'),
(24, 50003, 30004, 'Jaka Budiyanto', 40004, 30, 'Kinerja Buruk'),
(25, 50003, 30005, 'Jono Halim', 40008, 15, 'Kinerja Sangat Buruk'),
(26, 50003, 30006, 'Slamet Narpati', 40011, 45, 'Kinerja Cukup Baik'),
(27, 50003, 30007, 'Nilam Haryanti', 40012, 45, 'Kinerja Cukup Baik'),
(28, 50003, 30008, 'Kacung Napitupulu', 40006, 45, 'Kinerja Cukup Baik'),
(29, 50003, 30009, 'Lukita Maulana', 40010, 45, 'Kinerja Cukup Baik'),
(30, 50003, 30010, 'Devi Wahyuni', 40002, 57, 'Kinerja Baik'),
(31, 50004, 30001, 'Dandy Rahmat Zain', 40005, 52, 'Kinerja Cukup Baik'),
(32, 50004, 30002, 'Mursita Hidayanto', 40001, 44, 'Kinerja Cukup Baik'),
(33, 50004, 30003, 'Lili Wahyuni', 40003, 46, 'Kinerja Cukup Baik'),
(34, 50004, 30004, 'Jaka Budiyanto', 40004, 42, 'Kinerja Cukup Baik'),
(35, 50004, 30005, 'Jono Halim', 40008, 41, 'Kinerja Cukup Baik'),
(36, 50004, 30006, 'Slamet Narpati', 40011, 39, 'Kinerja Buruk'),
(37, 50004, 30007, 'Nilam Haryanti', 40012, 46, 'Kinerja Cukup Baik'),
(38, 50004, 30008, 'Kacung Napitupulu', 40006, 46, 'Kinerja Cukup Baik'),
(39, 50004, 30009, 'Lukita Maulana', 40010, 43, 'Kinerja Cukup Baik'),
(40, 50004, 30010, 'Devi Wahyuni', 40002, 36, 'Kinerja Buruk'),
(41, 50005, 30001, 'Dandy Rahmat Zain', 40005, 31, 'Kinerja Buruk'),
(42, 50005, 30002, 'Mursita Hidayanto', 40001, 48, 'Kinerja Cukup Baik'),
(43, 50005, 30003, 'Lili Wahyuni', 40003, 50, 'Kinerja Cukup Baik'),
(44, 50005, 30004, 'Jaka Budiyanto', 40004, 46, 'Kinerja Cukup Baik'),
(45, 50005, 30005, 'Jono Halim', 40008, 41, 'Kinerja Cukup Baik'),
(46, 50005, 30006, 'Slamet Narpati', 40011, 48, 'Kinerja Cukup Baik'),
(47, 50005, 30007, 'Nilam Haryanti', 40012, 45, 'Kinerja Cukup Baik'),
(48, 50005, 30008, 'Kacung Napitupulu', 40006, 44, 'Kinerja Cukup Baik'),
(49, 50005, 30009, 'Lukita Maulana', 40010, 47, 'Kinerja Cukup Baik'),
(50, 50005, 30010, 'Devi Wahyuni', 40002, 40, 'Kinerja Buruk'),
(51, 50006, 30001, 'Dandy Rahmat Zain', 40005, 63, 'Kinerja Baik'),
(52, 50006, 30002, 'Mursita Hidayanto', 40001, 46, 'Kinerja Cukup Baik'),
(53, 50006, 30003, 'Lili Wahyuni', 40003, 58, 'Kinerja Baik'),
(54, 50006, 30004, 'Jaka Budiyanto', 40004, 47, 'Kinerja Cukup Baik'),
(55, 50006, 30005, 'Jono Halim', 40008, 53, 'Kinerja Cukup Baik'),
(56, 50006, 30006, 'Slamet Narpati', 40011, 58, 'Kinerja Baik'),
(57, 50006, 30007, 'Nilam Haryanti', 40012, 59, 'Kinerja Baik'),
(58, 50006, 30008, 'Kacung Napitupulu', 40006, 58, 'Kinerja Baik'),
(59, 50006, 30009, 'Lukita Maulana', 40010, 53, 'Kinerja Cukup Baik'),
(60, 50006, 30010, 'Devi Wahyuni', 40002, 57, 'Kinerja Baik'),
(61, 50007, 30001, 'Dandy Rahmat Zain', 40005, 59, 'Kinerja Baik'),
(62, 50007, 30002, 'Mursita Hidayanto', 40001, 50, 'Kinerja Cukup Baik'),
(63, 50007, 30003, 'Lili Wahyuni', 40003, 46, 'Kinerja Cukup Baik'),
(64, 50007, 30004, 'Jaka Budiyanto', 40004, 48, 'Kinerja Cukup Baik'),
(65, 50007, 30005, 'Jono Halim', 40008, 56, 'Kinerja Baik'),
(66, 50007, 30006, 'Slamet Narpati', 40011, 58, 'Kinerja Baik'),
(67, 50007, 30007, 'Nilam Haryanti', 40012, 62, 'Kinerja Baik'),
(68, 50007, 30008, 'Kacung Napitupulu', 40006, 57, 'Kinerja Baik'),
(69, 50007, 30009, 'Lukita Maulana', 40010, 53, 'Kinerja Cukup Baik'),
(70, 50007, 30010, 'Devi Wahyuni', 40002, 57, 'Kinerja Baik'),
(71, 50008, 30001, 'Dandy Rahmat Zain', 40005, 51, 'Kinerja Cukup Baik'),
(72, 50008, 30002, 'Mursita Hidayanto', 40001, 59, 'Kinerja Baik'),
(73, 50008, 30003, 'Lili Wahyuni', 40003, 48, 'Kinerja Cukup Baik'),
(74, 50008, 30004, 'Jaka Budiyanto', 40004, 57, 'Kinerja Baik'),
(75, 50008, 30005, 'Jono Halim', 40008, 57, 'Kinerja Baik'),
(76, 50008, 30006, 'Slamet Narpati', 40011, 48, 'Kinerja Cukup Baik'),
(77, 50008, 30007, 'Nilam Haryanti', 40012, 48, 'Kinerja Cukup Baik'),
(78, 50008, 30008, 'Kacung Napitupulu', 40006, 51, 'Kinerja Cukup Baik'),
(79, 50008, 30009, 'Lukita Maulana', 40010, 54, 'Kinerja Baik'),
(80, 50008, 30010, 'Devi Wahyuni', 40002, 54, 'Kinerja Baik'),
(81, 50009, 30001, 'Dandy Rahmat Zain', 40005, 54, 'Kinerja Baik'),
(82, 50009, 30002, 'Mursita Hidayanto', 40001, 55, 'Kinerja Baik'),
(83, 50009, 30003, 'Lili Wahyuni', 40003, 55, 'Kinerja Baik'),
(84, 50009, 30004, 'Jaka Budiyanto', 40004, 56, 'Kinerja Baik'),
(85, 50009, 30005, 'Jono Halim', 40008, 56, 'Kinerja Baik'),
(86, 50009, 30006, 'Slamet Narpati', 40011, 58, 'Kinerja Baik'),
(87, 50009, 30007, 'Nilam Haryanti', 40012, 53, 'Kinerja Cukup Baik'),
(88, 50009, 30008, 'Kacung Napitupulu', 40006, 56, 'Kinerja Baik'),
(89, 50009, 30009, 'Lukita Maulana', 40010, 60, 'Kinerja Baik'),
(90, 50009, 30010, 'Devi Wahyuni', 40002, 52, 'Kinerja Cukup Baik'),
(91, 50010, 30001, 'Dandy Rahmat Zain', 40005, 64, 'Kinerja Baik'),
(92, 50010, 30002, 'Mursita Hidayanto', 40001, 52, 'Kinerja Cukup Baik'),
(93, 50010, 30003, 'Lili Wahyuni', 40003, 37, 'Kinerja Buruk'),
(94, 50010, 30004, 'Jaka Budiyanto', 40004, 44, 'Kinerja Cukup Baik'),
(95, 50010, 30005, 'Jono Halim', 40008, 29, 'Kinerja Buruk'),
(96, 50010, 30006, 'Slamet Narpati', 40011, 38, 'Kinerja Buruk'),
(97, 50010, 30007, 'Nilam Haryanti', 40012, 48, 'Kinerja Cukup Baik'),
(98, 50010, 30008, 'Kacung Napitupulu', 40006, 50, 'Kinerja Cukup Baik'),
(99, 50010, 30009, 'Lukita Maulana', 40010, 58, 'Kinerja Baik'),
(100, 50010, 30010, 'Devi Wahyuni', 40002, 57, 'Kinerja Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_karyawan`
--

CREATE TABLE `t_karyawan` (
  `id_karyawan` bigint(20) NOT NULL,
  `id_divisi` bigint(20) DEFAULT NULL,
  `nama_karyawan` varchar(200) DEFAULT NULL,
  `pendidikan_akhir` varchar(200) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT 'Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_karyawan`
--

INSERT INTO `t_karyawan` (`id_karyawan`, `id_divisi`, `nama_karyawan`, `pendidikan_akhir`, `jenis_kelamin`, `status`) VALUES
(30001, 40005, 'Dandy Rahmat Zain', 'SMK', 'Laki-laki', 'Aktif'),
(30002, 40001, 'Mursita Hidayanto', 'Diploma 3', 'Laki-laki', 'Aktif'),
(30003, 40003, 'Lili Wahyuni', 'SMK', 'Perempuan', 'Aktif'),
(30004, 40004, 'Jaka Budiyanto', 'SMK', 'Laki-laki', 'Aktif'),
(30005, 40008, 'Jono Halim', 'Sarjana 1', 'Laki-laki', 'Aktif'),
(30006, 40011, 'Slamet Narpati', 'Sarjana 1', 'Laki-laki', 'Aktif'),
(30007, 40012, 'Nilam Haryanti', 'Sarjana 2', 'Perempuan', 'Aktif'),
(30008, 40006, 'Kacung Napitupulu', 'Diploma 3', 'Laki-laki', 'Aktif'),
(30009, 40010, 'Lukita Maulana', 'Sarjana 1', 'Laki-laki', 'Aktif'),
(30010, 40002, 'Devi Wahyuni', 'SMK', 'Perempuan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kriteria`
--

CREATE TABLE `t_kriteria` (
  `id_kriteria` bigint(20) NOT NULL,
  `kode_kriteria` varchar(200) NOT NULL,
  `kategori_kriteria` varchar(200) NOT NULL,
  `nama_kriteria` varchar(200) DEFAULT NULL,
  `key` varchar(200) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `jenis` varchar(200) DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_kriteria`
--

INSERT INTO `t_kriteria` (`id_kriteria`, `kode_kriteria`, `kategori_kriteria`, `nama_kriteria`, `key`, `value`, `jenis`, `bobot`) VALUES
(1, 'CI-1', 'Individu', 'Presensi Dan Kehadiran', 'c1', '{\"weight\":0.1,\"is_cost\":false}', 'Benefit', 10),
(2, 'CI-2', 'Individu', 'Komunikasi', 'c2', '{\"weight\":0.08,\"is_cost\":false}', 'Benefit', 8),
(3, 'CI-3', 'Individu', 'Karakter', 'c3', '{\"weight\":0.05,\"is_cost\":false}', 'Benefit', 5),
(4, 'CI-4', 'Individu', 'Kebersihan', 'c4', '{\"weight\":0.04,\"is_cost\":false}', 'Benefit', 4),
(5, 'CI-5', 'Individu', 'Penampilan', 'c5', '{\"weight\":0.04,\"is_cost\":false}', 'Benefit', 4),
(6, 'CK-1', 'Sikap Kerja', 'Disiplin Dan Ketaatan Terhadap Aturan dan SOP', 'c6', '{\"weight\":0.12,\"is_cost\":false}', 'Benefit', 12),
(7, 'CK-2', 'Sikap Kerja', 'Tanggung Jawab Peran', 'c7', '{\"weight\":0.1,\"is_cost\":false}', 'Benefit', 10),
(8, 'CK-3', 'Sikap Kerja', 'Ketepatan Dan Management Waktu', 'c8', '{\"weight\":0.08,\"is_cost\":false}', 'Benefit', 8),
(9, 'CK-4', 'Sikap Kerja', 'Inisiatif Dan Keaktifan Dalam Bekerja', 'c9', '{\"weight\":0.08,\"is_cost\":false}', 'Benefit', 8),
(10, 'CK-5', 'Sikap Kerja', 'Teamwork Dan Harmonisasi Dengan Rekan Kerja', 'c10', '{\"weight\":0.06,\"is_cost\":false}', 'Benefit', 6),
(11, 'CK-6', 'Sikap Kerja', 'Pemeliharaan Kebersihan Lingkungan Kerja', 'c11', '{\"weight\":0.05,\"is_cost\":false}', 'Benefit', 5),
(12, 'CK-7', 'Sikap Kerja', 'Pengambilan Keputusan Dan Pemecahan Masalah', 'c12', '{\"weight\":0.05,\"is_cost\":false}', 'Benefit', 5),
(13, 'CN-1', 'Knowledge', 'Pengetahuan Di Bidang Pekerjaan', 'c13', '{\"weight\":0.08,\"is_cost\":false}', 'Benefit', 8),
(14, 'CN-2', 'Knowledge', 'Motivasi Kerja', 'c14', '{\"weight\":0.04,\"is_cost\":false}', 'Benefit', 4),
(15, 'CN-3', 'Knowledge', 'Pemanfaatan Alat Dan Benda', 'c15', '{\"weight\":0.03,\"is_cost\":false}', 'Benefit', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai_preferensi`
--

CREATE TABLE `t_nilai_preferensi` (
  `id_np` bigint(20) NOT NULL,
  `id_periode` bigint(20) DEFAULT NULL,
  `id_karyawan` bigint(20) DEFAULT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `nilai_preferensi` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_nilai_preferensi`
--

INSERT INTO `t_nilai_preferensi` (`id_np`, `id_periode`, `id_karyawan`, `nama_karyawan`, `id_divisi`, `nilai_preferensi`) VALUES
(1, 50001, 30001, 'Dandy Rahmat Zain', 40005, 0.85141448116734),
(2, 50001, 30002, 'Mursita Hidayanto', 40001, 0.73374226451165),
(3, 50001, 30003, 'Lili Wahyuni', 40003, 0.69200370286836),
(4, 50001, 30004, 'Jaka Budiyanto', 40004, 0.67959143123916),
(5, 50001, 30005, 'Jono Halim', 40008, 0.59666493880977),
(6, 50001, 30006, 'Slamet Narpati', 40011, 0.36630276189382),
(7, 50001, 30007, 'Nilam Haryanti', 40012, 0.50580185539428),
(8, 50001, 30008, 'Kacung Napitupulu', 40006, 0.45398323999737),
(9, 50001, 30009, 'Lukita Maulana', 40010, 0.54890191911992),
(10, 50001, 30010, 'Devi Wahyuni', 40002, 0.40841634164331),
(11, 50002, 30001, 'Dandy Rahmat Zain', 40005, 0.83776477156098),
(12, 50002, 30002, 'Mursita Hidayanto', 40001, 0.62298796414086),
(13, 50002, 30003, 'Lili Wahyuni', 40003, 0.38852391646415),
(14, 50002, 30004, 'Jaka Budiyanto', 40004, 0.17103419591164),
(15, 50002, 30005, 'Jono Halim', 40008, 0.48762262815797),
(16, 50002, 30006, 'Slamet Narpati', 40011, 0.82896580408836),
(17, 50002, 30007, 'Nilam Haryanti', 40012, 0.61147608353585),
(18, 50002, 30008, 'Kacung Napitupulu', 40006, 0.37701203585914),
(19, 50002, 30009, 'Lukita Maulana', 40010, 0.16223522843902),
(20, 50002, 30010, 'Devi Wahyuni', 40002, 0.51237737184203),
(21, 50003, 30001, 'Dandy Rahmat Zain', 40005, 1),
(22, 50003, 30002, 'Mursita Hidayanto', 40001, 0.75),
(23, 50003, 30003, 'Lili Wahyuni', 40003, 0.5),
(24, 50003, 30004, 'Jaka Budiyanto', 40004, 0.25),
(25, 50003, 30005, 'Jono Halim', 40008, 0),
(26, 50003, 30006, 'Slamet Narpati', 40011, 0.56719000284648),
(27, 50003, 30007, 'Nilam Haryanti', 40012, 0.48884822855519),
(28, 50003, 30008, 'Kacung Napitupulu', 40006, 0.40936214094318),
(29, 50003, 30009, 'Lukita Maulana', 40010, 0.5138751256108),
(30, 50003, 30010, 'Devi Wahyuni', 40002, 0.58018249904379),
(31, 50004, 30001, 'Dandy Rahmat Zain', 40005, 0.68543041033167),
(32, 50004, 30002, 'Mursita Hidayanto', 40001, 0.52976206700028),
(33, 50004, 30003, 'Lili Wahyuni', 40003, 0.49883086324675),
(34, 50004, 30004, 'Jaka Budiyanto', 40004, 0.50537552131763),
(35, 50004, 30005, 'Jono Halim', 40008, 0.43524100373529),
(36, 50004, 30006, 'Slamet Narpati', 40011, 0.37572231804812),
(37, 50004, 30007, 'Nilam Haryanti', 40012, 0.46705722880812),
(38, 50004, 30008, 'Kacung Napitupulu', 40006, 0.46414775849773),
(39, 50004, 30009, 'Lukita Maulana', 40010, 0.46519988024906),
(40, 50004, 30010, 'Devi Wahyuni', 40002, 0.42701527524698),
(41, 50005, 30001, 'Dandy Rahmat Zain', 40005, 0.35768697920985),
(42, 50005, 30002, 'Mursita Hidayanto', 40001, 0.58703570223372),
(43, 50005, 30003, 'Lili Wahyuni', 40003, 0.53963233829958),
(44, 50005, 30004, 'Jaka Budiyanto', 40004, 0.5083322041592),
(45, 50005, 30005, 'Jono Halim', 40008, 0.43286314916578),
(46, 50005, 30006, 'Slamet Narpati', 40011, 0.53127244435657),
(47, 50005, 30007, 'Nilam Haryanti', 40012, 0.49599758496485),
(48, 50005, 30008, 'Kacung Napitupulu', 40006, 0.45119847500344),
(49, 50005, 30009, 'Lukita Maulana', 40010, 0.51696402910845),
(50, 50005, 30010, 'Devi Wahyuni', 40002, 0.39231306707132),
(51, 50006, 30001, 'Dandy Rahmat Zain', 40005, 0.68944712090698),
(52, 50006, 30002, 'Mursita Hidayanto', 40001, 0.32879433563951),
(53, 50006, 30003, 'Lili Wahyuni', 40003, 0.54481494722908),
(54, 50006, 30004, 'Jaka Budiyanto', 40004, 0.51156027820025),
(55, 50006, 30005, 'Jono Halim', 40008, 0.50924145676974),
(56, 50006, 30006, 'Slamet Narpati', 40011, 0.56914360581077),
(57, 50006, 30007, 'Nilam Haryanti', 40012, 0.54390118599329),
(58, 50006, 30008, 'Kacung Napitupulu', 40006, 0.62949307122051),
(59, 50006, 30009, 'Lukita Maulana', 40010, 0.54218140495991),
(60, 50006, 30010, 'Devi Wahyuni', 40002, 0.64172770263946),
(61, 50007, 30001, 'Dandy Rahmat Zain', 40005, 0.47342553169029),
(62, 50007, 30002, 'Mursita Hidayanto', 40001, 0.39511737314999),
(63, 50007, 30003, 'Lili Wahyuni', 40003, 0.37312074126574),
(64, 50007, 30004, 'Jaka Budiyanto', 40004, 0.31627792270968),
(65, 50007, 30005, 'Jono Halim', 40008, 0.49680082180897),
(66, 50007, 30006, 'Slamet Narpati', 40011, 0.49183081149176),
(67, 50007, 30007, 'Nilam Haryanti', 40012, 0.68951640316321),
(68, 50007, 30008, 'Kacung Napitupulu', 40006, 0.47776777938459),
(69, 50007, 30009, 'Lukita Maulana', 40010, 0.41460567088121),
(70, 50007, 30010, 'Devi Wahyuni', 40002, 0.63466429477636),
(71, 50008, 30001, 'Dandy Rahmat Zain', 40005, 0.52116944333552),
(72, 50008, 30002, 'Mursita Hidayanto', 40001, 0.66039345621918),
(73, 50008, 30003, 'Lili Wahyuni', 40003, 0.41284562007174),
(74, 50008, 30004, 'Jaka Budiyanto', 40004, 0.51989119093356),
(75, 50008, 30005, 'Jono Halim', 40008, 0.59032200948556),
(76, 50008, 30006, 'Slamet Narpati', 40011, 0.40675428883989),
(77, 50008, 30007, 'Nilam Haryanti', 40012, 0.4158301343991),
(78, 50008, 30008, 'Kacung Napitupulu', 40006, 0.45904348145521),
(79, 50008, 30009, 'Lukita Maulana', 40010, 0.58707212432332),
(80, 50008, 30010, 'Devi Wahyuni', 40002, 0.46075035218844),
(81, 50009, 30001, 'Dandy Rahmat Zain', 40005, 0.51839173555889),
(82, 50009, 30002, 'Mursita Hidayanto', 40001, 0.46945066601652),
(83, 50009, 30003, 'Lili Wahyuni', 40003, 0.43646500751957),
(84, 50009, 30004, 'Jaka Budiyanto', 40004, 0.58368937356056),
(85, 50009, 30005, 'Jono Halim', 40008, 0.55645990669711),
(86, 50009, 30006, 'Slamet Narpati', 40011, 0.71289143597665),
(87, 50009, 30007, 'Nilam Haryanti', 40012, 0.47765199134276),
(88, 50009, 30008, 'Kacung Napitupulu', 40006, 0.49872831634511),
(89, 50009, 30009, 'Lukita Maulana', 40010, 0.71122035991007),
(90, 50009, 30010, 'Devi Wahyuni', 40002, 0.48361365535843),
(91, 50010, 30001, 'Dandy Rahmat Zain', 40005, 0.81734741354983),
(92, 50010, 30002, 'Mursita Hidayanto', 40001, 0.59956686071791),
(93, 50010, 30003, 'Lili Wahyuni', 40003, 0.37638086749203),
(94, 50010, 30004, 'Jaka Budiyanto', 40004, 0.46158022629719),
(95, 50010, 30005, 'Jono Halim', 40008, 0.21677502988844),
(96, 50010, 30006, 'Slamet Narpati', 40011, 0.32110446103216),
(97, 50010, 30007, 'Nilam Haryanti', 40012, 0.53801283394322),
(98, 50010, 30008, 'Kacung Napitupulu', 40006, 0.63897144561176),
(99, 50010, 30009, 'Lukita Maulana', 40010, 0.68527987195259),
(100, 50010, 30010, 'Devi Wahyuni', 40002, 0.74538224327857);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penilaian`
--

CREATE TABLE `t_penilaian` (
  `id_penilaian` bigint(20) NOT NULL,
  `id_periode` bigint(20) NOT NULL,
  `id_karyawan` bigint(20) DEFAULT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `id_divisi` bigint(20) NOT NULL,
  `n1` int(11) DEFAULT NULL,
  `n2` int(11) DEFAULT NULL,
  `n3` int(11) DEFAULT NULL,
  `n4` int(11) DEFAULT NULL,
  `n5` int(11) DEFAULT NULL,
  `n6` int(11) DEFAULT NULL,
  `n7` int(11) DEFAULT NULL,
  `n8` int(11) DEFAULT NULL,
  `n9` int(11) DEFAULT NULL,
  `n10` int(11) DEFAULT NULL,
  `n11` int(11) DEFAULT NULL,
  `n12` int(11) DEFAULT NULL,
  `n13` int(11) DEFAULT NULL,
  `n14` int(11) DEFAULT NULL,
  `n15` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_penilaian`
--

INSERT INTO `t_penilaian` (`id_penilaian`, `id_periode`, `id_karyawan`, `nama_karyawan`, `id_divisi`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `n11`, `n12`, `n13`, `n14`, `n15`) VALUES
(1, 50001, 30001, 'Dandy Rahmat Zain', 40005, 5, 5, 5, 4, 4, 4, 5, 5, 5, 4, 4, 4, 5, 5, 5),
(2, 50001, 30002, 'Mursita Hidayanto', 40001, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(3, 50001, 30003, 'Lili Wahyuni', 40003, 5, 4, 3, 5, 4, 3, 5, 4, 3, 5, 4, 3, 5, 4, 3),
(4, 50001, 30004, 'Jaka Budiyanto', 40004, 3, 4, 5, 3, 4, 5, 3, 4, 5, 3, 4, 5, 3, 4, 5),
(5, 50001, 30005, 'Jono Halim', 40008, 5, 4, 3, 2, 1, 5, 4, 3, 2, 1, 5, 4, 3, 2, 1),
(6, 50001, 30006, 'Slamet Narpati', 40011, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5, 1, 2, 3, 4, 5),
(7, 50001, 30007, 'Nilam Haryanti', 40012, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3),
(8, 50001, 30008, 'Kacung Napitupulu', 40006, 1, 2, 3, 4, 5, 4, 3, 2, 1, 2, 3, 4, 5, 4, 3),
(9, 50001, 30009, 'Lukita Maulana', 40010, 5, 5, 5, 4, 4, 4, 3, 3, 3, 2, 2, 2, 1, 1, 1),
(10, 50001, 30010, 'Devi Wahyuni', 40002, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5),
(11, 50002, 30001, 'Dandy Rahmat Zain', 40005, 5, 4, 5, 4, 5, 4, 5, 4, 5, 4, 5, 4, 5, 4, 5),
(12, 50002, 30002, 'Mursita Hidayanto', 40001, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4),
(13, 50002, 30003, 'Lili Wahyuni', 40003, 3, 2, 3, 2, 3, 2, 3, 2, 3, 2, 3, 2, 3, 2, 3),
(14, 50002, 30004, 'Jaka Budiyanto', 40004, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2),
(15, 50002, 30005, 'Jono Halim', 40008, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1),
(16, 50002, 30006, 'Slamet Narpati', 40011, 4, 5, 4, 5, 4, 5, 4, 5, 4, 5, 4, 5, 4, 5, 4),
(17, 50002, 30007, 'Nilam Haryanti', 40012, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3, 4, 3),
(18, 50002, 30008, 'Kacung Napitupulu', 40006, 2, 3, 2, 3, 2, 3, 2, 3, 2, 3, 2, 3, 2, 3, 2),
(19, 50002, 30009, 'Lukita Maulana', 40010, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 1),
(20, 50002, 30010, 'Devi Wahyuni', 40002, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5, 1, 5),
(21, 50003, 30001, 'Dandy Rahmat Zain', 40005, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(22, 50003, 30002, 'Mursita Hidayanto', 40001, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(23, 50003, 30003, 'Lili Wahyuni', 40003, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
(24, 50003, 30004, 'Jaka Budiyanto', 40004, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2),
(25, 50003, 30005, 'Jono Halim', 40008, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(26, 50003, 30006, 'Slamet Narpati', 40011, 5, 5, 5, 4, 4, 4, 3, 3, 3, 2, 2, 2, 1, 1, 1),
(27, 50003, 30007, 'Nilam Haryanti', 40012, 4, 4, 4, 3, 3, 3, 2, 2, 2, 1, 1, 1, 5, 5, 5),
(28, 50003, 30008, 'Kacung Napitupulu', 40006, 3, 3, 3, 2, 2, 2, 1, 1, 1, 5, 5, 5, 4, 4, 4),
(29, 50003, 30009, 'Lukita Maulana', 40010, 1, 1, 1, 5, 5, 5, 4, 4, 4, 3, 3, 3, 2, 2, 2),
(30, 50003, 30010, 'Devi Wahyuni', 40002, 1, 1, 1, 5, 5, 5, 4, 4, 4, 5, 5, 5, 4, 4, 4),
(31, 50004, 30001, 'Dandy Rahmat Zain', 40005, 5, 5, 4, 5, 2, 4, 5, 2, 2, 4, 4, 5, 3, 1, 1),
(32, 50004, 30002, 'Mursita Hidayanto', 40001, 3, 3, 2, 5, 1, 3, 4, 5, 1, 3, 3, 2, 4, 1, 4),
(33, 50004, 30003, 'Lili Wahyuni', 40003, 2, 2, 3, 5, 3, 4, 2, 1, 4, 4, 3, 2, 4, 2, 5),
(34, 50004, 30004, 'Jaka Budiyanto', 40004, 4, 4, 4, 3, 3, 2, 3, 3, 3, 5, 1, 1, 3, 2, 1),
(35, 50004, 30005, 'Jono Halim', 40008, 5, 2, 5, 1, 3, 1, 3, 4, 1, 3, 3, 2, 1, 2, 5),
(36, 50004, 30006, 'Slamet Narpati', 40011, 1, 1, 4, 5, 2, 3, 2, 4, 2, 4, 4, 1, 1, 4, 1),
(37, 50004, 30007, 'Nilam Haryanti', 40012, 3, 5, 3, 3, 3, 3, 1, 5, 2, 4, 4, 1, 2, 4, 3),
(38, 50004, 30008, 'Kacung Napitupulu', 40006, 4, 4, 1, 4, 2, 2, 1, 3, 2, 5, 5, 3, 4, 4, 2),
(39, 50004, 30009, 'Lukita Maulana', 40010, 1, 1, 4, 4, 3, 5, 1, 2, 3, 3, 4, 3, 4, 2, 3),
(40, 50004, 30010, 'Devi Wahyuni', 40002, 1, 5, 4, 2, 1, 4, 2, 4, 1, 1, 3, 2, 2, 3, 1),
(41, 50005, 30001, 'Dandy Rahmat Zain', 40005, 1, 4, 1, 1, 4, 4, 4, 1, 2, 1, 2, 3, 1, 1, 1),
(42, 50005, 30002, 'Mursita Hidayanto', 40001, 5, 1, 4, 2, 3, 5, 3, 4, 2, 5, 1, 3, 3, 3, 4),
(43, 50005, 30003, 'Lili Wahyuni', 40003, 3, 3, 5, 5, 1, 4, 3, 3, 2, 5, 5, 4, 2, 3, 2),
(44, 50005, 30004, 'Jaka Budiyanto', 40004, 2, 2, 2, 4, 2, 3, 4, 5, 3, 5, 3, 2, 4, 4, 1),
(45, 50005, 30005, 'Jono Halim', 40008, 4, 4, 2, 4, 3, 1, 3, 4, 2, 5, 2, 2, 1, 2, 2),
(46, 50005, 30006, 'Slamet Narpati', 40011, 5, 3, 2, 3, 3, 3, 3, 4, 1, 5, 5, 3, 2, 4, 2),
(47, 50005, 30007, 'Nilam Haryanti', 40012, 1, 4, 2, 1, 2, 3, 3, 5, 3, 2, 5, 1, 5, 5, 3),
(48, 50005, 30008, 'Kacung Napitupulu', 40006, 1, 2, 1, 5, 3, 4, 3, 1, 4, 2, 3, 5, 4, 2, 4),
(49, 50005, 30009, 'Lukita Maulana', 40010, 2, 3, 2, 5, 5, 5, 3, 2, 5, 2, 2, 5, 1, 2, 3),
(50, 50005, 30010, 'Devi Wahyuni', 40002, 1, 3, 2, 1, 4, 2, 5, 1, 2, 3, 1, 4, 5, 2, 4),
(51, 50006, 30001, 'Dandy Rahmat Zain', 40005, 4, 4, 5, 2, 5, 5, 5, 3, 4, 3, 3, 5, 5, 5, 5),
(52, 50006, 30002, 'Mursita Hidayanto', 40001, 4, 4, 2, 5, 3, 2, 2, 3, 2, 2, 2, 4, 2, 4, 5),
(53, 50006, 30003, 'Lili Wahyuni', 40003, 5, 4, 4, 5, 5, 3, 4, 3, 4, 3, 5, 4, 2, 2, 5),
(54, 50006, 30004, 'Jaka Budiyanto', 40004, 3, 4, 2, 2, 4, 5, 5, 5, 4, 3, 2, 2, 2, 2, 2),
(55, 50006, 30005, 'Jono Halim', 40008, 3, 3, 5, 3, 2, 5, 3, 5, 3, 5, 3, 5, 2, 3, 3),
(56, 50006, 30006, 'Slamet Narpati', 40011, 2, 4, 2, 3, 2, 5, 5, 5, 2, 5, 4, 4, 5, 5, 5),
(57, 50006, 30007, 'Nilam Haryanti', 40012, 3, 4, 4, 2, 4, 3, 5, 5, 4, 5, 5, 5, 2, 3, 5),
(58, 50006, 30008, 'Kacung Napitupulu', 40006, 5, 4, 3, 5, 5, 4, 5, 5, 3, 4, 2, 2, 4, 5, 2),
(59, 50006, 30009, 'Lukita Maulana', 40010, 4, 2, 2, 2, 3, 5, 3, 4, 4, 2, 5, 3, 5, 5, 4),
(60, 50006, 30010, 'Devi Wahyuni', 40002, 5, 5, 3, 2, 4, 4, 4, 5, 5, 2, 5, 3, 4, 3, 3),
(61, 50007, 30001, 'Dandy Rahmat Zain', 40005, 4, 3, 4, 5, 5, 2, 4, 4, 5, 4, 2, 2, 5, 5, 5),
(62, 50007, 30002, 'Mursita Hidayanto', 40001, 4, 4, 4, 4, 4, 3, 3, 2, 4, 5, 2, 2, 2, 2, 5),
(63, 50007, 30003, 'Lili Wahyuni', 40003, 3, 2, 2, 4, 2, 3, 2, 5, 5, 4, 3, 2, 3, 2, 4),
(64, 50007, 30004, 'Jaka Budiyanto', 40004, 3, 3, 4, 3, 4, 2, 3, 2, 3, 4, 3, 3, 4, 5, 2),
(65, 50007, 30005, 'Jono Halim', 40008, 5, 4, 5, 4, 4, 2, 5, 4, 4, 3, 3, 3, 3, 3, 4),
(66, 50007, 30006, 'Slamet Narpati', 40011, 5, 2, 4, 2, 5, 3, 4, 2, 5, 5, 3, 5, 4, 4, 5),
(67, 50007, 30007, 'Nilam Haryanti', 40012, 5, 5, 5, 4, 5, 5, 5, 5, 3, 4, 5, 2, 2, 5, 2),
(68, 50007, 30008, 'Kacung Napitupulu', 40006, 2, 2, 4, 3, 4, 3, 5, 3, 5, 5, 4, 4, 5, 4, 4),
(69, 50007, 30009, 'Lukita Maulana', 40010, 2, 3, 3, 5, 2, 3, 5, 2, 4, 4, 4, 5, 2, 4, 5),
(70, 50007, 30010, 'Devi Wahyuni', 40002, 5, 3, 5, 2, 3, 4, 4, 4, 5, 3, 4, 5, 5, 2, 3),
(71, 50008, 30001, 'Dandy Rahmat Zain', 40005, 3, 4, 2, 3, 2, 5, 5, 3, 5, 2, 4, 5, 2, 4, 2),
(72, 50008, 30002, 'Mursita Hidayanto', 40001, 5, 3, 4, 4, 5, 4, 4, 5, 4, 2, 4, 4, 5, 3, 3),
(73, 50008, 30003, 'Lili Wahyuni', 40003, 3, 3, 2, 2, 4, 4, 3, 4, 4, 2, 3, 4, 2, 5, 3),
(74, 50008, 30004, 'Jaka Budiyanto', 40004, 2, 5, 5, 3, 4, 5, 5, 3, 4, 2, 4, 3, 2, 5, 5),
(75, 50008, 30005, 'Jono Halim', 40008, 4, 4, 5, 2, 4, 4, 4, 3, 4, 5, 5, 4, 3, 4, 2),
(76, 50008, 30006, 'Slamet Narpati', 40011, 4, 3, 4, 4, 2, 3, 4, 4, 2, 2, 3, 4, 2, 3, 4),
(77, 50008, 30007, 'Nilam Haryanti', 40012, 3, 2, 2, 4, 4, 5, 3, 2, 3, 4, 5, 2, 2, 2, 5),
(78, 50008, 30008, 'Kacung Napitupulu', 40006, 2, 5, 5, 5, 3, 2, 5, 5, 5, 3, 2, 2, 2, 2, 3),
(79, 50008, 30009, 'Lukita Maulana', 40010, 5, 5, 4, 5, 2, 3, 4, 3, 4, 4, 4, 3, 4, 2, 2),
(80, 50008, 30010, 'Devi Wahyuni', 40002, 4, 2, 2, 4, 4, 4, 2, 4, 4, 5, 5, 2, 2, 5, 5),
(81, 50009, 30001, 'Dandy Rahmat Zain', 40005, 4, 2, 2, 4, 5, 3, 5, 5, 3, 4, 2, 2, 5, 4, 4),
(82, 50009, 30002, 'Mursita Hidayanto', 40001, 3, 4, 5, 4, 3, 3, 3, 4, 3, 4, 3, 5, 4, 2, 5),
(83, 50009, 30003, 'Lili Wahyuni', 40003, 3, 5, 4, 5, 4, 2, 2, 5, 3, 3, 2, 5, 5, 4, 3),
(84, 50009, 30004, 'Jaka Budiyanto', 40004, 5, 3, 5, 5, 4, 4, 5, 2, 3, 3, 5, 2, 3, 2, 5),
(85, 50009, 30005, 'Jono Halim', 40008, 2, 3, 4, 3, 4, 4, 5, 5, 4, 3, 4, 5, 4, 3, 3),
(86, 50009, 30006, 'Slamet Narpati', 40011, 5, 4, 5, 3, 3, 5, 4, 5, 5, 3, 3, 3, 5, 2, 3),
(87, 50009, 30007, 'Nilam Haryanti', 40012, 3, 5, 2, 4, 4, 3, 3, 4, 4, 2, 4, 5, 4, 4, 2),
(88, 50009, 30008, 'Kacung Napitupulu', 40006, 2, 4, 5, 5, 5, 4, 3, 4, 3, 2, 5, 3, 5, 3, 3),
(89, 50009, 30009, 'Lukita Maulana', 40010, 5, 5, 2, 2, 5, 5, 5, 3, 5, 4, 3, 5, 5, 2, 4),
(90, 50009, 30010, 'Devi Wahyuni', 40002, 4, 2, 3, 3, 2, 3, 3, 5, 5, 4, 3, 4, 5, 2, 4),
(91, 50010, 30001, 'Dandy Rahmat Zain', 40005, 4, 4, 4, 4, 4, 4, 5, 5, 4, 4, 4, 5, 4, 4, 5),
(92, 50010, 30002, 'Mursita Hidayanto', 40001, 3, 4, 4, 3, 3, 3, 3, 4, 4, 4, 3, 3, 4, 4, 3),
(93, 50010, 30003, 'Lili Wahyuni', 40003, 2, 2, 3, 3, 2, 3, 3, 3, 2, 3, 2, 2, 2, 2, 3),
(94, 50010, 30004, 'Jaka Budiyanto', 40004, 1, 4, 3, 4, 3, 4, 2, 4, 1, 3, 2, 4, 4, 4, 1),
(95, 50010, 30005, 'Jono Halim', 40008, 3, 1, 4, 1, 1, 1, 1, 2, 2, 3, 3, 3, 1, 1, 2),
(96, 50010, 30006, 'Slamet Narpati', 40011, 1, 2, 4, 3, 3, 1, 1, 2, 4, 4, 2, 3, 4, 1, 3),
(97, 50010, 30007, 'Nilam Haryanti', 40012, 3, 3, 4, 3, 4, 3, 4, 4, 2, 3, 3, 2, 3, 3, 4),
(98, 50010, 30008, 'Kacung Napitupulu', 40006, 5, 3, 4, 4, 3, 4, 4, 3, 2, 4, 2, 4, 3, 2, 3),
(99, 50010, 30009, 'Lukita Maulana', 40010, 5, 3, 5, 3, 4, 4, 3, 4, 3, 5, 4, 4, 3, 3, 5),
(100, 50010, 30010, 'Devi Wahyuni', 40002, 3, 4, 3, 3, 4, 5, 4, 5, 5, 4, 3, 3, 4, 3, 4),
(101, 50011, 30001, 'Dandy Rahmat Zain', 40005, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 50011, 30002, 'Mursita Hidayanto', 40001, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 50011, 30003, 'Lili Wahyuni', 40003, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 50011, 30004, 'Jaka Budiyanto', 40004, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 50011, 30005, 'Jono Halim', 40008, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 50011, 30006, 'Slamet Narpati', 40011, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 50011, 30007, 'Nilam Haryanti', 40012, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 50011, 30008, 'Kacung Napitupulu', 40006, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 50011, 30009, 'Lukita Maulana', 40010, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 50011, 30010, 'Devi Wahyuni', 40002, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_periode`
--

CREATE TABLE `t_periode` (
  `id_periode` int(11) NOT NULL,
  `periode` varchar(200) NOT NULL,
  `total_nilai_karyawan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `t_periode`
--

INSERT INTO `t_periode` (`id_periode`, `periode`, `total_nilai_karyawan`) VALUES
(50001, 'Januari-2023', 519),
(50002, 'Februari-2023', 450),
(50003, 'Maret-2023', 462),
(50004, 'April-2023', 435),
(50005, 'Mei-2023', 440),
(50006, 'Juni-2023', 552),
(50007, 'Juli-2023', 546),
(50008, 'Agustus-2023', 527),
(50009, 'September-2023', 555),
(50010, 'Oktober-2023', 477),
(50011, 'November-2023', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `level` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `level`) VALUES
(10001, 'Admin', 'admin@gmail.com', NULL, '$2y$10$DM15bIPo6e.gjig7TAzbF.o4rev1uHW1NwMxCj9Ju4RT/O7CjfXty', 'tZaFMs8UnfGsS0Bn9baplsyxz4dCFYaJMQa0J5ep3fhYxojMptSw7cD3Mkw1', NULL, NULL, 1),
(20001, 'Dandan', 'dandan@gmail.com', NULL, '$2y$10$aqRorAsjnwE4dha2B2V2Y.okzuByYpuIsSR2T7F2VNgSYIK4Pu8ey', NULL, '2023-07-18 11:53:42', '2023-07-18 11:53:42', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `t_divisi`
--
ALTER TABLE `t_divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indeks untuk tabel `t_human_resource`
--
ALTER TABLE `t_human_resource`
  ADD PRIMARY KEY (`id_hr`);

--
-- Indeks untuk tabel `t_index_prestasi`
--
ALTER TABLE `t_index_prestasi`
  ADD PRIMARY KEY (`id_ip`);

--
-- Indeks untuk tabel `t_karyawan`
--
ALTER TABLE `t_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `t_kriteria`
--
ALTER TABLE `t_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `t_nilai_preferensi`
--
ALTER TABLE `t_nilai_preferensi`
  ADD PRIMARY KEY (`id_np`);

--
-- Indeks untuk tabel `t_penilaian`
--
ALTER TABLE `t_penilaian`
  ADD PRIMARY KEY (`id_penilaian`);

--
-- Indeks untuk tabel `t_periode`
--
ALTER TABLE `t_periode`
  ADD PRIMARY KEY (`id_periode`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_divisi`
--
ALTER TABLE `t_divisi`
  MODIFY `id_divisi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40013;

--
-- AUTO_INCREMENT untuk tabel `t_human_resource`
--
ALTER TABLE `t_human_resource`
  MODIFY `id_hr` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20002;

--
-- AUTO_INCREMENT untuk tabel `t_index_prestasi`
--
ALTER TABLE `t_index_prestasi`
  MODIFY `id_ip` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `t_karyawan`
--
ALTER TABLE `t_karyawan`
  MODIFY `id_karyawan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30011;

--
-- AUTO_INCREMENT untuk tabel `t_kriteria`
--
ALTER TABLE `t_kriteria`
  MODIFY `id_kriteria` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `t_nilai_preferensi`
--
ALTER TABLE `t_nilai_preferensi`
  MODIFY `id_np` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `t_penilaian`
--
ALTER TABLE `t_penilaian`
  MODIFY `id_penilaian` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT untuk tabel `t_periode`
--
ALTER TABLE `t_periode`
  MODIFY `id_periode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50012;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2023101003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
