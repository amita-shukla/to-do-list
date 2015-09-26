<?php
//all the variables defined here are accessible in all the files that include this one
$link= new mysqli('localhost','root','','to_do')or die("Could not connect to mysql".mysqli_error($link));

?>