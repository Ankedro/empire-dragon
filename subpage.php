<?php include('configuration-status.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<title>CoastTheme | Minecraft Server Website</title>
		<meta http-equiv="content-type" content="text/html" />
		<meta charset="utf-8">
		<meta name="description" content="your description">
		<meta name="keyworlds" content="">
		
		<link rel="stylesheet" href="css/default.css" type="text/css" media="screen">		
	</head>
	
<body>
	<div class="container">
			<div class="navbar">
				<a href="index.php">Home</a>
				<a href="subpage.php">Forum</a>
				<a href="subpage.php">Shop</a>
				<a href="team.php">Team</a>
				<a href="subpage.php">Contact</a>
			</div>
			<div class="right">
				<?php include('server-status.php'); ?>
				<!-- Server status by https://github.com/FunnyItsElmo/PHP-Minecraft-Server-Status-Query/ -->
				<div class="right-box">
					<h2>Team</h2>
					<p>
					Owner:<br>
					Admins:<br>
					Moderators:<br>
					</p>
				</div>
			</div>
		
		<div class="subpage">
			<h1>Subpage</h1>
			
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
			
		</div>
	</div>
	<div class="footer">
		<p>Created by <a href="http://ziomeks.cf/">Ziomeks.cf</a></p>
	</div>

</body>
</html>