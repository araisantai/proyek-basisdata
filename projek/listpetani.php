<?php 
include "navigation/header.php";

?>

    <!-- show tabel -->
    <br><br>
    <h1 class="text-center">Daftar Petani</h1>
    <?php 
    
    if (isset($_GET['status'])) {
      $status = $_GET['status'];
      echo "
      <center><h5>data ".$status."</h5></center>
      ";
    }
    ?>
    <table class="table table-striped table-bordered" style="padding-top: 2rem">
      <thead class="thead-dark">
        <tr class="text-center">
          <th scope="col">no</th>
          <th scope="col">nama</th>
          <th scope="col">alamat</th>
          <th scope="col">no. Hp</th>
          <th scope="col">Barang yang dijual</th>
          <th scope="col" colspan='2'>Banyak Barang/kg</th>
          <th scope="col" colspan='2'>Tindakan</th>
        </tr>
      </thead>
      <tbody>
    <?php
		$query = mysqli_query($conn, "SELECT * FROM petani");
    $query2 = mysqli_query($conn, "SELECT * FROM produk");
    ;
    
		// $query = mysqli_query($db, $sql);

		// penambahan variable no =1
		$no=1;
		while($petani = mysqli_fetch_array($query)){
			echo "<tr>";
			// varibel no++
			echo "<td class='text-center'>".$no++."</td>";	
			"<td>".$petani['id_petani']."</td>";
			echo "<td>".$petani['nama']."</td>";
			echo "<td>".$petani['alamat']."</td>";
			echo "<td>".$petani['nomor_hp']."</td>";
			$produk = mysqli_fetch_array($query2);
			echo "<td>".$produk['nama_produk']."</td>";
			// linked to updatestok.php
      

			echo "<td>".$produk['berat_barang']."</td>";
      echo "<td class='text-center'>";
			echo "<a href='stok.php?id=".$produk['id_produk']."'>Tambah Stok</a>";
			echo "</td>";

      // edit data dan hapus data
      echo "<td class='text-center'>";
			echo "<a href='edit.php?id=".$petani['id_petani']."'>Edit data</a>";
			echo "</td>";
      echo "<td class='text-center'>";
			echo "<a href='hapus.php?id_petani=".$petani['id_petani']."'>Hapus</a>";
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

<?php 
include "navigation/footer.php";

?>