<?php
	//database contection parameters
	$username="webuser";
	$password="hg_E(FBX_XMXm-_8";
	$host="localhost";
	$db="contact_data";
	//create new mysql connection
	$dblink=new mysqli($host, $username, $password, $db);
	$sql="Select * from `entries`";
	$results=$dblink->query($sql) or
		die("<p> Something went wrong with: $sql<br>".$dblink->error);
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
?>