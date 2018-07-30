<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");

?>
<!DOCTYPE html>
<html>
<title>Teams | Administrator Dashboard</title>
<?php
include 'head.php'; 
include'nav.php';

?>
<body style="background: url('../includes/img/20171130_lax_stadium_01.jpg');color: #eee">
	<br />
	<style type="text/css">
		.btn-info{
			background: #333;
		}
	</style>
	<div class="" style="margin-top: 80px; border:background:#333;">
		<h2 align="center" style="margin-top: 15px">List of all teams</h2>
		<?php
		$query = $db->query("SELECT * FROM teams ORDER BY name");
		$i = 1;
		while($row = $query->fetch_row()){ ?>
			<div class="col-4 col-offset-4">
				<div class="col-sm-11"><h4><?php echo $i;?> - <?php echo strtoupper($row[1]) ?></h4>
				</div>
				<div class="col-sm-1"><a href="team.php?id=<?php echo $row[0] ?> "><button style="background: #blue" class="btn btn-info btn-lg">View Team Infomation</button></a>
				</div>
			<hr/>	
			</div>
			
			<?php $i++;
		 }
	?>
	</div>
	
</body>

</html>