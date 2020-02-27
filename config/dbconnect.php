<?php 

	//database connection configurations

	// to connect to a database, we shall need a servername, username, password, and the database.

	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "course_0";

	// we need a connection variable to help us connect to a database using the above variables.
	$conn = mysqli_connect($server, $user, $password, $database);

	// check if database connection has been successful

	if (!$conn) {
		echo "Connection Error!";
		exit();
	}
	


?>