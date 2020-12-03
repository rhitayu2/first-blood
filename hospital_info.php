<?php
	session_start();
	include('config.php');

	if($_SESSION['user_type'] != "hospital"){
		header("Location: index.php");
		die();
	}

	$username = $_SESSION['username'];

	$query_string = "select * from hospitals where username like '".$username."' ;";
	$result = $conn->query($query_string);
	$info_rows = $result->fetch_all();
	$name = $info_rows[0][1];
	$number= $info_rows[0][2];
	$address= $info_rows[0][3];
	$email= $info_rows[0][4];
?>

<!-- Layout -->

<?php
	include('templates/_header.php');

	include_once('alert_popout.js');

	include('templates/hospital_info.php');

	include('templates/_footer.php');
?>