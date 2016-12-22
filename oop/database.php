<?php

// connection
include 'connect.php';

// creating database .. 
$sql = "CREATE DATABASE oop";
$result = $mysqli->query($sql);
if($result == TRUE) {
	echo "Database Created" . "<br>";
} else {
	echo "Error:" . $mysqli->error . "<br>";
}

include 'close.php';