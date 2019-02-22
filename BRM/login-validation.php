
<?php
session_start();


$email    =$_POST['email'];
$password  =$_POST['password'];  


$con=mysqli_connect('localhost','root','','brm');


$q="select * from account where email='$email' && password='$password'";

$status=mysqli_query($con,$q); 
$res=mysqli_num_rows($status);

 if($res==1)
      {
	     $_SESSION['name']=$email;
         header('location:http://localhost/BRM/home.php');
        	   
     }
       else
	   {
	   header('location:http://localhost/BRM/index.php');	   
   
	   }


mysqli_close($con);

?>