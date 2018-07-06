<?php

$movie_id = $_POST["movie_name"];
$query = "SELECT * FROM movie WHERE movie_id = $movie_id";
$result0 = mysqli_query($db,$query);
while($row = mysqli_fetch_assoc($result0))
{
$id = $row["movie_id"];
$title = $row["title"];
$year = $row["year"];
$tag_line = $row["tagline"];
$url = $row['thumbpath'];
$dvd_stock = $row["numDVD"];
$dvd_rent_price = $row["DVD_rental_price"];
$dvd_buy_price = $row["DVD_purchase_price"];

$blue_stock = $row["numBluRay"];
$blue_rent_price = $row["BluRay_rental_price"];
$blue_buy_price = $row["BluRay_purchase_price"];
}
print ("<center><h2 style = \"color: white\"> Update Movie</h2></center>"); 
print ("<form method = \"post\" action = \"admin_movie.php\">\n");
print ("<img src='img/".$url."' height='200' width='150'/><br>");
print "<table align=\"center\" width = \"600\" style = \"color: white\">\n";
print ("<tr>\n<td align=\"right\">Movie ID: </td>\n<td>");
print ("<input type=\"text\" name=\"id\" size=\"30\" value=\"$id\" disabled=\"true\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Movie Title: </td>\n<td>");
print ("<input type=\"text\" name=\"title\" size=\"30\" value=\"$title\" disabled=\"true\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Year: </td>\n<td>");
print ("<input name=\"year\" size=\"5\" maxlength=\"4\" value=\"$year\" disabled=\"true\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Tag line: </td>\n<td>");
print ("<input name=\"tag_line\" size=\"50\" value=\"$tag_line\" disabled=\"true\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">DVD stock: </td>\n<td>");
print ("<input name=\"dvd_stock\" size=\"50\" value=\"$dvd_stock\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">DVD rental price: </td>\n<td>");
print ("<input name=\"dvd_rent_price\" size=\"50\" value=\"$dvd_rent_price\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">DVD purchase price: </td>\n<td>");
print ("<input name=\"dvd_buy_price\" size=\"50\" value=\"$dvd_buy_price\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">BlueRay stock: </td>\n<td>");
print ("<input name=\"blue_stock\" size=\"50\" value=\"$blue_stock\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">BlueRay rental price: </td>\n<td>");
print ("<input name=\"blue_rent_price\" size=\"50\" value=\"$blue_rent_price\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">BlueRay purchase price: </td>\n<td>");
print ("<input name=\"blue_buy_price\" size=\"50\" value=\"$blue_buy_price\"/></td>\n</tr>\n");

print ("</table><br />\n");
print ("<center><input type=\"submit\" name=\"db_action\" value=\"Submit\" />\n");
print ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
print ("<input type = \"submit\" name = \"db_action\" value=\"Delete Movie\">\n");
print ("<input type =\"hidden\" name=\"movie_id\" value =\"$id\" />");
print ("<input type =\"hidden\" name=\"action\" value =\"update_movie\" />");
print "</center>";
print ("</form>");








?>