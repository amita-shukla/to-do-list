<?php
session_start();
session_destroy();

	/*header:('Location:index.php');*/
	$message="Please Login";
		header('Location:index.php?message='.$message);

?>