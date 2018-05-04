<?php
	$name=$_POST["name"];
	$emailid=$_POST["emailid"];
	$mobileno=$_POST["mobileno"];
	$city=$_POST["city"];
	$address=$_POST["address"];
	$password=$_POST["password"];
	include_once("dbconnect.php");
	$sql="insert into register values( '$name' , '$emailid' , '$city' , '$address', '$mobileno', '$password')";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "registraton done";
	    header("Location:signup_after.php");
                   } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>