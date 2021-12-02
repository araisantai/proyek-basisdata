<?php
require 'config.php';

$query = "SELECT * FROM barang";
$listbarang = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <title>Proyek Basdat</title>
  </head>
  <body>
    <!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Company Name</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listpetani.php">Daftar Petani</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listbarang.php">Cek Produk</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->

	<!-- content -->
	

	<div class="container">
	<br><br><br>
	<h1>Produk yang tersedia</h1>
	<ul>
		<li>Buah-buahan
			<ul>
				<li><a href="postbarang.php?id_produk_num=1">Semangka</a></li>
				<li><a href="postbarang.php?id_produk_num=2">Melon</a></li>
				<li><a href="postbarang.php?id_produk_num=3">Mangga</a></li>
				<li><a href="postbarang.php?id_produk_num=4">Pir</a></li>
				<li><a href="postbarang.php?id_produk_num=5">Anggur</a></li>
				<li><a href="postbarang.php?id_produk_num=6">Jeruk</a></li>
			</ul>
		</li>
		<li>Sayuran
			<ul>
				<li><a href="postbarang.php?id_produk_num=7">Sawi</a></li>
				<li><a href="postbarang.php?id_produk_num=8">Bayam</a></li>
				<li><a href="postbarang.php?id_produk_num=9">Kangkung</a></li>
				<li><a href="postbarang.php?id_produk_num=10">Padi</a></li>
				<li><a href="postbarang.php?id_produk_num=11">Pakcoy</a></li>
				<li><a href="postbarang.php?id_produk_num=12">Cabai</a></li>
			</ul>
		</li>
	</ul>
	

	
	</div>

	<!-- endof content -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center" style="position: fixed; left: 0; bottom: 0; width: 100%">
      <p>for footer</p>
    </footer>
    <!-- akhir footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
