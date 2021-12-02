<?php
require 'config.php';

if (isset($_GET['id_produk_num'])) {
    $produk = intval($_GET['id_produk_num']);    
    $q  = mysqli_query($conn, "SELECT * FROM petani WHERE id_produk_num = {$produk}") or die("apa yang kau inputkan hei!!");
    $produkk = mysqli_fetch_assoc($q);
    var_dump($produkk);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Produk</title>
</head>
<body>

	<h1>Produk </h1>
    <p>Petani yang memiliki produk tersebut:</p>
    <?php echo $produkk['nama'] ?>
    <hr>
	<br><br>

</body>
</html>