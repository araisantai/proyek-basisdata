<!-- <?php
// session_start();
// $_SESSION['user'] = 0;
?> -->
<!DOCTYPE html>
<!-- filter.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
	<div class="center">
		<h1>Admin Login</h1>
		<form action="proseslogin.php" method="post">
		<div class="txt_field">
			<label for="username">username :</label>
			<input type="text" name="username" id="username" required>
		</div>
		
		<div class="txt_field">	
			<label for="password">password :</label>
			<input type="text" name="password" id="password" required>
			
		</div>
		<!-- <?php
			// global $auth; 
			// if ($auth==true) {
			// 	echo "<p>u are not admin, pergi sana!</p>";
			// }
		?> -->
			<input type="submit" name="submit" value="Login">
			<a href="index.php">Back to Home</a>
		</form>
	</div>
	<div class="navbar">
		<footer class="footer">
			<p>company name</p>
		</footer>
	</div>
	
</body>
</html>
