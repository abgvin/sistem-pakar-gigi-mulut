-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2019 at 09:42 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pakar_gigi_mulut`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_konsul`
--

CREATE TABLE `hasil_konsul` (
  `username` varchar(200) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_gejala` varchar(1000) NOT NULL,
  `nama_penyakit` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_konsul`
--

INSERT INTO `hasil_konsul` (`username`, `nama_lengkap`, `nama_gejala`, `nama_penyakit`, `tanggal`) VALUES
('yul', 'Yulismawati', 'Gigi terasa sakit', 'Karies Gigi', '2019-03-21'),
('yul', 'Yulismawati', 'Gigi sensitif', 'Karies Gigi', '2019-03-21'),
('yul', 'Yulismawati', 'Gigi terasa nyeri saat mengkonsumsi makanan manis, panas atau dingin', 'Karies Gigi', '2019-03-21'),
('yul', 'Yulismawati', 'Lubang yang terlihat pada gigi', 'Karies Gigi', '2019-03-21'),
('yul', 'Yulismawati', 'Terdapat noda berwarna coklat, hitam atau putih pada permukaan gigi', 'Karies Gigi', '2019-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_gejala`
--

CREATE TABLE `tabel_gejala` (
  `kode_gejala` varchar(5) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_gejala`
--

INSERT INTO `tabel_gejala` (`kode_gejala`, `nama_gejala`) VALUES
('G01', 'Gigi terasa sakit'),
('G02', 'Gigi sensitif'),
('G03', 'Gigi terasa nyeri saat mengkonsumsi makanan manis, panas atau dingin'),
('G04', 'Lubang yang terlihat pada gigi'),
('G05', 'Terdapat noda berwarna coklat, hitam atau putih pada permukaan gigi'),
('G06', 'Gigi sakit yang menusuk tajam serta intens'),
('G07', 'Rasa sakit cepat mereda saat tidak mengkonsumsi makanan panas dan manis'),
('G08', 'Nyeri dalam beberapa menit atau beberapa jam'),
('G09', 'Nyeri bertambah parah saat malam hari'),
('G10', 'Gusi Bengkak'),
('G11', 'Gusi terasa nyeri'),
('G12', 'Gusi Turun'),
('G13', 'Gusi mudah berdarah saat menyikat gigi atau menggunakan benang gigi dan meninggalkan noda kemerahan pada sikat gigi atau benang gigi'),
('G14', 'Adanya perubahan pada warna gusi dari merah muda sehat menjadi merah muda  kehitaman'),
('G15', 'Nyeri saat mengunyah makanan'),
('G16', 'Gusi bengkak dan berwarna merah atau keunguan'),
('G17', 'Gusi terasa lunak saat disentuh'),
('G18', 'Terdapat penumpukan  plak dan karang gigi'),
('G19', 'Mulut terasa tidak enak dan nafas menjadi bau'),
('G20', 'Gusi menyusut serta gigi terlihat lebih tinggi dari biasanya'),
('G21', 'Keluar nanah pada bagian pembatas gigi dan gusi'),
('G22', 'Jarak satu gigi dan gigi lainnya terasa renggang'),
('G23', 'Gigi tanggal'),
('G24', 'Gusi bengkak, gusi kemerahan dan pendarahan serta gangguan pada tulang pendukung gigi'),
('G25', 'Bau Mulut'),
('G26', 'Rasa tidak enak di mulut'),
('G27', 'Gigi renggang hingga susah untuk makan'),
('G28', 'Gusi berwarna gelap'),
('G29', 'Gusi terasa nyeri saat disentuh'),
('G30', 'Gusi mudah berdarah'),
('G31', 'Jumlah gigi berlebih'),
('G32', 'Bentuk gigi tidak normal'),
('G33', 'Warna gigi tidak normal'),
('G34', 'Ukuran gigi tidak normal'),
('G35', 'Timbul rasa tidak nyaman pada anak hingga nafsu makan menurun'),
('G36', 'Susah tidur'),
('G37', 'Timbul warna kemerahan pada tepi mulut'),
('G38', 'Timbulnya rasa sakit pada area sekitar rahang'),
('G39', 'Bengkak pada area gigi yang sakit'),
('G40', 'Rasa tidak nyaman saat mengunyah makanan'),
('G41', 'Sulit membuka mulut'),
('G42', 'Gusi berdarah'),
('G43', 'Adanya pembekakan gusi diantara dua gigi'),
('G44', 'Adanya perubahan warna pada gusi'),
('G45', 'Terdapat saku pada gusi'),
('G46', 'Gusi turun (resesi gingiva)'),
('G47', 'Terdapat cairan pada sekitaran gigi dan mulut'),
('G48', 'Terdapat benjolan, kulit yang terkelupas, atau bercak di mulut'),
('G49', 'Dasar rongga agak terasa kasar dan tidak dapat digerakkan'),
('G50', 'Sulit mengunyah makanan'),
('G51', 'Gigi tidak tepat dalam posisi lengkung'),
('G52', 'Ukuran gigi lebih besar');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penyakit`
--

CREATE TABLE `tabel_penyakit` (
  `kode_penyakit` varchar(4) NOT NULL,
  `nama_penyakit` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_penyakit`
--

INSERT INTO `tabel_penyakit` (`kode_penyakit`, `nama_penyakit`, `keterangan`, `solusi`) VALUES
('P01', 'Karies Gigi', 'Gigi terasa sakit, sensistif, nyeri ringan hingga tajam saat mengkonsums/menggigit  makanan manis, panas atau dingin, lubang yang terlihat pada gigi, noda berwarna coklat, hitam atau putih pada permukaan gigi.', 'Menjaga kebersihan mulut dengan baik untuk meminimalisir penyebab penyakit   mulut dan membuang plak. karies dapat dicegah  dengan pembersihan dan pemeriksaan gigi teratur. \r\nPengaturan konsumsi makanan bergula, dimana gula yang tersisa pada mulut dapat memproduksi asam oleh bakteri.\r\nMengkonsumsi permen karet xillitol dapat membantu melindungi gigi.\r\n'),
('P02', 'Jaringan Pulpa dan Periapikal', 'Rasa sakit yang menusuk tajam dan intens, sakit cepat mereda setelah pemicunya dijauhkan dari gigi dan mulut seperti makanan yang terlalu panas atau manis', 'Disarankan untuk langsung ke dokter gigi saat menyadari adanya lubang gigi atau rasa ngilu pada gigi saat terkena makanan panas dan dingin.'),
('P03', 'Gingivitis dan Periodontal', 'Gusi bengkak, gusi terasa nyeri, gusi turun, gusi mudah berdarah saat menyikat gigi atau menggunakan benang gigi serta terlihat kemerahan pada saat sikat gigi atau benang gigi, perubahan pada warna gusi dari merah muda yang sehat menjadi merah muda kehitaman, nafas bau, nyeri saat mengunyah makanan, gusi bengkak dan berwarna merah keunguan, gusi terasa lunak jika disentuh, penumpukkan plak dan karang gigi pada gigi, mulut terasa tidak enak dan nafas menjadi bau, penysutan gusi sehingga ukuran gigi terlihat lebih tinggi dari biasanya, keluarnya nanah pada bagian yang membatasi gigi dan gusi, jarak antara satu gigi dan gigi lainnya terasa renggang serta gigi tanggal', 'program kebersihan gigi yang baik, dan dipertahankan dengan konsisten. Pembersihan yang lengkap dengan sikat gigi dan benang gigi dan umumnya dengan waktu 3-5 menit. Membersihkan dengan benang gigi sebelum menyikat gigi dapat membersihkan partikel makanan dan bakteri.'),
('P04', 'Gangguan Gusi dan Hubungan Alveolar tak bergigi lainnya', 'Gusi terasa bengkak kemerahan, pendarahan serta gangguan pada tulang pendukung gigi', 'Rutin menyikat gigi setidaknya 2x sehari dengan pasta gigi berfluoride. selain itu rutin untuk memeriksakan gigi ke dokter gigi untuk membantu menceegah penyakit gigi dan mulut.'),
('P05', 'Plak, karang gigi dan stain', 'Gusi berwarna gelap, gusi terasa nyeri bila disentuh dan gusi mudah berdarah', 'Menyikat gigi secara teratur sebnayak 2x sehari selama 2 menit. beralih ke sikat gigi elektrik, menggunakan pasta gigi yang tepat, menggunakan benang gigi (dental floss), memakai obat kumur, perhatikan diet anda, ubah kebiasaan merokok. Apabila sudah terdapat karang gigi silahkan pergi ke dokter gigi untuk membersihkan karang gigi.'),
('P06', 'Gangguan Perkembangan Gigi dan Erupsi Gigi', 'Jumlah gigi berlebih, bentuk gigi tidak normal, warna gigi tidak normal, ukuran gigi tidak normal, timbul rasa tidak nyaman pada anak', 'Lakukan pemeriksaan kondisi perkembangan gigi dengan dokter gigi dan mulut yang anda percayai.'),
('P07', 'Impaksi Gigi dan Terbenam', 'Rasa sakit pada area rahang, munculnya pembngkakan pada daerah gigi yang sakit, rasa tidak nyaman saat mengunyah makanan, bau mulut, kesulotan saat membuka mulut dan gusi berdarah', 'Konsultasi dengan dokter gigi bagaimana penanganan selanjutnya.'),
('P08', 'Gangguan Gigi dan Jaringan Pendukung lainnya', 'Terjadinya pembengkakan papila interdental atau gusi diantara dua gigi, perubahan warna pada gusi, terbentuknya saku gusi, resesi gingiva atau gusi turun, serta adanya kerusakan tulang alveolar yang cukup besar', 'Merubah kebiasaan merawat gigi dan mulut yang buruk, mengubah kebiasaan memakan makanan manis dan minuman masnis, alkohol, dan kebiasaan merokok. Menggosok gigi 2x sehari, dan periksa secara rutin pada dokter gigi.'),
('P09', 'Kista dalam Rongga Mulut', 'Adanya kantong berisi cairan disekitar gigi dan mulut dan Terdapat benjolan, kulit yang terkelupas, atau bercak di mulut', 'dengan tindakan operasi bedah mulut, dilakukan oleh dokter gigi atau dokter gigi spesialis bedah mulut dan maksilofasial.'),
('P10', 'Kelainan Dentofacial', 'Gigi tidak tepat pada posisi yang semestinya dan ukuran gigi lebih besar', 'Pemeriksaan pada dokter gigi.');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_rules`
--

CREATE TABLE `tabel_rules` (
  `kode_penyakit` varchar(5) NOT NULL,
  `kode_gejala` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_rules`
--

INSERT INTO `tabel_rules` (`kode_penyakit`, `kode_gejala`) VALUES
('P01', 'G01'),
('P01', 'G02'),
('P01', 'G03'),
('P01', 'G04'),
('P01', 'G05'),
('P02', 'G06'),
('P02', 'G07'),
('P02', 'G08'),
('P02', 'G09'),
('P03', 'G08'),
('P03', 'G10'),
('P03', 'G11'),
('P03', 'G12'),
('P03', 'G13'),
('P03', 'G14'),
('P03', 'G15'),
('P03', 'G16'),
('P03', 'G17'),
('P03', 'G18'),
('P03', 'G19'),
('P03', 'G20'),
('P03', 'G21'),
('P03', 'G22'),
('P03', 'G23'),
('P06', 'G31'),
('P06', 'G32'),
('P06', 'G33'),
('P06', 'G34'),
('P06', 'G35'),
('P06', 'G36'),
('P06', 'G37'),
('P07', 'G38'),
('P07', 'G39'),
('P07', 'G40'),
('P07', 'G41'),
('P07', 'G42'),
('P08', 'G43'),
('P08', 'G44'),
('P08', 'G45'),
('P08', 'G46'),
('P09', 'G47'),
('P09', 'G48'),
('P09', 'G49'),
('P09', 'G50'),
('P10', 'G51'),
('P10', 'G52'),
('P04', 'G10'),
('P04', 'G24'),
('P04', 'G25'),
('P04', 'G26'),
('P04', 'G27'),
('P05', 'G10'),
('P05', 'G28'),
('P05', 'G29'),
('P05', 'G30');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `username` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usia` int(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`username`, `nama_lengkap`, `password`, `usia`, `alamat`, `level`) VALUES
('abgvin', 'Muhamad apri', '567428359f345727ed135bca8eb0fde0', 23, 'Padang', 'user'),
('admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 0, '', 'admin'),
('yul', 'Yulismawati', 'e306018545c56281306f0cfa8b134fdf', 48, 'Rawang', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_gejala`
--
ALTER TABLE `tabel_gejala`
  ADD PRIMARY KEY (`kode_gejala`);

--
-- Indexes for table `tabel_penyakit`
--
ALTER TABLE `tabel_penyakit`
  ADD PRIMARY KEY (`kode_penyakit`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
