<?php
require 'config.php';

if(isset($_GET["id_petani"])){
    $id = $_GET["id_petani"];
    $query1 = mysqli_query($conn,"DELETE FROM petani WHERE id_petani=$id");
    $query2 = mysqli_query($conn,"DELETE FROM produk WHERE id_produk=$id");
    if ($query2 == TRUE) {
        header('Location: listpetani.php?status=berhasil+dihapus');
    }else{
        header('Location: listpetani.php?status=gagal+dihapus');
    }
}
?>