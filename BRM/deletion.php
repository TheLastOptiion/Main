<?php
 
  session_start();
    if(!isset($_SESSION['name']))
	 header('location:http://localhost/BRM/index.php');

 $size= sizeof($_POST);
	 $j=1;
	 for($i=1;$i<=$size;$i++,$j++)
	 {
		 $index="b".$j;
		 if(isset($_POST[$index]))
			 $b_id[$i]=$_POST[$index];
		 else
			 $i--;
		 
	 }
        $con=mysqli_connect("localhost","root","","brm"); 
	   
	   for($k=1;$k<=$size;$k++)
	   {
	   $query= "DELETE from book where bookid=".$b_id[$k];
	   $query_result= mysqli_query($con,$query);  
	   }
       mysqli_close($con);
?>
<!doctype html>
<html>
<head>
 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DELETE</title>
        <link href="style/css/bootstrap.min.css" rel="Stylesheet">
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
		<br>
		<br>
		<br>
    <h2>DATA SUSCESFULLY REMOVED</h2>
<br>
		<br>
		<br>

	<p><a href="home.php">Go to home</a></p>
   </div>
<br>
		<br>
		<br>
<br>
		<br>
		<br>
<br>
		<br>
		<br>
<br>
		<br>
		<br>


   <footer>
            <div class="container">
                <center>
                    <p>Copyright &copy; Book record management. All Rights Reserved  |  E-mail Us: yshivendra14@gmail.com</p>	
                </center>
            </div>
        </footer>
	 </body>
</html>	