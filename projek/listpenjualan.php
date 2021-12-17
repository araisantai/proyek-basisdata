<?php 
include "navigation/header.php"

?>

    <!-- show tabel -->
    <br><br>
    <h1 class="text-center">Daftar Penjualan</h1>

    <table class="table table-striped table-bordered" style="padding-top: 2rem">
      <thead class="thead-dark">
        <tr class="text-center">
          <th scope="col">no</th>
          <th scope="col">nama</th>
          <th scope="col">jenis penjualan</th>
          <th scope="col">produk yang dibeli</th>
          <th scope="col">Berat pembelian/Kg</th>
          <th scope="col">total harga/Rp</th>
          <th scope="col">petani yang menjual</th>
          <th scope="col">tanggal pembelian</th>
        </tr>
      </thead>
      <tbody>
    <?php
		$query = mysqli_query($conn, "SELECT * FROM data_penjualan");
        $query2 = mysqli_query($conn, "SELECT id_petani,nama FROM petani");
        
        

		// penambahan variable no =1
		$no=1;
		while($data = mysqli_fetch_array($query)){
			echo "<tr>";
			// varibel no++
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
            var_dump($petani);
            if ($petani['id_petani'] == $data['nama_petaniID']) {
                echo "<td>".$petani['nama']."</td>";
            }
            echo "<td>".$data['tanggal_pembelian']."</td>";
		}


		?>
      </tbody>
    </table>
    <!-- end of tabel -->


<?php 
include "navigation/footer.php"

?>