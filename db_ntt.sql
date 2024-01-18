-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2024 at 07:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ntt`
--

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id` int(11) NOT NULL,
  `tempat_wisata` varchar(255) DEFAULT NULL,
  `isi_konten` text DEFAULT NULL,
  `map_url` varchar(50) DEFAULT NULL,
  `Gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id`, `tempat_wisata`, `isi_konten`, `map_url`, `Gambar`) VALUES
(2, 'Pulau Padar, Surga Bahari yang Menakjubkan', 'Pulau Padar merupakan salah satu pulau yang terletak di Taman Nasional Komodo, Nusa Tenggara Timur. Pulau ini memiliki pemandangan yang sangat indah dan eksotis. Pulau Padar memiliki tiga tebing yang menjulang tinggi, yaitu tebing barat, tebing selatan, dan tebing timur. Dari atas ketiga tebing tersebut, wisatawan dapat melihat keindahan alam Taman Nasional Komodo, termasuk Pulau Komodo, Pulau Rinca, dan Pulau Flores.<br>\r\nWisatawan dapat mengunjungi Pulau Padar dengan menggunakan kapal dari Labuan Bajo. Perjalanan dapat ditempuh selama kurang lebih 1 jam. Setelah tiba di Pulau Padar, wisatawan dapat melakukan trekking untuk mencapai puncak ketiga tebing tersebut.\r\n', 'http://surl.li/plbil', 'gambar_65a945de322fa3.17996702.jpg'),
(3, 'Alor, Surga Bahari yang Masih Perawan', 'Alor merupakan salah satu kabupaten yang terletak di Nusa Tenggara Timur. Kabupaten ini memiliki potensi wisata bahari yang sangat besar. Alor memiliki banyak pulau-pulau kecil yang masih terjaga keasriannya. Beberapa pulau yang patut dikunjungi di Alor antara lain Pulau Pantar, Pulau Alor, dan Pulau Pura.\r\n<br>\r\nWisatawan dapat mengunjungi Alor dengan menggunakan pesawat dari Jakarta atau Bali. Setelah tiba di Bandara Mali Airport, wisatawan dapat melanjutkan perjalanan dengan menggunakan kendaraan bermotor selama kurang lebih 2 jam.\r\n<br>\r\nWisatawan dapat melakukan berbagai aktivitas wisata bahari di Alor, seperti snorkeling, diving, atau sekadar menikmati keindahan pantai.\r\n', 'http://surl.li/plbjz', 'gambar_65a945f8d6b743.51535808.jpg'),
(4, 'Sumba, Surga Wisata Budaya yang Eksotis', 'Sumba merupakan salah satu pulau yang terletak di Nusa Tenggara Timur. Pulau ini memiliki budaya dan tradisi yang masih terjaga dengan baik. Beberapa suku yang mendiami Sumba antara lain suku Sumbawa, suku Kodi, dan suku Melolo.\r\n<br>\r\nWisatawan dapat mengunjungi Sumba dengan menggunakan pesawat dari Jakarta atau Bali. Setelah tiba di Bandara Tambolaka, wisatawan dapat melanjutkan perjalanan dengan menggunakan kendaraan bermotor selama kurang lebih 2 jam.\r\n<br>\r\nWisatawan dapat mengunjungi berbagai objek wisata budaya di Sumba, seperti Kampung Adat Ratenggaro, Kampung Adat Prai Ijing, dan Kampung Adat Kodi.\r\n<br>\r\nDemikianlah berita mengenai destinasi wisata di NTT. NTT merupakan provinsi yang memiliki potensi wisata yang sangat besar. Provinsi ini menawarkan berbagai macam destinasi wisata yang indah dan menawan, yang dapat menjadi pilihan liburan yang tepat bagi wisatawan dari berbagai kalangan.\r\n', 'http://surl.li/plblp', 'gambar_65a9461772dc40.74865126.jpg'),
(5, 'Gunung Kelimutu, Surga Danau Tiga Warna yang Menakjubkan', 'Gunung Kelimutu merupakan salah satu destinasi wisata alam paling populer di Nusa Tenggara Timur (NTT). Gunung berapi ini terkenal dengan danau tiga warnanya yang selalu berubah-ubah warnanya, yaitu biru, merah, dan putih. Danau-danau tersebut terletak di puncak Gunung Kelimutu, yang berada di ketinggian 1.639 meter di atas permukaan laut.\r\n<br>\r\nDanau tiga warna Gunung Kelimutu merupakan fenomena alam yang unik dan langka. Danau biru diyakini sebagai tempat berkumpulnya arwah orang yang meninggal dengan cara yang baik. Danau merah dipercaya sebagai tempat berkumpulnya arwah orang yang meninggal dengan cara yang buruk. Sedangkan danau putih dipercaya sebagai tempat berkumpulnya arwah orang yang belum meninggal.\r\n<br>\r\nUntuk mencapai puncak Gunung Kelimutu, wisatawan dapat memulai perjalanan dari Kota Ende. Perjalanan dapat ditempuh dengan kendaraan bermotor selama kurang lebih 2 jam. Setelah tiba di Desa Moni, wisatawan dapat melanjutkan perjalanan dengan berjalan kaki selama kurang lebih 30 menit.\r\n<br>\r\nWisatawan dapat mengunjungi Gunung Kelimutu pada pagi hari untuk melihat keindahan danau tiga warna. Pada pagi hari, warna danau akan terlihat lebih cerah dan jernih.\r\n', 'http://surl.li/plbmy', 'gambar_65a9466971e619.59074463.jpg'),
(6, 'Pantai Pink, Surga Tersembunyi di Taman Nasional Komodo', 'Pantai Pink merupakan salah satu pantai paling indah di Nusa Tenggara Timur (NTT). Pantai ini terletak di dalam kawasan Taman Nasional Komodo, tepatnya di Pulau Komodo. Pantai ini memiliki pasir berwarna merah muda yang berasal dari butiran-butiran karang yang tercampur dengan pasir putih.\r\n<br>\r\nPantai Pink memiliki pemandangan yang sangat indah dan eksotis. Pantai ini dikelilingi oleh tebing-tebing yang menjulang tinggi. Selain itu, pantai ini juga memiliki air laut yang jernih dan berwarna biru kehijauan.\r\n<br>\r\nWisatawan dapat mengunjungi Pantai Pink dengan menggunakan kapal dari Labuan Bajo. Perjalanan dapat ditempuh selama kurang lebih 1 jam. Setelah tiba di Pantai Pink, wisatawan dapat berenang, snorkeling, atau diving untuk menikmati keindahan bawah laut.\r\n', 'http://surl.li/plboa', 'gambar_65a946752423a5.41366713.jpg'),
(16, 'Pulau komodo', 'Pulau Komodo adalah sebuah pulau yang terletak di Kepulauan Nusa Tenggara, berada di sebelah timur Pulau Sumbawa, yang dipisahkan oleh Selat Sape. Pulau Komodo dikenal sebagai habitat asli hewan komodo.<br>\r\n\r\nPulau ini termasuk salah satu kawasan Taman Nasional Komodo yang dikelola oleh Pemerintah Pusat.<br>\r\n\r\nSecara administratif, pulau ini termasuk wilayah Kabupaten Manggarai Barat, Kecamatan Komodo, Provinsi Nusa Tenggara Timur, Indonesia. Pulau Komodo merupakan ujung paling barat Provinsi Nusa Tenggara Timur, berbatasan dengan Provinsi Nusa Tenggara Barat.<br>', 'http://surl.li/plvfw', 'gambar_65a96b5e17b564.10188685.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_no` int(2) NOT NULL,
  `Nama` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `posisi` varchar(100) DEFAULT NULL,
  `gambar_url` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `posisi`, `gambar_url`, `deskripsi`) VALUES
