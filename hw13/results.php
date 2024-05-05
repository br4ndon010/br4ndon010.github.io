<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../hw13/assets/css/bootstrap.css" rel="stylesheet"/>
<link href="../hw13/assets/css/bootstrap-theme.css" rel="stylesheet"/>
<title>Homework 13</title>
</head>
<body>
	<div align="center">
  <h1>Contact</h1>
</div>
	<ul class="nav nav-pills nav-justified">
		<li role="presentation"><a href="../hw13/index.html">Home</a></li>
		<li role="presentation"><a href="../hw13/school.html">School</a></li>
		<li role="presentation"><a href="../hw13/work.html">Work</a></li>
		<li role="presentation"><a href="../hw13/hobbies.html">Hobbies</a></li>
		<li role="presentation"><a href="../hw13/other.html">Other</a></li>
		<li role="presentation" class="active"><a href="../hw13/contact.php">Contact</a></li>
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
			//database contection parameters
			$username="webuser";
			$password="hg_E(FBX_XMXm-_8";
			$host="localhost";
			$db="contact_data";
			//create new mysql connection
			$dblink=new mysqli($host, $username, $password, $db);
			$sql="Select * from `entries`";
			$results=$dblink->query($sql) or die("<p> Something went wrong with: $sql<br>".$dblink->error);
			echo '<table border="1" width="100%" >';
			echo '<tr>';
			echo '<th> Record #</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Phone</th><th>Comments</th>';
			echo '</tr>';
			while ($data=$results->fetch_array(MYSQLI_ASSOC))
			{
				echo '<tr>';
				echo "<td>$data[auto_id]</td>";
				echo "<td>$data[first_name]</td>";
				echo "<td>$data[last_name]</td>";
				echo "<td>$data[email]</td>";
				echo "<td>$data[phone]</td>";
				echo "<td>$data[comments]</td>";
				echo '</tr>';
			}
			echo '</table>';
		?>
		</td></tr>
	</table>
</body>
</html>