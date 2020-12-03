<?php
	session_start();
	include('config.php');
	$username = $_SESSION['username'];
	$user_type = $_SESSION['user_type'];
	

	if($user_type != "receiver"){
		header("Location: index.php");
		die();
	}
	
	// Querying user's Information
	$query_string = "select * from receivers where username like '".$username."'";
	$result = $conn->query($query_string);
	$user_rows = $result->fetch_all();
 
	$name = $user_rows[0][1];
	$gender = $user_rows[0][2];

	if($gender == "m")
		$gender= "Male";
	if($gender == "f")
		$gender= "Female";
	if($gender == "o")
		$gender= "Other";


	$age = $user_rows[0][3];
	$phone_number = $user_rows[0][4];
	$email = $user_rows[0][5];
	$blood_type = $user_rows[0][6];

	// Querying all the results
	$query_string = "select * from requested_blood_bank where receiver_username like '".$username."' order by time_requested desc;";
	$result = $conn->query($query_string);
	$rows = $result->fetch_all();
	$num_row = $result->num_rows;
?>

<?php
	include_once('templates/_header.php');

	include_once('alert_popout.js');

	include_once('templates/receiver_dashboard.php');
	
	include_once('templates/_footer.php');
?>