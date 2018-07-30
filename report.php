<?php
if(!isset($_GET['id'])){
	header("Location: index.php");
}

$id = $_GET['id'];

require("includes/connection.inc.php");
?>
<!DOCTYPE html>
<html>
<title>Report | League Management System</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: url('includes/img/wall.jpg')">
	<div class="container">
		
		<div align="center" style="margin-top: 80px">
			<div><h2 style="color:#eee">Match Result</h2></div>
			<?php
				$query = $db->query("SELECT * FROM match_reports WHERE id='$id'");
				$row = $query->fetch_row();
				
				echo "<table class='' border='1' border='1' style='background:#000; color:#eee;text-align:center;opacity:0.8;border-collapse:collapse;cell-padding:10px;'>
						<tr>
						<th>".strtoupper($row[1])."</th><th>Vs</th><th>".strtoupper($row[2])."</th>
						</tr>
						<tr>
						<td>".$row[3]."</td><td>Score</td><td>".$row[4]."</td>
						</tr>
						<tr>
						<td>".$row[5]."</td><td>Posessions %</td><td>".$row[6]."</td>
						</tr>
						<tr>
						<td>".$row[7]."</td><td>Fouls</td><td>".$row[8]."</td>
						</tr>
						<tr>
						<td>".$row[9]."</td><td>Corners</td><td>".$row[10]."</td>
						</tr>
						<tr>
						<td>".$row[11]."</td><td>Free Kicks</td><td>".$row[12]."</td>
						</tr>
						<tr>
						<td>".$row[13]."</td><td>Yellow Cards</td><td>".$row[14]."</td>
						</tr>
						<tr>
						<td>".$row[15]."</td><td>Red Cards</td><td>".$row[16]."</td>
						</tr>
						</table>";
			?>
		</div>
	</div>	

</body>
</html>
	