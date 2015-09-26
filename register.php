<html>
<head> 
<title> Register- To do List </title>
</head>
<body>
<center>
<br><br>
<?php echo @$_GET['message']; ?>

<form method="post" action="register1.php">

<table border="5" cellpadding='5'>
	<tr ><td colspan="2" align="center">Register</td></tr>
	<tr><td>Userid: </td><td><input type="text" name="id" value="" size="50" id="id"></td></tr>
	<tr><td>Password: </td><td><input type="password" name="pass" value="" size="50" id="pass"></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="Create Account"></td></tr>
</table>
</form>
</center>
</body>
</html>