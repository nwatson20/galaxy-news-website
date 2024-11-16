<?php
	session_start();
?>

<header>
	<div id="navBar">
		<a href="index.php" id="navHome">Home</a>
		<ul>
			<li><a href="about.php">About</a></li>
			<li><a href="publication.php">Publication</a></li>
			<li><a href="newsfeed.php">Newsfeed</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li>
				<div class="dropdown">
					<a>Account</a>
					<div class="dropdownContent">
						<?php 
							if (isset($_SESSION['username'])) {
								echo '<form name="logOut" action="includes/logout.inc.php"><button type="submit" name="logOut">Log Out</button></form>';
							}
							else {
								echo '<form name="logIn" action="login.php"><button type="submit" name="logIn">Log In</button></form>';
							}
						?>
						<a href="signup.php">Sign Up</a>
					</div>
				</div>
			</li>
		</ul>
	</div>
</header>
