<?php
require 'config.php';

if (isset($_GET['nama_barang'])) {
    $produk = $_GET['nama_barang'];  
    $q  = mysqli_query($conn, "SELECT * FROM petani WHERE petani_produk = '{$produk}'");
    $q2 = mysqli_query($conn, "SELECT * FROM produk WHERE nama_produk = '{$produk}'");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/liststyle.css">
	<title><?= $produk; ?></title>
</head>
<body>

	<div class="produc-title">
	<h1 class="list-title"><?= $produk; ?></h1>
    <p class="text-center">Petani yang memiliki produk <?= $produk; ?>:</p>
	</div>

	<div class="row justify-content-center">
    <div class="col-auto">
	<table>
	<thead>
		<tr class="text-center">
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">No. Hp</th>
            <th scope="col">Banyak Barang/kg</th>
            <th scope="col">Tanggal panen</th>
            <th scope="col">Harga Barang/Rp</th>
		</tr> 
	</thead>
	<tbody>
    <?php
		while($petani = mysqli_fetch_array($q)){
			echo "<tr>";
			echo "<td>".$petani['nama']."</td>";
			echo "<td>".$petani['alamat']."</td>";
			echo "<td>".$petani['nomor_hp']."</td>";
            $produkk = mysqli_fetch_array($q2);
            echo "<td>".$produkk['berat_barang']."</td>";
            echo "<td>".$produkk['tanggal_panen']."</td>";
			echo "<td>".$produkk['harga_barang']."</td>";
			echo "</tr>";
			}
		?>
    </tbody>
	</table>
	</div>
    </div>


</body>
</html>
