<?php
include 'connect.php';

$sql = "INSERT INTO tbl_student(first_name,last_name,email)VALUES('Anish','Shrestha','anishshrestha541@gmail.com')";
$result = $mysqli->query($sql);
if($result == TRUE) {
	echo "Data Recorded" . "<br>";
} else {
	echo "Error :" . $mysqli->error . "<br>";
}

include 'close.php';