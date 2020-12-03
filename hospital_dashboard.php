<?php
	session_start();
	include('config.php');
	$username = $_SESSION['username'];
	$user_type = $_SESSION['user_type'];

	if($user_type != "hospital"){
		header("Location: index.php");
		die();
	}

	// Query to retrieve current inventory
	$query_string = "select blood_type,sum(blood_quantity) from available_blood_bank where hospital_username like '".$username."' group by(blood_type);";
	$result = $conn->query($query_string);

	$blood_rows_num = $result->num_rows;
	$blood_rows = $result->fetch_all();
	

	$query_string = "select * from requested_blood_bank where hospital_username like '".$username."' order by time_requested desc;";
	$result = $conn->query($query_string);
	
	$rows = $result->fetch_all();
	$num_row = $result->num_rows;
?>

<?php
	include_once('templates/_header.php');

	include_once('alert_popout.js');

	include_once('templates/hospital_dashboard.php');
	
	include_once('templates/_footer.php');
?>