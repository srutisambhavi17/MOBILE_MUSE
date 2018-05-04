<?php
	$name=$_POST["name"];
	$emailid=$_POST["emailid"];
	$feedback=$_POST["feedback"];
	include_once("dbconnect.php");
	$sql="insert into feed_back values( '$name' , '$emailid' , '$feedback')";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "Feedback Submitted Successfully";
	 } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>