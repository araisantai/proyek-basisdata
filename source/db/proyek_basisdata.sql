DROP DATABASE IF EXISTS `proyek_basisdata`;
CREATE DATABASE `proyek_basisdata`;
USE `proyek_basisdata`;

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  CONSTRAINT barang_ID_PK PRIMARY KEY(id_barang),
  CONSTRAINT barang_jb_unique UNIQUE(nama_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_produk` varchar(255) NOT NULL,
  `berat_barang` float(5,1) NOT NULL,
  `tanggal_panen` date NULL DEFAULT CURRENT_DATE,
  `harga_barang` decimal(10,2) NOT NULL,
  CONSTRAINT produk_id_PK PRIMARY KEY(id_produk),
  CONSTRAINT produk_barangID_FK FOREIGN KEY(nama_produk) REFERENCES barang(nama_barang)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `petani` (
  `id_petani` int(11) NOT NULL AUTO_INCREMENT,
  `petani_produk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  CONSTRAINT petani_ID_PK PRIMARY KEY(id_petani)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `data_penjualan` (
  `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(255) NOT NULL,
  `jenis_penjualanID` int(11) NOT NULL,
  `produk_penjualan` varchar(255) NOT NULL,
  `berat_pembelian` float(5,1) NOT NULL,
  `total_harga` decimal(10,2) NOT NULL,
  `nama_petaniID` int(11) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  CONSTRAINT penjualan_id_PK PRIMARY KEY(id_penjualan)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `barang` (`id_barang`, `jenis_barang`, `nama_barang`) VALUES
(1, 'buah', 'semangka'),
(2, 'buah', 'melon'),
(3, 'buah', 'mangga'),
(4, 'buah', 'pir'),
(5, 'buah', 'anggur'),
(6, 'buah', 'jeruk'),
(7, 'sayur', 'sawi'),
(8, 'sayur', 'bayam'),
(9, 'sayur', 'kangkung'),
(10, 'sayur', 'padi'),
(11, 'sayur', 'pakcoy'),
(12, 'sayur', 'cabai');

INSERT INTO `produk` (`id_produk`, `nama_produk`, `berat_barang`, `tanggal_panen`, `harga_barang`) VALUES
(1, 'semangka', 100, '2005-09-18', 10000),
(2, 'pir', 50, '2005-09-18', 10000),
(3, 'padi', 30, '2005-09-18', 10000),
(4, 'kangkung', 20, '2005-09-18', 10000);

INSERT INTO `petani` (`id_petani`, `petani_produk`, `nama`, `alamat`, `nomor_hp`) VALUES
(1, 'semangka', 'qais', 'alamat', 62891234567),
(2, 'pir', 'athifah', 'alamat', 62891234568),
(3, 'padi', 'aul', 'alamat', 62891234570),
(4, 'kangkung', 'faris', 'alamat', 62891234571);

ALTER TABLE petani
ADD CONSTRAINT produk_num_FK
FOREIGN KEY (petani_produk) REFERENCES produk(nama_produk);

INSERT INTO `data_penjualan` (`id_penjualan`, `nama_pembeli`, `jenis_penjualanID`, `produk_penjualan`, `berat_pembelian`, `total_harga`, `nama_petaniID`, `tanggal_pembelian`) VALUES
(1, 'pembeli1', 1, 'semangka', 10, 10000, 1, '2005-09-18'),
(2, 'pembeli2', 4, 'pir', 10, 10000, 2, '2005-09-18');

ALTER TABLE data_penjualan
ADD CONSTRAINT penjualan_barang_FK 
FOREIGN KEY(jenis_penjualanID) REFERENCES barang(id_barang);

ALTER TABLE data_penjualan
ADD CONSTRAINT penjualan_produk_FK 
FOREIGN KEY(produk_penjualan) REFERENCES produk(nama_produk);

ALTER TABLE data_penjualan
ADD CONSTRAINT penjualan_petani_FK FOREIGN KEY(nama_petaniID)
REFERENCES petani(id_petani);