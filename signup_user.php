<!DOCTYPE HTML>
<html>
	<head>
		<title>ELS Guest Registration</title>
		<!--Please put this code in every pages-->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/main.css" rel="stylesheet" media="screen">
<!--this code is to make a responsive web design(mobile friendly web apps)-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--Please put this code in every pages-->
		<?php
		
		?>
	<head>
<body>
	<h4 align="center">Signup User/Customer</h4>
	

	 <form class="form-signup" name="signup" method="POST" action="register_process.php">
	<div id="message">
	<?php 
	session_start();
	if (isset($_SESSION['incorrect_signup']))
	{
		echo "<div class='alert alert-danger'>IC number has been registered already! Please use another IC number.</div>";
	}
	?>
	</div>	


	 	<input type="text" name="IC_No" class="form-control" placeholder="IC Number" autofocus>

	 	<input type="text" name="Name" class="form-control" placeholder="Name" autofocus>
	 </br>
	 	<input type="text" name="Age" class="form-control" placeholder="Age" autofocus>

	 	<input type="text" name="Address" class="form-control" placeholder="Address" autofocus>

	 	<input type="text" name="Tel_No" class="form-control" placeholder="Telephone Number" autofocus>

	 	<button type="submit" name="signup" value="submit" class="btn btn-lg btn-primary btn-block">Signup</button>


	 </form>


</body>

</html>