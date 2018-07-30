<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");

?>
<!DOCTYPE html>
<html>
<title>All Players | Administrator Dashboard</title>
<?php
include 'head.php';
include 'nav.php';
?>

<body style="background:#333;">
	<div class="col-8 col-offset-2 " style="margin-top: 80px;color: #eee;border: 1px solid #333; border-radius:10px; background:#333;background: rgba(54, 25, 25, .5); opacity:0.3 0 0; padding: 30px;">
			<h1 align="center">View Report</h1>
		<?php
		$query = $db->query("SELECT * FROM players ORDER BY name ASC");
		echo "<table class='styled'>
				<tr>
				<th>Player Name</th>
				<th>Player Team</th>
				<th>Player Position</th>
				<th> Player Age </th>
				<th>Player Local Gvrt</th>
				<th>Player State</th>
				<th>Session</th>
				<th> </th>
				</tr>";
		while($row = $query->fetch_row()){
			echo "<tr>
					<td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td><a href=''>Edit</a></td>
					</tr>";
		}
		echo "</table>";
	?>
	</div>
		
</body>
</html>