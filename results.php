<?php
require("includes/connection.inc.php");

$query = $db->query("SELECT * FROM match_reports ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<title>League Management System</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: #1a237e;color: #eee" >
<style type="text/css">
	.table:hover{
		color: #eee;
	}
	td a{
		text-decoration: none !important;
	}
	.hide{
		display: inline-block;

	}

	tr:hover + .hide, .hide:hover {
    display: block;
    position: absolute;
    top: 5px;
    left: 0;
    right: 30px;
    width: 100%;
    text-align: center;
}
</style>
<div style="color: #eee" class="container">
	 <h1 style="margin-top: 70px;" align="center"> Match Result</h1>
	<div style="background: url('includes/img/footballer.png')center no-repeat">
	<?php
		echo "<table border='1' class='table table-hover'  style='border-collapse:collapse;cell-padding:10px;'>
				<tr>
				<th>Score</th>
				<th>Team</th>
				<th> </th>
				<th>Team</th>
				<th>Score</th>
				</tr>";
		while($row = $query->fetch_row()){
			echo "<tr>
					<td><a href='report.php?id=".$row[0]."'>".$row[3]."</a></td><td><a href='report.php?id=".$row[0]."'>".$row[1]."</a></a></td>
					<td><a href='report.php?id=".$row[0]."'> Vs </a></td><td><a href='report.php?id=".$row[0]."'>".$row[2]."</a></td>
					<td><a href='report.php?id=".$row[0]."'>".$row[4]."</a></td>
					</tr>";
		}
		echo "</table>";
	?>
</div>
	
</div>
</body>
<?php

?>
</html>