<?php

            print("<form method = \"post\" action = \"admin_movie.php\">\n");
			$movie_query = "SELECT * FROM movie ORDER BY title ASC";
			$result0 = mysqli_query($db,$movie_query);
			$num_rows_movie = mysqli_num_rows($result0);
			$row0 = mysqli_fetch_row($result0);
			
			print ("<center>");
			print ("<h3>Please choose the movie you want to update</h3>");
			print("<select name=\"movie_name\">\n");
			for($i = 0; $i <$num_rows_movie; $i++) 
			{       
				print ("<option value = " .$row0[0]. ">".$row0[1]. "</option>\n");
				$row0 = mysqli_fetch_row($result0);
			}
			print("</select>");
			print ("<input type =\"hidden\" name=\"choice\" value =\"edit_movie_db\" />");
			print ("<center><input type=\"submit\" name=\"which_form\" value=\"Edit Movie\" /></center>");
			print ("</center>");



?>