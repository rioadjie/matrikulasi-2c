-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2022 pada 05.38
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrikulasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `acc_ujian`
--

CREATE TABLE `acc_ujian` (
  `Id` int(11) NOT NULL,
  `Dosen_Penguji` varchar(45) NOT NULL,
  `Jadwal_Ujian` datetime NOT NULL,
  `ACC_ujiancol` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `acc_ujian`
--

INSERT INTO `acc_ujian` (`Id`, `Dosen_Penguji`, `Jadwal_Ujian`, `ACC_ujiancol`) VALUES
(1, 'Lukman Hakim, S.T., M.T', '2022-12-15 10:00:00', 'acc');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota_kelompok`
--

CREATE TABLE `anggota_kelompok` (
  `Id` int(11) NOT NULL,
  `Nama_Anggota` varchar(50) NOT NULL,
  `Nim` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota_kelompok`
--

INSERT INTO `anggota_kelompok` (`Id`, `Nama_Anggota`, `Nim`) VALUES
(1, 'ken', '1092'),
(2, 'Yuniar Friska', '1091'),
(3, 'Bias Elois', '1084');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `Nama_dosen` varchar(45) NOT NULL,
  `Nik` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `Nama_dosen`, `Nik`) VALUES
(1, 'Farisqi Panduardi, S.T., M.Kom', '2017.67.10'),
(3, 'Dianni Yusuf, S.Kom., M.Kom', '190008765421'),
(4, 'Lutfi Hakim, S.T., M.T.', '2018.10.25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lembar_kerja`
--

CREATE TABLE `lembar_kerja` (
  `Id` int(11) NOT NULL,
  `Tanggal` datetime NOT NULL,
  `File` varchar(45) NOT NULL,
  `Anggota_Kelompok_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lembar_kerja`
--

INSERT INTO `lembar_kerja` (`Id`, `Tanggal`, `File`, `Anggota_Kelompok_Id`) VALUES
(6, '2022-11-19 07:50:00', 'IMG_2897.JPG', 2),
(10, '2022-11-21 07:36:00', '1639631325775.jpg', 3),
(11, '2022-11-21 10:06:00', 'pkm.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Id` int(11) NOT NULL,
  `Nama_mahasiswa` varchar(45) NOT NULL,
  `Nim` varchar(45) NOT NULL,
  `Kelas` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Id`, `Nama_mahasiswa`, `Nim`, `Kelas`, `Email`, `Alamat`) VALUES
(1, 'Rio Adjie Wiguna', '362155401085', '2C', 'rio@gmail.com', 'Singojuruh'),
(2, 'Ken Affila Syach M', '362155401092', '2C', 'ken@gmail.com', 'Giri'),
(3, 'Yuniar Friska Aprilia', '362155401091', '2C', 'yuniar@gmail.com', 'Ketapang'),
(7, 'Bias Elois Firdaus', '362155401084', '2C', 'bias@gmail.com', 'Grajagan, Banyuwangi'),
(8, 'Aidika Akbar Assufa', '362155401063', '2C', 'dika@gmail.com', 'Srono'),
(9, 'Dimas Agung B', '362155101071', '2C', 'dimas@gmail.com', 'Muncar'),
(10, 'Achmad Sandi Aji P', '362155401060', '2C', 'sandi@gmail.com', 'Licin'),
(11, 'Imam Syafii', '362155401065', '2C', 'imam@gmail.com', 'Srono'),
(12, 'Doni Wirawan', '362155401065', '2C', 'doni@gmail.com', 'Muncar'),
(14, 'Rayhan Nashrullah', '362155401066', '2C', 'rayhan@gmail.com', 'Muncar'),
(15, 'Syauqi Alfurqon', '362155401064', '2C', 'sayuki@gmail.com', 'Banyuwangi'),
(16, 'Wahyu Eka', '362155401075', '2C', 'wahyu@gmail.com', 'Srono');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `Id` int(11) NOT NULL,
  `Nilai_pembimbing_lapangan` varchar(45) NOT NULL,
  `Nilai_pembimbing_KP` varchar(45) NOT NULL,
  `Nilai_penguji` varchar(45) NOT NULL,
  `Bukti_nilai_pembimbing_lapangan` varchar(45) NOT NULL,
  `Pendaftaran_ujian_KP_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`Id`, `Nilai_pembimbing_lapangan`, `Nilai_pembimbing_KP`, `Nilai_penguji`, `Bukti_nilai_pembimbing_lapangan`, `Pendaftaran_ujian_KP_Id`) VALUES
(1, 'B+', 'B+', 'B+', 'nilai_rio.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_kp`
--

CREATE TABLE `pendaftaran_kp` (
  `Id` int(11) NOT NULL,
  `Tempatkp` varchar(45) NOT NULL,
  `Alamatkp` varchar(45) NOT NULL,
  `Tanggal_mulai` datetime NOT NULL,
  `Tanggal_selesai` datetime NOT NULL,
  `Proposal` varchar(45) NOT NULL,
  `Anggota_Kelompok_Id` int(11) NOT NULL,
  `Dosen_Id` int(11) NOT NULL,
  `Perusahaan_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_kp`
--

INSERT INTO `pendaftaran_kp` (`Id`, `Tempatkp`, `Alamatkp`, `Tanggal_mulai`, `Tanggal_selesai`, `Proposal`, `Anggota_Kelompok_Id`, `Dosen_Id`, `Perusahaan_Id`) VALUES
(6, 'PT SEJAHTERA ABADI', 'Malang', '2022-11-21 06:31:00', '2023-03-25 06:31:00', '1C_Catatan TaTib saat Offline.pdf', 2, 1, 1),
(10, 'Pt shoope', 'jakarta', '2022-11-30 07:04:00', '2022-12-31 07:04:00', '8e115a25-cf6e-48af-af99-7b93e67d7645.pdf', 2, 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_ujian_kp`
--

CREATE TABLE `pendaftaran_ujian_kp` (
  `Id` int(11) NOT NULL,
  `Laporan_KP` varchar(45) NOT NULL,
  `Jadwal_ujian` datetime NOT NULL,
  `Pendaftaran_KP_Id` int(11) NOT NULL,
  `ACC_ujian_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_ujian_kp`
--

INSERT INTO `pendaftaran_ujian_kp` (`Id`, `Laporan_KP`, `Jadwal_ujian`, `Pendaftaran_KP_Id`, `ACC_ujian_Id`) VALUES
(1, 'Logo kelas.png', '2022-12-15 10:00:00', 6, 1),
(3, 'logo-poliwangi.png', '2022-11-30 15:20:00', 10, 1),
(5, 'Screenshot 2022-03-01 133218.png', '2022-11-26 15:30:00', 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `Id` int(11) NOT NULL,
  `Nama_Perusahaan` varchar(45) NOT NULL,
  `Alamat` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Telephone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`Id`, `Nama_Perusahaan`, `Alamat`, `Email`, `Telephone`) VALUES
(1, 'PT Karya Cipta', 'Jl Diponegoro no.57', 'ptkaryacipta@karyacipta.co.id', '(0331) 235674'),
(2, 'PT Sejahtera', 'Malang', 'sejahtera@sejahtera.co.id', '081234567890'),
(4, 'Pt Sentosa', 'Magelang', 'sensosa@gmail.com', '089765321345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_role`) VALUES
(1, 'admin', '1234', 1),
(2, 'mahasiswa', '1234', 2),
(3, 'dosen', '1234', 3),
(4, 'koorkp', '1234', 4),
(5, 'rio', '1234', 2),
(6, 'Adjie', '1234', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'Mahasiswa'),
(3, 'Dosen'),
(4, 'Koordinator KP');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `acc_ujian`
--
ALTER TABLE `acc_ujian`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `anggota_kelompok`
--
ALTER TABLE `anggota_kelompok`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lembar_kerja`
--
ALTER TABLE `lembar_kerja`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `pendaftaran_kp`
--
ALTER TABLE `pendaftaran_kp`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Anggota_Kelompok_Id` (`Anggota_Kelompok_Id`),
  ADD KEY `Dosen_Id` (`Dosen_Id`),
  ADD KEY `Perusahaan_Id` (`Perusahaan_Id`);

--
-- Indeks untuk tabel `pendaftaran_ujian_kp`
--
ALTER TABLE `pendaftaran_ujian_kp`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Pendaftaran_KP_Id` (`Pendaftaran_KP_Id`),
  ADD KEY `ACC_ujian_Id` (`ACC_ujian_Id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`Id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_role` (`id_role`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_role`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `acc_ujian`
--
ALTER TABLE `acc_ujian`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `anggota_kelompok`
--
ALTER TABLE `anggota_kelompok`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lembar_kerja`
--
ALTER TABLE `lembar_kerja`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_kp`
--
ALTER TABLE `pendaftaran_kp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_ujian_kp`
--
ALTER TABLE `pendaftaran_ujian_kp`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftaran_kp`
--
ALTER TABLE `pendaftaran_kp`
  ADD CONSTRAINT `pendaftaran_kp_ibfk_1` FOREIGN KEY (`Anggota_Kelompok_Id`) REFERENCES `anggota_kelompok` (`Id`),
  ADD CONSTRAINT `pendaftaran_kp_ibfk_2` FOREIGN KEY (`Dosen_Id`) REFERENCES `dosen` (`id`),
  ADD CONSTRAINT `pendaftaran_kp_ibfk_3` FOREIGN KEY (`Perusahaan_Id`) REFERENCES `perusahaan` (`Id`);

--
-- Ketidakleluasaan untuk tabel `pendaftaran_ujian_kp`
--
ALTER TABLE `pendaftaran_ujian_kp`
  ADD CONSTRAINT `pendaftaran_ujian_kp_ibfk_1` FOREIGN KEY (`Pendaftaran_KP_Id`) REFERENCES `pendaftaran_kp` (`Id`),
  ADD CONSTRAINT `pendaftaran_ujian_kp_ibfk_2` FOREIGN KEY (`ACC_ujian_Id`) REFERENCES `acc_ujian` (`Id`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `user_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
