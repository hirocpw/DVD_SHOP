<?php
   if(isset($_POST["authorised"]))// This is signal to write cookie
   {  
       if($_POST["user"] != "" && $_POST["passwd"] == "webdev2")
		{
			// cookies for 1 hour
			setcookie( "user", $_POST["user"], time() + 60 * 60 );
			setcookie( "passwd", $_POST["passwd"], time() + 60 * 60 );
		}
	    // if cookies have been set - need to reload page - so they can be read
	    header("Location: admin_movie.php"); 
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
			if(isset($_POST["which_form"]))
			{
				include("admin/con_movie_db.php");
				
				switch ($_POST["choice"])
				{
						case "enter_new": include("admin/insert_movie_form.php");
						break;
						case "delete_edit_movie": include("admin/choose_movie.php");
						break;
						case "edit_movie_db": include("admin/edit_movie_form.php");
						break;
						case "delete_edit_member": include("admin/choose_member.php");
						break;
						case "edit_member_db": include("admin/edit_member_form.php");
						break;
						case "log_out" : 
						print ("Log out Done!");
						break;
						default: print("<center><h1>Some Error has occured</h1></center>");			
				}
			}
			
			else
				if(isset($_POST["db_action"]))
				{	
					include("admin/con_movie_db.php");
					
					switch ($_POST["action"])
					{
							case "update_movie": include("admin/update_movie_db.php");
							break;
							case "insert_movie": include("admin/inster_movie_db.php");
							break;
							case "update_member": include("admin/update_member_db.php");
							break;
							default: print("<center><h1>Some Error has occured!</h1></center>");	
					}
			
			
				}
			else	
				if (isset($_COOKIE["user"]))
				{
					// call menu form to choose what to do.
					include ("admin/menu.php");
				}
				else
				{ 
					// get password 
					include("admin/login.inc");   
				} 
	?>
</div>
</body>
</html>