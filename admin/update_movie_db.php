<?php
$movie_id=$_POST["movie_id"];


if($_POST["db_action"] == "Delete Movie") {
	print ("<center>");
    		
	$query = "DELETE FROM movie WHERE movie_id = $movie_id"; 
	$result = mysqli_query($db,$query) or die("<h1>Error - Delete Buyer failed!</h1>\n");  
	print("<h2>Movie $movie_id Deleted from Database</h2>"); 

	print ("<form method = \"post\" action = \"admin_movie.php\">\n");
	print ("<input type = \"hidden\" name =\"choice\" value = \"delete_edit_movie\" />\n");
	print ("<input type =\"submit\" name=\"which_form\" value = \"Edit Another Movie\" />\n");
	print ("</form>\n");

	print ("</center>");
}
else
{
	
$dvd_stock = $_POST["dvd_stock"];
$dvd_rent_price = $_POST["dvd_rent_price"];
$dvd_buy_price = $_POST["dvd_buy_price"];;

$blue_stock = $_POST["blue_stock"];;
$blue_rent_price = $_POST["blue_rent_price"];;
$blue_buy_price = $_POST["blue_buy_price"];;

	if(!is_numeric($dvd_stock))
		print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else 
		if(!is_numeric($dvd_rent_price))
			print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else 
		if(!is_numeric($dvd_rent_price))
			print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else 
		if(!is_numeric($dvd_buy_price))
			print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else 
		if(!is_numeric($blue_stock))
			print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else 
		if(!is_numeric($blue_rent_price))
			print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else 
		if(!is_numeric($blue_buy_price))
			print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	
	else
	{
		$query = ("UPDATE movie SET numDVD=\"$dvd_stock\", DVD_rental_price=\"$dvd_rent_price\", DVD_purchase_price=\"$dvd_buy_price\",
					numBluRay=\"$blue_stock\",BluRay_rental_price=\"$blue_rent_price\",BluRay_purchase_price=\"$blue_buy_price\"
					WHERE movie_id = $movie_id");
		
		$result = mysqli_query($db,$query);
		
		print ("<center>");
		print("<h2>Movie $movie_id Updated</h2>");
		
		print ("<form method = \"post\" action = \"admin_movie.php\">\n");
		print ("<input type = \"hidden\" name =\"choice\" value = \"delete_edit_movie\" />\n");
		print ("<input type =\"submit\" name=\"which_form\" value = \"Edit Another Movie\" />\n");
		print ("</form>\n");
		print ("</center>");		
		
	}
}





?>