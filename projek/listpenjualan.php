<?php 
include "navigation/header.php"

?>

    <!-- show tabel -->
    <br><br>
    <h1 class="list-title">Daftar Penjualan</h1>

    <div class="row justify-content-center">
    <div class="col-auto">
    <table>
      <thead>
        <tr class="text-center">
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Jenis penjualan</th>
          <th scope="col">Produk yang dibeli</th>
          <th scope="col">Berat pembelian/Kg</th>
          <th scope="col">Total harga/Rp</th>
          <th scope="col">Petani yang menjual</th>
          <th scope="col">Tanggal pembelian</th>
        </tr>
      </thead>
      <tbody>
    <?php
		$query = mysqli_query($conn, "SELECT * FROM data_penjualan");
        $query2 = mysqli_query($conn, "SELECT id_petani,nama FROM petani");
        

		$no=1;
		while($data = mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td class='text-center'>".$no++."</td>";	
			"<td>".$data['id_penjualan']."</td>";
			echo "<td>".$data['nama_pembeli']."</td>";
            if($data['jenis_penjualanID'] <= 6){
                echo "<td>"."buah"."</td>";
            } elseif($data['jenis_penjualanID'] >= 7){
                echo "<td>"."sayuran"."</td>";
            }
			echo "<td>".$data['produk_penjualan']."</td>";
			echo "<td>".$data['berat_pembelian']."</td>";
			echo "<td>".$data['total_harga']."</td>";
            $petani = mysqli_fetch_array($query2);
            if ($petani['id_petani'] == $data['nama_petaniID']) {
                echo "<td>".$petani['nama']."</td>";
            }
            echo "<td>".$data['tanggal_pembelian']."</td>";
		}


		?>
      </tbody>
    </table>
    </div>
    </div>
    <!-- end of tabel -->


<?php 
include "navigation/footer.php"

?>
