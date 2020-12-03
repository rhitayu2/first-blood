<?php
	include('config.php');
	session_start();
	if(isset($_GET['message'])){
		$message = $_GET['message'];
	}

	$user_type = $_SESSION['user_type'];

	if(isset($_GET['filter'])){
		$filter_hospital = $_GET['filter_hospital'];
		$filter_blood_type = $_GET['filter_blood_type'];
		if($filter_hospital == "all" && $filter_blood_type != "all")
			$query_string = "select * from available_blood_bank where blood_type like '".$filter_blood_type."' ;";
		else if($filter_hospital != "all" && $filter_blood_type == "all")
			$query_string = "select * from available_blood_bank where hospital_username like '".$filter_hospital."' ;";
		else if($filter_hospital != "all" && $filter_blood_type != "all")
			$query_string = "select * from available_blood_bank where hospital_username like '".$filter_hospital."' and  blood_type like '".$filter_blood_type."';";
		else{
			$query_string = "select * from available_blood_bank ;";	
		}
	}

	else{
		$query_string = "select * from available_blood_bank ;";
	}

	$result = $conn->query($query_string);
	$num_row = $result->num_rows;
	$rows = $result->fetch_all();

	

	if(isset($_POST['request'])){
		if($user_type == "receiver"){
			$receiver_username = $_SESSION['username'];
			$button_num = $_POST['request'];
			echo $blood_amount = $_POST['amount'.$button_num];
			$hospital_username = $rows[$button_num][0];
			$bloodtype = $rows[$button_num][1];
			// Checking whether receiever has same blood group
			$query_string = "select receiver_blood_type from receivers where username like '".$receiver_username."';";
			$result = $conn->query($query_string);
			$receiver_blood_type = $result->fetch_object()->receiver_blood_type;

			if($receiver_blood_type != $bloodtype){
				header("Location: available_blood.php?message=Blood Type Doesn't Match");
				die();
			}

			// Checking whether the requested amount is not more than actually present

			else if($blood_amount > $rows[$button_num][2]){
				header("Location: available_blood.php?message=Requested Amount is more than available");
				die();
			}

			// If all the criteria matches then register the request 
			else if($receiver_blood_type == $bloodtype){
				$query_string = "insert into requested_blood_bank (hospital_username, receiver_username, blood_type, blood_quantity) values('".$hospital_username."','".$receiver_username."','".$bloodtype."', ".$blood_amount." );";
				echo $query_string;
				$result = $conn->query($query_string);
				if($result == 1){

					// Deducting available amount from Available blood bank
					$query_string = "update available_blood_bank set blood_quantity = blood_quantity - ".$blood_amount." where hospital_username like '".$hospital_username."' and blood_type like '".$receiver_blood_type."';";
					$result = $conn->query($query_string);
					if($result == 1){
						header("Location: available_blood.php?message=Added Successfully");
						die();
					}
				}
				else{
					header("Location: available_blood.php?message=Failed to Add");
					die();
				}
			}

		}
		else if($user_type == "hospital"){
			header("Location: available_blood.php?message=Hospitals Can't request Blood");
			die();
		}
		else{
			header("Location: index.php?redirect=available_blood&message=Login as Receiver");
		}
	}
?>

<?php
	include_once('templates/available_blood_layout.php');
	include_once('templates/_footer.php');
	include_once('alert_popout.js');
?>