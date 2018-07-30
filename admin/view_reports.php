<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");

?>
<!DOCTYPE html>
<html>
<title>View Report | Administrator Dashboard</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: url('../includes/img/20171130_lax_stadium_01.jpg');">
	<div class="col-8 col-offset-2 " style="margin-top: 80px;color: #eee;border: 1px solid #333; border-radius:10px; background:#333;background: rgba(54, 25, 25, .5); opacity:0.3 0 0; padding: 30px;">
			<h1 align="center">View Report</h1>
		<?php
		$query = $db->query("SELECT * FROM match_reports");
		$i = 1;
		while($row = $query->fetch_row()){
			echo "<h3 > ".$i." - <a style='text-decoration:none;'href='report.php?id=".$row[0]."'>".$row[1]." Vs ".$row[2]."</a></h3>"; 
			$i++;
		}
	?>	
	</div>
	
</body>
</html>