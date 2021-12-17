<?php 
include("config.php");

$id = $_GET["id"];
$query = mysqli_query($conn, "SELECT * FROM petani WHERE id_petani = $id");
$edit = mysqli_fetch_array($query);

if (isset($_POST['ubah'])) {
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nomor_hp = $_POST["nomor_hp"];
    $query = mysqli_query($conn, "UPDATE petani SET 
                        nama = '$nama',
                        alamat = '$alamat',
                        nomor_hp = '$nomor_hp'
                        WHERE id_petani = $id
                        ");

	if( $query==TRUE ) {
		header('Location: listpetani.php?status=berhasil+diubah');
	} else {
		die("gagal mengubah..");
	}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Document</title>
</head>

<body>
    <div class="title">
        <h1 class="tittle">Edit Data Petani</h1>
    </div>
    <form action="" method="post">
    <fieldset>
    <input type="hidden" name="id" value="<?= $edit["id_petani"]; ?>">
            <ul>
                <li>
                    <div class="mb-3">
                    <label for="nama">Nama Petani :</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="<?= $edit["nama"]; ?>" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="alamat">Alamat :</label>
                    <input type="text" value="<?= $edit["alamat"]; ?>" class="form-control" name="alamat" id="alamat" required>
                    </div>
                </li>
                <li>
                    <div class="mb-3">
                    <label for="nomor_hp">Nomor Handphone :</label>
                    <input type="int" class="form-control" name="nomor_hp" id="nomor_hp" value="<?= $edit["nomor_hp"]; ?>" required>
                    </div>
                </li>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success" name="ubah">ubah data</button>
                </div>
                </fieldset>
                <?php 
                
                ?>
        </form>
        </div>
    </body>
</html>
