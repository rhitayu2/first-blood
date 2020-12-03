<!DOCTYPE html>
<?php
	session_start();
	include('config.php');
	$user_type = $_SESSION['user_type'];

	if($user_type != "receiver"){
		header("Location: register.php");
		die();
	}
	if(isset($_POST['submit'])){
		$name = $_POST['user_full_name'];
		$gender = $_POST['user_gender'];
		$age = $_POST['user_age'];
		$phone = $_POST['user_phone_number'];
		$email = $_POST['user_email'];
		$bloodtype = $_POST['user_bloodtype'];


		$username = $_SESSION['username'];
		$password = $_SESSION['password'];
		// $user_type = $_SESSION['user_type'];

		// Inserting credentials first
		$query_string = "insert into credentials values ('".$username."','".$password."','".$user_type."');";
		$result = $conn->query($query_string);

		// Inserting into receivers table
		$query_string = "insert into receivers values ('".$username."','".$name."','".$gender."',".$age.",".$phone.",'".$email."','".$bloodtype."') ;";	
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

	include_once('templates/receiver_registration.php');

	include_once('templates/_footer.php');
?>
