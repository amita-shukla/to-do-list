<?php
session_start();
include_once 'dbConnection.php';
$query="select * from user where id='$_POST[id]' AND pass='$_POST[pass]'" or die("error".mysqli_error($link));
$result=$link->query($query);

if(@mysqli_num_rows($result)==NULL)
{
	$message="Sorry! your user id or password do not match. Login again or register";
	
	header('Location:index.php?message='.$message);
	exit();
}
else
{
	
	$userid = $_POST['id'];
	$_SESSION['id']=$userid;
	header('Location:home.php?userid='.$userid);
	exit();
}


if(!$result)
{
	echo mysqli_error($link);
}



?>