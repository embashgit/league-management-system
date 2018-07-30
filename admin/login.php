<?php
session_start();
require("../includes/connection.inc.php");
$username= $password= $error= "";

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password = sha1($password);
	
	$query = $db->query("SELECT * FROM admins WHERE username='$username' AND password='$password'");
	
	if($query->num_rows == 1){
		$_SESSION['logged'] = true;
		$_SESSION['username'] = $username;
		header("Location: index.php");
	}else{
		$error = "<span style='color:red'>Error: incorrext username or password</span>";
	}
	
}

?>
<!DOCTYPE html>
<html>
<title>Login | Administrator Dashboard</title>
<?php
include 'head.php';
include 'nav.php';
?>
<body style="background: url('../includes/img/20171130_lax_stadium_01.jpg');">

	
	<?php echo $error; ?>
	<div class="col-4 col-offset-4" style="margin-top: 80px;color: #eee;border: 1px solid #333; border-radius:10px; background:#333;background: rgba(54, 25, 25, .6); opacity:0.3 0 0; padding: 30px;">
		<h2 style="margin-top: 0px" align="center">Login</h2>
		<form action="" class="form-horizontal" method="POST">
	<div class="form-group">
		<label class="form-label">Username</label>
		<input class="form-control" type="text" name="username">	
	</div>
	<div class="form-group">
		<label class="form-label">Password</label>
		<input class="form-control" type="password" name="password">
	</div>
	
	<div><input type="submit" class="btn btn-lg btn-block btn-success" value="LOGIN"></div>
	</form>	
	</div>
	
</body>
</html>
