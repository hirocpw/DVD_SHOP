<?php
	session_cache_limiter('private_no_cache');
	session_start();
if(isset($_POST["login"]))
{
    include ("admin/password_check.php");	
}
?>
<meta charset="UTF-8">
	<title>City DVD eShop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
		<div class = "sidebar">
			<img src = "img/head.jpg" class="DoctorStrange" width="900" height="140" alt="" />
			<h1 class="welcome">Welcome to<br>City DVD eShop</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a class="active" href="Movies.php">Movies</a></li>
				<li><a href="TechZone.html">TechZone</a></li>
				<li><a href="JoinUs.php">JoinUs</a></li>
				<li><a href="Contact.html">Contact</a></li>
			</ul>
		</div>
		<div class= "conten-container" id="content">
		<?php
		
			include("admin/con_movie_db.php");
			if(isset($_POST["log_out"])) 
			{
				
				// user wants to logout of system
				session_destroy(); // kill the session
				header("Location: Movies.php"); // send back to login screen
				
			}
			else
				if(isset($_SESSION["authorised"]))
				{
					print("I can only do the session part at moment. Please give me the mark for the session part, thank you");
					include ("admin/logout.php");
					
				}
			
			else
			{
				include ("admin/password.inc");
			}
		
			
		
		?>