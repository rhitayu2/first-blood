<div class="header" style="padding: 1px">
			<h3> Blood Bank </h3>
			<h2 style = "font-size: 15px">Receiver Dashboard: <?php print_r($_SESSION['username'])?></h2>
	</div>

	<div class="topnav">
		<a href="receiver_dashboard.php">Dashboard</a>
		<a href="available_blood.php">Available Blood Samples</a>
		<a href="logout.php" style="float:right" value="submit">Logout</a>
	</div>

	<div class="row">	
		<div class="leftcolumn"	>
			&nbsp;
			<table id="bloodbank" style="border-style:solid ; border-width:2px; border-radius: 6px;">
				<tr><td><h2 style="font-size: 20px">Receiver Information</h2><td></tr>
				<tr>
					<td>Name:</td>
					<td><?php echo $name?></td>
				</tr>
				<tr>
					<td>Blood Type:</td>
					<td><b><?php echo $blood_type?></b></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td><?php echo $gender?></td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><?php echo $age?></b></td>
				</tr>
				<tr>
					<td>Phone Number:</td>
					<td><?php echo $phone_number?></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><?php echo $email?></td>
				</tr>
			</table>
			&nbsp;
		</div>
		<div class="rightcolumn", style="padding: 15px; width">
			<h2>Sample Requests by Receiver</h2>
			<table id="bloodbank">
				<tr>
					<th>Request Time</th>
					<th>Hospital Username</th>
					<th>Blood Quantity</th>
				</tr>
				<?php
				for($x =0; $x < $num_row ; $x++){
					echo "<tr>";
					echo "<td>".$rows[$x][4]."</td>";
					echo "<td>".$rows[$x][0]."</td>";
					echo "<td>".$rows[$x][3]."</td>";
					echo "</tr>";
				}
				?>
			</table>
		</div>
	</div>