(1, 'Siti', 'Pengangguran', './assets/ava.png', 'Saya sangat terkesan dengan keindahan alam NTT. Pantai-pantainya yang eksotis dan keberagaman budayanya membuat liburan saya di sini tak terlupakan. Sangat direkomendasikan!'),
(2, 'Ujang', 'Youtuber', './assets/ava.png', 'Pulau Flores benar-benar menyihir hati saya. Saya sangat menikmati perjalanan ke Labuan Bajo dan melihat Komodo di Pulau Rinca. Pengalaman yang luar biasa dan pemandangan yang menakjubkan!'),
(3, 'Bolang', 'Petualang', './assets/ava.png', 'Pulau Flores benar-benar menyihir hati saya. Saya sangat menikmati perjalanan ke Labuan Bajo dan melihat Komodo di Pulau Rinca. Pengalaman yang luar biasa dan pemandangan yang menakjubkan!'),
(4, 'Seno', 'Developer', './assets/ava.png', 'Saya dan keluarga mengunjungi Danau Kelimutu, dan warna-warna danau yang berubah-ubah sungguh memukau. NTT memiliki keajaiban alam yang tidak dapat dijelaskan dengan kata-kata. Sukses untuk destinasi ini'),
(5, 'Kevin', 'Manager', './assets/ava.png', 'Menginap di desa adat tradisional di Sumba benar-benar memberi saya pengalaman mendalam tentang kehidupan dan budaya lokal. Sumba adalah tempat yang kaya akan tradisi dan keramahan penduduknya.'),
(6, 'Yanto', 'Traveler', './assets/ava.png', 'Pulau Alor adalah surga penyelam. Saya menikmati keindahan terumbu karang dan kehidupan laut yang beragam. Alor benar-benar destinasi yang harus dikunjungi oleh para pencinta laut!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
