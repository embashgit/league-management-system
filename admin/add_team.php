<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");
$team_name= $team_coach= $error = "";

$players = array();

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$team_name = $_POST['team'];
	$team_coach = $_POST['coach'];
	$check_team = $db->query("select * from `teams` where name='$team_name' AND coach='$team_coach' ");

	if (mysqli_num_rows($check_team) > 0) {
		$error = "<span style='color:red'>Sorry! team already exist</span>";
	}else{
		
		$db->query("INSERT INTO teams(name, coach) VALUES ('$team_name','$team_coach')");
		
		if(!empty($_POST['player_1']) && !empty($_POST['position_1'])){
			$players[0] = $_POST['player_1'];
			$players[1] = $_POST['position_1'];
			$players[2] = $_POST['age_1'];
			$players[3] = $_POST['lga_1'];
			$players[4] = $_POST['state_1'];
			$players[5] = $_POST['session_1'];
		}
		if(!empty($_POST['player_2']) && !empty($_POST['position_2'])){
			$players[6] = $_POST['player_2'];
			$players[7] = $_POST['position_2'];
			$players[8] = $_POST['age_2'];
			$players[9] = $_POST['lga_2'];
			$players[10] = $_POST['state_2'];
			$players[11] = $_POST['session_2'];
		}
		if(!empty($_POST['player_3']) && !empty($_POST['position_3'])){
			$players[12] = $_POST['player_3'];
			$players[13] = $_POST['position_3'];
			$players[14] = $_POST['age_3'];
			$players[15] = $_POST['lga_3'];
			$players[16] = $_POST['state_3'];
			$players[17] = $_POST['session_3'];
		}
		if(!empty($_POST['player_4']) && !empty($_POST['position_4'])){
			$players[18] = $_POST['player_4'];
			$players[19] = $_POST['position_4'];
			$players[20] = $_POST['age_4'];
			$players[21] = $_POST['lga_4'];
			$players[22] = $_POST['state_4'];
			$players[23] = $_POST['session_4'];
		}
		if(!empty($_POST['player_5']) && !empty($_POST['position_5'])){
			$players[24] = $_POST['player_5'];
			$players[25] = $_POST['position_5'];
			$players[26] = $_POST['age_5'];
			$players[27] = $_POST['lga_5'];
			$players[28] = $_POST['state_5'];
			$players[29] = $_POST['session_5'];
		}
		if(!empty($_POST['player_6']) && !empty($_POST['position_6'])){
			$players[30] = $_POST['player_6'];
			$players[31] = $_POST['position_6'];
			$players[32] = $_POST['age_6'];
			$players[33] = $_POST['lga_6'];
			$players[34] = $_POST['state_6'];
			$players[35] = $_POST['session_6'];
		}
		if(!empty($_POST['player_7']) && !empty($_POST['position_7'])){
			$players[36] = $_POST['player_7'];
			$players[37] = $_POST['position_7'];
			$players[38] = $_POST['age_7'];
			$players[39] = $_POST['lga_7'];
			$players[40] = $_POST['state_7'];
			$players[41] = $_POST['session_7'];
		}
		if(!empty($_POST['player_8']) && !empty($_POST['position_8'])){
			$players[42] = $_POST['player_8'];
			$players[43] = $_POST['position_8'];
			$players[44] = $_POST['age_8'];
			$players[45] = $_POST['lga_8'];
			$players[46] = $_POST['state_8'];
			$players[47] = $_POST['session_8'];
		}
		if(!empty($_POST['player_9']) && !empty($_POST['position_9'])){
			$players[48] = $_POST['player_9'];
			$players[49] = $_POST['position_9'];
			$players[50] = $_POST['age_9'];
			$players[51] = $_POST['lga_9'];
			$players[52] = $_POST['state_9'];
			$players[53] = $_POST['session_9'];
		}
		if(!empty($_POST['player_10']) && !empty($_POST['position_10'])){
			$players[54] = $_POST['player_10'];
			$players[55] = $_POST['position_10'];
			$players[56] = $_POST['age_10'];
			$players[57] = $_POST['lga_10'];
			$players[58] = $_POST['state_10'];
			$players[59] = $_POST['session_10'];
		}
		if(!empty($_POST['player_11']) && !empty($_POST['position_11'])){
			$players[60] = $_POST['player_11'];
			$players[61] = $_POST['position_11'];
			$players[62] = $_POST['age_11'];
			$players[63] = $_POST['lga_11'];
			$players[64] = $_POST['state_11'];
			$players[65] = $_POST['session_11'];
		}
		if(!empty($_POST['player_12']) && !empty($_POST['position_12'])){
			$players[66] = $_POST['player_12'];
			$players[67] = $_POST['position_12'];
			$players[68] = $_POST['age_12'];
			$players[69] = $_POST['lga_12'];
			$players[70] = $_POST['state_12'];
			$players[71] = $_POST['session_12'];
		}
		if(!empty($_POST['player_13']) && !empty($_POST['position_13'])){
			$players[72] = $_POST['player_13'];
			$players[73] = $_POST['position_13'];
			$players[74] = $_POST['age_13'];
			$players[75] = $_POST['lga_13'];
			$players[76] = $_POST['state_13'];
			$players[77] = $_POST['session_13'];
		}
		if(!empty($_POST['player_14']) && !empty($_POST['position_14'])){
			$players[78] = $_POST['player_14'];
			$players[79] = $_POST['position_14'];
			$players[80] = $_POST['age_14'];
			$players[81] = $_POST['lga_14'];
			$players[82] = $_POST['state_14'];
			$players[83] = $_POST['session_14'];
		}
		if(!empty($_POST['player_15']) && !empty($_POST['position_15'])){
			$players[84] = $_POST['player_15'];
			$players[85] = $_POST['position_15'];
			$players[86] = $_POST['age_15'];
			$players[87] = $_POST['lga_15'];
			$players[88] = $_POST['state_15'];
			$players[89] = $_POST['session_15'];
		}
		if(!empty($_POST['player_16']) && !empty($_POST['position_16'])){
			$players[90] = $_POST['player_16'];
			$players[91] = $_POST['position_16'];
			$players[92] = $_POST['age_16'];
			$players[93] = $_POST['lga_16'];
			$players[94] = $_POST['state_16'];
			$players[95] = $_POST['session_16'];
		}
		if(!empty($_POST['player_17']) && !empty($_POST['position_17'])){
			$players[96] = $_POST['player_17'];
			$players[97] = $_POST['position_17'];
			$players[98] = $_POST['age_17'];
			$players[99] = $_POST['lga_17'];
			$players[100] = $_POST['state_17'];
			$players[101] = $_POST['session_17'];
		}
		if(!empty($_POST['player_18']) && !empty($_POST['position_18'])){
			$players[102] = $_POST['player_18'];
			$players[103] = $_POST['position_18'];
			$players[104] = $_POST['age_18'];
			$players[105] = $_POST['lga_18'];
			$players[106] = $_POST['state_18'];
			$players[107] = $_POST['session_18'];
		}
		
		addPlayers($players, $_POST['team']);
	}

}


