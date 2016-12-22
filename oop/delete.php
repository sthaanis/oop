<?php 

include 'connect.php';

$sql = "DELETE FROM tbl_student WHERE student_id = 3";
$result = $mysqli->query($sql);
if($result == TRUE) {
	echo "Data Deleted" . "<br>";
} else {
	echo "Error :" . $mysqli->error . "<br>";
}

include 'close.php';