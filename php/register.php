<html>
	<head>
		<title> registration  </title>	
		<link href="css/mod.css" type="text/css" rel="stylesheet">
		<style>
			table{
			border:5px solid black;  
			
			width:600;
			height:400;
			}
			td{
			     text-align:center; 
			}
			
		</style>
	</head>
	
	<body  >
		<div id="container">
		
		
	          <div id="header">
	            		<img src="images/pic.jpg"  width="980"  height="120" ></div>


	<?php include_once("topnav.html");?>

		<form action="signup.php" method="post">
		
		<div="main">
		<center>
		<table >
			
			<tr>
				<td>NAME::</td>
				<TD><INPUT TYPE="text" name="name" placeholder="enter name here"></td> 
			</tr>
			<tr>
				<td>EMAIL ID::</td>
				<TD><INPUT TYPE="text" name="emailid" placeholder="enter email id "></td> 
			</tr>
			<tr>
				<td>MOBILE NO:: </td>
				<TD><INPUT TYPE="text" name="mobileno"></td> 
			</tr>
			<tr>
				<td>PASSWORD:: </td>
				<TD><INPUT TYPE="password" name="password"  placeholder="enter password"  autocomplete="off"></td> 
			</tr>
			
			<tr>
				<td>CITY::</TD>
				<td><select name="city">
					<option>Bhubaneswar
					<OPTION>Rourkela
					<OPTION>Sambalpur
					<option>Angul
					<option>Berhampur
					<option>OTHERS
				</td>
			</tr>
			
			<tr>
				<td>ADDRESS::</td>
				<td>   
				          <textarea name="address"  cols="20"  row="10">
				          </textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SUBMIT">
				
				<input type="reset" value="RESET"></td>
			</tr>
		
		</table>
		</center>
		</div>
		<br>
		<div id="footer"><br/>
                   		 <h5 style = "color :  white" ><u><center>@COPYRIGHT MOBILE MUSE</u></center></h5>
</div>
	</div>
	</body>

</html>
