<?php
session_start();
include_once 'dbConnection.php';
$query="insert into user values ('$_POST[id]','$_POST[pass]')" or die("error".mysqli_error($link));
$result=$link->query($query);

if(!$result)
{
	$message="User id already exists. Attempt with some other user id";
	header('Location:register.php?message='.$message);
	
}
else
{
	$message="Congratulations! You have been successfully registered";
	
	header('Location:index.php?message='.$message);
	exit();
}

/*
else
{
	
	$userid = $_POST['id'];
	$_SESSION['id']=$userid;
	header('Location:home.php?userid='.$userid);
	exit();
}

*/




?>