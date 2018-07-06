<?php
// first authorise user - else give them the boot!

if($_COOKIE["passwd"] == "webdev2")
 {
       // authorised - now to chose what to do?
       print ("<!-- post form data to admin_movie.php -->\n");
       print ("<form method = \"post\" action = \"admin_movie.php\">\n");
       print ("<center><h3 style = \"color: white\">\n");
       print ("Hi ".$_COOKIE["user"]." what would you like to do?</h3>\n");
       print ("<table align=\"center\" width =\"200\" border =\"0\" style = \"color: white\">\n");
       print ("<tr>\n<td><input type=\"radio\" name=\"choice\" value=\"enter_new\"  checked /></td><td align=\"left\"><b>Enter a New Movie</b></td>\n");
       print ("<tr>\n<td><input type=\"radio\" name=\"choice\" value=\"delete_edit_movie\"  /></td><td align=\"left\"><b>Edit/Delete a Movie</b></td>\n");
	   print ("<tr>\n<td><input type=\"radio\" name=\"choice\" value=\"delete_edit_member\"  /></td><td align=\"left\"><b>Delete/Edit a Member</b></td>\n");
	   print ("<tr>\n<td><input type=\"radio\" name=\"choice\" value=\"log_out\"  /></td><td align=\"left\"><b>Log Out</b></td>\n");
       print ("</table><br />\n");

      print ("<input type=\"submit\" name=\"which_form\" value=\"Submit\" /></center>\n");
      print ("</form>\n");
  }
else
 { 
       print ("<center>\n<h3 style = \"color: blue\">$user you are not authorised to view this page</h3>\n");
       print ("<a href=\"admin_movie.php\">Would you like to try again?</a>\n"); 
       print ("</center>");
  }  
?>