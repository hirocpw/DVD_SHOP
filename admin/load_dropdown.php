<?php
	  include("con_movie_db.php");
		
      
	  $director_query = "SELECT * FROM director ORDER BY director_name ASC";
	  $genre_query = "SELECT * FROM genre ORDER BY genre_name ASC";
	  $studio_query = "SELECT * FROM studio ORDER BY studio_name ASC";
	  

	  $result1 = mysqli_query($db,$director_query);
	  $result2 = mysqli_query($db,$genre_query);
	  $result3 = mysqli_query($db,$studio_query);
	  

	  $num_rows_director = mysqli_num_rows($result1);
	  $num_rows_genre = mysqli_num_rows($result2);
	  $num_rows_studio = mysqli_num_rows($result3);
			
			
		$row1 = mysqli_fetch_row($result1);	
		$row2 = mysqli_fetch_row($result2);
		$row3 = mysqli_fetch_row($result3);

?>