<div class="header" style="padding: 1px">
			<h3> Blood Bank </h3>
			<h2 style = "font-size: 15px">Hospital Dashboard: <?php print_r($_SESSION['username'])?></h2>
	</div>


	<div class="topnav">
		<a href="hospital_dashboard.php">Dashboard</a>
		<a href="available_blood.php">Available Blood Samples</a>
		<a href="hospital_add_inventory.php">Add Blood Info</a>
		<a href="logout.php" style="float:right" value="submit">Logout</a>
	</div>

	<div class="row">
		<div class="leftcolumn" style="background-color: #f1f1f1">
			&nbsp;&nbsp;&nbsp;&nbsp;
		</div>	
		<div class="leftcolumn"	style="width:50%">
			<table id="bloodbank" style="border-style:solid ; border-width:2px">
				<h2>Hospital Information</h2>	
				<h4>Username: <?php echo $username?></h4>
				<tr>
					<td>Hospital Name:</td>
					<td><?php echo $name?></td>
				</tr>
				<tr>
					<td>HospitalPhone Number:</td>
					<td><?php echo $number?></td>
				</tr>
				<tr>
					<td>Hospital Address:</td>
					<td><?php echo $address?></td>
				</tr>
				<tr>
					<td>Hospital Email Address:</td>
					<td><?php echo $email?></b></td>
				</tr>
			</table>
		</div>
	</div>