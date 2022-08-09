<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login
		
	</title>
	
	<link rel="stylesheet" type="text/css"
			href="assets/css/newstyle1.css">
</head>
<body style="background-image:url('assets/images/loginback2.jpg');  height: 100%; background-size:cover; overflow-x:hidden;  background-position: center; padding-right:190px;">
<div class = "main">

	<form method="post" action="login1.php" style="background:transparent;  box-shadow: 0 0 5px 0;  backdrop-filter: blur(20px);">

		<?php include('error.php'); ?>
		<div><img src="assets/images/logo1.png"  style="height:30px; width: 20px:"><h2 style="color:white;"> </div>

		<div class="input-group">
			<label style="color:white;">Enter Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label style="color:white;">Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" class="btn"
						name="login_user" style="width:150px; background:purple;">
				Login
			</button>
		</div>
		
<p style="color:white;">
			Don't have an account ?
			<a href="signup.php">
				 Regsiter Now!<br>
				 <a href ="landingpage.php">
				 Go To Homepage
				 </a>
			</a>
		</p>

	</form>
	
	</div>
</body>

</html>
