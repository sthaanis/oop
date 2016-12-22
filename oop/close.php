<?php

$close = $mysqli->close();
if($close) {
	echo "Closed" . "<br>";
}