<html>
<head> 
<title> To do List </title>
</head>
<body>
<center>
<?php echo @$_GET['message']; ?>
<br><br>

<table border="5" cellpadding="5">
<form method="post" action="login.php">
	<tr ><td colspan="2" align="center">Login</td></tr>
	<tr><td>Userid: </td><td><input type="text" name="id" value="" size="50" id="id"></td></tr>
	<tr><td>Password: </td><td><input type="password" name="pass" value="" size="50" id="pass"></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
</form>
<form method="post" action="register.php">
	<tr><td colspan="2" align="center"><input type="submit" value="Register"></td></tr>
</form>
</table>

</center>
</body>
</html>