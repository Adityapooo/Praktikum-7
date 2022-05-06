-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2022 pada 09.09
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawai`
--

CREATE TABLE `datapegawai` (
  `idpg` varchar(4) NOT NULL,
  `namapg` varchar(30) NOT NULL,
  `nopg` char(15) NOT NULL,
  `emailpg` varchar(30) NOT NULL,
  `jkpg` varchar(15) NOT NULL,
  `alamatpg` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapegawai`
--

INSERT INTO `datapegawai` (`idpg`, `namapg`, `nopg`, `emailpg`, `jkpg`, `alamatpg`, `jabatan`) 
VALUES
('P001', 'Aditya Kurnia pratama', '085853995447', 'adityacaspo@gmail.com', 'Laki-Laki', 'Lamongan', 'Direktur Utama'),
('P002', 'Sandy Alamsyah', '081254891267', 'sandyalam56@gmail.com', 'Laki-Laki', 'Tuban', 'Staff Marketing'),
('P003', 'Dyana Eka Putri', '089872163897', 'dyanapw@gmail.com', 'Perempuan', 'Surabaya', 'Staff Marketing'),
('P004', 'Aprilia Salsabillah', '085724168429', 'salsaapril@gmail.com', 'Perempuan', 'Gresik', 'Manajer Keuangan'),
('P005', 'Azalina', '083862193561', 'Azalina@gmail.com', 'Perempuan', 'Surabaya', 'Manajer Personalia'),
('P006', 'Nanda Putra Pratama', '082276139641', 'nandaputpratama@gmail.com', 'Laki-Laki', 'Lamongan', 'Manajer Pemasaran'),
('P007', 'Salsa Fransika', '081245789127', 'frnasiskasalsa27@gmail.com', 'Perempuan', 'Surabaya', 'Staff Pemasaran'),
('P008', 'Bayu Pradana', '085726125386', 'bayupr123@gmail.com', 'Laki-Laki', 'Gresik', 'Manajer Administrasi'),
('P009', 'Fajar Effendi', '085145327815', 'fajareff09@gmail.com', 'Laki-Laki', 'Lamongan', 'Staff Administrasi'),
('P010', 'Ilham Akbar', '081265295431', 'ilhamakbar45@gmail.com', 'Laki-Laki', 'Surabaya', 'Staff Administrasi'),
('P011', 'Dinda Kusuma Putri', '085736813528', 'dindakusputri23@gmail.com', 'Perempuan', 'Sidoarjo', 'Sekertaris Direktur'),
('P012', 'Fitri Putri Dian', '082263548239', 'fitridianput36@gmail.com', 'Perempuan', 'Malang', 'Direktur Keuangan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`idpg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;