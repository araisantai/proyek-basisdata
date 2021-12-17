<?php 
include("config.php");

$id = $_GET["id"];
// ganti jadi id_petani_num
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id_produk = $id");
$edit = mysqli_fetch_array($query);

if (isset($_POST['tambah'])) {
    $stok = $_POST['stok'];
    $query = mysqli_query($conn, "UPDATE produk SET 
    berat_barang = $stok
    WHERE id_produk = $id
    ");

if( $query==TRUE ) {
header('Location: listpetani.php?status=penambahan+stok');
} else {
die("gagal mengubah..");
}


} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    

<h2>Tambah Stok Kamu</h2>
<form action="" method="post">
    <input type="number" name="stok" id="stok" value="<?= $edit["berat_barang"]; ?>">
    <br><br>
    <input type="submit" name="tambah" value="tambah!">
</form>

</body>
</html>
