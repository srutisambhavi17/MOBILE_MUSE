<html>
	<head>
		<title>FOURTH_RANGE</title>
		<link href="css/mod.css" type="text/css" rel="stylesheet" />
	</head>
	<body background="images/1.png>
		<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav.html");?>
		
		
		<div id="main">
		<center><br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
		<caption><b><u>FOURTH_RANGE</u></b></caption>
		<tr bgcolor="yellow">
			<th><b><u>BRAND NAME</u></b></th>
			<th><b><u>MODEL NAME</u></b></th>
			<th><b><u>PRICE</u></b></th>
			
  		</tr>
	<?php
 	include_once("dbconnect.php");
	$sql="select * from 20kto25k";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
          {
	   $row=mysqli_fetch_array($result);
		while($row)
		{
		?>
		<tr>
			<td><?php echo $row['Brand Name']?></td>
			
			<td><?php echo $row['Model Name']?></td>
			
			<td><?php echo $row['Price']?></td>
			
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