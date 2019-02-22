<?php

$name     =$_POST['name'];
$email    = $_POST['email'];
$password = $_POST['password'];  
$contact  =$_POST['contact'];
$city     =$_POST['city'];
$age      =$_POST['age'];



$con=mysqli_connect('localhost','root','','brm');


$q=" insert into account values ('$name','$email','$password',$contact,'$city',$age)" or 
die(mysqli_error($con));

$status=mysqli_query($con,$q); 


 if($status==1)
    {
	  
       header('location:http://localhost/BRM/index.php');
       	   
    }
       else
	   {
	   header('location:http://localhost/BRM/signup.php');	   
   
	   }

mysqli_close($con);

?>
