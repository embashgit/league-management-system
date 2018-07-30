<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");

$team_id = $_GET['id'];

$query_team = $db->query("SELECT * FROM teams WHERE id='$team_id'");
$row = $query_team->fetch_row();
$team_name = $row[1];
$coach = $row[2];

$query_players = $db->query("SELECT * FROM players WHERE team='$team_name'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Administrator Dashboard</title>
<link rel="stylesheet" type="text/css" href="../stylesheets/style2.css">
</head>
<body>
	<a href="index.php"><h1>Administrator Dashboard</h1></a>
	<br />
	<?php
		echo "<p>
				<table>
				<tr>
				<td>Team Name</td><td> - ".$team_name."</td>
				</tr>
				<tr>
				<td>Team Manager</td><td> - ".$coach."</td>
				</tr>
				</table>
				</p>";
				
		echo "<h3>Players</h3>";
		echo "<table>";
		echo "<tr>
				<th>Player Name</th>
				<th>Player Team</th>
				<th>Player Position</th>
				<th> Player Age </th>
				<th>Player Local Gvrt</th>
				<th>Player State</th>
				<th>Session</th>
			 </tr>";
		while($rw = $query_players->fetch_row()){
			echo "<tr>
					<td>".$rw[1]."</td><td> - ".$rw[3]."</td>
					</tr>";
		}
		echo "</table>";
	?>
	
</body>
</html>