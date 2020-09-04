<!DOCTYPE html>
<html>
<head>
	<title>BAC | Login</title>
</head>
<meta name="viewport" content="width=device-width initial-scale=1">
<link rel="stylesheet" type="text/css" href="./css/login.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<body>
	<div class="container">
		
		<fieldset>
			
			<legend>BAC Log-In</legend>
			
			<div class="profile-icon">
				<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
			</div>
		
			<form method="post" action="#">
				<div class="input-field">
					<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
					<div class="input"><input type="text" name="username" placeholder="Username/Log-In ID"></div>
				</div>
				<div class="input-field">
					<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
					<div class="input"><input type="text" name="password" placeholder="Password"></div>
				</div>
				<div class="position">
					<input type="radio" name="position" id="student" value="student">
					<label for="student">Student</label>
					<input type="radio" name="position" id="teacher" value="teacher">
					<label for="teacher">Teacher</label> <br>
				</div>
				<input type="submit" name="submit" value="Log-In"> <br>
				<div><a href="#">Forgot Password?</a></div>
				
			</form>

		</fieldset>

		<div class="back-button">
			<a href="./index.php"><p>back</p></a>
		</div>

	</div>
</body>
</html>