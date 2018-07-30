<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

if(!isset($_GET['id'])){
	header("Location: index.php");
}

$id = $_GET['id'];

require("../includes/connection.inc.php");

?>
<!DOCTYPE html>
<html>
<title>Report | Administrator Dashboard</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body>
	
	<br />
	<?php
		$query = $db->query("SELECT * FROM match_reports WHERE id='$id'");
		$row = $query->fetch_row();
		
		echo "<table border='1' style='text-align:center;'>
				<tr>
				<th>".$row[1]."</th><th>Vs</th><th>".$row[2]."</th>
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
</body>
</html>