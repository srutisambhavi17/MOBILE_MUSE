<html>
	<head>
		<title>USED MOBILE</title>
		<link href="css/mod.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
		

<div id="header">
	            		<img src="images/pic.jpg"  width="980"  height="120" ></div>
		
		<?php include_once("topnav.html");?>
		
		
		<div id="main">
		<center><br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
		<caption><b><u>USED MOBILE</u></b></caption>
		<tr bgcolor="yellow">
			
			<th><b><u>BRAND NAME</u></b></th>
			<th><b><u>MODEL NAME</u></b></th>
			<th><b><u>PRICE</u></b></th>
			<th><b><u>HOW OLD</u></b></th>
  		</tr>
	<?php
 	include_once("dbconnect.php");
	$sql="select * from used_mobile";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
          {
	   $row=mysqli_fetch_array($result);
		while($row)
		{
		?>
		<tr>
			
			<td><?php echo $row['Brand']?></td>
			<td><?php echo $row['Model']?></td>
			<td><?php echo $row['Price']?></td>
			<td><?php echo $row['How_old']?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($result);
		
		}
	}
      else
	{?>
	 <tr>
	   <td colspan="4">NO RECORD FOUND</td>
	</tr>
       <?php
        }
          mysqli_close($con);
        ?>
	</table>

		</div>
		<?php include_once("footer.html");?>

		</div>
</body>
</html> 