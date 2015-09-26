<?php

include_once 'dbConnection.php';
session_start();
$query="update tasks set Due_Date='$_POST[Due_Date]', Priority='$_POST[Priority]', Details='$_POST[Details]', Category='$_POST[Category]' where id='$_SESSION[id]' AND Task_Name='$_POST[Task_Name]'" or die("error".mysqli_error($link));
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