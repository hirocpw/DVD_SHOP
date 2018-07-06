<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>City DVD eShop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<link href="css/styles_CA6.css" rel="stylesheet" type="text/css">
	<script type = "text/javascript" src = "scripts/form_validation.js"></script>
	
</head>
<body>
		<!--Side bar, for Navigation-->
		<div class = "sidebar">
			<img src = "img/head.jpg" class="DoctorStrange" width="900" height="140" alt="" />
			<h1 class="welcome">Welcome to<br>City DVD eShop</h1>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="Movies.php">Movies</a></li>
				<li><a href="TechZone.html">TechZone</a></li>
				<li><a class="active" href="JoinUs.php">JoinUs</a></li>
				<li><a href="Contact.html">Contact</a></li>
			</ul>
		</div>
		<!--content-container-->
		<div class= "conten-container">
				<h1 class = "title">The City DVD Shop</h1>
				<h2 class = "title">Join Us</h2>
				
				<div>
				<?php
            //If the access method was post then process the form
				if(isset($_POST['submit'])){
               
               //For DEBUG
               print "<h2>POST result</h2>";
               $formdata = $_POST;
               foreach ($formdata as $element => $value)
                print "$element : $value <br />\n";
                   
               print "<h2>Status</h2>";
               include_once 'php_includes/validateUser.php';
               if(ValidateUserForm($_POST)) { // all entered data good
                  include_once 'php_includes/createUser.php';
                  $queryResult = createUser($_POST); // add time to this    
                  //See if the creation worked.
                  if($queryResult['succeeded']){
                     //Success message
                     print "<p class = 'centre'>Congratulations $_POST[othername] 
                            you have successfully signed up at the DVD Emporium and can 
                            now book movies!<br><a href='Movies.php'>Would you like to
                            go to the MovieZone page and Log In?</a></p>";

                  }
                  else {
                     //Failure message
                     print "<p class = 'centre'>There was a database failure while 
                           creating your user account. Please contact the site administrator.
                           </p> <p class = 'centre'>Error message: $queryResult[error]</p>";
                  }
               } 
            }
            else
                include 'html_includes/join_form.inc';                  
         ?>

		</div>

		</div>
		
       <div id ="footer">
       <a href="http://infotech.scu.edu.au/~pchen12" target="_blank">http://infotech.scu.edu.au/~pchen12</a><br>
       Copyright Pengwei Chen &copy; 2016
       
       </div>



</body>
</html>