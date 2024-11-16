<html>
	<head>
		<title>Form</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
	<?php include('header.php'); ?>
		<div class="container">
			<div class="page pB">
				<div class="pageItem">
					<h2>Log In</h2>
					<p>Don't have an account yet? <a href="signup.php">Sign up here!</a></p>
				</div>
				<div class="pageItem blue">
					<?php
						if(isset($_GET['error'])) {
							if($_GET['error'] == "emptyfields") {
								echo '<p class="usererror">Please make sure every field is filled out.</p>';
							}
							else if($_GET['error'] == "doesnotexist") {
								echo '<p class="usererror">That user does not exist.</p>';
							}
						}
					?>
					<form name="login" action="includes/login.inc.php" method="post">
						<label for="username">Username: </label><br>
						<input type="text" name="username"/><br>
						<label for="password">Password: </label><br>
						<input type="text" name="password"/><br>
						
						<button type="submit" name="loginSubmit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	<?php include('footer.php'); ?>
	</body>
</html>