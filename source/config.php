<?php

// The MySQL service 
// change for configuration
$host = 'localhost';

// Database username
$user = 'root';

//database user password
$pass = 'root';

// database name
$database = '';

/* connect to MySQL database */
$conn = mysqli_connect($host, $user, $pass, $database);
mysqli_select_db($conn, $database);

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} 

?>