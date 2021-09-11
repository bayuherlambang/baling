-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 06:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balingdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_crm` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `nama`, `nama_crm`, `created_at`, `updated_at`) VALUES
(49, 'SUGENG SANTOSO', 'SUGENG SANTOSO', '2020-09-28 07:49:27', '2020-09-28 07:49:27'),
(50, 'Ine Novanty', 'Ine Novanty', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(51, 'Regina Cahya Kusumawardhani', 'Regina Kusumawardhani', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(52, 'Ghifarin Addausi', 'Ghifarin Addausi', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(53, 'Nani Mar\'atul Ulya', 'Nani Maratul Ulya', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(54, 'Heru Wicaksono', 'Heru Wicaksono', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(55, 'Ma\'rifatul Musyafaah', 'Marifatul Musyafaah', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(56, 'Friska Candra Dewi', 'Friska Candra Dewi', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(57, 'Kristanti Putri Faviyanti', 'Kristanti Putri Faviyanti', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(58, 'Nurita Aprin Faniarti', 'Nurita Aprin Faniarti', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(59, 'Grace Evaggline Gohi', 'Grace Evaggline Gohi', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(60, 'Filea Noviana Saputra', 'Filea Noviana Saputra', '2020-09-29 06:57:52', '2020-09-29 06:57:52'),
(61, 'Dica Ranny Arumprasiwi', 'Dica Arumprasiwi', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(62, 'Intan Ama Yuniari', 'Intan Ama Yuniari', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(63, 'Nur Felah', 'Nur Felah', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(64, 'Natalya Ajec Kynasih', 'Natalya Ajec Kynasih', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(65, 'Asa Ustatun Nada', 'Asa Ustatun Nada', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(66, 'Anugrah Ilyas Nur Prasetya', 'Anugrah Ilyas Nur Prasetya', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(67, 'Sri Yuliati Lita Ramadhitya', 'Sri Yuliati Lita Ramadhitya', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(68, 'Rezza Angga Juni Saputra', 'Rezza Angga Juni Saputra', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(69, 'Tirta Adiwana', 'Tirta Adiwana', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(70, 'Ekgan Kusana', 'Ekgan Kusana', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(71, 'Delia Uma Zela Sazati', 'Delia Uma Zela Sazati', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(72, 'Sri Wahyuningsih', 'Sri Wahyuningsih', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(73, 'Anggita Alviana Ariesati', 'Anggita Alviana Ariesati', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(74, 'Ilham Hauzan Mahrus', 'Ilham Mahrus', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(75, 'Rizki Nurhidayah', 'Rizki Nurhidayah', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(76, 'Adhe Riska Wulan Sari', 'Adhe Riska Wulan Sari', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(77, 'Aisyalun Hadzatillah', 'Aisyalun Hadzatillah', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(78, 'Amelia Diah Agustina', 'Amelia Diah Agustina', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(79, 'Siti Umi Ulfa Latifah', 'Siti Umi Ulfa Latifah', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(80, 'Diany Budi Cahyani', 'Diany Budi Cahyani', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(81, 'Diah Indah Widyastuti', 'Diah Widyastuti', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(82, 'Wahyu Ernawati', 'Wahyu Ernawati', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(83, 'Lia Ardiani', 'Lia Ardiani', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(84, 'Ayu Nanda Riski Anggita Fitriana', 'Ayu Nanda Riski Anggita Fitriana', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(85, 'Gratia Krista Primadanti', 'Gratia Krista Primadanti', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(86, 'Aulia Mutiara Rinjani', 'Aulia Mutiara Rinjani', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(87, 'Nivenia Rochfalinda', 'Nivenia Rochfalinda', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(88, 'Fika Purnamasari', 'Fika Purnamasari', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(89, 'Raisa Ayucahyani', 'Raisa Ayucahyani', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(90, 'Bagus Dwi Saputro', 'Bagus Dwi Saputro', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(92, 'Nila Kusuma Wardani', 'Nila Kusuma Wardani', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(93, 'Wachidah Efi Nugrahaeni', 'Wachidah Efi Nugrahaeni', '2020-09-29 06:57:53', '2020-09-29 06:57:53'),
(94, 'Mulyani Wulan Safitri', 'Mulyani Safitri', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(95, 'Widiyanti', 'Widiyanti Rusdi', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(96, 'Gigih Dwi Irawan', 'Gigih Dwi Irawan', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(97, 'Centauri Christine Loviest', 'Centauri Christine Loviest', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(98, 'Dessy Ria Findasari', 'Dessy Ria Findasari', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(99, 'Chatrine Santi Birgante', 'Chatrine Santi Birgante', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(100, 'Ardian Maulana', 'Ardian Maulana', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(101, 'Niken Setyaningsih', 'Niken Setyaningsih', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(102, 'Rizki Andala Putri', 'Rizki Andala Putri', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(103, 'Eka Setyaningsih', 'Eka Setyaningsih', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(104, 'Titi Arifah', 'Titi Arifah', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(105, 'Maria Septavia Dwi Rosalina', 'Maria Septavia Dwi Rosalina', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(106, 'Halimah Ulil Albab', 'Halimah Ulil Albab', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(107, 'Aprilia Alin Kusumawardani', 'Aprilia Alin Kusumawardani', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(108, 'Mochamad Fauzi', 'Mochamad Fauzi', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(109, 'Dwicky Fachrudias', 'Dwicky Fachrudias', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(110, 'Lutfi Fajar Gumelar', 'Lutfi Fajar Gumelar', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(111, 'Safira Ayuningtyas', 'Safira Ayuningtyas', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(112, 'Raudotun Nafidah', 'Raudotun Nafidah', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(113, 'Putri Indah Nurani', 'Putri Indah Nurani', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(114, 'Riska Tomy Anggajati', 'Riska Tomy Anggajati', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(115, 'Yulita Marfika Rahmawati', 'Yulita Marfika Rahmawati', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(116, 'Novi Febryan Anggraeni', 'Novi Febryan Anggraeni', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(117, 'Mei Fatmawati Dwi Prastiwi', 'Mei Fatmawati Dwi Prastiwi', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(118, 'Isti Yuni Sari', 'Isti Yuni Sari', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(119, 'Silvia Justiana', 'Silvia Justiana', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(120, 'Nurlaely Bazighoh', 'Nurlaely Bazighoh', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(121, 'Danil Setiyawan', 'Danil Setiyawan', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(122, 'Ida Zaharoh', 'Ida Zaharoh', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(123, 'Ella Agustin Wardani', 'Ella Wardani', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(124, 'Nurma Feby Royyani', 'Nurma Feby Royyani', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(125, 'Muhammad Shofiyyulloh', 'Muhammad Shofiyyulloh', '2020-09-29 06:57:54', '2020-09-29 06:57:54'),
(126, 'Odya Alfita Dewi', 'Odya Alfita Dewi', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(127, 'Elsa Ayu Giartika', 'Elsa Ayu Giartika', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(128, 'Zumrotun Na\'imah', 'Zumrotun Naimah', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(129, 'Hedyana Astari', 'Hedyana Astari', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(130, 'Laelatul Qodriyah', 'Laelatul Qodriyah', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(131, 'Onny Safwedha', 'Onny Safwedha', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(132, 'Angellina Retno Widhowati', 'Angellina Retno Widhowati', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(133, 'Muhammad Sofii', 'Muhammad Sofii', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(134, 'Siti Mubarokah', 'Siti Mubarokah', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(135, 'Syahrizal Ramadhan', 'Syahrizal Ramadhan', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(136, 'Fika Floriana', 'Fika Floriana', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(137, 'Rizki Adinda Desiana', 'Rizki Adinda Desiana', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(138, 'Noviani', 'Noviani Sutiono', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(139, 'Zulva Fitri Hanidyatna', 'Zulva Fitri Hanidyatna', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(140, 'Tika Isnavia', 'Tika Isnavia', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(141, 'Farocha Dwi Saputri', 'Farocha Dwi Saputri', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(142, 'Mayang Arnindika Prameswari', 'Mayang Arnindika Prameswari', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(143, 'Yuvita Marseladiana', 'Yuvita Marseladiana', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(144, 'Windi Kurniasari', 'Windi Kurniasari', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(145, 'Arum Winda Aryani', 'Arum Winda Aryani', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(146, 'Mochammad Azizurrohman', 'Mochammad Azizurrohman', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(147, 'Miftahul Elva Ulum', 'Miftahul Elva Ulum', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(148, 'Yola Hari Andhini', 'Yola Hari Andhini', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(149, 'Rizma Dwi Nidia', 'Rizma Dwi Nidia', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(150, 'Titis Wahyuningrum', 'Titis Wahyuningrum', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(151, 'Faizun Atika Selli', 'Faizun Atika Selli', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(152, 'Limsah Silalahi', 'Limsah Silalahi', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(153, 'Salam Ginang Pratidhina', 'Salam Ginang Pratidhina', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(154, 'Yulina Kusumawati', 'Yulina Kusumawati', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(155, 'Laksmitta Nirmana', 'Laksmitta Nirmana', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(156, 'Angga Damar Christiwijayanta', 'Angga Damar Christiwijayanta', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(157, 'Siti Khamidah', 'Siti Khamidah', '2020-09-29 06:57:55', '2020-09-29 06:57:55'),
(158, 'Trisnani Bunga Nusa Putri', 'Trisnani Bunga Nusa Putri', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(159, 'Richie S', 'Richie S', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(160, 'Ulita Setyaningrum', 'Ulita Setyaningrum', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(161, 'Agustina Ambarwati', 'Agustina Ambarwati', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(162, 'Vista Resa Prakavta', 'Vista Resa Prakavta', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(163, 'Natasha Meyviani', 'Natasha Meyviani', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(164, 'Yessika Aditia Pratiwi', 'Yessika Aditia Pratiwi', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(165, 'Cikal Lembayu', 'Cikal Lembayu', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(166, 'M. Aenun Najib', 'M Aenun Najib', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(167, 'Estie Yonasari', 'Estie Yonasari', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(168, 'Sari Utami', 'Sari Utami', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(169, 'Yulinar Ayu Setiani', 'Yulinar Ayu Setiani', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(170, 'Anis Hartutik', 'Anis Hartutik', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(171, 'Rifki Daivani Haryanto', 'Rifki Daivani Haryanto', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(172, 'Dian Amirul Wahyuning Tyas', 'Dian Amirul Wahyuning Tyas', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(173, 'Indah Lestari', 'Indah Lestari', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(174, 'Anik Irmawati', 'Anik Irmawati', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(175, 'Umma Farida', 'Umma Farida', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(176, 'Aditya Nugroho', 'Aditya Nugroho', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(177, 'Siti Nur Chayati', 'Siti Nur Chayati', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(178, 'Syukron Rosyadi', 'Syukron Rosyadi', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(179, 'Putri Fadlilah Pebrianti', 'Putri Fadlilah Pebrianti', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(180, 'Kartika Puspitasari Dewi', 'Kartika Puspitasari Dewi', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(181, 'Vidya Islamia Prabowo', 'Vidya Islamia Prabowo', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(182, 'Ari Hidayat', 'Ari Hidayat', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(183, 'Mahatma Adi Gumawang', 'Mahatma Adi Gumawang', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(184, 'Anis Zatulna Sekhah', 'Anis Zatulna Sekhah', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(185, 'Verandina Wina Sofiana', 'Verandina Wina Sofiana', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(186, 'Galuh Dear Zalzabilla', 'Galuh Dear Zalzabilla', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(187, 'Navia Ismintari', 'Navia Ismintari', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(188, 'Aliffia Nur Arifah', 'Aliffia Nur Arifah', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(190, 'Tri Ratna Merdekawati', 'Tri Ratna Merdekawati', '2020-09-29 06:57:56', '2020-09-29 06:57:56'),
(191, 'Safira Qisthina', 'Safira Qisthina', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(192, 'Didik Kurniawan', 'Didik Kurniawan', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(193, 'Rohana', 'Rohana Rudianto', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(194, 'Indah Suci Novanti', 'Indah Novanti', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(195, 'Novia Rakhmawati', 'Novia Rakhmawati', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(196, 'Dafid Afredo', 'Dafid Afredo', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(197, 'Ika Windi Utami', 'Ika Windi Utami', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(198, 'Nurusshafta Alfi Fadilla', 'Nurusshafta Fadilla', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(199, 'Diah Fitria Aminati', 'Diah Fitria Aminati', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(200, 'Sica Nodika Rihadatul Aisy', 'Sica Nodika Rihadatul Aisy', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(201, 'Dina Amalina Inarah Dyas Putri', 'Dina Amalina Inarah Dyas Putri', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(202, 'Imelda Sari Br Sitepu', 'Imelda Sari Br Sitepu', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(203, 'Jupita Lestari', 'Jupita Lestari', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(204, 'Ganang Wicaksono Kusuma Wardana', 'Ganang Wardana', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(205, 'Sri Devi Widyaningsih', 'Sri Devi Widyaningsih', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(206, 'Nikhlatul Maula', 'Nikhlatul Maula', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(207, 'Bernadette Febrilia Eka Kristianti Suharbowo', 'Bernadette Suharbowo', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(208, 'Syafriandi Zulhidham Siregar', 'Syahriandi Zulhidham Siregar', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(209, 'Rynda Dinar Oktaviarika', 'Rynda Dinar Oktaviarika', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(210, 'Btari Sukmastika Hemas', 'Btari Sukmastika Hemas', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(211, 'Fahma Khoirotun Nida', 'Fahma Khoirotun Nida', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(212, 'Stephani Hendra Natasia', 'Stephani Hendra Natasia', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(213, 'Masrul Abrori', 'Masrul Abrori', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(214, 'Umi Ilawati', 'Umi Ilawati', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(215, 'Novi Fitrianasari', 'Novi Fitrianasari', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(216, 'Kartika Ramadhani', 'Kartika Ramadhani', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(217, 'Dita Octavia', 'Dita Octavia', '2020-09-29 06:57:57', '2020-09-29 06:57:57'),
(218, 'Dian Indirasari', 'Dian Indirasari', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(219, 'Niken Kusumaningrum', 'Niken Kusumaningrum', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(220, 'Assifa\'ani Khalika Suhud', 'Assifaani Khalika Suhud', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(221, 'Novia Dewi Arismaya', 'Novia Dewi Arismaya', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(222, 'Ahmad Burhanudin', 'Ahmad Burhanudin', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(223, 'Bella Fista Novi Astuti', 'Bella Fista Novi Astuti', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(224, 'Imam Maulana', 'Imam Maulana', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(225, 'Riky Ardiyansyah', 'Riky Ardiyansyah', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(226, 'Isti Faradisa', 'ISTI FARADISA', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(227, 'Jeny Fatandini', 'Jeny Fatandini', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(228, 'Vinisa Nurhayati Sofi', 'Vinisa Nurhayati Sofi', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(229, 'Lilis Fitriana', 'Lilis Fitriana', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(230, 'Amanda Puspa Yudha', 'Amanda Puspa Yudha', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(231, 'Nursholehah Juli Tri Utami', 'Nursholehah Juli Tri Utami', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(232, 'Amelia Gita Pertiwi', 'Amelia Gita Pertiwi', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(233, 'Niken Widya Andriany', 'Niken Widya Andriany', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(234, 'Septalia Nada', 'Septalia Nada', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(235, 'Elisya Apriani', 'Elisya Apriani', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(236, 'Siti Lisfiati', 'Siti Lisfiati', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(237, 'Pascal Sulistiyo Wibowo', 'Pascal Sulistiyo Wibowo', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(238, 'Retno Yolanda Eka Prastika', 'Retno Prastika', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(239, 'Ummu Hanni', 'Ummu Hanni', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(240, 'Novita Herfiani', 'Novita Herfiani', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(241, 'Feri Lesmana', 'Feri Lesmana', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(242, 'Putri Siska Ayu Lestari', 'Putri Siska Ayu Lestari', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(243, 'Ayu Puspa Dewi', 'Ayu Puspa Dewi', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(244, 'Listia Herawati', 'Listia Herawati', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(245, 'Damei Rossa', 'Damei Rossa', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(246, 'Fina Athaula Nurjanah Jatmiko', 'Fina Athaula Nurjanah Jatmiko', '2020-09-29 06:57:58', '2020-09-29 06:57:58'),
(247, 'Alfin Ardiansyah', 'Alfin Ardiansyah', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(248, 'Galuh Raka Siwi', 'Galuh Raka Siwi', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(249, 'Faiz Budi Setiawan', 'Faiz Budi Setiawan', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(250, 'Faisal Mansur', 'Faisal Mansur', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(251, 'Miskiyah', 'Miskiyah Tasirah', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(252, 'Maulidhina Mahardika', 'Maulidhina Mahardika', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(253, 'Ivana Kalista Andala', 'Ivana Andala', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(254, 'Nur Aini', 'Nur Aini', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(255, 'Karel Victorio Widia Nugroho', 'Karel Victorio Widia Nugroho', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(256, 'Dita Audia', 'Dita Audia', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(257, 'Tarasari Indriya Widyastuti', 'Tarasari Indriya Widyastuti', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(258, 'Denok Kucari', 'Denok Kucari', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(259, 'Ayu Dewi Lestari', 'Ayu Dewi Lestari', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(260, 'Mimin Nur Azizah', 'Mimin Nur Azizah', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(261, 'Mitha Karinaraflesia', 'Mitha Karinaraflesia', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(262, 'Farhanah Alatas', 'Farhanah Alatas', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(263, 'Atria Ariestiyani', 'Atria Ariestiyani', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(264, 'Riski Dellya Putri', 'Riski Dellya Putri', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(265, 'Istiqomah Prasetyaningrum', 'Istiqomah Prasetyaningrum', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(266, 'Tirza Andina Theoriska', 'Tirza Andina Theoriska', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(267, 'Ling Ling Kansae', 'Ling Ling Kansae', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(268, 'Tri Saputro', 'Tri Saputro', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(269, 'Rosdiana Dewi', 'Rosdiana Dewi', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(270, 'Divaraina Sheilla Mahsa Fayatresna Hidayat', 'Divaraina Sheilla Mahsa Fayatresna Hidayat', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(271, 'Lukyta Dwika Ali Ashar', 'Lukyta Dwika Ali Ashar', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(272, 'Muhammad Yazid Ulwan', 'Muhammad Yazid Ulwan', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(273, 'Debby Margaretha Kurnia Ngahu', 'Debby Margaretha Kurnia N', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(274, 'Nur Janah', 'Nur Janah', '2020-09-29 06:57:59', '2020-09-29 06:57:59'),
(275, 'Akhmad Suryanto', 'Akhmad Suryanto', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(276, 'Ridha Anggi Nurkholisha', 'Ridha Anggi Nurkholisha', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(277, 'Dhanik Putri Driastuti', 'Dhanik Driastuti', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(278, 'Siska Setiani', 'Siska Setiani', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(279, 'Wiwik Tantri Rahayu', 'Wiwik Rahayu', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(280, 'Aan Wulan Kartika', 'Aan Wulan Kartika', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(281, 'Desi Rakhmadiyanti', 'Desi Rakhmadiyanti', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(282, 'Mega Windiasih Agustin', 'Mega Agustin', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(283, 'Ahmad Mutakin', 'Ahmad Mutakin', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(284, 'Dian Ayu Pamungkas', 'Dian Ayu Pamungkas', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(285, 'Nadea Fatmala Tilana', 'Nadea Fatmala Tilana', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(286, 'Dian Ratna Pertiwi', 'Dian Ratna Pertiwi', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(287, 'Dewi Purwati', 'Dewi Purwanti', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(288, 'Shafa Fathiya', 'SHAFA FATHIYA', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(289, 'Yuli Aningsih', 'YULI ANINGSIH', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(290, 'Regina Setianingrum', 'REGINA SETIANINGRUM', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(291, 'Uli Raudlotun Jildan', 'Uli Raudlotun Jildan', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(292, 'Mey Ratnasari', 'Mey Ratnasari', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(293, 'Octavia Putri Winey', 'Octavia Winey', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(294, 'Yudha Amrih Handoyo Priyo', 'Yudha Priyo', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(295, 'Imam Tri Baskoro', 'Imam Tri Baskoro', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(296, 'Lahuri', 'Lahuri Sahri', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(297, 'Muhammad Epriadi', 'Muhammad Epriadi', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(298, 'Dinang Aditya Wicaksana', 'Dinang Wicaksana', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(299, 'Firda Asyrofah', 'Firda Asyrofah', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(300, 'Nanang Nggufron', 'Nanang Nggufron', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(301, 'Ulil Absor', 'Ulil Absor', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(302, 'Wira Putri Sumbarani', 'Wira Putri Sumbarani', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(303, 'Ari Ramadhan', 'Ari Ramadhan', '2020-09-29 06:58:00', '2020-09-29 06:58:00'),
(304, 'Desiani Br. Simarmata', 'Desiani Br Simarmata', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(305, 'Elsa Erwinda Hanesia', 'Elsa Erwinda Hanesia', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(306, 'Khoirunnisa Fayakun Yusono', 'Khoirunnisa Fayakun Yusono', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(307, 'Riama Kristina Hutagalung', 'Riama Kristina Hutagalung', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(308, 'Agung Ramadhan', 'Agung Ramadhan', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(309, 'Albertus Ivan Rio Kristanto', 'Albertus Kristanto', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(310, 'Legina Lourenta Siregar', 'Legina Lourenta Siregar', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(311, 'Renita Meidyana Marsudi', 'Renita Meidyana Marsudi', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(312, 'Yoladha Nico Prastyo', 'Yolanda Nico Prastyo', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(313, 'Bintang Indrawangsa Susanto', 'Bintang Indrawangsa Susanto', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(314, 'Shufi Annisa Rahmah', 'Shufi Rahmah', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(315, 'Rozyana Nur Afifah', 'Rozyana Nur Afifah', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(316, 'Tahta Alfinna', 'Tahta Alfinna', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(317, 'Ringin Setyani', 'Ringin Setyani', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(318, 'Ariska Anzartatik', 'Ariska Anzartatik', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(319, 'Sugeng Santoso', 'Sugeng Santoso', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(320, 'Tony R. Ambarita', 'Tony Ambarita', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(321, 'Desi Muji Rahayu', 'Desi Muji Rahayu', '2020-09-29 06:58:01', '2020-09-29 06:58:01'),
(322, 'Sefian Kirana Saputra', 'Sefian Kirana Saputra', '2020-10-03 07:15:42', '2020-10-03 07:15:42'),
(323, 'Mahnefi Arnola', 'Mahnefi Arnola', '2020-10-27 07:00:37', '2020-10-27 07:00:37'),
(324, 'Kevin Kurniawan', 'Kevin Kurniawan', '2020-10-27 07:00:55', '2020-10-27 07:00:55'),
(325, 'Silviana Ayuningtias', 'Silviana Ayuningtias', '2020-10-27 07:01:05', '2020-10-27 07:01:05'),
(326, 'Ricky Giovani Reynaldi', 'Ricky Giovani Reynaldi', '2020-10-27 07:01:12', '2020-10-27 07:01:12'),
(327, 'Rifqy Aulia Nur Muhammad', 'Rifqy Aulia Nur Muhammad', '2020-10-27 07:01:20', '2020-10-27 07:01:20'),
(328, 'Deny Wukir Widyasari', 'Deny Wukir Widyasari', '2020-10-27 07:01:35', '2020-10-27 07:01:35'),
(329, 'Desy Mutia Kusumawardani', 'Desy Mutia Kusumawardani', '2020-10-27 07:01:42', '2020-10-27 07:01:42'),
(330, 'Abdoe Gamiyu Fatah', 'Abdoe Gamiyu Fatah', '2020-12-22 06:54:41', '2020-12-22 06:54:41'),
(331, 'YOGI PRABOWO', 'YOGI PRABOWO', '2020-12-22 06:54:56', '2020-12-22 06:54:56'),
(332, 'Novita Esty Anggraeni', 'Novita Esty Anggraeni', '2020-12-22 06:55:06', '2020-12-22 06:55:06'),
(333, 'Nur Ivana Larassiwi Wardani', 'Nur Ivana Larassiwi Wardani', '2020-12-22 06:55:13', '2020-12-22 06:55:13'),
(334, 'Shofiati Nuroniyah', 'Shofiati Nuroniyah', '2020-12-22 06:55:20', '2020-12-22 06:55:20'),
(335, 'Riyanti', 'Riyanti Turiman', '2020-12-22 06:56:52', '2020-12-22 06:56:52'),
(336, 'Binar Ceria Rary Saputri', 'Binar Ceria Rary Saputri', '2020-12-22 06:57:01', '2020-12-22 06:57:01'),
(337, 'May Vita Restuningtias', 'May Vita Restuningtias', '2020-12-22 06:57:08', '2020-12-22 06:57:08'),
(338, 'Ninik Human Bukhoriyah', 'Ninik Human Bukhoriyah', '2020-12-22 06:57:14', '2020-12-22 06:57:14'),
(339, 'Ananda Sekar Tunjung', 'Ananda Sekar Tunjung', '2020-12-22 06:57:22', '2020-12-22 06:57:22'),
(340, 'Anggita Ratna Dewi', 'Anggita Ratna Dewi', '2020-12-22 06:57:28', '2020-12-22 06:57:28'),
(341, 'Ageng Probo Waskito', 'Ageng Probo Waskito', '2020-12-22 06:57:33', '2020-12-22 06:57:33'),
(342, 'Rr. Nurul Rahmah Cahyo Putri', 'Rr Nurul Rahmah Cahyo Putri', '2020-12-22 06:57:47', '2020-12-22 06:57:47'),
(343, 'Mila Nindia', 'Mila Nindia', '2020-12-22 06:57:59', '2020-12-22 06:57:59'),
(344, 'Aviyana Libriyasari', 'Aviyana Libriyasari', '2020-12-22 06:58:04', '2020-12-22 06:58:04'),
(345, 'Putri Sukma Andriana', 'Putri Sukma Andriana', '2020-12-22 06:58:10', '2020-12-22 06:58:10'),
(346, 'Fenny Evionita', 'Fenny Evionita', '2021-01-25 02:34:35', '2021-01-25 02:34:35'),
(347, 'Dyah Ayu Kusuma Negari', 'Dyah Ayu Kusuma Negari', '2021-01-25 02:34:43', '2021-01-25 02:34:43'),
(348, 'Ilham Nur Arif', 'Ilham Nur Arif', '2021-01-25 02:34:57', '2021-01-25 02:34:57'),
(349, 'Nabilla Caesandra Vira Andira', 'Nabilla Caesandra Vira Andira', '2021-01-25 02:35:05', '2021-01-25 02:35:05'),
(350, 'Tiara Dewi', 'Tiara Dewi', '2021-01-25 02:35:10', '2021-01-25 02:35:10'),
(351, 'Panca Nurhamzani', 'Panca Nurhamzani', '2021-01-25 02:35:18', '2021-01-25 02:35:18'),
(352, 'Indah Budiati', 'Indah Budiati', '2021-01-25 02:35:25', '2021-01-25 02:35:25'),
(353, 'Elisabeth Anindya Pradnya', 'Elisabeth Anindya Pradnya', '2021-01-25 02:35:31', '2021-01-25 02:35:31'),
(354, 'Galuh Kinnari Lalitya', 'Galuh Kinnari Lalitya', '2021-01-25 02:35:37', '2021-01-25 02:35:37'),
(355, 'Dhian Purwo Utami', 'Dhian Purwo Utami', '2021-01-25 02:35:43', '2021-01-25 02:35:43'),
(356, 'Karinda Novilasari', 'Karinda Novilasari', '2021-01-25 02:35:49', '2021-01-25 02:35:49'),
(357, 'Susilowati', 'Susilowati Suparlan', '2021-01-25 02:35:59', '2021-01-25 02:35:59'),
(358, 'Muthia Yasin', 'Muthia Yasin', '2021-01-25 02:36:07', '2021-01-25 02:36:07'),
(359, 'Faza Akmala Mahmuda', 'Faza Akmala Mahmuda', '2021-01-25 02:36:15', '2021-01-25 02:36:15'),
(360, 'Faizal Adi Febriyanto', 'Faizal Adi Febriyanto', '2021-01-25 02:36:21', '2021-01-25 02:36:21'),
(361, 'Riris Tristi Sipangkar', 'Riris Tristi Sipangkar', '2021-01-25 02:36:26', '2021-01-25 02:36:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman_user`
--

