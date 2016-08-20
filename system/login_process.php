<!--php source code. the form is from login.php, this is the action file for login.php-->
<?php
//Login Script. 
include_once('../include/connection.php');
if (isset($_POST['RoomNo'])&& isset($_POST['Password']))
{
session_start();
//import the post variable from html to php.
  $RoomNo = mysqli_real_escape_string($i_connection,$_POST['RoomNo']);
  $Password =mysqli_real_escape_string($i_connection,$_POST['Password']);
//find the room number and password in the database
$getlogindata = mysqli_query($i_connection,"SELECT RoomNo,Password FROM room WHERE RoomNo='$RoomNo' AND Password='$Password' ");

$check = mysqli_num_rows($getlogindata);



if(!$check)
{
	$_SESSION['incorrect'] = $check;
	header("Location: ../login.php");

} else {
	while ($i_data = mysqli_fetch_assoc($check));
	{
		$_SESSION['RoomNumber'] = $_POST['RoomNo'];
		
		header("Location: ../user.php");
	}
}


}
else{
 header("Location : ../login.php");
 }





?>
