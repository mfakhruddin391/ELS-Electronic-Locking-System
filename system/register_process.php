<?php
if (isset($_POST['IC_No']))
		{
	include_once('include/connection.php');
		$IC_No =   $_POST['IC_No'];
		$Name =    $_POST['Name'];
		$Age =	   $_POST['Age'];
		$Address = $_POST['Address'];
		$Tel_No =  $_POST['Tel_No'];

		$query = "INSERT INTO customer (IC_No,Name,Age,Address,Tel_No) VALUES ('$IC_No','$Name','$Age','$Address','$Tel_No') ";
		
		$signupdata = mysqli_query($i_connection,$query);

		if(!$signupdata)
		{
			$_SESSION['incorrect_signup'] = $signupdata;
			header("Location: signup_user.php");
			
		} else {
			echo "Successfully registered!";
			}

		}

?>