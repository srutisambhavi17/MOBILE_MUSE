


<html>
	<head>
		<title> Customer Feedback  </title>	
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<style>
			table{
			border:5px solid black;  
			background-color:#66ff99;
			width:600;
			height:400;
			}
			td{
			     text-align:center; 
			}
			
		</style>
	</head>
	
	<body  >
	We value your feedback and endeavour to come to terms with it!
		<div id="container">
		
		<?php include_once("header.html");?>
		<?php include_once("topnav.html");?>
		<form action=".php" method="post">
		
		<div="main">
		<center>
		<table >
			
			<tr>
				<td>NAME::</td>
				<TD><INPUT TYPE="text" name="name" placeholder="enter name here"></td> 
			</tr>
			<tr>
				<td>EMAIL ID::</td>
				<TD><INPUT TYPE="text" name="emailid" placeholder="enter your emailid "></td> 
			</tr>
			<tr>
				<td>FEEDBACK:: </td>
				<textarea name="feedback"  cols="20"  row="10" placeholder="enter your feedback here">
				          </textarea>
				
			</tr>
			
			
				
			
			<tr>
				<td></td>
				<td><input type="submit" value="SUBMIT">
				
				<input type="reset" value="RESET"></td>
			</tr>
		
		</table>
		</center>
		</div>
		</br>
		<?php include_once("footer.html");?>
	</div>
	</body>

</html>
