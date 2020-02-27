<?php

	session_start();

	// connection to database
	require_once('config/dbconnect.php');


	if (isset($_POST['submit'])) {
		
		// collect form data
		// PHP - Create Read Update Delete Enter (CRUDE)
		// KISS - Keep It Simple & Stupid

		$fullname = $_POST['guest_name'];
		$email = $_POST['guest_email'];
		$message = $_POST['guest_mesg'];

		// data validation
		// ---Exercise---
		// 1. Empty Data
		// 2. Correct Input
		// 3. Convert input to small letters(email).
		// 4. Convert Fullname to captilize first word in every word.

		$insert_data = $conn->query("INSERT INTO contact_msgs(`guest_name`, `guest_email`, `guest_msg`) VALUES('$fullname', '$email', '$message') ");

		// check if data has been sent
		if ($insert_data) {

			$_SESSION['error'] = '<p class="alert alert-success"><b>Congs! You have successfully contacted us!</b></p>';

			header('location: contact.php');

		} else {

			$_SESSION['error'] = '<p class="alert alert-danger"><b>Oops! An error has occured!</b></p>';

			header('location: contact.php');
		}
		



	} else {

		$_SESSION['error'] = '<p class="alert alert-danger"><b>Ooops! All fields are required!</b></p>';

		header('location: contact.php');
	}
	


?>