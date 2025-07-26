-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2025 at 08:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_buku` varchar(150) NOT NULL,
  `foto_buku` varchar(200) DEFAULT 'default.jpg',
  `deskripsi` text NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahun` int(11) NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `id_kategori`, `nama_buku`, `foto_buku`, `deskripsi`, `penulis`, `penerbit`, `tahun`, `jumlah_halaman`, `harga`, `stok`) VALUES
(1, 1, 'Laskar Pelangi', 'laskar.jpg', 'Kisah anak-anak dari Belitung yang berjuang menggapai mimpi', 'Andrea Hirata', 'Bentang Pustaka', 2005, 529, 75000, 12),
(2, 1, 'Bumi', 'bumi.jpg', 'Petualangan Raib dan teman-temannya menjelajahi dunia paralel', 'Tere Liye', 'Gramedia', 2014, 400, 88000, 18),
(3, 2, 'Sapiens', 'sapiens.png', 'Sejarah singkat umat manusia dari zaman purba hingga modern', 'Yuval Noah Harari', 'Harvill Secker', 2011, 498, 120000, 8),
(4, 2, 'Atomic Habits', 'atomic.jpg', 'Cara mengubah kebiasaan kecil menjadi perubahan besar', 'James Clear', 'Penguin', 2018, 320, 95000, 15),
(5, 3, 'Clean Code', 'cleancode.jpg', 'Panduan menulis kode yang bersih dan mudah dipelihara', 'Robert C. Martin', 'Prentice Hall', 2008, 464, 135000, 6),
(6, 3, 'JavaScript: The Good Parts', 'js.jpg', 'Intisari terbaik dari bahasa JavaScript', 'Douglas Crockford', 'O\'Reilly Media', 2008, 176, 99000, 10),
(7, 4, 'The Lean Startup', 'lean.png', 'Cara memulai bisnis dengan pendekatan efisien', 'Eric Ries', 'Crown Business', 2011, 336, 112000, 9),
(8, 4, 'Rich Dad Poor Dad', 'richdad.jpg', 'Pelajaran finansial dari dua sosok ayah', 'Robert T. Kiyosaki', 'Plata Publishing', 1997, 207, 87000, 11),
(9, 5, 'Sejarah Indonesia Modern', 'sejarah1.jpg', 'Transformasi Indonesia sejak masa kolonial', 'MC Ricklefs', 'Macmillan', 1981, 568, 110000, 5),
(10, 5, 'Jejak Langkah', 'jejak.jpg', 'Bagian dari tetralogi Buru tentang perjuangan Minke', 'Pramoedya Ananta Toer', 'Lentera Dipantara', 1985, 480, 95000, 4),
(11, 1, 'Negeri 5 Menara', 'menara.jpg', 'Perjalanan mimpi enam santri dari pesantren modern', 'Ahmad Fuadi', 'Gramedia', 2009, 420, 80000, 10),
(12, 1, 'Pulang', 'pulang.jpg', 'Kisah pengasingan dan pencarian identitas', 'Leila S. Chudori', 'Kepustakaan Populer Gramedia', 2012, 460, 89000, 7),
(13, 2, 'Filosofi Teras', 'teras.jpg', 'Stoa dan cara berpikir tenang menghadapi hidup', 'Henry Manampiring', 'Kompas', 2018, 344, 78000, 12),
(14, 3, 'Python Crash Course', 'python.jpg', 'Belajar Python dari dasar hingga proyek nyata', 'Eric Matthes', 'No Starch Press', 2015, 560, 120000, 6),
(15, 3, 'Rework', 'rework.jpg', 'Cara membangun bisnis secara berbeda', 'Jason Fried', 'Crown Publishing', 2010, 288, 99000, 9),
(16, 4, 'Think and Grow Rich', 'think.jpg', 'Rahasia sukses finansial melalui kekuatan pikiran', 'Napoleon Hill', 'The Ralston Society', 1937, 320, 79000, 13),
(17, 5, 'Napoleon: A Life', 'napoleon.jpg', 'Biografi lengkap Napoleon Bonaparte', 'Andrew Roberts', 'Penguin', 2014, 976, 140000, 3),
(18, 1, 'Dilan 1990', 'dilan.jpg', 'Romansa remaja tahun 90-an di Bandung', 'Pidi Baiq', 'Pastel Books', 2014, 332, 65000, 14),
(19, 2, 'Mindset', 'mindset.jpg', 'Perbedaan fixed vs growth mindset', 'Carol S. Dweck', 'Random House', 2006, 320, 88000, 6),
(20, 4, 'The Psychology of Money', 'money.jpg', 'Bagaimana perilaku memengaruhi keputusan finansial', 'Morgan Housel', 'Harriman House', 2020, 252, 87000, 8),
(21, 3, 'HTML and CSS: Design and Build Websites', 'htmlcss.jpg', 'Panduan visual untuk membangun situs web', 'Jon Duckett', 'Wiley', 2011, 490, 108000, 5),
(22, 5, 'Sejarah Peradaban Dunia', 'peradaban.jpg', 'Jejak peradaban manusia sejak zaman kuno', 'Eko Prasetyo', 'Erlangga', 2010, 380, 82000, 7),
(23, 4, 'Zero to One', 'zero.jpg', 'Peluang unik membangun bisnis startup', 'Peter Thiel', 'Crown Business', 2014, 224, 93000, 10),
(24, 2, 'How to Win Friends & Influence People', 'friends.jpg', 'Tips bersosialisasi dan memengaruhi orang', 'Dale Carnegie', 'Simon & Schuster', 1936, 291, 75000, 15),
(25, 5, 'Indonesia Menggugat', 'gugat.jpg', 'Pidato legendaris Soekarno di pengadilan kolonial', 'Ir. Soekarno', 'Balai Pustaka', 1930, 112, 67000, 6),
(26, 1, 'Orang-Orang Biasa', 'biasa.jpg', 'Tentang kehidupan sederhana dan mimpi besar', 'Andrea Hirata', 'Bentang Pustaka', 2019, 352, 86000, 9),
(27, 3, 'The Pragmatic Programmer', 'pragmatic.jpg', 'Prinsip penting jadi programmer profesional', 'Andy Hunt', 'Addison-Wesley', 1999, 352, 125000, 5),
(28, 2, 'The Subtle Art of Not Giving a F*ck', 'subtle.jpg', 'Cara berpikir realistis dan apa adanya', 'Mark Manson', 'Harper', 2016, 224, 87000, 12),
(29, 4, 'Start With Why', 'why.jpg', 'Menginspirasi orang dengan alasan yang kuat', 'Simon Sinek', 'Portfolio', 2009, 256, 88000, 10),
(30, 5, 'Revolusi Indonesia', 'revolusi.jpg', 'Transformasi sosial dan politik pasca kemerdekaan', 'George McTurnan Kahin', 'Cornell University Press', 1952, 450, 102000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Fiksi'),
(2, 'Non-Fiksi'),
(3, 'Teknologi'),
(4, 'Bisnis'),
(5, 'Sejarah'),
(6, 'Psikologi'),
(7, 'Self Improvement'),
(8, 'Pendidikan'),
(9, 'Komik'),
(10, 'Agama');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `kode_order` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `tgl_order` date NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_order` enum('Pending','Menunggu konfirmasi','Dikonfirmasi','Selesai') NOT NULL DEFAULT 'Pending',
  `bukti_bayar` varchar(200) DEFAULT NULL,
  `nomor_resi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `kode_order`, `id_user`, `id_buku`, `jumlah`, `tgl_order`, `total_harga`, `status_order`, `bukti_bayar`, `nomor_resi`) VALUES
(4, 'ORD619372211', 2, 18, 1, '2025-07-25', 65000, 'Pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `status` enum('aktif','non aktif') DEFAULT 'non aktif',
  `level` enum('admin','user') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `password`, `alamat`, `no_telp`, `kode_pos`, `status`, `level`) VALUES
(2, 'User Satu', 'user@mail.com', '95c946bf622ef93b0a211cd0fd028dfdfcf7e39e', 'Jl. Melati No. 5, Jakarta', '085612345678', '10230', 'aktif', 'user'),
(3, 'admin', 'admin@mail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '', '', '', 'aktif', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD UNIQUE KEY `kode_order` (`kode_order`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_buku` (`id_buku`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD CONSTRAINT `tb_buku_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`) ON DELETE CASCADE;

--
-- Constraints for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tb_buku` (`id_buku`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
