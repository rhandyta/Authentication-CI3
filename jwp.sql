-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 08:08 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(256) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tokens`
--

INSERT INTO `tokens` (`id`, `token`, `user_email`, `created_at`) VALUES
(14, 'i8BarsfZJqHxXXBuyMKKe2rVTfK5wDSd+jEzTeED50U=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(15, 'Ut8U3Tewv+TpOKT78n9JWM2T+V1qLTy1h9KbXHKyj9Q=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(16, 'qFOzlS48BU/PpMS20tX1Z+hGtU2ALOZLCdFSMW17GME=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(17, '43EnV8ODjbffVBf/kaFoSDtzxEbiNYpm7QmdW3uACaE=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(18, 'XP08rpr8e4pHOEfMVKB4aoFvWeDqhwp5RMF67eQLOyY=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(19, 'VSvNhaBf4sjYM85Pj569H7QCyf7YIQcb2bPb1JQWglM=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(20, 'BXFbNd/wN1+oKG5caOF2r5V2osnYvKEnNVwNYcajoWM=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(21, 'IiwD3d4c8pZtNUYKxy1dgNsjDOzY8ROQgO9UL6hHd6I=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(22, 'T5OkWAc7xzRVsnRNzXBPd93C6bsWP+efTrFQ8V6Ep/Q=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(23, '3F9HApdYm0osdzvxLvx/bCL32cdOdWNESDcrol075rw=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(24, '7qIPS0s3XZGBz3swTvmA5+kxd1Pkifi6pPVHVFN/Rk8=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(25, 'xGP7KwlTDs4QCPnXdT0EHzjtsBWvPWNuXIaVSK0SJbc=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(26, 'FdyifQ3KDTagz+XXD5ll7JvOzNhM41y0bDwHtF8ToQU=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(27, 'RPtNWLahLIJDIhFrvkzwULMKk6+jo3kxr9Dm1Keu1cE=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(28, 'npWv1sSyI3E8LnBL34oV8kVXpZ8KL7nJ325RCHgSOdY=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(29, 'CqVXp/oOYLCp5vcRx47TokhBU9kaK3TutCcRskmGHw0=', 'briantamarhandyta@gmail.com', '2021-12-28'),
(30, 'Ztvab03HmOra3eUejYG724k7NrLxnG29c6c7Za2Pf+Q=', 'admin@admin.com', '2021-12-29'),
(31, '1T0kd7VFio/y9QbyBsBW3DQEGWOV7n2jgcXvtAyQJuA=', 'briantamarhandyta@gmail.com', '2021-12-29'),
(32, 'vgYdV3ZXjQh9Se3m5p6zAFgk3pai0qdWeOgSbndKm9E=', 'briantamarhandyta@gmail.com', '2021-12-29'),
(33, 'rhzMW7thPITfGiGaJy30zMDX7KaHObOBoXhXAbyD6Jc=', 'rhandytabriantama@gmail.com', '2021-12-29'),
(34, '/N5I56lXQqxchFd1K9x7PWOiYHzrihLCAr0SzEdIzOg=', 'briantamarhandyta@gmail.com', '2021-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `name`, `password`, `image`) VALUES
('admin@admin.com', 'Admin', '$2y$10$uUtisX6/Mtob2fKZH9HeD.KCjhPUCXmEjdpMQqzJcdnFP/DUiA0Cm', 'a80b8647ebd82d95eb915fcc2f0e4402.jpg'),
('briantamarhandyta@gmail.com', 'RhandytaB', '$2y$10$sVM3ZIfDm4kAkTdICNsc5O5nAAYEiQHqy.xMKOx9pPHKuncasdy4u', '5de271103fb9f4cfb63d1c832671a6ad.jpg'),
('rhandytabriantama@gmail.com', 'Rhandyta', '$2y$10$bFKEhVyKc9Jwt6158M3bYeSV8eFUKZwdXMPdVUs67QkvxTColtepu', 'be2fd9b4692411e7f4f20ea9436d8eee.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
