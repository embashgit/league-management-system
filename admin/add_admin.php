<?php
session_start();

if(!$_SESSION['logged']){
	header("Location: login.php");
}

require("../includes/connection.inc.php");
$username= $password= $retype= $error= "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$retype = $_POST['retype'];
	
	if($password != $retype){
		$error = "<span style='color:red'>Error: password and re-typed password do not match</span>";
	}else{
		$password = sha1($password);
		$check_admin = $db->query("SELECT * FROM admins WHERE username = '$username' && password='$password'");
		$query = $db->query("SELECT * FROM admins");
		if(mysqli_num_rows($query) >= 3 || mysqli_num_rows($check_admin)>1){
			$error = "<span style='color:red'>Sorry Number of Administrator Exceeded</span>";
		}
		else{

			$db->query("INSERT INTO admins(username, password) VALUES('$username','$password')");
			$error = "<span style='color:green'>Administrator added successfully</span>";
		}
	}
	
}

?>
<!DOCTYPE html>
<html>
<title>LMS | Administrator</title>
<?php 
	include 'head.php';
	include 'nav.php';
 ?>
<body style="background: url('../includes/img/wall.jpg'); color: white">
		
	<div style="margin-top: 80px;margin-left: 80px" class=" col-6">
		<h2>Add New Administrator</h2>
		<?php echo $error; ?>
		<div class="container">
	<div  class="col-8 ">
	<form action="" method="POST">
	 <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
    
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="password">Re-type Password</label>
    <input type="password" class="form-control" name="retype" id="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">ADD ADMIN</button>
	</form>

</div>
</div><!--container-->
	
</div>
<div style="margin-top: 80px"><img src="../includes/img/kisspng-zinedine-zidane-real-madrid-c-f-coach-football-pl-zidan-5b0a6d1f52b8a3.1315878215274099513388.png" height="600" width="400"></div>
</body>

</html>