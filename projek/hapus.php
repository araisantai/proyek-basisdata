<?php
require 'config.php';

if(isset($_GET["id_petani"])){
    $id = $_GET["id_petani"];
    $query = mysqli_query($conn,"DELETE FROM petani WHERE id_petani=$id");
    if ($query) {
        echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'listpetani.php';
        </script>
        ";
    }else{
    echo "
        <script>
            alert('data gagal dihapus!');
            document.location.href = 'listpetani.php';
        </script>
        ";
    }
}
?>