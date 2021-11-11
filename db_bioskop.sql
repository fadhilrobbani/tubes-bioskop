-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Nov 2021 pada 19.14
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bioskop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('ADMIN', 'ADMIN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(100) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `nama_studio` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `hari_booking` varchar(100) NOT NULL,
  `tanggal_booking` date NOT NULL,
  `jam` varchar(100) NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `judul_film`, `nama_studio`, `username`, `no_kursi`, `hari_booking`, `tanggal_booking`, `jam`, `harga`) VALUES
(15, 'FATE/GRAND ORDER FINAL SINGULARITY GRAND TEMPLE OF TIME: SOLOMON', 'Studio1', 'billa123', 'B2', 'rabu', '2021-11-10', '19:00', 25),
(17, 'THE MEDIUM', 'Studio1', 'billa123', 'A10', 'kamis', '2021-11-26', '20:00', 25),
(20, 'FATE/GRAND ORDER FINAL SINGULARITY GRAND TEMPLE OF TIME: SOLOMON', 'Studio1', 'billa123', 'B7', 'kamis', '2021-11-22', '12:00', 25),
(21, 'THE MEDIUM', 'Studio3', 'billa123', 'B6', 'jumat', '2021-11-30', '19:00', 30),
(22, 'VENOM', 'Studio4', 'billa123', 'B8', 'kamis', '2021-11-24', '12:00', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `judul_film` varchar(100) NOT NULL,
  `genre_film` varchar(100) NOT NULL,
  `kategori_film` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`judul_film`, `genre_film`, `kategori_film`) VALUES
('FATE/GRAND ORDER FINAL SINGULARITY GRAND TEMPLE OF TIME: SOLOMON', 'Animasi', 'Remaja'),
('MY HERO ACADEMIA: WORLD HEROES MISSION', 'Animasi', 'Remaja'),
('NUSSA', 'Animasi', 'Anak'),
('PARANOIA', 'Thriller', 'Remaja'),
('THE MEDIUM', 'Horror', 'Dewasa'),
('VENOM', 'Action', 'Remaja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesan`
--

CREATE TABLE `pemesan` (
  `username` varchar(100) NOT NULL,
  `nama_pemesan` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pemesan`
--

INSERT INTO `pemesan` (`username`, `nama_pemesan`, `password`) VALUES
('billa123', 'salsabilla adisty', '123'),
('dania0101', 'dania dwi', '0101'),
('fadhil@456', 'Fadhil', '456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE `studio` (
  `nama_studio` varchar(100) NOT NULL,
  `no_kursi` varchar(100) NOT NULL,
  `kapasitas` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`nama_studio`, `no_kursi`, `kapasitas`) VALUES
('Studio1', '', 40),
('Studio2', '', 40),
('Studio3', '', 40),
('Studio4', '', 40),
('Studio5', '', 40),
('Studio6', '', 40),
('Studio7', '', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tayang`
--

CREATE TABLE `tayang` (
  `id_tayang` int(11) NOT NULL,
  `nama_studio` varchar(100) NOT NULL,
  `judul_film` varchar(100) NOT NULL,
  `tanggal_tayang` date NOT NULL,
  `jam_tayang` varchar(100) NOT NULL,
  `hari_tayang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tayang`
--

INSERT INTO `tayang` (`id_tayang`, `nama_studio`, `judul_film`, `tanggal_tayang`, `jam_tayang`, `hari_tayang`) VALUES
(8, 'Studio1', 'FATE/GRAND ORDER FINAL SINGULARITY GRAND TEMPLE OF TIME: SOLOMON', '2021-11-10', '19:00', 'Rabu'),
(9, 'Studio2', 'THE MEDIUM', '2021-11-15', '19:00', 'Senin'),
(10, 'Studio2', 'THE MEDIUM', '2021-11-15', '14:00', 'Senin'),
(11, 'Studio6', 'THE MEDIUM', '2021-11-15', '14:00', 'Rabu'),
(15, 'Studio1', 'VENOM', '2021-11-24', '14:00', 'Rabu'),
(16, 'Studio4', 'MY HERO ACADEMIA: WORLD HEROES MISSION', '2021-12-10', '16:00', 'Jumat'),
(17, 'Studio5', 'MY HERO ACADEMIA: WORLD HEROES MISSION', '2021-12-10', '19:00', 'Jumat'),
(18, 'Studio1', 'PARANOIA', '2021-11-30', '19:00', 'Selasa'),
(19, 'Studio4', 'PARANOIA', '2021-11-30', '19:00', 'Selasa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `judul_film` (`judul_film`),
  ADD KEY `nama_studio` (`nama_studio`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`judul_film`);

--
-- Indeks untuk tabel `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`nama_studio`);

--
-- Indeks untuk tabel `tayang`
--
ALTER TABLE `tayang`
  ADD PRIMARY KEY (`id_tayang`),
  ADD KEY `nama_studio` (`nama_studio`),
  ADD KEY `judul_film` (`judul_film`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tayang`
--
ALTER TABLE `tayang`
  MODIFY `id_tayang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`judul_film`) REFERENCES `film` (`judul_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`username`) REFERENCES `pemesan` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`nama_studio`) REFERENCES `studio` (`nama_studio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tayang`
--
ALTER TABLE `tayang`
  ADD CONSTRAINT `judul_film` FOREIGN KEY (`judul_film`) REFERENCES `film` (`judul_film`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nama` FOREIGN KEY (`nama_studio`) REFERENCES `studio` (`nama_studio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
