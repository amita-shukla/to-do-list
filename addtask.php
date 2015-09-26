<html>
<head>
<title>Add Task- To Do List</title>
</head>
<body>
<center>
<br><br>
<?php echo @$_GET['message'];
		session_start();
		
 ?>

<form method="post" action="addtask1.php">
<table border="5" cellpadding="5">
<tr><th colspan="2">Add Task</th></tr>
<tr><td>Task Name: </td><td><input type="text" name="Task_Name" value="" size="50" id="Task_Name"></td></tr>
<tr><td>Due Date (Format YYYY-MM-DD): </td><td><input type="text" name="Due_Date" value="" size="50" id="Due_Date"></td></tr>
<tr><td>Notes: </td><td><input type="text" name="Details" value="" size="50" id="Details"></td></tr>
<tr><td>Set Priority: </td><td><input type="radio" name="Priority" value="Low" checked>Low<br><input type="radio" name="Priority" value="Medium">Medium<br><input type="radio" name="Priority" value="High">High</td></tr>
<tr><td>Set Category: </td><td><input type="radio" name="Category" value="General">General<br><input type="radio" name="Category" value="Home">Home<br><input type="radio" name="Category" value="Work">Work</td></tr>
<tr><td colspan="2"> <input type="submit" value="Add Task"></td></tr>
</table>
</form>
<a href="home.php">Back to Home page </a>
</center>
</body>
</html>