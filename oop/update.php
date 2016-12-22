<?php 

include 'connect.php';

$sql = "UPDATE tbl_student SET last_name = 'Stha' WHERE student_id = 1";
$result = $mysqli->query($sql);
if($result == TRUE) {
	echo "Record Updated" . "<br>";
} else {
	echo "Error :" . $mysqli->error . "<br>";
} 
include 'close.php';