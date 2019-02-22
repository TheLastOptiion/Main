<?php
    
     
	  $con=mysqli_connect("localhost","root","","bookrecordmanagement"); 
     $q="truncate table book";
     $status=mysqli_query($con,$q);  
      mysqli_close($con);
?>
<?php 
session_start();
if(!isset($_SESSION['name']))
	header('location:http://localhost/BRM/login.php');
?>
<!doctype html>
<html>
<head>
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>FORMAT</title>
        <link href="style/css/bootstrap.min.css" rel="stylesheet">
		<link href="style/css/style.css" rel="stylesheet">
        <script src="style/js/jquery.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
        <link  rel="Stylesheet"  type="text/css" href="style/css/stylesheet.css">

</head>


<body>
 <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Book Record Management</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a><span class="glyphicon glyphicon-user"></span> Hello,<?php echo $_SESSION['name'];?></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    <div class="img-responsive">
	<h2>ALL DATA SUSCESFULLY REMOVED</h2>
	 <p>go to-<a href="home.php">Home Page</a></p>
   <br>
   </div>
    <footer>
            <div class="container">
                <center>
                    <p style="color:#9d9d9d; background-color:#101010;">Copyright &copy; Book record management. All Rights Reserved  |  E-mail Us: yshivendra14@gmail.com</p>	
                </center>
            </div>
        </footer>
</body>
</html>	