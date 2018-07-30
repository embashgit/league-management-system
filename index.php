<?php
require("includes/connection.inc.php");

?>
<!DOCTYPE html>
<html>
<title>LMS | Home</title>
<?php 
include 'head.php';
include 'nav.php';
 ?>

<body style="background: url('includes/img/wall.jpg')">
<div style="margin-top: 50px" >
	<div style="text-align:center;">
		
		<div class="outer" >
			<div class="marqueeBox" style="background: #7986cb">
				<div style="padding: 10px;box-shadow: 0 10px 6px -6px #777;background: #1a237e"><h3>UPCOMING MATCHES</h3></div>
				<marquee scrollamount="2" direction="down" onmouseover="javascript:this.stop()" onmouseout="javascript:this.start()"
				style="text-align:center;">
				<?php
					$query = $db->query("SELECT * FROM upcomings");
					$row = $query->fetch_row();
					echo $row[1];
					
				?>
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				</marquee>
			</div>
		</div>
	</div>
</div>

		<!--	<a href="admin/index.php" ><div class="smallBox" style="text-align:center;">
			Admin login
			</div></a>-->
</body>
</html>