<?php
include "navigation/header.php";

$query1 = mysqli_query($conn, "SELECT nama_barang FROM barang WHERE jenis_barang = 'buah'");
$query2 = mysqli_query($conn, "SELECT nama_barang FROM barang WHERE jenis_barang = 'sayur'");
?>
  <!-- content -->
	

	<div class="container">
	<br>
	<h1 class="list-title">Produk yang tersedia</h1>
	<ul>
	<div class="row">
	<div class ="col p-2">
		<div class="product-box">
		<li class="box-title"><h2 class="product-box-title">Buah-buahan</h2>
			
				<?php 
				while ($buah = mysqli_fetch_assoc($query1)) {
					echo"<li class='product'>";
					echo"<a class='product-name' href='postbarang.php?nama_barang=".$buah['nama_barang']."'>".$buah['nama_barang']."</a>";
					echo"</li>";
				}
				?>
			
		</li>
		</div>
		</div>
		<div class ="col p-2">
		<div class="product-box">
		<li class="box-title"><h2 class="product-box-title">Sayuran</h2>
			
				<?php 
				while ($sayur = mysqli_fetch_assoc($query2)) {
					echo "<li class='product'>";
					echo"<a class='product-name' href='postbarang.php?nama_barang=".$sayur['nama_barang']."'>".$sayur['nama_barang']."</a>";
					echo"</li>";
				}
				?>
			
		</li>
		</div>
		</div>
	</div>	
	</ul>
	
	</div>
<!-- end of content -->
<?php 
include "navigation/footer.php";

?>
