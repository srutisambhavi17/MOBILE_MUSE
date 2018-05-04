<html>
	<head>
		<title>login page</title>
		<link href="css/mod.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>
	 	<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav.html");?>
		
		
		<div id="main">
		<center><br/><br/><br/>
		<font color="red">
		<?php
			if(isset($_GET['msg']))
			{
				$msg = $_GET['msg'];
				echo $msg;
			}
		?>
		</font>
		
		<form action="login.php"  method="post">
			<center>
			<table cellpadding="7">
				<tr>
					<td><font face value="Verdana">LOGIN</font> </td>
					<td><input type="text" name="name"   class="textfield"  placeholder="enter admin name"  autocomplete="off" oncopy="return false"></td>
				</tr>
				<tr>
					<td><font face value="Verdana">PASSWORD</font> </td>
					<td><input type="password" name="password" class="textfield"  placeholder="enter password"  autocomplete="off"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="sign in "  id="login-submit">
					<input type="reset" value="cancel " id="login-cancel"</td>
				</tr>
			</table>
			</center>
		</form>
		</div>
		<?php include_once("footer.html");?>

		</div>
		</body>

</html>