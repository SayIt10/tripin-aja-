-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 03:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tripin_aja`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `password` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `email` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `gender` varchar(10) CHARACTER SET armscii8 NOT NULL,
  `city` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `phone_number` varchar(250) NOT NULL,
  `address` text CHARACTER SET armscii8 NOT NULL,
  `Joindate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id_user`, `username`, `password`, `email`, `gender`, `city`, `phone_number`, `address`, `Joindate`) VALUES
(2, 'say it 10 ', 'adnan2002', 'adnangumelar76@gmail.com', 'male ', 'bekasi ', '081223748135', 'jl.bojong molek x f30/4', '2021-12-05 00:00:00'),
(3, 'adnan', 'sayyid2002', 'sayit.corp.10@gmail.com', 'male', 'bekasi', '081310197464', 'jl.bojong sari raya c6/2', '2021-12-05 16:19:19'),
(4, 'admin', 'admin', 'admin@gmail.com', 'male', 'bekasi', '0812-2374-8135', 'Jl.bojong molek X F30/4', '2021-12-08 18:41:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
