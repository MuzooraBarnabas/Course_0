<?php

	// database connection
	$conn = mysqli_connect("localhost", "root", "", "course_0");


	// database fetch (method 1 : procedural)
	$fetch_data_sql = "SELECT * FROM system_information";
	$fetch_data = mysqli_query($conn, $fetch_data_sql);
	$data = mysqli_fetch_array($fetch_data);

	print_r($data);
	$systemid = $data['id'];
	$systemname = $data['system_name'];

	echo "<br>System Id = ".$systemid."<br>System Name = ".$systemname;


	// method 2 (Object Oriented)

	$fetch_data = $conn->query("SELECT * FROM system_information");
	$rows_returned = $fetch_data->num_rows;

	// check if data exists in the database
	if ($rows_returned > 0) {
		$data = $fetch_data->fetch_array();
		
		$systemname = $data['system_name'];
		echo $systemname;
	} else {
		echo "Ooops, No data found. Try <a href='#'>Refreshing</a> the page!";
	}

