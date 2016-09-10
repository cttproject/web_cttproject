-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Sep 2016 pada 07.38
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ctt_project`
--
CREATE DATABASE IF NOT EXISTS `ctt_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ctt_project`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sys_menus`
--

CREATE TABLE `sys_menus` (
  `id` int(11) NOT NULL,
  `label` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_menus`
--

INSERT INTO `sys_menus` (`id`, `label`, `title`, `link`) VALUES
(1, 'HOME', 'HOME', 'home.php'),
(2, 'LAPTOP', 'LAPTOP', 'laptop.php'),
(3, 'AKSESORIS', 'AKSESORIS', 'aksesoris.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sys_menus`
--
ALTER TABLE `sys_menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sys_menus`
--
ALTER TABLE `sys_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;




CREATE TABLE `sys_menu_laptop` (
  `id` int(11) NOT NULL,
  `label_brand` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_menu_laptop`
--

INSERT INTO `sys_menu_laptop` (`id`, `label_brand`, `link`) VALUES
(1, 'ACER', 'acer.html'),
(2, 'APPLE', 'facebook.com'),
(3, 'ASUS', 'twitter.com'),
(4, 'MSI', 'instagram.com'),
(5, 'LENOVO', 'lenovo.html'),
(6, 'TOSHIBA', 'toshiba.html');

/*QUERY PRINTER*/
CREATE TABLE `sys_menu_printer` (
  `id` int(11) NOT NULL,
  `label_brand` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `sys_menu_printer` (`id`, `label_brand`, `link`) VALUES
(1, 'HP', '#'),
(2, 'EPSON', '#'),
(3, 'XEROX', '#'),
(4, 'SAMSUNG', '#'),
(5, 'CANON', '#');


ALTER TABLE `sys_menu_printer`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `sys_menu_printer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

-- TABLE AKSESORIS
CREATE TABLE `sys_menu_accesoris` (
  `id` int(11) NOT NULL,
  `label_cat` varchar(20) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sys_menu_accesoris`
--

INSERT INTO `sys_menu_accesoris` (`id`, `label_cat`, `link`) VALUES
(1, 'LCD', '#'),
(2, 'MOUSE', '#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sys_menu_accesoris`
--
ALTER TABLE `sys_menu_accesoris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sys_menu_accesoris`
--
ALTER TABLE `sys_menu_accesoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
