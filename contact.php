<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/header.css">
	<link rel="stylesheet" type="text/css" href="./css/contact.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<title>BAC</title>
</head>
<body>
	
	<!-- header -->
	<?php include("./included_files/header.php") ?>
	<!-- header ends -->

	<!-- container -->
	<div class="container">

		<!-- message and background image -->
		<div class="welcome">
			<div class="message">
				<h2>contact</h2>
				<p>send us a message using the form below</p>
			</div>
		</div>
		<!-- message and background image ends -->

		<!-- content -->
		<div class="content">
			
			<div class="contact-form">
				<form method="post" action="./validation/contact_from_validate.php">
					
					<label for="name">Full Name</label> <br>
					<input type="text" name="name" id="name" required> <br>
					<label for="email">Email Address</label> <br>
					<input type="email" name="email" id="email" required> <br>
					<label for="number">Contact Number</label> <br>
					<input type="tel" pattern="[0-9]{10}" required name="number" id="number"> <br>
					<label for="message">Message</label> <br>
					<textarea name="message" rows="5" id="message"></textarea> <br>
					<input type="submit" name="submit" value="Submit">
			
				</form>
			</div>

			<div class="contact">

				<h4>Address:</h4>
				<p>G-75B Phase-5 <br> Om Vihar Uttam Nagar <br> New Delhi-110059</p>

				<h4>E-mail:</h4>
				<p>thakursanam07@gmail.com</p>
				
				<h4>Mobile:</h4>
				<p>+91 8588985441</p>
			
			</div>
		
		</div>
		<!-- content ends -->

	</div>
	<!-- container ends -->

	<!-- footer -->
	<?php include("included_files/footer.php") ?>
	<!-- footer ends -->

</body>
</html>