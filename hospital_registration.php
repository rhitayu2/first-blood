<?php
	session_start();
	include('config.php');
	$user_type = $_SESSION['user_type'];

	if($_SESSION['user_type'] != "hospital"){
		header("Location: register.php");
		die();
	}

	if(isset($_POST['submit'])){
		$name = $_POST['hospital_name'];
		$phone = $_POST['hospital_phone_number'];
		$address = $_POST['hospital_address'];	
		$email = $_POST['hospital_email_address'];

		$username = $_SESSION['username'];
		$password = $_SESSION['password'];

		// Inserting into credentials first
		echo $query_string = "insert into credentials values ('".$username."','".$password."','".$user_type."');";
		$result = $conn->query($query_string);

		// Inserting Hospital Information
		echo $query_string = "insert into hospitals values('".$username."','".$name."',".$phone.",'".$address."','".$email."');";
		$result = $conn->query($query_string);
		if($result == 1){
			header("Location: index.php");
			die();
		}
		else{
			header("Location: logout.php?redirect=register&message=Couldn't create user");
			die();
		}
	}
	if(isset($_POST['back'])){
		header("Location: logout.php?redirect=register");
		die();
	}

?>

<?php
	include_once('templates/_header.php');

	include_once('alert_popout.js');

	include_once('templates/hospital_registration.php');
	
	include_once('templates/_footer.php');
?>