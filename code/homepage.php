<?php
	session_start();
	require_once('dbconfig/config.php');
	//phpinfo();
?>
<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<style>
body {
	margin: 0;
	padding: 0;
    background: url("https://mj1390.files.wordpress.com/2015/11/diciembre-2015.jpg?w=705&h=435&crop=1");
	background-size: cover;
	background-position: center;
    background-repeat: no-repeat;
}
</style>
<body>
	<div id="main-wrapper">
		<center><h2>Home Page</h2></center>
		<center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
		
		<form action="index.php" method="post">
			<div class="imgcontainer">
				<img src="imgs/avatar.png" alt="Avatar" class="avatar">
			</div>
			<div class="inner_container">
				<button class="logout_button" type="submit">Log Out</button>	
				<a href="events.php">
					<button class="logout_button" type="button">EVENTS</button></a>
                <a href="eventsregistered.php">
					<button class="logout_button" type="button">EVENTSREGISTERED</button></a>
			</div>
		</form>
	</div>
</body>
</html>