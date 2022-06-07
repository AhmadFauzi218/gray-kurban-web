-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 02:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutqurban`
--

CREATE TABLE `tbl_aboutqurban` (
  `id_aboutqurban` int(11) NOT NULL,
  `deskripsi2` text NOT NULL,
  `deskripsi3` text NOT NULL,
  `foto` varchar(250) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aboutqurban`
--

INSERT INTO `tbl_aboutqurban` (`id_aboutqurban`, `deskripsi2`, `deskripsi3`, `foto`, `link`) VALUES
(1, 'Apa itu Qurban ?<strong>Apa Saja Hukum Qurban Dalam Hadis</strong>', ' Apa itu Kurban atau Qurban? Kurban atau Qurban (dalam bahasa Arab الأضحية,التضحية) secara harfiah memiliki arti hewan sembelihan. Ibadah qurban (kurban) adalah ibadah menyembelih hewan ternak yang merupakan salah satu bagian dari syiar Islam yang disyariatkan dalam Al Quran.', 'Apa-itu-kurban-pengertian-kurban.jpg', 'https://www.youtube.com/watch?v=3dZeIWX0IAU');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id_contact` int(11) NOT NULL,
  `location` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id_contact`, `location`, `email`, `no_hp`) VALUES
(1, 'Jl. Sultan Ageng Tirtayasa', 'qurban@gmail.com', '+08 896560909');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `id_inbox` int(11) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `email` varchar(50) NOT NULL,
  `deskripsi` varchar(120) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`id_inbox`, `fullname`, `email`, `deskripsi`, `pesan`) VALUES
