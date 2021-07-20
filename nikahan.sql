-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 02:59 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nikahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `ID_CATERING` int(11) NOT NULL,
  `NAMA_PAKET` varchar(225) NOT NULL,
  `MENU_PEMBUKA` varchar(225) NOT NULL,
  `MENU_UTAMA` varchar(225) NOT NULL,
  `MENU_PENUTUP` varchar(225) NOT NULL,
  `HARGA` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`ID_CATERING`, `NAMA_PAKET`, `MENU_PEMBUKA`, `MENU_UTAMA`, `MENU_PENUTUP`, `HARGA`) VALUES
(1, 'Paket Hemat 1', 'Kue, Jeruk, Agar - Agar', 'Rendang, Ayam Suir, Sayur Sop', 'Jus Mangga, Es Krim, Pudding', 30000),
(2, 'Paket Hemat 2', 'Crepes, Jeruk, Agar - Agar', 'Rendang, Ayam Suir, Sayur Kol', 'Jus Jeruk, Es Krim, Pudding', 35000),
(3, 'Paket Hemat 3', 'Crepes, Mangga, Agar - Agar', 'Rendang, Ayam Suir, Sayur Capcay', 'Jus Mangga, Es Krim, Pudding', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `gedung`
--

CREATE TABLE `gedung` (
  `ID_GEDUNG` int(11) NOT NULL,
  `NAMA_GEDUNG` varchar(255) NOT NULL,
  `KAPASITAS` int(11) NOT NULL,
  `ALAMAT` varchar(255) NOT NULL,
  `HARGA_SEWA` bigint(11) NOT NULL,
  `DESKRIPSI_GEDUNG` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung`
--

INSERT INTO `gedung` (`ID_GEDUNG`, `NAMA_GEDUNG`, `KAPASITAS`, `ALAMAT`, `HARGA_SEWA`, `DESKRIPSI_GEDUNG`) VALUES
(7, 'Gedung Prof.Dr. Satrio', 450, 'Jl. Ciremai No. 2 Bandung', 13000000, 'Terdapat didalam komplek TNI, Lokasi dekat dengan pusat kota'),
(8, 'Gedung Senbik', 600, 'Jl. Soekarno Hatta Bandung', 15000000, 'Tempat strategis dengan parkiran yang sangat luas'),
(9, 'Mepro Hall', 500, 'Jl. Soekarno Hatta 789 Bandung', 19000000, 'Tempat strategis dan bangunan premium'),
(10, 'Bandung Convention Center', 1000, 'Jl. Soekarno-Hatta No.354, Kb. Lega, Bojongloa Kidul, Kota Bandung, Jawa Barat 40243', 45000000, 'Lokasi BCC ini merupakan lokasi yang strategis karena berada tidak jauh dari pusat kota Bandung, ditunjang dengan Prasarana berupa jalan yang luas menuju gedung dan dekat dengan fasilitas yang menunjang gedung konvensi seperti hotel dan akses transportasi umum.');

-- --------------------------------------------------------

--
-- Table structure for table `gedung_img`
--

CREATE TABLE `gedung_img` (
  `ID_IMG` int(11) NOT NULL,
  `ID_GEDUNG` int(11) NOT NULL,
  `NAMA_GEDUNG` varchar(225) NOT NULL,
  `PATH` varchar(225) NOT NULL,
  `IMG_NAME` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gedung_img`
--

INSERT INTO `gedung_img` (`ID_IMG`, `ID_GEDUNG`, `NAMA_GEDUNG`, `PATH`, `IMG_NAME`) VALUES
(11, 7, 'Gedung Prof.Dr. Satrio (Seskoad)', 'http://localhost/dev-nikahan/assets/images/gedung/', 'Gedung-Seskoad-indoor1.jpg'),
(12, 7, 'Gedung Prof.Dr. Satrio (Seskoad)', 'http://localhost/dev-nikahan/assets/images/gedung/', 'Gedung-Seskoad-indoor2.jpg'),
(13, 7, 'Gedung Prof.Dr. Satrio (Seskoad)', 'http://localhost/dev-nikahan/assets/images/gedung/', 'Gedung-Seskoad-indoor3.jpg'),
(14, 8, 'Gedung Senbik', 'http://localhost/dev-nikahan/assets/images/gedung/', 'DSC_0503-73.jpg'),
(15, 9, 'Mepro Hall', 'http://localhost/dev-nikahan/assets/images/gedung/', 'CB_OYFpVEAALiIo.jpg'),
(16, 10, 'Bandung Convention Center', 'http://localhost/dev-nikahan/assets/images/gedung/', 'dsc_0571.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `home_data`
-- (See below for the actual view)
--
CREATE TABLE `home_data` (
`ID_GEDUNG` int(11)
,`HARGA_SEWA` bigint(11)
,`NAMA_GEDUNG` varchar(255)
,`KAPASITAS` int(11)
,`PATH` varchar(225)
,`IMG_NAME` varchar(225)
);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `KODE_PEMBAYARAN` varchar(225) NOT NULL DEFAULT 'TRS000',
  `ID_PEMBAYARAN` int(11) NOT NULL,
  `KODE_PEMESANAN` varchar(225) NOT NULL DEFAULT 'PMSN000',
  `ID_PEMESANAN` int(11) NOT NULL,
  `ATAS_NAMA` varchar(225) NOT NULL,
  `NOMINAL_TRANSFER` bigint(20) NOT NULL,
  `BANK_PENGIRIM` varchar(225) NOT NULL,
  `TANGGAL_TRANSFER` date NOT NULL,
  `FLAG` int(11) NOT NULL,
  `PATH` varchar(225) NOT NULL,
  `IMG_NAME` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`KODE_PEMBAYARAN`, `ID_PEMBAYARAN`, `KODE_PEMESANAN`, `ID_PEMESANAN`, `ATAS_NAMA`, `NOMINAL_TRANSFER`, `BANK_PENGIRIM`, `TANGGAL_TRANSFER`, `FLAG`, `PATH`, `IMG_NAME`) VALUES
('TRS000', 9, 'PMSN000', 34, 'Nirwansyah R', 33150000, 'Bank BCA', '2019-01-25', 1, 'http://localhost/dev-nikahan/assets/images/client-bukti-pembayaran/', 'client-trf_24012019_070646.jpg'),
('TRS000', 10, 'PMSN000', 35, 'Nirwansyah Ramdhani', 30500000, 'Bank BCA', '2019-01-25', 1, 'http://localhost/dev-nikahan/assets/images/client-bukti-pembayaran/', 'client-trf_25012019_032749.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `ID_PEMESANAN` int(11) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TANGGAL_PEMESANAN` date NOT NULL,
  `ID_CATERING` int(11) DEFAULT NULL,
  `ID_GEDUNG` int(11) NOT NULL,
  `JUMLAH_CATERING` int(11) DEFAULT NULL,
  `STATUS` int(1) NOT NULL,
  `REMARKS` varchar(225) DEFAULT NULL,
  `FLAG` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`ID_PEMESANAN`, `USERNAME`, `EMAIL`, `TANGGAL_PEMESANAN`, `ID_CATERING`, `ID_GEDUNG`, `JUMLAH_CATERING`, `STATUS`, `REMARKS`, `FLAG`) VALUES
(34, 'nirwannirwan', 'nirwan.syah@yahoo.co.id', '2019-02-11', 2, 9, 350, 1, NULL, 2),
(35, 'nirwannirwan', 'nirwan.syah@yahoo.co.id', '2019-02-11', 2, 8, 400, 1, NULL, 2),
(36, 'nirwannirwan', 'nirwan.syah@yahoo.co.id', '2019-02-21', 2, 9, 300, 1, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_details`
--

CREATE TABLE `pemesanan_details` (
  `ID_DETAILS` int(11) NOT NULL,
  `ID_PEMESANAN` int(11) NOT NULL,
  `PATH` varchar(225) NOT NULL,
  `FILE_NAME` varchar(225) NOT NULL,
  `DESKRIPSI_ACARA` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan_details`
--

INSERT INTO `pemesanan_details` (`ID_DETAILS`, `ID_PEMESANAN`, `PATH`, `FILE_NAME`, `DESKRIPSI_ACARA`) VALUES
(16, 34, 'http://localhost/dev-nikahan/assets/user-proposal/', 'nirwannirwan_24012019_070542.pdf', 'Gathering temen temen'),
(17, 35, 'http://localhost/dev-nikahan/assets/user-proposal/', 'nirwannirwan_25012019_032600.pdf', 'Acara Reuni'),
(18, 36, 'http://localhost/dev-nikahan/assets/user-proposal/', 'nirwannirwan_31012019_024348.pdf', 'Buat Nikahan');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_fix_detail`
--

CREATE TABLE `pemesanan_fix_detail` (
  `ID_FIX_DETAIL` int(11) NOT NULL,
  `ID_PEMESANAN` int(11) NOT NULL,
  `USERNAME` varchar(225) NOT NULL,
  `TANGGAL_APPROVAL` date NOT NULL,
  `TANGGAL_FINAL_PEMESANAN` date NOT NULL,
  `TANGGAL_DEADLINE` date NOT NULL,
  `FINAL_STATUS` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan_fix_detail`
--

INSERT INTO `pemesanan_fix_detail` (`ID_FIX_DETAIL`, `ID_PEMESANAN`, `USERNAME`, `TANGGAL_APPROVAL`, `TANGGAL_FINAL_PEMESANAN`, `TANGGAL_DEADLINE`, `FINAL_STATUS`) VALUES
(52, 34, 'nirwannirwan', '2019-01-24', '2019-02-11', '2019-01-26', 2),
(53, 35, 'nirwannirwan', '2019-01-25', '2019-02-11', '2019-01-27', 1),
(54, 36, 'nirwannirwan', '2019-01-31', '2019-02-21', '2019-02-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perawatan`
--

CREATE TABLE `perawatan` (
  `ID_PERAWATAN` int(11) NOT NULL,
  `NO_ID` varchar(225) NOT NULL,
  `NAMA_PERAWATAN` varchar(225) NOT NULL,
  `NAMA_GEDUNG` varchar(225) NOT NULL,
  `TANGGAL_PEMBAYARAN` date NOT NULL,
  `BIAYA` bigint(15) NOT NULL,
  `PATH` varchar(225) NOT NULL,
  `IMG_NAME` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `USERNAME` varchar(225) NOT NULL,
  `NAMA_LENGKAP` varchar(225) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `NO_TELEPON` varchar(15) NOT NULL,
  `ALAMAT` varchar(225) NOT NULL,
  `TANGGAL_LAHIR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`USERNAME`, `NAMA_LENGKAP`, `PASSWORD`, `EMAIL`, `NO_TELEPON`, `ALAMAT`, `TANGGAL_LAHIR`) VALUES
('nirwannirwan', 'Nirwansyah Ramdhani', 'wewkkwew', 'nirwan.syah@yahoo.co.id', '083820422271', 'Jl. Binong Jati Gg. Kurnia 1 No. 1', '1995-02-11'),
('wayan', 'Wayan Persada Panji Nugraha', 'wewkkwew', 'wayanthea@gmail.com', '085722986720', 'Komplek GBA I , Bojong Soang', '1993-03-19');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_pemesanan`
-- (See below for the actual view)
--
CREATE TABLE `v_pemesanan` (
`ID_PEMESANAN` varchar(18)
,`USERNAME` varchar(255)
,`TANGGAL_PEMESANAN` date
,`EMAIL` varchar(100)
,`JUMLAH_CATERING` varchar(11)
,`NAMA_PAKET` varchar(225)
,`NAMA_GEDUNG` varchar(255)
,`HARGA_SATUAN` bigint(15)
,`TOTAL_HARGA` bigint(30)
,`STATUS` varchar(23)
,`HARGA_SEWA` bigint(11)
,`TOTAL_KESELURUHAN` bigint(31)
,`DESKRIPSI_ACARA` varchar(225)
,`REMARKS` varchar(225)
);

-- --------------------------------------------------------

--
-- Structure for view `home_data`
--
DROP TABLE IF EXISTS `home_data`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `home_data`  AS  select `gedung`.`ID_GEDUNG` AS `ID_GEDUNG`,`gedung`.`HARGA_SEWA` AS `HARGA_SEWA`,`gedung`.`NAMA_GEDUNG` AS `NAMA_GEDUNG`,`gedung`.`KAPASITAS` AS `KAPASITAS`,`gedung_img`.`PATH` AS `PATH`,`gedung_img`.`IMG_NAME` AS `IMG_NAME` from (`gedung` join `gedung_img` on(`gedung_img`.`ID_GEDUNG` = `gedung`.`ID_GEDUNG`)) group by `gedung`.`ID_GEDUNG` ;

-- --------------------------------------------------------

--
-- Structure for view `v_pemesanan`
--
DROP TABLE IF EXISTS `v_pemesanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pemesanan`  AS  select concat('PMSN000',`p`.`ID_PEMESANAN`) AS `ID_PEMESANAN`,`p`.`USERNAME` AS `USERNAME`,`p`.`TANGGAL_PEMESANAN` AS `TANGGAL_PEMESANAN`,`p`.`EMAIL` AS `EMAIL`,coalesce(`p`.`JUMLAH_CATERING`,'Tidak Ada') AS `JUMLAH_CATERING`,coalesce(`c`.`NAMA_PAKET`,'Tidak Ada') AS `NAMA_PAKET`,`g`.`NAMA_GEDUNG` AS `NAMA_GEDUNG`,`c`.`HARGA` AS `HARGA_SATUAN`,coalesce(`c`.`HARGA` * `p`.`JUMLAH_CATERING`,0) AS `TOTAL_HARGA`,case `p`.`STATUS` when 0 then 'PENDING' when 1 then 'DISETUJUI' when 2 then 'DITOLAK' when 3 then 'CANCELED WITH REFUND' when 4 then 'CANCELED WITHOUT REFUND' end AS `STATUS`,`g`.`HARGA_SEWA` AS `HARGA_SEWA`,`g`.`HARGA_SEWA` + coalesce(`c`.`HARGA` * `p`.`JUMLAH_CATERING`,0) AS `TOTAL_KESELURUHAN`,`pemesanan_details`.`DESKRIPSI_ACARA` AS `DESKRIPSI_ACARA`,`p`.`REMARKS` AS `REMARKS` from (((`pemesanan` `p` left join `catering` `c` on(`c`.`ID_CATERING` = `p`.`ID_CATERING`)) left join `gedung` `g` on(`g`.`ID_GEDUNG` = `p`.`ID_GEDUNG`)) left join `pemesanan_details` on(`pemesanan_details`.`ID_PEMESANAN` = `p`.`ID_PEMESANAN`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`ID_CATERING`);

--
-- Indexes for table `gedung`
--
ALTER TABLE `gedung`
  ADD PRIMARY KEY (`ID_GEDUNG`);

--
-- Indexes for table `gedung_img`
--
ALTER TABLE `gedung_img`
  ADD PRIMARY KEY (`ID_IMG`),
  ADD KEY `gedung_img_ibfk_1` (`ID_GEDUNG`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_PEMBAYARAN`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`ID_PEMESANAN`),
  ADD KEY `USERNAME` (`USERNAME`),
  ADD KEY `ID_GEDUNG` (`ID_GEDUNG`),
  ADD KEY `ID_CATERING` (`ID_CATERING`);

--
-- Indexes for table `pemesanan_details`
--
ALTER TABLE `pemesanan_details`
  ADD PRIMARY KEY (`ID_DETAILS`),
  ADD KEY `ID_PEMESANAN` (`ID_PEMESANAN`);

--
-- Indexes for table `pemesanan_fix_detail`
--
ALTER TABLE `pemesanan_fix_detail`
  ADD PRIMARY KEY (`ID_FIX_DETAIL`),
  ADD KEY `ID_PEMESANAN` (`ID_PEMESANAN`);

--
-- Indexes for table `perawatan`
--
ALTER TABLE `perawatan`
  ADD PRIMARY KEY (`ID_PERAWATAN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `ID_CATERING` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gedung`
--
ALTER TABLE `gedung`
  MODIFY `ID_GEDUNG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gedung_img`
--
ALTER TABLE `gedung_img`
  MODIFY `ID_IMG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `ID_PEMBAYARAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `ID_PEMESANAN` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pemesanan_details`
--
ALTER TABLE `pemesanan_details`
  MODIFY `ID_DETAILS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pemesanan_fix_detail`
--
ALTER TABLE `pemesanan_fix_detail`
  MODIFY `ID_FIX_DETAIL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `perawatan`
--
ALTER TABLE `perawatan`
  MODIFY `ID_PERAWATAN` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gedung_img`
--
ALTER TABLE `gedung_img`
  ADD CONSTRAINT `gedung_img_ibfk_1` FOREIGN KEY (`ID_GEDUNG`) REFERENCES `gedung` (`ID_GEDUNG`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`USERNAME`) REFERENCES `user` (`USERNAME`),
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`ID_GEDUNG`) REFERENCES `gedung` (`ID_GEDUNG`),
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`ID_CATERING`) REFERENCES `catering` (`ID_CATERING`);

--
-- Constraints for table `pemesanan_details`
--
ALTER TABLE `pemesanan_details`
  ADD CONSTRAINT `pemesanan_details_ibfk_1` FOREIGN KEY (`ID_PEMESANAN`) REFERENCES `pemesanan` (`ID_PEMESANAN`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan_fix_detail`
--
ALTER TABLE `pemesanan_fix_detail`
  ADD CONSTRAINT `pemesanan_fix_detail_ibfk_1` FOREIGN KEY (`ID_PEMESANAN`) REFERENCES `pemesanan` (`ID_PEMESANAN`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
