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
			echo "<h2>All Movies</h2>";
			include("admin/con_movie_db.php");
			$query = "SELECT thumbpath,plot, title,genre, year, director, star1, star2, star3, costar1, costar2, costar3, studio, DVD_rental_price,
					  DVD_purchase_price, BluRay_rental_price, BluRay_purchase_price, numDVD, numBluRay
					  FROM movie_detail_view";
					  
			$result = mysqli_query($db, $query); 
			$num_rows = mysqli_num_rows($result);
			
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
		?>
		</div>
</body>
</html>