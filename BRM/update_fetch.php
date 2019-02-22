s<?php
  
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
$size= sizeof($_POST);
$records=$size/4;

for($i=1;$i<=$records;$i++)
{
	$index1="name".$i;
	$name[$i]=$_POST[$index1];
	
	$index2="cname".$i;
	$cname[$i]=$_POST[$index2];
	
	$index3="cid".$i;
	$cid[$i]=$_POST[$index3];
	
	$index4="paystatus".$i;
	$paystatus[$i]=$_POST[$index4];
}
   for($i=1;$i<=$records;$i++)
{
   $q="update solo_users 
       SET Full_Name='$name[$i]',Ch_Name=$cname[$i],Ch_Id='$cid[$i]',Payment_Status=$paystatus[$i], 
	   where email='" .  $_SESSION['user_email'] . "' ";

     mysqli_query($con,$q);
}
mysqli_close($con);
 header('location: fetch_script.php');
?>

   