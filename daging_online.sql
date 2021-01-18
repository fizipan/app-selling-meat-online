-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jan 2021 pada 17.28
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daging_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id_cart` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `carts`
--

INSERT INTO `carts` (`id_cart`, `user_id`, `product_id`, `banyak`, `total`) VALUES
(1, 6, 2, 2, 160000),
(2, 6, 1, 1, 50000),
(4, 3, 3, 2, 200000),
(5, 6, 7, 2, 40000),
(7, 3, 5, 2, 40000),
(8, 1, 2, 2, 160000),
(9, 1, 1, 2, 100000),
(10, 1, 5, 2, 40000),
(12, 2, 1, 2, 100000),
(13, 2, 3, 2, 200000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `slug`) VALUES
(1, 'Paha', 'paha'),
(2, 'Dada', 'dada'),
(3, 'Kepala', 'kepala'),
(4, 'Ceker', 'ceker'),
(5, 'Ayam Utuh', 'ayam-utuh'),
(6, 'Sayap', 'sayap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `unit` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `descriptions` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `stock` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_product`, `product_name`, `unit`, `price`, `descriptions`, `category_id`, `stock`) VALUES
(1, 'Paha Atas ', 1000, '50000', '<p>Paha Atas <strong>Terenak di dunia</strong></p>\r\n', 1, '4000'),
(2, 'Dada Besar', 1000, '80000', '<p>Bagian <strong>Dada terlembut</strong></p>\r\n', 2, '0'),
(3, 'Kepala Ayam', 1000, '100000', '<p>Kepala Paling Enak</p>\r\n', 3, '0'),
(4, 'Paha Boneless', 1000, '150000', '<p>Paha tanpa tulang</p>\r\n', 1, '3000'),
(5, 'Dada Bebek', 1000, '20000', '<p>Dada bikin klepek</p>\r\n', 2, '5000'),
(6, 'Paha Maknyus', 1000, '400000', '<p>Paha Buatan Mbak Yus</p>\r\n', 1, '3000'),
(7, 'Ceker Ayam', 1000, '20000', '<p>Ceker Ayam Wenak</p>\r\n', 4, '3000'),
(8, 'Ayam Utuh Kriuk', 1000, '500000', '<p>Ayam Utuh Yang terkenal Kriuk dagingnya</p>\r\n', 5, '3000'),
(10, 'Sayap Ayam', 1000, '75000', '<p>Sayap Ayam Terbang</p>\r\n', 6, '10000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products_galleries`
--

CREATE TABLE `products_galleries` (
  `id_gallery` int(11) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products_galleries`
--

INSERT INTO `products_galleries` (`id_gallery`, `photos`, `product_id`) VALUES
(1, '600104eb03a38.jpg', 1),
(2, '600104ce9b69e.jpg', 2),
(3, '600104f8a0997.jpg', 1),
(4, '60026547d7f93.jpg', 3),
(5, '6002656eba3d5.jpg', 4),
(6, '6002710e7b77b.jpg', 2),
(7, '60027262d9951.png', 5),
(8, '6002778cab7a0.png', 5),
(9, '60027e3a6172d.png', 6),
(10, '600282d800bf6.png', 6),
(12, '6002cf749cccf.jpg', 7),
(13, '600302d067410.png', 3),
(14, '6003c040baec4.jpg', 8),
(15, '6003c05a2df6e.jpg', 8),
(16, '6005af4dabb7b.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `postal_code` varchar(191) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `address`, `phone_number`, `postal_code`, `roles`) VALUES
(1, 'Hafizh Maulana Y', 'hafizhmy26@gmail.com', '$2y$10$/v28V4a4hxcdc3KtkVc8huoop7Ir2NKDk2zA2DDFO9O0u7o9xG7Lq', '<p>Jln Gang Hamzah No 22</p>\r\n', '098987898765', '', 'ADMIN'),
(2, 'Syatya Athary', 'athar@gmail.com', '$2y$10$itD8adVKaHMPZaSVHf3eo.AUfUkNg/sMx8fhSiUe4KXwOXhAHoAFy', '<p>Jln Magang No 22</p>\r\n', '098987898767', '', 'USER'),
(3, 'AMANDA PUTRI', 'manda@gmail.com', '$2y$10$2jrwSDZqHQgKlTUxPGnRau8ZD8Jgj9lNE4tBvRDsuNKNzVnEsbtxG', '', '099998887776', '', 'USER'),
(6, 'Vita Sundari', 'vita@gmail.com', '$2y$10$2s/dgjADHLW1D5Ha.1qdz.as3ShDVYB/2V8fHh/P81dqtlKK2V8nG', NULL, '999999999', '', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `products_galleries`
--
ALTER TABLE `products_galleries`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `products_galleries`
--
ALTER TABLE `products_galleries`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
