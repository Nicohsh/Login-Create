<?php

$conn = mysqli_connect("mysql38.unoeuro.com", "nicolaiholm_dk", "notsharingmypassword", "nicolaiholm_dk_db");

if (!$conn) {
	die("Connection failed: ".mysqli_connect_error());	
}

?>
