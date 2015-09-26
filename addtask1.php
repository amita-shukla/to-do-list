<?php

include_once 'dbConnection.php';
session_start();
$query="insert into tasks (id, Task_Name, Due_Date, Priority, Details, Category) values ('$_SESSION[id]','$_POST[Task_Name]','$_POST[Due_Date]','$_POST[Priority]','$_POST[Details]','$_POST[Category]')" or die("error".mysqli_error($link));
$result=$link->query($query);

if(!$result)
{
	echo mysqli_error($link);
}
else
{
	$message="Your Task has been added successfully";
	header('Location:addtask.php?message='.$message);
	exit();
}

?>