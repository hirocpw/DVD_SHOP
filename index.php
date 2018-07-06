<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>City DVD eShop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<script type = "text/javascript" src = "js/slide.js"></script>
</head>
<body onload = "showSlides(slideIndex)"><!--onload, call the slideshow function in javascript-->
		<!--Side bar, for Navigation-->
		<div class = "sidebar">
			<img src = "img/head.jpg" class="DoctorStrange" width="900" height="140" alt="" />
			<h1 class="welcome">Welcome to<br>City DVD eShop</h1>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="Movies.php">Movies</a></li>
				<li><a href="TechZone.html">TechZone</a></li>
				<li><a href="JoinUs.php">JoinUs</a></li>
				<li><a href="Contact.html">Contact</a></li>
			</ul>
		</div>
		<!--content-container-->
		<div class= "conten-container">
				<h1 class = "title">The City DVD Shop</h1>
				<h2 class = "title">About Us</h2>
				<!--slide show-->
				<div class= "photo1">
					<img class = "shopphoto" src="img/dvdshop1.jpg" alt=""  >
					<img class = "shopphoto" src="img/dvdshop2.jpg" alt=""  >
					<img class = "shopphoto" src="img/dvdshop3.jpg" alt=""  >
					<img class = "shopphoto" src="img/dvd1.jpg" alt=""  >
					<img class = "shopphoto" src="img/dvd3.jpg" alt=""  >
					<img class = "shopphoto" src="img/dvd2.jpg" alt=""  >

				<a class="prev" onclick="plusSlides(-1)">❮</a>
				<a class="next" onclick="plusSlides(1)">❯</a>
				</div>
				<!--content-->
				<div id = "introduction">
						<p> The City DVD shop the biggest DVD retailor in Sydney. We are known for high quality product and great customer services. 
							We are enthusiastic to provide the best movies for our customers.</p>
						<p> We are offering thousands of DVDs of the finest movies and TV series, in addition, we sell CDs as well, from pop music to classic, Lady Gaga to Norah Jones, we’ve got them all!
							Furthermore, if you feel would like watch your favorite movie in a private quite place, our new exclusive VIP private cinema is just a right place for you! The cinema is installed with the latest sound and picture technology, we promise that it will give you a real and enjoyable feeling! Also, the cinema provides four seats, so bring your family or your friends! Free drinks for the first time joining member!
						</p>
						<p>Feel like want to join us? Click the “Join us” button on the left and let’s have fun together!..</p>
				</div>
				<?php
					include ("admin/con_movie_db.php");
								$query = "SELECT *
										FROM movie_detail_view
										WHERE year > 2010";
							$result = mysqli_query($db, $query)
											or die ("Error - query could not be executed - Error 1\n"); 
							$num_rows = mysqli_num_rows($result);

					$row = mysqli_fetch_assoc($result);

					$random_num = rand(1, $num_rows);
	
					for($i = 1; $i <=$num_rows; $i++) 
					{
						if ($i == $random_num)
					{
						echo "<fieldset id = front>";
				
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
					$row = mysqli_fetch_assoc($result);
					}
					
?>
				
		</div>


		
       <div id ="footer">
       <a href="http://infotech.scu.edu.au/~pchen12" target="_blank">http://infotech.scu.edu.au/~pchen12</a><br>
       Copyright Pengwei Chen &copy; 2016
       
       </div>



</body>
</html>
