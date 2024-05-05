<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="../hw15/assets/css/bootstrap.css" rel="stylesheet"/>
<link href="../hw15/assets/css/bootstrap-theme.css" rel="stylesheet"/>
<script src="assets/js/jquery-3.5.1.js"></script>
<title>Homework 15</title>
</head>
<body>
	<div align="center">
  <h1>Contact</h1>
</div>
	<ul class="nav nav-pills nav-justified">
		<li role="presentation"><a href="../hw15/index.html">Home</a></li>
		<li role="presentation"><a href="../hw15/school.html">School</a></li>
		<li role="presentation"><a href="../hw15/work.html">Work</a></li>
		<li role="presentation"><a href="../hw15/hobbies.html">Hobbies</a></li>
		<li role="presentation"><a href="../hw15/other.html">Other</a></li>
		<li role="presentation" class="active"><a href="../hw15/contact.php">Contact</a></li>
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
			echo '<tbody id="results">';
			echo '</tbody>';
			echo '</table>';
		?>
		</td></tr>
	</table>
</body>
</html>
<script>
function refresh_div() {
	$.ajax({
		type: 'post',
		url: 'https://ec2-18-222-188-153.us-east-2.compute.amazonaws.com/hw15/query.php',
		success: function(data) {
			$('#results').html(data);
		}
	});
};
setInterval(function(){ refresh_div(); }, 1000);
</script>