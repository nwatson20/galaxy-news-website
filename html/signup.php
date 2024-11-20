<html>
	<head>
		<title>Sign Up</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
	<?php include('header.php'); ?>
		<div class="container">
			<div class="page pYW">
				<div class="pageItem green">
					<?php
						if(isset($_GET['error'])) {
							if($_GET['error'] == "emptyfields") {
								echo '<p class="usererror">Please make sure every field is filled out.</p>';
							}
							else if($_GET['error'] == "passwordcheck") {
								echo '<p class="usererror">The passwords do not match. Please type again.</p>';
							}
						}
					?>
					<form name="signup" action="includes/signup.inc.php" method="post">
						<label for="username">Username: </label><br>
						<input type="text" name="username"/><br>
						
						<label for="password">Password: </label><br>
						<input type="text" name="password"/><br>
						
						<label for="passwordRepeat">Confirm Password: </label><br>
						<input type="text" name="passwordRepeat"/><br>
						
						<button type="submit" name="signupSubmit" class="lightBlue">Submit</button>
					</form>
				</div>
				<div class="pageItem">
					<h2>Sign Up</h2>
					<p>Already have an account? <a href="login.php">Log in</a></p>
				</div>
			</div>
		</div>
	<?php include('footer.php'); ?>
	</body>
</html>