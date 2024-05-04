<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Homework 10</title>
</head>

<body>
	<p>Welcome to my homepage</p>
	<?php
		if (!isset($_POST['submit']))
		{
			echo '<form action="" method="post">
			<div>First Name:
				<input type="text" name="firstName" id="firstName class="firstName"/>
			</div>
			<div>Last Name:
				<input type="text" name="lastName"/>
			</div>
			<div>Email Address:
				<input type="text" name="email"/>
			</div>
				<button type="submit" name="submit" value="submit">Submit</button>
			</form>
			';
		}
		if (isset($_POST['submit']))
		{
			$fname=$_POST['firstName'];
			$lname=$_POST['lastName'];
			$email=$_POST['email'];
			echo '<h3>Data Recieved from index.php</h3>';
			echo '<p>First Name: '.$fname.'</p>';
			echo '<p>Last Name: '.$lname.'</p>';
			echo '<p>Email Address: '.$email.'</p>';
		}
	?>
</body>
</html>