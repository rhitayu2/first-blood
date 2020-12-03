<!DOCTYPE html>
<?php
	include('config.php');

	session_start();

	$user_type = $_SESSION['user_type'];
	$username = $_SESSION['username'];

	if($user_type != "hospital"){
		header("Location: index.php?redirect=hospital_add_inventory");
		die();
	}

	if(isset($_GET['message'])){
		$message = $_GET['message'];
	}

	if($_POST['submit']){
		$bloodtype = $_POST['add_blood_type'];
		$amount = $_POST['add_blood_quantity'];

		$query_string = "select * from available_blood_bank where hospital_username like '".$username."' and blood_type like '".$bloodtype."';";
		$result = $conn->query($query_string);

		// Case if the Tuple (Hospiatl, Blood Group) already exists
		if($result->num_rows > 0){
			$query_string = "update available_blood_bank set blood_quantity = blood_quantity + ".$amount." where hospital_username like '".$username."' and blood_type like '".$bloodtype."'";
		}
		// Case if the Tuple (Hospital, Blood Group) doesn't exist
		else{
		    $query_string = "insert into available_blood_bank values('".$username."','".$bloodtype."',".$amount.") ;";
		}
		$result = $conn->query($query_string);
		if($result == 1){
			header("Location: hospital_add_inventory.php?message=Added Successfully");
		}
		else{
			header("Location: hospital_add_inventory.php?message=Failed To Add");
		}
		die();
	}
?>

<?php
	include_once('templates/_header.php');

	include_once('alert_popout.js');

	include_once('templates/hospital_add_inventory.php');

	include_once('templates/_footer.php');
?>