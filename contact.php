<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../assets/css/bootstrap.css" rel="stylesheet"/>
<link href="../assets/css/bootstrap-theme.css" rel="stylesheet"/>
<title>Homework 15</title>
</head>
<body>
	<div align="center">
  <h1>Contact</h1>
</div>
	<ul class="nav nav-pills nav-justified">
		<li role="presentation"><a href="../index.html">Home</a></li>
		<li role="presentation"><a href="../school.html">School</a></li>
		<li role="presentation"><a href="../work.html">Work</a></li>
		<li role="presentation"><a href="../hobbies.html">Hobbies</a></li>
		<li role="presentation"><a href="../other.html">Other</a></li>
		<li role="presentation" class="active"><a href="../contact.php">Contact</a></li>
	</ul>
	<table width="100%">
	<tr rowspan="3" bgcolor="#000000" border="2" align="center">
		<td colspan="6" align="center">
		<h3>Info:</h3>
		<p>
			This is my contact page, below are my email and phone number.
		</p>
		<p>
			brandon.hernandez@my.utsa.edu <br>
			(210)387-3932
		</p>
		<?php
			if (!isset($_POST['submit']))
			{
				echo '<form method="post" action="">';
				echo '<p>First Name: ';
				echo '<input type="text" name="firstname" style="color:blue"/>';
				echo '</p>';
				
				echo '<p>Last Name: ';
				echo '<input type="text" name="lastname" style="color:blue"//>';
				echo '</p>';
				
				echo '<p>Email: ';
				echo '<input type="text" name="email" style="color:blue"//>';
				echo '</p>';
				
				echo '<p>Phone Number: ';
				echo '<input type="text" name="phone" style="color:blue"//>';
				echo '</p>';
				
				echo '<p>Comments: ';
				echo '<input type="text" name="comments" style="color:blue"//>';
				echo '</p>';
				echo '<p><button type="submit" name="submit" value="submit" style="color:blue"/>Submit</button>';
				echo '</form>';
			}
			if (isset($_POST['submit']))
			{
				$firstname=addslashes($_POST['firstname']);
				$lastname=addslashes($_POST['lastname']);
				$email=addslashes($_POST['email']);
				$phone=addslashes($_POST['phone']);
				$comments=addslashes($_POST['comments']);
				echo '<h3>Data Recieved:</h3>';
				echo "<p>First Name: $firstname</p>";
				echo "<p>Last Name: $lastname</p>";
				echo "<p>Email: $email</p>";
				echo "<p>Phone: $phone</p>";
				echo "<p>Comments: $comments</p>";
				//Database connection parameters
				$username="webuser";
				$password="hg_E(FBX_XMXm-_8";
				$host="localhost";
				$db="contact_data";
				//Create new mysql connection
				$dblink=new mysqli($host,$username,$password,$db);//make the actual connection
				$sql="insert into `entries`
				(`first_name`,`last_name`,`email`,`phone`,`comments`) values
				('$firstname','$lastname','$email','$phone','$comments')";
				$dblink->query($sql) or
					die("<p>Something went wrong with: $sql<br>".$dblink->error);
				echo "<h3>Data entered into the database successfully!</h3>";
				echo '<a href="../results.php">Link to results</a>';
			}
			
		?>
		</td></tr>
	</table>
</body>
</html>