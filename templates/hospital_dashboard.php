<div class="header" style="padding: 1px">
			<h3> Blood Bank </h3>
			<h2 style = "font-size: 15px">Hospital Dashboard: <?php print_r($_SESSION['username'])?></h2>
	</div>


	<div class="topnav">
		<a href="hospital_dashboard.php">Dashboard</a>
		<a href="available_blood.php">Available Blood Samples</a>
		<a href="hospital_add_inventory.php">Add Blood Info</a>
		<a href="hospital_info.php">Hospital Info</a>
		<a href="logout.php" style="float:right" value="submit">Logout</a>
	</div>


	<div class="row">	
		<div class="leftcolumn"	>
			<table id="bloodbank" style="border-style:solid ; border-width:2px">
				<h2>Available Blood Samples</h2>	
				<h4>Username: <?php echo $username?></h4>
				<tr>
					<th>Blood Type</th>
					<th>Blood Quantity (in mL)</th>
				</tr>
				<?php
					for($x = 0; $x<$blood_rows_num; $x++){
						echo "<tr>";
						echo "<td>".$blood_rows[$x][0]."</td>";
						echo "<td>".$blood_rows[$x][1]."</td>";
						echo "</tr>";
					}
				?>
			</table>

		</div>

		<div class="rightcolumn" >
			<h2>Current requests from receivers</h2>
			<table id="bloodbank">
				<tr>
					<th>Receiver Username</th>
					<th>Blood Type Requested</th>
					<th>Quantity Requested</th>
					<th>Time Requested</th>
				</tr>
				<?php
					for($x=0; $x<$num_row; $x++){
						echo "<tr>";
						for($y=1; $y<5;$y++){
							echo "<td>";
							print_r($rows[$x][$y]);
							echo "</td>";
						}
						echo "</tr>";
					}
				?>
			</table>
		</div>
	</div>