?>
<style type="text/css">
	input{
		 display: block;
  width: 100%;
  height: 38px;
  padding: 8px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  vertical-align: middle;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
          box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
          transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
	}
</style>
<!DOCTYPE html>
<html>
<title>add team|Administrator Dashboard</title>
<?php
	include 'head.php';
	include 'nav.php';
?>
<body style="background: #8c9eff;color: #333">
	<div class="container">
	<h2 style="margin-top: 70px">Add New Team</h2>
	<hr> 
	<?php echo $error; ?>
	<div>
		<form action="" method="POST">
		<table>
		<tr>
		<td>Team Name</td><td><input class="form-control" type="text" name="team"></td>
		</tr>
		<tr>
		<td>Team Coach</td><td><input class="form-control" type="text" name="coach"></td>
		</tr>
		</table>
		<h3>Players</h3>
		<table>
			<tr>
			<th></th><th>Player Name</th><th>Position</th><th>Age</th><th>L.G.A</th><th>State</th><th>Session</th>
			</tr>
			<tr>
			<td>1</td><td><input type="text" name="player_1"></td><td><select name="position_1">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_1">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_1">
			</td><td><input type="text" name="state_1"></td><td><input type="text" name="session_1"></td>
			</tr>
			<tr>
			<td>2</td><td><input type="text" name="player_2"></td><td><select name="position_2">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_2">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_2">
			</td><td><input type="text" name="state_2"></td><td><input type="text" name="session_2"></td>
			</tr>
			<tr>
			<td>3</td><td><input type="text" name="player_3"></td><td><select name="position_3">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_3">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_3">
			</td><td><input type="text" name="state_3"></td><td><input type="text" name="session_3"></td>
			</tr>
			<tr>
			<td>4</td><td><input type="text" name="player_4"></td><td><select name="position_4">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			<td><select name="age_4">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_4">
			</td><td><input type="text" name="state_4"></td><td><input type="text" name="session_4"></td>
			</tr>
			<tr>
			<td>5</td><td><input type="text" name="player_5"></td><td><select name="position_5">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_5">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_5">
			</td><td><input type="text" name="state_5"></td><td><input type="text" name="session_5"></td>
			</tr>
			<tr>
			<td>6</td><td><input type="text" name="player_6"></td><td><select name="position_6">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_6">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_6">
			</td><td><input type="text" name="state_6"></td><td><input type="text" name="session_6"></td>
			</tr>
			<tr>
			<td>7</td><td><input type="text" name="player_7"></td><td><select name="position_7">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_7">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_7">
			</td><td><input type="text" name="state_7"></td><td><input type="text" name="session_7"></td>
			</tr>
			<tr>
			<td>8</td><td><input type="text" name="player_8"></td><td><select name="position_8">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_8">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_8">
			</td><td><input type="text" name="state_8"></td><td><input type="text" name="session_8"></td>
			</tr>
			<tr>
			<td>9</td><td><input type="text" name="player_9"></td><td><select name="position_9">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_9">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_9">
			</td><td><input type="text" name="state_9"></td><td><input type="text" name="session_9"></td>
			</tr>
			<tr>
			<td>10</td><td><input type="text" name="player_10"></td><td><select name="position_10">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_10">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_10">
			</td><td><input type="text" name="state_10"></td><td><input type="text" name="session_10"></td>
			</tr>
			<tr>
			<td>11</td><td><input type="text" name="player_11"></td><td><select name="position_11">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_11">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_11">
			</td><td><input type="text" name="state_11"></td><td><input type="text" name="session_11"></td>
			</tr>
			<tr>
			<td>12</td><td><input type="text" name="player_12"></td><td><select name="position_12">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_12">
			<option value="">Age</option>
				<?php for ($i=17; $i <=33 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			</td><td><input type="text" name="lga_12">
			</td><td><input type="text" name="state_12"></td><td><input type="text" name="session_12"></td>
			</tr>
			<tr>
			<td>13</td><td><input type="text" name="player_13"></td><td><select name="position_13">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_13">
				<option value="">Age</option>
				<?php for ($i=17; $i <=33 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			</td><td><input type="text" name="lga_13">
			</td><td><input type="text" name="state_13"></td><td><input type="text" name="session_13"></td>
			</tr>
			<tr>
			<td>14</td><td><input type="text" name="player_14"></td><td><select name="position_14">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_14">
			<option value="">Age</option>
				<?php for ($i=17; $i <=33 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			</td><td><input type="text" name="lga_14">
			</td><td><input type="text" name="state_14"></td><td><input type="text" name="session_14"></td>
			</tr>
			<tr>
			<td>15</td><td><input type="text" name="player_15"></td><td><select name="position_15">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_15">
				<option value="">Age</option>
				<?php for ($i=17; $i <=33 ; $i++) { ?>
				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
				<?php } ?>
			</select>
			</td><td><input type="text" name="lga_15">
			</td><td><input type="text" name="state_15"></td><td><input type="text" name="session_15"></td>
			</tr>
			<tr>
			<td>16</td><td><input type="text" name="player_16"></td><td><select name="position_16">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_16">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_16">
			</td><td><input type="text" name="state_16"></td><td><input type="text" name="session_16"></td>
			</tr>
			<td>17</td><td><input type="text" name="player_17"></td><td><select name="position_17">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_17">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_17">
			</td><td><input type="text" name="state_17"></td><td><input type="text" name="session_17"></td>
			</tr>
			<td>18</td><td><input type="text" name="player_18"></td><td><select name="position_18">
			<option value="">Select Position</option>
			<option value="Forward">Forward</option>
			<option value="Midfielder">Midfielder</option>
			<option value="Defender">Defender</option>
			<option value="Goalkeeper">Goalkeeper</option>
			<option value="Attacking Midfielder">Attacking Midfielder</option>
			<option value="Defensive Midfielder">Defensive Midfielder</option>
			<option value="Center Back">Center Back</option>
			<option value="Left Back">Left Back</option>
			<option value="Right Back">Right Back</option>
			<option value="Center Forward">Center Forward</option>
			<option value="Left Forward">Left Forward</option>
			<option value="Right Forward">Right Forward</option>
			</select>
			</td>
			<td><select name="age_18">
			<option value="">Age</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			<option value="32">32</option>
			<option value="33">33</option>
			</select>
			</td><td><input type="text" name="lga_18">
			</td><td><input type="text" name="state_18"></td><td><input type="text" name="session_18"></td>
			</tr>
		</table>
		
		<button type="submit"  class="btn btn-lg" style="margin-left: 40px;background: #1a237e; color: white;padding: 10px">SAVE TEAM</button>
		</form>
	</div>
</div>
</body>
</html>