CREATE TABLE `peminjaman_user` (
  `id` int(11) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `owner_userid` varchar(100) NOT NULL,
  `aplikasi` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL,
  `approve` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peminjaman_user`
--

INSERT INTO `peminjaman_user` (`id`, `nama_peminjam`, `userid`, `owner_userid`, `aplikasi`, `reason`, `created_by`, `created_at`, `updated_at`, `updated_by`, `approve`) VALUES
(49, 'SURTI', 'U123456', 'TEJO', 'DOMAIN', 'EXPIRED', 'admin', '2021-05-08 09:05:59', '2021-05-08 09:05:59', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perubahan_status`
--

CREATE TABLE `perubahan_status` (
  `id` int(11) NOT NULL,
  `agent` varchar(100) NOT NULL,
  `request_id` varchar(100) NOT NULL,
  `costumer` varchar(200) NOT NULL,
  `no_costumer` varchar(100) DEFAULT NULL,
  `no_kartu` varchar(100) NOT NULL,
  `no_rekening` varchar(100) DEFAULT NULL,
  `product` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL,
  `transaction_time` varchar(50) DEFAULT NULL,
  `created_on` varchar(50) DEFAULT NULL,
  `owner` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` varchar(30) DEFAULT NULL,
  `approve` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perubahan_status`
--

INSERT INTO `perubahan_status` (`id`, `agent`, `request_id`, `costumer`, `no_costumer`, `no_kartu`, `no_rekening`, `product`, `category`, `status`, `transaction_time`, `created_on`, `owner`, `created_at`, `created_by`, `updated_at`, `updated_by`, `approve`) VALUES
(52, 'Heru Wicaksono', '1234', 'test', '1234', '12345', '12345', 'test product', 'test category', 'Buka blokir kartu ATM ubah 2 ke 1', '10/09/2021 03:13', NULL, 'Kristanti Putri Faviyanti', '2021-09-11 15:54:32', '48', '2021-09-11 15:48:18', '47', 2),
(53, 'Ghifarin Addausi', '1235', 'test', '1234', '12345', '12345', 'test product', 'test category', 'Buka blokir kartu ATM ubah 2 ke 1', '30/12/2020 23:59', NULL, 'Ghifarin Addausi', '2021-09-11 15:58:08', '48', '2021-09-11 15:58:08', '47', 3),
(54, 'Heru Wicaksono', '1234', 'test', '1234', '12345', '12345', 'test product', 'test category', 'Buka blokir kartu ATM ubah 2 ke 1', '10/09/2021 03:13', NULL, 'Kristanti Putri Faviyanti', '2021-09-11 15:51:26', '48', '2021-09-11 15:48:18', '47', 2),
(55, 'Ghifarin Addausi', '1235', 'test', '1234', '12345', '12345', 'test product', 'test category', 'Buka blokir kartu ATM ubah 2 ke 1', '30/12/2020 23:59', NULL, 'Ghifarin Addausi', '2021-09-11 15:58:08', '48', '2021-09-11 15:58:08', '47', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', NULL, '2021-08-26 17:06:53', '2021-08-26 17:06:53'),
(2, 'Agent', NULL, '2021-08-26 17:09:24', NULL),
(3, 'Admin', '2021-08-26 17:23:20', '2021-08-26 17:23:20', NULL),
(4, 'Operational Manager', '2021-09-09 15:57:51', '2021-09-09 15:57:51', NULL),
(5, 'KAUR', '2021-09-09 15:59:42', '2021-09-09 15:59:42', NULL),
(6, 'test', '2021-08-26 17:09:19', '2021-08-26 17:09:24', '2021-08-26 17:09:24');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `id` int(10) UNSIGNED NOT NULL,
  `site` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `site`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, 'SMG1', '2021-09-09 03:34:07', '2021-09-09 03:34:13', '2021-09-09 03:34:13'),
(9, 'SMG2', '2021-09-09 03:35:41', '2021-09-09 03:36:55', '2021-09-09 03:36:55'),
(10, 'SMG2', '2021-09-09 03:45:12', '2021-09-09 03:45:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(30) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `created_at`, `updated_at`, `created_by`, `deleted_at`) VALUES
(1, 'Buka blokir kartu ATM ubah 2 ke 1', '2021-09-11 10:54:07', '2021-01-28 14:17:34', '1', NULL),
(2, 'Buka blokir kartu ATM ubah 3 ke 1', '2021-09-11 10:54:10', '2021-01-28 14:18:12', '1', NULL),
(3, 'Pemblokiran ATM ubah 1 ke 3', '2021-09-11 10:54:13', '2021-01-28 14:24:45', '1', NULL),
(4, 'Pemblokiran ATM ubah 1 ke 0', '2021-09-11 10:54:16', '2021-01-28 14:24:59', '1', NULL),
(5, 'Buka Blokir saldo', '2021-09-11 10:54:20', '2021-01-28 14:25:11', '1', NULL),
(6, 'Buka Blokir rekening (Jika Ada)', '2021-09-11 10:54:23', '2021-01-28 14:25:27', '1', NULL),
(7, 'Salah eksekusi kartu kredit', '2021-09-11 10:54:26', '2021-01-28 14:25:36', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statusapprove`
--

CREATE TABLE `statusapprove` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusapprove`
--

INSERT INTO `statusapprove` (`id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Submitted', '2021-09-11 11:18:09', '2021-01-28 14:24:59'),
(3, 'Approved Admin', '2021-09-11 09:00:15', '2021-01-28 14:17:34'),
(4, 'Approved OM', '2021-09-11 09:00:12', '2021-01-28 14:18:12'),
(5, 'Approved KAUR', '2021-09-11 09:00:08', '2021-01-28 14:24:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `site_id`, `domain`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, 'admin', NULL, 'admin@admin.com', '$2y$10$kXq1PMJgpOlpziJfKKMtaOLc0HCPOUmsqWYF2Pwcp9il//WiYa4s6', 'Vf16A1Rlf5E3Dcn3Ybxf7LXZfKjpWwkwEzbIRLgEgqswA3TSkTBle2mhlvzz', '2020-09-21 03:30:31', '2020-09-21 03:30:31'),
(47, 3, 'admin smg2', '10', 'u12342', '$2y$10$1ALejc6vN2sUKvWVMKhrsOG/cphO0/eKwjcro3jlJq57JYHh9v01S', 'CJIOjeSvTDqmV6ay9SSwAvZSuZypO4dpktl2tE0fF2Est0IutL7toikT0gTy', '2021-09-09 15:55:35', '2021-09-09 15:55:35'),
(48, 2, 'agent smg2', '10', 'u12341', '$2y$10$s0W8mO00YaxjCm29ZrTd8.qiQQ8exx4cfQRSUVr3bEJNPHApmPhKW', 'Y8Yl0KQh2SxRfEehRNhfHOOP31BZLaW8jVBpz1E6QSIwqVZo0cQavosqXQIj', '2021-09-09 15:56:04', '2021-09-09 15:56:04'),
(49, 5, 'kaur smg2', '10', 'u12344', '$2y$10$FuaJQX5.wJg0toCoiggIY.acas6vugVmMfosA5HA9wRGuixqk56Ba', 'EUyenmCDHFu5OfnFi76xYrtkSEixKA90r07LXHM485WycXu4V1mh9UrEZn6Z', '2021-09-09 16:00:18', '2021-09-09 16:00:18'),
(50, 4, 'OM SMG2', '10', 'u12343', '$2y$10$WMvbUlT6ir84ETdVIFn.Fe48rtUStluApF5eo0zNQyuUWDJB0yeUi', 'XNUgPF7tlWMXT5mJ2RSOFT6rXbhOVJYgJK5Zbl3Baka4r3TDn2hPudaGmxBw', '2021-09-11 09:26:13', '2021-09-11 09:26:13');

-- --------------------------------------------------------

--
-- Table structure for table `user_actions`
--

CREATE TABLE `user_actions` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action_model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_actions`
--

INSERT INTO `user_actions` (`id`, `user_id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'created', 'roles', 6, '2021-08-26 05:23:27', '2021-08-26 05:23:27', NULL),
(2, 1, 'deleted', 'roles', 6, '2021-08-26 05:24:50', '2021-08-26 05:24:50', NULL),
(3, 1, 'deleted', 'roles', 5, '2021-08-26 05:25:39', '2021-08-26 05:25:39', NULL),
(4, 1, 'created', 'roles', 7, '2021-08-26 05:25:45', '2021-08-26 05:25:45', NULL),
(5, 1, 'deleted', 'roles', 7, '2021-08-26 05:25:49', '2021-08-26 05:25:49', NULL),
(6, 1, 'created', 'roles', 8, '2021-08-26 15:49:16', '2021-08-26 15:49:16', NULL),
(7, 1, 'deleted', 'roles', 1, '2021-08-26 15:49:22', '2021-08-26 15:49:22', NULL),
(8, 1, 'deleted', 'roles', 2, '2021-08-26 15:49:28', '2021-08-26 15:49:28', NULL),
(9, 1, 'created', 'roles', 9, '2021-08-26 15:49:33', '2021-08-26 15:49:33', NULL),
(10, 1, 'created', 'roles', 10, '2021-08-26 15:49:53', '2021-08-26 15:49:53', NULL),
(11, 1, 'created', 'roles', 11, '2021-08-26 15:50:07', '2021-08-26 15:50:07', NULL),
(12, 1, 'created', 'roles', 12, '2021-08-26 15:50:12', '2021-08-26 15:50:12', NULL),
(13, 1, 'deleted', 'roles', 9, '2021-08-26 16:02:29', '2021-08-26 16:02:29', NULL),
(14, 1, 'created', 'roles', 5, '2021-08-26 17:06:42', '2021-08-26 17:06:42', NULL),
(15, 1, 'deleted', 'roles', 1, '2021-08-26 17:06:53', '2021-08-26 17:06:53', NULL),
(16, 1, 'created', 'roles', 6, '2021-08-26 17:09:19', '2021-08-26 17:09:19', NULL),
(17, 1, 'deleted', 'roles', 6, '2021-08-26 17:09:24', '2021-08-26 17:09:24', NULL),
(18, 1, 'created', 'roles', 7, '2021-08-26 17:23:20', '2021-08-26 17:23:20', NULL),
(19, 1, 'created', 'sites', 8, '2021-09-09 03:34:07', '2021-09-09 03:34:07', NULL),
(20, 1, 'deleted', 'sites', 8, '2021-09-09 03:34:13', '2021-09-09 03:34:13', NULL),
(21, 1, 'created', 'sites', 9, '2021-09-09 03:35:41', '2021-09-09 03:35:41', NULL),
(22, 1, 'deleted', 'sites', 9, '2021-09-09 03:36:55', '2021-09-09 03:36:55', NULL),
(23, 1, 'created', 'sites', 10, '2021-09-09 03:45:12', '2021-09-09 03:45:12', NULL),
(24, 1, 'created', 'roles', 8, '2021-09-09 15:57:51', '2021-09-09 15:57:51', NULL),
(25, 1, 'created', 'roles', 9, '2021-09-09 15:59:42', '2021-09-09 15:59:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `peminjaman_user`
--
ALTER TABLE `peminjaman_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perubahan_status`
--
ALTER TABLE `perubahan_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_deleted_at_index` (`deleted_at`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusapprove`
--
ALTER TABLE `statusapprove`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `users_domain_unique` (`domain`) USING BTREE;

--
-- Indexes for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_254_user_user_id_user_action` (`user_id`),
  ADD KEY `user_actions_deleted_at_index` (`deleted_at`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=362;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `peminjaman_user`
--
ALTER TABLE `peminjaman_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `perubahan_status`
--
ALTER TABLE `perubahan_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `statusapprove`
--
ALTER TABLE `statusapprove`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_actions`
--
ALTER TABLE `user_actions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_actions`
--
ALTER TABLE `user_actions`
  ADD CONSTRAINT `fk_254_user_user_id_user_action` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
