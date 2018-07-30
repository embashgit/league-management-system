<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");
$team_1= $team_2= $score_1= $score_2= $possession_1= $possession_2= $fouls_1= $fouls_2= $corners_1= $corners_2= $kicks_1= $kicks_2= "";
$yellows_1= $yellows_2= $reds_1= $reds_2= $error= "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$team_1 = $_POST['team1'];
	$team_2 = $_POST['team2'];
	$score_1 = $_POST['score_1'];
	$score_2 = $_POST['score_2'];
	$possession_1 = $_POST['possession_1'];
	$possession_2 = $_POST['possession_2'];
	$fouls_1 = $_POST['fouls_1'];
	$fouls_2 = $_POST['fouls_2'];
	$corners_1 = $_POST['corners_1'];
	$corners_2 = $_POST['corners_2'];
	$kicks_1 = $_POST['kicks_1'];
	$kicks_2 = $_POST['kicks_2'];
	$yellows_1 = $_POST['yellows_1'];
	$yellows_2 = $_POST['yellows_2'];
	$reds_1 = $_POST['reds_1'];
	$reds_2 = $_POST['reds_2'];
	
	if($db->query("INSERT INTO match_reports(team1, team2, score1, score2, possession1, possession2, fouls1, fouls2, corners1, corners2, freekick1,
	freekick2, yellow1, yellow2, red1, red2) VALUES('$team_1','$team_2','$score_1','$score_2','$possession_1','$possession_2','$fouls_1','$fouls_2',
	'$corners_1','$corners_2','$kicks_1','$kicks_2','$yellows_1','$yellows_2','$reds_1','$reds_2')"))
		$error = "<span style='color:green;'>Match Report added successfully</span>";
	else
		$error = "<span style='color:red;'>Error: report cannot be saved</span>";
	
	if((int)$score_1 > (int)$score_2){
		$query_update = $db->query("SELECT * FROM teams WHERE name='$team_1'");
		$urow = $query_update->fetch_row();
		
		$point = (int)$urow[3];
		$point += 3;
		$win = (int)$urow[4];
		$win += 1;
		$goals = (int)$urow[7];
		$goals += $score_1;
		$db->query("UPDATE teams SET points='$point', w='$win', gs='$goals' WHERE name='$team_1'");
		
		$query_update = $db->query("SELECT * FROM teams WHERE name='$team_2'");
		$urow = $query_update->fetch_row();
		
		$ls = (int)$urow[6];
		$ls += 1;
		$goals = (int)$urow[7];
		$goals += $score_2;
		$db->query("UPDATE teams SET l='$ls', gs='$goals' WHERE name='$team_2'");
	}else if((int)$score_2 > (int)$score_1){
		$query_update = $db->query("SELECT * FROM teams WHERE name='$team_2'");
		$urow = $query_update->fetch_row();
		
		$point = (int)$urow[3];
		$point += 3;
		$win = (int)$urow[4];
		$win += 1;
		$goals = (int)$urow[7];
		$goals += $score_2;
		$db->query("UPDATE teams SET points='$point', w='$win', gs='$goals' WHERE name='$team_2'");
		
		$query_update = $db->query("SELECT * FROM teams WHERE name='$team_1'");
		$urow = $query_update->fetch_row();
		
		$ls = (int)$urow[6];
		$ls += 1;
		$goals = (int)$urow[7];
		$goals += $score_1;
		$db->query("UPDATE teams SET l='$ls', gs='$goals' WHERE name='$team_1'");
	}else if((int)$score_1 == (int)$score_2){
		$query_update = $db->query("SELECT * FROM teams WHERE name='$team_1'");
		$urow = $query_update->fetch_row();
		
		$point = (int)$urow[3];
		$point += 1;
		$draw = (int)$urow[5];
		$draw += 1;
		$goals = (int)$urow[7];
		$goals += $score_1;
		$db->query("UPDATE teams SET points='$point', d='$draw', gs='$goals' WHERE name='$team_1'");
		
		$query_update = $db->query("SELECT * FROM teams WHERE name='$team_2'");
		$urow = $query_update->fetch_row();
		
		$point = (int)$urow[3];
		$point += 1;
		$draw = $urow[5];
		$draw += 1;
		$goals = (int)$urow[7];
		$goals += $score_2;
		$db->query("UPDATE teams SET points='$point', d='$draw', gs='$goals' WHERE name='$team_2'");
	}
}

?>
<!DOCTYPE html>
<html>

<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: url('../includes/img/20171130_lax_stadium_01.jpg');">
	<div class="col-8 col-offset-2 " style="margin-top: 80px;color: #eee;border: 1px solid #333; border-radius:10px; background:#333;background: rgba(54, 25, 25, .6); opacity:0.3 0 0; padding: 30px;">
		<h1 align="center">Add Report</h1>
	<?php
		echo $error;
		$query_teams = $db->query("SELECT * FROM teams");
		echo "<form action='' method='POST'>
				<table style='text-align:center;margin-left:180px'>
				<tr>
				<td><select name='team1' class='form-control'>
				<option value=''>Select First Team</option>";
		while($row = $query_teams->fetch_row()){
			echo "<option value='".$row[1]."'>".$row[1]."</option>";
		}
	echo			"</select>
				</td><td>VS</td><td><select name='team2' class='form-control'>
				<option value=''>Select Second Team</option>";
		$query_teams = $db->query("SELECT * FROM teams");
		while($row = $query_teams->fetch_row()){
			echo "<option value='".$row[1]."'>".$row[1]."</option>";
		}
		echo		"</select></td>
				</tr>
				<tr>
				<td><input type='text' name='score_1' id='smallTextBox'></td><td>Scores</td><td><input type='text' name='score_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td><input type='text' name='possession_1' id='smallTextBox'></td><td>Possession %</td><td><input type='text' name='possession_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td><input type='text' name='fouls_1' id='smallTextBox'></td><td>Fouls Committed</td><td><input type='text' name='fouls_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td><input type='text' name='corners_1' id='smallTextBox'></td><td>Corners Taken</td><td><input type='text' name='corners_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td><input type='text' name='kicks_1' id='smallTextBox'></td><td>Free Kicks Taken</td><td><input type='text' name='kicks_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td><input type='text' name='yellows_1' id='smallTextBox'></td><td>Yellow Cards</td><td><input type='text' name='yellows_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td><input type='text' name='reds_1' id='smallTextBox'></td><td>Red Cards</td><td><input type='text' name='reds_2' id='smallTextBox'></td>
				</tr>
				<tr>
				<td></td><td><input type='submit' value='Post'></td><td></td>
				</tr>
				</table>
				</form>";

	?>
</div>
</body>
</html>