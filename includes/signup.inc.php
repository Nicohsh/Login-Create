<?php
	
session_start();	
	
include '../dbh.php';
	
$fullname = $_POST['fullname'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

if (empty($fullname)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($uid)) {
	header("Location: ../signup.php?error=empty");
	exit();
}
if (empty($pwd)) {
	header("Location: ../signup.php?error=empty");
	exit();
} else {
	
$sql = "SELECT uid FROM user WHERE uid='$uid'";
$result = mysqli_query($conn, $sql);	
$uidcheck = mysqli_num_rows($result);

	if ($uidcheck > 0) {
		header("Location: ../signup.php?error=username");
		exit();	
	} else {
		$pwdhash = password_hash($pwd, PASSWORD_DEFAULT);
		$sql = "INSERT INTO user (fullname, uid, pwd) VALUES ('$fullname', '$uid', '$pwdhash')";
		$result = mysqli_query($conn, $sql); 
		header("Location: ../index.php");	
	}
}

?>