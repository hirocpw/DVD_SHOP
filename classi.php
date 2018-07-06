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
			$class = mysqli_real_escape_string($db,$_POST['classification']);
			$query = "SELECT *
					  FROM movie_detail_view
					  WHERE classification ='$class'";
			
			
			$result = mysqli_query($db, $query)
			or die ("Error - query could not be executed - Error 1\n");
			echo "<h2>Shearch result</h2>";
			while($row = mysqli_fetch_assoc($result))
				$rows[] = $row;
			foreach ($rows as $row)
			{
				echo "<fieldset id = movies>";
				
				echo "<legend>" .$row['title'] . "</legend>";
				echo "<img src='img/".$row['thumbpath']."' height='200' width='150'/><br>";
				echo "<b>Year: </b>" . $row['year'] . "<br><br>"; 
				echo "<b>Director: </b>" .$row['director']. "<br><br>";
				echo "<b>Genre: </b>" .$row['genre']. "<br><br>";
				echo "<b>Starring: </b>" .$row['star1'] . "," . $row['star2'] . "," . $row['star3'] ."," . 
				$row['costar1'] . "," . $row['costar2'] . "," . $row['costar3']. "<br><br>";
				echo "<b>Studio: </b>" . $row['studio']. "<br><br>";
				echo $row['plot']. "<br><br>";
				echo "<b>DVD: </b>". "Rental: " . $row['DVD_rental_price'] . "<br>Purchase: " . $row['DVD_purchase_price']. "<br><br>" ;
				echo "<b>BluRay: </b>". "Rental: " . $row['BluRay_rental_price'] . "<br>Purchase: " . $row['BluRay_purchase_price']. "<br><br>";
				echo "<b>Availability: </b><br>" . $row['numDVD'] . "(DVD)   " . $row['numBluRay'] ."(BlueRay)";
				echo "</fieldset>";
			}
			}
			print("<form class = \"search\" method = \"post\" action = \"classi.php \">");
			

			print("<select name=\"classification\">\n");
			print ("<option value = 'G'>G</option>\n");
			print ("<option value = 'M'>M</option>\n");
			print ("<option value = 'MA'>MA</option>\n");
			print ("<option value = 'PG'>PG</option>\n");
			print ("<option value = 'R'>R</option>\n");
			print("</select>");              
			print("<input type=submit name=submit value=search />\n");
			print ("</form>\n");
			
			?>
		</div>
   </body>
</html>