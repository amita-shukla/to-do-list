<?php

include_once 'dbConnection.php';
session_start();
$query="update tasks set Completed='Yes' where Task_Name='$_GET[Task_Name]'" or die("error".mysqli_error($link));
$result=$link->query($query);

if(!$result)
{
	echo mysqli_error($link);
}
else
{
	
	header('Location:home.php');
	exit();
}

?>