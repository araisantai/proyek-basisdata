<?php 
require 'config.php';
if (isset($_POST['submit'])) {
	// filtered
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	
	// regular expression
	// $username = $_POST['username'];
	// $password = $_POST['password'];
	// $filter	= "/(and|or|union|drop|delete|admin|where|>|<|;|--)/i";

	$query = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";
	$login = mysqli_query($conn, $query);
	
	if (mysqli_num_rows($login)==0) {
		$auth = true;
	} 
	else {
		$_SESSION['user'] = 1;
		header("Location: admin.php");
	}
}	

?>