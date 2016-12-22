<?php 

include 'connect.php';

$sql = "SELECT * FROM tbl_student";
$result = $mysqli->query($sql);
if($result == TRUE) {
	while($data = $result->fetch_assoc()) {
		echo "Student ID :" . " " . $data['student_id'] . "<br>";
		echo "First Name :" . " " . $data['first_name'] . "<br>";
		echo "Last Name :" . " " . $data['last_name'] . "<br>";
		echo "Email :" . " " . $data['email'] . "<br>" . "<hr>";
	}
	
}

include 'close.php';