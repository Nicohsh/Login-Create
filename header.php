<?php
session_start();
$curpage = basename($_SERVER['PHP_SELF']);
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Modul 2 - Assignment 2</title>
<link rel="stylesheet" type="text/css" href="reset.css">
<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>

<header>
	<nav>
       	<ul>
           	<li><a href="index.php" <?php if ($curpage == 'index.php'){echo 'class="active"';}?>>HOME</a></li>
            <li><a href="signup.php" <?php if ($curpage == 'signup.php'){echo 'class="active"';}?>>SIGN UP</a></li>
        </ul>
    </nav>
</header>