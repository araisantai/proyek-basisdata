-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 03:04 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

DROP DATABASE IF EXISTS `proyek_basisdata`;
CREATE DATABASE `proyek_basisdata`;
USE `proyek_basisdata`;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `id_penjualan_num` int(11) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  CONSTRAINT barang_ID_PK PRIMARY KEY(id_barang),
  CONSTRAINT barang_jb_unique UNIQUE(jenis_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `id_barang_num` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  CONSTRAINT produk_id_PK PRIMARY KEY(id_produk),
  CONSTRAINT nama_produk_unique UNIQUE(nama_produk),
  CONSTRAINT produk_barangID_FK FOREIGN KEY(id_barang_num) REFERENCES barang(id_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `petani` (
  `id_petani` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk_num` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` int(12) NOT NULL,
  `tanggal_panen` date NULL DEFAULT CURRENT_DATE,
  `berat_barang` float(5,2) NOT NULL,
  `harga_barang` decimal(10,2) NOT NULL,
  CONSTRAINT petani_ID_PK PRIMARY KEY(id_petani),
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `data_penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `id_petani_num` int(11) NOT NULL,
  `id_barang_num` int(11) NOT NULL,
  `id_produk_num` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `berat_pembelian` int(255) NOT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  CONSTRAINT penjualan_id_PK PRIMARY KEY(id_penjualan),
  CONSTRAINT penjualan_barangID_FK FOREIGN KEY(id_barang_num) 
  REFERENCES barang(id_barang),
  CONSTRAINT penjualan_petaniID_FK FOREIGN KEY(id_petani_num)
  REFERENCES petani(id_petani)
  CONSTRAINT penjualan_produkID_FK FOREIGN KEY(id_produk_num)
  REFERENCES produk(id_produk)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `barang` (`id_barang`, `id_penjualan_num`, `jenis_barang`) VALUES
(001, 1, 'sayuran'),
(002, 2, 'buah-buahan');

INSERT INTO `produk` (`id_produk`, `id_barang_num`, `nama_produk`) VALUES
(01, 002, 'semangka'),
(02, 002, 'melon'),
(03, 001, 'timun'),
(04, 001, 'sawi');

INSERT INTO `petani` (`id_petani`, `id_produk_num`, `nama`, `alamat`, `nomor_hp`, `tanggal_panen`, `berat_barang`, `harga_barang`) VALUES
(1, 01,'qais', 'alamat', 628912345, '2005-09-18', 100, 10000),
(2, 02, 'athifah', 'alamat', 628912345, '2005-09-18', 100, 10000),
(3, 03, 'aul', 'alamat', 628912345, '2005-09-18', 100, 10000),
(4, 04, 'faris', 'alamat', 628912345, '2005-09-18', 100, 10000);

ALTER TABLE produk ADD CONSTRAINT produk_petaniID_FK FOREIGN KEY(id_petani_num) 
REFERENCES petani(id_petani);

ALTER TABLE petani ADD CONSTRAINT petani_produkID_FK FOREIGN KEY(id_produk_num) 
REFERENCES barang(id_produk);

INSERT INTO `data_penjualan` (`id_penjualan`, `id_petani_num`, `id_produk_num`, `tanggal_pembelian`, `berat_pembelian`, `nama_pembeli`) VALUES
(1, 1, 1, '18-Sep-2005', 100, 'alfa');

ALTER TABLE barang ADD CONSTRAINT barang_penjualanID_FK FOREIGN KEY(id_penjualan_num) 
REFERENCES data_penjualan(id_penjualan);


-- ALTER TABLE barang ADD CONSTRAINT barang_productsID_FK FOREIGN KEY(id_products) 
-- REFERENCES sayur(id_penjualan);




-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
