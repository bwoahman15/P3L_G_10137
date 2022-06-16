-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2022 pada 09.49
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p3l_10137`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `ID_CUSTOMER` int(3) UNSIGNED ZEROFILL NOT NULL,
  `NAMA_CUSTOMER` varchar(100) DEFAULT NULL,
  `ALAMAT_CUSTOMER` varchar(100) DEFAULT NULL,
  `TANGGAL_LAHIR_CUSTOMER` date DEFAULT NULL,
  `JENIS_KELAMIN_CUSTOMER` varchar(100) DEFAULT NULL,
  `EMAIL_CUSTOMER` varchar(100) DEFAULT NULL,
  `PASSWORD_CUSTOMER` varchar(150) NOT NULL,
  `NO_TELP_CUSTOMER` char(15) DEFAULT NULL,
  `NOMOR_CUSTOMER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`ID_CUSTOMER`, `NAMA_CUSTOMER`, `ALAMAT_CUSTOMER`, `TANGGAL_LAHIR_CUSTOMER`, `JENIS_KELAMIN_CUSTOMER`, `EMAIL_CUSTOMER`, `PASSWORD_CUSTOMER`, `NO_TELP_CUSTOMER`, `NOMOR_CUSTOMER`) VALUES
(001, 'Bagiya Wahyudin', 'Jln. Ters. Kiaracondong No. \r\n571, Palu 56539, Gorontalo', '1990-01-04', 'Laki-laki', 'yuliana78@yahoo.co.id', '19900104', '07661772196', ''),
(002, 'Suneo', 'Jalan Baru', '1997-03-12', 'Laki-laki', 'suneo12@gmail.com', '199783', '082121314151', ''),
(003, 'Roki', 'Jalan Baru 2', '1999-07-20', 'Laki-laki', 'Roki103@gmail.com', '1999720', '087878871312', ''),
(004, 'Aldi', 'Jalan Buntu', '1999-09-08', 'Laki-laki', 'bukanaldi@gmail.com', '199998', '087899879013', ''),
(005, 'Lita', 'Jalan Tengah 2', '1998-06-26', 'Laki-laki', 'lupaemail@gmail.com', '1998626', '081298734891', ''),
(013, 'tescust', 'jalan tes', '1999-11-12', 'Laki-laki', 'tes@gmail.com', '$2y$10$9jIGj8GEi8l.zV8NGhRVBeNXprcQUdlXBOuipCMN8toeHbkW4MRIS', '081928272122', 'CUS220615-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_shift`
--

CREATE TABLE `detail_shift` (
  `ID_PEGAWAI` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ID_SHIFT` int(5) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_shift`
--

INSERT INTO `detail_shift` (`ID_PEGAWAI`, `ID_SHIFT`) VALUES
(00001, 00003),
(00002, 00003),
(00003, 00003),
(00004, 00003),
(00005, 00007);

-- --------------------------------------------------------

--
-- Struktur dari tabel `driver`
--

CREATE TABLE `driver` (
  `ID_DRIVER` bigint(3) UNSIGNED ZEROFILL NOT NULL,
  `NAMA_DRIVER` varchar(100) DEFAULT NULL,
  `ALAMAT_DRIVER` varchar(100) DEFAULT NULL,
  `TANGGAL_LAHIR_DRIVER` date DEFAULT NULL,
  `JENIS_KELAMIN_DRIVER` varchar(100) DEFAULT NULL,
  `EMAIL_DRIVER` varchar(100) DEFAULT NULL,
  `PASSWORD_DRIVER` varchar(150) NOT NULL,
  `NO_TELP_DRIVER` char(15) DEFAULT NULL,
  `BAHASA_DRIVER` varchar(50) DEFAULT NULL,
  `SIM_DRIVER` char(100) DEFAULT NULL,
  `SURAT_NAPZA` varchar(255) NOT NULL,
  `SURAT_KEJIWAAN` varchar(255) NOT NULL,
  `SURAT_JASMANI` varchar(255) NOT NULL,
  `SKCK` varchar(255) NOT NULL,
  `FOTO_DRIVER` varchar(255) DEFAULT NULL,
  `TARIF_DRIVER` float NOT NULL,
  `RATING_RATAAN` decimal(3,0) NOT NULL,
  `STATUS_DRIVER` varchar(20) NOT NULL,
  `NOMOR_DRIVER` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `driver`
--

INSERT INTO `driver` (`ID_DRIVER`, `NAMA_DRIVER`, `ALAMAT_DRIVER`, `TANGGAL_LAHIR_DRIVER`, `JENIS_KELAMIN_DRIVER`, `EMAIL_DRIVER`, `PASSWORD_DRIVER`, `NO_TELP_DRIVER`, `BAHASA_DRIVER`, `SIM_DRIVER`, `SURAT_NAPZA`, `SURAT_KEJIWAAN`, `SURAT_JASMANI`, `SKCK`, `FOTO_DRIVER`, `TARIF_DRIVER`, `RATING_RATAAN`, `STATUS_DRIVER`, `NOMOR_DRIVER`) VALUES
(7868, 'Hengky', 'Jalan Sungai Raya', '1998-09-25', 'Laki-laki', 'Hengky73@gmail.com', '', '082144559677', 'Indonesia', '', '', '', '', '', NULL, 200000, '0', '', ''),
(7887, 'Kiko', 'Jalan Sutera', '1995-06-28', 'Laki-laki', 'Kikoenaktau@gmail.com', '', '082144558098', 'Indonesia, Inggris', '', '', '', '', '', NULL, 210000, '0', '', ''),
(7896, 'Burhan', 'Jalan Keramat', '1999-02-11', 'Laki-laki', 'Burhannudin@gmail.com', '', '082144556783', 'Indonesia', '', '', '', '', '', NULL, 190000, '0', '', ''),
(7897, 'Rocky', 'Jalan Raya', '1997-03-19', 'Laki-laki', 'Rocky88@gmail.com', '', '082144559669', 'Indonesia, Inggris', '', '', '', '', '', NULL, 220000, '0', '', ''),
(8322, 'Reyna', 'Jalan Santai', '1998-07-08', 'Laki-laki', 'Reyna23@gmail.com', '', '082133794531', 'Indonesia, Inggris', '', '', '', '', '', '', 175000, '0', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `ID_KENDARAAN` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ID_MITRA` int(5) UNSIGNED ZEROFILL DEFAULT NULL,
  `PEMILIK_KENDARAAN` varchar(10) NOT NULL,
  `NAMA_KENDARAAN` varchar(50) DEFAULT NULL,
  `KATEGORI_KENDARAAN` varchar(50) DEFAULT NULL,
  `NO_STNK_KENDARAAN` varchar(10) NOT NULL,
  `JUMLAH_PENUMPANG` int(11) NOT NULL,
  `JENIS_TRANSMISI` varchar(10) DEFAULT NULL,
  `JENIS_BBM` varchar(20) DEFAULT NULL,
  `WARNA_MOBIL` varchar(30) DEFAULT NULL,
  `VOLUME_BAGASI` float DEFAULT NULL,
  `FASILITAS_KENDARAAN` varchar(255) DEFAULT NULL,
  `HARGA_SEWA` float DEFAULT NULL,
  `PLAT_NOMOR` varchar(15) DEFAULT NULL,
  `TANGGAL_SERVIS` date DEFAULT NULL,
  `KONTRAK_AWAL` date DEFAULT NULL,
  `KONTRAK_AKHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`ID_KENDARAAN`, `ID_MITRA`, `PEMILIK_KENDARAAN`, `NAMA_KENDARAAN`, `KATEGORI_KENDARAAN`, `NO_STNK_KENDARAAN`, `JUMLAH_PENUMPANG`, `JENIS_TRANSMISI`, `JENIS_BBM`, `WARNA_MOBIL`, `VOLUME_BAGASI`, `FASILITAS_KENDARAAN`, `HARGA_SEWA`, `PLAT_NOMOR`, `TANGGAL_SERVIS`, `KONTRAK_AWAL`, `KONTRAK_AKHIR`) VALUES
(01112, 01000, 'AJR', 'Toyota New Vios', 'Sedan', '', 0, 'AT', 'Pertamax', 'Merah', NULL, 'AC, Safety Bag', 400000, 'AB1324BA', '2022-02-18', NULL, NULL),
(01116, 01003, 'Mitra', 'Toyota New Avanza', 'MPV', '', 0, 'MT', 'Pertalite', 'Putih', NULL, 'AC, Air Bag, Safety System', 300000, 'AB8324HX', '2022-01-08', NULL, NULL),
(01216, 01000, 'AJR', 'Honda Brio', 'City Car', '', 0, 'AT', 'Pertalite', 'Abu-abu', 0, 'AC, Air bag\r\n', 200000, 'AB8788HY', '2021-12-30', NULL, NULL),
(01277, 01001, 'Mitra', 'Toyota Rush', 'SUV', '', 0, 'MT', 'Pertamax', 'Merah', NULL, 'AC, Air Bag', 1000000, 'AB8908TY', '2022-03-01', NULL, NULL),
(01317, 01000, 'AJR', 'Toyota Fortuner', 'SUV', '', 0, 'AT', 'Pertamax', 'Hitam', NULL, 'AC, Air Bag, Safety System\r\n', 1250000, 'AB5678GG', '2022-02-17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra`
--

CREATE TABLE `mitra` (
  `ID_MITRA` int(5) UNSIGNED ZEROFILL NOT NULL,
  `NAMA_MITRA` varchar(100) DEFAULT NULL,
  `ALAMAT_MITRA` varchar(100) DEFAULT NULL,
  `NO_TELP_MITRA` char(15) DEFAULT NULL,
  `NO_KTP_MITRA` varchar(16) NOT NULL,
  `STATUS_MITRA` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mitra`
--

INSERT INTO `mitra` (`ID_MITRA`, `NAMA_MITRA`, `ALAMAT_MITRA`, `NO_TELP_MITRA`, `NO_KTP_MITRA`, `STATUS_MITRA`) VALUES
(01000, 'AJR', '', '', '', ''),
(01001, 'Jojo', 'Jalan Sejahtera', '0812334455667', '', ''),
(01002, 'Joji', 'Jalan Mataram', '0812334455776', '', ''),
(01003, 'Jerome', 'Jalan Cenderawasih', '0812334455887', '', ''),
(01012, 'John', 'Jalan Cendikiawan', '0812334455778', '', ''),
(01014, 'Jokip', 'Jalan Setia', '0812334455787', '121314515116', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `ID_PEGAWAI` int(5) UNSIGNED ZEROFILL NOT NULL,
  `NAMA_PEGAWAI` varchar(100) DEFAULT NULL,
  `JABATAN_PEGAWAI` varchar(15) NOT NULL,
  `ALAMAT_PEGAWAI` varchar(100) DEFAULT NULL,
  `TANGGAL_LAHIR_PEGAWAI` date DEFAULT NULL,
  `JENIS_KELAMIN_PEGAWAI` varchar(100) DEFAULT NULL,
  `EMAIL_PEGAWAI` varchar(100) DEFAULT NULL,
  `PASSWORD_PEGAWAI` varchar(150) NOT NULL,
  `NO_TELP_PEGAWAI` char(15) DEFAULT NULL,
  `FOTO_PEGAWAI` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`ID_PEGAWAI`, `NAMA_PEGAWAI`, `JABATAN_PEGAWAI`, `ALAMAT_PEGAWAI`, `TANGGAL_LAHIR_PEGAWAI`, `JENIS_KELAMIN_PEGAWAI`, `EMAIL_PEGAWAI`, `PASSWORD_PEGAWAI`, `NO_TELP_PEGAWAI`, `FOTO_PEGAWAI`) VALUES
(00001, 'Devan', 'CS', 'Jalan Cemara', '1999-05-27', 'Laki-laki', 'devan20@gmail.com', '$2a$12$8N2kL80/nBglGbyneKNuHOJFPsG1FbvU6XT9OBrgeoR2w7iPr8Ogq', '082121256780', NULL),
(00002, 'Devin', 'Admin', 'Jalan Cemara 2', '1995-07-12', 'Laki-laki', 'devin2@gmail.com', '$2a$12$NCrqZYfR8kFjjBxGCR1XZOSqG67O3dcfuw4RG8X1Uz0rd0zbPcjKW', '082121256797', NULL),
(00003, 'Devia', 'Admin', 'Jalan Cenderawasih 3', '1997-09-03', 'Perempuan', 'apaituemail@gmail.com', '$2a$12$voUkc9Cw.V.c4OOHrSs8Xe7wGUMbZHlKf0EKa1i1kd0', '082121256749', NULL),
(00004, 'Sova', 'CS', 'Jalan Kencana', '1997-08-20', 'Laki-laki', 'iamthehunter@gmail.com', '1997820', '082121256882', NULL),
(00005, 'Ulfa', 'Manajer', 'Jalan Tentram', '1996-10-18', 'Perempuan', 'iniemail@gmail.com', '19961018', '082121253379', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `ID_PROMO` bigint(3) NOT NULL,
  `KODE_PROMO` varchar(25) NOT NULL,
  `JENIS_PROMO` varchar(20) NOT NULL,
  `KETERANGAN_PROMO` varchar(255) DEFAULT NULL,
  `BESAR_PROMO` int(3) NOT NULL,
  `STATUS_PROMO` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`ID_PROMO`, `KODE_PROMO`, `JENIS_PROMO`, `KETERANGAN_PROMO`, `BESAR_PROMO`, `STATUS_PROMO`) VALUES
(1, 'MDK', 'Mudik', 'Promo berlaku selama masa libur Lebaran dan Nataru, \r\nmendapat diskon sebesar 25%.\r\n', 25, 'Tidak Aktif'),
(2, 'MHS', 'Pelajar & Mahasiswa', 'Promo bagi customer yang berusia mulai dari 17-22 tahun\r\ndan memiliki kartu identitas pelajar/mahasiswa, mendapat \r\ndiskon sebesar 20%.', 20, 'Tidak Aktif'),
(3, 'BDAY', 'Ulang Tahun', 'Promo bagi customer yang sedang berulang tahun, mendapat \ndiskon sebesar 15%.', 15, 'Aktif'),
(5, 'WKN', 'Weekend', 'Promo berlaku selama hari Sabtu dan Minggu, mendapat \r\ndiskon sebesar 10%.', 10, 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `shift`
--

CREATE TABLE `shift` (
  `ID_SHIFT` int(5) UNSIGNED ZEROFILL NOT NULL,
  `HARI_BEKERJA` varchar(25) DEFAULT NULL,
  `WAKTU_MULAI` time NOT NULL,
  `WAKTU_SELESAI` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `shift`
--

INSERT INTO `shift` (`ID_SHIFT`, `HARI_BEKERJA`, `WAKTU_MULAI`, `WAKTU_SELESAI`) VALUES
(00001, 'Selasa-1', '08:00:00', '15:00:00'),
(00002, 'Selasa-2', '15:00:00', '22:00:00'),
(00003, 'Rabu-1', '08:00:00', '15:00:00'),
(00004, 'Rabu-2', '15:00:00', '22:00:00'),
(00005, 'Kamis-1', '08:00:00', '15:00:00'),
(00006, 'Kamis-2', '15:00:00', '22:00:00'),
(00007, 'Jumat-1', '08:00:00', '15:00:00'),
(00008, 'Jumat-2', '15:00:00', '22:00:00'),
(00009, 'Sabtu-1', '08:00:00', '15:00:00'),
(00010, 'Sabtu-2', '15:00:00', '22:00:00'),
(00011, 'Minggu-1', '08:00:00', '15:00:00'),
(00012, 'Minggu-2', '15:00:00', '22:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `ID_TRANSAKSI` varchar(5) NOT NULL,
  `ID_CUSTOMER` int(3) UNSIGNED ZEROFILL NOT NULL,
  `ID_DRIVER` bigint(3) UNSIGNED ZEROFILL DEFAULT NULL,
  `ID_KENDARAAN` int(7) UNSIGNED ZEROFILL NOT NULL,
  `ID_PROMO` bigint(3) DEFAULT NULL,
  `ID_PEGAWAI` int(5) UNSIGNED ZEROFILL NOT NULL,
  `NO_KTP` char(17) DEFAULT NULL,
  `NO_SIM` char(17) DEFAULT NULL,
  `TANGGAL_SEWA` timestamp NULL DEFAULT NULL,
  `TANGGAL_SELESAI` timestamp NULL DEFAULT NULL,
  `TANGGAL_TRANSAKSI` timestamp NULL DEFAULT NULL,
  `METODE_PEMBAYARAN` varchar(10) DEFAULT NULL,
  `JUMLAH_PEMBAYARAN` float DEFAULT NULL,
  `HARGA_PROMO` float NOT NULL,
  `DENDA_PEMBAYARAN` float NOT NULL,
  `SUB_TOTAL` float NOT NULL,
  `STATUS_TRANSAKSI` varchar(50) NOT NULL,
  `RATING_DRIVER` decimal(3,0) NOT NULL,
  `JENIS_TRANSAKSI` varchar(50) NOT NULL,
  `FORMAT_TRANSAKSI` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`ID_TRANSAKSI`, `ID_CUSTOMER`, `ID_DRIVER`, `ID_KENDARAAN`, `ID_PROMO`, `ID_PEGAWAI`, `NO_KTP`, `NO_SIM`, `TANGGAL_SEWA`, `TANGGAL_SELESAI`, `TANGGAL_TRANSAKSI`, `METODE_PEMBAYARAN`, `JUMLAH_PEMBAYARAN`, `HARGA_PROMO`, `DENDA_PEMBAYARAN`, `SUB_TOTAL`, `STATUS_TRANSAKSI`, `RATING_DRIVER`, `JENIS_TRANSAKSI`, `FORMAT_TRANSAKSI`) VALUES
('25', 001, 7868, 0001112, NULL, 00001, '1402020607084494', NULL, '2022-02-05 17:00:00', '2022-02-07 17:00:00', '2022-02-08 17:00:00', 'Tunai', 1400000, 0, 0, 140000, 'Lunas', '93', '', ''),
('28', 003, 7887, 0001116, NULL, 00005, '1412320607087898', NULL, '2022-03-11 17:00:00', '2022-03-12 17:00:00', '2022-03-13 17:00:00', 'Transfer', 810000, 729000, 0, 729000, 'Lunas', '89', '', ''),
('30', 004, 7897, 0001216, NULL, 00005, '1421020607087640', NULL, '2022-03-31 17:00:00', '2022-04-03 17:00:00', '2022-04-04 17:00:00', 'Transfer', 1020000, 0, 0, 1020000, 'Lunas belum verifikasi', '87', '', ''),
('31', 002, 7896, 0001216, NULL, 00005, '1421020607087543', NULL, '2022-04-05 17:00:00', '2022-04-07 17:00:00', '2022-04-08 17:00:00', 'Tunai', 790000, 0, 0, 790000, 'Lunas', '85', '', ''),
('32', 005, 8322, 0001277, NULL, 00001, '1421020607085541', NULL, '2022-04-17 17:00:00', '2022-04-18 17:00:00', '2022-04-21 17:00:00', 'Transfer', 2170000, 0, 0, 2170000, 'Lunas', '98', '', ''),
('39', 001, 7887, 0001112, NULL, 00004, '1402020607084494', NULL, '2022-03-18 17:00:00', '2022-02-19 17:00:00', '2022-03-20 17:00:00', 'Tunai', 1100000, 0, 0, 1100000, 'Lunas', '95', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID_CUSTOMER`);

--
-- Indeks untuk tabel `detail_shift`
--
ALTER TABLE `detail_shift`
  ADD PRIMARY KEY (`ID_PEGAWAI`,`ID_SHIFT`),
  ADD KEY `FK_RELATION_272` (`ID_SHIFT`);

--
-- Indeks untuk tabel `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`ID_DRIVER`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`ID_KENDARAAN`),
  ADD KEY `RELATION_206_FK` (`ID_MITRA`);

--
-- Indeks untuk tabel `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`ID_MITRA`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`ID_PEGAWAI`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`ID_PROMO`);

--
-- Indeks untuk tabel `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`ID_SHIFT`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`ID_TRANSAKSI`),
  ADD KEY `RELATION_204_FK` (`ID_CUSTOMER`),
  ADD KEY `RELATION_205_FK` (`ID_DRIVER`),
  ADD KEY `RELATION_207_FK` (`ID_KENDARAAN`),
  ADD KEY `RELATION_209_FK` (`ID_PROMO`),
  ADD KEY `RELATION_210_FK` (`ID_PEGAWAI`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `ID_CUSTOMER` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `driver`
--
ALTER TABLE `driver`
  MODIFY `ID_DRIVER` bigint(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8330;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `ID_KENDARAAN` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1325;

--
-- AUTO_INCREMENT untuk tabel `mitra`
--
ALTER TABLE `mitra`
  MODIFY `ID_MITRA` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `ID_PEGAWAI` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `ID_PROMO` bigint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `shift`
--
ALTER TABLE `shift`
  MODIFY `ID_SHIFT` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_shift`
--
ALTER TABLE `detail_shift`
  ADD CONSTRAINT `FK_RELATION_272` FOREIGN KEY (`ID_SHIFT`) REFERENCES `shift` (`ID_SHIFT`),
  ADD CONSTRAINT `FK_RELATION_2722` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `FK_RELATION_206` FOREIGN KEY (`ID_MITRA`) REFERENCES `mitra` (`ID_MITRA`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `FK_CUSTOMER` FOREIGN KEY (`ID_CUSTOMER`) REFERENCES `customer` (`ID_CUSTOMER`),
  ADD CONSTRAINT `FK_DRIVER` FOREIGN KEY (`ID_DRIVER`) REFERENCES `driver` (`ID_DRIVER`),
  ADD CONSTRAINT `FK_PROMO` FOREIGN KEY (`ID_PROMO`) REFERENCES `promo` (`ID_PROMO`),
  ADD CONSTRAINT `FK_RELATION_207` FOREIGN KEY (`ID_KENDARAAN`) REFERENCES `kendaraan` (`ID_KENDARAAN`),
  ADD CONSTRAINT `FK_RELATION_210` FOREIGN KEY (`ID_PEGAWAI`) REFERENCES `pegawai` (`ID_PEGAWAI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
