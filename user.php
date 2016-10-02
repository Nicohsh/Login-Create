<?php
include 'header.php';

if (isset($_SESSION['id'])) {
		echo "<div class='myform'>
			<h1>There's really nothing to do here..</h1>
    		<form action='includes/logout.inc.php'>
    		<button class='submit'>LOG OUT</button>
    		</form></div>";
	}
	
	else {
		header("Location: index.php");
	}

?>



</body>
</html>