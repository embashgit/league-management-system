<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");

$error= "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$time = $_POST['time'];
	$team_1 = $_POST['team1'];
	$team_2 = $_POST['team2'];
	$venue = $_POST['venue'];
	if (empty($time)||empty($team_1)||empty($team_2)||empty($venue)) {

		$error = "<div align='center' style='margin-bottom: 20px;border-radius: 20px; padding:15px' class='alert-danger' ><h4><span style='color:red;'>One or more field(s) is empty</span></h4></div>";

	}else{
		$db->query("INSERT INTO fixtures(time, team1, team2, venue) VALUES('$time','$team_1','$team_2','$venue')");
		$error = "<div align='center' style='margin-bottom: 20px;border-radius: 20px; padding:15px' class='alert-success' ><h4><span style='color:green;'>fixture inserted successfully</span></h4></div>"; 
	}
}

?>
<!DOCTYPE html>
<html>
<title>Add fixtures | Administrator Dashboard</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: url('../includes/img/20171130_lax_stadium_01.jpg');">
	<br />
	<h2 align="center" style="margin-top:80px; ">Add Fixtures</h2>
	<form action="" method="POST">
	<div class="row">
		<div class="col-lg-8 col-offset-2">
			<?php echo $error;  ?>
			<div class="col-lg-6">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="venue" class="form-label">VENUE</label>
					<input type="text" class="form-control" name="venue"/>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label class="form-label">Team 1</label>
					<select class="form-control" name="team1">
						<option value=''>Select Team</option>
						<?php
							$query_teams = $db->query("SELECT * FROM teams");
							while($row = $query_teams->fetch_row()){
								echo "<option value='".$row[1]."'>".$row[1]."</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div><!--col-6-->
		<h1 class="col-1">Vs</h1>
		<div class="col-lg-5">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="time" class="form-label">Date & Time</label>
					<input type="text" class="form-control" name="time">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="team2" class="form-label">Team 2</label>
					<select class="form-control" name="team2">
						<option value=''>Select Team</option>
						<?php
							$query_teams = $db->query("SELECT * FROM teams");
							while($row = $query_teams->fetch_row()){
								echo "<option value='".$row[1]."'>".$row[1]."</option>";
							}
						?>
					</select>
				</div>
			</div>
		</div><!--col-6-->
		</div>
	</div>
	<br>
	<div align="center"><input style="background: #000;color: #eee" type="submit" class="btn btn-lg  " value="POST Fixture" name=""></div>
	
</body>

</html>