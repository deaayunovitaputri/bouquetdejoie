-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Jan 2025 pada 09.04
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `modal_box`
--

CREATE TABLE `modal_box` (
  `id_product` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `modal_box`
--

INSERT INTO `modal_box` (`id_product`, `nama`, `description`, `price`, `image`) VALUES
(1, 'Produk 1', 'Pilih jenis bunga (asli/artificial), warna, dan ukuran (kecil,sedang, besar). Tambahkan aroma opsional, pesan khusus, dan tentukan tanggal serta alamat pengiriman. Harga bisa bervariasi sesuai pilihan dan permintaan khusus pelanggan.', 100.00, 'img/buket_bunga_medium.jpg'),
(2, 'Produk 2', 'Pilih jenis bunga (asli/artificial), warna, dan ukuran (kecil, sedang, besar). Tambahkan aroma opsional, pesan khusus, dan tentukan tanggal serta alamat pengiriman. Harga bisa bervariasi sesuai pilihan dan permintaan khusus pelanggan.', 100.00, 'img/buket_snack_medium.jpg'),
(3, 'Produk 3', 'Pilih jenis bunga (asli/artificial), warna, dan ukuran (kecil, sedang, besar). Tambahkan aroma opsional, pesan khusus, dan tentukan tanggal serta alamat pengiriman. Harga bisa bervariasi sesuai pilihan dan permintaan khusus pelanggan.', 100.00, 'img/buket_boneka_medium.jpg'),
(4, 'Produk 4', 'Pilih jenis bunga (asli/artificial), warna, dan ukuran (kecil, sedang, besar). Tambahkan aroma opsional, pesan khusus, dan tentukan tanggal serta alamat pengiriman. Harga bisa bervariasi sesuai pilihan dan permintaan khusus pelanggan.', 50.00, 'img/buket_bunga_medium.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image_path`) VALUES
(1, 'Flowers of Bouquet', 80000.00, 'img/buket_bunga_big.jpg'),
(2, 'Bouquet of Doll', 100000.00, 'img/buket_boneka_big.jpg'),
(3, 'Bouquet of Snack', 60000.00, 'img/buket_snack_medium.jpg'),
(4, 'Bouquet Butterfly', 50000.00, 'img/buket_kupu2.jpg'),
(5, 'Bouquet Polaroid', 40000.00, 'img/buket_photo.jpg'),
(6, 'Bouquet of Money', 50000.00, 'img/buket_uang_big.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(1, 'deaangela', 'deaayu2305@gmail.com', '$2y$10$nF.CVJnxMu0WVU3S5iyQ1.ApzaO6lvVZGTbNlB4P2d.x6.VjK44UO'),
(2, 'deatuban', 'deaa77984@gmail.com', '$2y$10$Ml4GQgIpfs2CiheWt/2tbuuJGizABaNvROWR.2lqmD5vn6Yb5oP5m'),
(3, 'fadlitoak', 'Ahmadsby14@gmail.com', '$2y$10$0CjjbGFOEnVRTWdUuamKMejBV1ZVCZZiPRPjO6ax9ufLJs0Rl0HTq'),
(4, 'satriano', 'wdqwdq@gmail.com', '$2y$10$JZirssRckodjoPI.pNYVUeVBXjR/rPtCdW/65JGKlX.G2uXQOUgo6'),
(5, 'edwfw', 'dsfwdw@gmail.com', '$2y$10$1nkJfcndKW8LaXttVHfDBO66uspsUBhBD5gbHeCGXbVvg8UioYw4y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `modal_box`
--
ALTER TABLE `modal_box`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
