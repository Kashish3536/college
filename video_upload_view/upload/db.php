<?php

$conn = mysqli_connect("localhost","root","","video_upload_view");

if(!$conn){
	die("connection Failed!");
}
else {
	echo "success";
}
?>