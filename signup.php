<?php 
include 'header.php';
$curpage = basename($_SERVER['PHP_SELF']);
?>

<?php

	if (isset($_SESSION['id'])) {
		//echo $_SESSION['id'];
	}
	
	else {
		//echo "You are not logged in!";
	}
?>

<form action="includes/signup.inc.php" method="POST" class="myform">
	<h1>Join the dark side!</h1>
    <input type="text" name="fullname" placeholder="Full name"><br>
    <input type="text" name="uid" placeholder="Username"><br>  
    <input type="password" name="pwd" placeholder="Password" autocomplete="new-password"><br>
    <button type="submit" class="submit">CREATE ACCOUNT</button>
</form>

<?php
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
	if (strpos($url, 'error=empty') !== false) {
		echo "<h2>Fill out all boxes!</h2>";
	}
	
	elseif (strpos($url, 'error=username') !== false) {
		echo "<h2>Username already exists!</h2>";
	}
?>

</body>
</html>