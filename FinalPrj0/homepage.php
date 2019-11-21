<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #95a5a6">

	<div id="main-wrapper">
		<center>
			<h2>Welcome <?php echo $_SESSION['username']; ?> </h2>
			<img src="imgs/person.png" class="person">
		</center>
			<form class="myform" action="homepage.php" method="post">

				
			<a href="logout.php"><input type="button" id="logout_btn" value="Log Out"></a>

			</form>

		
		
	</div>

</body>
</html>