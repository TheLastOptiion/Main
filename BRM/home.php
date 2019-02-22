<?php 
session_start();
if(!isset($_SESSION['name']))
	header('location:http://localhost/BRM/index.php');
?>
<!DOCTYPE html>

<html>

<head>
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HOME PAGE</title>
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
		
		
<div class="container">
         
    <div style="margin-top:10px;" class="row">
	
	<div style=" margin-top:60px; margin-bottom:20px;" class="col-md-5">   
		      
                 <img class="img-responsive" src="images/recordm.jpg" alt="Books"></img>
                  <h3 style="color:white; background-color:black;"> Makes your way easy.</h3>	
			  
	    </div>
    <div class="col-md-7"> 
       
         <h1>MANAGE YOUR BOOK RECORD HERE -</h1>
	        <p>Choose you option :</p>
	        <p>1.Insert book data.<a href="insertForm.php">Click here</a></p>
	        <p>2.View book data.<a href="view.php">Click here</a></p>
	        <p>3.Update book data. <a href="updateForm.php">Click here</a></p>
	        <p>4.Delete book data.<a href="deleteForm.php">Click here</a></p>
	         <br>
             <h2>DISCRIPTION</h2>
	          <p>*In this website you can store your book records you have.
	             And also you can manage you data very easily.
              </p>
	         <br>
	          <p style="color:red;">Notice:</p><p>Don't save your secrate data here.</p>
        </div>    
	    </div>
</div>
		
		
   
  <footer>
            <div class="container">
                <center>
                    <p style="color:#9d9d9d; background-color:#101010;">Copyright &copy; Book record management. All Rights Reserved  |  E-mail Us: yshivendra14@gmail.com</p>	
                </center>
            </div>
        </footer>
        <!--Footer end-->
</body>

</html>