<?php
session_start();
echo "<center>";
echo "<br><br>Search Results<br>";
if(isset($_SESSION['id'])){
	include_once 'dbConnection.php';
	$query="SELECT Task_Name, Due_Date, Priority, Details, Completed FROM tasks WHERE id='$_SESSION[id]' and Task_Name='$_POST[search]' ORDER BY Due_Date" or die("error".mysqli_error($link));;
	$result=$link->query($query);
	
	if ($result->num_rows > 0) {
		echo "<table border='5' rules='rows' cellpadding='10'><tr><th><a href='orderbyname.php'>To Do</a></th><th><a href='home.php'>Due Date</a></th><th>Priority</th><th>Other Details</th><th align='left' colspan='4'>Done</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["Task_Name"]."</td><td>".$row["Due_Date"]."</td><td>".$row["Priority"]."</td><td>".$row["Details"]."</td><td>".$row["Completed"]."</td><td><a href='delete.php?Task_Name=".$row["Task_Name"]."'>Delete</a></td><td> <a href='setcomplete.php?Task_Name=".$row["Task_Name"]."'>Set the task as completed</a></td><td><a href='edit.php?Task_Name=".$row["Task_Name"]."'>Edit</a></td></tr>";
		}
		echo "</table>";	
		/*echo "<br><br><form method='post' action='deleteAll.php'><input type='submit' value='Delete completed tasks'></form>";*/
	}
	else
	{
		echo "<br>No Tasks";
	}
	echo "<br><br><a href='home.php'>Back to Home Page </a>"; 
	echo "<br><br><a href='logout.php'>Logout</a>";
	}
	else
	{
		$message="Please Login";
		header('Location:index.php?message='.$message);
	}
echo "</center>";
?>