(1, 'Ahmad Fauzi', 'Ahmad@ahmad', 'bnbn', 'bnbn'),
(2, 'Ahmad', 'ahmad@ahmad', 'ceo', 'websitenya sangat bagus'),
(3, 'fauzi', 'fauzi@fauzi', 'fauzi', 'Bisa cod ?'),
(4, 'bedul', 'bedul@bedul', 'Pembeli', 'Dmana Tempatnya ?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kemudahanlainnya`
--

CREATE TABLE `tbl_kemudahanlainnya` (
  `id_kemitraan` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `foto` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kemudahanlainnya`
--

INSERT INTO `tbl_kemudahanlainnya` (`id_kemitraan`, `judul`, `foto`) VALUES
(2, 'Jd.Id', '1a1250d4-logo-jd_id_.png'),
(3, 'Lazada', '12f3d344-logo-lazada-300x79.jpg'),
(4, 'Bukalapak', 'bc759853-logo-bukalapak.jpg'),
(5, 'Tokopedia', '39b786aa-logo-tokopedia2.jpg'),
(6, 'Blibli', '1a2b50e9-logo-blibli-300x108.png'),
(7, 'Shopee', '2cfb5f0a-logo-shopee-300x97.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaranqurban`
--

CREATE TABLE `tbl_pendaftaranqurban` (
  `id_qurban` int(11) NOT NULL,
  `kode_hewan_qurban` varchar(250) NOT NULL,
  `nama_hewan_qurban` varchar(120) NOT NULL,
  `jenis_hewan_qurban` varchar(120) NOT NULL,
  `harga_hewan_qurban` varchar(120) NOT NULL,
  `stok_hewan_qurban` int(12) NOT NULL,
  `foto` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaranqurban`
--

INSERT INTO `tbl_pendaftaranqurban` (`id_qurban`, `kode_hewan_qurban`, `nama_hewan_qurban`, `jenis_hewan_qurban`, `harga_hewan_qurban`, `stok_hewan_qurban`, `foto`) VALUES
(2, 'G-1201', 'Sapi/Lembuu', 'Limousin', '40000000', 10, 'sapi1.jpeg'),
(3, 'G-1202', 'Kambing', 'Sehat', '1000000', 10, 'kambing-putih-k_1626855671.jpg'),
(4, 'G-1203', 'Sapi', 'Sapi Holstein', '1200000', 7, 'SapiHolstein.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` int(11) NOT NULL,
  `title_website` text NOT NULL,
  `title_paragraf` text NOT NULL,
  `welcomeparagraf` text NOT NULL,
  `author` varchar(15) NOT NULL,
  `coppyright` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(40) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id_profile`, `title_website`, `title_paragraf`, `welcomeparagraf`, `author`, `coppyright`, `description`, `keywords`, `foto`) VALUES
(1, 'Qurban', 'Qurban Lebih Hemat', 'Jual Hewan Qurban<br>Sehat | Gemuk | Halal.', 'Qurban', 'Qurban', 'Designed by KambingGroup', 'Qurban', 'LOGO-QURBAN-1-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id_testimonial` int(11) NOT NULL,
  `fullname_testimonial` varchar(50) NOT NULL,
  `description_testimonial` text NOT NULL,
  `detail_testimonial` text NOT NULL,
  `foto` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id_testimonial`, `fullname_testimonial`, `description_testimonial`, `detail_testimonial`, `foto`) VALUES
(3, 'Ahmad Riziq', 'Managerr', 'Qurban ini sangat membantu kita Di Akhirat', 'profil4.jpg'),
(4, 'Ahmad Fauzi', 'Mahasiswa UCIC', 'Beli qurban disini sangat aman', 'WhatsApp_Image_2022-05-30_at_13_14_14.jpeg'),
(7, 'Laurent', 'CEO', 'Qurban Sangat Bermutu', 'team-2.jpg'),
(8, 'Bedul', 'Seniman', 'Beli Qurban Disini Sangat Enak', 'team-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_whyqurban`
--

CREATE TABLE `tbl_whyqurban` (
  `id_whyqurban` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_whyqurban`
--

INSERT INTO `tbl_whyqurban` (`id_whyqurban`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'Sesuai Syariah', 'MUI membolehkan untuk menyimpan sebagian daging kurban yang telah diolah & diawetkan untuk didistribusikan kepada yang lebih membutuhkan', 'Icon_Sharia.png'),
(2, 'Tepat', 'Pilihan tepat dalam berqurban dimasa pandemic Covid-19 tanpa hadirkan kerumunan', 'Icon_Sharia1.png'),
(3, 'Cermat', 'Cara cermat untuk membantu masyarakat yang terdampak Covid-19 dengan menyediakan cadangan pangan yang bergizi', 'Icon_Sharia2.png'),
(4, 'Memberdayakan', 'Berqurban sekaligus memberdayakan karena hewan qurban berasal dari peternak lokal', 'Icon_Sharia3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(1, 'Admin', 'admin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 1),
(2, 'User', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 2),
(3, 'Reza Nurfachmi', 'reza@gmail.com', '$2y$10$qtceD3ohWvYVWdS.CEic8uxZ1jOMJlKdKziF86h76X9CDRbHe4/R2', 2),
(4, 'ahmadfauzi', 'ahmadfauzi@gmail.com', '$2y$10$WW79.dXXCkva8Txcg.Lre.RAP4OCsD5mK/aJUpLDSlphkU5opldcS', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_aboutqurban`
--
ALTER TABLE `tbl_aboutqurban`
  ADD PRIMARY KEY (`id_aboutqurban`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `tbl_kemudahanlainnya`
--
ALTER TABLE `tbl_kemudahanlainnya`
  ADD PRIMARY KEY (`id_kemitraan`);

--
-- Indexes for table `tbl_pendaftaranqurban`
--
ALTER TABLE `tbl_pendaftaranqurban`
  ADD PRIMARY KEY (`id_qurban`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indexes for table `tbl_whyqurban`
--
ALTER TABLE `tbl_whyqurban`
  ADD PRIMARY KEY (`id_whyqurban`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`),
  ADD KEY `login_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_aboutqurban`
--
ALTER TABLE `tbl_aboutqurban`
  MODIFY `id_aboutqurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `id_inbox` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kemudahanlainnya`
--
ALTER TABLE `tbl_kemudahanlainnya`
  MODIFY `id_kemitraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pendaftaranqurban`
--
ALTER TABLE `tbl_pendaftaranqurban`
  MODIFY `id_qurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id_testimonial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_whyqurban`
--
ALTER TABLE `tbl_whyqurban`
  MODIFY `id_whyqurban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `login_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
