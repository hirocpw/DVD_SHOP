<?php
	$pass = $_POST["passwd"];	
	$username = $_POST["username"];

	
	include("admin/con_movie_db.php");
	$query = "SELECT member_id, password, other_name, surname FROM member WHERE username = \"$username\"";
	$result = mysqli_query($db,$query);
	$row = mysqli_fetch_array($result);
	mysqli_close($db);   
	
	if($row['password'] == $pass) {
		$_SESSION["username"] = $username;
		$_SESSION["name"] = $row[2]." ".$row[3];
		$_SESSION["authorised"] = $row[0];
	}
	else
	{
		print ("<html>\n<head>\n<title> Member system</title>\n</head>\n<body>\n");
		print ("<center><h1>Login in Failed - Incorrect Username/Password Entered.</h1>\n");
		print ("<a href=\"admin_member.php\">Would you like to try again?</a>\n</body>\n</html>\n");
		die();
	}
?>