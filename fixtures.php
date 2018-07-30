<?php
require("includes/connection.inc.php");

$query = $db->query("SELECT * FROM fixtures ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<title>Fixtures | League Management System</title>
<?php
include 'head.php';
include 'nav.php';
?>
<style type="text/css">
	.table:hover{
		color: #333;
	}
</style>
<body style="background: #000;">
	<h2 style="color:#eee;margin-top: 80px; text-align: center">Match Fixtures</h2>
<div class="container">
	 
<div align="center" style="margin-top: 10px;background: url('includes/img/footballer.png')center no-repeat;color:#eee">

	<?php
		echo "<table class='table table-hover' border='1' style='border-collapse:collapse;cell-padding:10px;'>
				<tr>
				<th>Date & Time</th><th>Team 1</th><th> </th><th>Team 2</th><th>Venue</th>
				</tr>";
		while($row = $query->fetch_row()){
			echo "<tr>
					<td>".$row[1]."</td><td>".$row[2]."</td><td> Vs </td><td>".$row[3]."</td><td>".$row[4]."</td>
					</tr>";
		}
		echo "</table>";
	?>
</div>
</div>
</body>
<?php include 'admin/footer.php'?>
</html>