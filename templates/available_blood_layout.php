<!DOCTYPE html>
<html>
<head>
	<title>Available Blood Samples</title>
	<link rel="stylesheet" href="css/init.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/navigation.css">
	<link rel="stylesheet" href="css/table.css">
	<link rel="stylesheet" href="css/card.css">
</head>

<body>
	<div class="header" style="padding: 1px">
		<h3> Blood Bank </h3>
		
	</div>

	<div class="topnav">
		<a href="index.php">Home</a>
		<a href="available_blood.php">Available Blood Samples</a>
		<?php
		if($_SESSION['username']){
			print_r("<a href='logout.php?redirect=available_blood' style='float:right'>Logout</a>");
		}
		else{
			print_r("<a href='index.php?redirect=available_blood' style='float:right'>Sign-In</a>");
			print_r("<a href='register.php' style='float:right'>Register</a>");
		}
		
		?>
	</div>
	<h2 style="text-align: center">Available Blood Samples</h2>

	<div class = "card">
		<h3>Filter Blood Bank</h3>
		<form method="get">
			<p>
				<div class = "form-element" style="display: inline;">
				<label>Hospital</label>
				<?php
				
				?>
				<select name="filter_hospital" required>
					<option value="all">All</option>
					<?php 
						$query_filter = "select hospital_name from hospitals";
						$result_filter = $conn->query($query_filter);

						$filter_rows = $result_filter->fetch_all();
						$filter_row_num = $result_filter->num_rows;
						for($x=0 ; $x<$filter_row_num; $x++){
							echo '<option value='.$filter_rows[$x][0].'>'.$filter_rows[$x][0].'</option>';
						}
					?>
				</select>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;
				<div class = "form-element" style="display: inline;">
				<label>Blood Type</label>
				<select name="filter_blood_type" required>
					<option value="all">All</option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
				</select>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<div class="form-element" style="display: inline;">
				<LABEL>Search</LABEL>
				<button type="submit" name="filter"> Go</button>
			</div>
			</p>
		</form>
	</div>

	<div class="card">
		<form method="post">
			<table id="bloodbank">
			  	<tr>
				    <th>Hospital Username</th>
				    <th>Blood Type</th>
				    <th>Blood Quantity</th>
				    <th>Quantity to Request (in mL)</th>
				    <th>Request</th>
			  	</tr>
			  	<?php
			  		for($x=0; $x<$num_row; $x++){
			  			echo "<tr>";
			  			$query_string = "select receiver_blood_type from receivers where username like '".$_SESSION['username']."' ;"; 
			  			$result = $conn->query($query_string);
			  			$bloodtype = $result->fetch_all()[0][0];
			  			for($y=0; $y<5; $y++){
			  				echo "<td>";
			  				if($y < 3){
				  				echo $rows[$x][$y];
			  				}
			  				else if($y == 4){
			  					?>
			  					<button type="submit" name="request" value=
			  					<?php echo $x; 
										if($_SESSION['user_type'] == "hospital"){
											echo " disabled";
											echo " title='Hospital'";
										}

			  					?>
			  					>Request</button>
			  				<?php

			  				}
			  				else if($y == 3){
			  					?>
			  					<div class = "form-element">
									<input type="number" name=<?php echo "amount" .$x; 
										if($_SESSION['user_type'] == "hospital")
											echo " disabled";?> min=1 max="100" placeholder="Enter Value"/>
								</div>
			  					<?php
			  				}
			  				echo "</td>";
			  			}
			  			echo "</tr>";
			  		}
			  	?>
			</table> 

		</form>
	</div>
