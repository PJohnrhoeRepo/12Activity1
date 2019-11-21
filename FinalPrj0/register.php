<?php
	require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-color: #95a5a6">

	<div id="main-wrapper">
		<center>
			<h2>Registration Form</h2>
			<img src="imgs/person.png" class="person">
		</center>
			<form class="myform" action="register.php" method="post">

				<label><b>Full name:</b></label><br>
				<input name="fullname" type="text" class="inputvalues" required><br>
				<br>
				<label><b>Gender:</b></label><br>
				<input name="gender" type="radio" class="radiobtns" value="Male" checked required>Male
				<input name="gender" type="radio" class="radiobtns" value="Female" required>Female <br>
				<br>
				<label><b>Strand:</b></label>
				<select class="strand" name="strand">
				<option value="ABM">ABM</option>
				<option value="STEM">STEM</option>
				<option value="HUMSS">HUMSS</option>
				<option value="TECHVOC">TECHVOC</option>
				</select><br>
				<br>
				<label><b>Username:</b></label><br>
				<input name="username" type="text" class="inputvalues" required><br>
				<br>
				<label><b>Password:</b></label><br>
				<input name="password" type="password" class="inputvalues" required><br>
				<br>
				<label><b>Confirm Password:</b></label><br>
				<input name="cpassword" type="password" class="inputvalues" required><br>
				<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"><br>
				<a href="index.php"><input type="button" id="back_btn" value="<< Back"></a>

			</form>

		<?php
			if (isset($_POST['submit_btn'])) {
				//echo '<script type="text/javascript"> alert("Sign Up button clicked")</script>';

				$fullname = $_POST['fullname'];
				$gender = $_POST['gender'];
				$strand = $_POST['strand'];

				$username = $_POST['username'];
				$password = $_POST['password'];
				$cpassword = $_POST['cpassword'];

				if ($password == $cpassword) {

					$encrypted_password = md5($password);
					
					$query = "Select * From userinfotable Where username = '$username'";
					$query_run = mysqli_query($con, $query);
 
					if (mysqli_num_rows($query_run) > 0) {

						//there is already a user with the same username
						echo '<script type="text/javascript"> alert("User already taken")</script>';
					}
					else {

					$query = "Insert Into userinfotable values('','$username', '$fullname', '$gender',
							' $strand', '$encrypted_password')";

					$query_run = mysqli_query($con, $query);

						if ($query_run) {
							echo '<script type="text/javascript"> alert("User Registered, Go to log in page")</script>';
						}
						else {
							echo '<script type="text/javascript"> alert("Error!")</script>';
						}
					}

				}
				else {
					echo '<script type="text/javascript"> alert("Password and Confirm Password does not match")</script>';
				}
			}
		?>
		
	</div>
<script type="text/javascript"></script>
</body>
</html>