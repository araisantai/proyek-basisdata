<?php 
require "config.php"
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

    <!-- show tabel -->
    <br><br>
    <h1 class="text-center">Daftar Petani</h1>
    <table class="table table-striped table-bordered" style="padding-top: 2rem">
      <thead class="thead-dark">
        <tr>
          <th scope="col">no</th>
          <th scope="col">nama</th>
          <th scope="col">alamat</th>
          <th scope="col">no. Hp</th>
          <th scope="col">Update</th>
          <th scope="col">Keluar</th>
        </tr>
      </thead>
      <tbody>
    <?php
		$query = mysqli_query($conn, "SELECT * FROM petani");
		// $query = mysqli_query($db, $sql);
		
		// penambahan variable no =1
		$no=1;
		while($petani = mysqli_fetch_array($query)){
			echo "<tr>";
			// varibel no++
			echo "<td>".$no++."</td>";	
			"<td>".$petani['id_petani']."</td>";
			echo "<td>".$petani['nama']."</td>";
			echo "<td>".$petani['alamat']."</td>";
			echo "<td>".$petani['nomor_hp']."</td>";
			
			
			// linked to formedit.php
			echo "<td>";
			echo "<a href='formedit.php?id=".$petani['id_petani']."'>Tambah Stok</a>";
			echo "</td>";

      echo "<td>";
			echo "<a href='hapus.php?id=".$petani['id_petani']."'>Hapus</a>";
			echo "</td>";
			echo "</tr>";

			}


		?>
      </tbody>
    </table>
    <!-- end of tabel -->


    <!-- button tambah petani baru -->
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <a class="btn btn-primary btn-lg" href="form.php" role="button">Gabung jadi petani baru >></a>
        </div>
      </div>
    </div> 
    <!-- end of button tambah petani baru -->

    <!-- footer -->
    <footer class="bg-primary text-white text-center fixed-bottom">
      <p>for footer</p>
    </footer>
    <!-- akhir footer -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
