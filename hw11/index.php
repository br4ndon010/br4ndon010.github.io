<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Homework 11</title>
</head>

<body>
	<p>Welcome to my homepage</p>
	<?php
		if (!isset($_POST['submit']))
		{
			echo '<form action="" method="post">';
			//First name code block
			echo '<p>First Name:';
			if(isset($_GET['firstname']) && ($_GET['firstname']!=''))//previously submitted name
				echo'<input type="text" name="firstName" value="'.$_GET['firstname'].'"/>';
			else
			{
				if (isset($_GET['fnameErr']))
				{
					echo '<input type="text" name="firstName"/>';
					echo '<p><span style="color:F00">Error: First Name cannot be blank!</span></p>';
				}
				else
					echo '<input type="text" name="firstName"/>';
			}
			echo '</p>';
			
			echo '<p>Last Name:';
			if(isset($_GET['lastname']) && ($_GET['lastname']!=''))//previously submitted name
				echo'<input type="text" name="lastName" value="'.$_GET['lastname'].'"/>';
			else
			{
				if (isset($_GET['lnameErr']))
				{
					echo '<input type="text" name="lastName"/>';
					echo '<p><span style="color:F00">Error: Last Name cannot be blank!</span></p>';
				}
				else
					echo '<input type="text" name="lastName"/>';
			}
			echo '</p>';
			
			echo '<p>Email Address:';
			if(isset($_GET['Email']) && ($_GET['Email']!=''))//previously submitted name
				echo'<input type="text" name="email" value="'.$_GET['Email'].'"/>';
			else
			{
				if (isset($_GET['emailErr']))
				{
					echo '<input type="text" name="email"/>';
					echo '<p><span style="color:F00">Error: Email cannot be blank!</span></p>';
				}
				else
					echo '<input type="text" name="email"/>';
			}
			echo '</p>';
			
			echo '<button type="submit" name="submit" value="submit">Submit</button>';
			echo '</form>';
		}
		if (isset($_POST['submit']))
		{
			$errString='';
			if (($fname=$_REQUEST['firstName'])==""){
				$errString.="fnameErr=err&";
			}
			if (($lname=$_REQUEST['lastName'])==""){
				$errString.="lnameErr=err&";
			}
			if (($email=$_REQUEST['email'])==""){
				$errString.="emailErr=err";
			}
			if($errString!=''){
				header("Location: https://ec2-18-222-188-153.us-east-2.compute.amazonaws.com/hw11/index.php?$errString&firstname=$fname&lastname=$lname&Email=$email");

			}
			echo '<h3>Data Recieved from index.php</h3>';
			echo '<p>First Name: '.$fname.'</p>';
			echo '<p>Last Name: '.$lname.'</p>';
			echo '<p>Email Address: '.$email.'</p>';
		}
	?>
</body>
</html>