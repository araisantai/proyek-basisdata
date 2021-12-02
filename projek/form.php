<?php
require 'config.php';
    if(isset($_POST["submit"])){
        //ambil data dari form
        $nama = $_POST["nama"];
        $alamat = $_POST["alamat"];
        $nomor_hp = $_POST["nomor_hp"];
        $jenis_barang = $_POST["jenis_barang"];
        $berat_barang = $_POST["berat_barang"];
        $harga_barang = $_POST["harga_barang"];
        $tanggal_panen = $_POST["tanggal_panen"];


        //query insert data
        $query1 = "INSERT INTO petani (id_petani, nama, alamat, nomor_hp)
                    VALUES
                    ('','$nama','$alamat','$nomor_hp')";
        $query2= "INSERT INTO barang (id_barang, jenis_barang, tanggal_panen, berat_barang, harga_barang)
                    VALUES
                    ('','$jenis_barang','$tanggal_panen','$berat_barang','$harga_barang')";
                    
                
                
        mysqli_query($conn, $query1); 
        mysqli_query($conn, $query2);  
        
        if( $query1 == TRUE && $query2 == TRUE ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: listpetani.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.ph dengan status=gagal
            header('Location: listpetani.php?status=gagal');
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Formulir Petani</title>
        
    </head>
    <body>
        <div class="container">
        <div class="title">
        <h1 class="tittle">Tambah Data Petani</h1>
        </div>
        <form action="" method="POST">
            <ul>
                <li>
                    <div class="mb-3">
                    <label for="nama">Nama Petani :</label>
                    <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="alamat">Alamat :</label>
                    <input type="text" class="form-control" name="alamat" id="alamat" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="nomor_hp">Nomor Handphone :</label>
                    <input type="int" class="form-control" name="nomor_hp" id="nomor_hp" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="jenis_barang" >Jenis Barang :</label>
                    <select name="jenis_barang" class="form-select mb-3" required>
                        <optgroup label="Buah">
                                <option value=semangka>Semangka</option>
                                <option value=melon>Melon</option>
                                <option value=mangga>Mangga</option>
                                <option value=pir>Pir</option>
                                <option value=anggur>Anggur</option>
                                <option value=jeruk>Jeruk</option>
                        </optgroup>
                        <optgroup label="Sayur">
                                <option value=sawi>Sawi</option>
                                <option value=bayam>Bayam</option>
                                <option value=kangkung>Kangkung</option>
                                <option value=padi>Padi</option>
                                <option value=pakcoy>Pakcoy</option>
                                <option value=cabai>Cabai</option>
                        </optgroup>
                        
                    </select>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="berat_barang">Berat Barang :</label>
                    <input type="float" class="form-control" name="berat_barang" id="berat_barang" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="harga_barang">Harga Barang/kg :</label>
                    <input type="decimal" class="form-control" name="harga_barang" id="harga_barang" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="tanggal_panen">Tanggal Panen:</label>
                    <input type="date" class="form-control" name="tanggal_panen" id="tanggal_panen" required>
                    </div>
                </li>
            </ul>
            <div class="mb-3">
                    <button type="submit" class="btn btn-success" name="submit">Tambah Data</button>
            </div>
        </form>
        </div>
    </body>
</html>