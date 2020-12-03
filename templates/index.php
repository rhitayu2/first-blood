<div class="header">
			<h1> Blood Bank </h1>
			<h2 style = "font-size: 15px">One-stop for Hospitals and Receivers</h2>
		</div>
		
		<div class="topnav">
			<a href="index.php">Home</a>
			<a href="#">About</a>
			<a href="available_blood.php">Available Blood Samples</a>
			<a href="register.php" style="float:right">Register</a>
		</div>

		<div class="card">
			
			<form method="post" name="sign-in">
				<h3>Sign In</h3>
				<div class = "form-element" style="padding: 10px">
					<label style="padding-right: 8px">Username</label>
					<input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
				</div>
				<div class = "form-element" style="padding: 10px">
					<label style="padding-right: 8px">Password</label>
					<input type="password" name="password" required />
				</div>
				<button type="submit" name="submit" style="padding-left: 5px">Log In</button>
				<p><?php
					if (!isEmpty($message)){
						echo "Wrong username or password";
					}
				?></p>

			</form>
		</div>