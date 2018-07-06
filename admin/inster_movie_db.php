<?php
$title = $_POST["title"];
$year = $_POST["year"];
$tag_line = $_POST["tag_line"];
$plot = $_POST["plot"];
$director_name = $_POST["director_name"];
$director_name_new = $_POST["director_name_new"];
$studio = $_POST["studio_name"];
$studio_name_new = $_POST["studio_name_new"];
$genre = $_POST["genre_name"];
$classification = $_POST["classification"];
$url = $_POST["img"];

$rental_time = $_POST["rental_period"];

$dvd_stock = $_POST["dvd_stock"];
$dvd_rent_price = $_POST["dvd_rent_price"];
$dvd_buy_price = $_POST["dvd_buy_price"];
$dvd_out = $_POST["dvd_out"];

$blue_stock = $_POST["blue_stock"];
$blue_rent_price = $_POST["blue_rent_price"];
$blue_buy_price = $_POST["blue_buy_price"];
$blue_out = $_POST["blue_out"];


print ("<center>");
if ($title == "")
    print ("<h3>You have not entered a title for the new movie.</h3>Use the back button on your browser to fix this oversight.");
else
  if(!is_numeric($year))
     print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
else
  if($tag_line == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if($plot == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if(!is_numeric($dvd_stock))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
  else
  if(!is_numeric($dvd_rent_price))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if(!is_numeric($dvd_buy_price))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
  else
  if(!is_numeric($blue_stock))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
  else
  if(!is_numeric($blue_rent_price))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
  else
  if(!is_numeric($blue_buy_price))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
   else
  if(!is_numeric($dvd_out))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
   else
  if(!is_numeric($blue_out))
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
	{
		$sql_insert = "INSERT INTO movie (title,tagline,plot,thumbpath,director_id,studio_id,genre_id,
						classification,rental_period,year,numDVD,DVD_rental_price,DVD_purchase_price,
						numBluRay,BluRay_rental_price,BluRay_purchase_price,numDVDout,numBluRayOut)
						VALUES (\"$title\",\"$tag_line\",\"$plot\",\"$url\",\"$director_name\",\"$studio\",\"$genre\",\"$classification\",
						\"$rental_time\",\"$year\",\"$dvd_stock\",\"$dvd_rent_price\",\"$dvd_buy_price\",\"$blue_stock\",\"$blue_rent_price\",
						\"$blue_buy_price\", \"$dvd_out\", \"$blue_out\")";
		
		$result = mysqli_query($db,$sql_insert) or die("<h1>Error - Insert Item failed!</h1>\n");  
		
		
		print("<h2>New Item $title Entered to Database</h2>"); 
		
		print ("<form method = \"post\" action = \"admin_movie.php\">\n");
		print ("<input type = \"hidden\" name =\"choice\" value = \"enter_new\" />\n");
		print ("<input type =\"submit\" name=\"which_form\" value = \"Enter Another Movie\" />\n");
		print ("</center>");


	}




?>