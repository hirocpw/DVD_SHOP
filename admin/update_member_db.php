<?php
$member_id = $_POST["member_id"];

if($_POST["db_action"] == "Delete Member") {
	print ("<center>");
    		
	$query = "DELETE FROM member WHERE member_id = $member_id"; 
	$result = mysqli_query($db,$query) or die("<h1>Error - Delete Buyer failed!</h1>\n");  
	print("<h2>Movie $member_id Deleted from Database</h2>"); 

	print ("<form method = \"post\" action = \"admin_movie.php\">\n");
	print ("<input type = \"hidden\" name =\"choice\" value = \"delete_edit_member\" />\n");
	print ("<input type =\"submit\" name=\"which_form\" value = \"Edit Another Member\" />\n");
	print ("</form>\n");

	print ("</center>");
}
else
{
$surname = $_POST["surname"];
$othername = $_POST["other_name"];

$street = $_POST["street"];
$suburb= $_POST["suburb"];
$postcode = $_POST["postcode"];

$password = $_POST["password"];
$occupation = $_POST["occupation"];
	
if(!is_numeric($postcode))
		print ("<h3>Please enter numbers </h3>Use the back button on your browser to fix this oversight.");
	else
  if($surname == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if($othername == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if($street == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if($suburb == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
 else
  if($password == "")
     print ("<h3>Cannot be blank!</h3>Use the back button on your browser to fix this oversight.");
else	
	{
		$query = ("UPDATE member SET surname=\"$surname\", other_name=\"$othername\", street=\"$street\", postcode=\"$postcode\", 
					password=\"$password\", occupation=\"$occupation\" 
					WHERE member_id = $member_id");
		$result = mysqli_query($db,$query);
		
		print ("<center>");
		print("<h2>Member $member_id Updated</h2>");
		
		print ("<form method = \"post\" action = \"admin_movie.php\">\n");
		print ("<input type = \"hidden\" name =\"choice\" value = \"delete_edit_member\" />\n");
		print ("<input type =\"submit\" name=\"which_form\" value = \"Edit Another member\" />\n");
		print ("</form>\n");
		print ("</center>");
		
		
		
		
		
		
		
	}
 
 
 
 
 
	
	
	
	
	
	
}



?>