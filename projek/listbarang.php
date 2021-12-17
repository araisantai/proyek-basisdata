<?php
include "navigation/header.php";

$query1 = mysqli_query($conn, "SELECT nama_barang FROM barang WHERE jenis_barang = 'buah'");
$query2 = mysqli_query($conn, "SELECT nama_barang FROM barang WHERE jenis_barang = 'sayur'");
?>
  <!-- content -->
	

	<div class="container">
	<br><br><br>
	<h1>Produk yang tersedia</h1>
	<ul>
		<li>Buah-buahan
			<ul>
				<?php 
				while ($buah = mysqli_fetch_assoc($query1)) {
					echo"<li>";
					echo"<a href='postbarang.php?nama_barang=".$buah['nama_barang']."'>".$buah['nama_barang']."</a>";
					echo"</li>";
				}
				?>
				<br><br>
			</ul>
		</li>
		<li>Sayuran
			<ul>
				<?php 
				while ($sayur = mysqli_fetch_assoc($query2)) {
					echo "<li>";
					echo"<a href='postbarang.php?nama_barang=".$sayur['nama_barang']."'>".$sayur['nama_barang']."</a>";
					echo"</li>";
				}
				?>
			</ul>
		</li>
	</ul>
	

	
	</div>

<?php 
include "navigation/footer.php";

?>