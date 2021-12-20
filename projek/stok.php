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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/stok-style.css">
        <title>Tambah Stok</title>
</head>
</head>
<body>
    <div class="container">
        <h2>Tambah Stok Kamu</h2>
        <form action="" method="post">
        <ul>
            <li>
                <div class="stok">
                    <input type="float" name="stok" id="stok" value="<?= $edit["berat_barang"]; ?>">
                </div>
            </li>
            <br>
            <li>
                <div class="stok">
                    <button type="submit" class="btn btn-success" name="tambah">Tambah</button>
                </div>
            </li>
        </ul>   
        </form>

    </div>
    
</body>
</html>
