-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 09, 2017 at 06:58 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 5.6.27-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbukm`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataanggota`
--

CREATE TABLE `dataanggota` (
  `id_anggota` int(11) NOT NULL,
  `name_anggota` varchar(200) NOT NULL,
  `address_anggota` varchar(200) NOT NULL,
  `nohp_anggota` varchar(50) NOT NULL,
  `email_anggota` varchar(50) NOT NULL,
  `tgllahir_anggota` date NOT NULL,
  `gender_anggota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataanggota`
--

INSERT INTO `dataanggota` (`id_anggota`, `name_anggota`, `address_anggota`, `nohp_anggota`, `email_anggota`, `tgllahir_anggota`, `gender_anggota`) VALUES
(101, 'echoecho', 'asdasda', '1234566', 'ekoeko@gmail.com', '2016-12-08', 'male'),
(102, 'test', 'test', '123546789', 'ekoeko@gmail.com', '2016-12-08', 'male'),
(103, 'ekp', 'ekp', 'ekp', 'ekp@gmail.com', '2017-01-21', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `datakas`
--

CREATE TABLE `datakas` (
  `id_dana` int(11) NOT NULL,
  `aliran_dana` varchar(100) NOT NULL,
  `keperluan_dana` varchar(100) NOT NULL,
  `jumlah_dana` int(11) NOT NULL,
  `tanggal_input` date NOT NULL,
  `termasuk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datakas`
--

INSERT INTO `datakas` (`id_dana`, `aliran_dana`, `keperluan_dana`, `jumlah_dana`, `tanggal_input`, `termasuk`) VALUES
(101, 'Asal Dana', 'Tujuan Keperluan Dana', 1000000, '2016-12-15', 'pemasukkan'),
(102, 'asdasd', 'asdasdas', 135000, '2016-12-26', 'pemasukkan'),
(104, 'hhhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhh', 200000, '2016-12-28', 'pengeluaran'),
(105, 'ini aliran dana', 'ini keperluan dana', 350000, '2017-01-26', 'pemasukkan'),
(106, 'kas doscom', 'beli jajan ', 150000, '2017-01-03', 'pengeluaran');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bio` text NOT NULL,
  `born_date` date NOT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `role_id` int(2) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `edit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `email`, `bio`, `born_date`, `gender`, `role_id`, `create_at`, `edit_at`) VALUES
(100, 'eko kurnia pradika', 'ekocakep', '8cc37fa3d560f415b5ae65e75c35798b', 'ekoanakdoscom@gmail.com', '', '1994-04-02', 'male', 2, '2016-12-12 12:21:47', '2017-01-04 09:16:04'),
(101, 'admin', 'admin', 'c3284d0f94606de1fd2af172aba15bf3', 'facebookechoecho@gmail.com', '', '2016-12-12', 'male', 1, '2016-12-12 12:23:02', '0000-00-00 00:00:00'),
(105, 'Azzanty ', 'azzanty', 'c53e100793f610a8d445e3815055c785', 'azzanty@gmail.com', '', '0000-00-00', 'female', 2, '2016-12-21 05:19:29', '2017-01-04 09:13:14'),
(106, 'ekokurnia', 'ekokurnia', '28cbd768a3a12b0828238f1ea7fc455e', 'ekoanakdoscom@gmail.com', '', '2016-12-29', 'male', 1, '2016-12-31 12:59:23', '2017-01-04 09:12:37'),
(107, 'masaboe', 'masaboecakep', '45a4831c3ecabb5e4cb049444aa13383', 'dinus@gmail.com', '', '2017-01-03', 'male', 1, '2017-01-04 09:14:19', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataanggota`
--
ALTER TABLE `dataanggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `datakas`
--
ALTER TABLE `datakas`
  ADD PRIMARY KEY (`id_dana`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataanggota`
--
ALTER TABLE `dataanggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `datakas`
--
ALTER TABLE `datakas`
  MODIFY `id_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
