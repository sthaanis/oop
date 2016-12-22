<?php 

$mysqli = new mysqli("localhost","root","","oop");
if($mysqli->connect_error) {
	echo "Connection Error:" . $mysqli->connect_error;
} else {
	echo "Connected". "<br>";
}