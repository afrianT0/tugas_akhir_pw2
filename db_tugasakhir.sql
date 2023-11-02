-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_tugasakhir.tbl_kategori_mobil
CREATE TABLE IF NOT EXISTS `tbl_kategori_mobil` (
  `id_kategori` varchar(50) NOT NULL DEFAULT '',
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_tugasakhir.tbl_kategori_mobil: ~2 rows (approximately)
DELETE FROM `tbl_kategori_mobil`;
INSERT INTO `tbl_kategori_mobil` (`id_kategori`, `nama_kategori`) VALUES
	('ID-CAT-001', 'SUV'),
	('ID-CAT-002', 'MPV');

-- Dumping structure for table db_tugasakhir.tbl_mobil
CREATE TABLE IF NOT EXISTS `tbl_mobil` (
  `id_mobil` varchar(50) NOT NULL DEFAULT '',
  `id_kategori` varchar(50) NOT NULL DEFAULT '',
  `nama_mobil` varchar(50) NOT NULL,
  `stock` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mobil`),
  KEY `Index 2` (`id_kategori`),
  CONSTRAINT `FK_tbl_mobil_tbl_kategori_mobil` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori_mobil` (`id_kategori`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_tugasakhir.tbl_mobil: ~8 rows (approximately)
DELETE FROM `tbl_mobil`;
INSERT INTO `tbl_mobil` (`id_mobil`, `id_kategori`, `nama_mobil`, `stock`, `harga`, `satuan`) VALUES
	('ID-CAR-001', 'ID-CAT-001', 'Toyota Raizer 2021', 2, 350000, 'Days'),
	('ID-CAR-002', 'ID-CAT-001', 'Mitsubishi Pajero Sport 2021', 1, 500000, 'Days'),
	('ID-CAR-003', 'ID-CAT-001', 'Toyota Fortuner 2021', 2, 500000, 'Days'),
	('ID-CAR-004', 'ID-CAT-001', 'Daihatsu Terios 2019', 2, 300000, 'Days'),
	('ID-CAR-005', 'ID-CAT-002', 'Toyota Avanza 2022', 2, 280000, 'Days'),
	('ID-CAR-006', 'ID-CAT-002', 'Daihatsu Xenia 2021', 2, 280000, 'Days'),
	('ID-CAR-007', 'ID-CAT-002', 'Daihatsu Sigra 2022', 2, 250000, 'Days'),
	('ID-CAR-008', 'ID-CAT-002', 'Toyota Calya 2022', 2, 250000, 'Days');

-- Dumping structure for table db_tugasakhir.tbl_transaksi
CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `id_mobil` varchar(50) NOT NULL DEFAULT '',
  `tgl_transaksi` date NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `identitas` varchar(50) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `FK_tbl_transaksi_tbl_mobil` (`id_mobil`),
  CONSTRAINT `FK_tbl_transaksi_tbl_mobil` FOREIGN KEY (`id_mobil`) REFERENCES `tbl_mobil` (`id_mobil`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_tugasakhir.tbl_transaksi: ~1 rows (approximately)
DELETE FROM `tbl_transaksi`;
INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_mobil`, `tgl_transaksi`, `nama_pelanggan`, `identitas`, `no_identitas`, `no_hp`, `harga`, `jumlah`, `satuan`, `total`) VALUES
	('ID-TRS-001', 'ID-CAR-002', '2023-06-28', 'Afriyanto', 'KTP', '123456789', '08123456789', 500000, 2, 'Days', 1000000);

-- Dumping structure for table db_tugasakhir.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id_users` varchar(50) NOT NULL DEFAULT 'AUTO_INCREMENT',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_tugasakhir.tbl_users: ~2 rows (approximately)
DELETE FROM `tbl_users`;
INSERT INTO `tbl_users` (`id_users`, `username`, `password`) VALUES
	('ID-USE-001', 'admin', '202cb962ac59075b964b07152d234b70'),
	('ID-USE-002', 'afrian', '202cb962ac59075b964b07152d234b70');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
