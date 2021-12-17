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
	<title><?= $produk; ?></title>
</head>
<body>

	<h1><?= $produk; ?></h1>
    <p>Petani yang memiliki produk <?= $produk; ?>:</p>
    <table border="1">
	<thead>
		<tr>
            <th scope="col">nama</th>
            <th scope="col">alamat</th>
            <th scope="col">no. Hp</th>
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


</body>
</html>