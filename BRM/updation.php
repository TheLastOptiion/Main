<?php
 
session_start();
if(!isset($_SESSION['name']))
	header('location:http://localhost/BRM/login.php');

$size= sizeof($_POST);
$records=$size/4;

for($i=1;$i<=$records;$i++)
{
	$index1="bookid".$i;
	$bookid[$i]=$_POST[$index1];
	
	$index2="title".$i;
	$title[$i]=$_POST[$index2];
	
	$index3="price".$i;
	$price[$i]=$_POST[$index3];
	
	$index4="author".$i;
	$author[$i]=$_POST[$index4];
}
   $con=mysqli_connect("localhost","root","","brm");
for($i=1;$i<=$records;$i++)
{
   $q="update book 
       SET title='$title[$i]',price=$price[$i],author='$author[$i]' 
	   where bookid=$bookid[$i]";

     mysqli_query($con,$q);
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>

<head>
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UPDATE</title>
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
  <div class="img-responsive">
   <h1>Record has been successfully UPDATED</h1>
   <p><a href="home.php">Go to home</a></p>
   <br>
   <p><a href="view.php">View record</a></p>
    <br>
   <p><a href="deleteForm.php">Delete Record</a></p>
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
   