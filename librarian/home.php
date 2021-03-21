<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/home_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<a href="insert_book.php">
				<input type="button" value="Add New Book" />
			</a><br />
			<a href="update_copies.php">
				<input type="button" value="Update Books" />
			</a><br />
			<a href="view_book.php">
				<input type="button" value="View Books" />
			</a><br />
			
		</div>
	</body>
</html>