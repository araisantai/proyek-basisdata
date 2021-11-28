<?php
include("config.php");

if(isset($_POST['daftar'])){

	// form proses
	$var = $_POST[''];

	// buat query
	//   $query = mysqli_query("");

	// check query
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		header('Location: index.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}
?>
