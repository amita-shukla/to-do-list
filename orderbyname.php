<html>
<head> 
<title> Home- To Do List </title>
</head>
<body>
<center>
</br></br>

<?php 
session_start();
	echo 'Welcome: '.$_SESSION['id'];
	echo "<p><p>";
?>
<form method="post" action="addtask.php">
<input type="submit" value="Add Task">
</form>
<form method="post" action="search.php">
<br>
Search Task:<input type="text" size="50" name="search" value="Write Task Name" id="search">
<input type="submit" value="Search"> 
</form>
<form method="post" action="home.php">
Category to display:
<select name="category">
		<option value="All">All</option>
		<option value="General">General</option>
		<option value="Home">Home</option>
		<option value="Work">Work</option>
</select>
<input type="submit" value="Show selected category" size ="10">
</form>
<?php
	if(isset($_POST['category']))
		{
		$category=$_POST['category'];
		if($category=="All")
		{
			$query="SELECT Task_Name, Due_Date, Priority, Details, Completed FROM tasks WHERE id='$_SESSION[id]' ORDER BY Task_Name" or die("error".mysqli_error($link));;
		}
		else{
		$query="SELECT Task_Name, Due_Date, Priority, Details, Completed FROM tasks WHERE id='$_SESSION[id]' AND Category='$category' ORDER BY Task_Name" or die("error".mysqli_error($link));
		}
		}
	else
		
		$query="SELECT Task_Name, Due_Date, Priority, Details, Completed FROM tasks WHERE id='$_SESSION[id]' ORDER BY Task_Name" or die("error".mysqli_error($link));
	/*echo $category; */
	if(isset($_SESSION['id'])){
	include_once 'dbConnection.php';
	
	$result=$link->query($query);
	
	if ($result->num_rows > 0) {
		echo "<table border='5' rules='rows' cellpadding='10'><tr><th><a href='orderbyname.php'>To Do</a></th><th><a href='home.php'>Due Date</a></th><th>Priority</th><th>Other Details</th><th align='left' colspan='4'>Done</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>".$row["Task_Name"]."</td><td>".$row["Due_Date"]."</td><td>".$row["Priority"]."</td><td>".$row["Details"]."</td><td>".$row["Completed"]."</td><td><a href='delete.php?Task_Name=".$row["Task_Name"]."'>Delete</a></td><td> <a href='setcomplete.php?Task_Name=".$row["Task_Name"]."'>Set the task as completed</a></td><td> <a href='edit.php?Task_Name=".$row["Task_Name"]."'>Edit Task</a></td></tr>";
		}
		echo "</table>";	
		echo "<br><br><form method='post' action='deleteAll.php'><input type='submit' value='Delete completed tasks'></form>";
	}
	else
	{
		echo "<br>No Tasks";
	}
	echo "<br><br><a href='logout.php'>Logout</a>";
	}
	else
	{
		$message="Please Login";
		header('Location:index.php?message='.$message);
	}
?>


</center>
</body>
</html>