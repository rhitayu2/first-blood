<div class="header" style="padding: 1px">
		<h3> Blood Bank </h3>
		<h2 style = "font-size: 17px">Add New Blood Samples</h2>
	</div>

	<div class="topnav">
		<a href="index.php">Dashboard</a>
		<a href="available_blood.php">Available Blood Samples</a>
		<a href="hospital_info.php">Hospital Info</a>
		<a href="logout.php" style="float:right">Logout</a>
	</div>	

	<div class="forms">
		<div class="card">
			<form method="post">
				<h2>Add Blood Samples</h2>
				<div class="form-element">
					<label>Blood Type</label>
					<select name="add_blood_type" required>
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
				<div class="form-element">
					<label>Blood Quantity</label>
					<input type="number" name="add_blood_quantity" required placeholder="Enter Sample Blood Quantity" min=1 max=1000 title="Greater than 1"/>
				</div>
				<button type="submit" name=submit value=1>Add Inventory</button></p>
			</form>
		</div>
	</div>