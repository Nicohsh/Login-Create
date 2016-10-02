<?php 
include 'header.php';
$curpage = basename($_SERVER['PHP_SELF']);

			if (isset($_SESSION['id'])) {
				echo "<div class='myform'>
					<h1>Wanna continue or logout?</h1>
					<form action='user.php'>
					<button class='submit'>USER PAGE</button>
					</form><br><br>
					<form action='includes/logout.inc.php'>
					<button class='submit'>LOG OUT</button>
					</form></div>";
					
			}
	
			else {
				echo "<form action='includes/login.inc.php' method='POST' class='myform'>
					<h1>Enter the portal for bacon</h1>
					<input type='text' name='uid' placeholder='Username'><br>    
					<input type='password' name='pwd' placeholder='Password' autocomplete='new-password'><br>
					<button type='submit' class='submit'>LOGIN</button>	
					</form>";
			}
			?> 

</body>
</html>




