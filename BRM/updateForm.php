<?php
 
session_start();
if(!isset($_SESSION['name']))
	header('location:http://localhost/BRM/index.php');
  
       $con=mysqli_connect("localhost","root","","brm");
	   
	   $query= "select * from book";
	   $query_result= mysqli_query($con,$query);
	   $rows= mysqli_num_rows($query_result);  
  
       mysqli_close($con);
?>

<!doctype html>
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
	<div style="margin-top:100px;" class="img-responsive">	
    <h2>SAVED DATA</h2>
	<form action="updation.php" method="post">
	   <div class="table-responsive">
	   <table class="table table-hover table-condensed" >
                <tr>
				     <th>BOOK ID</th>
					 <th>TITLE</th>
					 <th>PRICE</th>
					 <th>AUTHOR</th>
	            </tr>
				<?php 
				      for($i=1;$i<=$rows;$i++)
					  {
						  $row= mysqli_fetch_array($query_result);
						  
				?>
               <tr>
			        <td><?php echo $row['bookid']?><input type="hidden" name="bookid<?php echo $i;?>" value="<?php echo $row['bookid'];?>" /></td>
					<td><input type="text" name="title<?php echo $i;?>" value="<?php echo $row['title']?>" /></td>
					<td><input type="text" name="price<?php echo $i;?>" value="<?php echo $row['price']?>" /></td>
					<td><input type="text" name="author<?php echo $i;?>" value="<?php echo $row['author']?>" /></td>
               </tr>		
			   <?php } 
			   ?>			   
	  </table>
	  </div>
	   <table>
	     <tr>
		    <th><input type="submit" class="button"  value="Update"/></th>
		 </tr>
	  </table>
	  </form>
	   <p><a href="home.php">Go to home</a></p>
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
   