<?php
// require 'connection.php';

// $query = "SELECT * FROM post";
// $posts = mysqli_query($conn, $query);

?><!DOCTYPE html>
<html lang="en">

<head>
	<title>Content</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/style.css">
</head>

<body class="admin">
    <nav class="navtop">
        <div>
	<h1 style="text-align: center">Main Page</h1>
	<br>
	<a href="admin_login.php">Admin Login</a> 
	<br>
	<a href="form.php">Daftar baru</a>
	<br>
	<a href="list.php">List Petani</a>
	<br>
	</div>
    </nav>
	<div class="content">

	<br><br>
	<!-- penjelasan page -->
	<p>Main page penjelasan company dll.</p>


<!-- untuk database -->
	<!-- <?php
		// while($row = mysqli_fetch_array($posts)) {
		// 	echo "<br>";
		// 	echo "<hr>";
		// 	echo "<a href='post.php?id={$row['id']}'><h1>{$row['judul']}</h1></a>";
		// 	echo "<hr>";
		// 	echo "<br><br>";
			
		// }
	?> -->

	</div>
	<div class="navbar">
		<footer class="footer">
		<p>company name</p>
		</footer>
	</div>	
</body>

</html>