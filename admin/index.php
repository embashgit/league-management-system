<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}
 ?>
<!DOCTYPE html>
<html>
<title>Administrator Dashboard</title>
<?php 
	include 'head.php';
	include 'nav.php';
 ?>
<body style="background: url('../includes/img/20171130_lax_stadium_01.jpg');">
	
	<div style="margin-top: 90px"  class=" row ">
		<div align="center" class="container">
		<h1 align="center" style="">Administrator Dashboard</h1>
		<div class="col-4 well"><a href="add_team.php"><h3 align="center">Add New Team <span class="glyphicon glyphicon-plus"></span></h3></a></div>
		<div style="margin-left: 12px" class="col-4 well"><a href="view_teams.php"><h3>View Team <span class="glyphicon glyphicon-folder-open"></span></h3></a></div>
		<div style="margin-left: 12px" class="col-3 well"><a href="add_fixture.php"><h3>Add Match Fixtures <span class="glyphicon glyphicon-tasks"></span></h3></a></div>
		

		
	</div>
	<div class="row">
		<div class="container">
			<div class="col-4 well"><a href="all_players.php"><h3 align="center">View Players <span class="glyphicon glyphicon-user"></span></h3></a></div>
		<div style="margin-left: 12px" class="col-4 well"><a href="upcoming.php"><h3>Post Upcoming Matches <span class="glyphicon glyphicon-sort-by-alphabet"></span></h3></a></div>
		<div style="margin-left: 12px" class="col-3 well"><a href="add_report.php"><h3>Add Match Report <span class="glyphicon glyphicon-save-file"></span></h3></a></div>
			
		</div>
		<div class="row">
			<div class="container">
				<div style="margin-left: 12px" class="col-4 well"><a href="view_reports.php"><h3>View Match Report <span class="glyphicon glyphicon-book"></span></h3></a></div>
		<div style="margin-left: 12px" class="col-4 well"><a href="add_admin.php"><h3>Add New Admin <span class="glyphicon glyphicon-plus"></span></h3></a></div>
		
			</div>
		</div>
		
	</div>
</body>
</html>