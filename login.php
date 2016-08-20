<!DOCTYPE HTML>
<html>
</head>
<title>Electronic Locking System-ELS</title>
<!--Please put this code in every pages-->
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="css/main.css" rel="stylesheet" media="screen">
<!--this code is to make a responsive web design(mobile friendly web apps)-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!--Please put this code in every pages-->



</head>
<body>
   <div class="container">
<!--put the process file in a action column -->
      <form class="form-signin" name="login" method="POST" action="system/login_process.php">
        <h4>Electronic Locking System Beta</h4>
        <div id="message">
          <?php
            session_start();
            $statement;
            if(isset($_SESSION['incorrect']))
            {
              $statement = "<div class='alert alert-danger'>Incorrect Room.No Or Password!</div>";
            echo $statement;
            } elseif(isset($_SESSION['signup'])) {
              $statement = "<div class='alert alert-success'>Successfully registered!";
              echo $statement;
            }
          ?>
         </div>
        <input type="text" name="RoomNo" class="form-control" placeholder="Room No." autofocus>
        <input type="Password" name="Password" class="form-control" placeholder="Password">
        
        <button type="submit" name="Submit" id="submit" class="btn btn-lg btn-primary btn-block">Bypass</button>

      </form>

    </div> <!-- /container -->
</body>
</html>