-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 09:20 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kodebuku` varchar(10) NOT NULL,
  `judulbuku` varchar(200) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(25) NOT NULL,
  `kotaterbit` varchar(25) NOT NULL,
  `tahunterbit` varchar(4) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `urlcover` varchar(1000) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kodebuku`, `judulbuku`, `pengarang`, `penerbit`, `kotaterbit`, `tahunterbit`, `kategori`, `isbn`, `url`, `urlcover`, `deskripsi`) VALUES
('', 'PKM-GT-Potensi-Ekstrak-Daun-Berenuk', 'Mahasiswa 2', 'budi pustaka', 'jogja', '2015', 'web design', 'ISBN 978-602-71905-6-5', 'PKM-GT-Potensi-Ekstrak-Daun-Berenuk.pdf', '', 'PKM'),
('b001', 'Metode Mutasi dengan Representasi Individu Real', 'Mahasiswa 1', 'erlangga', 'bandung', '2015', 'web programming', 'ISBN 978-602-71905-6-6', 'Metode Mutasi dengan Representasi Individu Real.pdf', '', 'Buku 1 '),
('b003', 'PKM-P-Peningkatan-Motivasi-Belajar-Matematika', 'Mahasiswa 3', '', '', '2014', '', '', 'PKM-P-Peningkatan-Motivasi-Belajar-Matematika.pdf', '', 'PKM P'),
('b004', 'UTS AI 2015', 'Dosen 1', '', '', '2015', '', '', 'UTS AI 2015.PDF', '', 'Soal Uts'),
('b005', 'UAS AI 2015', 'Dosen 2', '', '', '2015', '', '', 'UAS AI 2015.PDF', '', ''),
('b011', 'Test Upload 1', 'Mahasiswa 4', 'Penerbit 3', 'Bandung', '2013', 'Marketing', 'ISBN 978-602-71905-6-8', 'E021102052058.pdf', '13310437_1330190286996790_3415443341099924869_n.jpg', 'Test uploaad'),
('b012', 'Test Upload 2', 'Mahasiswa 3', 'Penerbit 4', 'Bandung', '2015', 'Marketing', 'ISBN 978-602-71905-6-3', 'TA-III.pdf', '000b_1341628557181236.jpg', 'Test upload 2');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pinjam`
--

CREATE TABLE IF NOT EXISTS `detail_pinjam` (
`kodedetail` int(11) NOT NULL,
  `kodebuku` varchar(10) NOT NULL,
  `kodepinjam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
`kodepinjam` int(11) NOT NULL,
  `tglpinjam` date NOT NULL,
  `tglkembali` date NOT NULL,
  `bataspengembalian` date NOT NULL,
  `username` varchar(25) NOT NULL,
  `denda` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`kodepinjam`, `tglpinjam`, `tglkembali`, `bataspengembalian`, `username`, `denda`) VALUES
(1, '2016-06-15', '2016-06-18', '2016-06-22', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`idrole` int(11) NOT NULL,
  `namarole` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`idrole`, `namarole`, `status`) VALUES
(1, 'Admin', 'Aktif'),
(2, 'Siswa', 'Aktif'),
(3, 'Guru', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `notelpon` varchar(15) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`, `alamat`, `notelpon`, `role`) VALUES
('1', 'dery', 'aquagalonsehat', 'teratai', '02181319031', 2),
('user01', 'User 1', 'password01', 'Sukabirus', '081325468476', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kodebuku`);

--
-- Indexes for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
 ADD PRIMARY KEY (`kodedetail`), ADD KEY `kodebuku` (`kodebuku`), ADD KEY `kodepinjam` (`kodepinjam`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`kodepinjam`), ADD KEY `username` (`username`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`idrole`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`), ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
MODIFY `kodedetail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `kodepinjam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `idrole` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pinjam`
--
ALTER TABLE `detail_pinjam`
ADD CONSTRAINT `detail_pinjam_ibfk_1` FOREIGN KEY (`kodebuku`) REFERENCES `buku` (`kodebuku`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `detail_pinjam_ibfk_2` FOREIGN KEY (`kodepinjam`) REFERENCES `peminjaman` (`kodepinjam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `role` (`idrole`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
