<?php
	$servername = "localhost";
	$username = "bloodbank";
	$password = "bloodbank123";
	$dbname = "BloodBankDB";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully\n";
?> 