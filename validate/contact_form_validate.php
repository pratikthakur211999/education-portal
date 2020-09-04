<?php

	if(isset($_POST["submit"]))
	{
		$name=mysqli_real_escape_string($_POST["name"]);
		$email=mysqli_real_escape_string($_POST["email"]);
		$number=mysqli_real_escape_string($_POST["number"]);
		$message=mysqli_real_escape_string($_POST["message"]);
		date_default_timezone_set("Asia/Kolkata");
		$date=date("d-m-y h:i:s");

		
	}

?>