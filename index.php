<?php
	function isEmpty($str){
    	return (!isset($str) || trim($str) === '');
	}
	session_start();
	include('config.php');

	if(isset($_GET['redirect'])){
		$redirect = $_GET['redirect'];
	}
	if(isset($_GET['message'])){
		$message = $_GET['message'];
	}
	if(isset($_SESSION['username'])){
		if($_SESSION['user_type'] == "receiver"){
			header("Location: receiver_dashboard.php");
			die();
		}
		if($_SESSION['user_type'] == "hospital"){
			header("Location: hospital_dashboard.php");
			die();
		}
	}
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$hashed_password = md5($password);

		// Initial password check
		$query_string = "select password, user_type from credentials where username like '".$username."' ;";
		$result = $conn->query($query_string);
		$rows = $result->fetch_all();
		
		$password_from_db = $rows[0][0];


		if($hashed_password == $password_from_db){
			$_SESSION['username'] = $username;
			$_SESSION['user_type'] = $rows[0][1];
			$user_type = $rows[0][1];
			if (!isEmpty($redirect)){
				header("Location: " . $redirect .".php");
			}	
			else if($user_type == "receiver"){
				header("Location: receiver_dashboard.php");
			}
			else if($user_type == "hospital"){
				header("Location: hospital_dashboard.php");
			}
		}
		else{
			header("Location: index.php?message=Wrong Username or Password!");
			die();
		}
	}
?>

<!-- Page Layout-->
<?php
	include_once('alert_popout.js');

	include_once('templates/_header.php');

	include_once('templates/index.php');
	
	include('templates/_footer.php');
?>
