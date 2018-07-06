<?php
$member_id = $_POST["member_name"];
$query = "SELECT * FROM member WHERE member_id = $member_id";
$result0 = mysqli_query($db,$query);
while($row = mysqli_fetch_assoc($result0))
{
$id = $row["member_id"];
$surname = $row["surname"];
$othername = $row["other_name"];
$contact_method = $row["contact_method"];
$email = $row['email'];
$mobile = $row["mobile"];
$street = $row["street"];
$suburb= $row["suburb"];
$postcode = $row["postcode"];
$username = $row["username"];
$password = $row["password"];
$occupation = $row["occupation"];
}
print ("<center><h2 style = \"color: white\"> Update Member</h2></center>"); 
print ("<form method = \"post\" action = \"admin_movie.php\">\n");
print "<table align=\"center\" width = \"600\" style = \"color: white\">\n";
print ("<tr>\n<td align=\"right\">Member ID: </td>\n<td>");
print ("<input type=\"text\" name=\"id\" size=\"30\" value=\"$id\" disabled=\"true\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Email: </td>\n<td>");
print ("<input type=\"text\" name=\"email\" size=\"30\" value=\"$email\" disabled=\"true\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Surname: </td>\n<td>");
print ("<input name=\"surname\" size=\"50\" value=\"$surname\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Othername: </td>\n<td>");
print ("<input name=\"other_name\" size=\"50\" value=\"$othername\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Occupation: </td>\n<td>");
print("<select name=\"occupation\">\n");
			print ("<option value='Student'>Student</option>\n");
			print ("<option value='Manager'>Manager</option>\n");
			print ("<option value='Healthcare'>Medical worker</option>\n");
			print ("<option value='Trades'>Trades worker</option>\n");
			print ("<option value='Educatoin'>Education</option>\n");
			print ("<option value='Clerical'>Clerical</option>\n");
			print ("<option value='Technician'>Technician</option>\n");
			print ("<option value='Retail'>Retail worker</option>\n");
			print ("<option value='Researcher'>Researcher</option>\n");
			print ("<option value='Other'>Other</option>\n");			
print("</select>"); 

print ("<tr>\n<td align=\"right\">Street: </td>\n<td>");
print ("<input name=\"street\" size=\"50\" value=\"$street\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Suburb: </td>\n<td>");
print ("<input name=\"suburb\" size=\"50\" value=\"$suburb\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Postcode: </td>\n<td>");
print ("<input name=\"postcode\" size=\"10\" maxlength=\"4\" value=\"$postcode\"/></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Username: </td>\n<td>");
print ("<input name=\"username\" size=\"50\" value=\"$username\" disabled=\"true\" /></td>\n</tr>\n");

print ("<tr>\n<td align=\"right\">Password: </td>\n<td>");
print ("<input name=\"password\" size=\"50\" value=\"$password\"/></td>\n</tr>\n");

print ("</table><br />\n");
print ("<center><input type=\"submit\" name=\"db_action\" value=\"Submit\" />\n");
print ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
print ("<input type = \"submit\" name = \"db_action\" value=\"Delete Member\">\n");
print ("<input type =\"hidden\" name=\"member_id\" value =\"$id\" />");
print ("<input type =\"hidden\" name=\"action\" value =\"update_member\" />");
print "</center>";
print ("</form>");








?>