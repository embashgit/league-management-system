
<nav class="navbar navbar-inverse navbar-fixed-top " id="trans"><!--header-->
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-target="#topNavBar" data-toggle="collapse" type="button">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">League M.S</a>
		</div>
		
		<div class="nav-collapse collapse navbar-responsive-collapse" id="topNavBar">

			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Admin</a>
				</li>
				<li>
					<a href="../table.php">Table</a>
				</li>
				<li>
					<a href="../fixtures.php">Fixtures</a>
				</li>
				<li>
					<a href="../results.php">Result</a>
				</li>
				
				

			</ul>			
			
			<ul  class="nav navbar-nav pull-right">

				<?php if(isset($_SESSION['logged'])): ?>	   
					<li><a href="logout.php" <span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
					<li><a href="#" <span class="glyphicon glyphicon-user"> </span> <?php echo $_SESSION['username']; ?></a></li>
				<?php else: ?>	
					<li><a href="index.php"<span class="glyphicon glyphicon-user"></span> Admin User</a></li>
					<li><a href="add_admin.php"><span class="glyphicon glyphicon-log-in "></span> Create an account</a></li>
				<?php endif ?>
			</ul>
						
		</div>	
	</div>
</nav>