<div class="header" style="padding: 1px">
			<h3> Blood Bank </h3>
			<h2 style = "font-size: 17px">Register User</h2>
		</div>

		<div class="topnav">
			<a href="index.php">Home</a>
			<a href="available_blood.php">Available Blood Samples</a>
			<a href="index.php" style="float:right">Sign In</a>
		</div>

		<div class="forms">
			<div class="card">
				<form method="post" name="register_user">
					<p><b>Registration for New User</b></p>
					<div class="form-element inner_card">
						<label>User Name</label>
						<input type="text" name="username" pattern="[a-ZA-Z0-9]+" required />
					</div>
					<div class="form-element">
						<label>Password</label>
						<input type="password" name="password" required/>
					</div>
					<div class="form-element">
						<label>Re-type Password</label>
						<input type="password" name="re_password" required />
					</div>
					<div class="form-element">
						<label>Type of User</label>
						<select name="user_type" id ="user_type">
							<option value="receiver">Receiver</option>
							<option value="hospital">Hospital</option>
						</select>
					</div>
					<p>
						<button type="reset" name="reset" value="reset">Reset</button>
						<button type=submit name="submit" value="submit">Register</button>
					</p>
				</form>
			</div>
		</div>