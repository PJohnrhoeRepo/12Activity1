<?php

session_start();

if (!isset($_SESSION['username'])) {
	header('location: login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<a href="logout.php" class="btn btn-secondary btn-lg active float-right">Log Out</a>
		<h1>Welcome, <?php echo $_SESSION['username']; ?> </h1>

	</div>
</body>
</html>