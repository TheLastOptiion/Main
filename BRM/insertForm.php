<?php 
session_start();
if(!isset($_SESSION['name']))
	header('location:http://localhost/BRM/login.php');
?>
<!DOCTYPE html>

<html>

<head>
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>INSERT</title>
        <link href="style/css/bootstrap.min.css" rel="stylesheet">
		<link href="style/css/style.css" rel="stylesheet">
        <script src="style/js/jquery.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
        <link  rel="Stylesheet"  type="text/css" href="style/css/stylesheet.css">

</head>

<body >
   <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="home.php">Book Record Management</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a><span class="glyphicon glyphicon-user"></span> Hello,<?php echo $_SESSION['name'];?></a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

<div  style="margin-top:100px;" class="insertform img-responsive">

   <h1>BOOK RECORD MANAGEMENT</h1>

   <form action="insertion.php" method="post">
       <table>
	      <tr>
	       <th>Title</th>
		   <td><input type="text" name="title" required /></td>
		   </tr>
		    <tr>
	       <th >Price</th>
		   <td ><input type="number" name="price" required /></td>
		   </tr>
		    <tr>
	       <th>Author</th>
		   <td><input type="text" name="author" required /></td>
		   </tr>
		   
	   </table>  
	    <table>
	     <tr>
		    <th><input type="submit" class="button"  value="Insert"/></th>
		 </tr>
	  </table>
	   <br>
    <p><a href="home.php">Go to home</a></p>
	<br>
   </form>
 </div>
  <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Book record management. All Rights Reserved  |  E-mail Us: yshivendra14@gmail.com</p>	
                </center>
            </div>
        </footer>
</body>

</html>