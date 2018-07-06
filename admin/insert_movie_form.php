<?php
print("<center><h2 style = \"color: white\"> Add New Movie</h2></center>"); 

print("<!-- post form data to shop_admin.php -->\n");
print("<form method = \"post\" enctype=\"multipart/form-data\" action = \"admin_movie.php\">\n");

print "<table align=\"center\" width = \"600\" style = \"color: white\">\n";
print ("<tr>\n<td align=\"right\">Movie Title: </td>\n<td>");
print ("<input type=\"text\" name=\"title\" size=\"30\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Year: </td>\n<td>");
print ("<input name=\"year\" size=\"5\" maxlength=\"4\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Tag line: </td>\n<td>");
print ("<textarea name=\"tag_line\" rows=\"3\" cols=\"39\"></textarea></td>\n");

print ("<tr>\n<td align=\"right\">Plot: </td>\n<td>");
print ("<textarea name=\"plot\" rows=\"5\" cols=\"39\"></textarea></td>\n");

include("load_dropdown.php"); 
print ("<tr>\n<td align=\"right\">Director: </td>\n<td>");
print("<select name=\"director_name\">\n");
			for($i = 0; $i <$num_rows_director; $i++) 
			{       
				print ("<option value = " .$row1[0]. ">".$row1[1]. "</option>\n");
				$row1 = mysqli_fetch_row($result1);
			}
print("</select>");

print ("<tr>\n<td align=\"right\">Or enter new director: </td>\n<td>");
print ("<input type=\"text\" name=\"director_name_new\" size=\"30\"/></td>\n</tr>\n");


print ("<tr>\n<td align=\"right\">Studio: </td>\n<td>");
print("<select name=\"studio_name\">\n");
			for($i = 0; $i <$num_rows_studio; $i++) 
			{       
				print ("<option selected=\"selected\" value = " .$row1[0]. ">".$row1[1]. "</option>\n");
				$row1 = mysqli_fetch_row($result3);
			}
print("</select>");

print ("<tr>\n<td align=\"right\">Or enter new studio: </td>\n<td>");
print ("<input type=\"text\" name=\"studio_name_new\" size=\"30\"/></td>\n</tr>\n");


print ("<tr>\n<td align=\"right\">Genre: </td>\n<td>");
print("<select name=\"genre_name\">\n");
			for($i = 0; $i <$num_rows_genre; $i++) 
			{       
				print ("<option selected=\"selected\" value = " .$row1[0]. ">".$row1[1]. "</option>\n");
				$row1 = mysqli_fetch_row($result2);
			}
print("</select>");


print ("<tr>\n<td align=\"right\">Classification: </td>\n<td>");
print("<select name=\"classification\">\n");
			print ("<option value = 'G'>G</option>\n");
			print ("<option value = 'M'>M</option>\n");
			print ("<option value = 'MA'>MA</option>\n");
			print ("<option value = 'PG'>PG</option>\n");
			print ("<option value = 'R'>R</option>\n");
print("</select>"); 

print ("<tr>\n<td align=\"right\">Rental Period: </td>\n<td>");
print("<select name=\"rental_period\">\n");
			print ("<option value = '3 Day'>3 Day</option>\n");
			print ("<option value = 'Weekly'>Weekly</option>\n");

print("</select>"); 


print ("<tr>\n<td align=\"right\">DVD stock: </td>\n<td>");
print ("<input name=\"dvd_stock\" size=\"50\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">DVD rental price: </td>\n<td>");
print ("<input name=\"dvd_rent_price\" size=\"50\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">DVD purchase price: </td>\n<td>");
print ("<input name=\"dvd_buy_price\" size=\"50\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">DVD Out: </td>\n<td>");
print ("<input name=\"dvd_out\" size=\"50\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">BlueRay stock: </td>\n<td>");
print ("<input name=\"blue_stock\" size=\"50\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">BlueRay rental price: </td>\n<td>");
print ("<input name=\"blue_rent_price\" size=\"50\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">BlueRay purchase price: </td>\n<td>");
print ("<input name=\"blue_buy_price\" size=\"50\"/></td>\n</tr>\n");	

print ("<tr>\n<td align=\"right\">BlueRay Out: </td>\n<td>");
print ("<input name=\"blue_out\" size=\"50\" /></td>\n</tr>\n");		
			

print ("</table><br />\n");
print ("<center><input type=\"submit\" name=\"db_action\" value=\"Submit\" />");
print ("<input type =\"hidden\" name=\"action\" value =\"insert_movie\" />");
print ("<input type =\"hidden\" name=\"img\" value =\"1250744226twilight\" />");
print ("<input type=\"hidden\" name=\"submitted\" value=\"true\" />");
print ("<input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"2000000\" />");	

print ("</form>");
?>