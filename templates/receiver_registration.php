<div class="header" style="padding: 1px">
		<h3> Blood Bank </h3>
		<h2 style = "font-size: 17px">Register Receiver</h2>
	</div>

	<div class="topnav">
		<a href="index.php">Home</a>
	</div>

	<div class="card">
		<form method="post" name="receiver_registration_form">
			<p><b>Registration for new Receivers</b></p>
			<div class = "form-element">
				<label>Full Name</label>
				<input type="text" name="user_full_name" pattern="[a-ZA-Z0-9]+" required  placeholder="Enter Full Name" />
			</div>
			<div class = "form-element">
				<label>Gender</label>
				<select name="user_gender">
					<option value="m">Male</option>
					<option value="f">Female</option>
					<option value="o">Other</option>
				</select>
			</div>
			<div class = "form-element">
				<label>Age</label>
				<input type="number" name="user_age" required min="1" max="100" placeholder="Enter your age" />
			</div>
			<div class = "form-element">
				<label>Phone Number</label>
				<input type="number" name="user_phone_number" required placeholder="999 999 9999" title="Just the 10 digit code"/>
			</div>
			<div class = "form-element">
				<label>Email Address</label>
				<input type="Email" name="user_email" required placeholder="Enter your Email Address" title="Enter your Email Address"/>
			</div>
			<div class = "form-element">
				<label>Blood Type</label>
				<select name="user_bloodtype" required>
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
			<p> <button type="back" name="back" value=1 formnovalidate>Back</button>
				<button type="submit" name="submit" value=1>Submit</button></p>

		</form>
	</div>