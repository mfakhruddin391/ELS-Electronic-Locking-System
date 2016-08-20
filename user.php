<html>
<head><title>User Section</title>
<!--Please put this code in every pages-->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/main.css" rel="stylesheet" media="screen">
<!--this code is to make a responsive web design(mobile friendly web apps)-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--Please put this code in every pages-->
<!--Php , use $_SESSION data from process.php-->	  
</head>
<body>
      <div class="container">
      <div class="form-signin">
        <div class="alert alert-success" align="center">
            <strong>
            Login Successfully!
            </br>
            <?php
            session_start();
            if(isset($_SESSION['RoomNumber']))
            {
            echo "Room number :".$_SESSION['RoomNumber'];
            } else {
                header("Location: login.php");
            }
            ?>
        </br>
            Current Door status : Locked
            </strong></div>
            <center><button type="submit" class="btn btn-success">Open Door</button>
            <button type="submit" class="btn btn-danger">Close Door</button></center>
        </br>
        Guest name&nbsp;&nbsp;&nbsp;&nbsp;     :
        </br>
        Check-in time&nbsp;&nbsp;  :
        </br>
        Check-out time :
        <a href="system/logout.php" class="btn btn-default btn-lg btn-block">Logout</a>
      </div>
    </div> <!-- /container -->
    
</body>
</html>