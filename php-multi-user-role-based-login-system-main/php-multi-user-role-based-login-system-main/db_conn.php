<?php  

$sname = "localhost";
$uname = "root";
$password = "";

$db_name = "my_db";

$conn = mysqli_connect($sname, $uname, $password, $db_name);
$conn = mysqli_connect("localhost","root","","new_task");

if (!$conn) {
	echo "Connection Failed!";
	exit();
}
