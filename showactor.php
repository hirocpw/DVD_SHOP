<!DOCTYPE html>
<html>
<head>
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
            
			if(isset($_POST["submit"]))
			{
			$query = "SELECT *
					  FROM actor, director, genre, movie, movie_actor, studio
					  WHERE movie_actor.movie_id = movie.movie_id
					  AND movie_actor.actor_id = actor.actor_id
					  AND director.director_id = movie.director_id
					  AND studio.studio_id = movie.studio_id
					  AND genre.genre_id = movie.genre_id
					  AND actor.actor_id = ".$_POST["actor_name"];
			
			$result = mysqli_query($db, $query)
			or die ("Error - query could not be executed - Error 1\n");
			echo "<h2>Shearch result</h2>";
			while($row = mysqli_fetch_assoc($result))
			{
				echo "<fieldset id = movies>";
				echo "<legend>" .$row['title'] . "</legend>";
				echo "<img src='img/".$row['thumbpath']."' height='200' width='150'/><br>";
				echo "<b>Year: </b>" . $row['year'] . "<br><br>"; 
				echo "<b>Director: </b>" .$row['director_name']. "<br><br>";
				echo "<b>Genre: </b>" .$row['genre_name']. "<br><br>";
				echo "<b>Starring: </b>" .$row['role'] . "," . $row['actor_name'] . "," . $row['star2'] ."," . 
				$row['actor_name'] . "," . $row['actor_name'] . "," . $row['actor_name']. "<br><br>";
				echo "<b>Studio: </b>" . $row['studio_name']. "<br><br>";
				echo $row['plot']. "<br><br>";
				echo "<b>DVD: </b>". "Rental: " . $row['DVD_rental_price'] . "<br>Purchase: " . $row['DVD_purchase_price']. "<br><br>" ;
				echo "<b>BluRay: </b>". "Rental: " . $row['BluRay_rental_price'] . "<br>Purchase: " . $row['BluRay_purchase_price']. "<br><br>";
				echo "<b>Availability: </b><br>" . $row['numDVD'] . "(DVD)   " . $row['numBluRay'] ."(BlueRay)";
				echo "</fieldset>";
			}
			}
			print("<form class = \"search\" method = \"post\" action = \"showactor.php \">");
			

			$actor_query = "SELECT * 
							FROM actor ORDER BY actor_name ASC";
			$result0 = mysqli_query($db,$actor_query);
			$num_rows_actor = mysqli_num_rows($result0);
			$row0 = mysqli_fetch_row($result0);
			
			print("<select name=\"actor_name\">\n");
			for($i = 0; $i <$num_rows_actor; $i++) 
			{       
				print ("<option value = " .$row0[0]. ">".$row0[1]. "</option>\n");
				$row0 = mysqli_fetch_row($result0);
			}
			print("</select>");              
			print("<input type=submit name=submit value=search />\n");
			print ("</form>\n");
			?>
		</div>
   </body>
</html>