-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 12.34
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seaa_stationary`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(10) UNSIGNED NOT NULL,
  `kode` char(10) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
  `stok` int(255) DEFAULT NULL,
  `id_kategori` int(5) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `kode`, `nama_barang`, `harga`, `stok`, `id_kategori`) VALUES
(1, 'A001', 'Buku Pemrograman Web', 25000, 100, 1),
(2, 'A002', 'Buku Basis Data', 21000, 100, 1),
(3, 'A003', 'Buku Jaringan Komputer', 23000, 100, 1),
(4, 'A004', 'Buku Kecerdasana Buatan', 30000, 100, 1),
(5, 'A005', 'Buku Pendidikan Kewarganegaraan', 45000, 100, 1),
(6, 'A006', 'Buku Pemograman Berorientasi Obyek', 27000, 100, 1),
(7, 'A007', 'Buku Interaksi Manusia dan Komputer', 33000, 100, 1),
(8, 'A008', 'Buku Rekayasa Perangkat Lunak', 40000, 100, 1),
(9, 'A009', 'Buku Aljabar Linear dan Matriks', 21000, 100, 1),
(10, 'A010', 'Buku Sistem Operasi', 26000, 100, 1),
(11, 'B001', 'Pensil', 1500, 1000, 2),
(12, 'B002', 'Penghapus', 3000, 1000, 2),
(13, 'B003', 'Bolpoin', 2500, 1000, 2),
(14, 'B004', 'Buku Tulis', 5000, 1000, 2),
(15, 'B005', 'Penggaris', 7000, 1000, 2),
(16, 'B006', 'Stipo Kertas', 10000, 1000, 2),
(17, 'B007', 'Folio Bergaris', 250, 1000, 2),
(18, 'B008', 'Rautan Pensil', 2000, 500, 2),
(19, 'B009', 'Stabilo', 5000, 1000, 2),
(20, 'B010', 'Kotak Pensil', 15000, 200, 2),
(21, 'B011', 'Map Plastik', 2000, 200, 2),
(22, 'B012', 'Spidol', 7000, 500, 2),
(23, 'B013', 'Tinta Spidol', 16000, 500, 2),
(24, 'B014', 'Sticky Note', 5000, 1000, 2),
(25, 'B015', 'Paper Clip', 3000, 1000, 2),
(26, 'C001', 'Pensil Warna', 20000, 100, 3),
(27, 'C002', 'Crayon', 35000, 100, 3),
(28, 'C003', 'Kuas Lukis', 10000, 100, 3),
(29, 'C004', 'Cat Air', 25000, 75, 3),
(30, 'C005', 'Canvas Kecil', 20000, 100, 3),
(31, 'C006', 'Canvas Sedang', 30000, 50, 3),
(32, 'C007', 'Canvas Besar', 50000, 50, 3),
(33, 'C008', 'Palet Cat', 15000, 100, 3),
(34, 'C009', 'Pensil Arang', 8000, 100, 3),
(35, 'C010', 'Cat Akrilik', 5000, 50, 3),
(36, 'C011', 'Cat Poster', 20000, 50, 3),
(37, 'C012', 'Cat Minyak', 17000, 50, 3),
(38, 'C013', ' Cat Tekstil', 27000, 50, 3),
(39, 'C014', 'Pisau Palet', 19000, 50, 3),
(40, 'C015', 'Stand Lukis', 100000, 35, 3),
(41, 'A011', 'Buku Pendidikan Agama Islam', 20000, 100, 1),
(42, 'D001', 'Mouse', 50000, 15, 4),
(43, 'D002', 'Flashdisk 4GB', 50000, 10, 4),
(44, 'D003', 'Flashdisk 16GB', 90000, 10, 4),
(45, 'D004', 'Flashdisk 32 GB', 11000, 10, 4),
(46, 'D005', 'Keyboard', 60000, 10, 4),
(47, 'D006', 'Head Phone', 50000, 10, 4),
(48, 'D007', 'Earphone wireless', 50000, 10, 4),
(49, 'D008', 'OTG', 45000, 20, 4),
(50, 'D009', 'USB Type C ', 30000, 15, 4),
(51, 'D010', 'Micro USB', 30000, 15, 4),
(52, 'D011', 'Mini Speaker', 85000, 10, 4),
(53, 'E001', 'Kaos Kaki Panjang', 15000, 40, 5),
(54, 'E002', 'Kaus Kaki Pendek', 6000, 50, 5),
(55, 'E003', 'Topi', 35000, 20, 5),
(56, 'E004', 'Totebag Kanvas', 20000, 20, 5),
(57, 'E005', 'Kaos Manajemen Informatika', 85000, 50, 5),
(58, 'E006', 'Kaos UNESA', 80000, 80, 5),
(59, 'E007', 'Dasi UNESA', 25000, 50, 5),
(60, 'E008', 'Almamater UNESA', 100000, 70, 5),
(61, 'F001', 'Botol Minum 750ml', 15000, 30, 6),
(62, 'F002', 'Botol Minum 1000ml', 25000, 25, 6),
(63, 'F003', 'Botol Minum 1500ml', 35000, 25, 6),
(64, 'F004', 'Jas Hujan Plastik', 10000, 50, 6),
(65, 'F005', 'Payung', 30000, 20, 6),
(66, 'B016', 'Binder', 15000, 20, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(5) UNSIGNED NOT NULL,
  `kode` char(1) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kode`, `nama`) VALUES
(1, 'A', 'Buku'),
(2, 'B', 'Alat Tulis'),
(3, 'C', 'Alat Lukis'),
(4, 'D', 'Elektronik'),
(5, 'E', 'Fashion'),
(6, 'F', 'Lain-lain');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `kode` (`kode`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `kategori-barang` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
