<?php
require("includes/connection.inc.php");

$query = $db->query("SELECT * FROM teams ORDER BY name ");
?>
<!DOCTYPE html>
<html>
<title>Table|League Management System</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: #000">
<style type="text/css">

		.table:hover{
		color: #333;
	}
</style>
<div class="container" style="margin-top: 80px;background: url('includes/img/footballer.png')center no-repeat;color:#eee; ">

	<h2 align="center" style="font: tahoma">Table</h2>
	<?php
		echo "<table class='table table-hover '   border='1' style='border-collapse:collapse;cell-padding:10px;'>
				<tr>
				<th>TEAM NAME</th><th>POINTS</th><th>W</th><th>D</th><th>L</th><th>G</th>
				</tr>";
		while($row = $query->fetch_row()){
			echo "<tr>
					<td>".$row[1]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td>
					</tr>";
		}
		echo "</table>";
	?>
</div>
</body>
</html>