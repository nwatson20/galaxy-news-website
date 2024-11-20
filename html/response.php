<?php
	include_once 'includes/connect.php';
?>

<html>
	<head>
		<title>Response</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<body>
	<?php include('header.php'); ?>
		<div class="container">
			<div class="page pYW">
				<div class="pageItem">
					<?php
						$username = $_SESSION['username'];
						echo "<h2>Welcome, " . $username . "!</h2>";
					?>
				</div>
				<div class="pageItem">
					<h4>You have sent Athena two fun facts:</h4>
					<p>Did you know? "Medical science in medieval Europe used to be based on the four "humors", which were blood, phlegm, yellow bile, and black bile. Gross!"</p>
					<p>Did you know? "Sea sponges are able to regenerate parts of their body that were cut off. They can also clone themselves!"</p>
				</div>
			</div>
			<div class="page pYC">
				<div class="pageItem blue">
					<form name="funFact">
						<input type="text" name="fact" class="bigInput"/><br>
						<button type="submit">Send</button>
					</form>
				</div>
				<div class="pageItem">
					<h2>Want to send another fun fact?</h2>
					<p>Type it all out here! Athena may even respond with more info she's come across on her travels.</p>
				</div>
			</div>
		</div>
	<?php include('footer.php'); ?>
	</body>
</html>