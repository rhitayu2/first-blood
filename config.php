<?php
	$servername = "sql12.freemysqlhosting.net";
	$username = "sql12380133";
	$password = "iFGxAKyDxb";
	$dbname = "sql12380133";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	// echo "Connected successfully\n";
?> 