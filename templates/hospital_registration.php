<div class="header" style="padding: 1px">
			<h3> Blood Bank </h3>
			<h2 style = "font-size: 17px">Register Hospital</h2>
		</div>

		<div class="topnav">
			<a href="index.php">Home</a>
		</div>

		<div class="card">
			<form method="post" name="hospital_registration_form">
				<p><b>Registration for new Hospitals</b></p>
				<div class = "form-element">
					<label>Full Name</label>
					<input type="text" name="hospital_name" pattern="[a-ZA-Z0-9]+" required  placeholder="Enter Hospital Name" />
				</div>
				<div class = "form-element">
					<label>Phone Number</label>
					<input type="tel" name="hospital_phone_number" required placeholder="999 999 9999" title="Just the 10 digit code"/>
				</div>
				<div class = "form-element">
					<label>Address</label>
					<input type="text" name="hospital_address" required placeholder="Enter Hospital Address"/>
				</div>
				<div class = "form-element">
					<label>Email Address</label>
					<input type="Email" name="hospital_email_address" required title="Enter Hospital Email Address" placeholder="Enter Hospital Email Address"/>
				</div>
				
				<p> <button type="back" name="back" value=1 formnovalidate>Back</button>
					<button type="submit" name="submit" value=1>Submit</button></p>
			</form>
		</div>