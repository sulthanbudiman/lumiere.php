-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lumiere`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cstm` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(100) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `durasi` varchar(100) NOT NULL,
  `tahun_rilis` varchar(100) NOT NULL,
  `sutradara` varchar(255) NOT NULL,
  `poster` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `deskripsi`, `genre`, `durasi`, `tahun_rilis`, `sutradara`, `poster`, `harga`) VALUES
(1, 'Kukira Kau Rumah', 'PRAM, seorang pemuda yang kesepian, yang tak dapat bentuk rasa kasih dari kedua orang tuanya.', 'Drama', '1 Jam 30 Menit', '3 Februari 2022', 'Umay Shahab', 'Kukira Kau Rumah.jpeg', 30000),
(2, 'Jalan Yang Jauh Jangan Lupa Pulang', 'Di London, kota yang bagi Aurora penuh harapan dan berjuta kemungkinan untuk wujudkan impian, Ia menemukan tambatan hati yang memiliki visi yang sejalan dengannya, Jem (Ganindra Bimo).', 'Drama', '106 Menit', '2 Februari 2023', 'Angga Dwimas', 'JYJJLP.jpeg', 30000),
(3, 'Mencuri Raden Saleh', 'Pencurian terbesar abad ini tinggal menghitung hari menjelang tanggal eksekusinya. Komplotan sudah lengkap dan siap menjalankan misi untuk mencuri lukisan sang maestro, Raden Saleh, yang berjudul Penangkapan Diponegoro.', 'Drama', '2 Jam 34 Menit', '25 Agustus 2022', 'Angga Dwimas', 'Mencuri Raden Saleh.jpg\r\n', 30000),
(4, 'Nanti Kita Cerita Tentang Hari Ini', 'Setiap keluarga punya rahasia. Angkasa, Aurora dan Awan adalah kakak beradik yang hidup dalam keluarga yang tampak bahagia. ', 'Drama', '2 Jam 1 Menit', '2 Januari 2020', 'Angga Dwimas', 'NKCTHII.JPEG', 30000),
(5, 'Petualangan Sherina 2', 'Petualangan Sherina 2 adalah film musikal-komedi-laga-petualangan Indonesia tahun 2023 yang disutradarai oleh Riri Riza dan diproduseri oleh Mira Lesmana.', 'Musikal', '2 Jam 6 Menit', '28 September 2023', 'Riri RIza', 'Petualangan Sherina 2.jpg', 30000),
(6, 'Pamali: Dusun Pocong', 'Tiga petugas medis dan dua penggali kubur ditugaskan untuk membantu sebuah dusun terpencil yang baru terkena wabah.', 'Horor', '1 Jam 39 Menit', '12 Oktober 2023', 'Bobby Prasetyo', 'Pamali Dusun Pocong.jpg', 30000),
(7, 'Mariposa', 'Mariposa (Kupu-kupu) seperti Iqbal, Acha mengejar tapi Iqbal menghindar. Iqbal, seorang cowok cakep, pintar dan dikenal berhati dingin.', 'Roman', '1 Jam 58 Menit', '31 Desember 2020', 'Fajar Bustomi', 'Mariposa.jpg', 30000),
(8, 'Ketika Berhenti Disini', 'Dita, seorang desainer grafis dengan idealisme tinggi, yang memiliki rasa takut akan kegagalan dipertemukan dengan Ed, seorang arsitek. ', 'Drama', '120 menit', '27 Juli 2023', 'Umay Shahab', 'Ketika Berhenti Disini.jpg', 30000),
(9, 'Toy Story 4', 'Woody selalu merasa percaya diri akan posisinya di dunia, dan prioritasnya adalah menjaga anaknya, baik itu Andy atau Bonnie.', 'Animasi', '1 Jam 40 Menit', '21 Juni 2019', 'Josh Cooley', 'Toy Story.jpeg', 30000),
(10, 'Sewu Dino', 'Ditengah kesulitan ekonomi, Sri diterima bekerja untuk keluarga Atmojo dengan bayaran yang tinggi, karena keunikan yang ia miliki, yaitu lahir pada hari Jumat Kliwon.', 'Horor', '2 Jam 1 Menit', '19 April 2023', 'Kimo Stamboel', 'Sewu Dino.jpg', 30000),
(11, 'Frozen II', 'Anna, Elsa, Kristoff, Olaf dan Sven pergi meninggalkan Arendelle untuk melakukan perjalanan ke sebuah tempat asing dan penuh keajaiban.', 'Animasi', '1 Jam 43 Menit', '20 November 2019', 'Jenifer Lee', 'Frozen 2.jpeg', 30000),
(12, 'Encanto', 'Encanto menceritakan kisah keluarga Madrigals yang luar biasa, yang hidup tersembunyi di pegunungan Kolombia, di tempat yang menakjubkan dan mempesona yang disebut Encanto.', 'Animasi', '1 Jam 49 Menit', '24 November 2021', 'Byron Howard', 'Encanto.jpeg', 30000),
(13, 'Yowis Ben 3', 'bla bla bla', 'Drama Musikal', '1 Jam 53 menit', '25 November 2021', 'Bayu Skak, Fajar Nugros', 'yowis ben 3.jpg', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `no_seat` varchar(100) NOT NULL,
  `status` enum('kosong','terisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`no_seat`, `status`) VALUES
('a1', 'terisi'),
('a2', 'kosong'),
('a3', 'kosong'),
('a4', 'kosong'),
('a5', 'kosong'),
('a6', 'kosong'),
('a7', 'kosong'),
('a8', 'kosong'),
('a9', 'kosong'),
('a10', 'kosong'),
('b1', 'kosong'),
('b2', 'kosong'),
('b3', 'kosong'),
('b4', 'kosong'),
('b5', 'kosong'),
('b6', 'kosong'),
('b7', 'kosong'),
('b8', 'kosong'),
('b9', 'kosong'),
('b10', 'kosong'),
('c1', 'kosong'),
('c2', 'kosong'),
('c3', 'kosong'),
('c4', 'kosong'),
('c5', 'kosong'),
('c6', 'kosong'),
('c7', 'kosong'),
('c8', 'kosong'),
('c9', 'kosong'),
('c10', 'kosong'),
('d1', 'kosong'),
('d2', 'kosong'),
('d3', 'kosong'),
('d4', 'kosong'),
('d5', 'kosong'),
('d6', 'kosong'),
('d7', 'kosong'),
('d8', 'kosong'),
('d9', 'kosong'),
('d10', 'kosong'),
('e1', 'kosong'),
('e2', 'kosong'),
('e3', 'kosong'),
('e4', 'kosong'),
('e5', 'kosong'),
('e6', 'kosong'),
('e7', 'kosong'),
('e8', 'kosong'),
('e9', 'kosong'),
('e10', 'kosong');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(100) NOT NULL,
  `nama_film` varchar(255) NOT NULL,
  `jadwal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_ruang` int(100) NOT NULL,
  `harga` int(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `id_cstm` int(100) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `id_tiket` int(100) NOT NULL,
  `id_user` int(110) NOT NULL,
  `jumlah` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cstm`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cstm` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
