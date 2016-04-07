


<!DOCTYPE html>
<html>
<head>
	<title>HTML Table</title>
</head>
<body>
	<table border=1>
		<th>User #</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in upper case</th>
		<th>Length of full name (without spaces)</th>

	<?php 
		$users = array( 
					   array('first_name' => 'Michael', 'last_name' => 'Choi'),
					   array('first_name' => 'John', 'last_name' => 'Supsupin'),
					   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
					   array('first_name' => 'KB', 'last_name' => 'Tonel') 
		);
		for ($i = 0; $i < count($users) ; $i++) { 
				$user_num = $i + 1;
				echo "<tr><td>$user_num</td>";
			foreach ($users[$i] as $key => $value) {
				echo "<td>$value</td>";
			}
			$length_full_name = strlen($users[$i]["first_name"]) + strlen($users[$i]["last_name"]);
			echo "<td>" . $users[$i]["first_name"] . " " . $users[$i]["last_name"] . "</td>";
			echo "<td>" . strtoupper($users[$i]["first_name"] . " " . $users[$i]["last_name"]) . "</td>";
			echo "<td>" . $length_full_name . "</td></tr>";
		}
	?>
	</table>
</body>
</html>
