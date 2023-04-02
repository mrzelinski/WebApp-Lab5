<?php
	include('Header.php');
?>
<html>
	<head>
	
	</head>
	
	<body>
	<center>
		<h1>Login Form</h1>
		<hr>
		<form name="login-form" method="POST" action="login_process.php">
		<table border="1" align="center">
		<tr>
		<td>Enter your userid </td> <td><input type+"text" name="userid" id="userid" /></td>
		</tr>
		<tr><td>Enter your password </td><td><input type+"text" name="pwd" id="pwd" /></td>
		</tr>
		<tr>
		<td>
		<p><img src="/EMS/captcha.php" width="120" height="30" border="1" alt="CAPTCHA"></p>
		</td>
		<td><input type="text" maxlength="5" name="captcha" value=""></td>
		</tr>
		<tr>
		<td align="center"> <input type="submit" value="Login"/> </td>
		<td align="center"><button name="reset" id="reset">Reset</button></td>
		</tr>
		</table>
		</form>
	</center>
	</body>
</html>