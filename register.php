<?php
	session_start();
	include('config.php');

	// if(isset($_SESSION['user_type']) || isset($_SESSION['username'])){
	// 	header("Location: index.php");
	// 	die();
	// }

	echo $_SESSION['username'];
	// Checking if POST request is sent
	if (isset($_POST['submit'])) {
		if(isset($_POST['username']) && !empty($_POST['username'])){
			// Setting the session variable
			$username = $_POST['username'];
			$password = $_POST['password'];
			$re_password = $_POST['re_password'];
			$user_type = $_POST['user_type'];
			
			// Checking if passwords match
			if ($password != $re_password){
				echo "Passwords do not match";
				exit();
			}

			$password_hash = md5($password);

			// Checking for duplicate usernames
			$query_string = "select * from credentials where username like '".$username."';";
			$result = $conn->query($query_string);
			$rows = $result->num_rows;
			if($rows > 0){
				header("Location: logout.php?redirect=register&message=Username already taken!");
				die();
			}
			else{
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password_hash;
				$_SESSION['user_type'] = $user_type;
			}
			if($user_type == "receiver"){
				header("Location: receiver_registration.php");
			}
			else if($user_type == "hospital"){
				header("Location: hospital_registration.php");
			}
			die();	
			
		}
	}
?>



<?php
	include_once('templates/_header.php');

	include_once('alert_popout.js');
		
	include_once('templates/register.php');

		
	include_once('templates/_footer.php');
?>
